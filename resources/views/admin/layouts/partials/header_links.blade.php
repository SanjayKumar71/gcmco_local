<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc."/>

<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

{{--<!-- Favicon -->--}}
{{--<link rel="shortcut icon" href="{{asset('assets/admin/assets/favicon/favicon.ico')}}" type="image/x-icon"/>--}}


<!-- Libs CSS -->
<link rel="stylesheet" href="{{ asset('assets/admin/assets/css/libs.bundle.css') }}"/>

<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('assets/admin/assets/css/theme.bundle.css') }}" id="stylesheetLight"/>
<link rel="stylesheet" href="{{ asset('assets/admin/assets/css/theme-dark.bundle.css') }}" id="stylesheetDark"/>

@stack('css')

<style>body {
        display: none;
    }</style>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156446909-1"></script>
<script>window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag("js", new Date());
    gtag("config", "UA-156446909-1");</script>
