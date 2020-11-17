<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TechnologiesRequest;
use App\Models\Categories;
use App\Models\Fertilizers;
use Session;
use Auth;

class FertilizersController extends Controller
{
    public function index()
    {
        $fertilizers = Fertilizers::orderBy('id', 'DESC')->paginate(PAGINATION);
        return view('admin.fertilizers.index',['fertilizers' => $fertilizers]);
    }
    
    public function showGet()
    {
        $categories = Categories::where([
            'status' => Categories::ACTIVE,
            'code' => Categories::CATEGORY_PB
        ])->select('id', 'name')->get();
        return view('admin.fertilizers.create', ['categories' => $categories]);
    }
    
    public function create(TechnologiesRequest $request)
    {
        $data = $request->all();
        if(empty($data['id'])){
            $fertilizers = $request->except('_token');
            try{
                $fertilizers['created_by'] = Auth::user()->id;
                $fertilizers['updated_by'] = Auth::user()->id;
                $fertilizers['image'] = '';
                $create = Fertilizers::create($fertilizers);
                $files = $request->file('image');
                if(!empty($files) && $data['remove_image'] == 0){
                    $file_name = $files->getClientOriginalName();
                    $files->storeAs('/public/images/fertilizers/' . $create->id, $file_name);
                    Fertilizers::findOrFail($create->id)->update(['image' => '/storage/images/fertilizers/' . $create->id . '/' . $file_name]);
                }
                Session::flash('message', 'Thêm phân bón thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('fertilizers');
            }catch (\Exception $error){
                Session::flash('message', 'Đã xảy ra lỗi! Xin vui lòng thử lại');
                Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
        }else{
            try{
                $data = $request->except('_token');
                $data['updated_by'] = Auth::user()->id;
                if($data['remove_image'] == 1){
                    $data['image'] = '';
                }
                Fertilizers::findOrFail($data['id'])->update($data);
                $files = $request->file('image');
                if(!empty($files) && $data['remove_image'] == 0){
                    $file_name = $files->getClientOriginalName();
                    $files->storeAs('/public/images/fertilizers/' . $data['id'], $file_name);
                    Fertilizers::findOrFail($data['id'])->update(['image' => '/storage/images/fertilizers/' . $data['id'] . '/' . $file_name]);
                }
                Session::flash('message', 'Sửa phân bón thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('fertilizers');
            }catch (\Exception $error){
                Session::flash('message', 'Đã xảy ra lỗi! Xin vui lòng thử lại');
                Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
        }
    }
    
    public function edit($id)
    {
        $categories = Categories::where([
            'status' => Categories::ACTIVE,
            'code' => Categories::CATEGORY_PB
        ])->select('id', 'name')->get();
        $fertilizers = Fertilizers::where('id', $id)->firstOrFail();
        return view('admin.fertilizers.create', ['data' => $fertilizers, 'categories' => $categories]);
    }
    
    public function destroy($id)
    {
        try{
            $delete = Fertilizers::where([
                'status' => Fertilizers::NOTACTIVE,
                'id' => $id
            ])->delete();
            if($delete){
                Session::flash('message', 'Xóa phân bón thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->back();
            }
            else{
                Session::flash('message', 'Không thể xóa phân bón này khi còn hoạt động!');
                Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
        }catch (\Exception $error){
            Session::flash('message', 'Đã sẩy ra lỗi xin vui lòng thử lại!');
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }
    }
}
