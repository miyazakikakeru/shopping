<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

    public function Register(Request $request){
        if(count(User::where('mail_address',$request->session()->get('mail_address'))->where('password',$request->session()->get('password'))->get())>0){
            return redirect('/home');
        }
        return view('Register');
    }
    public function home(Request $request){
        $items = Product::get();
        return view('home/home',['items'=>$items]);
    }

    public function target(Request $request){
        $items = Product::query();
        if(empty($request->man)||empty($request->girl)){
            if(!empty($request->man)){
                $items=$items->where('gender',$request->man);
            }
            if(!empty($request->girl)){
                $items=$items->where('gender',$request->girl);
            }
        }
        if(!empty($request->moneyMin)){
            $items=$items->where('price','>=',$request->moneyMin);
        }
        if(!empty($request->moneyMax)){
            $items=$items->where('price','<=',$request->moneyMax);
        }
        if(empty($request->new)||empty($request->old)){
            if(!empty($request->new)){
                $items=$items->where("condition","$request->new");
            }
            if(!empty($request->old)){
                $items=$items->where("condition","$request->old");
            }
        }
        $items=$items->get();
        return view('home/home',['items'=>$items]);
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