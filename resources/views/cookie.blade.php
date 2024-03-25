<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="createcookie" method="post">
        @csrf
        <p>welcome
            @if(Cookie::has('cookiename'))
                {{Cookie::get("cookiename")}}
            @endif
        </p>



        <input type="text" name="cookiename" id="cookiename">
        <input type="submit" value="send">
    </form>
</body>

</html>