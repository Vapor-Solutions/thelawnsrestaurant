<?php

namespace App\Http\Livewire\Admin\TableReservations;

use App\Models\TableReservation;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $table_reservations = TableReservation::paginate(10);
        return view('livewire.admin.table-reservations.index', ['table_reservations'=>$table_reservations]);
    }

    public function deleteTableReservation($id){
        $table_reservations = TableReservation::where('id', $id)->first();
        $table_reservations->delete();
        
    }
}
