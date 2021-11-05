<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Score;
class HomeController extends Controller
{
   public function getChart(){
   	$data1= [0,0,0,0,0,0,0,0,0,0,0,0];
   	$image=Image::all();
    $data= ["01","02","03","04","05","06","07","08","09","10","11","12"];
   	foreach ($image as $value) {
   		$date=$value->created_at;
   		$ab=substr($date, 5, 2);
   		if(in_array($ab, $data)){
   			$data1[$ab-1]=$data1[$ab-1]+1;
   		}
   	}

   	$totalImage=$image->count();
    // $data2= [0,0,0,0,0];
   	// $score=Score::all();
   	// $totalAmount=$score->count();
   	// $total1=$score->where("score",5)->count();
   	return view("admin.chart",['data'=>$data1,'sum'=>$totalImage]);
   }
}
