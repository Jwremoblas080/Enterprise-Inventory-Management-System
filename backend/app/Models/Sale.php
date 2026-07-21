<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'customer_id',
        'total_amount',
        'sale_date',
    ];
    protected $casts = [
        'customer_id' => 'integer',
        'total_amount' => 'decimal:2',
        
        'sale_date' => 'datetime:Y-m-d H:i:s',
    ];
}
