<?php

namespace App\Http\Livewire\Admin\Customers;

use App\Models\Customer;
use App\Models\Testimonial;
use Illuminate\Foundation\Testing\WithoutEvents;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $testimonials;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $customers = Customer::paginate(20);

        return view('livewire.admin.customers.index', ['customers' => $customers]);
    }

    public function deleteCustomer($id)
    {
        $customer = Customer::where('id', $id)->first();
        $customer->delete();
    }
}
