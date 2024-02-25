<?php

namespace App\Livewire;

use Livewire\Component;

class CreateEditModal extends Component
{
    public bool $showModal = false;

    public function render()
    {
        return view('livewire.create-edit-modal');
    }
}
