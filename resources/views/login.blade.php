<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <form action="/login" method="post">
        @csrf
        <label for="">Name : </label>
        <input type="text" name="username">
        <label for="">Email : </label>
        <input type="text" name="email">
        <label for="">Password : </label>
        <input type="text" name="password">
        <input type="submit" value="login">
    </form>
@if ($errors)
{{ dd($errors) }}
@endif
</body>
</html>




{{--  --}}
