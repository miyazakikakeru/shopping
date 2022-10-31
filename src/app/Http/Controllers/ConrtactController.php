<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('home',$inputs);
    }
    public function search(Request $request){
        $inputs = $request->all();
        return view('search',$inputs);
    }
    public function detail(Request $request){
        $inputs = $request->all();
        return view('detail',$inputs);
    }
}
