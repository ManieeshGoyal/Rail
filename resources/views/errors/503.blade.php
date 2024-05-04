<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>503 | {{ env('APP_NAME') }}</title>
    <link href="{{ asset('assets/images/favicon/favicon2.png') }}" rel="icon"/>
    <link href="{{ asset('/backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/backend/css/pages/error/error-5.css') }}" rel="stylesheet" type="text/css" />
</head>
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row-fluid flex-column bgi-size-cover bgi-position-center bgi-no-repeat p-10 p-sm-30" style="background-image: url('{{ asset('/backend/media/error/bg1.jpg') }}');">
        <h1 class="font-weight-boldest text-dark-75 mt-15" style="font-size: 10rem">503</h1>
        <p class="font-size-h3 text-muted font-weight-normal">Website Under Maintenance</p>
    </div>
</div>
<script src="{{ asset('/backend/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('/backend/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
<script src="{{ asset('/backend/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('/backend/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="{{ asset('/backend/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
</body>
</html>
