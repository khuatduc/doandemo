<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $table="scores";
    public function image(){
        return $this->belongsTo('App\Models\Image','idImage','id');
    }
}
