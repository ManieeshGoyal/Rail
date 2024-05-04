@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Privacy-policy') !!}
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
                                        <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                                      </ol>
                                    </nav>
                            </div>
                        </div>
                        
                        
                        
                    </section>
                    
<section>
<div class="container">
	<div class="row my-5">
		<div class="col-l2">
			<h1 >Collection and Use of Personal Information</h1>
			<p>The information which we collect and store during normal use of the site is used to monitor use of the site and to help its further development. Such use does not result in any personally identifiable data being collected or stored.</p>
			<p>A number of pages in this website give you the option to submit personal information to the Company. All such communications are not confidential. Any application, request or enquiry you make, may be passed or made available to Group affiliates, some of which may be based in countries that do not have data protection laws. All Group affiliates are required to comply with an internal Privacy Policy which requires that steps are taken to protect your personal information and for it only to be used for the purpose(s) for which it was submitted.</p>
			<p>To the extent required or permitted by law, we may also collect, use and disclose personal information in connection with security related or law enforcement investigations or in the course of cooperating with authorities or complying with legal requirements.
			By submitting your personal information through this website, you shall be consenting to it being processed in the manner described above by Group affiliates.</p>
			<p>For your convenience, this page may contain certain hyperlinks to Company's other pages as well as to websites outside the Company. In addition, you may have linked to our website from another website. We cannot be responsible for the privacy policies and practices of other websites, even if you access them using links from our website. We can make no promises or guarantees regarding data collection on the hyper-linked pages and on websites that are not owned by the Company. We recommend that you check the policy of each website you visit, or link from, and contact the owners or operators of such websites if you have any concerns or questions.</p>
			
			<h1>Cookies</h1>
			<h4>Use of Cookies</h4>
			<p>A cookie is a text-only string of information that a website transfers to the cookie file of the browser on your computer's hard disk so that the website can remember who you are.</p>
			<p>A cookie will typically contain the name of the domain from which the cookie has come, the "lifetime" of the cookie, and a value, usually a randomly generated unique number.</p>
			<p>When you visit our website we send you a cookie. Cookies may be used in the following ways:</p>
			<p>To help us recognise you as a unique visitor (just a number) when you return to our website and to allow us to tailor content or advertisements to match your preferred interests or to avoid showing you the same adverts repeatedly.</p>
			<p>To compile anonymous, aggregated statistics that allow us to understand how users use our site and to help us improve the structure of our website. We cannot identify you personally in this way.</p>
			<p>Two types of cookies may be used on this website; "session cookies", which are temporary cookies that remain in the cookie file of your browser until you leave the site, and "persistent cookies", which remain in the cookie file of your browser for much longer (though how long will depend on the lifetime of the specific cookie).</p>
			<p>Disabling / Enabling Cookies You have the ability to accept or decline cookies by modifying the settings in your browser. However, you may not be able to use all the interactive features of our site if cookies are disabled.</p>
			<p>There are a number of ways to manage cookies. If you use different computers in different locations you will need to ensure that each browser is adjusted to suit your cookie preferences.</p>
			<p>Some modern browsers have a feature that will analyse website privacy policies and allow a user to control their privacy needs. These are known as "P3P" features (Privacy Preferences Platform).</p>
			<p>You can easily delete any cookies that have been installed in the cookie folder of your browser. For example, if you are using Microsoft Windows Explorer:</p>
			<ul>
			<li>• Open 'Windows Explorer'</li>
			<li>• Click on the 'Search' button on the tool bar</li>
			<li>• Type "cookie" into the search box for 'Folders and Files'</li>
			<li>• Select 'My Computer' in the 'Look In' box</li>
			<li>• Click 'Search Now' Double click on the folders that are found</li>
			<li>• 'Select' any cookie file</li>
			<li>• Hit the 'Delete' button on your keyboard</li>
			<li>• If you are not using Microsoft Windows Explorer, then you should select "cookies" in the "Help" function for information on where to find your cookie folder.</li>
			
			</ul>
			<p>The Interactive Advertising Bureau is an industry body, which develops standards and guidelines to support online business processes. Its website at www.allaboutcookies.org gives further details about cookie, web beacons and such like, and explains how they be managed and disabled.</p>
		</div>
	</div>
</div>
</section>

@endsection