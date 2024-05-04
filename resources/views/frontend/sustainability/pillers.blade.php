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
                        
                        <span class="blog-standar-end">17 SDG</span>
                    </h2>               
                </div><!-- /.header-banner-inner-wrap -->
            </div><!-- /#header-banner-inner -->            
        </div>
        <!-- End Header Banner -->  
  
            <!-- End Header Banner --> 
            <div class="container">  
                <div class="infor-of-project">
                     <div class="row">
            	<div class="col-md-12">
            		<h2 class="heading-two">Pillers</h2>
            		<p>One of the definition of Sustainability is to use the resources in a way that it doesn’t compromise on the need of future generation. Sustainability stands on 3 pillars-</p>
            		<ol>
            		    <li>Environment</li>
            		    <li>Economic </li>
            		    <li>Social</li>
            		</ol>
            		<p>SGD’s, first introduced in United Nations Conference on sustainable development in Rio-De-Janerio in the year 2012. The objective of the conference was to give the world, set of universal goals that meets the environmental, political and economic challenges and motivates the nation to shift towards sustainable development. </p>
            		<p>SDG’s replaced the MDG’s (Millennium Development Goals) which started a global effort in 2000 to tackle extreme poverty. </p>
            		<p>Waste to energy facilities is one of the steps towards sustainable development. WTE serves sustainable Goal# 7 (affordable and clean energy) and Goal# 11 (sustainable cities & communities).</p>
            		<p></p>
            	</div>
                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="50" data-smobile="60"></div> 
            	<div class="col-md-12">
            		<img src="{{ asset('/images/pillers.jpg') }}">
            	</div>
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