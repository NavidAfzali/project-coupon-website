<div class="container mt-5 mb-5">
    <h3 class="mb-5">Top Offers</h3>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach($coupons as $coupon)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('/storage/' . $coupon->image) }}" class="card-img-top offer" alt="logo">
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