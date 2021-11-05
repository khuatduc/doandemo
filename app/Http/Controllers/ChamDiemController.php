<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Image;
use App\Models\Budge;
use App\Models\Score;
use App\Models\Admin;
class ChamDiemController extends Controller
{
     public function getDanhSach(){
       $user=User::all();
       return view('admin.chamdiem.danhsach',['user'=>$user]);
    }

    public function getXemAnh(){
      $admin=Admin::find(3);
      $user=User::all();
       return view('admin.chamdiem.xemanhnop',['user'=>$user,'admin'=>$admin]);
    }

    public function getXemAnhDu(){
      $admin=Admin::find(3);
      $user=User::all();
      return view('admin.chamdiem.duanh',['user'=>$user,'admin'=>$admin]);
    }

     public function getXemChuaAnhDu(){
      $admin=Admin::find(3);
      $user=User::all();
      return view('admin.chamdiem.chuadu',['user'=>$user,'admin'=>$admin]);
    }

    public function getXemDiem(){
      $user=User::all();
      return view('admin.chamdiem.xemdiem',['user'=>$user]);
    }

    public function getXemAnhDaCham(){
       $idBudget=Auth::guard('budge')->user()->id;
       $image=Score::where("idBudget",$idBudget)->get();
       return view('admin.chamdiem.xemanhdacham',['image'=>$image]);
     }

    public function getXemAnhChuaCham(){
       $image=Image::all();
       $idBudget=Auth::guard('budge')->user()->id;
       $score=Score::where("idBudget",$idBudget)->get();
       $a1 = array();
       $a2 = array();
       foreach ($score as $vs) {
         $a1[]=$vs->idImage;
       }
       
       foreach ($image as $image) {
         if (!in_array($image->id,$a1)) {
           $a2[]=$image;
         }
       }

       return view('admin.chamdiem.xemanhchuacham',['image'=>$a2]);
     }


     public function getXemDiemUser($id){
      $user=User::find($id);
      $image=Image::where('user_id',$id)->get();
      $id1=Auth::guard('budge')->user()->id;
      $score=Score::where('idBudget',$id1)->where('idUser',$id)->get();
      $a1 = array();
      $a2 = array();
      $a3 = array();
      foreach ($score as $vs) {
         $a1[]=$vs->idImage;
         $a3=$vs;
       }

       foreach ($image as $image) {
         if (!in_array($image->id,$a1)) {
           $a2[]=$image;
         }
       }

       return $image;
      
      return view('admin.chamdiem.xemdiemtong',['score'=>$a3,'image'=>$a2,'user'=>$user]);
    }

    public function getXemChiTiet($id){
       
       $image=Image::where("user_id",$id)->get();
       if (Auth::guard('budge')->check()) {
         $budge=Auth::guard('budge')->user()->id;
       }
       $score=Score::where("idUser",$id)->where('idBudget', $budge)->get();
       return view('admin.chamdiem.xemchitiet',['image'=>$image,'score'=>$score,"idUser"=>$id]);
    }

     public function getChamDiem($idUser,$tieudekodau,$idImage){
        $user=User::find($idUser);
        $image=Image::find($idImage);
        return view('admin.chamdiem.chodiem',['user'=>$user,'image'=>$image]);
     }

     public function postChamDiem($idUser,$tieudekodau,$idImage,Request $request){
        $user=User::find($idUser);
        $image=Image::find($idImage);
        $ab=Auth::guard('budge')->user()->id;
        $blo=Score::where('idBudget',$ab)->where('idUser',$idUser)->where('idImage',$idImage)->get();
       $this->validate($request,
            ['score'=>"required"
            ],
            [
            'score.required'=>"bạn chưa chấm điểm tác phẩm này"
            ]);

       if(count($blo)>0){
           $score=$blo[0];
           $score->score=$request->score;
           $score->save();
       }else{
           $score=new Score;
           $score->score=$request->score;
           $score->idImage=$idImage;
           $score->idUser=$idUser;
           $score->idBudget=Auth::guard('budge')->user()->id;
           $score->save();
       }
          
           
           return redirect("GiamKhao/ChamDiemUser/xemchitiet/".$idUser)->with('thongbao','chấm điểm thành công');
        
        
    }

    public function getSuaDiem($idUser,$tieudekodau,$idImage){
        $t=Auth::guard('budge')->user()->id;
        $user=Auth::guard('budge')->user();
        $score0=Score::where('idBudget',$t)->where('idImage',$idImage)->get();
        $score=$score0[0];
        return view('admin.chamdiem.sua',['user'=>$user,'score'=>$score]);
     }

     public function postSuaDiem($idUser,$tieudekodau,$idImage,Request $request){
      $t=Auth::guard('budge')->user()->id;
      $user=Auth::guard('budge')->user();
      $score0=Score::where('idBudget',$t)->where('idImage',$idImage)->get();
        $score1=$score0[0];
       $this->validate($request,
            ['score'=>"required"
            ],
            [
            'score.required'=>"bạn chưa chấm điểm tác phẩm này"
            ]);
       
           $score1->score=$request->score;
           $str=$idUser."/".$score1->image->TieuDeKhongDau."".$idImage."".".html";
           $score1->save();
           return redirect("GiamKhao/ChamDiemUser/".$str)->with('thongbao','sửa điểm thành công');
        
        
    }



    


}
