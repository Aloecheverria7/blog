<!DOCTYPE HTML>
<html lang="es">
@section('htmlheader')
    @include('layouts.layouts.partials.htmlheader')
@show
<body>
  @section('TopBar')
      @include('layouts.layouts.partials.TopBar')
  @show
  @include('layouts.layouts.partials.mainheader')
@yield('content')
    <!-- Top bar-->
    <!-- Top bar end-->
    <!-- Login Modal-->
    <!-- Login modal end-->
    <!-- Navbar Start-->
    <!-- Navbar End-->
    <!--Content-->
<!-- FOOTER -->
@include('layouts.layouts.partials.footer')


</body>
</html>
