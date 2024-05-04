<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('assets/images/favicon/favicon2.png') }}" rel="icon"/>
    <link rel="canonical" href="https://keenthemes.com/metronic"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <link href="{{ asset('/backend/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/backend/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/backend/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/backend/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/backend/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/backend/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/backend/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/backend/css/style.css') }}" rel="stylesheet" type="text/css"/>
    @stack('header')
</head>
<body class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading" @yield('body-parameters')>
@include('layouts.dashboard.include.mobile-header')
<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid page">
        @include('layouts.dashboard.include.sidebar')
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            @include('layouts.dashboard.include.header')
            @yield('body')
        </div>
    </div>
</div>
<script>
    var KTAppSettings = {
        "breakpoints": {"sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400},
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };
</script>
<script src="{{ asset('/backend/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('/backend/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
<script src="{{ asset('/backend/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('/backend/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="{{ asset('/backend/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('/backend/js/pages/widgets.js') }}"></script>
<script src="{{ asset('/backend/js/script.js') }}"></script>
<script>
    @if(Session::has('success'))
        toastr.success('{{ Session::get('success') }}');
    @endif
    @if(Session::has('info'))
        toastr.info('{{ Session::get('info') }}');
    @endif
    @if(Session::has('warning'))
        toastr.warning('{{ Session::get('warning') }}');
    @endif
    @if(Session::has('error'))
        toastr.error('{{ Session::get('error') }}');
    @endif
</script>
@stack('footer')
@yield('footer')
</body>
</html>
