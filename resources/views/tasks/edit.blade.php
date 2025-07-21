@extends('layouts.app')
@section('header')
    <h1 class="text-xl">Update Task</h1>
@endsection

@section('content')
    <form action="{{route('tasks.update',$task)}}" method="POST">
        @csrf @method('PUT')
        
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" class="form-control rounded-md" required value="{{ old('title',$task->title)}}"/>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control rounded-md" required >{{old('description',$task->description)}}
            </textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Due Date</label>
            <input type="date" name="due_date" class="form-control rounded-md" value="{{old('due_date',$task->due_date)}}"/>
        </div>

        <div class="mb-3">
            <label class="form-label">Priority</label>
               <select  name="priority" id="" class="form-select rounded-md">
                <option value="low" {{ old('priority',$task->priority) === 'low' ? 'selected' : ''}}> Low</option>
                <option value="medium" {{ old('priority', $task->priority) === 'medium' ? 'selected' : ''}} >Medium</option>
                <option value="high" {{ old('priority',$task->priority) == 'high' ? 'selected' : ''}}>High</option>

            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select  name="status" id="" class="form-select rounded-md">
                <option value="pending" {{ old('status',$task->status) === 'pending' ? 'selected' : ''}}> Pending</option>
                <option value="completed" {{ old('status', $task->status) === 'completed' ? 'selected' : ''}} >Completed</option>
            </select>
        </div>

        <button class="btn btn-primary">Update Task</button>
    </form>
@endsection