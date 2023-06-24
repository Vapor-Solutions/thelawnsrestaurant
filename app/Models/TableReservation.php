<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TableReservation extends Model
{
    use HasFactory;

 

    public function tableReservations() : BelongsTo{
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
