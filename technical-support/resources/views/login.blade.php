<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <form action="/problems" method="post">
        @csrf
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Sign in">
    </form>
    </body>
</html>
