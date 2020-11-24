<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Products;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $newPost = News::where('status', 1)->latest()->take(2)->get();
        $product = Products::where('status', 1)->latest()->take(8)->get()->toArray();
        $product = array_chunk($product,4);

        return view('web.home',
            [
                'newPost' => $newPost,
                'product' => $product
            ]);
    }
    public function getDetailNew($url)
    {
        $new = News::where('url',$url)->first();
        return view('web.news-detail',compact('new'));
    }

}
