<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OverviewController extends Controller
{
    public function index(){
        $posts = DB::table('news')->where('created_at', '>', Carbon::now()->startOfMonth())
            ->where('created_at', '<', Carbon::now()->endOfMonth())->count();
        $product = DB::table('products')->where('created_at', '>', Carbon::now()->startOfYear())
            ->where('created_at', '<', Carbon::now()->endOfYear())->count();
        $sevices = DB::table('services')->where('created_at', '>', Carbon::now()->startOfMonth())
            ->where('created_at', '<', Carbon::now()->endOfMonth())->count();
        $technologies = DB::table('technologies')->where('created_at', '>', Carbon::now()->startOfMonth())
            ->where('created_at', '<', Carbon::now()->endOfMonth())->count();
        $fertilizers = DB::table('fertilizers')->where('created_at', '>', Carbon::now()->startOfMonth())
            ->where('created_at', '<', Carbon::now()->endOfMonth())->count();
        $users = DB::table('users')->where('status', User::ACTIVE)->count();
        return view('admin.overview.index', [
            'posts' => $posts,
            'product'=>$product,
            'sevices'=>$sevices,
            'technologies'=>$technologies,
            'fertilizers'=>$fertilizers,
            'users'=>$users,
            ]);
    }
    
}
