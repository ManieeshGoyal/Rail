<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Oops! Something went wrong here | {{ env('APP_NAME') }}</title>
    <link href="{{ asset('assets/images/favicon/favicon2.png') }}" rel="icon"/>
    <link href="{{ asset('/backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/backend/css/pages/error/error-5.css') }}" rel="stylesheet" type="text/css" />
</head>
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<div class="d-flex flex-column flex-root">
    <div class="error error-5 d-flex flex-row-fluid bgi-size-cover bgi-position-center" style="background-image: url('{{ asset('/backend/media/error/bg5.jpg') }}');">
        <div class="container d-flex flex-row-fluid flex-column justify-content-md-center p-12">
            <h1 class="error-title font-weight-boldest text-info mt-10 mt-md-0 mb-12">Oops!</h1>
            <p class="font-weight-boldest display-4">Something went wrong here.</p>
            <p class="font-size-h3">We're working on it and we'll get it fixed as soon possible. You can go back or use our Help Center.</p>
        </div>
    </div>
</div>
<script src="{{ asset('/backend/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('/backend/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
<script src="{{ asset('/backend/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('/backend/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="{{ asset('/backend/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
</body>
</html>
