<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;

class DashboardLivewire extends Component
{
    public $tasks;
    public function mount(){
    $this->tasks=Task::where('user_id', auth()->id())->get();
}

    public function render()
    {
        $data = 'Bienvenido al gestor de tareas'; // Define la variable

        return view('livewire.dashboard-livewire', compact('data'))
            ->layout('layouts.app'); // Asegúrate de que el layout esté configurado
    }
}
