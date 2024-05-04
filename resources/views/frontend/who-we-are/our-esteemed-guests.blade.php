@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Home') !!}
@endpush
@section('body')
<div class="sub-header">
    <h2> List of our Esteemed guests</h2>
</div>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-6 col-12">
				<div class="col-12 p-0 esteemed-guests-out">
					<ul class="esteemed-guests">
						<li>2012</li>
						<li><span>Mr. G. B Pradhan,</span> Secretary, MNRE</li>
						<li><span>Mr. G. B Pradhan,</span> Secretary, MNRE</li>
						<li><span>Ms. Anjuli Chandra,</span> E. Director, DERC</li>
						<li><span>Mr. V.V. Bhatt,</span> Secretary to GOI,</li>
						<li><span>Mr. V.S. Verma,</span> Member , CERC</li>
						<li><span>Mr. Navesh Kumar,</span> Joint secretary( Mines), Govt. of India</li>
						<li><span>Mr. K.L. khajuria,</span> Commissioner, Jammu Municipal Corporation</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6 col-12">
				<div class="col-12 p-0 esteemed-guests-out">
					<ul class="esteemed-guests">
						<li>2013</li>
						<li><span>Mr. JEAN-PAUL ADAM,</span> Minister of Foreign Affairs, Republic of Seychelles</li>
						<li><span>Mr. Anil K. Aggarwal,</span> Former President, ASSOCHAM</li>
						<li><span>Mr. Mohammad Azam Khan,</span> Minister of Parliamentary Affairs, Govt. of Uttar Pradesh</li>
						<li><span>Mr. Amanullah Fagiree,</span> UNDP, Afghanistan</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6 col-12">
				<div class="col-12 p-0 esteemed-guests-out">
					<ul class="esteemed-guests">
						<li>2014</li>
						<li><span>Mr. Praveen Kumar,</span> Commissioner, MCG, Gurugram</li>
						<li><span>Dr. K. Vasuki,</span> E. Director, Suchetwa Mission, Kerala Government</li>
						<li><span>Mr. Tejaswi S. Naik,</span> Commissioner, BMC, Bhopal</li>
						<li><span>Mr. Matiullah A. Saifi,</span> National officer, Health Program, Aga Khan Foundation, Afghanistan</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6 col-12">
				<div class="col-12 p-0 esteemed-guests-out">
					<ul class="esteemed-guests">
						<li>2015</li>
						<li><span>Mr. Mahesh Pradhan,</span> Chief Engineer, Thimphu Municipality, Thimpu, Bhutan</li>
						<li><span>Mr. Alok Sharma,</span> Mayor, Bhopal</li>
						<li><span>Dr. Nirmal Singh,</span> Dy. CM, J & K</li>
						<li><span>Mr. J. K. Vyas,</span> Vice President, GUDCL, Gujrat</li>
						<li><span>Mr. Swraupa Ganguli,</span> USEPA, Washington D.C , USA</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6 col-12">
				<div class="col-12 p-0 esteemed-guests-out">
					<ul class="esteemed-guests">
						<li>2016</li>
						<li><span>Mr. Mandeep Kaur,</span> Commissioner , Jammu Municipal Corporation.</li>
						<li><span>Ms. Francesca Renƶi,</span> Member, European union Delegation to India.</li>
						<li><span>Dr. Bettina Rechenberg,</span> German Environment Agency</li>
						<li><span>Mr. Dirk Walther,</span> Project Director, German intl. Corp.</li>
						<li><span>Mr. Carsten Spohn,</span> MD, German Association of Waste to Energy Plant</li>
						<li><span>Mr. Arvind Nautiyal,</span> Director, MoEFCC, GOI</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6 col-12">
				<div class="col-12 p-0 esteemed-guests-out">
					<ul class="esteemed-guests">
						<li>2017</li>
						<li><span>Mr. John Ondondi,</span> Government of Kenya</li>
						<li><span>Mr. Al-Amin,</span> MD, RAJUK, Dhaka, Bangladesh</li>
						<li><span>Mr. Shigemoto Kajihara,</span> Vice Minister, Global Environment Ministry, Japan</li>
						<li><span>Mr. Thomas Bourtsalas,</span> Lecturer, Columbia University, NY, USA</li>
						<li><span>Mr. Jayavilal Fernands,</span> Project Director, Colombo SWM Project, Srilanka</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6 col-12">
				<div class="col-12 p-0 esteemed-guests-out">
					<ul class="esteemed-guests">
						<li>2018</li>
						<li><span>Mr. Stuart Hari,</span> Professor, Cornell University, USA</li>
						<li><span>Dr. J.K. Pandey,</span> Chief Scientist, CSIR-CIMFR, Dhanbad</li>
						<li><span>Mr. K. Vinaykam,</span> E. Director, Swacch Andhra Corporation, Vijayawada, A.P</li>
						<li><span>Mr. Mishra Prakash,</span> UNIDO, Vienna</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6 col-12">
				<div class="col-12 p-0 esteemed-guests-out">
					<ul class="esteemed-guests">
						<li>2019</li>
						<li><span>Mr. P. Malik,</span> CGM, Power Finance Corporation</li>
						<li><span>Ms. Katrina Barunica,</span> UNIDO, Vienna</li>
						<li><span>Mr. V. Ponnuraj,</span> MD, Karnataka Power Corporation limited , Bangalore</li>
						<li><span>Mr. Salim Zeeri,</span> Tripoli, Libya</li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</section>


@endsection