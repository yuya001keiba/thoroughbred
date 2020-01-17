<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horse extends Model
{
    protected $table = 'horses';
    
    public $incrementing = false;
    protected $primaryKey = 'breed_id';
    

    protected $fillable = [
        'breed_id',
        'horse_name',
        'gender',
        'birthday',
        'color',
        'sire',
        'dam',
        'broodmare_sire',
        'breeding_farm',
     ];
     
     Public function salehorse()
  {
    // SaleHorseモデルのデータを引っ張てくる
    return $this->hasOne(SaleHorse::class, 'breed_id', 'breed_id');
  }
}
