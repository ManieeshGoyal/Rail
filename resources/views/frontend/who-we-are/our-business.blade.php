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
                        
                        <span class="blog-standar-end">Our Business</span>
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
                                <p>O.P. JINDAL Group with a turnover of USD 25 Billion, was founded in 1952 by Shri. O.P. Jindal. Today, the group is one of India’s largest business conglomerates with business interests spanning steel, mining, power, Industrial gases, cement and seaport facilities, petroleum, diamond, high value metals and mineral exploration.</p>
                                <p>The Group has achieved the global dominance with manufacturing facilities across India, Europe, Middle East, Indonesia, mining connections in Chile, Australia, Indonesia, South Africa and Mozambique and marketing offices around the world. We attribute our success to uncompromised ethics.
                                Shri O.P. Jindal’s four sons now extend his legacy with pride and youthful dynamism. Four companies had been formulated by them i.e., JINDAL SAW Limited, JSW Group, Jindal Stainless Jindal Steel and Power.</p>
                                
                                <p>PR Jindal Group (Part of the O.P Jindal Group) forayed into infrastructure sector in 2007 and incorporated Jindal ITF Limited (JITF) as a subsidiary of Jindal SAW Limited. JITF operates in the sectors such as municipal solid waste processing and power generation, water infrastructure, rail manufacturing, ship building, coastal and inland water transportation business, as municipal solid waste processing and power generation, water infrastructure, rail manufacturing, ship building, coastal and inland water transportation business.</p>
                                <p>The Group has identified municipal solid waste processing and power generation, water infrastructure, rail manufacturing as high potential businesses. To achieve faster growth and unlock shareholders’ value it was decided to demerge these high potential businesses into a separate infra vertical. This infra vertical is housed in Group’s entity namely JITF Intralogistics Limited (JIL). Further, JITF Urban Infrastructure Limited (JUIL), a subsidiary of JIL, is the holding company for all the urban infrastructure projects of the PR Jindal Group. Tehkhand Waste to Electricity project Ltd (TWEPL) is one of the subsidiary companies of JUIL and part of PR Jindal Group.</p>

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