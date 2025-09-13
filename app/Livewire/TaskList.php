<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\taskmodel;

class TaskList extends Component
{
    public $tasks;

    protected $listeners = ['taskCreated' => 'refreshTasks']; // Escuta o listener e chama a função

    public function mount()
    {
        $this->tasks = taskmodel::all(); // Inicializa na primeira renderização
    }

    public function refreshTasks() {
        $this->tasks = taskmodel::all();
    }


    public function render()
    {

        return view('livewire.task-list');
    }
}
