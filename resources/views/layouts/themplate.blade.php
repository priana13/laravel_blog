@include('layouts.header')

<div class="container">

  <div class="row">
    <div class="col-md-2">
      @include('layouts.menu')
    </div>

    <div class="col-md-10">
      @yield('content')
    </div>
  </div>
</div>



@include('layouts.footer')

