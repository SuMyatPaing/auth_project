<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Login page</h2>
        <form action="{{ route('login') }}" method="POST" >
            @csrf
            Email <input type="email" name="email">
            @error('email')
            {{ $message }}
            @enderror
            <br><br>
            Password <input type="password" name="password" id="">
             @error('password')
            {{ $message }}
            @enderror
            <br><br>
            <input type="submit" value="Login">
        
         </form>
</body>
</html>