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
                        
                        <span class="blog-standar-end">Swachh Bharat Abhiyan</span>
                    </h2>               
                </div><!-- /.header-banner-inner-wrap -->
            </div><!-- /#header-banner-inner -->            
        </div>
        <!-- End Header Banner -->  
  
            <!-- End Header Banner --> 
            <div class="container">  
                <div class="infor-of-project">
                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="50" data-smobile="60"></div> 
                    <p>
                        One of the most popular and compelling operation in INDIA. The campaign was introduced by the prime minister Narender Modi, launched on 2nd October 2014 on the birth anniversary of Mahatma Gandhi to honor his vision of clean country.  PM Narender Modi was awarded as “Global Goalkeeper” for this initiative by Gates foundation on 25 September 2019 in New York. Objective of the Abhiyan is to aware the citizens about importance of cleanliness. The vision of the Abhiyan is to provide sanitation facilities like solid, liquid and toilet waste disposal mechanism and safe drinking water for everyone. Drive to take cleanliness pledge was started where 91541 pledges has been taken. A sense of responsibility is emerging in the people of country with pledge which say,“I pledge to segregate my household, shop, establishment waste in two bins, wet waste in <span style="color:green;">green bin</span> and dry waste in <span style="color:blue;">blue bin</span> as my contribution into swachh bharat mission” .
                    </p>
                    <p>In Swachh Bharat Mission (urban) 1.0, there were six components and one of those is <b>MUNICIPAL WASTE MANAGEMENT</b> and Tehkhand Waste to Electricity Project is dedicated contributer towards the same.</p>
                    <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="15" data-smobile="30"></div> 
                    <p><center><img src="{{ asset('images/gallery/sbm.png') }}"></center></p>
                </div>   
                 <!-- ARTICLE--> 
                <!--END ARTICLE-->
            </div> 
@endsection

@push('header')

@endpush

@push('footer')
 
@endpush