<?php

namespace App\Http\Livewire\Admin\RoomReservations;

use App\Models\Customer;
use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        $customers = Customer::all();
        return view('livewire.admin.room-reservations.create', );
    }
}
