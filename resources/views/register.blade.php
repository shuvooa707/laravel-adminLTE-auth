<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="/register" method="post">
        @csrf
        <label for="">Name : </label>
        <input type="text" name="name"><br>
        <label for="">Username : </label>
        <input type="text" name="username"><br>
        <label for="">Email : </label>
        <input type="email" name="email"><br>
        <label for="">Password : </label>
        <input type="text" name="password"><br>
        <input type="text" name="password_confirmation"><br>
        <input type="submit" value="login">
    </form>

    @if ($errors)
    {{ dd($errors) }}
    @endif

</body>
</html>
{{--  --}}
