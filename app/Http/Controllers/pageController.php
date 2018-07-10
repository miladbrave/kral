<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Session;
use Session;

class pageController extends Controller
{
    public function index()
    {
        return view('pages/index');
    }

    public function home()
    {
        return view('pages/home');
    }

    public function gallery()
    {
        return view('pages/gallery');
    }

    public function product()
    {
        return view('pages/product');
    }

    public function shop()
    {
        Session()->flash('flash_message', 'Your are not registered,If you want to use the shop Please register');
        return view('pages/shop');
    }

    public function about()
    {
        return view('pages/about');
    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function test()
    {
        return view('pages/test');
    }
}
