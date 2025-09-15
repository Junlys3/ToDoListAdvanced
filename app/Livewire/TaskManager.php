<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\taskmodel;
use Illuminate\Support\Facades\Auth;

class TaskManager extends Component
{
   public $title;
   public $description;


   protected $rules = [
      'title' => 'required',
      'description' => 'nullable|string',
   ];


    public function render()
    {


        return view('livewire.task-manager');
    }

     public function store(){
        $this->validate();

        taskmodel::create([
            'title' => $this->title,
            'description' => $this->description,
            'user_id' => Auth::id(),
        ]);

        $this->dispatch('taskCreated');
        $this->title = '';
    }
}
