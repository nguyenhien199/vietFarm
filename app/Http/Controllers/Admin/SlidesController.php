<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SlidesRequests;
use App\Models\Slides;
use Illuminate\Http\Request;
use Session;
use Auth;

class SlidesController extends Controller
{
    public function index(){
        $slides = Slides::orderBy('id', 'DESC')->paginate(PAGINATION);;
        return view('admin.slides.index',['slides' => $slides]);
    }
    
    public function showGet(){
        return view('admin.slides.create');
    }
    
    public function create(SlidesRequests $request)
    {
        $data = $request->all();
        if(empty($data['id'])){
            $slides = $request->except('_token');
            try{
                $create = Slides::create($slides);
                $files = $request->file('image');
                if(!empty($files) && $data['remove_image'] == 0){
                    $file_name = $files->getClientOriginalName();
                    $files->storeAs('/public/images/slides/' . $create->id, $file_name);
                    Slides::findOrFail($create->id)->update(['image' => '/storage/images/slides/' . $create->id . '/' . $file_name]);
                }
                Session::flash('message', 'Thêm sản phẩm thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('slides');
            }catch (\Exception $error){
                Session::flash('message', 'Đã xảy ra lỗi! Xin vui lòng thử lại');
                Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
        }else{
            try{
                $data = $request->except('_token');
                if($data['remove_image'] == 1){
                    $data['image'] = '';
                }
                Slides::findOrFail($data['id'])->update($data);
                $files = $request->file('image');
                if(!empty($files) && $data['remove_image'] == 0){
                    $file_name = $files->getClientOriginalName();
                    $files->storeAs('/public/images/slides/' . $data['id'], $file_name);
                    Slides::findOrFail($data['id'])->update(['image' => '/storage/images/slides/' . $data['id'] . '/' . $file_name]);
                }
                Session::flash('message', 'Sửa sản phẩm thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('slides');
            }catch (\Exception $error){
                Session::flash('message', 'Đã xảy ra lỗi! Xin vui lòng thử lại');
                Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
        }
    }
    
    public function edit($id){
        $slide = Slides::where('id', $id)->firstOrFail();
        return view('admin.slides.create', ['data' => $slide]);
    }
    
    public function destroy($id)
    {
        try{
            $delete = Slides::where([
                'status' => Slides::NOTACTIVE,
                'id' => $id
            ])->delete();
            if($delete){
                Session::flash('message', 'Xóa dịch vụ thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->back();
            }
            else{
                Session::flash('message', 'Đã sẩy ra lỗi xin vui lòng thử lại!');
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
