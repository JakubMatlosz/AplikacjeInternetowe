@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-sm p-4" style="max-width: 500px; width: 100%;">
        <h1 class="my-4 text-center">Edit Course</h1>
        <form action="/courses/{{ $course->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Course Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $course->name) }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="language">Language</label>
                <input type="text" class="form-control @error('language') is-invalid @enderror" id="language" name="language" value="{{ old('language', $course->language) }}" required>
                @error('language')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="teacher_id">Teacher</label>
                <select class="form-control @error('teacher_id') is-invalid @enderror" id="teacher_id" name="teacher_id" required>
                    @foreach($teachers as $teacher)
                        <option value="{{ $teacher->id }}" {{ old('teacher_id', $course->teacher_id) == $teacher->id ? 'selected' : '' }}>{{ $teacher->name }} {{ $teacher->surname }}</option>
                    @endforeach
                </select>
                @error('teacher_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date" value="{{ old('start_date', $course->start_date) }}" required>
                @error('start_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date" value="{{ old('end_date', $course->end_date) }}" required>
                @error('end_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block" style="background-color: #76787b; color: white;">Update Course</button>
        </form>
    </div>
</div>
@endsection
