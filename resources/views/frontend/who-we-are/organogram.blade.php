@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('What We Are', 0, 'Organogram') !!}
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
                        
                        <span class="blog-standar-end">Organogram</span>
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
                    		 <p></p>
                    	</div>
                        <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="50" data-smobile="60"></div> 
                    	<div class="col-md-12">
                    	    <img src="{{ asset('images/or.png') }}">
                    	 <!--   <p class="text-justify mb-10">The total quantity of Solid waste generated in the country for the year 2019-20 was 1,50,761 TPD Out of which 47.01 % of waste is treated and 27.16% is landfilled. 25.8% of the total waste generated remained unaccounted. For the year 2019-20 per capita waste generated is around 119.26 Gram /person.Inefficient management of the waste give rise to uncountable environmental problems such as frequent fire break outs and leaching of chemicals.</p>-->
                    		<!--<p class="text-justify mb-10">Tehkhand Waste to Electricity Project Limited is a step towards managing ever increasing Municipal solid Waste and to prevent it going to landfill which is one of the efficient and environmentally friendly solutions for waste management. It is a joint initiative by JUILand SDMC. South Delhi generates about 3,600 Tons of MSW per Daywhose efficient and scientific management is necessary. Tehkhand Waste to Electricity Project will scientifically handle 2000 tons (± 20%) of waste per day and is designed to generate 25 MW of electricity in return.</p> -->
                    		<!--<p class="text-justify mb-10">The journey of waste to electricity started way back in 2008 with the inception of first Waste to Energy plant in the name of Timarpur-Okhla Waste Management Company Limited in Delhi. It is a 23 MW plant designed to handle 1950 tons of MSW per day. The Plant is successfully operating for last 10 years.</p>-->
                    		<!--<p class="text-justify mb-10">South Delhi is moving toward waste free municipal corporation with the commissioning of Tehkhand Waste to Electricity Project Limited by Jindal Group.</p>    -->
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