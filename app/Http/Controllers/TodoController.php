<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class TodoController extends Controller
{
    //use auth middleware
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        //dd(auth()->user()->todos());
        //$userID = auth()->id();

        //dd($userID);
        $todos = auth()->user()->todos()->orderBy('completed')->get();
        return view('todos.index')->with(['todos' => $todos]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        //dd(auth()->user()->todos());
        //Todo::create($request->all());
        $request->validate([
            'title' => 'required',
            
        ]);
        //dd($request->all());
        auth()->user()->todos()->create($request->all());
        return redirect(route('todo.list'))->with('message', 'Todo created successfully');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(TodoCreateRequest $request, Todo $todo)
    {
        $todo->update(['title' => $request->title]);
        return redirect(route('todo.list'))
        ->with('message', 'Updated successfully!');
    }

    public function complete(Request $request, Todo $todo)
    {
        if ($todo->completed == 0) {
            $todo->update(['completed' => 1]);
        } else {
            $todo->update(['completed' => 0]);
        }
        
        return response()->json(['success' => 'Status changed successfully!!']);
        
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return response()->json(['success' => 'Task deleted successfully!']);
    }

    
}
