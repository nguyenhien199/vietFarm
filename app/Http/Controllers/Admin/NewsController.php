<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public function index(){
        $news = News::where('status', 1)->get();
        return view('admin.new.index',['news' => $news]);
    }
}
