<p class="mt-5 text-center head">Shop Today's Trending Deals and Save Big</p>
@if(count($coupons)>0)
<div class="container col-expand-lg text-center mt-5">
<div class="row">
<div class="col">
        <div class="card text-center text-bg-light cd">
            <img src="{{ asset('/storage/' . $coupons[3]->image) }}" class="card-img haraji" alt="tools">
            <a href="/coupon/{{ $coupons[3]->id }}" class=" stretched-link"></a>
            <div class="card-img-overlay">
                <div class="a2">
                    <h4 class="card-title" style="margin-left: 15px;">{{ $coupons[3]->name }}</h4>
                    <p class="card-text" style="margin-left: 15px;"><small>Last updated 7 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-center text-bg-light cd">
            <img src="{{ asset('/storage/' . $coupons[5]->image) }}" class="card-img haraji" alt="tools">
            <a href="/coupon/{{ $coupons[5]->id }}" class=" stretched-link"></a>
            <div class="card-img-overlay">
                <div class="a2">
                    <h4 class="card-title" style="margin-left: 15px;">{{ $coupons[5]->name }}</h4>
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
<p class="text-muted h2">No suggestion today. come tommorow!</p>
@endif
