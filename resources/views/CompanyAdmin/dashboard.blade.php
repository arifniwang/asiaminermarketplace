@extends('CompanyAdmin.layout')
    @section('content')

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="company-profile">

                <!-- header company profile -->
              <div class="profile-header">

                <img class="header" src="{{url('public/'.Storage::url($company->header))}}"> 
                <!-- profile picture company -->
                <div class="image-container" style="margin-top:15px">
                  <img style="object-position:0px 0px" src="{{url('public/'.Storage::url($company->logo))}}">
                </div>
              </div>


              <span><a class="editbtn" style="position:absolute; right:15px" href="{{url('/company-profile/edit')}}">Edit Profile</a></span>
              <div class="profile-content mt-3">
              <h2>{{$company->name}}</h2>
                <p class="description">{{$company->description}}</p>
                <p>
                <a target="_blank" href="{{$company->website}}"><span class="icon-paperclip mr-2 text-primary"></span>{{$company->website}}</a>
                </p>
                <p>
                  @foreach ($company->address as $address)
                    <span class="mr-5 text-secondary"><span class="icon-map-pin mr-2"></span>{{$address->city}}, {{$address->province}}</span>
                  @endforeach
                  <span class="text-secondary"><span class="icon-clock-o mr-2"></span>{{$company->business_hour}}</span>
                </p>
                <p>
                  <span class="mr-5 text-secondary"><span class="icon-envelope mr-2"></span>{{$company->email}}</span>
                  <span class="text-secondary"><span class="icon-phone mr-2"></span>{{$company->phone}}</span>
                </p>
              </div>

            </div>

          </div>
          <div class="col-md-12 mt-4">
            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header text-center bg-black">
                    <h3 class="mb-0"><b class="text-white">Free</b></h3>
                  </div>
                  <div class="card-body text-center">
                    <h2><b>Rp 0</b></h2>
                  </div>
                  <div class="card-body text-center">
      
                    <h5>5 Product</h5>
                    <h5>10 Media/Resources</h5>
                    <h5>&nbsp</h5>
                    <h5>&nbsp</h5>
   
                  </div>
                  <div class="card-body text-center">
                    <a class="btn btn-primary text-white" style="border-radius: 5px;">You are here</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header text-center bg-light">
                    <h3 class="mb-0"><b class="">Silver</b></h3>
                  </div>
                  <div class="card-body text-center">
                    <h2><b>Rp 500.000</b></h2>
                  </div>
                  <div class="card-body text-center">
                    <h5>∞ News</h5>
                    <h5>45 Product</h5>
                    <h5>45 Media/Resources</h5>
                    <h5>45 Project</h5>
                  </div>
                  <div class="card-body text-center">
                    <a href="https://wa.me/085155055241?text=Upgrade%20to%20silver%20" target="_blank" class="btn btn-outline-primary" style="border-radius: 5px;">Contact Us</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header text-center bg-warning">
                    <h3 class="mb-0"><b class="text-white">Gold</b></h3>
                  </div>
                  <div class="card-body text-center">
                    <h2><b>Rp 1.000.000</b></h2>
                  </div>
                  <div class="card-body text-center">
                    <h5>∞ News</h5>
                    <h5>45 Product</h5>
                    <h5>45 Media/Resources</h5>
                    <h5>45 Project</h5>
                  </div>
                  <div class="card-body text-center">
                    <a href="https://wa.me/085155055241?text=Upgrade%20to%20gold%20" target="_blank" class="btn btn-outline-primary" style="border-radius: 5px;">Contact Us</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card mt-4">
              <div class="card-header">
                <h4>Company's About Page</h4>
              </div>
              <div class="card-body">
                <form action="{{url('/company-profile/about')}}" method="POST">
                  @csrf
                  <textarea name="about" id="about" rows="4" class="">{{$company->about}}</textarea>
                  <center>
                    <button type="submit" class="btn btn-primary" style="margin : 10px auto">Save Changes</button>
                  </center>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

@endsection

@section('jsplus')
  @if ($errors->any())
  <script type="text/javascript">
    $(window).on('load',function(){
        $('#additem').modal('show');
    });
  </script>
  @endif
@endsection