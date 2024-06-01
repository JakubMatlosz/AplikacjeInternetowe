@extends('layouts.app')

@section('title', 'Teachers')

@section('content')
<h1 class="my-4 text-center">Teachers</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Language</th>
            <th>Phone</th>
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
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
