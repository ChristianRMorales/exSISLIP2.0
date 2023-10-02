<!-- resources/views/user/register.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h1>User Registration</h1>
    <form method="POST" action="{{ route('api.register') }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Register</button>
    </form>
</body>
</html>