@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Certification of Excellence') !!}
@endpush
@section('body')

    <section class="about-banner">
        <div>
            <div class="container">
                <h2 class="text-white pb-2 text-center">Certification of Excellence</h2>
                <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb d-flex justify-content-center ">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Certification of Excellence</li>
                                      </ol>
                </nav>
            </div>
        </div>
    </section>
    
    
    
    <section class="certification-journey">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-12 d-flex flex-wrap">
                   
                    <div class="col-md-4 mb-30 image-box">
                        <embed
                            src="{{ asset('/images/our-core-strength/certification-excellence/1-Manufacture certificate-JRIL_G_105_Certificate.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
                            type="application/pdf"
                            frameBorder="0"
                            scrolling="auto"
                            height="300px"
                            width="100%"
                        ></embed>
                    </div>
                   
                    <div class="col-md-4 mb-30 image-box">
                        <embed
                            src="{{ asset('/images/our-core-strength/certification-excellence/2-3-4-JINDAL RAIL-ISO-CERTIFICATE-2024.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
                            type="application/pdf"
                            frameBorder="0"
                            scrolling="auto"
                            height="300px"
                            width="100%"
                        ></embed>
                    </div>
                   
                    <div class="col-md-4 mb-30 image-box">
                        <embed
                            src="{{ asset('/images/our-core-strength/certification-excellence/5-Factory License Form4.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
                            type="application/pdf"
                            frameBorder="0"
                            scrolling="auto"
                            height="300px"
                            width="100%"
                        ></embed>
                    </div>
                   
                    <div class="col-md-4 mb-30 image-box">
                        <embed
                            src="{{ asset('/images/our-core-strength/certification-excellence/6-Competent manufacturer certificate_JRIL.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
                            type="application/pdf"
                            frameBorder="0"
                            scrolling="auto"
                            height="300px"
                            width="100%"
                        ></embed>
                    </div>
                   
                    <div class="col-md-4 mb-30 image-box">
                        <embed
                            src="{{ asset('/images/our-core-strength/certification-excellence/7-Certificate of Capacity_JRIL.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
                            type="application/pdf"
                            frameBorder="0"
                            scrolling="auto"
                            height="300px"
                            width="100%"
                        ></embed>
                    </div>
                   
                    
                </div>
            </div>
        </div>
    </section>
  



@endsection