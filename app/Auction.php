<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $table = 'actions';

    protected $fillable = [
        'id',
        'market_name',
     ];
}
