<!-- resources/views/user/profile.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>
    <form method="POST" action="{{ route('api.updateProfile', ['userId' => $user->id]) }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}" required>

        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="{{ $user->username }}" required>

        <button type="submit">Update Profile</button>
    </form>
</body>
</html>