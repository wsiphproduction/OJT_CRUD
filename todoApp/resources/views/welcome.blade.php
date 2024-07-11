@extends('layouts.main')
@push('head')
    <title> To-do List</title>
@endpush

@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">All Tasks</div>
        <a href="{{route("todo.create")}}" class="btn btn-primary btn-lg">Add a task</a>
    </div>

    <table class="table table-stripped table-dark">
        <tr>
            <th>Task</th>
            <th>Action</th>
        </tr>
        @foreach ($todos as $todo)
        <tr valign='middle'>
            <td>{{$todo->task}}</td>
            <td>
                <a href="{{route("todo.edit",$todo->id)}}" class="btn btn-success btn-sm">Edit</a>
                <a href="{{route("todo.delete",$todo->id)}}" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        @endforeach

    </table>
</div>


@endsection