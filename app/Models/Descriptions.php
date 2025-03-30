<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Descriptions extends Model
{
    protected $fillable = ['send_id', 'receive_id', 'descriptions', 'fichiers','extesion_fichiers'];
}
