<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryTransaction extends Model
{
    protected $fillable = [
        'product_id',
        'quantity',
        'transaction_type',
        'transaction_date',
    ];
    protected $casts = [
        'product_id' => 'integer',
        'quantity' => 'integer',
        'transaction_type' => 'string',
        'transaction_date' => 'datetime:Y-m-d H:i:s',
    ];

}
