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
                <div class="col-lg-9 col-md-12 col-12 pre-processing">
                    <h2>Pre - Processing</h2>
                    <p>MSW travels its journey from being waste to finally transforming intoRDF (Refused derived fuel) in Pre- processing system. MSW is transferred to Pre-processing system (PPS) after resting for 4-5 days in the pit through grab cranes. MSW gets passes through segregation machinery installed in PPS. Machinery consists of  Conveyer belts, Ballistic separators, Shredders, Magnetic separators . MSW travels on conveyer belts to the ballistic separator and during its path, big stones, wood logs are manually segregated, and the metals are separated by a magnetic separator. Inside Ballistic separators MSW gets segregated according to its size based on principle of density separation.</p>
                    
                    <video class="pps-video mb-10" controls>
                          <source src="{{ asset('/videos/pps-section.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="col-lg-3 col-md-12 col-12">
                    <div class="col-12 p-0 inside-bar pre-processing">
                        <p><strong>The PPS results into 3 main products</strong></p>
                        <ol>
                            <li>Below 10 mm size organic particle is taken to the compost for further processing.</li>
                            <li>Stone, Glasses which are termed as inert are sent for land filling.</li>
                            <li>Waste that is neither compostable nor inert that lies between 10 mm to 150 mm of size is considered as Refused derived fuel (RDF). RDF is the desired feed for the boilers which will be used for generation of energy.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection