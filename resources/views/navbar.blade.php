<div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav me-auto">
     @foreach ($items as $item)
         
     
      <li class="nav-item">
        <a class="nav-link" href="{{$item->url}}">{{$item->title}}</a>
      </li>
      @endforeach
      
    </ul>
    <form class="d-flex">
      <input class="form-control me-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>