<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $fillable = ['title','catagory','news_image','body','updated_at','cartoon'];
    protected $hidden = ['created_at'];
    
}
