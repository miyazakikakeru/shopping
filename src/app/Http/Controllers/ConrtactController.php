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
        $items = DB::table('product')->get();
        return view('home/home',['inputs'=>$inputs,'items'=>$items]);
    }
    public function detail(Request $request){
        $inputs = $request->all();
        return view('home/detail',$inputs);
    }
    public function confirm(Request $request){
        $inputs = $request->all();
        return view('home/confirm',$inputs);
    }
}