<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskComponent extends Component
{
    // Declarar las propiedades públicas
    public $tasks;
    public $title;
    public $description;
    public $modal = false;


    // Método para limpiar los campos
    private function clearFields()
    {
        $this->title = '';
        $this->description = '';
    }

    // Método para crear una tarea y abrir el modal
    public function createTask()
    {
        $this->clearFields();
        $this->modal = true;
    }

    // Método que renderiza la vista del componente
    public function render()
    {
        // Retorna la vista 'livewire.task-component'
        return view('livewire.task-component');
    }
}
