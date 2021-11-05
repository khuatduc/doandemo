<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Image;
use App\Models\Exhibition;
use Auth;
use Mail;

class ToChucController extends Controller
{
  
    
     public function getDanhSach(){
         $user=User::all();
       return view('admin.btc.xemthisinh',['user'=>$user]);
     }

     public function getDanhSachDiem(){
       $user=User::all();
       return view('admin.btc.xemdiemthisinh',['user'=>$user]);
     }

    public function getAnhTrienLam(){
      $exhibition=Exhibition::all();
      return view('admin.btc.anhtrienlam',['exhibition'=>$exhibition]);
    }

    public function getXuatDanhSach(){
      $exhibition=Exhibition::all();
      return view('admin.btc.indanhsachtl',['exhibition'=>$exhibition]);
    }


    public function getAnhChuaTrienLam(){
      $arrayName = array();
      $image=Image::all();
      $exhibition= Exhibition::all();
      foreach ($exhibition as $value) {
        $arrayName[]=$value->idImage;
      }
       return view('admin.btc.guianhtrienlam',['image'=>$image,'arrayName'=>$arrayName]);
    }

     public function getXemDiemAnh(){
      $arrayName = array();
       $image=Image::all();
       foreach ($image as $image) {
       	  $diem=$image->score->where('idImage',$image->id);
       	  $sum=0;
          if(!empty($diem)){
       	  foreach ($diem as $di) {
       	  	$sum+=$di->score;
       	  }
        }
        $arrayName[]=$sum;
       }

      $image=Image::all();
      $exhibition= Exhibition::all();
      $arrayImageEx = array();
      foreach ($exhibition as $value) {
        $arrayImageEx[]=$value->idImage;
      }
       return view('admin.btc.xemdiemanh',['image'=>$image,'arrayName'=>$arrayName,'arrayImageEx'=>$arrayImageEx]);
     }


     public function postXemDiemAnh(Request $request){
      $chon= $request->chon;
      $list = array();
      foreach ($chon as $idImage) {
         $image=Image::find($idImage);
         $diem=$image->score->where('idImage',$image->id);
          $sum=0;
          if(!empty($diem)){
          foreach ($diem as $di) {
            $sum+=$di->score;
          }
          }
         $exhi=Exhibition::where('idImage',$idImage)->get();   
         if (count($exhi)>0) {
          $trienl=Exhibition::find($exhi[0]->id);
          $trienl->sumScore=$sum;
          $trienl->save();
         }else{
          $trienlam=new Exhibition;
          $trienlam->idImage=$idImage;
          $trienlam->sumScore=$sum;
          $trienlam->exhi=1;
          $trienlam->save();
         }
        
         
      }
      return redirect('BanToChuc/xemdiemanh');
       
     }


     public function getXoaAnhTrienLam($id){
       $ex=Exhibition::find($id);
       $ex->delete($id);  
      return redirect('BanToChuc/xemanhtrienlam');
     }


     public function getThem(){
     	return view('admin.quanly.them');
     }

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

      public function getDangNhapToChuc(){
        return view('admin.btc.login');
     }

     public function postDangNhapToChuc(Request $request) {
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

          if (Auth::guard('btc')->attempt(["email"=>$request->email,"password"=>$request->password])) {
             return redirect("BanToChuc/thongke");
          }else{
          	return Auth::guard('btc')->user();
            return redirect('BanToChuc/dangnhap')->with('thongbao','danh nhap ko thanh cong');
          }
     }

     public function dangXuatToChuc(){
       Auth::guard('btc')->logout();
        return redirect('BanToChuc/dangnhap');
     }

      public function getSua($id){
          $user=User::find($id);
     	return view('admin.user.sua',['user'=>$user]);
     }

      public function postSua(Request $request,$id){
     	    $this->validate($request,
     		[
     			'ten'=>'required|min:3|max:40',
     		],
     		[
     	    'ten.required'=>'ban chua nhap ten user',
            'ten.min'=>'Ten the loai min la 3 ky tu',
            'ten.max'=>'Ten the loai max la 40 ky tu',
           
     		]);
     	$user=User::find($id);
     	$user->name=$request->ten;
     	$user->email=$request->email;
     	if ($request->changepassword=="on") {
     		 $this->validate($request,
     		[
     			'password'=>'required|min:3',
                'passwordAgaint'=>'required|same:password'
     		],
     		[
            'password.required'=>'ban chua nhap ten user',
            'password.min'=>'Ten the loai min la 3 ky tu',
            'passwordAgaint.required'=>'ban chua nhap passwordAgaint',
            'passwordAgaint.same'=>'mat khau khong chun khop'
     		]);
     		 $user->password=bcrypt($request->password);
     	}
     	
     	$user->quyen=$request->quyen;
     	$user->save();
     	return redirect('admin/user/sua/'.$id)->with('thongbao','sua user thanh cong');
     }

}
