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
    <title>Iran coupon | Coupons</title>
</head>
<body>
    @include('layouts.navigation')
    <div class="m-5 p-5 overflow-hidden shadow-sm sm:rounded-lg list">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($coupons as $coupon)
                <div class="col">
                    <div class="card favcoupon h-100 cd">
                        <img src="{{ asset('/storage/'. $coupon->image) }}" class="card-img-top" alt="...">
                        @can('isAdmin')
                        <a href="/coupon/{{ $coupon->id }}"></a>
                        @endcan
                        @can('isUser')
                        <a href="/coupon/{{ $coupon->id }}" class="btn stretched-link"></a>
                        @endcan
                        <div class="card-body">
                            <h5 class="card-title">{{ $coupon->name }}</h5>
                            <p class="card-text">{{ $coupon->description }}</p>
                            @can('isAdmin')
                                <div class="d-flex">
                                    <form action="{{ route('edit-coupon') }}" method="post">
                                        @csrf
                                        <input name="id" value="{{ $coupon->id }}" hidden>
                                        <input class="m-1 p-2" type="submit" value="Edit" style="color:white;background-color: blue; border-radius:7px; width:70px;">
                                    </form>
                                    <form action="{{ route('delete-coupon') }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input name="id" value="{{ $coupon->id }}" hidden>
                                        <input class="m-1 p-2" type="submit" value="Delete" style="color:white;background-color: red; border-radius:7px;">
                                    </form>
                                </div>
                            @endcan
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('footer')
</body>
</html>