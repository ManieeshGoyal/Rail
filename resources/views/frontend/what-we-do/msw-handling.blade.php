@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'What We Do') !!}
@endpush
@section('body')
<div class="sub-header">
    <h2>What We Do</h2>
</div>
    <section class="what-we-do-section left">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 d-flex flex-column justify-content-center">
                	<h2 class="heading-two">MSW Handling</h2>
                	<p>Municipal solid waste from south Delhi and north Delhi in closed hook loaders or compactors are received at TOWMCL plant at the gate, where they are pass through Radioactive sensors, and automatic Weighing bridge and enters the Truck Reception Hall. The trucks with MSW are received and MSW is unloaded into the MSW Pit.</p>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <img src="{{ asset('/images/msw-handling.jpg') }}">
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <img src="{{ asset('/images/msw-pits.jpg') }}">
                </div>
                <div class="col-lg-6 col-md-12 col-12 d-flex flex-column justify-content-center">
                    <h2 class="heading-two">MSW Pits</h2>
                    <p>Inside MSW Pit spraying of inoculum and spreading of press mud is done while unloading of waste. The Floor of these Pit consists of proper Leachate collection system. MSW in the pits is homogenised time by time and stacked into a heap with the help of grab cranes so that leachate by effect of gravity and pressure settles down and  waste rests onto the pit for next 4 -5 days.</p>
                </div>
            </div>
        </div>
    </section>
@endsection