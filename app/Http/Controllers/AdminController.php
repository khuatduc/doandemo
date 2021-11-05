<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;

class AdminController extends Controller
{
      public function getDanhSach(){
         $admin=Admin::all();
     	return view('admin.quanly.danhsach',['admin'=>$admin]);
     }

     public function getThem(){
     	return view('admin.quanly.them');
     }

     // public function getSua(){
     //    return view('admin.quanly.them');
     // }

     public function postThem(Request $request){
     	    $this->validate($request,
     		[
     			'name'=>'required',
     			'email'=>'required|unique:users,email',
     			'password'=>'required|min:3',
                'passwordAgaint'=>'required|same:password',
                'phone'=>'required',
                'end'=>'required',
                'amountImage'=>'required',
                'begin'=>'required',
     		],
     		[
     	    'name.required'=>'ban chua nhap ten user',
     	    'phone.required'=>'ban chua nhap ten phone',
     	    'end.required'=>'ban chua nhap ten end',
     	    'begin.required'=>'ban chua nhap ten begin',
     	    'amountImage.required'=>'ban chua nhap ten amountImage',
            'email.required'=>'ban chua nha email',
            'email.unique'=>'email da ton tai',
            'password.required'=>'ban chua nhap ten user',
            'password.min'=>'Ten the loai min la 3 ky tu',
            'passwordAgaint.required'=>'ban chua nhap passwordAgaint',
            'passwordAgaint.same'=>'mat khau khong chun khop'
     		]);
     	$admin=new Admin;
     	$admin->name=$request->name;
     	$admin->email=$request->email;
     	$admin->password=bcrypt($request->password);
     	$admin->phone=$request->phone;
     	$admin->end=$request->end;
     	$admin->begin=$request->begin;
     	$admin->amountImage=$request->amountImage;
     	$admin->save();
     	return redirect('admin/quanly/them')->with('thongbao','Them admin thanh cong');
     }

      public function getDangNhapAdmin(){
        return view('admin.loginAdmin');
     }

     public function postDangNhapAdmin(Request $request) {
        $this->validate($request,
            [
                "email"=>"required",
                "password"=>"required|min:3|max:40"
            ],
            [
                "email.required"=>"ban chua nhap email",
                "password.required"=>"ban chua nhap password",
                 "password.min"=>"password phai co it nhat 3 ki tu",
                "password.max"=>"password phai co nhieu nhat 40 ki tu",
            ]);

          if (Auth::guard('admin')->attempt(["email"=>$request->email,"password"=>$request->password])) {
             return redirect('admin/quanly/danhsach');
          }else{
          	
            return redirect('admin/dangnhap')->with('thongbao','danh nhap ko thanh cong');
          }
     }

     public function dangXuatAdmin(){
       Auth::guard('admin')->logout();
        return redirect('admin/dangnhap');
     }

      public function getSua($id){
        $admin=Admin::find($id);
     	return view('admin.quanly.sua',['admin'=>$admin]);
     }

      public function postSua(Request $request,$id){
     	    $this->validate($request,
            [
                'name'=>'required',
                'email'=>'required|unique:users,email',
                'password'=>'required|min:3',
                'passwordAgaint'=>'required|same:password',
                'phone'=>'required',
                'end'=>'required',
                'amountImage'=>'required',
                'begin'=>'required',
            ],
            [
            'name.required'=>'ban chua nhap ten user',
            'phone.required'=>'ban chua nhap ten phone',
            'end.required'=>'ban chua nhap ten end',
            'begin.required'=>'ban chua nhap ten begin',
            'amountImage.required'=>'ban chua nhap ten amountImage',
            'email.required'=>'ban chua nha email',
            'email.unique'=>'email da ton tai',
            'password.required'=>'ban chua nhap ten user',
            'password.min'=>'Ten the loai min la 3 ky tu',
            'passwordAgaint.required'=>'ban chua nhap passwordAgaint',
            'passwordAgaint.same'=>'mat khau khong chun khop'
            ]);
        $admin=Admin::find($id);
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=bcrypt($request->password);
        $admin->phone=$request->phone;
        $admin->end=$request->end;
        $admin->begin=$request->begin;
        $admin->amountImage=$request->amountImage;
        $admin->save();
        return redirect('admin/quanly/sua/'.$id)->with('thongbao','Sửa thông tin thành công');
     }

   
   
}
