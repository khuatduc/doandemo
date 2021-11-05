<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Image;
use App\Models\Exhibition;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;
class SampleController extends Controller
{
    public function sendMail(){
    	
    $exhibition= Exhibition::all();
      foreach ($exhibition as $value) {
        $lastName= $value->image->user->lastName;
        $firstName=$value->image->user->firstName;
        $title= $value->image->TieuDe;
        $image= $value->image->name;
        $score= $value->sumScore;
        $mail= $value->image->user->email;

    	$details=[
    		'lastName'=>$lastName,"firstName"=>$firstName,'title'=>$title,'score'=>$score,'image'=>$image
    	];

    	Mail::to($mail,'TrienLamVip')->send(new MyTestMail($details));
    	
    }
    return 1;
}
}