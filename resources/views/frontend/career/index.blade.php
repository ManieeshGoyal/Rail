@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Careers') !!}
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
.job-card{
    background:grey;
    margin:20px 0px;
}
  .job-card{
    background:rgba(223, 223, 223, 0.555);
    border-radius: 12px;
    border-left: 5px solid #007ea8;;
  }
  li{
    list-style: none;
  }
  .job-apply-btn{
    background:#007ea8;
    padding: 2px 7px;
   width:100px;

  }
  .job-apply-btn a{
    color:white;
  }
   .job-name{
    font-size:24px;
    font-weight: 500;
    margin:0px 0px 5px auto;
  }
  
</style>

    <!--<div id="header-banner" class="header-banner clearfix">-->
    <!--    <div id="header-banner-inner" class="container clearfix">-->
    <!--        <div class="header-banner-inner-wrap">-->
    <!--            <div class="blog-standar-start">-->
    <!--                <h1 class="blog-standar-start1">Careers</h1>-->
    <!--            </div>-->
    <!--            <h2 class="blog-standar-end">-->
    <!--                <a href="{{ asset('/') }}" class="blog-standar-end">Home</a> -->
    <!--                <span class="blog-standar-end">Careers</span>-->
    <!--            </h2>               -->
    <!--        </div><!-- /.header-banner-inner-wrap -->
    <!--    </div><!-- /#header-banner-inner --> 
    <!--</div>-->
    
    <!--<div class="row-aubout-us">-->
    <!--    <div class="container">-->
    <!--        <div class="row"> -->
    <!--            <div class="col-md-12">-->
          
                    <!--<div class="themesflat-spacer clearfix" data-desktop="236" data-mobile="60" data-smobile="60" style="height:236px"></div>-->
                      <!--  <div class="themesflat-headings about-us style-2  clearfix">
    <!--                        <span class="heading-shadown-text style-2">Recent Jobs List</span>-->
    <!--                        <h1 class="heading wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">WE ARE QUALIFIED &amp; <br>PROFESSIONAL</h1>-->
    <!--                        <p class="sub-heading wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens</p>-->
    <!--                    </div>-->
    <!--                <div class="about-us-content row">-->
    <!--                    <div class="about-us-content-left wow fadeInDown animated col-md-6">-->
    <!--                       <div>-->
    <!--                             @if(is_iterable($jobPostings))-->
    <!--                                @foreach($jobPostings as $jobPosting)-->
    <!--                                   <div class="container">-->
    <!--                                 <div class="row"> -->
    <!--                                 <div class="col-6">-->
    <!--                                   <li> {{ $jobPosting->name }}  </li>-->
    <!--                                    <li><a href="{{ route('career.show', $jobPosting->slug) }}"> Apply now </a> </li>-->
    <!--                                       </div>-->
    <!--                                          </div>-->
    <!--                                           </div>-->
    <!--                                @endforeach-->
    <!--                            @endif-->
    <!--                        </div>-->
    <!--                    </div>-->
                      
                        
                        
              
    <!--                    </div>-->
    <!--                </div>-->
                      <!-- <div class="themesflat-spacer clearfix" data-desktop="68" data-mobile="120" data-smobile="85" >{{ $jobPostings->links() }}</div>    -->
               
    <!--        </div>-->
    <!--    </div>-->
    
    <!--</div>-->
    
    
    <section class="about-banner" > 
                      
                       <div> 
                            <div class="container"> 
                               <h2 class="text-white pb-5">Job Opening</h2>
                               
                                    <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb d-flex justify-content-center ">
                                        <li class="breadcrumb-item"><a href="https://jindal.yourwebsitedemo.in/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">career</li>
                                      </ol>
                                    </nav>
                               
                           </div> 
                       </div>
</section>
    
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>&nbsp;</p>
                    <p>You are welcome to send us your resume by email in soft form at contactus@jindalinfralogistics.com. Remember to include information about your education, marks obtained, nature of work experience, previous/current employers, current & expected emoluments etc.</p>
                    <p>&nbsp;</p>
                </div>
            </div>
            <div class="row">
                    @if(is_iterable($jobPostings))
                        @foreach($jobPostings as $jobPosting)
                            <div class="col-4">
                                <div class="job-card d-flex align-items-center justify-content-around  p-4">
                                        <div>
                                          <img src="assets/img/headphones (3).png" alt="" class="img-fluid" width="80px">  
                                        </div>
                                        <div class="job-info">
                                            <span>{{ date('F d, Y', strtotime($jobPosting->created_at)) }}</span>
                                            <ul>
                                               <li class="job-name"> {{ $jobPosting->name }}  </li>
                                               <li class="job-apply-btn"><a href="{{ route('career.show', $jobPosting->slug) }}"> Apply now </a> </li>
                                            </ul>
                                        </div>
                                </div> 
                            </div>
                        @endforeach
                    @endif

        
            </div>
            
        </div>
    </section>
    
@endsection