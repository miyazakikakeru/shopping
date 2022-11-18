<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\InUserRequest;
use App\Http\Requests\DelAdminRequest;
use App\Http\Requests\InAdminRequest;
use App\Http\Requests\InProductRequest;
use App\Http\Requests\DelProductRequest;



class DBController extends Controller
{
    public function InProduct(InProductRequest $request){
        $Product = new Product();
        $Product->fill($request->all())->save();
        return redirect('/admin/home');
    }
    public function DelProduct(DelProductRequest $request){
        Product::where('name',$request->deleteName)->where('id',$request->deleteId)->delete();
        return redirect('/admin/home');
    }
    public function InAdmin(InAdminRequest $request){
        $Admin = new Admin();
        $Admin->fill($request->all())->save();
        return redirect('/admin/home');
    }
    public function DelAdmin(DelAdminRequest $request){
        Admin::where('id',$request->id)->delete();
        return redirect('/admin/home');
    }
    public function InUser(InUserRequest $request){
        $User = new User();
        $User->fill($request->all())->save();
        return redirect('/');
    }
}