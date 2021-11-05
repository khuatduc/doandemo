<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Image;
use App\Models\Admin;

class PagesController extends Controller
{
   function __construct(){
		view()->share('admin',admin::find(3));
   
	}

    public function trangChu(){
    	 return view('pages.trangchu');
    }

    public function guianh(){
    	 if (Auth::check()) {
    	 	$user=Auth::user();
    	 return view('pages.nopanh',['user'=>$user]);
      }
    }

    public function postDangnhap(Request $request){
            $this->validate($request,
            [
                'email'=>'required',
                'password'=>'required|min:3',
            ],
            [
            'email.required'=>'ban chua nha email',
            'password.required'=>'ban chua nhap mật khẩu',
            'password.min'=>'mật khẩu min la 3 ky tu',
            ]);
          if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
              return redirect('trangchu');
          }else{
              return redirect('trangchu')->with('thongbao','dang nhap khong thanh cong');
          }
    }

    public function postGuiAnh(Request $request,$id){
            $this->validate($request,
            [
                'TieuDe'=>'required',
                'Hinh'=>'required',
                'NoiDung'=>'required',
                'lastName'=>'required',
                'firstName'=>'required',
                'address'=>'required',
                'age'=>'required',
                'birth'=>'required',
                'gender'=>'required',
                'position'=>'required',
                'phone'=>'required'
            ],
            [
            'TieuDe.required'=>'bạn chưa nhập Tiêu Đề',
            'Hinh.required'=>'bạn chưa nhập Hinh',
            'NoiDung.required'=>'bạn chưa nhập NoiDung',
            'lastName.required'=>'bạn chưa nhập lastName',
            'firstName.required'=>'bạn chưa nhập firstName',
            'address.required'=>'bạn chưa nhập address',
            'age.required'=>'bạn chưa nhập age',
            'birth.required'=>'bạn chưa nhập birth',
            'gender.required'=>'bạn chưa nhập gender',
            'position.required'=>'bạn chưa nhập position',
            'phone.required'=>'bạn chưa nhập phone',
            ]);
          $user=User::find($id);
          $user->email=$user->email;
          $user->lastName=$request->lastName;
          $user->firstName=$request->firstName;
          $user->age=$request->age;
          $user->birth=$request->birth;
          $user->position=$request->position;
          $user->address=$request->address;
          $user->gender=$request->gender;
          $user->phone=$request->phone;
          $user->save();
          $image= new Image;
          $image->TieuDe=$request->TieuDe;
          $image->TieuDeKhongDau=changeTitle($request->TieuDe);
          $image->user_id=$id;
          $image->NoiDung=$request->NoiDung;
          if ($request->hasFile('Hinh')) {
        	$file=$request->file('Hinh');
        	$duoi=$file->getClientOriginalExtension('Hinh');
        	if ($duoi!='jpg'&&$duoi!='png'&&$duoi!='jpeg') {
        		return redirect('guianh')->with('thongbao','file anh ko hop le');
        	}else{
        	$hinh=$file->getClientOriginalName();
        	$hinh=random_int(0, 9999)."_".random_int(0, 9999).$hinh;
        	while (file_exists('upload/hinh/'.$hinh)) {
        		$hinh=random_int(0, 9999)."_".random_int(0, 9999).$hinh;
        	}

        	  $file->move('upload/hinh',$hinh);
              $image->name=$hinh;
             }

        }else{
        	$hinh="";
        }

        $image->save();
         return redirect('guianh')->with('thongbao','gửi ảnh thành công');
    }

     public function postDangKy(Request $request){
         $this->validate($request,
        [
          
          'email'=>'required|unique:users,email',
          'password'=>'required|min:3',
          'lastName'=>'required',
          'firstName'=>'required',
          'birth'=>'required',
          'phone'=>'required',
          'gender'=>'required',
        ],
        [
            
            'email.required'=>'ban chua nha email',
            'email.unique'=>'email da ton tai',
            'password.required'=>'ban chua nhap ten user',
            'password.min'=>'Ten the loai min la 3 ky tu',
            'lastName.required'=>'ban chua nha email',
            'firstName.required'=>'ban chua nha email',
            'birth.required'=>'ban chua nha email',
            'phone.required'=>'ban chua nha email',
            'gender.required'=>'ban chua nha email',
        ]);
      $user=new User;
      $user->email=$request->email;
      $user->password=bcrypt($request->password);
      $user->lastName=$request->lastName;
      $user->firstName=$request->firstName;
      $user->phone=$request->phone;
      $user->gender=$request->gender;
      $user->birth=$request->birth;
      $user->save();
      return redirect('trangchu')->with('thongbao','dang ky thanh cong');
    }


    public function getDangXuat(){
        Auth::logout();
        return redirect('trangchu');
    }


    public function trangChu1(){
      $id=1;
      $noidung=NoiDung::find($id);
      if (Auth::check()) {
       $giohang=GioHang::where("idNguoiDung",Auth::user()->id)->get();
       return view('pages.trangchu',['noidung'=>$noidung,"giohang"=>$giohang]);
      }else{
        return view('pages.trangchu',['noidung'=>$noidung]);
      }
    	
    }

     public function lienHe(){
        
    	return view('pages.lienhe');
    }

    public function getTheLoai($id){
      $thloai=TheLoai::find($id);
      $loaisp=LoaiSP::where("idTheLoai",$id)->get();
       if (Auth::check()) {
       $giohang=GioHang::where("idNguoiDung",Auth::user()->id)->get();
       return view('pages.loaisp',['loaisp'=>$loaisp,"thloai"=>$thloai,"giohang"=>$giohang]);
      }
      return view('pages.loaisp',['loaisp'=>$loaisp,"thloai"=>$thloai]);
    }

 

     public function loaiSP($id){

        $loaisp=LoaiSP::find($id);
        $chitiet=ChiTiet::where('idLoaiSP',$id)->orderBy('id','desc')->paginate(5);
        if (Auth::check()) {
       $giohang=GioHang::where("idNguoiDung",Auth::user()->id)->get();
       return view('pages.loaisp',['loaisp'=>$loaisp,"chitiet"=>$chitiet,"giohang"=>$giohang]);
      }
        return view('pages.loaisp',['loaisp'=>$loaisp,"chitiet"=>$chitiet]);
    }

     

    public function chitiet($id){
        $chitiet=ChiTiet::find($id);
        $id1=$chitiet->loaisp->id;
        $chitietnoibat=ChiTiet::where('idLoaiSP',$id1)->take(4)->get();
        $chitietlienquan=ChiTiet::where('idLoaiSP',$id)->take(4)->get();
        if (Auth::check()) {
       $giohang=GioHang::where("idNguoiDung",Auth::user()->id)->get();
       return view('pages.chitiet',['chitiet'=>$chitiet,'chitietnoibat'=>$chitietnoibat,'chitietlienquan'=>$chitietlienquan,"giohang"=>$giohang]);
   
      }
        return view('pages.chitiet',['chitiet'=>$chitiet,'chitietnoibat'=>$chitietnoibat,'chitietlienquan'=>$chitietlienquan]);
    }


   


   



    public function getNguoiDung(){
         $user= Auth::user();
         if (Auth::check()) {
       $giohang=GioHang::where("idNguoiDung",Auth::user()->id)->get();
      
         return view("pages.user",["nguoidung"=>$user,"giohang"=>$giohang]);
      }
         return view("pages.user",["nguoidung"=>$user]);
    }


      public function postSuaNguoiDung(Request $request){
          $this->validate($request,
        [
          'name'=>'required|min:3|max:40',
        ],
        [
          'name.required'=>'ban chua nhap ten user',
            'name.min'=>'Ten the loai min la 3 ky tu',
            'name.max'=>'Ten the loai max la 40 ky tu',
           
        ]);
      $user=Auth::user();
      $user->name=$request->name;
      $user->email=$request->email;
      if ($request->changepassword=="on") {
         $this->validate($request,
        [
          'password'=>'required|min:3',
          'passwordAgain'=>'required|same:password'
        ],
        [
            'password.required'=>'ban chua nhap ten user',
            'password.min'=>'Ten the loai min la 3 ky tu',
            'passwordAgain.required'=>'ban chua nhap passwordAgaint',
            'passwordAgain.same'=>'mat khau khong chun khop'
        ]);
         $user->password=bcrypt($request->password);
      }
    
      $user->save();
      return redirect('nguoidung')->with('thongbao',' thanh cong');
     }



     public function timkiem(Request $request){
        $tukhoa=$request->tukhoa;
        $chitiet=ChiTiet::where('TieuDe','like',"%$tukhoa%")->orwhere('TomTat','like',"%$tukhoa%")->take(32)->paginate(8);
        return view('pages.timkiem',["chitiet"=>$chitiet,"tukhoa"=>$tukhoa]);
     }
}
