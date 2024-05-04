@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Mission & Vision') !!}
@endpush
@section('body')

    <section class="about-banner">
        <div>
            <div class="container">
                <h2 class="text-white pb-2 text-center">Mission & Vision</h2>
                <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb d-flex justify-content-center ">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Mission & Vision</li>
                                      </ol>
                </nav>
            </div>
        </div>
    </section>
    
    
  <section class="vision-mission">
 <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 p-0">
          <div class="padding">
              <h3 class="mt-4 pb-3">Mission Statement</h3>
            <p>
             Our mission is to lead the Indian and global freight wagon industry by delivering innovative, reliable, and sustainable rolling stock solutions. We are committed to exceeding our customers' expectations through excellence in engineering, manufacturing, and customer service. Our focus on quality, safety, and environmental responsibility drives our dedication to contributing to the efficient and eco-friendly transportation of goods, fostering economic growth, and empowering our communities.
            </p>
          </div>
        </div>
        <div class="col-lg-6 p-0">
          <div style="background-image:url('{{ asset('assets/images/Artboard-2-(2).png')}}');background-position: 100%;background-repeat: no-repeat;height: 350px; background-size: 100%; width: 400px;float: right;">
            
          </div>
        </div>
        <div class="col-lg-6 p-0">
          <div style="background-image:url('{{ asset('assets/images/Artboard-1-(2).png')}}');background-position: 100%;background-repeat: no-repeat;height: 350px; background-size:100%; width: 400px;">
            
          </div>
        </div>
          
        <div class="col-lg-6 p-0">
          <div class="padding">
            <h3 class="pb-3">Vision Statement</h3>
            <p>
         To be the foremost provider of cutting-edge, custom-tailored freight wagon solutions in India and internationally, setting new standards of efficiency, sustainability, and safety in rail transportation. We envision a future where our innovations transform logistics, reduce environmental impact, and bolster economic progress, positioning our company as a global leader that continually shapes the future of freight transportation.
            </p>
          </div>
        </div>
      </div>
      </div>
    </section>
    
@endsection