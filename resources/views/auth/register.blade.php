@extends('components.signlayout')
@section('title', 'ExSISslip Register')
@section('content')


<div class="register-container">
<form method="POST" action="{{ route('api.register') }}">

    <h2>Create an Account</h2>
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" required>
        <label for="username">Username</label>
        <input type="text" name="username" required>
        <label for="password">Password</label>
        <input type="password" name="password" required>
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" required>
        
        <div class="dropdown-container">
            <label for="role">Registered As</label>
            <select name="role" required>
                <option value="student">Student</option>
                <option value="counselor">Counselor</option>
                <option value="teacher">Teacher</option>
                <option value="dean">Dean</option>
                <option value="administrator">Administrator</option>
            </select>
        </div>
        
        <button type="submit">Register</button>
</form>
    <p>Already have an account? <a href="/">Login here</a></p>
</div>

@endsection



<style>

</style>


