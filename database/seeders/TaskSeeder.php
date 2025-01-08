<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::find(1);

        if ($user) {
            $task = new Task();
            $task->title = 'Task 1';
            $task->description = 'This is a task';
            $task->user_id = $user->id; // Solo se asigna si el usuario existe
            $task->save();
        } else {
            echo "No se encontró un usuario con ID 1. Verifica tus datos.\n";
        }
    }
}
