<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/copy-text.js') }}"></script>
    <title>{{ 'Coupon | ' . $name }}</title>
</head>
<body>
    @include('navbar')
       

        <div class="card m-5 cd" style="max-width: 80%;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="{{ asset('/storage/' . $image) }}" class="img-fluid rounded-start h-100" alt="brand-image">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title h1">{{ $name }}</h5><hr>
                    <p class="card-text text-muted h5 mt-1">{{ $description }}</p>
                    @if($status == 'valid')
                    <p class="card-text"><p class="mt-1 h3 text-success">{{ $status }}</p>
                    <p class="text-warning h5">Will work until {{ $expireDate }}</p>
                    <input class="mt-3 offcode" type="text" value={{ $offerCode }} id="myInput" readonly>
                    <button class="copybot" onclick="myFunction()">Copy</button>
                    <a href="{{ $website }}" class="cpref">Visit {{ $website }}</a>
                    </p>
                    @else
                    <p class="card-text"><p class="mt-1 h3 text-danger">{{ $status }}</p></p>
                    <p class="mt-5 h5 text-dark">This coupon is expired and already invalid.wait for new coupons in the future!</p>
                    <a href="{{ $website }}" class="cpref m-1">Visit {{ $website }}</a>
                    @endif
                </div>
                </div>
            </div>
        </div>

    @include('footer')
</body>
</html>