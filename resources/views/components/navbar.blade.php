<nav class="navbar navbar-expand-md navbar-dark bg-nav">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        @auth
        <a class="nav-link mx-3">Hello, {{Auth::user()->name}}</a>
  
        @endauth
        <a class="nav-link mx-3" href="{{route('home')}}">Home</a>
        @auth
        <a class="nav-link mx-3" href="#">Your Profile</a>
        <a class="nav-link mx-3" href="{{route('newTopic')}}">Suggest a Topic</a>   
        @endauth
        
        <a class="nav-link mx-3" href="#">Archive</a>
        <a class="nav-link mx-3" href="{{route('about')}}">About</a>
        @auth
        <a class="nav-link mx-3" href="{{route('logout')}}" onclick="event.preventDefault();
        document.getElementById('form-logout').submit();">Logout</a>
        <form method="POST" action="{{route('logout')}}" id="form-logout">
          @csrf
        </form>
        @endauth
        
      </div>
    </div>
  </div>
</nav>
