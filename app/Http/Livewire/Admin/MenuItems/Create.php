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
    public MenuItem $menuItem;
    use WithFileUploads;

    protected $listeners = [
        'done'=>'render'
    ];

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'price' => 'required',
        'image_path' => 'image'
    ];

    public function mount()
    {
        $this->menuItem = new MenuItem();
    }

    public function createMenuItem()
    {

        $this->validate();


        $this->menuItem->title = $this->title;
        $this->menuItem->menu_category_id = $this->menu_category_id;
        $this->menuItem->description = $this->description;
        $this->menuItem->price = $this->price;

        $imagename = Carbon::now()->timestamp . '.' . $this->image_path->extension();
        $this->image_path->storeAs('admin/menu_item_images', $imagename);
        $this->menuItem->image_path = $imagename;
        $this->menuItem->save();


        $this->emit('done', [
            'success'=>"You have Successfully Created a new Menu Item"
        ]);

        // $this->dispatchBrowserEvent('success', ['message'=>'Service has been added successfully']);

       //$this->reset();
    }
    public function render()
    {
        $categories = MenuCategory::all();
        return view('livewire.admin.menu-items.create', ['categories' => $categories]);
    }
}
