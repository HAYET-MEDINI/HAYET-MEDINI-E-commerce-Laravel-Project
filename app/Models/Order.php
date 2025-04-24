<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Order extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTO(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(orderItem::class);
    }

    public function transactions()
    {
        return $this->hasOne(Transaction::class);
    }
}
