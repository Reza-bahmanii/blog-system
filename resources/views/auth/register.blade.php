@extends('layout')

@section('title', 'Register Page')

@section('content')
<h2>Register</h2><br><br>

    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                placeholder="enter name">
            @error('name')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div><br>
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

        <div class="form-group">
            <label>Repeat Password</label>
            <input type="password" class="form-control" name="password_confirmation" placeholder="password_confirmation">
            @error('password_confirmation')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div><br>
        
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
@endsection