<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = [
        'user_id', 'country_id', 'city_id', 'mobile1','mobile2'
    ];



    public function reviews()
    {
        return $this->hasMany('App\Models\Reviews');
    }
    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }
    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }
    public function products()
    {
        return $this->belongsToMany(\App\Models\Product::class,'client_product');
    }
    public function favoriteProduct()
    {
        return $this->belongsToMany(\App\Models\Product::class,'favorites_products');
    }

    public function cart()
    {
        return $this->hasMany('App\Models\Cart'.'cart_id','id');
    }
}
