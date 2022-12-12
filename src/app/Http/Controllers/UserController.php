<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\component;
use App\Mail\ContactThanks;
use App\Http\Requests\UserLoginRequest;

class UserController extends Controller
{
    public function index(Request $request){
        if(count(User::where('mail_address',$request->session()->get('mail_address'))->where('password',$request->session()->get('password'))->get())>0){
            return redirect('/home');
        }
        return view('home/input');
    }
    public function UserLogin(UserLoginRequest $request){
        $request->session()->put('mail_address',$request->mail_address);
        $request->session()->put('password',$request->password);
        return redirect('/home');
    }
    public function UserLogout(Request $request){
        $request->session()->forget('mail_address');
        $request->session()->forget('password');
        return redirect('/')->with(['ms'=>'ログアウトが完了しました']);
    }
    public function Register(Request $request){
        if(count(User::where('mail_address',$request->session()->get('mail_address'))->where('password',$request->session()->get('password'))->get())>0){
            return redirect('/home');
        }
        return view('home/Register');
    }
    public function home(Request $request){
        return view('home/home');
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
        $inputs = Product::where('id',$request->get('id'))->first();
        return view('home/detail',['inputs' => $inputs]);
    }
    public function UserProfile(Request $request){
        return view('home/UserProfile');
    }
    public function NewName(Request $request){
        return view('home/NewName');
    }
    public function NewPassword(Request $request){
        return view('home/NewPassword');
    }
}