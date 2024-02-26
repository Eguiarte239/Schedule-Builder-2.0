<?php

namespace App\Livewire;

use App\Traits\Priority;
use App\Traits\Status;
use Illuminate\Support\Facades\Date;
use Livewire\Component;

class CreateEditModal extends Component
{
    public bool $showModal = false;
    public ?string $action = null;
    public ?string $model = null;
    public ?string $title = null;
    public ?string $description = null;
    public ?Date $startDate = null;
    public ?Date $estimatedEndDate = null;
    public ?Priority $priority = null;
    public ?Status $status = null;

    public function render()
    {
        return view('livewire.create-edit-modal');
    }

    protected $rules = [
        'title' => 'required|string',
        'description' => 'required|string',
        'startDate' => 'required|date',
        'estimatedEndDate' => 'required|date',
        'priority' => 'required|integer',
        'status' => 'required|integer',
    ];
}
