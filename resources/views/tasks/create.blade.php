@extends('layouts.app')

@section('header')
    <h1 class="text-xl">Create New Task</h1>
@endsection

@section('content')
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" placeholder="Enter Task Title" name="title" class="form-control rounded-md" required value="{{ old('title') }}" />
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control rounded-md" placeholder="Enter Task Description">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Due Date</label>
            <input type="date" name="due_date" class="form-control rounded-md" value="{{ old('due_date') }}" />
        </div>

        <div class="mb-3">
            <label class="form-label">Priority</label>
            <select name="priority" class="form-select rounded-md">
                <option value="low" {{ old('priority') == 'low' ? 'selected' : '' }}>Low</option>
                <option value="medium" {{ old('priority') == 'medium' ? 'selected' : '' }}>Medium</option>
                <option value="high" {{ old('priority') == 'high' ? 'selected' : '' }}>High</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select rounded-md">
                <option value="pending" {{ old('status') == 'pending' ? 'selected' : ''}}>pending</option>
                <option value="completed" {{ old('status' == 'completed' ? 'selected' : '')}}>completed</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">
            Create Task
        </button>
    </form>
@endsection
