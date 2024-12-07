@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <section id="login" class="login-section">
        <div class="container">
            <h2>Login</h2>
            <form class="login-form" action="{{ url('/login') }}" method="POST">
                @csrf
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username" required>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                
                <button type="submit" class="btn-login">Login</button>
            </form>
        </div>
    </section>
@endsection
