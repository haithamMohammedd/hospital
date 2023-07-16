<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Not Allowed | {{ env('APP_NAME') }}</title>
</head>
<style>
    body{
        margin: 0;
        direction: rtl;
        color: #fff;
        font-size: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }


    h1{
        margin: 0;
    }
</style>
<body>
    <div class="error">
       <img src="{{ asset('images/error.png') }}" alt="error images">
    </div>
</body>
</html>
