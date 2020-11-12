<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsersRequests;
use App\User;
use http\Client\Response;
use Illuminate\Support\Facades\Hash;
use Session;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate(PAGINATION);
        return view('admin.user.index',['users' => $users]);
    }
    
    public function create(UsersRequests $request)
    {
        $data = $request->all();
        if(!isset($data['id'])){
            $user = $request->except('_token', 'current_password');
            try{
                $user['password'] = Hash::make($user['password']);
                User::create($user);
                Session::flash('message', 'Update user SuccessFully!');
                Session::flash('alert-class', 'alert-success');
                return response()->json(['status' => '200']);
            }catch (\Exception $error){
                Session::flash('message', 'Update user Error!');
                Session::flash('alert-class', 'alert-danger');
                return response()->json(['status' => '500']);
            }
        }
        else{
            $dataEdit =  $request->except('_token', 'id', 'current_password');
            try {
                if(empty($request->password)) unset($dataEdit['password']);
                else{
                    $dataEdit['password'] = Hash::make($dataEdit['password']);
                }
                User::where('id', $data['id'])->update($dataEdit);
                Session::flash('message', 'Update user successFully!');
                Session::flash('alert-class', 'alert-success');
                return response()->json(['status' => '200']);
            } catch (\Exception $error){
                Session::flash('message', 'Update user error!');
                Session::flash('alert-class', 'alert-danger');
                return response()->json(['status' => '500']);
            }
        }
    }
    
    public function destroy($id){
        try{
            $item = User::where([
                'id' => $id,
                'status' => User::NOTACTIVE
            ])->delete();
            Session::flash('message', 'Delete user SuccessFully!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->back();
        }catch (\Exception $error){
            Session::flash('message', 'Delete user Error!');
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }
        
    }
}
