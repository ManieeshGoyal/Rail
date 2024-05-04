@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'Wagon Search') !!}
@endpush
@section('body')
<style>
    ul.data-list{display:none;}
    .yearWise{float:right; padding:10px;}
    .orders
    { 
    }
    .accordion-body
    {
        width: 100%;
    }
</style>
    <style>
        @media (min-width: 768px) {
        .col-md-6 { 
        flex: 0 0 42%; 
        max-width: 29%; 
        }
        }
        
        .row {  
            justify-content: center; 
            
        }
         
         .all-investors .container .tab-content .row .col-md-6 #wagon{ 
                       padding-left: 75px;
                }
                
                .col-md-6 #manuf{ 
                             padding-left: 48px;
                             }
                             
                             .all-investors .container .tab-content .row .col-md-6 .yearWise{
                            margin: 12px;
                            }
                            
                            .all-investors .container .tab-content .row .col-md-6 .yearWise #option{
                            margin: 12px;
                            }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <section class="about-banner">
        <div>
            <div class="container">
                <h2 class="text-white pb-2 text-center">Wagon Search</h2>
                <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb d-flex justify-content-center ">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Wagon Search</li>
                                      </ol>
                </nav>
            </div>
        </div>
    </section>
    
    
     <section class="all-investors py-5 ">
        <div class="container">
            <div class="tab-content accordion py-5 mobile" id="myTabContent">
                <div class="row">
                <div class="col-md-6" >
                    <lable id="wagon">Search by Wagon Number:</lable><br>
                    <input type="text" id="wagonNumberSearch" class="yearWise" onchange="leaveChange('list-1}', this)">
                    <!--<button type="button" class="btn btn-sm">Search</button>-->
                </div>
                <div class="col-md-6">
                    <lable id="manuf">Search by Manufacturing Year:</lable><br>
                    <select id="" class="yearWise" onchange="leaveChange('list-1}', this)">
                        @foreach($investorRelationYear as $year)
                            <option value="{{$year->id}}" data-hideClass="list-{{$year->id}}" data-showId="list-{{$year->id}}" id="option">{{$year->year}}</option>
                        @endforeach 
                    </select>
                </div>
                </div>
                            
                @php
                    $i=0;
                @endphp
                 <div class="box-one bg-white p-4 rounded">
                        <img src="assets/img/headphones (3).png" alt="" class="img-fluid" width="80px"> 
                        <h3></h3>
                        <div class="heading_underline mb-2"></div>
                        
                        <table class="table" id="wagonTable">
                            <thead>
                                <tr valign="middle" style="color:#CCCCFF;background-color:#003399;font-weight:bold;">
                                    <th scope="col">ClientType</th>
                                    <th scope="col">Owning Railway</th>
                                    <th scope="col">Wagon Type</th>
                                    <th scope="col">Wagon Nos</th>
                                    <th scope="col">Manufacturing Unit</th>
                                    <th scope="col">DM No</th>
                                    <th scope="col">DM Date</th>
                                </tr>
                            </thead>
                           <tbody>
                               
                @foreach($investorrelations as $wagon)
                <tr style="color:#003399;background-color:White;">
                    <td>{{$wagon->tab_id}}</td>
                    			<td>{{$wagon->owning_railway}}</td>
                    			<td>{{$wagon->wagon_type}}</td>
                    			<td>{{$wagon->name}}</td>
                    			<td>{{$wagon->manufacturing_unit}}</td>
                    			<td>{{$wagon->dm_no}}</td>
                    			<td>{{$wagon->dm_date}}</td>
                </tr>
                @endforeach 
                            
                           </tbody>
                        </table>
                        
                    </div> 
                </div>
                
            </div>
        </div>
    </section>
    

@endsection

@push('footer')


<script>
    function filterTable() {
    var input, filter, table, tr, td, i, j;
    input = document.getElementById("wagonNumberSearch");
    filter = input.value.toUpperCase();
    table = document.querySelector(".table");
    tr = table.getElementsByTagName("tr");

    for (i = 1; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            if (td[j]) {
                if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    break;
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
}

// Add event listener for input field
document.getElementById("wagonNumberSearch").addEventListener("input", filterTable);

</script>

@endpush