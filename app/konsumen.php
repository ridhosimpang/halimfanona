<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class konsumen extends Model
{
    protected $table='konsumen';
    protected $guarded = ['id','created_at','updated_at']; /* melindungi field yang tidak boleh diisi manual, lihat mass assignment */

    /**
     * Get the unit associated with the konsumen
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    /**
     * Get the unit that owns the konsumen
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unit()
    {
        return $this->belongsTo(unit::class);
    }
    /**
     * Get the penjualan associated with the konsumen
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function penjualan()
    {
        return $this->hasOne(penjualan::class);
    }
}
