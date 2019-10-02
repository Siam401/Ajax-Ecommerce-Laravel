<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id','subcategory_id','sub_subcategory_id','manufacturer_id','title','description','picture1','picture2','picture3','picture4','price','discount','finalprice','quantity'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
    public function sub_subcategory()
    {
        return $this->belongsTo(Sub_subcategory::class);
    }

}
