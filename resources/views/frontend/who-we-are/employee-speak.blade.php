@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Employee Speak ') !!}
@endpush
@section('body')
 
        <!-- Header Banner-->
        <div id="header-banner" class="header-banner clearfix">
            <div id="header-banner-inner" class="container clearfix">
                <div class="header-banner-inner-wrap">                    
                    <div class="blog-standar-start">
                        <h1 class="blog-standar-start1">Who We Are</h1>
                    </div>
                    <h2 class="blog-standar-end">
                        <a href="{{ asset('/') }}" class="blog-standar-end">Home</a> |
                        
                        <span class="blog-standar-end">Employee Speak</span>
                    </h2>               
                </div><!-- /.header-banner-inner-wrap -->
            </div><!-- /#header-banner-inner -->            
        </div>
        <!-- End Header Banner -->  
   
            <!-- END ABOUT US -->
            
             <!-- OUR CREATIVE TEAM -->
             <div class="row-our-team">
                <div class="container">
                    <div class="row row-our-team-inner">
                        <div class="col-md-12">
                            <div class="themesflat-spacer clearfix" data-desktop="57" data-mobile="10" data-smobile="10"></div>
                            <div class="themesflat-headings our-team style-2 text-center wow fadeInUp clearfix">
                                <p class="sub-heading">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed</p>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div>
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                    <div class="row">
                        
                        <div class="col-lg-3 col-md-6 "> 
                            <div class="box-team active wow fadeInUp"  >
                                <div class="img-overlay"> </div>
                                <img src="{{ asset('images/employee-speak/AMITABH.jpg') }}" alt="AMITABH SRIVASTAVA ">
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6 ">
                            <div class="box-team-content wow fadeInDown"  >
                                <div class="box box1">
                                    <h3 class="team-tittle"><a href="team.html">AMITABH SRIVASTAVA </a> </h3> 
                                </div>
                                <p class="text-justify">I am with TWEPL since more than 6 months, company work culture is excellent, management and staff are very cooperative, listing everyone views and authorise to take decisions and execution. Company gives opportunity to learn and experience different construction & operation units. Appropriate response for employee’s grievances from site HR and HO, periodically organise trainings & different programs to motivate employees. Celebrate everyone’s birthday & work anniversary. Overall satisfactory healthy & polite office environment with work life balance.</p>
                            </div>
                        </div> 
                        
                    </div> 
                    <div class="row">
                        <div class="col-lg-3 col-md-6 "> 
                            <div class="box-team wow fadeInDown" >
                                <div class="img-overlay"> </div>
                                <img src="{{ asset('images/employee-speak/Atul.jpg') }}" alt="Image">
                            </div>
                        </div>
                        
                        <div class="col-lg-9 col-md-6 ">
                            <div class="box-team-content wow fadeInDown"  >
                                <div class="box box2">
                                    <h3 class="team-tittle"><a href="team.html">Atul Kumar  </a> </h3>
                                    <span> Sr engineer, Electrical department</span>
                                </div>
                                <p class="text-justify">It has been a great pleasure joining the family of TWEPL. It has not been very long here, but it really doesn’t feel like I am new here, people here are enthusiastic and dedicated towards their work always ready to help and face new challenges. Colleagues are very joyful making work atmosphere very lively.<br>
                                You will always get help regardless of your concerned department. Can also diversify your scope of learning by involving in various activities conducted by various departments. Good food, neat and clean workplace with amazing team to work with positive atmosphere. <br>
                                You will have space to show your creativity in various programs conducted by HR team. <br> Good mentors to motivate and groom you to become future team leaders.</p>
                            </div>
                        </div> 
                        
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 ">
                            <div class="box-team wow fadeInUp"  >
                                <div class="img-overlay"> </div>
                                <img src="{{ asset('images/employee-speak/Tarun.jpg') }}" alt="Image">
                            </div>
                        </div>
                        
                        <div class="col-lg-9 col-md-6 ">
                            <div class="box-team-content wow fadeInDown"  >
                                <div class="box">
                                    <h3 class="team-tittle"><a href="team.html">Tarun Joshi </a> </h3>
                                    <span> Deputy Manager, Electrical Department </span>
                                </div>
                                <p>“I have been proudly associated with TOWMCL & TWEPL for over 6 years now. I have always been motivated by my management to go beyond our customary task and work, to embrace novel skills, develop repository of aptitudes and outclass in manifold arenas. This gave me various opportunities to excel and empowered to realize organisational and personal goals simultaneously. In a nutshell, the thing I like here the most is an overall reassuring and transparent environment.”</p>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 ">
                            <div class="box-team wow fadeInDown"  >
                                <div class="img-overlay"> </div>
                                <img src="{{ asset('images/employee-speak/Maniss.jpg') }}" alt="Image">
                            </div>
                        </div> 
                        
                        <div class="col-lg-9 col-md-6 ">
                            <div class="box-team-content wow fadeInDown"  >
                                <div class="box">
                                    <h3 class="team-tittle"><a href="team.html">Manish Kaushik </a> </h3>
                                    <span>Accounts</span>
                                </div>
                                <p>At TWEPL, I joined 3 months back and found good working environment and our team members are so cooperative and with positive attitude. Our Seniors and Head office officials support us, and they are always ready to discuss with us for any work discrepancies and guide us from time to time for changes in taxation/process. I am very proud to work here as we are providing social services in the form of converting waste into electricity for environmental health.</p>
                            </div>
                        </div> 
                    </div> 

                </div><!-- /.container -->
            </div>
            <!-- END OUR CREATIVE TEAM -->

@endsection