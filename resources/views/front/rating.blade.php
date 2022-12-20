@extends('front.layout.layout')
@section('content')
<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Rating and review</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Rating and review</p>
            </div>
        </div>
    </div>
<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Rating and review </span></h2>
        </div>
        
        <div class="row px-xl-5 pb-3">
            @foreach($rating as $rt)
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="{{asset('uploads/'.$rt->image)}}" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">Customer name: {{$rt->name}}</h6>
                        <div class="d-flex justify-content-center">
                            <h6>Product: {{$rt->product_name}}</h6><h6 class="text-muted ml-2"><!--<del>$123.00</del>--></h6>
                            
                            
                        </div>
                        <h6>Review: {{$rt->review}}</h6><h6 class="text-muted ml-2"><!--<del>$123.00</del>--></h6>
                        <h6>Rating: {{$rt->rating}}</h6><h6 class="text-muted ml-2"><!--<del>$123.00</del>--></h6>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="{{route('product')}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View</a>
                        <!--<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>-->
                    </div>
                </div>
                
            </div>
            @endforeach
</div>
</div>
@endsection