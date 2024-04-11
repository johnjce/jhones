<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.vendors.metas')
    <title>{{ env('APP_NAME') }}</title>
    @include('layouts.vendors.styles')
</head>
<body class="homepage is-preload">
<div id="page-wrapper">
    <!-- Header -->
    @include('layouts.front.header')
    <!-- Main -->
    @yield('content')
    <!-- Footer -->
    @include('layouts.front.footer')
</div>
<!-- Scripts -->
@include('layouts.vendors.scripts')
</body>
</html>
