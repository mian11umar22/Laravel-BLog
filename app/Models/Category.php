<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public Function Articles(){
        return $this->hasMany(Article::class);
    }
    protected $guarded=[];
}
