<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_no', 'client_id', 'order_value','vat_value','shipping_value','net_value','order_date','order_status_id'
        ,'deleivery_date','order_shipping_id','client_note','shop_note',
        
    ];
  
    public function OrderDetails()
    {
        return $this->hasMany('App\Models\OrderDetails');
    }
    
    
    public function clients()
    {
        return $this->belongsToMany(\App\Models\Client::class, 'client_product');
    }
}
