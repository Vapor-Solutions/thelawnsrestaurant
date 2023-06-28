<?php

namespace App\Http\Livewire\Admin\RoomReservations;

use App\Models\Customer;
use App\Models\Room;
use App\Models\RoomReservation;
use App\Models\RoomSelection;
use App\Models\RoomType;
use Carbon\Carbon;
use Livewire\Component;

class Create extends Component
{
    public $client;
    public $roomType;
    public $roomNumbers;
    public $selectedRoomType;
    public $roomSelection;

    public $name, $check_in, $check_out, $rate, $data, $customerData, $roomNumber;


    protected $rules = [
        'check_in' => 'required',
        'check_out' => 'required|date|after:checkIn',
        'rate' => 'required',
    ];


    public function mount()
    {
        $this->roomNumbers = [];
    }

    public function updatedClient($client)
    {
        $this->customerData = json_decode($client, true);
    }

    public function updatedRoomType($value)
    {
        // Retrieve the room type details
        $roomType = RoomType::find($value);

        // Set the pax value
        if ($roomType) {
            $this->roomSelection['pax'] = $roomType->pax;
        }
    }

    public function createRoomReservation()
    {

        $this->validate();


        $data = json_decode($this->client);
        $reservation = new RoomReservation();

        $reservation->customer_id = $data->id;
        $reservation->room_id = $this->roomNumber;
        $reservation->check_in = Carbon::parse($this->check_in);
        $reservation->check_out = Carbon::parse($this->check_out);

        if ($reservation->check_in && $reservation->check_out && $this->roomType) {
            $roomType = RoomType::find($this->roomType);

            if ($roomType) {
                $diffInDays = $reservation->check_out->diffInDays($reservation->check_in);
                $rate = $roomType->rate;
                $reservation->rate = $diffInDays * $rate;
                $this->rate = $reservation->rate;

                $reservation->save();

                // Create the room selection
                $roomSelection = new RoomSelection();
                $roomSelection->room_reservation_id = $reservation->id;
                $roomSelection->room_type_id = $this->roomType;
                $roomSelection->pax = $roomType->pax; // Retrieve pax from room type
                $roomSelection->extras = '';
                $roomSelection->save();

                $this->reset();
                session()->flash('success', 'Room reservation created successfully.');
            } else {
                $this->rate = null;
                session()->flash('error', 'Failed to find room type with ID: ' . $this->roomType);
            }
        } else {
            $this->rate = null;
            session()->flash('error', 'Please provide valid check-in, check-out dates, and room type.');
        }

        return redirect()->route('admin.room-reservations.index');
    }

    public function filterRoomNumbers()
    {
        if (!empty($this->roomType)) {
            // Get the room numbers that match the room type
            $roomNumbers = Room::where('room_type_id', $this->roomType)->pluck('id');

            // Exclude the room numbers that have an active reservation
            $reservedRoomNumbers = RoomReservation::where('check_out', '>', Carbon::now())
                ->pluck('room_id');

            $availableRoomNumbers = $roomNumbers->diff($reservedRoomNumbers);

            // Fetch the room type details
            $this->selectedRoomType = RoomType::find($this->roomType);

            $this->roomNumbers = Room::whereIn('id', $availableRoomNumbers)->get();
            $this->rate = $this->selectedRoomType->rate;
        } else {
            $this->roomNumbers = [];
            $this->selectedRoomType = null;
            $this->rate = null;
        }
    }

    public function render()
    {
        $customers = Customer::all();
        $roomTypes = RoomType::all();
        $rooms = Room::all();


        return view('livewire.admin.room-reservations.create', compact('customers', 'roomTypes', 'rooms'));
    }
}
