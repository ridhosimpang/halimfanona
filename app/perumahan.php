<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perumahan extends Model
{
    protected $table='perumahan';
    protected $fillable = ['nama', 'tiperumah', 'luasrumah', 'totalunit', 'luaslahan', 'foto'];
}
