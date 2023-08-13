<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('layout.product-details');
    }

    public function displayProduct(){
        $products = Products::all();
        return view('User.product-details',compact('products'));
    }

    public function contact(){
        return view('User.contact');
    }

    public function aboutus(){
        return view('User.pages.aboutus');
    }

    public function cart(){
        return view('User.pages.cart');
    }

    public function checkout(){
        return view('User.pages.checkout');
    }

    public function blog(){
        return view('User.Blog.blog');
    }

    public function blogdetails(){
        return view('User.Blog.blog-details');
    }
}
