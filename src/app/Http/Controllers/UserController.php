<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\user\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ConrtactRequest;
use App\Http\Controllers\component;
use App\Mail\ContactThanks;
class UserController extends Controller
{
    public function index(){
        return view('input');
    }

    public function check(Request $request){
        $inputs = $request->all();
        $request->session()->put('mail_address',$request->mail_address);
        $request->session()->put('password',$request->password);
        return view('check', $inputs);
    }
    public function InUser(Request $request){
        $User = new User();
        $a=[
            'name'=>$request->name,
            'mail_address'=>$request->mail_address,
            'password'=>$request->password,
        ];
        $User->fill($a)->save();
        return redirect('/');
    }
    public function Register(Request $request){
        return view('Register');
    }
    public function home(Request $request){
        $inputs = $request->all();
        $items = DB::table('product')->get();
        return view('home/home',['inputs'=>$inputs,'items'=>$items]);
    }
    public function detail(Request $request){
        $inputs = $request->all();
        return view('home/detail',$inputs);
    }
    public function confirm(Request $request){
        $inputs = $request->all();
        return view('home/confirm',$inputs);
    }
}