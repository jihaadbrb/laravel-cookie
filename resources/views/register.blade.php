<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="register" method="post">
        @csrf
        name:<input type="text" name="name">
        username:<input type="text" name="username">
        email:<input type="email" name="email">
        password: <input type="password" name="password">
        <input type="submit"  value ="create" name="" id="">
    </form>

    <br>
    <br>

    <form action="login" method="post">
        @csrf
        username:<input type="text" name="username">
        password: <input type="password" name="password">
        <input type="submit"  value ="create" name="" id="">
    </form>
</body>
</html>