<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function create()
    {
        return view('todo.create-todo');
    }

    public function save(Request $request)
    {
        Todo::create([
            'todo' => $request->todo
        ]);

        return redirect()->route('create-todo');
    }
}
