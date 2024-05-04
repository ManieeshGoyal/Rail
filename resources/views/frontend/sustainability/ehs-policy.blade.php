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
                        
                        <span class="blog-standar-end">EHS Policy</span>
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
                                <div class="col-md-12">
                                    <iframe src="{{ asset('/images/pdf/EHS-POLICY.pdf') }}" class="full-pdf"></iframe>
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