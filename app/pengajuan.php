<?php

namespace App;

use App\perumahan;
use App\unit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan extends Model
{
    protected $table='pengajuan';
    protected $guarded = ['id', 'update_at', 'created_at'];

    /**
     * Get the perumahan that owns the pengajuan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function perumahan()
    {
        return $this->belongsTo(perumahan::class);
    }
    /**
     * Get the unit that owns the pengajuan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unit()
    {
        return $this->belongsTo(unit::class);
    }
}
