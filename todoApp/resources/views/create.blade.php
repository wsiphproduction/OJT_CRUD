@extends('layouts.main')
@push('head')
    <title>Add task</title>
@endpush

@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-items-center my-6">
        <div class="h2">Add a task</div>
        <a href="{{route("todo.home")}}" class="btn btn-primary btn-lg my-3">Back</a>
    </div>
    <div class="card mask-custom">
        <div class="card-body p-10">
        <form action="{{route("todo.store")}}" method="post">
            @csrf

            <label for="" class="form-label mt-2 text-white h6">Task Description</label>
            <input type="text" name="task" class="py-2 form-control shadow">
            <div class="text-danger">
                @error('task')
                {{$message}}
                @enderror
            </div>
            <label for="" class="form-label mt-2 text-white h6">Duration of task (in days)</label>
            <input type="text" name="duration" class="py-2 form-control shadow">
            <div class="text-danger">
                @error('duration')
                {{$message}}
                @enderror
            </div>
        <button class="btn btn-primary btn-lg mt-4">Add task</button>
        </form>
    </div>
</div>





@endsection