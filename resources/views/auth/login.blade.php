<x-layout>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <div class="container-fluid mt-5 vh-65">
      <div class="row mx-auto justify-content-center">
        <div class="col-12 col-md-6">
          <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Accedi</button>
          </form>

          <div class="mt-4">
            <a href="{{route('register')}}">Non hai un account? Registrati</a>

          </div>
          
        </div>
      </div>
    </div>

  </x-layout>