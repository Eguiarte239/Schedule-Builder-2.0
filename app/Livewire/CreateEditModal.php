<?php

namespace App\Livewire;

use App\Traits\Models;
use App\Traits\Priority;
use App\Traits\Status;
use Livewire\Component;

class CreateEditModal extends Component
{
    use Models;

    public bool $showModal = false;
    public ?string $action = null;
    public ?string $model = null;
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

    protected $rules = [
        'title' => 'required|string',
        'description' => 'required|string',
        'startDate' => 'required|string',
        'estimatedEndDate' => 'required|string',
        'priority' => 'required|integer',
        'status' => 'required|integer',
    ];

    public function save(){
        $this->validate();

        $model = $this->getModelClass($this->model);
        dd($model);
    }
}
