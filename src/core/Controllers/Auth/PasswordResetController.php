<?php

namespace Biologic\Core\Controllers\Auth;

use Biologic\Core\Classes\Renderer;
use Biologic\Core\Classes\Request;
use Biologic\Core\Models\User;

class PasswordResetController
{
    public static function ajaxCheckEmail(Request $request)
    {
        $input = $request->json();

        $user = User::where([
            'email' => $input['email'] ?? '',
            'local_auth' => 1
        ])->first();

        return json(array(
            'success' => empty($user) ? false : true
        ));
    }

    public static function sendResetLink(Request $request)
    {
        $user = User::where('email', $request->input('email'))->first();

        if(!empty($user) && $user->local_auth === 1 && filter_var($request->input('email'), FILTER_VALIDATE_EMAIL)) {

            $time = time();
            $token = hash('sha256', $user->email.$time.'Qu7fa}F2SKBsm)mZ');

            $user->password_reset_token = $token;
            $user->password_reset_timestamp = date("Y-m-d H:i:s", $time);
            $user->save();

            $body = Renderer::render('emails/password-reset.twig', [
                'link' => 'http://'.$_SERVER['HTTP_HOST'].url('/password-reset/'.$token)
            ]);

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            mail(
                $user->email,
                'Biologic password reset',
                $body,
                $headers
            );

            set_flash('success', 'Password reset link sent.');
            return redirect(url('/login'));
        }

        set_flash('error', 'Cannot send password reset link.');
        return redirect(url('/login'));
    }

    public static function getResetLink(Request $request)
    {
        $user = User::where('password_reset_token', $request->route('token'))->first();

        if(empty($user)) {
            set_flash('error', 'Invalid reset token.');
            return redirect(url('/login'));
        }

        $now = time();
        $then = strtotime($user->password_reset_timestamp);
        if($now - $then > 43200) {
            set_flash('error', 'Password reset token expired.');
            return redirect(url('/login'));
        }


        return view('auth/password-reset.twig', ['user' => $user]);
    }

    public static function postResetLink(Request $request)
    {
        $user = User::where('password_reset_token', $request->route('token'))->first();

        if(empty($user)) {
            set_flash('error', 'Invalid reset token.');
            return redirect(url('/login'));
        }

        $now = time();
        $then = strtotime($user->password_reset_timestamp);
        if($now - $then > 43200) {
            set_flash('error', 'Password reset token expired.');
            return redirect(url('/login'));
        }

        if(strlen($request->input('password')) < 6) {
            set_flash('error', 'Please enter a password at least 6 characters long.');
            return view('auth/password-reset.twig', ['user' => $user]);
        }

        if($request->input('password') != $request->input('password_again')) {
            set_flash('error', 'Password fields must match.');
            return view('auth/password-reset.twig', ['user' => $user]);
        }

        $user->password = password_hash($request->input('password'), PASSWORD_BCRYPT);
        $user->password_reset_token = "";
        $user->save();

        set_flash('success', 'Password updated.');
        return redirect(url('/'));
    }
}

