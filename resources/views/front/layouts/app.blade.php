<!doctype html>
<html lang="en">
<head>
    <title>{{ $siteSettings['siteSettings']->site_title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Inserisci la descrizione qui.">
    <meta name="robots" content="index, follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('front.partials._headLinks')
</head>
<body>
@include('front.partials.header')
@yield('content')
@include('front.partials.footer')
@include('front.partials._footerLinks')
</body>
</html>
