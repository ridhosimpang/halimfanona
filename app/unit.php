<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    protected $table='unit';
    protected $guarded = ['id', 'update_at', 'created_at'];
}
