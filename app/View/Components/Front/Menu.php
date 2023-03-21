<?php

namespace App\View\Components\Front;

use App\Models\MenuCategory;
use App\Models\MenuItem;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    /**
     * Create a new component instance.
     */
    public $menuItems;
    public function __construct()
    {
        $this->menuItems = MenuItem::limit(12)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.menu');
    }
}
