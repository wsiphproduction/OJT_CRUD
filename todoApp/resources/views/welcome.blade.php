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
            <th>ID</th>
            <th>Task</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Action</th>
        </tr>
        <tr valign='middle'>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <a href="" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
    </table>
</div>


@endsection