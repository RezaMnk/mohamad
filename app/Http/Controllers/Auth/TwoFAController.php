<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\TwoFA;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class TwoFAController extends Controller
{
    public function index()
    {
        session()->reflash();
        //TODO send 2fa code
        return view('auth.verify');
    }

    /**
     * Check two factor auth for user
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function check(Request $request)
    {
        $this->checkSessionData();

        $request->validate([
            'code' => ['required', 'numeric', 'digits:4'],
        ]);

        $user = User::findOrFail(session()->get('user.user_id'));

        $status = TwoFA::verifyCode($request->code, $user);

        if ($status) {

            auth()->loginUsingId($user->id, session()->get('user.user_id'));

            $user->TwoFA()->delete();

            return redirect()->route('home');
        }

        return back()->with('error', 'You entered wrong code.');
    }

    /**
     * Resend 2FA code
     *
     * @param Request $request
     * @return void
     */
    public function resend(Request $request)
    {
        $code = $this->generate2FA();

        //TODO resend 2fa code
    }

    /**
     * Generate 2FA code
     *
     * @return RedirectResponse|int
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function generate2FA()
    {
        $this->checkSessionData();

        $user = User::findOrFail(session()->get('user.user_id'));

        if ($TwoFACode = $this->getAliveCode($user)) {
            $code = $TwoFACode->code;
        } else {
            do {
                $code = mt_rand(1000, 9999);
            } while ($this->checkCodeUnique($user, $code));

            $user->TwoFA()->create([
                'code' => $code,
                'expired_at' => now()->addMinutes(10)
            ]);
        }

        return $code;
    }

    /**
     * Check 2FA code is unique
     *
     * @param $user
     * @param int $code
     * @return bool
     */
    private function checkCodeUnique($user, int $code)
    {
        return !! $user->TwoFA()->whereCode($code)->first();
    }

    private function getAliveCode($user)
    {
        return $user->TwoFA()->where('expired_at', '>', now())->first();
    }

    /**
     * Check if there is no phone number in session, redirect to login
     *
     * @return RedirectResponse|void
     */
    private function checkSessionData()
    {
        if (!session()->has('user_id'))
            return redirect()->route('login');
    }
}
