<?php
use App\unit;
use App\penjualan;

function hitungUnit($perumahanId){
  $hitung=unit::where('perumahan_id',$perumahanId)->count();
  if($hitung != null){
    return $hitung;
  }
  return 0;
}

function terjual($perumahanId){
  $terjual = penjualan::where('perumahan_id',$perumahanId)->count();

  if($terjual != null){
    return $terjual/hitungUnit($perumahanId)*100;
  }
  return 0;
}