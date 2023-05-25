    @extends('layout.tampalate')

    @section('style')
    @include('sweetalert::alert')
    @if ($errors->any())
    <div class="container">
    <div class="pt-3">
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $item)
            <li><i class="fa-solid fa-circle-exclamation"></i> {{ $item }}</li>   
            <meta http-equiv="refresh" content="2;url=/petugas-admin">
            @endforeach
            </ul>
        </div>
    </div>
 </div>
        @endif
        
       <main class="form-signin  m-auto container">
        <form action="petugas-admin/login" method="post">
          @csrf
            <div class="card border-light border border-0" style="width:15rem;margin-left:40%; margin-top:13%;">
                
                <h1 class="h3 mb-4 fw-normal text-center">Please sign in</h1>
      
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" name="email" value="{{ Session::get('email') }}" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-4">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
      
          
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-body-secondary text-center">&copy; RPL 2-2023</p>
            </div>
        </form>
      </main>
  
         
       
      </form>
    @endsection