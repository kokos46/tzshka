<html>
<head>
    <title>Technical support</title>
</head>
<body>
    <h1>Введите текст проблемы</h1>
    <form action="/" method="post">
        @csrf
        <input type="text" name="header">
        <input type="text" name="problemtext">
        <input type="submit">
    </form>
    <h1></h1>
</body>
</html>
