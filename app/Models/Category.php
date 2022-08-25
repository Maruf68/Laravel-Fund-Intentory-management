<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function fundlist(){
        return $this->hasOne(Fundlist::class);
    }


    // public function fundlist(){
    //     return $this->belongsTo(Fundlist::class);
    // }


}
