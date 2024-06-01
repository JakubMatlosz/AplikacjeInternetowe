@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
        <h1 class="my-4 text-center">Login</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first('email') }}
            </div>
        @endif
        <form method="POST" action="/login">
            @csrf
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block" style="background-color: #76787b; color: white;">Login</button>
        </form>
    </div>
</div>
@endsection
