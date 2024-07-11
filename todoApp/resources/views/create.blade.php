@extends('layouts.main')
@push('head')
    <title>Add task</title>
@endpush

@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">Add a task</div>
        <a href="{{route("todo.home")}}" class="btn btn-primary btn-lg">Back</a>
    </div>
    <div class="card">
        <div class="card-body">
        <form action="{{route("todo.store")}}" method="post">
            @csrf

            <label for="" class="form-label mt-2">Task</label>
            <input type="text" name="task" class="form-control">
            <div class="text-danger">
                @error('task')
                {{$message}}
                @enderror
            </div>
        <button class="btn btn-primary btn-lg mt-4">Add task</button>
        </form>
    </div>
</div>





@endsection