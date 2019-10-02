<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_subcategory extends Model
{
    protected $fillable = [
        'title','fontawsome','category_id','subcategory_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
