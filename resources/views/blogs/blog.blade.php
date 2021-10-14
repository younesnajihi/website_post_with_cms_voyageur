@extends('master')

@section('content')

<div class="row">
  
    <div class="col-md-8">
        @foreach ($posts as $post)
        
        
        
        
        <div class="card text-center">
          <img class="card-img-top" src="{{asset('/storage/'.$post->image)}}" alt="">
          <div class="card-body">
            <h4 class="card-title">{{$post->title}}</h4>
            <p class="card-text">{{$post->excerpt}}</p>
            <span>{{$post->category->name}}</span>
          </div>
        </div>
        @endforeach
    </div>

    <div class="col-md-4">
     
     <ul class="list-group">
        <li class="list-group-item @if(!$id) active @endif"><a class="list-group-item-action" href='{{url('/blog')}}'>All</li>
            @foreach ($categorys as  $category)
         <li class="list-group-item @if ($category->id == $id) active @endif"><a class="list-group-item-action" href='{{url('/blog/'.$category->id)}}'>{{$category->name}} ///{{$category->post_count}}</li>
            @endforeach
     </ul>
     
    </div>



<div class="pagination">{{$posts->links() }}</div>
    
</div>
@endsection