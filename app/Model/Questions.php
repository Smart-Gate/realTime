<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Model\Category;
use App\Model\Reply;

class Questions extends Model
{
    public function user(){
       return $this->belongTo(User::class);
    }
    public function replies(){
       return $this->hasMany(Reply::class);
    }
    public function category(){
       return $this->belongTo(Category::class);
    }
}
