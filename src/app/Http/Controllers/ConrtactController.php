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
        $inputs = $request->all();
        $items = DB::table('product')->get();
        return view('admin.adminhome',['inputs'=>$inputs,'items'=>$items]);
    }

    public function productInsert(Request $request){
        $inputs = $request->all();
        $param=[
            'id'=> $request->id,
            'name'=> $request->name,
            'explanation' => $request->explanation,
        ];
        DB::table('product')->insert($param);
        $tmp = $this->adminhome($request);
        return $tmp;
    }

    public function productDelete(Request $request){
        $inputs = $request->all();
        DB::table('product')->where('name',$request->deleteName)->where('id',$request->deleteId)->delete();
        $tmp = $this->adminhome($request);
        return $tmp;
    }



}