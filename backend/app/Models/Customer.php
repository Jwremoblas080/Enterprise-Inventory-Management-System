<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',

    ];
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
    use SoftDeletes;
}
