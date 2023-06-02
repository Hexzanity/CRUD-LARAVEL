<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Order extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public $timestamps = false;

    protected $fillable = [
        'client_id',
        'product_id',
        'quantity',
        'delivery_date',
    ];

    protected static function booted()
    {
        static::creating(function ($order) {
            $order->delivery_date = Carbon::now()->addDays(10);
        });
    }
}
