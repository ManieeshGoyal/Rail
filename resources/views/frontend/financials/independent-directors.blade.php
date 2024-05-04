@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Financials') !!}
@endpush
@section('body')
<div class="sub-header">
    <h2>Who We Are</h2>
</div>

<section>
    <div class="container">
        <div class="row">
        	<div class="col-12 mb-20">
                <h3 class="heading-two">List of Independent Directors</h3>
                <h4> TIMARPUR-OKHLA WASTE MANAGEMENT COMPANY LIMITED AS ON 09.06.2021</h4>
            </div>
            
            <div class="col-12 d-flex flex-wrap table-responsive">
                <table class="table table-bordered table-striped environment">
                    <tr>
                        <th>DIN/DPIN/PAN</th>
                        <th>Full Name</th>
                        <th>Present Residential Address</th>
                        <th>Designation</th>
                        <th>Date of Appointment</th>
                    </tr>
                   
                    <tr>
                        <td>00131460</td>
                        <td>DHANANJAYA PATI TRIPATHI</td>
                        <td>39, GROUND FLOOR,ARADHANA ENCLAVE, SECTOR-13, R.K.PURAM NEW DELHI 110066 DL IN</td>
                        <td>Director</td>
                        <td>24/03/2015</td>
                    </tr>
                    <tr>
                        <td>05277483</td>
                        <td>UMESH CHOPRA</td>
                        <td>J-34A GF, J-BLOCK, VIKAS PURI DELHI 110018 DL IN</td>
                        <td>Director</td>
                        <td>31/03/2017</td>
                    </tr>
                    <tr>
                        <td>07842789</td>
                        <td>PRAFULLA KUMAR MALLIK </td>
                        <td>70 JAI LAKSHMI APARTMENTS 59 IP EXTN PATPARGANJ NEW DELHI 110092 </td>
                        <td>Nominee Director</td>
                        <td>04/06/2019</td>
                    </tr>
                    <tr>
                        <td>07003755</td>
                        <td>RAJEEV GOYAL </td>
                        <td>HOUSE NO.36 SECTOR 16, VASUNDRA, GHAZIABAD, UTTAR PRADESH 201012 </td>
                        <td>Director</td>
                        <td>25/06/2020</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection