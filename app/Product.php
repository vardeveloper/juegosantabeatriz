<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Models\Category;

class Product extends Model
{
    use Resizable;

    protected $fillable = [
        'name',
        'slug',
        'excerpt',
        'description',
        'images',
        'price',
        'category_id',
        'spotlight',
        'status',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}
