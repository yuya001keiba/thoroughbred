<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleHorse extends Model
{
    protected $table = 'sale_horses';

    protected $fillable = [
        'breed_id',
        'horse_name',
        'category_id',
        'price',
        'applicant',
        'tel',
        'video',
        'point',
     ];
     
     Public function horse()
  {
    // Horseモデルのデータを引っ張てくる
    return $this->belongsTo(Horse::class, 'breed_id', 'breed_id');
  }
  
  public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
