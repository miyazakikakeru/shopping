<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Product;
use App\Http\Requests\admin\AdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\component;

class AdminController extends Controller
{
    public function adminlogin(Request $request){
        $inputs = $request->all();
        return view('admin.adminlogin',$inputs);
    }

    public function adminhome(AdminRequest $request){
        $products = Product::all();
        $admins = Admin::all();
        return view('admin.adminhome',['products'=>$products,'admins'=>$admins]);
    }
    public function check(AdminRequest $request){
        return redirect('/admin/home');
    }

    public function productInsert(Request $request){
        $Product = new Product();
        $Product->fill($request->all())->save();
        return redirect('/admin/home');
    }

    public function productDelete(Request $request){
        Product::where('name',$request->deleteName)->where('id',$request->deleteId)->delete();
        return redirect('/admin/home');
    }

    public function adminInsert(Request $request){
        return view('admin.insert');
    }

    public function adminDelete(Request $request){
        return view('admin.delete');
    }
    public function adminDel(Request $request){
        return view('admin.adminDel');
    }
    public function adminIn(Request $request){
        return view('admin.adminIn');
    }
    public function insert(Request $request){
        $Admin = new Admin();
        $Admin->fill($request->all())->save();
        return redirect('/admin/home');
    }
    public function delete(Request $request){
        Admin::where('id',$request->id)->delete();
        return redirect('/admin/home');
    }


}