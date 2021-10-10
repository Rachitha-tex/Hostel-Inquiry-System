<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CarouselImage;
use App\Models\Hostel;

class HomeController extends Controller
{
    public function home(){
        $data=CarouselImage::all();
        $datanew=Hostel::all();

        return view('home',compact('data'),compact('datanew'));
    }
  
    public function redirects(){
        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.adminhome');
        }else{
            return view('home');
        }
    }
    public function contactus(){
        return view('contactus');
    }
    
}
