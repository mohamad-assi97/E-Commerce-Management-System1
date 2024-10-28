<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="/register" method="POST">
        @csrf
        <input type="text" name="name" required placeholder="Name">
        <input type="email" name="email" required placeholder="Email">
        <input type="password" name="password" required placeholder="Password">
        <button type="submit">Register</button>
    </form>
</body>
</html>
