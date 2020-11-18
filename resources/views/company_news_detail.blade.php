@extends('layout')

@section('content')
<div class="site-section bg-light">
  <div class="container mt-5">
     <div class="row">
       <div class="col-md-8">
        <div class="news">
          <div class="news-header">
            <h1>{{$news->title}}</h1>
            <p>{{$news->location}} / {{date( 'F j, Y',strtotime( $news->created_at ))}} / {{date( 'g:i a ',strtotime( $news->created_at ))}}</p>
            <p class="text-secondary">
            By <span>{{$news->author}}</span>
            <a href="" data-toggle="modal" style="margin-left:20px" data-target="#exampleModal">
              <span> <i class="fa fa-share" aria-hidden="true"></i></span>
              <span>Share</span>
            </a>
            </p>
          </div>
          <div class="image-container"><img src="{{url('public/'.Storage::url($news->photo))}}"></div>
          <div class="news-body">
            <div class="abstract">
              {{$news->abstract}}
            </div>
            <style>.paragraf > p{
              padding-left:0px !important;
              padding-top : 10px !important; 
            }</style>
            <div class="paragraf">
              @php 
                echo $news->description;
              @endphp
            </div>

          </div>
        </div>
       </div>
       <div class="col-md-4">
         <h4 class="mb-5">Related News</h4>

         @foreach ($relatedNews as $r)
         <div class="related-news mb-5">
            <div class="image-container">
              <img src="{{url('public/'.Storage::url($r->photo))}}">
            </div>
            <a href="{{url("/news/$r->company_id/$r->slug")}}">{{$r->title}}</a>
            <div class="abstract">
              {{$r->abstract}}
            </div>
         </div>
         @endforeach

       </div>
     </div>
  </div>




</div>
 
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Share</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="text-align: center;">
          <a href="https://wa.me/?text={{url()->full()}}%0D%0A%2A{{$news->title}}%2A" target="_blank"><i class="fa fa-whatsapp fa-3x" style="color:#25d366; margin-right: 10px" aria-hidden="true"></i></a>
          <a href="https://twitter.com/intent/tweet?text={{$news->title}}&url={{url()->full()}}" target="_blank"><i class="fa fa-twitter-square fa-3x" style="color:#1DA1F2; margin-right: 10px" aria-hidden="true"></i></a>
          <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->full()}}" target="_blank"><i class="fa fa-facebook-square fa-3x" style="color:#3b5998; margin-right: 10px" aria-hidden="true"></i></a>
          <a href="https://www.linkedin.com/sharing/share-offsite/?url={{url()->full()}}" target="_blank"><i class="fa fa-linkedin-square fa-3x" style="color:#0072b1; margin-right: 10px" aria-hidden="true"></i></a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
   

@endsection
