@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags(\App\Models\JobPosting::class, $jobPosting->id, $jobPosting->name, $jobPosting->description, '') !!}
@endpush
@section('body')

<style>
      .about-banner{
         background-image: url('https://jindal.yourwebsitedemo.in/assets/img/services.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    height:50vh;
    width: 100%;
background-position:center;
    display: flex;
    justify-content: center;
    align-items: flex-end;
  }
  
  .breadcrumb li a {
    color:white;}
    
    .breadcrumb li a:after {
    content: '';
    padding: 0 5px;
    display:none;
}
.breadcrumb-item.active {
    color: #d6d8d9;
}
.form-submit input{
    width:100%;
}
.form-group input{
    display:block;
    width:100%;
    height: 40px;
    margin-top: 20px;
}
.form-group p{
    font-size:18px;
    margin-top:10px;
}
</style>




    <!--<div id="header-banner" class="header-banner clearfix">-->
    <!--    <div id="header-banner-inner" class="container clearfix">-->
    <!--        <div class="header-banner-inner-wrap">-->
    <!--            <div class="blog-standar-start">-->
    <!--                <h1 class="blog-standar-start1">{{ $jobPosting->name }}</h1>-->
    <!--            </div>-->
    <!--            <h2 class="blog-standar-end">-->
    <!--                <a href="{{ asset('/') }}" class="blog-standar-end">Home</a> |-->
    <!--                <a href="{{ asset('/career') }}" class="blog-standar-end">Career</a> |-->
    <!--                <span class="blog-standar-end">{{ $jobPosting->name }}</span>-->
    <!--            </h2>               -->
    <!--        </div><!-- /.header-banner-inner-wrap -->
    <!--    </div><!-- /#header-banner-inner -->
    <!--</div> -->
    
    <!-- WRITE A MESSAGE-->
    <!--        <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="60"></div>-->
    <!--        <div class="write-a-message">-->
    <!--            <div class="container">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-md-4">-->
    <!--                        <div class="themesflat-headings contact style-2  wow fadeInUp clearfix">-->
    <!--                            <a class="get-in-touch" href="{{ asset('/contact') }}">Get in touch</a>-->
    <!--                            <h1 class="heading">{{ $jobPosting->name }}</h1>-->
    <!--                            <p class="sub-heading">-->
    <!--                                <i class="fa fa-calendar"></i> Post Date :{{ date('F d, Y', strtotime($jobPosting->created_at)) }}    -->
    <!--                            </p>-->
    <!--                        </div>-->
    <!--                        <ul class="socical-icon">-->
    <!--                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
    <!--                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
    <!--                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>-->
    <!--                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>-->
    <!--                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
    <!--                        </ul>-->
    <!--                    </div>-->

    <!--                    <div class="col-md-8">-->
    <!--                        <div class="form-submit">-->
    <!--                            <div class="form-group">-->
    <!--                                <h3 class="heading">Apply Now</h3>-->
    <!--                            </div>-->
    <!--                            <form action="{{ route('career.store') }}" method="POST" enctype="multipart/form-data">-->
    <!--                                <div class="infor- wow fadeInUp">-->
    <!--                                    @error('name')-->
    <!--                                    <span class="error">{{ $message }}</span>-->
    <!--                                    @enderror-->
    <!--                                    <input type="text" class="input-control @error('name') is-invalid @enderror" placeholder="Name" name="name">-->
                                        
    <!--                                    @error('email')-->
    <!--                                    <span class="error">{{ $message }}</span>-->
    <!--                                    @enderror-->
    <!--                                    <input type="text" class="input-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email">-->
    <!--                                </div>-->
    <!--                                <div class="infor- wow fadeInUp">-->
    <!--                                    @error('phone')-->
    <!--                                    <span class="error">{{ $message }}</span>-->
    <!--                                    @enderror-->
    <!--                                    <input type="text" class="input-control @error('phone') is-invalid @enderror" placeholder="Phone" name="phone">-->
                                        
    <!--                                    @error('resume')-->
    <!--                                    <span class="error">{{ $message }}</span>-->
    <!--                                    @enderror-->
    <!--                                    <input type="file" class="input-control @error('resume') is-invalid @enderror" placeholder="Resume" name="resume">-->
    <!--                                </div>-->
    <!--                                <div class="send">-->
    <!--                                    @csrf-->
    <!--                                    <input type="hidden" name="job_posting_id" value="{{ $jobPosting->id }}">-->
    <!--                                    <button class="message-submit" type="submit">Apply</button>-->
    <!--                                </div>  -->
    <!--                            </form>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="themesflat-spacer clearfix" data-desktop="220" data-mobile="60" data-smobile="60"></div>-->
    <!--        END WRITE A MESSAGE-->
    <!--</section>-->
    
    <section class="about-banner" > 
                      
                       <div> 
                            <div class="container"> 
                               <h2 class="text-white pb-5">India’s fastest growing corporate catering to a billion aspirations</h2>
                               
                                    <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb d-flex justify-content-center ">
                                        <li class="breadcrumb-item"><a href="https://jindal.yourwebsitedemo.in/">Home</a></li>
                                         <li class="breadcrumb-item"><a href="https://jindal.yourwebsitedemo.in/career">career</a></li>
                                          <li class="breadcrumb-item active" aria-current="page"> {{ $jobPosting->name }}</li>
                                      </ol>
                                    </nav>
                               
                           </div> 
                       </div>
</section>

<section>
    <div  class="container mt-5">
         <h1 class="text-center">{{ $jobPosting->name }}</h1>
         <!--<p>{!! $jobPosting->description !!}</p>-->
        <div class="row my-4">
            <div class="col-6 p-0">
                 <img src="{{ asset('assets/img/human-hand-drawing-career-ladder-with-chalk (1).jpg')}}" loading="lazy" height="500px">
            </div>
            
            <div class="col-6 p-0 pl-5 m-auto">
                                        
                              <div class="form-group"> 
                                   <form action="{{ route('career.store') }}" method="POST" enctype="multipart/form-data">
                                  
                                            
                                        @error('name')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                        <p>Full Name</p>
                                        <input type="text" class="input-control @error('name') is-invalid @enderror" placeholder="Name" name="name" required >
                                        
                                          
                                        @error('email')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                          <p>Email Address</p>
                                        <input type="text" class="input-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" required>
                                  
                                     
                                        @error('phone')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                          <p>Phone no</p>
                                        <input type="text" class="input-control @error('phone') is-invalid @enderror" placeholder="Phone" name="phone" required>
                                        
                                        
                                          <p>Upload resume</p>
                                        @error('resume')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                        <input type="file" class="input-control @error('resume') is-invalid @enderror" placeholder="Resume" name="resume" required>
                                   
                                 
                                        @csrf
                                        <input type="hidden" name="job_posting_id" value="{{ $jobPosting->id }}">
                                        <button class="message-submit" type="submit">Apply</button>
                                       
                                     </form>
                                </div>
            
        </div>
     
       
    </div>
</section>

@endsection