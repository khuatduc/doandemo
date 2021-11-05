<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table="images";
    public function score(){
        return $this->hasMany('App\Models\Score','idImage','id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

     public function ex(){
        return $this->belongsTo('App\Models\Exhibition','idImage','id');
    }
}
