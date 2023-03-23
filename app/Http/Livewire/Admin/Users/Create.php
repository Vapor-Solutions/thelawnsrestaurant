<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public User $user;

    protected $rules = [
        'user.role_id' => 'required',
        'user.name' => 'required',
        'user.email' => 'required|unique:users,email',
    ];
    public function mount()
    {
        $this->user = new User();
    }


    public function save()
    {
        $this->validate();
        $this->user->password = Hash::make('1234567890');
        $this->user->save();

        return redirect()->route('admin.users.index');
    }

    public function render()
    {
        return view('livewire.admin.users.create');
    }
}
