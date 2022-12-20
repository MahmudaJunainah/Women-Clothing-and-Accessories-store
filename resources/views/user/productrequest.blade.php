@extends('user.layout.layout')

@section('content')
<div class="main-panel">
          <div class="content-wrapper">
          <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Request product <small></small></h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
         @if(Session::has('success'))

                            <div class="alert alert-success">

                            {{Session::get('success')}}

                            </div>

                        @endif
        <br>
        <form id="demo-form2" action="{{route('productrequest.store')}}" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
        	@csrf
         
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Customer Name<span class="required" >*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                  
              <input type="text" name="name" class="form-control col-md-7 col-xs-12" required="" value = "{{$name = Auth::user()->name;}}">
            </div>
          </div>
          
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Name<span class="required" >*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                  
              <input type="text" name="category_name" class="form-control col-md-7 col-xs-12" required="" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product name<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="product_name" class="form-control col-md-7 col-xs-12" required="" >
            </div>
          </div>
          <!--<div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phone<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" name="phone" class="form-control col-md-7 col-xs-12" required="">
            </div>
          </div>-->
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User id<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="fixed" name="user_id" class="form-control col-md-7 col-xs-12" required=""value = "{{$user_id = Auth::user()->id;}}">
            </div>
          </div>
          
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <input type="submit" class="btn btn-success" value="Submit">
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
                     

                      <!--<div class="col-md-7">
                        <div id="audience-map" class="vector-map"></div>
                      </div>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection