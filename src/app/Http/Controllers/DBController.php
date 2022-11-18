<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Product;
use App\Http\Requests\admin\AdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    public function InProduct(Request $request){
        $Product = new Product();
        $Product->fill($request->all())->save();
        return redirect('/admin/home');
    }
    public function DelProduct(Request $request){
        Product::where('name',$request->deleteName)->where('id',$request->deleteId)->delete();
        return redirect('/admin/home');
    }
    public function InAdmin(Request $request){
        $Admin = new Admin();
        $Admin->fill($request->all())->save();
        return redirect('/admin/home');
    }
    public function DelAdmin(Request $request){
        Admin::where('id',$request->id)->delete();
        return redirect('/admin/home');
    }
    public function InUser(Request $request){
        $User = new User();
        $User->fill($request->all())->save();
        return redirect('/');
    }
}