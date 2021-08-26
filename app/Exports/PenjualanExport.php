<?php

namespace App\Exports;

use App\penjualan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PenjualanExport implements FromView , ShouldAutoSize
{
    protected $penjualan;
    function __construct($penjualan) {
        $this->penjualan = $penjualan;
    }
    public function view(): View
    {
        return view ('excel/penjualan',[
            'penjualan'=> $this->penjualan,
        ]);
    }
}
