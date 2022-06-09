<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
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
        $users = User::where('admin', false)->paginate(20);
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
            'phone' => ['required', 'numeric', 'digits:11', 'unique:users'],
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(User $user)
    {
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
            'phone' => ['required', 'numeric', 'digits:11', Rule::unique('users')->ignore($user->id)],
        ]);

        if ($request->has('vip'))
            $data['vip'] = true;

        if (!! $request->password) {
            $request->validate([
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);

            $data['password'] = $request->password;
        }

        $user->update($data);

        alert('عملیات موفقیت آمیز بود','کاربر با موفقیت ویرایش شد', 'success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
        dd($user);
        $user->delete();

        alert('عملیات موفقیت آمیز بود','کاربر با موفقیت ویرایش شد', 'success');
        return back();
    }
}
