@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Who We Are') !!}
@endpush
@section('body')

        <!-- Header Banner-->
        <div id="header-banner" class="header-banner clearfix">
            <div id="header-banner-inner" class="container clearfix">
                <div class="header-banner-inner-wrap">                    
                    <div class="blog-standar-start">
                        <h1 class="blog-standar-start1">Who We Are</h1>
                    </div>
                    <h2 class="blog-standar-end">
                        <a href="{{ asset('/') }}" class="blog-standar-end">Home</a> |
                        
                        <span class="blog-standar-end">Policy</span>
                    </h2>               
                </div><!-- /.header-banner-inner-wrap -->
            </div><!-- /#header-banner-inner -->            
        </div>
        <!-- End Header Banner -->  
  
            <!-- End Header Banner --> 
            <div class="container">  
                <div class="infor-of-project">
                     <div class="row">
            	    <div class="col-12 mb-20">
                        <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="50" data-smobile="60"></div> 
                        <h3 class="heading-two text-center">Coming Soon </h3>
                        <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="50" data-smobile="60"></div> 
                    </div>
                        <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="50" data-smobile="60"></div> 
                    	<div class="col-md-12"> </div>
                    </div>
                </div>   
                 <!-- ARTICLE--> 
                <!--END ARTICLE-->
            </div> 
@endsection

@push('header')

@endpush

@push('footer')
<style>
    ol li {
    list-style: decimal;
    }
</style>
@endpush