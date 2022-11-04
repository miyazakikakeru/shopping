<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ConrtactRequest;
use App\Http\Controllers\component;
use App\Mail\ContactThanks;
class ConrtactController extends Controller
{
    public function index(){
        return view('input');
    }

    public function check(ConrtactRequest $request){
        $inputs = $request->all();
        return view('check', $inputs);
    }
    public function home(Request $request){
        $inputs = $request->all();
        return view('home/home',$inputs);
    }
    public function search(Request $request){
        $inputs = $request->all();
        return view('home/search',$inputs);
    }
    public function detail(Request $request){
        $inputs = $request->all();
        return view('home/detail',$inputs);
    }
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
        ];
        DB::table('product')->insert($param);
        $items = DB::table('product')->get();
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