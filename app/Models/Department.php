<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function products()
    {
    	return $this->belongTo(Product::class);
    }
}
