<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $table='penjualan';
    protected $fillable = ['nama_perumahan', 'blok', 'no', 'nama', 'status', 'tglakad','statusBerkas'];
}
