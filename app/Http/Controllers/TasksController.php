<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller {
	//
	public function index() {
		return view('tasks.index')->with('tasks', Task::all());
	}

	public function create() {

	}

	public function store(Request $request) {
		Task::create(request()->only(['title', 'description']));
		return redirect('tasks');
	}
}
