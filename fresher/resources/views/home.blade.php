@extends('layouts.app')

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <th scope="col">Task</th>
            <th scope="col">Date created</th>
        </thead>
            @foreach($tasks as $task)
            <tr>
                <td><a href="{{url('tasks/' . $task->id)}}" class="badge badge-warning">{{ $task->name }}</a></td>
                <td>{{ $task->created_at->toFormattedDateString() }}</td>
            </tr>
            @endforeach
    </table>
@endsection