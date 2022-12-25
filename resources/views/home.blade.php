<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <title>Iran Coupon!</title>
</head>
<body>
    
    @include('navbar')

    @include('today-suggest')

        <div style="text-align:center;font-size:small;" class="m-4">
            <em>When you buy through links on RetailMeNot.
                <a style="color: gray !important;" href="#">we may earn a commission.</a>
            </em>
        </div>

        <br>
        <br>
        <div class="container ads"> Your Ads place here</div>
        <br>
        <br>
        
        @include('offers')

        @include('footer')

</body>
</html>