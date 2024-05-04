<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>404 | {{ env('APP_NAME') }}</title>
    <link href="{{ asset('assets/images/favicon/favicon2.png') }}" rel="icon"/>
    <link href="{{ asset('/backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/backend/css/pages/error/error-3.css') }}" rel="stylesheet" type="text/css" />
</head>
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<div class="d-flex flex-column flex-root">
    <div class="error error-3 d-flex flex-row-fluid bgi-size-cover bgi-position-center" style="background-image: url('{{ asset('backend/media/error/bg3.jpg') }}');">
        <div class="px-10 px-md-30 py-10 py-md-0 d-flex flex-column justify-content-md-center">
            <h1 class="error-title text-stroke text-transparent">404</h1>
            <p class="display-4 font-weight-boldest text-white mb-12">How did you get here</p>
            <p class="font-size-h1 font-weight-boldest text-dark-75">Sorry we can't seem to find the page you're looking for.</p>
            <p class="font-size-h4 line-height-md">There may be a misspelling in the URL entered,or the page you are looking for may no longer exist.</p>
        </div>
    </div>
</div>
</body>
</html>
