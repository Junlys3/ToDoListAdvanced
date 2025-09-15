<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\taskmodel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TaskList extends Component
{
    public $tasks;

    protected $listeners = ['taskCreated' => 'refreshTasks']; // Escuta o listener e chama a função

    public function mount()
    {
       // Pega todas as tarefas do usuário(Comparando o campo user_id com o id do user )
        $this->tasks = Auth::user()->tasks; // pega as tasks do user autenticado, pelo relacionamento entre as models
    }

    public function refreshTasks() {
        $this->tasks = Auth::user()->tasks;
    }


    public function render()
    {

        return view('livewire.task-list');
    }
}
