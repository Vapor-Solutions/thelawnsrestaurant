<?php

namespace App\Http\Livewire\Admin\MenuCategories;

use App\Models\MenuCategory;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    public $title, $image, $menuCategoryId, $new_image;
    use WithFileUploads;

    protected $rules = [
        'title'=>'required',
        'image'=>'required',
    ];

    public function mount($id)
    {
        $menuCategory = MenuCategory::where('id', $id)->first();
        $this->title = $menuCategory->title;
        $this->image = $menuCategory->image_path;
        
        $this->menuCategoryId = $id;
    }

    public function updateMenuCategory()
    {

        $menuCategory = MenuCategory::where('id', $this->menuCategoryId)->first();
        $menuCategory->title = $this->title;

        if ($this->new_image) {

            $imagename = Carbon::now()->timestamp . '.' . $this->new_image->extension();
            $this->new_image->storeAs('menu_category_images', $imagename);
            $menuCategory->image_path = $imagename;
        }

        $menuCategory->update();
        //$this->dispatchBrowserEvent('success', ['message' => 'The menu category has been added successfully']);
    }

    public function render()
    {
        return view('livewire.admin.menu-categories.edit');
    }
}
