<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\component;
use App\Mail\ContactThanks;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\NewPasswordRequest;
use App\Http\Requests\NewNameRequest;

class UserController extends Controller
{
    public function index(Request $request){
        $User = User::where('mail_address',$request->session()->get('mail_address'))
        ->where('password',$request->session()->get('password'))
        ->first();
        if(!empty($User)){
            return redirect('/home');
        }
        return view('home/input');
    }
    public function UserLogin(UserLoginRequest $request){
        $request->session()->put('mail_address',$request->mail_address);
        $request->session()->put('password',$request->password);
        return redirect('/home')->with('success','ログインが完了しました');
    }
    public function UserLogout(Request $request){
        $request->session()->forget('mail_address');
        $request->session()->forget('password');
        return redirect('/')->with('success','ログアウトが完了しました');
    }
    public function Register(Request $request){
        if(count(User::where('mail_address',$request->session()->get('mail_address'))->where('password',$request->session()->get('password'))->get())>0){
            return redirect('/home');
        }
        return view('home/Register');
    }
    public function home(Request $request){
        $items = Product::all();
        $searchRequest = [
            'moneyMin' => "" ,
            'moneyMax' => "" ,
            'man' => false,
            'girl' => false,
            'new' => false,
            'old' => false,
        ];
        return view('home/home',[
            'items'=>$items ,
            'request' => $searchRequest ,
        ]);
    }
    public function target(Request $request){
        $items = Product::query();
        $searchRequest = [
            'moneyMin' => "" ,
            'moneyMax' => "" ,
            'man' => false,
            'girl' => false,
            'new' => false,
            'old' => false,
        ];
        if(empty($request->man)||empty($request->girl)){
            if(!empty($request->man)){
                $items=$items->where('gender',$request->man);
                $searchRequest['man'] = true;
            }
            if(!empty($request->girl)){
                $items=$items->where('gender',$request->girl);
                $searchRequest['girl'] = true;
            }
        }
        if(!empty($request->moneyMin)){
            $items=$items->where('price','>=',$request->moneyMin);
            $searchRequest['moneyMin'] = $request->moneyMin;
        }
        if(!empty($request->moneyMax)){
            $items=$items->where('price','<=',$request->moneyMax);
            $searchRequest['moneyMax'] = $request->moneyMax;
        }
        if(empty($request->new)||empty($request->old)){
            if(!empty($request->new)){
                $items=$items->where("condition","$request->new");
                $searchRequest['new'] = true;
            }
            if(!empty($request->old)){
                $items=$items->where("condition","$request->old");
                $searchRequest['old'] = true;
            }
        }
        $items=$items->get();
        return view('home/home',[
            'items'=>$items,
            'request' => $searchRequest ,
        ]);
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

    public function NewPassword_Update(NewPasswordRequest $request){
        $User = User::where('mail_address',$request->session()->get("mail_address"))->first();
        $credit = $request->all();
        $User->password = $credit['password'];
        $User->save();
        return $this->UserProfile($request);
    }
    public function NewName_Update(NewNameRequest $request){
        $User = User::where('mail_address',$request->session()->get("mail_address"))->first();
        $credit = $request->all();
        $User->name = $credit['name'];
        $User->save();
        return $this->UserProfile($request);
    }
}