<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $table='penjualan';
    protected $guarded = ['id','created_at','updated_at']; /* melindungi field yang tidak boleh diisi manual, lihat mass assignment */

    /**
     * Get the perumahan that owns the penjualan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function perumahan()
    {
        return $this->belongsTo(perumahan::class);
    }
    /**
     * Get the unit that owns the penjualan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unit()
    {
        return $this->belongsTo(unit::class);
    }
    /**
     * Get the konsumen that owns the penjualan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function konsumen()
    {
        return $this->belongsTo(konsumen::class);
    }
}
