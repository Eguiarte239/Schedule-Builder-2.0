<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Date;
use Livewire\Component;

class CreateEditModal extends Component
{
    public bool $showModal = false;
    public ?string $action = null;
    public ?string $title = null;
    public ?string $description = null;
    public ?Date $startDate = null;
    public ?Date $estimatedEndDate = null;
    public ?string $priority = null;

    public function render()
    {
        return view('livewire.create-edit-modal');
    }
}
