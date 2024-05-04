@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Sustainability') !!}
@endpush
@section('body')

        <!-- Header Banner-->
        <div id="header-banner" class="header-banner clearfix">
            <div id="header-banner-inner" class="container clearfix">
                <div class="header-banner-inner-wrap">                    
                    <div class="blog-standar-start">
                        <h1 class="blog-standar-start1">Sustainability</h1>
                    </div>
                    <h2 class="blog-standar-end">
                        <a href="{{ asset('/') }}" class="blog-standar-end">Home</a> |
                        
                        <span class="blog-standar-end">EHS Compliance</span>
                    </h2>               
                </div><!-- /.header-banner-inner-wrap -->
            </div><!-- /#header-banner-inner -->            
        </div>
        <!-- End Header Banner -->  

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap" class="container">
                <div id="site-contents" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                       <div class="item-content All">                                                            
                            <div class="row">
            	    <div class="col-12 mb-20">
                        <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="50" data-smobile="60"></div> 
                        <h3 class="heading-two text-center">Coming Soon </h3>
                        <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="50" data-smobile="60"></div> 
                    </div>
                                
                            </div>      
                        </div>
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->

@endsection

@push('header')

@endpush

@push('footer')
 
@endpush