<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }
    public $timestamps = false;

    protected $fillable = [
        'name',
        'color',
        'size',
        'stock',
        'category_id',
        'supplier_id',
    ];
}
