@extends('front.layout.layout')

@section('content')
<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
               <!--<div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Filter by price</h5>
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="price-all">
                            <label class="custom-control-label" for="price-all">All Price</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-1">
                            <label class="custom-control-label" for="price-1">$0 - $100</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-2">
                            <label class="custom-control-label" for="price-2">$100 - $200</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-3">
                            <label class="custom-control-label" for="price-3">$200 - $300</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-4">
                            <label class="custom-control-label" for="price-4">$300 - $400</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input" id="price-5">
                            <label class="custom-control-label" for="price-5">$400 - $500</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div>
                    </form>
                </div>-->
                <!-- Price End -->
                
                <!-- Color Start -->
                <div class="border-bottom mb-4 pb-4">
                    <!--<h5 class="font-weight-semi-bold mb-4">Filter by category</h5>-->
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <!--<input type="checkbox" class="custom-control-input" checked id="color-all">
                            <label class="custom-control-label" for="price-all">Accessories</label>-->
                           <!-- <span class="badge border font-weight-normal">1000</span>-->
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <!--<input type="checkbox" class="custom-control-input" id="color-1">
                            <label class="custom-control-label" for="color-1">Tops</label>-->
                           <!-- <span class="badge border font-weight-normal">150</span>-->
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <!--<input type="checkbox" class="custom-control-input" id="color-2">
                            <label class="custom-control-label" for="color-2">Shirts</label>-->
                           <!-- <span class="badge border font-weight-normal">295</span>-->
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                          <!-- <input type="checkbox" class="custom-control-input" id="color-3">
                            <label class="custom-control-label" for="color-3">Pants</label>-->
                           <!-- <span class="badge border font-weight-normal">246</span>-->
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                           <!-- <input type="checkbox" class="custom-control-input" id="color-4">
                            <label class="custom-control-label" for="color-4">Skirts</label>-->
                          <!--  <span class="badge border font-weight-normal">145</span> -->
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                          <!--  <input type="checkbox" class="custom-control-input" id="color-5">
                            <label class="custom-control-label" for="color-5">Sweaters</label>-->
                            <!--<span class="badge border font-weight-normal">168</span>-->
                        </div>
                    </form>
                </div>
                <!-- Color End -->

                <!-- Size Start -->
                <div class="mb-5">
                    <!--<h5 class="font-weight-semi-bold mb-4">Filter by rating</h5>-->
                    <form>
                       <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                           <!-- <input type="checkbox" class="custom-control-input" checked id="size-all">
                            <label class="custom-control-label" for="size-all"> ★★★★★</label>
                            <span class="badge border font-weight-normal">1000</span>-->
                            
                            
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                          <!--  <input type="checkbox" class="custom-control-input" id="size-1">
                            <label class="custom-control-label" for="size-1">★★★★</label>-
                            <span class="badge border font-weight-normal">150</span> -->
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                           <!-- <input type="checkbox" class="custom-control-input" id="size-2">
                            <label class="custom-control-label" for="size-2">★★★</label>
                            <span class="badge border font-weight-normal">295</span>-->
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                           <!-- <input type="checkbox" class="custom-control-input" id="size-3">
                            <label class="custom-control-label" for="size-3">★★</label>
                           < <span class="badge border font-weight-normal">246</span>-->
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <!--   <input type="checkbox" class="custom-control-input" id="size-4">
                            <label class="custom-control-label" for="size-4">★</label>
                            <span class="badge border font-weight-normal">145</span>-->
                        </div>
                        <!--<div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input" id="size-5">
                            <label class="custom-control-label" for="size-5">XL</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div>-->
                    </form>
                </div>
                <!-- Size End -->
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h1>All Products</h1>
                           
                        </div>
                    </div>
                    @foreach($products as $product)
                        
                      
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="{{asset('uploads/'.$product->image)}}" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">{{$product->name}}</h6>
                                
                                <div class="d-flex justify-content-center">
                                    <h6>Tk.{{$product->price}}</h6><h6 class="text-muted ml-2"></h6>
                                    
                                    
                                </div>
                                
                                        
                                @if($product->status == '1')
                                    <h6>In stock</h6><h6 class="text-muted ml-2"></h6>
                                @else
                                <h6>Out of stock</h6><h6 class="text-muted ml-2"></h6>

                                @endif
                                
                            </div>
                            <form method="post" action="{{route('cart.store')}}">
                            @if($product->status=='1')
                                <h6> Quantity
                                    <input type="number" name="quantity" placeholder="Quantity." value="1" min="1" style="width: 100px"/> 
                                </h6>
                           
                                <div class="card-footer d-flex justify-content-between bg-light border">
                                
                                    @csrf
                                    
                                      
                                    <a href="{{route('productView',$product->id)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                    <input type="hidden" value="{{$product->id}}" name="product_id">
                                    @if (Auth::user())
                                        <button type="submit" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
                                    @else
                                        <a href="{{route('login')}}" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                    @endif
                                </form>
                                </div>
                            @endif
                        </div>
                        
                    </div>
                        
                    @endforeach
                    </div>
                    
                    
                   <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                       
                    </div>
                  
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
@endsection