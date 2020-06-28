<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()
    {
    	return $this->hasMany(Category::class);
    }

    public function departments()
    {
    	return $this->hasMany(Department::class);
    }
}
