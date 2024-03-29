<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Rules\Recaptcha;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $this->check_verified($data['phone']);

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'regex:/^09[0|1|2|3][0-9]{8}$/', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['required', 'string'],
            'g-recaptcha-response' => ['required', new Recaptcha],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create($data);
    }

    /**
     * The user has been registered.
     *
     * @param Request $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        auth()->logout();

        session()->flash('user', [
            'user_id' => $user->id,
            'remember' => $request->has('remember')
        ]);

        return redirect()->route('2fa.index');
    }


    /**
     * check if user is not verified delete the user
     *
     * @param $phone
     * @return \Illuminate\Http\RedirectResponse|void
     */
    private function check_verified($phone)
    {
        $user = User::firstWhere('phone', $phone);
        if ($user && !$user->verified) {

            $user->delete();

            return back()->withErrors(['phone' => __('auth.failed')]);
        }
    }
}
