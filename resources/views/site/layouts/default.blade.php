<!DOCTYPE html>
<html lang="en">
  
  @include('site/layouts.head')
  

<body data-spy="scroll" data-target="#navbarRedBell" data-offset="98">

  <div id="loading">
    <div class="load-circle"><span class="one"></span></div>
  </div>

  @include('site/layouts.header')

  <main>
    @yield('content')
    @yield('styles')
  </main>

  @include('site/layouts.footer')
  @yield('scripts')

</body>
</html> 