<?php
use App\unit;

function hitungUnit($perumahanId){
  $hitung=unit::where('perumahan_id',$perumahanId)->count();
  if($hitung != null){
    return $hitung;
  }
  return 0;
}