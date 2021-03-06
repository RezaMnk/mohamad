<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users = User::query()->where('admin', false);

        $users = $this->search_filter($users)->latest()->paginate(20);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'regex:/^09[0|1|2|3][0-9]{8}$/', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($request->has('vip'))
            $data['vip'] = true;

        $data['verified'] = true;

        $user = User::create($data);

        alert('عملیات موفقیت آمیز بود','کاربر با موفقیت به لیست کاربران افزوده شد', 'success');
        return redirect()->route('admin.users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param User $user
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Request $request, User $user)
    {
        $request->session()->flash('redirect_url', $request->headers->get('referer'));

        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'regex:/^09[0|1|2|3][0-9]{8}$/', Rule::unique('users')->ignore($user->id)],
        ]);

        if ($request->has('vip'))
            $data['vip'] = true;
        else
            $data['vip'] = false;

        if (!! $request->password) {
            $request->validate([
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
        }

        $user->update($data);

        alert('عملیات موفقیت آمیز بود','کاربر با موفقیت ویرایش شد', 'success');
        return redirect($request->session()->get('redirect_url'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
        $user->delete();

        alert('عملیات موفقیت آمیز بود','کاربر با موفقیت ویرایش شد', 'success');
        return back();
    }


    /**
     * filter with search param
     *
     * @param $users
     * @return mixed
     */
    public function search_filter($users)
    {
        if ($keyword = request('search')) {
            $users->where('name', 'LIKE', "%$keyword%")->orWhere('phone', 'LIKE', "%$keyword%");
        }

        return $users;
    }


    /**
     * Display a listing of the vip users.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function vip_users()
    {
        $users = User::query()->where('admin', false)->where('vip', true);

        $users = $this->search_filter($users)->latest()->paginate(20);
        return view('admin.users.index', compact('users'));
    }


    /**
     * Display a listing of the non-zarin users.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function unapproved()
    {
        $users = User::query()->where('admin', false)->where('zarin', false);

        $users = $this->search_filter($users)->latest()->paginate(20);
        return view('admin.users.index', compact('users'));
    }

}
