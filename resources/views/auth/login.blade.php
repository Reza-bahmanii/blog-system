@extends('layout')

@section('title', 'Login Page')

@section('content')
<h2>Login</h2><br><br>

    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="email">
            @error('email')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div><br>

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="password">
            @error('password')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div><br>
        
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection