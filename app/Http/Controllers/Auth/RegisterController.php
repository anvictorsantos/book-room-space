<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Exibe o formulário de registro.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');  // Retorna a view do formulário de registro
    }

    /**
     * Processa o registro de um novo usuário.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // Valida os dados de entrada (nome, email, senha)
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Cria um novo usuário no banco de dados
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Disparar o evento de registro e enviar o e-mail de verificação
        event(new Registered($user));

        // Redirecionar para uma página de sucesso ou instruções
        return redirect()->route('verification.notice');
    }

    /**
     * Define para onde o usuário será redirecionado após o registro.
     *
     * @return string
     */
    protected function redirectTo()
    {
        return route('home'); // Redireciona para a página inicial após o registro
    }
}
