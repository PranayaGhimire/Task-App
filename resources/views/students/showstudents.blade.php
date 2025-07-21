@extends('layouts.app')
@section('title')
    <a href="{{route('students.create')}}" class="btn btn-success">Create Student</a>
    <h1>All Students</h1>
@endsection

@section('content')
    <table class="table table-bordered table-striped table-responsive">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>City</td>
            <td>Actions</td>
        </tr>
        @foreach ($students as $student )
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->city}}</td>
                <td>
                    <a href={{route('students.show',$student->id)}} class="btn btn-secondary">View</a>
                    <a href={{route('students.edit',$student->id)}} class="btn btn-primary">Edit</a>
                    <a href={{route('students.destroy',$student->id)}} class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection