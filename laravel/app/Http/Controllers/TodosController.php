<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
//        fetch all todos from DB
        $todos = Todo::all();
//        display them in the todos/index page

        return view('todos.index')->with('todos', $todos);
    }

    public function show($todoId)
    {
       return view('todos.show')->with('todo', Todo::find($todoId));
    }
}
