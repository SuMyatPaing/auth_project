<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Register page</h2>
        <form action="{{ route('register') }}" method="POST">
@csrf
Name<input type="text" name='name'>
@error('name')
{{$message}}
@enderror
<br><br>


Email<input type="email" name='email'>
@error('email')
{{$message}}
@enderror
<br><br>


Phone<input type="number" name='phone'>
@error('phone')
{{$message}}
@enderror
<br><br>


Password<input type="password" name='password'>
@error('password')
{{$message}}
@enderror
<br><br>

Confirmation Password<input type="password" name='password_confirmation'>
@error('password_confirmation')
{{$message}}
@enderror
<br><br>
<input type="submit" value="Register">
        </form>
</body>
</html>