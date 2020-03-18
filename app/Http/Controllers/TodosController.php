<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        return view('todos.index')->with('todos', Todo::all());
    }
    // public function show($todoId){
    //     return view('todos.show')->with ('todos',  Todo::find($todoId));
      
    // }
    public function show($todoId)
    {
      return view('todos.show')->with('todo', Todo::find($todoId));
    }
    public function create()
    {
        return view('todos.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'name'=>'required|min:6|max:10',
            'description'=>'required'
        ]);

        $data = request()->all();

        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed=false;

        $todo->save();
        session()->flash('success', 'todo created successfully');
        return redirect('/todos');
       

    }

    public function edit(Todo $todo){

        return view('todos.edit')->with('todo', $todo);
    }

    public function update(Todo $todo)
    {
        $this->validate(request(),[
            'name'=>'required|min:6|max:10',
            'description'=>'required'
        ]);
        $data = request()->all();

  

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        // $todo->completed=false;

        $todo->save();
        session()->flash('success', 'todo edit successfully');
        return redirect('/todos');

    }
    public function destroy(Todo $todo)
    {
   
        $todo->delete();
        return redirect('/todos');
    }



}


