<?php

namespace App;
use App\pengajuan;
use Illuminate\Database\Eloquent\Model;

class perumahan extends Model
{
    protected $table='perumahan';
    protected $fillable = ['nama', 'tiperumah', 'luasrumah', 'totalunit', 'luaslahan', 'foto'];

    /**
     * Get the pengajuan associated with the perumahan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pengajuan()
    {
        return $this->hasOne(pengajuan::class);
    }
    /**
     * Get the unit associated with the perumahan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unit()
    {
        return $this->hasOne(unit::class);
    }
    /**
     * Get the penjualan associated with the perumahan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function penjualan()
    {
        return $this->hasOne(penjualan::class);
    }
    /**
     * Get all of the konsumen for the perumahan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function konsumen()
    {
        return $this->hasMany(konsumen::class);
    }
}
