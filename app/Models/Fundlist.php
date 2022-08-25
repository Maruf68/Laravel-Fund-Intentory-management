<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fundlist extends Model
{
    use HasFactory;
    public $timestamps = false;
    // protected $fillable = ['category_id'];

    public function category(){
        return $this->hasOne(Category::class);
    }
}