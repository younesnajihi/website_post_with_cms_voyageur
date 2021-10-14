@extends('master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>hello</h1>

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach ($posts as $post )
    <div class="carousel-item @if($loop->first) active @endif">
      <img src="{{asset('/storage/'.$post->image)}}" class="d-block w-100" alt="...">
    </div>
    @endforeach
    
  </div>
</div>
    </div>
</div>


<div class="row">
    @foreach ($posts as $post )
        
    
    <div class="col-md-4 mt-2">
        <div class="card">
            <img class="card-img-top" src="{{asset('/storage/'.$post->image)}}" alt="">
            <div class="card-body">
                <h4 class="card-title">{{$post->title}}</h4>
                <p class="card-text">{{ $post->excerpt }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection

@section('js')
<script>
$(document).ready(function(){
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel)

})
</script>

@endsection