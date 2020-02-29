<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $fillable = [
        'en_name', 'ar_name'
    ];
    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
}
