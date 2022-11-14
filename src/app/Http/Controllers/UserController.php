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
    public function index(Request $request){
        if(count(User::where('mail_address',$request->session()->get('mail_address'))->where('password',$request->session()->get('password'))->get())>0){
            return redirect('/home');
        }
        return view('input');
    }

    public function check(Request $request){
        $request->session()->put('mail_address',$request->mail_address);
        $request->session()->put('password',$request->password);
        return redirect('/home');
    }
    public function InUser(Request $request){
        $User = new User();
        $User->fill($request->all())->save();
        return redirect('/');
    }
    public function Register(Request $request){
        if(count(User::where('mail_address',$request->session()->get('mail_address'))->where('password',$request->session()->get('password'))->get())>0){
            return redirect('/home');
        }
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