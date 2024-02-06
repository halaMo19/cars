<!doctype html>
<html lang="en">

@include('includes.head')

  <body>

    
  @include('includes.header')
      
  @yield('content')  

    @include('includes.jsFooter')
    @include('includes.aboutSection')

</html>

