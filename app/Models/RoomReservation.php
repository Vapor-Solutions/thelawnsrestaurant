<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoomReservation extends Model
{
    use HasFactory;

    protected $appends = [
        'days',
        'total_charge'
    ];

    public function getDaysAttribute()
    {
        return Carbon::parse($this->check_in)->diffInDays($this->check_out);
    }

    public function getTotalChargeAttribute()
    {
        return $this->days * $this->rate;
    }

    public function roomCustomerReservations() : BelongsTo{
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function roomReservation() : BelongsTo{
        return $this->belongsTo(Room::class, 'room_id');
    }

}
