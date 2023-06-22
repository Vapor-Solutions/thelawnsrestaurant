<?php

namespace App\Http\Livewire\Admin\MenuItems;

use App\Models\MenuCategory;
use App\Models\MenuItem;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    public $title, $description, $price, $image_path, $menu_category_id;
    use WithFileUploads;

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'price' => 'required',
        'image_path' => 'image'
    ];

    public function createMenuItem()
    {

        $this->validate();

        $item = new MenuItem();
        $item->title = $this->title;
        $item->menu_category_id = $this->menu_category_id;
        $item->description = $this->description;
        $item->price = $this->price;

        $imagename = Carbon::now()->timestamp . '.' . $this->image_path->extension();
        $this->image_path->storeAs('menu_item_images', $imagename);
        $item->image_path = $imagename;
        $item->save();

        // $this->dispatchBrowserEvent('success', ['message'=>'Service has been added successfully']);

       //$this->reset();
    }
    public function render()
    {
        $categories = MenuCategory::all();
        return view('livewire.admin.menu-items.create', ['categories' => $categories]);
    }
}
