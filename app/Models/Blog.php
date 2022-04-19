<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'blog_message'];
    function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
