@extends('user.layout.layout');
@section('content')

<section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                    
                        <div class="crad-header">
                            <h2>Rating and review<h2>
                        </div>
                        @if(Session::has('success'))

                            <div class="alert alert-success">

                            {{Session::get('success')}}

                            </div>

                        @endif
                        <div class="card-body">
                        <form id="demo-form2" action="{{route('rating.store')}}" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                            @csrf
         
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="name" class="form-control col-md-7 col-xs-12" required="" value="{{$name = Auth::user()->name;}}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product name<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="product_name" class="form-control col-md-7 col-xs-12" required="">
            </div>
          </div>
          
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Image <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="first-name" name = "image" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Write Review<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="review" class="form-control col-md-7 col-xs-12" required="">
            </div>
          </div>
          <!--<div class="form-group">
          <label for="name" >Rating</label>
                                    <select name = "rating" required="required">
                                        <option value = "5 star" selected>5 Star</option>
                                        <option value = "4 star">4 Star</option>
                                        <option value = "3 star">3 Star</option>
                                        <option value = "2 star">2 Star</option>
                                        <option value = "1 star">1 Star</option>
                                                                               
                                    </select>-->
            <!--<div class="col-md-6 col-sm-6 col-xs-12">
              <input type="enum" name="select_service" class="form-control col-md-7 col-xs-12" required="">
            </div>-->
         <!-- </div>-->
          <div class="form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Rating<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <!--<label for="name" >Rating</label>-->
                                    <select name = "rating" required="required">
                                        <option value = "5 star" selected>5 Star</option>
                                        <option value = "4 star">4 Star</option>
                                        <option value = "3 star">3 Star</option>
                                        <option value = "2 star">2 Star</option>
                                        <option value = "1 star">1 Star</option>
                                                                               
                                    </select>
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <input type="submit" class="btn btn-success" value="Post">
              
           <!-- </div>
            <a href="{{route('index')}}" > Return Home </a>
          </div>-->

        </form>
                        </div>
                    </div>
        
                </div>
        
            </div>

        </div>
    


    </section>
@endsection