<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $fillable = ['title','catagory', 'body'];
    protected $hidden = ['created_at', 'updated_at'];
    
}
