<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.backend.head')
</head>

<body class="g-sidenav-show   bg-gray-100">
<div class="min-height-300 bg-primary position-absolute w-100">

</div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    @include('layouts.backend.sidebar')
</aside>
@yield('content')

<div class="fixed-plugin">
    @include('layouts.backend.templatesetting')
</div>
@include('layouts.backend.footer')
</body>

</html>
