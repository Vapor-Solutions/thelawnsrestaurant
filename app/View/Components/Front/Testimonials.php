<?php

namespace App\View\Components\Front;

use App\Models\Testimonial;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Testimonials extends Component
{
    /**
     * Create a new component instance.
     */

    public $testimonials;
    public function __construct()
    {
        $this->testimonials = Testimonial::limit(10)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.testimonials');
    }
}
