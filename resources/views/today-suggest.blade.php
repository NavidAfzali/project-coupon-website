<p class="mt-5 text-center head">Shop Today's Trending Deals and Save Big</p>
@if(count($coupons)>3)
<div class="container col-expand-lg text-center mt-5">
<div class="row">
<div class="col">
        <div class="card text-center text-bg-light cd">
            <img src="{{ asset('/storage/' . $coupons[1]->image) }}" class="card-img haraji" alt="tools">
            <a href="/coupon/{{ $coupons[1]->id }}" class=" stretched-link"></a>
            <div class="card-img-overlay">
                <div class="a2">
                    <h4 class="card-title" style="margin-left: 15px;">{{ $coupons[1]->name }}</h4>
                    <p class="card-text" style="margin-left: 15px;"><small>Last updated 7 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-center text-bg-light cd">
            <img src="{{ asset('/storage/' . $coupons[2]->image) }}" class="card-img haraji" alt="tools">
            <a href="/coupon/{{ $coupons[2]->id }}" class=" stretched-link"></a>
            <div class="card-img-overlay">
                <div class="a2">
                    <h4 class="card-title" style="margin-left: 15px;">{{ $coupons[2]->name }}</h4>
                    <p class="card-text" style="margin-left: 15px;"><small>Last updated 7 mins ago</small></p>
                </div>
                
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-center text-bg-light cd">
            <img src="{{ asset('/storage/' . $coupons[0]->image) }}" class="card-img haraji" alt="tools">
            <a href="/coupon/{{ $coupons[0]->id }}" class=" stretched-link"></a>
            <div class="card-img-overlay">
                <div class="a2">
                    <h4 class="card-title" style="margin-left: 15px;">{{ $coupons[0]->name }}</h4>
                    <p class="card-text" style="margin-left: 15px;"><small>Last updated 7 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
@else
<p class="text-muted h2 text-center">No suggestion today. come tommorow!</p>
@endif
