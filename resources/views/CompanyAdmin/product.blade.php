@extends('CompanyAdmin.layout')
    @section('content')

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="company-profile">

                <!-- header company profile -->
              <div class="profile-header">

                <img class="header" src="{{asset('assets/frontend/images/hero_1.jpg')}}"> 
                <!-- profile picture company -->
                <div class="image-container">
                  <img src="{{asset('assets/frontend/images/profile-logo.jpg')}}">
                </div>
              </div>



              <div class="profile-content">
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

              <div class="profile-footer" style="margin-top: 12px;">
                <ul class="companynav mr-auto">
                  <li><a href="{{url('/')}}/company/{{$company->slug}}"><span>TIMELINE</span></a></li>
                  <li><a href="{{url('/')}}/company/{{$company->slug}}/media"><span>MEDIA/RESOURCE</span></a></li>
                  <li class="active"><a href="{{url('/')}}/company/{{$company->slug}}/product"><span>PRODUCTS</span></a></li>
                  <li><a href=""><span>NEWS</span></a></li>
                  <li><a href=""><span>PROJECT</span></a></li>
                  <li><a href=""><span>ABOUT</span></a></li>
                </ul>
              </div>

            </div>

          </div>
        </div>
      </div>

<!-- Media resource content starts here -->
      <div class="container company-content">
        <div class="row mb-3">
          <div class="col-md-12">
            <h4 class="contentsection">Products ({{$product->total()}})</h4>
          </div>
          <div class="col-md-12">
            <h5 class="text-primary" style="float: right;"><a href="" data-toggle="modal" data-target="#additem">+ Add Product</a></h5>
          </div>
        </div>
        <div class="row">

            <div class="row mb-3 align-items-stretch">

              @foreach ($product as $p)
              <div class="col-md-4 mb-4 mb-lg-4">
                <div class="h-entry h-option">
                  <a href="{{url('product/'.$p->company->id.'/'.$p->slug)}}">
                  <img src="{{asset('assets/frontend/images/img_1.jpg')}}" alt="Image" class="img-fluid">
                  <div class="h-entry-inner">
                    <h2 class="font-size-regular"><object><a href="blog-single.html">{{$p->name}}</a></object></h2>
                    <p><object><a href="{{url('/')}}/company/{{$p->company->slug}}">{{$p->company->name}}</a></object></p>
                    <p class="text-limit">{{$p->description}}</p>
                  </div>
                  </a>
                </div> 
              </div>
              @endforeach

              <div class="col-12 text-center mt-5">
                {{$product->links()}}
              </div>
            </div>
        </div>

      </div>
      <!-- media resorce content ended here -->
    </div>

    <div class="modal fade " id="additem" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content p-4">
          <div class="modal-header">
            <h4>Add Product</h4>
          </div>
          <div class="modal-body">
            <form id="form1" action="" method="POST" enctype="multipart/form-data">
              @csrf
                  <div class="row">
                    <div class="form-group col-md-12 mb-3 mb-md-0">
                      <label class="text-secondary" for="#title">Product Title</label>
                      <input type="text" id="title" name="name" class="form-control">
                      @error('name')
                        <span style="color:red; font-size:12px">*{{$message}}</span>
                      @enderror
                          
                      
                    </div>
                    <div class="form-group col-md-12 mb-3 mb-md-0">
                      <label class="text-secondary" for="#desc">Description</label>
                      <textarea name="description" class="form-control" id="desc" rows="3"></textarea>
                      @error('description')
                        <span style="color:red; font-size:12px">*{{$message}}</span>
                      @enderror
                    </div>
                    <div class="input-group col-md-7 mt-3 mb-md-0">
                      <label class="text-secondary">File Upload</label>
                      <input type="file" name="foto" class="custom-file-input" id="customFile">
                      @error('foto')
                        <span style="color:red; font-size:12px">*{{$message}}</span>
                      @enderror
                    </div>
                  </div>

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" form="form1" type="button" class="btn btn-primary">Save changes</button>
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