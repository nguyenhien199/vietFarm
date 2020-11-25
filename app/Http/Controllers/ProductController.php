<?php

namespace App\Http\Controllers;

use App\Models\Categories;
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
        $categories = Categories::where([
            'code' => Categories::CATEGORY_SP,
            'status' => Categories::ACTIVE,
        ])->take(6)->select('id', 'name')->get();
        $products = [];
        foreach ($categories as $category){
            $products[$category->id] = Products::where([
                'category_id' => $category->id,
                'status' => Products::ACTIVE,
            ])->latest()->take(8)->get();
        }
        return view('web.product' , ['products' => $products, 'categories' => $categories]);
    }

    public function show($url)
    {
        $categories = Categories::where([
            'code' => Categories::CATEGORY_SP,
            'status' => Categories::ACTIVE,
        ])->take(6)->select('id', 'name')->get();
        foreach ($categories as $cate){
            $cate->total = Products::where([
                'status' => Products::ACTIVE,
                'category_id' => $cate->id,
            ])->count();
        }
        $product = Products::where([
            'status' => Products::ACTIVE,
            'url' => $url
        ])->first();
        $sp_lienquan = Products::where([
            'status' => Products::ACTIVE,
            'category_id' => $product->category_id
        ])->where('id','!=',$product->id)->take(6)->get();
        return view('web.product-detail', ['product' => $product, 'categories' => $categories, 'sp_lienquan' => $sp_lienquan]);
    }
}
