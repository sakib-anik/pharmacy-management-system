<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicinesStock extends Model
{
    use HasFactory;

    public function getMedicineName()
    {
        return $this->belongsTo(Medicine::class, 'medicines_id', 'id');
    }
}