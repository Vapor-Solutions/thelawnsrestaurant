<?php

namespace App\Http\Livewire\Admin\RoomReservations;

use App\Models\RoomReservation;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $room_reservations = RoomReservation::paginate(10);
        // dd($room_reservations);
        return view('livewire.admin.room-reservations.index', ['room_reservations'=> $room_reservations]);
    }
}
