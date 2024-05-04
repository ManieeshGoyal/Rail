@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Affiliation & Award') !!}
@endpush
@section('body') 
    <section class="about-banner">
        <div>
            <div class="container">
                <h2 class="text-white pb-2 text-center">Affiliation & Award</h2>
                <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb d-flex justify-content-center ">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Affiliation & Award</li>
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
                            src="{{ asset('/images/our-core-strength/affiliation-award/1-DRDO REGISTRATION_valid upto 23.02.24.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
                            type="application/pdf"
                            frameBorder="0"
                            scrolling="auto"
                            height="300px"
                            width="100%"
                        ></embed>
                    </div>
                   
                    <div class="col-md-4 mb-30 image-box">
                        <embed
                            src="{{ asset('/images/our-core-strength/affiliation-award/3rd Rail Analysis Innovation & Excellence Summit 2022-certificate.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
                            type="application/pdf"
                            frameBorder="0"
                            scrolling="auto"
                            height="300px"
                            width="100%"
                        ></embed>
                    </div>
                   
                    <div class="col-md-4 mb-30 image-box">
                        <embed
                            src="{{ asset('/images/our-core-strength/affiliation-award/4-Certificate of Registration-CLW.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
                            type="application/pdf"
                            frameBorder="0"
                            scrolling="auto"
                            height="300px"
                            width="100%"
                        ></embed>
                    </div>
                   
                    <div class="col-md-4 mb-30 image-box">
                        <embed
                            src="{{ asset('/images/our-core-strength/affiliation-award/4th Rail Analysis Award to JRIL 31.01.2023.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
                            type="application/pdf"
                            frameBorder="0"
                            scrolling="auto"
                            height="300px"
                            width="100%"
                        ></embed>
                    </div>
                   
                    <div class="col-md-4 mb-30 image-box">
                        <embed
                            src="{{ asset('/images/our-core-strength/affiliation-award/DRDO MSC, Pune Vendor Registration Certifiacte of Jindal Rail as Approved Vendor.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
                            type="application/pdf"
                            frameBorder="0"
                            scrolling="auto"
                            height="300px"
                            width="100%"
                        ></embed>
                    </div>
                   
                    <div class="col-md-4 mb-30 image-box">
                        <embed
                            src="{{ asset('/images/our-core-strength/affiliation-award/Jindal Rail Certificate - R&DE(E), Pune 1.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
                            type="application/pdf"
                            frameBorder="0"
                            scrolling="auto"
                            height="300px"
                            width="100%"
                        ></embed>
                    </div>
                   
                    <div class="col-md-4 mb-30 image-box">
                        <embed
                            src="{{ asset('/images/our-core-strength/affiliation-award/Jindal Rail ICF Registration.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
                            type="application/pdf"
                            frameBorder="0"
                            scrolling="auto"
                            height="300px"
                            width="100%"
                        ></embed>
                    </div>
                   
                    <div class="col-md-4 mb-30 image-box">
                        <embed
                            src="{{ asset('/images/our-core-strength/affiliation-award/JRIL Vendor Code - 703441 & Registration with BEML, Bangalore.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
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