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
    <title>Iran coupon | {{ $user->name }}'s coupon</title>
</head>
<body>
@include('layouts.navigation')
<h1 class="h1 m-5">{{ $user->name }}'s coupons</h1>
    <div class="m-5 p-5 overflow-hidden shadow-sm sm:rounded-lg list">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($user->coupons as $coupon)
                <div class="col">
                    <div class="card favcoupon h-100 cd">
                        <img src="{{ asset('/storage/'. $coupon->image) }}" class="card-img-top" alt="...">
                        <a href="/coupon/{{ $coupon->id }}" class="btn stretched-link"></a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $coupon->name }}</h5>
                            <p class="card-text">{{ $coupon->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('footer')
</body>
</html>