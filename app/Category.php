<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'id',
        'category_name',
     ];
     
     public function salehorse()
    {
        return $this->hasMany('App\SaleHorse');
    }
}
