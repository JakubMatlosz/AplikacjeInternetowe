@extends('layouts.app')

@section('title', 'Courses')

@section('content')
<div class="container">
    <h1 class="my-4 text-center">Courses</h1>
    <a href="/courses/create" class="btn btn-primary mb-4">Add New Course</a>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Course Name</th>
                    <th scope="col">Language</th>
                    <th scope="col">Teacher</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->language }}</td>
                        <td>{{ $course->teacher->name }} {{ $course->teacher->surname }}</td>
                        <td>{{ $course->start_date }}</td>
                        <td>{{ $course->end_date }}</td>
                        <td>
                            <a href="/courses/{{ $course->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/courses/{{ $course->id }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
