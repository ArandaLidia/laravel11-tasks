<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $user =Auth::user();
        $task = $user -> task;
        return view('dashboard', compact('task'));
    }
}
