<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ConrtactRequest;
use App\Http\Controllers\component;
use App\Mail\ContactThanks;
class AdminController extends Controller
{
    public function adminlogin(Request $request){
        $inputs = $request->all();
        return view('admin.adminlogin',$inputs);
    }

    public function adminhome(Request $request){
        $items = DB::table('product')->get();
        return view('admin.adminhome',['items'=>$items]);
    }

    public function productInsert(Request $request){
        $param=[
            'id'=> $request->id,
            'name'=> $request->name,
            'explanation' => $request->explanation,
            'price' => $request->price,
            'gender' => $request->gender,
            'condition' => $request->condition,
        ];
        DB::table('product')->insert($param);

        $items = DB::table('product')->get();

        //
        Product::fill($request->all())->save();

        return view('admin.adminhome',['items'=>$items]);
    }

    public function productDelete(Request $request){
        DB::table('product')->where('name',$request->deleteName)->where('id',$request->deleteId)->delete();
        $items = DB::table('product')->get();
        return view('admin.adminhome',['items'=>$items]);
    }

    public function adminInsert(Request $request){
        return view('admin.insert');
    }

    public function adminDelete(Request $request){
        return view('admin.delete');
    }

}