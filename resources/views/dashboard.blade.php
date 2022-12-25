<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->name . '\'s ' . __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg list">
                
                <table class="table table-borderless align-middle">
                    <thead class="h2">
                        <tr class="text-white">
                            <th scope="col"></th>
                            <th scope="col">Email</th>
                            <th scope="col">Cash</th>
                            <th scope="col">Coupon used</th>
                        </tr>
                        <tr class="h4" style="color:pink;">
                            <td></td>
                            <td>{{ auth()->user()->email }}</td>
                            <td>12.5 $</td>
                            <td>{{ $count }}</td>
                        </tr>
                    </thead>
                </table>

            </div>
        </div>
    </div>

    <div class="py-12" style="margin-top: -40px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg list">
                <div class="p-6 mb-5 h3">
                    Coupons that you've tried to use:
                </div>
                    <div class="row row-cols-1 row-cols-md-3 g-4 m-5">
                        @foreach($user->coupons as $coupon)
                                <div class="col">
                                    <div class="card favcoupon h-100 cd">
                                    <img src="{{ asset('/storage/' . $coupon->image) }}" class="card-img-top" alt="...">
                                    <a href="/coupon/{{ $coupon->id }}" class="btn stretched-link"></a>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $coupon->name }}</h5><hr>
                                        <p class="card-text">{{ $coupon->description }}</p>
                                    </div>
                                    </div>
                                </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
    @include('footer')
</x-app-layout>
