<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function delete($id)
    {
        $user= User::find($id);
        if ($user->id == 1) {
            $this->emit('done', [
                'danger'=>"You can't Delete the Primary User of the System"
            ]);
            return;
        }

        $user->delete();

        $this->emit('done', [
            'success'=>"Successfully Deleted the User from the system"
        ]);

    }
    public function render()
    {
        return view('livewire.admin.users.index',[
            'users'=>User::all()
        ]);
    }
}
