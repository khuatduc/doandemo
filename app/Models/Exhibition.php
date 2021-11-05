<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    protected $table="exhibitions";
    public function image(){
        return $this->belongsTo('App\Models\Image','idImage','id');
    }
}
