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
<<<<<<< HEAD
    public function adminlogin(Request $request){
        $inputs = $request->all();
        return view('admin.adminlogin',$inputs);
    }

    public function admincheck(Request $request){
        $inputs = $request->all();
        return view('admin.adminhome',$inputs);
    }

=======
    public function search(Request $request){
        $inputs = $request->all();
        return view('search',$inputs);
    }
    public function detail(Request $request){
        $inputs = $request->all();
        return view('detail',$inputs);
    }
>>>>>>> 967afdeb9b3dac6ef0cc2f3f33e5a4b45374e8fa
}
