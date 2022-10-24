<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carts extends Model
{
    use SoftDeletes;
    protected $table = 'cart';
    protected $fillable = [
        'user_id','service_id','rate_id','quantity'
    ];
}
