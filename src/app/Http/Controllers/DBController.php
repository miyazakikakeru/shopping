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
    public function productInsert(Request $request){
        $Product = new Product();
        $Product->fill($request->all())->save();
        return redirect('/admin/home');
    }
    public function productDelete(Request $request){
        Product::where('name',$request->deleteName)->where('id',$request->deleteId)->delete();
        return redirect('/admin/home');
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
    public function InUser(Request $request){
        $User = new User();
        $User->fill($request->all())->save();
        return redirect('/');
    }
}