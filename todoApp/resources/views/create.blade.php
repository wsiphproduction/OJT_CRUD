@extends('layouts.main')
@push('head')
    <title>Add task</title>
@endpush

@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-items-center my-6">
        <div class="h2">Add a task</div>
        <a href="{{route("todo.home")}}" class="btn btn-outline-dark btn-lg my-3">Back</a>
    </div>
    <div class="card mask-custom">
        <div class="card-body p-10">
        <form action="{{route("todo.store")}}" method="post" enctype="multipart/form-data">
            @csrf

            <label for="" class="form-label mt-2 text-white h6">Task Description</label>
            <input type="text" name="task" class="py-2 form-control shadow" value="{{old('task')}}">
            <div class="text-danger">
                @error('task')
                {{$message}}
                @enderror
            </div>
            <label for="" class="form-label mt-4 text-white h6">Duration of task (in days)</label>
            <input type="number" name="duration" class="py-2 form-control shadow" value="{{old('duration')}}">
            <div class="text-danger">
                @error('duration')
                {{$message}}
                @enderror
            </div>
            <label for="" class="form-label mt-4 text-white h6">Upload Image</label>
            <input type="file" name="image" class="py-2 form-control shadow" value="{{old('image')}}">
            <div class="text-danger">
                @error('image')
                {{$message}}
                @enderror
            </div>
        <button class="btn btn-outline-dark btn-lg mt-4">Add task</button>
        </form>
    </div>
</div>


@endsection