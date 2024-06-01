@extends('layouts.app')

@section('title', 'Courses')

@section('content')
<div class="container">
    <h1 class="my-4 text-center">Courses</h1>

    @auth
        <a href="/courses/create" class="btn btn-primary mb-4" style="background-color: #76787b; color: white;">Add New Course</a>
    @endauth

    <form action="{{ route('courses.index') }}" method="GET" class="mb-4">
        <div class="form-row">
            <div class="col-md-3">
                <select name="language" class="form-control">
                    <option value="">All Languages</option>
                    @foreach($languages as $language)
                        <option value="{{ $language }}" {{ request('language') == $language ? 'selected' : '' }}>
                            {{ $language }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Course Name</th>
                    <th scope="col">Language</th>
                    <th scope="col">Teacher</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    @auth
                        <th scope="col">Actions</th>
                    @endauth
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
                        @auth
                            <td>
                                <a href="/courses/{{ $course->id }}/edit" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="/courses/{{ $course->id }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
