@extends('layouts.main')
@push('head')
    <title>Update task</title>
@endpush

@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-items-center my-6">
        <div class="h2">Update a task</div>
        <a href="{{route("todo.home")}}" class="btn btn-primary btn-lg my-3">Back</a>
    </div>

    <div class="card">
        <div class="card-body">
        <form action="{{route("todo.updateData")}}" method="post">
            @csrf
            <label for="" class="form-label mt-2">Task</label>
            <input type="text" name="task" class="form-control" value="{{$todo->task}}">
            <input type="number" name="id" value="{{$todo->id}}" hidden>
        <button class="btn btn-primary btn-lg mt-4">Update task</button>
        </form>
    </div>
</div>





@endsection