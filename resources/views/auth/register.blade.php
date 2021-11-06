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
    <div class="container-fluid mt-5 h-custom">
      <div class="row mx-auto justify-content-center">
        <div class="col-12 col-md-6">
          <form method="POST" action="{{route('register')}}">
            @csrf
            <div class="mb-3">
              <label for="InputName" class="form-label">Username</label>
              <input type="text" class="form-control"  name="name">
            </div>
            <div class="mb-3">
              <label for="InputEmail1" class="form-label">Indirizzo Email</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
              <label for="InputPassword" class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
              <label for="InputPasswordConfirm" class="form-label">Ripeti Password</label>
              <input type="password" class="form-control" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary">Registrati</button>
          </form>
          
        </div>
      </div>
    </div>
  </x-layout>