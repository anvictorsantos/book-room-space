<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    /**
     * Redirecionar o usuário após verificar o e-mail.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verify(Request $request)
    {
        $user = Auth::user();

        // Verifique se o link de verificação está correto
        if ($user->hasVerifiedEmail()) {
            return redirect()->route('login')->with('status', 'Seu e-mail já foi verificado.');
        }

        // Marcar o e-mail como verificado
        $user->markEmailAsVerified();

        // Disparar o evento de verificação
        event(new Verified($user));

        // Redirecionar o usuário para a página de login
        return redirect()->route('login')->with('status', 'Seu e-mail foi verificado com sucesso. Por favor, faça login.');
    }
    
    /**
     * Enviar novamente o link de verificação.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resend(Request $request)
    {
        $user = Auth::user();

        // Verifique se o usuário já verificou o e-mail
        if ($user->hasVerifiedEmail()) {
            return redirect()->route('home');
        }

        // Enviar o link de verificação
        $user->sendEmailVerificationNotification();

        // Redirecionar de volta com uma mensagem de sucesso
        return back()->with('resent', true);
    }
}
