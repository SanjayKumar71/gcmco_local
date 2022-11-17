<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<html lang="en" class="no-js">

<head>
    <meta charset="ISO-8859-1"/>
    @include('.admin.layouts.partials.header_links')

    <title>{{ $pageTitle }} | Admin</title>

    @yield('css')

    @if (isset($siteSettings->logo) && adminHasAssets($siteSettings->logo))
        <link rel="shortcut icon" href="{!! asset(uploadsDir().$siteSettings->logo) !!}"/>
    @else
        <link rel="shortcut icon" href="{!! asset('logo.png') !!}"/>
    @endif

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="">

@include('admin.layouts.partials.sidebar')

<!-- MAIN CONTENT -->
<div class="main-content">
    <!----Top Nav Bar Only Show on mobile ---->
@include('admin.layouts.partials.header')
<!-- HEADER -->


        @yield('content')
<!-- CARDS -->

</div><!-- / .main-content -->
@include('admin.layouts.partials.footer')

@include('admin.layouts.partials.footer_links')
</body>
<!-- END BODY -->
</html>
