<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['flower_id', 'region_name', 'created_at', 'updated_at'];

    //Dịnh nghĩa nhiều 1 của region với flower
    public function region() {
        return $this->belongsToMany(Flower::class);
    }
}
