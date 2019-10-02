<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $fillable = [
        'title'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
