<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['room_number'];

    protected $appends = [
        'is_booked'
    ];

    public function roomReservations()
    {
        return $this->hasMany(RoomReservation::class, 'room_id');
    }

    public function getIsBookedAttribute()
    {
        // return true;

        foreach ($this->roomReservations as $reservation) {
            if (Carbon::now()->isBetween($reservation->check_in, $reservation->check_out)) {
                return true;
            }
        }

        return false;
    }
}
