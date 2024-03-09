<?php

namespace App\Livewire;

use App\Traits\GetModels;
use App\Traits\Priority;
use App\Traits\Status;
use Illuminate\Support\Facades\Date;
use Illuminate\Validation\Rule;
use Livewire\Component;

class CreateEditStep extends Component
{
    use GetModels;

    public bool $showModal = false;
    public ?string $action = null;
    public ?string $title = null;
    public ?string $description = null;
    public ?string $startDate = null;
    public ?string $estimatedEndDate = null;
    public ?Priority $priority = null;
    public ?Status $status = null;

    public function render()
    {
        return view('livewire.create-edit-modal');
    }

    protected function rules()
    {
        return [
            'title' => 'required|string',
            'description' => 'required|string',
            'startDate' => 'required|string',
            'estimatedEndDate' => 'required|string',
            'priority' => 'required|valid_priority',
            'status' => 'required|valid_status',
        ];
    }
}
