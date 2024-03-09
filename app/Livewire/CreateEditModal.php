<?php

namespace App\Livewire;

use App\Traits\GetModels;
use App\Traits\Priority;
use App\Traits\Status;
use Illuminate\Support\Facades\Date;
use Illuminate\Validation\Rule;
use Livewire\Component;

class CreateEditModal extends Component
{
    use GetModels;

    public bool $showModal = false;
    public mixed $model;
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

    public function save(){
        $modelClass = $this->getModelClass($this->model);
        $this->validate();
        $modelClass::create([
            'title' => $this->title,
            'description' => $this->description,
            'start_date' => $this->startDate,
            'estimated_end_date' => $this->estimatedEndDate,
            'priority' => $this->priority->value,
            'status' => $this->status->value,
            'user_id' => auth()->id(),
            'team_id' => auth()->user()->current_team_id,
            'project_leader_id' => auth()->id(),
        ]);
        $this->reset(['showModal', 'title', 'description', 'startDate', 'estimatedEndDate', 'priority', 'status']);
    }
}
