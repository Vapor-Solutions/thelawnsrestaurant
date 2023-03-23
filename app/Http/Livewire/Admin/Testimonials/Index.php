<?php

namespace App\Http\Livewire\Admin\Testimonials;

use App\Models\Testimonial;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = [
        'done' => 'render'
    ];


    public function delete($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();

        $this->emit('done', [
            'success' => 'Successfully Deleted that Testimonial'
        ]);
    }
    public function render()
    {
        return view('livewire.admin.testimonials.index', [
            'testimonials' => Testimonial::all()
        ]);
    }
}
