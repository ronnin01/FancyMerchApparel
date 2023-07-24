<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PagesController extends Controller
{   
    // INDEX PAGE
    public function indexPage(){
        return view('index');
    }

    // ADMIN DASHBOARD PAGE
    public function adminDashboardPage(){
        return view('admin.dashboard');
    }

    //PRODUCT DETAIL
    public function productDetailPage($id){
        return view('product-detail')->with('product_id', $id);
    }

    // SIGNIN PAGE
    public function signinPage(){
        return view('signin');
    }

    // SIGNUP PAGE
    public function signupPage(){
        return view('signup');
    }

    public function logout(){
        Auth::logout();

        return Redirect::route('home.index');
    }
}
