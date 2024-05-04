@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Contact Us') !!}
@endpush
@section('body') 
                     
	    
	      <section class="about-banner">
                      
                        <div>
                            <div class="container">
                                <h2 class="text-white pb-2 text-center">Contact Us</h2>
                                 <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb d-flex justify-content-center ">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                      </ol>
                                    </nav>
                            </div>
                        </div>
                        
                        
                        
                    </section>
<section class="contact-page">
   <div class="container bootstrap snippets bootdeys">
      <div class="row text-center">
         <div class="col-sm-4">
            <div class="contact-detail-box">
               <i class="fa fa-phone fa-3x text-colored"></i>
               <h4>Get In Touch</h4>
               <p class="text-muted">P: <a href="tel:+911166463635" class="text-muted">+91 11 66463635</a></p>
            </div>
         </div>
         <!-- end col -->
         <div class="col-sm-4">
            <div class="contact-detail-box">
               <i class="fa fa-envelope fa-3x text-colored"></i>
               <h4>24x7 Support</h4>
               <p> E: <a href="mailto: info.jindalrail@jindalrail.com" class="text-muted"> info.jindalrail@jindalrail.com</a></p>
            </div>
         </div>
         <!-- end col -->
         <div class="col-sm-4">
            <div class="contact-detail-box">
               <i class="fa fa-map-marker fa-3x text-colored"></i>
               <h4>Our Location</h4>
               <address>
                  <p>A1, UPSIDC Industrial Area, Nandgaon Road, Kosi Kalan,
                     Mathura, Uttar Pradesh- 281403, India
                  </p>
               </address>
            </div>
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
      <div class="row">
         <div class="col-sm-8">
            <div class="row">
               <div class="col-md-6">
                  <h5 class="text-black mb-10">Sales </h5>
                  <ul class="list-unstyled mb-5 contact-list">
                     <li class="text-black mb-2">
                        <span class="mr-3"><i class="fa fa-user"></i></span>Mr. Pawan Agrawal, VP Business Operation
                     </li>
                     <li class="text-black mb-2">
                        <span class="mr-3"><span class="fa fa-phone"></span></span> 011-66463654
                     </li>
                     <li class="text-black mb-2">
                        <span class="mr-3"><i class="fa fa-user"></i></span>Mr. Alok Sinha, AGM-Marketing
                     </li>
                     <li class="text-black mb-2"><span class="mr-3"><span class="fa fa-phone"></span></span>09811396695</li>
                  </ul>
               </div>
               <div class="col-md-6">
                  <h5 class="text-black mb-10">Trouble shooting/ Grievances </h5>
                  <ul class="list-unstyled mb-5 contact-list">
                     <li class="text-black mb-2">
                        <span class="mr-3"><i class="fa fa-user"></i></span>Mr. Rajeev Shekhar 
                     </li>
                     <li class="text-black mb-2"><span class="mr-3"><span class="fa fa-phone"></span></span>+91 9687654855</li>
                     <li class="text-black mb-2">
                        <span class="mr-3"><i class="fa fa-user"></i></span>Mr. Alok Sinha, AGM-Marketing
                     </li>
                     <li class="text-black mb-2"><span class="mr-3"><span class="fa fa-phone"></span></span>09811396695</li>
                  </ul>
               </div>
               <div class="col-md-6">
                  <h5 class="text-black mb-10">Registered Office</h5>
                  <ul class="list-unstyled mb-5 contact-list">
                     <li class="text-black mb-2">
                        <span class="mr-3"><span class="fa fa-map-marker"></span></span>A1, UPSIDC Industrial Area, Nandgaon Road,
                        Kosi Kalan, Mathura, Uttar Pradesh- 281403, India
                     </li>
                     <li class="text-black mb-2"><span class="mr-3"><span class="fa fa-phone"></span></span>+91-565-232001/232002/232003</li>
                     <li class="text-black"><span class="mr-3"><span class="fa fa-envelope"></span></span> Corporate@jindalrail.com</li>
                  </ul>
               </div>
               <div class="col-md-6">
                  <h5 class="text-black mb-10">Corporate Office:</h5>
                  <ul class="list-unstyled mb-5 contact-list">
                     <li class="text-black mb-2">
                        <span class="mr-3"><span class="fa fa-map-marker"></span></span>Jindal ITF Centre, 28, Shivaji Marg,
                        New Delhi-110015 , India
                     </li>
                     <li class="text-black mb-2"><span class="mr-3"><span class="fa fa-phone"></span></span>  +91-11-66463983/84</li>
                     <li class="text-black"><span class="mr-3"><span class="fa fa-phone"></span></span>Corporate Identity Number
                        U45400UP2007PLC070235
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <!-- Contact form -->
         <div class="col-sm-4">
            <h4 class="mb-4 mt-3">Contact Us</h4>
            <form action="forms/contact.php" method="post" role="form" class="php-email-form form-main">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required="">
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required="">
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required=""></textarea>
              </div>
              
              <div class="text-center"><button type="submit" class="btn btn-outline-success container-fluid px-0 rounded">Send Message</button></div>
            </form>
            <!-- /form -->
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
      <div class="row mt-5">
         <div class="col-lg-12">
            <div class="contact-map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3529.985078920661!2d77.44350767461543!3d27.77943392230985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39733c4bcbb3eae7%3A0xd24c20c155a8fb56!2sNandgaon%20Rd%2C%20Kosi%20Kalan%2C%20Uttar%20Pradesh%20281403!5e0!3m2!1sen!2sin!4v1696666939082!5m2!1sen!2sin" width="100%" height="360" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </div>
         <!-- end col -->
      </div>
   </div>
</section>
    
    <section>
        
                        <div class="container my-5">
                            <div class="row mx-0 px-0">
                                
                                 <div class="col-md-6 mx-0 px-0">
          <img src="{{ asset('assets/img/contact.jpg')}}" loading="lazy" width="500" >
      


      </div>
                                
      <div class="col-md-6 d-flex justify-content-center align-items-left flex-column">
          <h2 class="my-3">Please fill details below</h2>
                 
            </div>

      </div>
    </div>

    </section>
         
@endsection