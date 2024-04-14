<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public function getCustomersName()
    {
        return $this->belongsTo(Customer::class, 'customers_id', 'id');
    }
}