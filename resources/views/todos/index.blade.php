@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Todos') }}</div>
                <x-alert />
                @if ($todos)
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Todos Name</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody >
                    @foreach ($todos as $todo)
                        <tr id="row_{{$todo->id}}">
                         @if ($todo->completed)
                            <td><s>{{ $todo->title }}</s></td>  
                         @else
                            <td>{{ $todo->title }}</td>  
                         @endif   
                        <td>
                            <a href="/todos/{{ $todo->id }}" class="btn btn-info">Show</a>
                            <a href="{{ '/todos/'.$todo->id.'/edit' }}" class="btn btn-dark">Edit</a>
                            @if ($todo->completed)
                                <a href="javascript:void(0)" data-id="{{ $todo->id }}" class="btn btn-success" onclick="statusTodo(event.target)">Completed</a>
                            @else
                                <a href="javascript:void(0)" data-id="{{ $todo->id }}" class="btn btn-light" onclick="statusTodo(event.target)">Incompleted</a>
                            @endif
                            <a href="javascript:void(0)" data-id="{{ $todo->id }}" class="btn btn-danger" onclick="deleteTodo(event.target)">Delete</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    @else
                    <p>No todos to display</p>
                    @endif
                <hr>
                <ul class="list-unstyled list-group">
                    <li class="list-group-item">
                        <a href="/todos/create">+ Create new todos</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/export"> Export</a>
                    </li>
                <ul>
            </div>
        </div>
    </div>
</div>
@endsection