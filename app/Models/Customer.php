<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;

    public function testimonials() : HasOne{
        return $this->hasOne(Testimonial::class, 'customer_id');
    }
    public function tableReservations() : HasMany{
        return $this->hasMany(TableReservation::class, 'customer_id');
    }
    public function roomReservations() : HasMany{
        return $this->hasMany(RoomReservation::class, 'customer_id');
    }
}
