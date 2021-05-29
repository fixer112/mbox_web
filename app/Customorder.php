<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customorder extends Model
{
     protected $table = 'custom_orders';
     protected $primaryKey = 'id';
   protected $fillable = ['user_id','offer_price','product_id','product_name','quantity', 'status'];
}