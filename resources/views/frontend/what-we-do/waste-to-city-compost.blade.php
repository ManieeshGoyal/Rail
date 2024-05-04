@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'What We Do') !!}
@endpush
@section('body')
<div class="sub-header">
    <h2>What We Do</h2>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-12">
                <h2>Waste to City Compost</h2>
            </div>
            <div class="col-lg-9 col-md-12 col-12 mb-40">
                <p>Farmers and gardeners have long understood the benefits of compost to their soil and plants. Application of compost enhances soil’s structure and its ability to hold water. It also creates habitat for beneficial soil organisms, provides a source of slow–release nutrients for plants, and protects plants from soil–borne pathogens. At TOWMCL we have ventured into a new vertical by installing a facility to process compost out of organic materials present in MSW.</p>
            </div>
            
            <div class="col-lg-12 col-md-12 col-12 d-flex flex-wrap p-0">
                <div class="col-md-12">
                    <h4><strong>Composting organisms require four equally important ingredients to work effectively:</strong></h4>
                </div>
                <div class="col-md-3 mt-20 mb-20">
                    <div class="col-12 compost-box">
                        <img src="https://image.flaticon.com/icons/png/512/3227/3227831.png">
                        <span>Carbon</span>
                        <p> for energy; the microbial oxidation of carbon produces the heat, if included at suggested levels. High carbon materials tend to be brown and dry.</p>
                    </div>
                </div>
                <div class="col-md-3 mt-20 mb-20">
                    <div class="col-12 compost-box">
                        <img src="https://image.flaticon.com/icons/png/512/3227/3227831.png">
                        <span>Nitrogen</span>
                        <p>to grow and reproduce more organisms to oxidize the carbon. High nitrogen materials tend to be green (or colorful, such as fruits and vegetables) and wet.</p>
                    </div>
                </div>
                <div class="col-md-3 mt-20 mb-20">
                    <div class="col-12 compost-box">
                        <img src="https://image.flaticon.com/icons/png/512/3227/3227831.png">
                        <span>Oxygen</span>
                        <p> for oxidizing the carbon, the decomposition process.</p>
                    </div>
                </div>
                <div class="col-md-3 mt-20 mb-20">
                    <div class="col-12 compost-box">
                        <img src="https://image.flaticon.com/icons/png/512/3227/3227831.png">
                        <span>Water</span>
                        <p>in the right amounts to maintain activity without causing anaerobic conditions.</p>
                    </div>
                </div>
                <div class="col-md-12">
                <p>Certain ratios of these materials will allow microorganisms to work at a rate that will heat up the compost pile. Active management of the pile (e.g., turning) is maintained for sufficient supply of oxygen and the right moisture level. With the right combination of these ingredients compost is ready to provide nourishment to the soil and helps the plants to grow.</p>
                <!--<p class="mb-0">Below 10 mm size waste from the ballistic separator is taken to the compost section where it passes through screening process which includes, trommel, destoner and magnetic separator and then piled up into rows for degradation. In between the process, water is sprinkled, and homogenization, aeration of the piles is done and compost is ready in 70 days.</p>-->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection