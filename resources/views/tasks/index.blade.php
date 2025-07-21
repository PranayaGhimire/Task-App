@extends('layouts.app')

@section('header')
    <h1 class="text-xl">All Tasks</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    <a href="{{route('tasks.create')}}" class="btn btn-primary">Add New Task</a> 
@endsection

@section('content')
    @if ($tasks->count())
    <div class="w-[90%] overflow-x-auto">
        <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Due Date</th>
                    <th>Priority</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task )
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->due_date ?? '-' }}</td>
                        <td>
                            <span class="badge bg-info text-dark p-2">
                                {{ ucfirst($task->priority) }}
                            </span>
                        </td>
                        <td>
                            <span class="badge p-2 {{ $task->status == 'completed' ? 'bg-success' : 'bg-warning text-dark'}}">
                                {{ucfirst($task->status)}}
                            </span>
                        </td>
                        <td class="d-flex gap-3">
                            <a href="{{ route('tasks.edit',$task)}}" class="btn btn-sm btn-secondary">Edit</a>
                            <form action="{{route('tasks.destroy',$task)}}" method="POST" >
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Are you sure')" class="btn btn-sm btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <p>No tasks found. Create one!</p>
@endif
@endsection
