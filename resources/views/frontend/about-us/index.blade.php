@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'About Us') !!}
@endpush
@section('body')

	    
	      <section class="about-banner">
                      
                        <div>
                            <div class="container">
                                <h2 class="text-white pb-2 text-center">About Us</h2>
                                 <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb d-flex justify-content-center ">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About us</li>
                                      </ol>
                                    </nav>
                            </div>
                        </div>
                        
                        
                        
                    </section>
                    
<section class="contact-page"> 
    <div class="container my-2">
   <p>Jindal Rail Infrastructure Limited (Jindal Rail) stands as a crucial component of Jindal SAW Limited, under the esteemed US$ 28 Billion OP Jindal group, spanning the realms of Steel, Power, and Infrastructure. Led by Mr. Prithvi Raj Jindal, this enterprise operates from New Delhi and boasts a state-of-the-art facility in Vadodara, Gujarat, which serves as a hub for corporate activity.</p>
   <p>Since its inception in 2012, Jindal Rail has surpassed expectations, delivering over 7,000 wagons that meet both Indian Railway and global standards. Its client base extends to Indian Railways, the Public and Private Sectors, as well as export markets. At the core of Jindal Rail's mission is excellence in design, engineering, and manufacturing, with a dedicated commitment to delivering top-tier products on time. Furthermore, the company places immense importance on Quality, Health, Safety, and Environmental considerations, ensuring responsible and sustainable operations.</p>
   <div class="sec-title">
        <!--<h2 class="mt-5">Group Overview</h2>-->
        </div>
    <div class="row pt-3 align-items-center">
        
        <div class="col-md-6">
            <!-- Left-side image -->
            <img src="{{ asset('assets/images/DI-Plnt-06.jpg')}}" alt="Image" class="img-fluid" width="100%">
        </div>
        <div class="col-md-6">
            <!-- Right-side text -->
            
            <h4 class="pb-2"> </h4>
            <p>Jindal Rail holds prestigious certifications from RDSO G-105, DRDO , which serve as a testament to its manufacturing competence. Additionally, it proudly carries IRS certification and adheres to ISO 9001, ISO 14001, and ISO 45001 standards, reaffirming its dedication to exceptional fabrications, sub-assemblies, and railway wagons. The company excels in design, development, engineering, and manufacturing, focusing relentlessly on delivering top-notch products punctually.</p>
                  <!--        <div class="btn-box mt-3">-->
                  <!--   <a href="our-journey.html" class="btn-style-one">Read More</a>-->
                  <!--</div>-->
        </div>
    </div>
</div>
 
		    </section>

@endsection