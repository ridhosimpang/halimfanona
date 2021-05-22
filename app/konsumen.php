<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class konsumen extends Model
{
    protected $table='konsumen';
    protected $fillable = ['nama', 'nik', 'tmptlhr', 'tgllhr', 'alamat', 'jk', 'status_perkawinan', 'agama', 'namaperumahan', 'blok', 'no', 'nohp', 'foto', 'fotoktp', 'fotokk', 'fotonpwp', 'fotobukunikah'];
}
