<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prices extends Model
{
    use SoftDeletes;
    protected $table = 'price';
    protected $fillable = [
        'service_id','rate','discount'
    ];
}
