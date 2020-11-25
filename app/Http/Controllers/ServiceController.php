<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Services;

class ServiceController extends Controller
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


    public function index()
    {
        $categories = Categories::where([
            'code' => Categories::CATEGORY_DV,
            'status' => Categories::ACTIVE,
        ])->take(6)->select('id', 'name')->get();
        $services = [];
        foreach ($categories as $category){
            $services[$category->id] = Services::where([
                'category_id' => $category->id,
                'status' => Services::ACTIVE,
            ])->latest()->take(8)->get();
        }
        return view('web.service',['services' => $services, 'categories' => $categories] );
    }
    public function show($url)
    {
        $categories = Categories::where([
            'code' => Categories::CATEGORY_DV,
            'status' => Categories::ACTIVE,
        ])->take(6)->select('id', 'name')->get();
        foreach ($categories as $cate){
            $cate->total = Services::where([
                'status' => Services::ACTIVE,
                'category_id' => $cate->id,
            ])->count();
        }
        $services = Services::where([
            'status' => Services::ACTIVE,
            'url' => $url
        ])->first();
        $dv_lienquan = Services::where([
            'status' => Services::ACTIVE,
            'category_id' => $services->category_id
        ])->where('id','!=',$services->id)->take(6)->get();
        return view('web.service-detail', ['service' => $services, 'categories' => $categories, 'dv_lienquan' => $dv_lienquan]);
    }


}
