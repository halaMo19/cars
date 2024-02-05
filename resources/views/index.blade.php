<!doctype html>
<html lang="en">

@include('includes.head')

  <body>

  @include('includes.header')
    
  @include('includes.section')

  @yield('content')

  @include('includes.footer')
  @include('includes.jsFooter')

    
</html>

