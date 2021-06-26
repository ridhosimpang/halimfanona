<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    protected $table='unit';
    protected $guarded = ['id', 'update_at', 'created_at'];

    /**
     * Get the konsumen that owns the unit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    /**
     * Get the konsumen associated with the unit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function konsumen()
    {
        return $this->hasOne(konsumen::class);
    }
    /**
     * Get the penjualan associated with the unit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function penjualan()
    {
        return $this->hasOne(penjualan::class);
    }
}
