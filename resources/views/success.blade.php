<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Iran coupon | done!</title>
</head>
<body>
    @include('layouts.navigation')
    <h1 class="h1 m-5">Done !</h2>
    <div class="m-5 p-5 overflow-hidden shadow-sm sm:rounded-lg list">
        <h2 class="h2"> Operation done successfully.</h2>
        <a class="backbot" href="{{ route('dashboard') }}" style="color: black !important; text-decoration:underline;">Back to dashboard</a>
    </div>
    @include('footer')
</body>
</html>