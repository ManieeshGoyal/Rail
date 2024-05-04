@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'What We Do') !!}
@endpush
@section('body')
<div class="sub-header">
    <h2>What We Do</h2>
</div>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 d-flex flex-column justify-content-center">
                    <h2 class="heading-two">Waste to Energy</h2>
                    <p>Waste to energy (WtE), is the state-of-the art approach to the treatment of municipal solid waste. In addition to the energy recovery component that gives the process its name, it also includes an efficient flue gas cleaning system, and  recovery of valuable materials from MSW. Waste to energy is an effective way to handle the waste by reducing its volume and recover the energy. It is the single approach towards two biggest problems of the world, waste management and depletion of fossils for energy production.</p>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <img src="{{ asset('/images/waste-to-energy.jpg') }}">
                </div>
                <div class="col-lg-6 col-md-12 col-12 mt-30">
                    <img src="{{ asset('/images/waste-to-energy-process1.png') }}">
                </div>
                <div class="col-lg-6 col-md-12 col-12 d-flex flex-column justify-content-center">
                    <h2 class="heading-two">Technology Brief</h2>
                    <p class="mb-0">In TOWMCL WtE Plant, municipal solid waste is delivered to the site and stored in closed pits. A crane thoroughly mixes and piles up the waste and leachate is collected separately for treatment. Waste Passes through the PPS section and gets segregated and converted into RDF (Refused derived fuel) which is used as feed to the boiler feed hoppers. From hoopers it is pushed onto the combustion bed by a ram feeder. A fully integrated control system ensures stable and efficient operation and optimises the fire position on the combustion bed. Once combustion is complete, the inert ash that remains falls into the bottom ash extractor. The process follows Rankine Cycle  and the energy released during combustion is used to produce superheated steam, which is expanded in a turbine generator to generate electricity. The flue gas cleaning system and proper combustion ensure that the emission standards are maintained.</p>
                </div>
            </div>
        </div>
    </section>
@endsection