@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'team') !!}
@endpush
@section('body')
<head>
 
    
  <style>
                .card-body {    text-align: center;}
                .card-header{display:none;} 
    
  .about-banner{
         background-image: url('https://jindal.yourwebsitedemo.in/assets/img/abt-b.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    height:50vh;
    width: 100%;
background-position:bottom;
    display: flex;
    justify-content: center;
    align-items: flex-end;
  }
.bg-blue{
    background:#1378be;
}
 .card {
  margin: 10px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
 
 
}
.card-header img {
  width: 100%;
  height:270px;
  border-top-left-radius: 10px;
 border-top-right-radius: 10px;
  padding: 0px;
  object-fit: cover;
}
.card-header{
    padding: 0px!important;
}
.badge{
    font-weight:500!important;
}

.card-body {
    padding: 1.25rem;
    display: flex;
    vertical-align: c;
    justify-content: space-around;
    align-items: center;
    vertical-align: c;
}
.badge2{
    font-size:14px;
    white-space:normal;
    line-height:20px;
        letter-spacing: 0.5px;
}
.badge{
    font-size:14px;
    margin-top:4px;
      line-height:20px;
        letter-spacing: 0.5px;
    
}
</style>
             
          
</head>

<!--
    <div class="pageContent">
            <section class="py-4 bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mt-3">
                            <div class="border-l mb-4 aos-init" data-aos="fade-up">
                                <h2 class="txt-lg mb-3">Lorem Ipsum</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus elementum dui sit amet condimentum. Pellentesque vel arcu rhoncus dui ultrices eleifend ut ut purus. Duis ut enim hendrerit, fermentum nisi in, pellentesque velit.</p>
                            </div>
                            <p class="text-left mt-4 mb-5 aos-init" data-aos="fade-up"><a href="#"
                                    class="btn btn-gradient">View more</a></p>
                            <div class="row no-gutters mb-3 zoom-img">
                                <div class="col-md-6 aos-init" data-aos="fade-up">
                                       <img src="{{ asset('assets/img/vision.png')}}" class="img-fluid w-100" loading="lazy">
                                                                </div>
                                <div class="col-md-6 sustainability-h aos-init" data-aos="fade-up">
                                    <div class="bg-white p-4 h-100">
                                        <h3 class="sectionheading">Lorem Ipsum:</h3>
                                        <p>To be the most preferred and reliable provider of value in all our businesses.</p>
                                        <p class="mt-3"><a href="#" class="txt-xs">Read more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  mt-3 mb-3">
                            <div class="row no-gutters h-100 bg-white  zoom-img">
                                <div class="col-lg-12 col-sm-6">
                                    <img alt=""
                                        src="{{ asset('assets/img/core-values.png')}}"
                                        class="img-fluid w-100 h-100" loading="lazy">
                                         
                                </div>
                                <div class="col-lg-12 col-sm-6 sustainability-v aos-init" data-aos="fade-up">
                                    <div class="bg-white px-3 pb-3 h-100">
                                        <h3 class="sectionheading mt-4">Lorem Ipsum:</h3>
                                        <p>Recognise individual's contribution in the growth and development of the Company. Treat all Jindalites with respect and dignity.</p>
                                        <p class="mt-3"><a href="#" class="txt-xs">Read more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
-->

<section class="about-banner" >
                      
                        <div>
                            <div class="container">
                                <h2 class="text-white pb-5">India’s fastest growing corporate catering to a billion aspirations</h2>
                            </div>
                        </div>
                        
                        
                        
                    </section>
                    
 <section>
    <div class="container mt-4">
        <h2 class="text-center my-3">Board of Directors</h2>
        
    
        <div class="row">
            
            <!--       <div class="col-md-4">-->
            <!--    <div class="card">-->
            <!--        <div class="card-header">-->
            <!--        <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >-->
            <!--        </div>-->
            <!--        <div class="card-body">-->
            <!--            <div>-->
            <!--           <span class="badge bg-blue text-white px-3 py-2">Executive Director</span>-->
            <!--          <h4 class="mt-2">-->
            <!--            Mr. Amarendra Kumar Sinha -->
            <!--          </h4>-->
            <!--          </div>-->
            <!--          <div>-->
                          
            <!--             <img src="{{ asset('assets/img/arrow-right (1).png')}}" loading="lazy" height="40px">-->
            <!--          </div>-->
                
            <!--        </div>-->
            <!--      </div>-->

            <!--</div>-->
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                    <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >
                    </div>
                    <div class="card-body">
                        <div>
                       <span class="badge bg-blue text-white px-3 py-2">Executive Director</span>
                      <h5 class="mt-2">
                        Mr. Amarendra Kumar Sinha 
                      </h5>
                      </div>
                  
                
                    </div>
                  </div>

            </div>
            <div class="col-md-4">
                   <div class="card">
                    <div class="card-header">
                     <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >
                    </div>
                   <div class="card-body">
                        <div>
                       <span class="badge bg-blue text-white px-3 py-2">Independent Director</span>
                      <h5 class="mt-2">
                       Mr. D.P. Tripathi
                      </h5>
                      </div>
                     
                
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                   <div class="card">
                    <div class="card-header">
                     <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >
                    </div>
                   <div class="card-body">
                        <div>
                       <span class="badge bg-blue text-white px-3 py-2">Independent Director</span>
                      <h5 class="mt-2">
                        Mr. Girish Sharma
                      </h5>
                      </div>
                     
                
                    </div>
                  </div>
            </div>
        </div>
         <div class="row mt-3">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                     <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >
                    </div>
                      <div class="card-body">
                        <div>
                       <span class="badge bg-blue text-white px-3 py-2">Independent Director</span>
                      <h5 class="mt-2">
                        Dr. Raj Kamal Agarwal 
                      </h5>
                      </div>
                     
                
                    </div>
                  </div>

            </div>
            <div class="col-md-4">
                   <div class="card">
                    <div class="card-header">
                     <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >
                    </div>
                     <div class="card-body">
                        <div>
                       <span class="badge bg-blue text-white px-3 py-2">Director</span>
                      <h5 class="mt-2">
                        Mr. Arun Kumar Khosla
                      </h5>
                      </div>
                    
                
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                   <div class="card">
                    <div class="card-header"> 
                     <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >
                    </div>
                     <div class="card-body">
                        <div>
                       <span class="badge bg-blue text-white px-3 py-2">Director</span>
                      <h5 class="mt-2">
                        Ms. Kanika Sharma
                      </h5>
                      </div>
                  
                    </div>
                  </div>
            </div>
        </div>
      
</section>
    

 <section>
    <div class="container my-4">
        <h2 class="text-center my-3">Key Managerial Personnel (KMPs)</h2>
      
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                    <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >
                    </div>
                    <div class="card-body">
                        <div>
                       <span class="badge bg-blue text-white px-3 py-2">Executive Director</span>
                      <h5 class="mt-2">
                        Mr. Amarendra Kumar Sinha 
                      </h5>
                      </div>
                    
                
                    </div>
                  </div>

            </div>
            <div class="col-md-4">
                   <div class="card">
                    <div class="card-header">
                     <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >
                    </div>
                   <div class="card-body">
                        <div>
                       <span class="badge bg-blue text-white px-3 py-2">CFO </span>
                      <h5 class="mt-2">
                        Mr. Anuj Kumar
                      </h5>
                      </div>
                
                
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                   <div class="card">
                    <div class="card-header">
                     <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >
                    </div>
                   <div class="card-body">
                        <div>
                       <span class="badge bg-blue text-white px-3 py-2">Company Secretary</span>
                      <h5 class="mt-2">
                       Mr. Alok Kumar
                      </h5>
                      </div>
                     
                
                    </div>
                  </div>
            </div>
        </div>
       
       
         <div class="container my-4">
        <h2 class="text-center my-3 mt-5">Board Committees</h2>
        <h4 class="text-center my-3">Audit Committee</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                    <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >
                    </div>
                    <div class="card-body">
                        <div>
                       <span class="badge bg-blue text-white px-3 py-2">Non-Executive - Independent Director</span>
                          <span class="badge bg-blue text-white px-3 py-2"> Chairperson</span>
                             
                      <h5 class="mt-2">
                       Mr. D. P. Tripathi 
                      </h5>
                      </div>
                    
                
                    </div>
                  </div>

            </div>
         
            <div class="col-md-4">
                   <div class="card">
                    <div class="card-header">
                     <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >
                    </div>
                   <div class="card-body">
                        <div>
                       <span class="badge bg-blue text-white px-3 py-2 badge2">Non-Executive - Independent Director & Member</span>
                        
                      <h5 class="mt-2 text-center">
                      Mr. Girish Sharma
                      </h5>
                      </div>
                     
                
                    </div>
                  </div>
            </div>
            
               <div class="col-md-4">
                   <div class="card">
                    <div class="card-header">
                     <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >
                    </div>
                   <div class="card-body">
                        <div>
                       <span class="badge bg-blue text-white px-3 py-2">Non-Executive - Independent Director</span>
                         <span class="badge bg-blue text-white px-3 py-2">Member</span>
                      <h5 class="mt-2">
                    Mr. Rajkumar Agrawal
                      </h5>
                      </div>
                     
                
                    </div>
                  </div>
            </div>
            
               <div class="col-md-4">
                   <div class="card">
                    <div class="card-header">
                     <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >
                    </div>
                   <div class="card-body">
                        <div>
                       <span class="badge bg-blue text-white px-3 py-2">Executive Director</span>
                       <span class="badge bg-blue text-white px-3 py-2">Member</span>
                      <h5 class="mt-2">
                     Mr. Amarendra Kumar Sinha
                      </h5>
                      </div>
                
                
                    </div>
                  </div>
            </div>
        </div>
        </div>
        
                 <div class="container my-4">
       <h4 class="text-center my-3">Stakeholder Relationship Committee:</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                    <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >
                    </div>
                    <div class="card-body">
                        <div>
                       <span class="badge bg-blue text-white px-3 py-2">Non-Executive - Independent Director</span>
                          <span class="badge bg-blue text-white px-3 py-2">Member</span>
                             
                      <h5 class="mt-2">
                       Mr. D. P. Tripathi 
                      </h5>
                      </div>
                    
                
                    </div>
                  </div>

            </div>
         
            <div class="col-md-4">
                   <div class="card">
                    <div class="card-header">
                     <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >
                    </div>
                   <div class="card-body">
                        <div>
                       <span class="badge bg-blue text-white px-3 py-2 badge2">Executive Director</span>
                        <span class="badge bg-blue text-white px-3 py-2 badge2">Member</span>
                        
                      <h5 class="mt-2 text-center">
                   Mr. Amarendra Kumar Sinha
                      </h5>
                      </div>
                     
                
                    </div>
                  </div>
            </div>
            
               <div class="col-md-4">
                   <div class="card">
                    <div class="card-header">
                     <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >
                    </div>
                   <div class="card-body">
                        <div>
                       <span class="badge bg-blue text-white px-3 py-2">Non-Executive - Independent Director</span>
                         <span class="badge bg-blue text-white px-3 py-2">Chairperson</span>
                      <h5 class="mt-2">
                Ms. Kanika Sharma
                      </h5>
                      </div>
                     
                
                    </div>
                  </div>
            </div>
         
        </div>
        </div>
        
         <div class="container my-4">
       <h4 class="text-center my-3">Nomination & Remuneration Committee:</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                    <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >
                    </div>
                    <div class="card-body">
                        <div>
                       <span class="badge bg-blue text-white px-3 py-2">Non-Executive - Independent Director</span>
                          <span class="badge bg-blue text-white px-3 py-2">Member</span>
                             
                      <h5 class="mt-2">
                       Mr. D. P. Tripathi 
                      </h5>
                      </div>
                    
                
                    </div>
                  </div>

            </div>
         
            <div class="col-md-4">
                   <div class="card">
                    <div class="card-header">
                     <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >
                    </div>
                   <div class="card-body">
                        <div>
                       <span class="badge bg-blue text-white px-3 py-2 badge2">Non-Executive - Independent Director & Member</span>
                        
                      <h5 class="mt-2 text-center">
                    Dr. Raj Kamal Agarwal
                      </h5>
                      </div>
                     
                
                    </div>
                  </div>
            </div>
            
               <div class="col-md-4">
                   <div class="card">
                    <div class="card-header">
                     <img src="{{ asset('assets/img/team-2.jpg')}}" loading="lazy" >
                    </div>
                   <div class="card-body">
                        <div>
                       <span class="badge bg-blue text-white px-3 py-2">Non-Executive - Independent Director</span>
                         <span class="badge bg-blue text-white px-3 py-2">Member</span>
                      <h5 class="mt-2">
                   Ms. Kanika Sharma
                      </h5>
                      </div>
                     
                
                    </div>
                  </div>
            </div>
    
        </div>
        </div>
     
</section>
   

@endsection