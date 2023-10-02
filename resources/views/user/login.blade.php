@extends('components.signlayout') <!-- You might need to create this layout -->
@section('content')
<br>
<div class="login-greetings">
        <h2>Welcome to the USJR SIS Excuse Slip Manager</h2>
        <p>We're glad you're here! The USJR SIS Excuse Slip Manager is your go-to platform for managing and submitting excuse slips with ease.</p>
        <p>Whether you're a student, faculty member, or administrator, our system is designed to simplify the process of handling excuse slips, making the entire experience more efficient and convenient.</p>
        <p>Log in to your account to get started, and enjoy the benefits of streamlined excuse slip management at the University of San Jose - Recoletos.</p>
    </div>
<div class="login-container">

    @csrf
    <form method="POST" action="{{ route('api.login') }}">
        @csrf
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Login</button>
        <a href="/register" class="signup-link">Sign Up here</a>

    </form>

@endsection
</div>

