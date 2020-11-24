<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServicesRequest;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Services;
use Session;
use Auth;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Services::orderBy('id', 'DESC')->paginate(PAGINATION);
        return view('admin.services.index',['services' => $services]);
    }

    public function showGet()
    {
        $categories = Categories::where([
            'status' => Categories::ACTIVE,
            'code' => Categories::CATEGORY_DV
        ])->select('id', 'name')->get();
        return view('admin.services.create', ['categories' => $categories]);
    }

    public function create(ServicesRequest $request)
    {
        $data = $request->all();
        if(empty($data['id'])){
            $product = $request->except('_token');
            try{
                $product['created_by'] = Auth::user()->id;
                $product['updated_by'] = Auth::user()->id;
                $create = Services::create($product);
                $files = $request->file('image');
                if(!empty($files) && $data['remove_image'] == 0){
                    $file_name = $files->getClientOriginalName();
                    $files->storeAs('/public/images/services/' . $create->id, $file_name);
                    Services::findOrFail($create->id)->update(['image' => '/storage/images/services/' . $create->id . '/' . $file_name]);
                }
                Session::flash('message', 'Thêm sản phẩm thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('services');
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
                Services::findOrFail($data['id'])->update($data);
                $files = $request->file('image');
                if(!empty($files) && $data['remove_image'] == 0){
                    $file_name = $files->getClientOriginalName();
                    $files->storeAs('/public/images/services/' . $data['id'], $file_name);
                    Services::findOrFail($data['id'])->update(['image' => '/storage/images/services/' . $data['id'] . '/' . $file_name]);
                }
                Session::flash('message', 'Sửa sản phẩm thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('services');
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
            'code' => Categories::CATEGORY_DV
        ])->select('id', 'name')->get();
        $product = Services::where('id', $id)->firstOrFail();
        return view('admin.services.create', ['data' => $product, 'categories' => $categories]);
    }

    public function destroy($id)
    {
        try{
            $delete = Services::where([
                'status' => Products::NOTACTIVE,
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
