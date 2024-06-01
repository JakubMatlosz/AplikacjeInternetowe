@extends('layouts.app')

@section('title', 'Teachers')

@section('content')
<div class="container">
    <h1 class="my-4 text-center">Teachers</h1>
    @auth
        <a href="/teachers/create" class="btn btn-primary mb-4" style="background-color: #76787b; color: white;">Add New Teacher</a>
    @endauth
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Language</th>
                    <th scope="col">Phone Number</th>
                    @auth
                        <th scope="col">Actions</th>
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->surname }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->language }}</td>
                        <td>{{ $teacher->phone_number }}</td>
                        @auth
                            <td>
                                <a href="/teachers/{{ $teacher->id }}/edit" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="/teachers/{{ $teacher->id }}" method="POST" style="display:inline-block;">
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
