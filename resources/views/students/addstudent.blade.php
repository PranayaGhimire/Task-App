@extends('layouts.app')
@section('title')
    <h1>Create New Student</h1>
@endsection

@section('content')
    <form action="{{route('students.store')}}">
        @csrf
        <div>
            <label for="Name">Name</label>
            <input placeholder="Enter Name"/>
          
        </div>
        <div>
            <label for="Email">Email</label>
            <input type="email" placeholder="Enter email"/>
        </div>
        <div>
            <label for="City">City</label>
            <input placeholder="Enter City"/>
        </div>
        <button class="btn btn-primary">Create</button>
    </form>
@endsection