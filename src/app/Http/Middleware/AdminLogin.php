<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminLogin
{
    public function handle(Request $request, Closure $next)
    {
        $Admin = Admin::where('id',$request->session()->get('id'))->first();
        if(empty($Admin)){
                return redirect('/admin')->withErrors('IDが登録されていません');
        }
        if($Admin->password!=$request->session()->get('password')){
            return redirect('/admin')->withErrors('パスワードが一致しません');
        }
        return $next($request);
    }
}
