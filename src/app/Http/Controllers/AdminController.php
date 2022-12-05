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
        if(!empty(Admin::where('id',$request->session()->get('id'))->first())){
            return redirect('/admin/home');
        }
        return view('admin.adminlogin');
    }
    public function check(AdminLoginRequest $request){
        $request->session()->put('id',$request->id);
        $request->session()->put('password',$request->password);
        return redirect('/admin/home');
    }
    public function home(Request $request){
        $products = Product::all();
        $admins = Admin::all();
        $Users = User::all();
        return view('admin.adminhome',['products'=>$products,'admins'=>$admins,'Users'=>$Users]);
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
        $UserArchive = UserArchive::all();
        return view('admin.archive',['UserArchive'=>$UserArchive]);
    }
}