<!doctype html>
<html class="no-js" lang="en">
@include('layout/head')


<body>
<!--[if lt IE 8]>

<![endif]-->
<!-- Start Left menu area -->
@include('layout.left-sidebar')
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
@include('layout.header')


<!------------content--------------->
@yield('content')

@include('layout.footer')
<!--------------end content----------->
</div>

@include('layout.scripes')
@yield('js')

</body>

</html>
