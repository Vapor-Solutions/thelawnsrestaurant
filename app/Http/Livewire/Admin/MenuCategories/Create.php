<?php

namespace App\Http\Livewire\Admin\MenuCategories;

use App\Models\MenuCategory;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    public $image_path, $title;
    use WithFileUploads;

    protected $rules = [
        'title'=>'required',
        'image_path'=>'image',
    ];

    public function createCategory(){

        $this->validate();

        $category = new MenuCategory();
        $category->title = $this->title;

        $imagename = Carbon::now()->timestamp.'.'.$this->image_path->extension();
        $this->image_path->storeAs('admin/menu_category_images', $imagename);
        $category->image_path = $imagename;
        $category->save();

        // $this->dispatchBrowserEvent('success', ['message'=>'Service has been added successfully']);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.menu-categories.create');
    }
}
