<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Product;
use App\Models\UserArchive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\component;
use App\Http\Requests\AdminLoginRequest;


class AdminController extends Controller
{
    public function login(Request $request){
        $Admin = Admin::where('id',$request->session()->get('id'))
        ->where('password',$request->session()->get('password'))
        ->first();
        if(!empty($Admin)){
            return redirect('/admin/home');
        }
        return view('admin.adminlogin');
    }
    public function check(AdminLoginRequest $request){
        $request->session()->put('id',$request->id);
        $request->session()->put('password',$request->password);
        return redirect('/admin/home')->with('success','ログインが完了しました');
    }
    public function home(Request $request){
        return view('admin.adminhome');
    }
    public function InProduct(Request $request){
        return view('admin.insert');
    }
    public function DelProduct(Request $request){
        return view('admin.delete');
    }
    public function DelAdmin(Request $request){
        return view('admin.adminDel');
    }
    public function InAdmin(Request $request){
        return view('admin.adminIn');
    }
    public function archiveView(Request $request){
        return view('admin.archive');
    }
}