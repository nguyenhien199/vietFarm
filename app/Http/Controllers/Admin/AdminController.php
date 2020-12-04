<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingUsersRequests;
use App\Models\News;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminController extends Controller
{
    public function index()
    {
       // return view('admin.overview.index');
    }

    public function setting(){
        return view('admin.setting');
    }

    public function editUser(SettingUsersRequests $requests){
        $data = $requests->all();
        if($data['password'] || $data['newPassword']){
            $current_password = Auth::User()->password;
            if(Hash::check($data['password'], $current_password))
            {
                User::where('id', Auth::user()->id)->update([
                    'address' => $data['address'],
                    'password' => Hash::make($data['newPassword']),
                    'name' => $data['name'],
                ]);
                Session::flash('message', 'Sửa thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->back();
            }else{
                Session::flash('message', 'Vui lòng nhập đúng password.');
                Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
        }else{
            User::where('id', Auth::user()->id)->update([
                'address' => $data['address'],
                'name' => $data['name'],
            ]);
            Session::flash('message', 'Sửa thành công!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->back();
        }
    }
}
