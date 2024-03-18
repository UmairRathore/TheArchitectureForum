<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.backend.auth.head')
</head>

<body class="">
<div class="container position-sticky z-index-sticky top-0">
{{--    @include('layouts.backend.auth.navbar')--}}
</div>
<main class="main-content  mt-0">
    @yield('content')
</main>


@include('layouts.backend.auth.footer')

</body>

</html>
