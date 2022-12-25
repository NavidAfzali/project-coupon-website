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
    <title>Iran coupon | new coupon</title>
</head>
<body>
    @include('layouts.navigation')
    <h1 class="h1 m-5">Add new coupon</h2>
    <div class="m-5 p-5 overflow-hidden shadow-sm sm:rounded-lg list">
        <form action="{{ route('add-coupon') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Coupon name :</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description :</label>
                <textarea style="color: black;" name="description" id="desc" cols="175" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <label for="offcode" class="form-label">Offer code :</label>
                <input type="text" name="offerCode" class="form-control" id="offcode">
            </div>
            <div class="mb-3">
                <label for="website" class="form-label">Website :</label>
                <input type="text" name="website" class="form-control" id="website">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status :</label>
                <select class="form-select" name="status" id="status" aria-label="Default select example">
                    <option selected>Choose status</option>
                    <option value="valid">Valid</option>
                    <option value="expired">Expired</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Expire date :</label>
                <input type="date" name="expireDate" class="form-control" id="date">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Coupon image :</label>
                <input class="form-control bg-white" name="image" type="file" id="formFile">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @include('footer')
</body>
</html>