<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Validator;
use App\Administrator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AccountUpdate;

class AccountController extends Controller
{
    public function login(Request $request)
    {
        return view('admin.account.login');
    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('login')
                ->withErrors($validator)
                ->withInput();
        }
        else
        {
            $email = $request->input('email');
            $password = $request->input('password');

            if ( Auth::guard('admin')->attempt(['email' => $email, 'password' => $password]) )
            {
                $administrator = Administrator::where('email', $email)->first();

                if( $administrator )
                {
                    return redirect()->intended('admin/home');
                }
                else
                {
                    $message = "Ha ocurido un error. Intente nuevamente.";
                }
            }
            else
            {
                $message = "Nombre de usuario o contraseña incorrectos.";
            }
        }

        return view('admin.account.login')->with('message', $message);
    }

    public function logout(Request $request)
    {
        Auth::logout();

    	return redirect()->route('login');
    }

    public function profile()
    {
        return view('admin.account.profile');
    }

    public function update(AccountUpdate $request)
    {
        Auth::guard('admin')->user()->password = bcrypt($request->input('password'));

        if( Auth::guard('admin')->user()->save() ) {
            return redirect()->route('account.my-account')->withSuccess('Cuenta actualizada correctamente.');
        }
    }
}
