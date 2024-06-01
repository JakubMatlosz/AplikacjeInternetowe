@extends('layouts.app')

@section('title', 'Edit Teacher')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-sm p-4" style="max-width: 500px; width: 100%;">
        <h1 class="my-4 text-center">Edit Teacher</h1>
        <form action="/teachers/{{ $teacher->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $teacher->name }}" required>
            </div>
            <div class="form-group">
                <label for="surname">Surname</label>
                <input type="text" class="form-control" id="surname" name="surname" value="{{ $teacher->surname }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $teacher->email }}" required>
            </div>
            <div class="form-group">
                <label for="language">Language</label>
                <input type="text" class="form-control" id="language" name="language" value="{{ $teacher->language }}" required>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $teacher->phone_number }}" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block" style="background-color: #76787b; color: white;">Update Teacher</button>
        </form>
    </div>
</div>
@endsection
