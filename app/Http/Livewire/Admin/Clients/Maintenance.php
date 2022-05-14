<?php

namespace App\Http\Livewire\Admin\Clients;

use App\Models\MaintenanceSubscriber;
use Livewire\Component;
use Livewire\WithPagination;

class Maintenance extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.clients.maintenance', [
            'maintenance_contacts'=> MaintenanceSubscriber::orderBy('created_at', 'DESC')->paginate(6)
        ]);
    }
}
