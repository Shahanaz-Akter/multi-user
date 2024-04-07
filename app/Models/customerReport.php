<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerReport extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'most_buyed_product_id',
        'most_buyed_product_quantity',
        'monthly_total_buyed_price',
        'month',
        'year'
    ];
}
