<?php

namespace App\Http\Livewire\Admin\TableReservations;

use App\Models\Customer;
use App\Models\TableReservation;
use Carbon\Carbon;
use Livewire\Component;

class Create extends Component
{
    public $client;

    public $name, $reservation_date, $reservation_time, $pax, $data;

    protected $rules = [
        //'name'=>'required',
        'reservation_date'=>'required',
        'reservation_time'=>'required',
        'pax'=>'required',
    ];

    public function createTableReservation(){

        $this->validate();

        $data = json_decode($this->client);
        $reservation = new TableReservation();
        
       //dd($data->name);
        $reservation->customer_id =$data->id;
        $reservation->reservation_date = Carbon::parse($this->reservation_date);

        // $time = $this->reservation_time;
        // $formatted = Carbon::parse($time)->format('H:i:s');

        //dd($formatted);
        $reservation->reservation_time = Carbon::parse($this->reservation_time)->toTimeString();
        $reservation->pax = $this->pax;

       // $timeOnly = Carbon::parse($model->your_column)->format('H:i:s');
        
        $reservation->save();

        $this->reset();
    }

    public function render()
    {
        $customers = Customer::all();

        return view('livewire.admin.table-reservations.create', ['customers'=>$customers]);
    }
}
