<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Edit extends Component
{
    public User $user;

    public function rules()
    {
        return [
            'user.role_id' => 'required',
            'user.name' => 'required',
            'user.email' => [
                'required',
                Rule::unique('users','email')->ignore($this->user->id),
            ]
        ];
    }

    public function mount($id)
    {
        $this->user = User::find($id);
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
        return view('livewire.admin.users.edit');
    }
}
