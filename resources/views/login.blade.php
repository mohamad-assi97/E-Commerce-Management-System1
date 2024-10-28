<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="/login" method="POST">
        @csrf
        <input type="email" name="email" required placeholder="Email">
        <input type="password" name="password" required placeholder="Password">
        <button type="submit">Login</button>
    </form>
</body>
</html>
