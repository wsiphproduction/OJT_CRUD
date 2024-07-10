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
        <form action="" method="post">
            <label for="" class="form-label">ID</label>
            <input type="text" name="name" class="form-control">
            <label for="" class="form-label mt-4">Task</label>
            <input type="text" name="name" class="form-control">
            <label for="" class="form-label mt-4">Created at</label>
            <input type="date" name="name" class="form-control">
            <label for="" class="form-label mt-4">Updated at</label>
            <input type="date" name="name" class="form-control">
        <button class="btn btn-primary btn-lg mt-4">Add task</button>
        </form>
    </div>
</div>





@endsection