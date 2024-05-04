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
                        
                        <span class="blog-standar-end">Landfill VS WtE</span>
                    </h2>               
                </div><!-- /.header-banner-inner-wrap -->
            </div><!-- /#header-banner-inner -->            
        </div>
        <!-- End Header Banner -->  
  
            <!-- End Header Banner --> 
            <div class="container">  
                <div class="infor-of-project">
                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="50" data-smobile="60"></div> 
                    <div class="row">
        	<div class="col-lg-2"> </div>
        	<div class="col-lg-8 col-md-12 col-12 normal-grid-design-mg">
        		
        		<p> </p>
        	</div>
        	<div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="50" data-smobile="60"></div> 
        	<div class="col-lg-12 col-md-12 col-12 d-flex flex-column justify-content-center normal-grid-design-text">
        		<h3 class="heading-two">Landfill </h3>
        		<p class="mb-20">A primitive method to control the disposal of municipal solid waste introduced by England in 1912, a carefully designed structure built into or top of the ground in which trash is isolated from surrounding environment (ground water, air, rain). The isolation is accomplished with a bottom linear and daily covering of soil. Basically, the purpose is to bury the trash in such a way that it will be isolated from surrounding environment in thin layers (up to 1 m) and properly compacted by heavy machinery till the thickness up to 3 m. At the end of the day the compacted refuse cell is covered with a layer of compacted soil to prevent odor & windblown debris.</p>
        	    <p>Drastic effects of Landfills-</p>
        	    <ol start="1">
        	        <li>Air pollution & atmospheric effects: it releases more than ten toxic gases, majorly methane and carbon di-oxide around (90-98%) and rest includes nitrogen, ammonia, sulphide etc. It happens when bacteria break down organic waste. Methane has 20 times more potential to trap solar radiation than CO2 .</li>
        	        <li>Ground water pollution: primary environmental issue by landfill ground water contamination. Leachate deteriorates the ground water and also create nuisance around itself which becomes highly sensitive.</li>
        	        <li>Health effect: it increases the health risk like birth defects and low birth weight to those who lives next to landfills.</li>
        	        <li>Landfill fires: gases produce by it in substantive amount can start fire, which may be challenging to put it out and moreover causes air pollution.</li>
        	    </ol>
        	</div>
        	<div class="col-lg-12 col-md-12 col-12 d-flex flex-column justify-content-center normal-grid-design-text mb-20">
        		<img src="../images/pp.jpg">
        	</div>
        	<div class="col-lg-12 col-md-12 col-12 d-flex flex-column justify-content-center normal-grid-design-text mb-20">
        		<h3 class="heading-two">Leachate</h3>
        		<p>It is the liquid that leaches from landfills, it composition vary with respect to type of waste it contains. Basically, it is generated from decomposition of garbage and precipitation that infiltrate and percolates downward through the volume of waste material then it reaches and mix with ground water by which public health and environment are jeopardized. </p>
        		<p>TWEPL is capable to process 18.25 million metric ton of waste in 25 years which can prevent huge environmental degradation in upcoming time.</p>
        		<p>If that 18.25 MMT of waste will not be processed, then the effect of it on landfill will be huge and then Delhi would face the following concerns:</p>
        	</div>
        	<div class="col-lg-12 col-md-12 col-12 d-flex flex-column justify-content-center normal-grid-design-text mb-20">
        		<h3 class="heading-two">Land</h3>
        		<p>A large scale assessment process requires to recognize the available disposal location. The area has to comply with the rules and regulations of government bodies and environment with minimizing economic, environment, health and social factor. By assessing the capacity of landfill height and area which is given by central public health & environmental engineering organization, as assuming the total waste after 25 years and taking the height if landfill 20 m, approximately 344 acre of area will be required after considering the bulk density of waste a 0.85t/cum to dump 18.25 MMT waste.</p>
        	</div>
        	<div class="col-lg-12 col-md-12 col-12 d-flex flex-column justify-content-center pt-20 pb-20">
        		<h3 class="heading-two">Emissions</h3>
        		<p>Landfill can also be considering as a major contributes in global warming. Majorly methane (CH4) and carbon di-oxide (CO2), methane has 20 times more potential to trap the solar radiation methane alone constitutes approx. 29% of total GHG emission in India. </p>
        	</div>
        	<div class="col-lg-3"> </div>
         

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