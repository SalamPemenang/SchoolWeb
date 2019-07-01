<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

class CaptchaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('auth/login-withCaptcha');
    }

    public function captchaValidate(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
            'captcha' => 'required|captcha'
        ]);

         $attempts = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($attempts, (bool) $request->remember)) {
              return redirect()->route('home');  
        }else{

        }
        

          return redirect()->back();
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }


}
