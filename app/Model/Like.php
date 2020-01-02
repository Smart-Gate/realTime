<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $gaurded = [];
    protected $fillable = ['user_id'];
}
