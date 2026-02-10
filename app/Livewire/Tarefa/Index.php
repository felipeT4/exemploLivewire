<?php

namespace App\Livewire\Tarefa;

use App\Models\tarefa;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $tarefas = Tarefa::all();
        return view('livewire.tarefa.index', compact('tarefas'));
    }
}
