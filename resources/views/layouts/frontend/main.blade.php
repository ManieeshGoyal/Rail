<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->  

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('header')
    @if(!empty($headerCode->count()))
        @foreach($headerCode as $item)
            {!! $item->code !!}
        @endforeach
    @endif
    
    <link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
    <link type="text/css" rel="stylesheet" id="dark-mode-general-link">
    <style lang="en" type="text/css" id="dark-mode-custom-style"></style>
    <style lang="en" type="text/css" id="dark-mode-native-style"></style>
    <style lang="en" type="text/css" id="dark-mode-native-sheet"></style>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">

    <!--[if IE 9]>
          <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
        <![endif]-->
    <!--[if lte IE 8]>
      <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3"></script>
    
    <![endif]-->

    <!-- var url = Request.Url.AbsoluteUri; -->

    <link rel="stylesheet" "https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dark-color.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
     
  <!-- owl-carousel -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
 
</head>

    <body class=""> 
        @include('layouts.frontend.includes.header')
        <main role="main">
            @yield('body')
        </main>
        @include('layouts.frontend.includes.footer') 
    
        <!-- <script src="img.js"></script> --> 
        @stack('footer')
        @if(!empty($footerCode->count()))
            @foreach($footerCode as $item)
                {!! $item->code !!}
            @endforeach
        @endif
        
        
        <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/popper.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/lib/slick/slick.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/html5lightbox.js') }}"></script>
        
        <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
        <script type="text/javascript" src="{{ asset('assets/revolution/js/revolution.extension.actions.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/revolution.extension.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/revolution.extension.kenburn.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/revolution.extension.layeranimation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/revolution.extension.migration.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/revolution.extension.navigation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/revolution.extension.parallax.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/revolution.extension.slideanims.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/revolution.extension.video.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/revolution.initialize2.js') }}"></script>	
        
        <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        
        <script>
            $(document).ready(function () {
                $(".mob-menu button").click(function () {
                    $(".navbar-collapse").slideToggle();
                    $(".navbar-collapse").toggleClass("collapse");
                });
            });
        </script>
<script>
      $(function () {
         // Owl Carousel
         var owl = $(".owl-carousel");
         owl.owlCarousel({
            items: 1,
            // autoplay:true,
            margin: 10,
            loop: true,
            nav: true,
            dots: false
         });
      });

   </script>
    </body>
</html>
