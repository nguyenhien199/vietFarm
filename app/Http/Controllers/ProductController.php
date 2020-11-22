<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $product = Products::where('status', 1)->latest()->take(2)->get();
        return view('web.product' , ['product' => $product]);
    }

    public function getDetail()
    {
        return view('web.product-detail');
    }
}
