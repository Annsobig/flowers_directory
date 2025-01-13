<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Flower extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image_url', 'created_at', 'updated_at'];

    //Định nghĩa mối quan hệ 1 nhiều của flower với region
    public function flowers(){
        return $this->belongsToMany(Region::class);
    }
}
