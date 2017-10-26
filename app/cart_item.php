<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart_item extends Model
{
    protected $fillable = [

    	'name', 'description', 'price' ,'barcode', 'img' ,'category_id'




    ];

}
