<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todos;

class todosController extends Controller
{
    public function index(){
        $todos=todos::all();
        $data=compact('todos');
        return view("welcome")->with($data);
    }
    public function store(Request $request){
        $request->validate(
            [
                'task'=>'required'
            ]
            );
        $todo=new todos;
        $todo->task=$request['task'];
        $todo->save();

        return redirect(route("todo.home"));
    }

    public function edit($id){
        $todo=todos::find($id);
        $data=compact('todo');
        return view("update")->with($data);
    }

    public function delete($id){
        todos::find($id)->delete();
        return redirect(route("todo.home"));
    }

    public function updateData(Request $request){
        $request->validate(
            [
                'task'=>'required'
            ]
            );
        $id=$request['id'];
        $todo=todos::find($id);
        $todo->task=$request['task'];
        $todo->save();

        return redirect(route("todo.home"));
    }
}
