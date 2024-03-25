<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class cookieController extends Controller
{
    public function createcookie(Request $request){
        $cookiename= $request->input('cookiename');
        Cookie::queue('cookiename',$cookiename,40000);
        return redirect()->back();
    }
}
