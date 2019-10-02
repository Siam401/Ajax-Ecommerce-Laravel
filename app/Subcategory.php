<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'title','fontawsome','category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function sub_subcategories()
    {
        return $this->hasMany(Sub_subcategory::class);
    }
}
