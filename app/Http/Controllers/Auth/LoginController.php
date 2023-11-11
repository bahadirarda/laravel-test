<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // Normal kullanıcılar için yönlendirme yolu
    //protected $redirectTo = RouteServiceProvider::HOME;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Kullanıcı başarıyla giriş yaptıktan sonra çağrılacak
    protected function authenticated(Request $request, $user)
    {
        // Kullanıcı admin rolüne sahipse, admin sayfasına yönlendir
        if ($user->hasRole('admin')) {
            return redirect('/admin');
        }

        // Değilse, standart yönlendirme yolunu kullan
        return redirect($this->redirectTo);
    }

//     protected function validateLogin(Request $request)
// {
//     $this->validate($request, [
//         $this->username() => 'required|string',
//         'password' => 'required|string',
//         'g-recaptcha-response' => 'required|captcha'
//     ]);
// }

}
