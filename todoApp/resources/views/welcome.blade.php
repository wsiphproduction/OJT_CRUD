@extends('layouts.main')
@push('head')
    <title>To-do List</title>
@endpush

@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-items-center my-6">
        <div class="h2">All Tasks</div>
        <a href="{{route("todo.create")}}" class="btn btn-outline-dark btn-lg my-3">Add a task</a>
        </div>

    <div class="card mask-custom">
        <div class="card-body p-10">
    <table class="table table-stripped text-white table-transparent">
        <tr>
            <th>Task</th>
            <th>Duration (in days)</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        @foreach ($todos as $todo)
        <tr valign='middle'>
            <td>{{$todo->task}}</td>
            <td >{{$todo->duration}}</td>
            <td>
                <img src="{{asset($todo->image)}}" style="width:50px; height:50px;" alt="">
            </td>
            <td>
                <a href="{{route("todo.edit",$todo->id)}}" class="btn btn-success data-mdb-ripple-init editBtn">Edit</a>
                <a href="{{route("todo.delete",$todo->id)}}" class="btn btn-danger data-mdb-ripple-init deleteBtn" onclick="confirmation(event)">Delete</a>
            </td>
        </tr>
        @endforeach

    </table>
        </div>
    </div>
</div>

<script type="text/javascript">

    function  confirmation(ev)
    {

        ev.preventDefault();

        var routeToRedirect=ev.currentTarget.getAttribute('href');

        console.log(routeToRedirect);

        swal({

            title: "Are you sure to delete this task? " ,
 
            text: "You won't be able to revert this action " ,

            icon: "warning" ,

            buttons: true,

            dangerMode: true,

        })

        .then((willCancel)=>

        {

            if(willCancel)
            {
                window.location.href=routeToRedirect;
            }

        });
    }
    </script>

@endsection




