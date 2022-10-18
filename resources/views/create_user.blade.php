<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="http://127.0.0.1:8000/users/" method="post">
        @csrf
        <input type="text" placeholder="name" name="name">
        <input type="text" placeholder="lastname" name="lastname">
        <button type="submit">Save</button>
    </form>
</body>
</html>