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
    <title>Iran coupon | all users</title>
</head>
<body>
    @include('layouts.navigation')
    <h1 class="h1 m-5">List of all users :</h2>
        <div class="m-5 p-5 overflow-hidden shadow-sm sm:rounded-lg list">
            <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach($users as $user)

            <div class="card m-3 cd" style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title text-dark h1">{{ $user->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $user->role }}</h6>
                    @if($user->role == 'user')
                    <p class="card-text text-info h5">This user is a normal user. so you can edit his/her profile.</p>
                    <div class="d-flex">
                        <form action="{{ route('edit-user') }}" method="post">
                            @csrf
                            <input name="id" value="{{ $user->id }}" hidden>
                            
                            <input class="m-3 p-3" type="submit" value="Edit" style="color:white;background-color: blue; border-radius:7px; width:80px;">
                        </form>
                        <form action="{{ route('delete-user') }}" method="post">
                            @csrf
                            @method('delete')
                            <input name="id" value="{{ $user->id }}" hidden>
                            <input class="m-3 p-3" type="submit" value="Delete" style="color:white;background-color: red; border-radius:7px;">
                        </form>
                        <form action="{{ route('see-user-coupon') }}" method="post">
                            @csrf
                            <input name="id" value="{{ $user->id }}" hidden>
                            <input class="m-3 p-3" type="submit" value="Coupons" style="color:white;background-color: orange; border-radius:7px;">
                        </form>
                    </div>
                    @else
                    <p class="card-text text-danger h5">This user is an admin user. so you cannot edit his/her profile.</p>
                    <form action="{{ route('see-user-coupon') }}" method="post">
                        @csrf
                        <input name="id" value="{{ $user->id }}" hidden>
                        <input class="m-3 p-3" type="submit" value="Coupons" style="color:white;background-color: orange; border-radius:7px;">
                    </form>
                    @endif
                </div>
            </div>
            @endforeach



                </div>
        </div>
    @include('footer')
</body>
</html>