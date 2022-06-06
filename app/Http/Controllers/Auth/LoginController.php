<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Rules\Recaptcha;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'phone';
    }


    /**
     * Validate the user login request.
     *
     * @param Request $request
     * @return void
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => ['required', 'numeric', 'digits:11'],
            'password' => ['required', 'string'],
            'g-recaptcha-response' => ['required', new Recaptcha],
        ]);
    }

    /**
     * The user has been authenticated.
     *
     * @param Request $request
     * @param mixed $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws ValidationException
     */
    protected function authenticated(Request $request, $user)
    {
        auth()->logout();

        if (!$user->verified) {

            $user->delete();

            return back()->withErrors([$this->username() => __('auth.failed')]);
        }

        session()->flash('user', [
            'user_id' => $user->id,
            'remember' => $request->has('remember')
        ]);

        return redirect()->route('2fa.index');
    }
}
