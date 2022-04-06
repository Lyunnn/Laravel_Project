<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = ['proj_name', 'proj_description', 'URL'];

    function images() {
        return $this->hasMany('App\Models\Image');
    }
}
