<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuctionHorse extends Model
{
    protected $table = 'auction_horses';

    protected $fillable = [
        'auction_id',
        'sale_id',
        'breed_id',
        'horse_name',
     ];
}
