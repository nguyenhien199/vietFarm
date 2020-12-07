<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Products;
use App\Models\Services;
use App\Models\Slides;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $newPost = News::where('status', 1)->latest()->take(2)->get();
        $product = Products::where('status', 1)->latest()->take(12)->get()->toArray();
        $services = Services::where('status', 1)->latest('updated_at')->take(4)->get();
        $product = array_chunk($product,6);
        foreach ($product as $k => $pro){
            $product[$k] = array_chunk($pro,2);
        }
        $slide = Slides::where([
            'status' => Slides::ACTIVE
        ])->latest()->take(SLIDE_SHOW)->get();
        return view('web.home',
            [
                'newPost' => $newPost,
                'product' => $product,
                'slide' => $slide,
                'services' => $services
            ]);
    }
    public function getDetailNew($url)
    {
        $new = News::where('url',$url)->first();
        return view('web.news-detail',compact('new'));
    }

}
