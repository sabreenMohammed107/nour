<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class FavoritesProducts extends Model
{
    protected $fillable = [
        'client_id', 'product_id'
    ];
}
