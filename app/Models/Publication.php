<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = ['id_user', 'photo_pub', 'article'];
}
