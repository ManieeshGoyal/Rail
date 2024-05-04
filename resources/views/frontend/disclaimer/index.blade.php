@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Disclaimer') !!}
@endpush
@section('body')
<style>
    
      .about-banner{
         background-image: url('https://jindal.yourwebsitedemo.in/assets/img/contact-b.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    height:50vh;
    width: 100%;
background-position:top;
    display: flex;
    justify-content: center;
    align-items: flex-end;
  }
          .box {
           
        }

        .icon-contact {
            fill:#18a790;
        }

        .border-5 {
            border-width: 5px !important;
        }
        .call-to-action .container {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://jindal.yourwebsitedemo.in/assets/img/contact.jpg') center center;
    background-size: cover;
    padding: 100px 60px;
    border-radius: 15px;
    overflow: hidden;
}

p{
    margin:14px 0px;
}
h1{
    margin:20px auto;
}
ul>li{
    margin:10px 0px;
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
</style>



<section class="about-banner" >
                      
                        <div>
                            <div class="container">
                                <h2 class="text-white pb-5">India’s fastest growing corporate catering to a billion aspirations</h2>
                                  <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb d-flex justify-content-center ">
                                        <li class="breadcrumb-item"><a href="https://jindal.yourwebsitedemo.in/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Disclaimer</li>
                                      </ol>
                                    </nav>
                            </div>
                        </div>
                        
                        
                        
                    </section>
                    
<section>
<div class="container">
	<div class="row my-5">
		<div class="col-l2">
			<h1 >Disclaimer</h1>
			<p>This site is best viewed with an 1024 x 768 monitor resolution and with Internet Explorer 9.0, Mozilla Firefox Version 37.0.1, Google Chrome Version 42.0, and above</p>
			<p>This official site of www.jindalinfralogistics.com has been developed to provide general public information. The documents and information displayed in this site are for reference purposes only.</p>
			<p>The content on the site is updated on a continual basis. While the Company attempts to keep its web information accurate and timely, it neither guarantees nor endorses the content, accuracy, correctness or completeness of the information, text, graphics, hyperlinks, and other items contained on this server or any other server.</p>
			<p>As a result of updates and corrections, web materials are subject to change without notice from the Company. Commercial use of web materials is prohibited without the written permission of the company.</p>
		
			<p>Product design, graphics are the properties of the Company and fully protected. The information and content made available are governed by and to be interpreted in accordance with laws of India, without regard to the choice or conflicts of law provisions of any jurisdiction. If you use this web site from outside India, you are entirely responsible for compliance with all applicable local laws. Some of the hyperlinks contained in this site may lead to resources outside the site. Information contained in any site linked from this site has not been reviewed for accuracy or legal sufficiency.</p>
			<p>The Company is not responsible for the content of any such external hyperlinks and so we encourage you to read the privacy statements of these linked sites as their privacy policy may differ from ours. References to any external links should not be construed as an endorsement of the links or their content</p>
			<p>Information is supplied upon the condition that the persons receiving the same will make their own determination as to its suitability for their purposes prior to use or in connection with the making of any decision. No Information at this web site shall constitute an invitation to invest in the Company or any of its affiliates. Any use of this website or the Information is at your own risk. Neither the Company and its affiliates, nor their officers, employees or agents shall be liable for any loss, damage or expense arising out of any access to, use of, or reliance upon, this website or the Information, or any website linked to this website.</p>
			<p>The Company is neither responsible nor liable for any viruses or other contamination of your system, nor for any delays, inaccuracies, errors or omissions arising out of your use of the site or with respect to the material contained on the site. The company is not responsible for any special, direct, indirect, incidental, punitive or consequential damages that may arise from the use of, or the inability to use, the site and/or the materials contained on the site whether the materials contained on the site are provided by the Company.</p>
			</div>
	</div>
</div>
</section>

@endsection