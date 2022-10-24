<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payments extends Model
{
    use SoftDeletes;
    protected $table = 'payments';
    protected $fillable = [
        'order_id','transaction_no','amount','user_id','status','financial_year','date','time'
    ];
}
