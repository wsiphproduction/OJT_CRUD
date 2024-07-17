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
                'task'=>'required|max:50',
                'duration'=>'required|integer',
                'image'=>'required|mimes:png,jpg,jpeg,webp'
            ]
            );

            if($request->has('image')){

                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
            
                $filename = time().'.'.$extension;

                $path = 'uploads/todos/';
                $file->move($path, $filename);
                
            }

        $todo=new todos;
        $todo->task=$request['task'];
        $todo->duration=$request['duration'];
        $todo->image=$path.$filename;
        $todo->save();

        return redirect(route("todo.home"))->with('success','Task added successfully');
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
                'task'=>'required|max:50',
                'duration'=>'required|integer',
                'image'=>'required|mimes:png,jpg,jpeg,webp'
            ]
            );

            if($request->has('image')){

                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
            
                $filename = time().'.'.$extension;

                $path = 'uploads/todos/';
                $file->move($path, $filename);

            }

        $id=$request['id'];
        $todo=todos::find($id);
        $todo->task=$request['task'];
        $todo->duration=$request['duration'];
        $todo->image=$path.$filename;
        $todo->save();

        return redirect(route("todo.home"))->with('update','Task updated successfully');
    }
}