<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'John es...') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="@yield('meta-keywords')" name="keywords">
    <meta content="@yield('meta-description')" name="description">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="{{ asset('/assets/images/favicon.ico') }}" rel="icon">
    @include('front.layouts.partials.vendorstyles')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="51">
    @include('front.layouts.partials.navbar')

    @yield('content')

    @include('front.layouts.partials.vendorscripts')

   </body>

   </html>
