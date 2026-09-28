<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome {{ auth()->user()->name }}</h1>

    @session('authMessage')
    <p style="color: red;">{{session('authMessage')}}</p>
    @endsession


<p style="color: blue;">{{auth()->user()->role}} account</p>
 <p>You are successfully login</p>
    <h3>This is your user side</h3>
    {{-- {{ dd(auth()->user()->toArray())   }} --}}
    
    
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <input type="submit" value="Logout">

    </form>
</body>
</html>