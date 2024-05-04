@extends('layouts.frontend.main')
@push('header')
{!! \App\Helpers\Helper::metaTags('', 0, 'State of the Art Plant Infrastructure') !!}
@endpush
@section('body')
<style>
    .block{
            overflow-x: hidden;
        }
   
        .container .mt-3{
            display: grid;
            grid-template-columns: repeat(4,280px);
            column-gap: 1px;
            row-gap: 6px;
        }
        .container .mt-3 li{
            list-style: none;
        }
        .container .mt-3 li a img{
            width: 97%;
        }

        @media (max-width:768px){
            .container .mt-3{
                display: flex;
                flex-direction: column;
            }
            .container .mt-3 li a img{
                width: 100%;
            }
        }
        @media only screen and (max-width:1024px) and (min-width:768px){
            .container .mt-3{
                display: flex;
                flex-wrap: wrap;
            }
        }
</style>
    <section class="about-banner">
        <div>
            <div class="container">
                <h2 class="text-white pb-2 text-center">State of the Art Plant Infrastructure</h2>
                <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb d-flex justify-content-center ">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">State of the Art Plant Infrastructure</li>
                                      </ol>
                </nav>
            </div>
        </div>
    </section>
    <section>
   <div class="block no-padding">
      <div class="container">
         <div class="partners-section style2">
            <div class="container">
               <div class="sec-title"> 
               </div>
                <ul class="mt-3">
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Rail-189.jpg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Rail-189.jpg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Rail-190.jpg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Rail-190.jpg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Rail-209.jpg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Rail-209.jpg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Rail-236.jpg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Rail-236.jpg')}}" alt=""></a></li>
                  
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/rail-5.jpeg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/rail-5.jpeg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/rail-7.jpeg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/rail-7.jpeg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/rail-8.jpeg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/rail-8.jpeg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/rail-9.jpeg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/rail-9.jpeg')}}" alt=""></a></li>
                    
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Rail-139.jpg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Rail-139.jpg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Rail-18.jpg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Rail-18.jpg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Rail-28.jpg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Rail-28.jpg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Rail-34.jpg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Rail-34.jpg')}}" alt=""></a></li>
                    
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Rail-54.jpg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Rail-54.jpg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Rail-86.jpg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Rail-86.jpg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Rail-94.jpg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Rail-94.jpg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Rail-109.jpg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Rail-109.jpg')}}" alt=""></a></li>
                    
                    
                    
                    
                    
                    
                    
                    
                        
                    
                    
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Picture2.png')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Picture2.png')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/rail-1.jpeg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/rail-1.jpeg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Wagon CCRS Inspection.jpeg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Wagon CCRS Inspection.jpeg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/rail-2.jpeg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/rail-2.jpeg')}}" alt=""></a></li>
                   
                    
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Picture3.png')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Picture3.png')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Picture1.jpg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Picture1.jpg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Rail-116.jpg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Rail-116.jpg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Rail-05.jpg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Rail-05.jpg')}}" alt=""></a></li>
                    
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/rail-3.jpeg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/rail-3.jpeg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/rail-4.jpeg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/rail-4.jpeg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/rail-6.jpeg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/rail-6.jpeg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Wagon Inspection.jpeg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Wagon Inspection.jpeg')}}" alt=""></a></li>
                    
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Rail-112.jpg')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Rail-112.jpg')}}" alt=""></a></li>
                    <li><a href="{{asset('images/key-differentiator/plant-infrastructure/Picture4.png')}}" title=""><img src="{{asset('images/key-differentiator/plant-infrastructure/Picture4.png')}}" alt=""></a></li>
                    
                </ul>
            </div>
         </div>
         <!--partners-section end-->
      </div>
   </div>
</section>
  
    
@endsection