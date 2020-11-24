<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TechnologiesRequest;
use App\Models\Categories;
use App\Models\Fertilizers;
use App\Models\Technologies;
use Session;
use Auth;

class TechnologiesController extends Controller
{
    public function index()
    {
        $technologies = Technologies::orderBy('id', 'DESC')->paginate(PAGINATION);
        return view('admin.technologies.index',['technologies' => $technologies]);
    }

    public function showGet()
    {
        $categories = Categories::where([
            'status' => Categories::ACTIVE,
            'code' => Categories::CATEGORY_CN
        ])->select('id', 'name')->get();
        return view('admin.technologies.create', ['categories' => $categories]);
    }

    public function create(TechnologiesRequest $request)
    {
        $data = $request->all();
        if(empty($data['id'])){
            $technology = $request->except('_token');
            try{
                $technology['created_by'] = Auth::user()->id;
                $technology['updated_by'] = Auth::user()->id;
                $technology['image'] = '';
                $create = Technologies::create($technology);
                $files = $request->file('image');
                if(!empty($files) && $data['remove_image'] == 0){
                    $file_name = $files->getClientOriginalName();
                    $files->storeAs('/public/images/technologies/' . $create->id, $file_name);
                    Technologies::findOrFail($create->id)->update(['image' => '/storage/images/technologies/' . $create->id . '/' . $file_name]);
                }
                Session::flash('message', 'Thêm sản phẩm thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('technologies');
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
                Technologies::findOrFail($data['id'])->update($data);
                $files = $request->file('image');
                if(!empty($files) && $data['remove_image'] == 0){
                    $file_name = $files->getClientOriginalName();
                    $files->storeAs('/public/images/technologies/' . $data['id'], $file_name);
                    Technologies::findOrFail($data['id'])->update(['image' => '/storage/images/technologies/' . $data['id'] . '/' . $file_name]);
                }
                Session::flash('message', 'Sửa sản phẩm thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('technologies');
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
            'code' => Categories::CATEGORY_CN
        ])->select('id', 'name')->get();
        $product = Technologies::where('id', $id)->firstOrFail();
        return view('admin.technologies.create', ['data' => $product, 'categories' => $categories]);
    }

    public function destroy($id)
    {
        try{
            $delete = Technologies::where([
                'status' => Technologies::NOTACTIVE,
                'id' => $id
            ])->delete();
            if($delete){
                Session::flash('message', 'Xóa dịch vụ thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->back();
            }
            else{
                Session::flash('message', 'Không thể xóa dịnh vụ này khi còn hoạt động!');
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
