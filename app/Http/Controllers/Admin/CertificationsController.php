<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CertificationsRequest;
use App\Models\Categories;
use App\Models\Certifications;
use Illuminate\Support\Facades\Storage;
use Session;
use Auth;

class CertificationsController extends Controller
{
    public function index()
    {
        $certifications = Certifications::orderBy('id', 'DESC')->paginate(PAGINATION);
        return view('admin.certifications.index',['certifications' => $certifications]);
    }

    public function showGet()
    {
        return view('admin.certifications.create');
    }

    public function create(CertificationsRequest $request)
    {
        $data = $request->all();
        if(empty($data['id'])){
            $certifications = $request->except('_token');
            try{
                $certifications['created_by'] = Auth::user()->id;
                $certifications['updated_by'] = Auth::user()->id;
                $certifications['image'] = '';
                $create = Certifications::create($certifications);
                $files = $request->file('image');
                if(!empty($files) && $data['remove_image'] == 0){
                    $file_name = $files->getClientOriginalName();
                    $files->storeAs('/public/images/certifications/' . $create->id, $file_name);
                    Certifications::findOrFail($create->id)->update(['image' => '/storage/images/certifications/' . $create->id . '/' . $file_name]);
                }
                Session::flash('message', 'Thêm chứng nhận thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('certifications');
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
                Certifications::findOrFail($data['id'])->update($data);
                $files = $request->file('image');
                if(!empty($files) && $data['remove_image'] == 0){
                    $file_name = $files->getClientOriginalName();
                    Storage::deleteDirectory('/public/images/certifications/' . $data['id']);
                    $files->storeAs('/public/images/certifications/' . $data['id'], $file_name);
                    Certifications::findOrFail($data['id'])->update(['image' => '/storage/images/certifications/' . $data['id'] . '/' . $file_name]);
                }
                Session::flash('message', 'Sửa chứng nhận thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('certifications');
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
            'code' => Categories::CATEGORY_CC
        ])->select('id', 'name')->get();
        $certifications = Certifications::where('id', $id)->firstOrFail();
        return view('admin.certifications.create', ['data' => $certifications, 'categories' => $categories]);
    }

    public function destroy($id)
    {
        try{
            $delete = Certifications::where([
                'status' => Certifications::NOTACTIVE,
                'id' => $id
            ])->delete();
            if($delete){
                Storage::deleteDirectory('/public/images/certifications/' . $id);
                Session::flash('message', 'Xóa chứng nhận thành công!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->back();
            }
            else{
                Session::flash('message', 'Không thể xóa chứng nhận này khi còn hoạt động!');
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
