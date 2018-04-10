@extends('layouts.app')

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <th scope="col">#</th>
            <th scope="col">Task</th>
            <th scope="col">Date created</th>
            <th></th>
        </thead>
            <tr>
                <th scope="row">{{ $task->id }}</th>
                <td>{{ $task->name }}</td>
                <td>{{ $task->created_at->toFormattedDateString() }}</td>
                <td>
                    <form action="{{url('tasks/' . $task->id)}}" method="post">
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                    </form>
                </td>
            </tr>
    </table>
@endsection