<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if(empty($request->session()->get('mail_address'))){
            return redirect('/')->withErrors('ログインしてください');
        }
        $User=User::where('mail_address',$request->session()->get('mail_address'))->first();
        if(empty($User)){
            return redirect('/')->withErrors('このメールアドレスは登録されていません');
        }
        if($User->password!=$request->session()->get('password')){
            return redirect('/')->withErrors('パスワードが一致しません');
        }
        return $next($request);
    }
}
