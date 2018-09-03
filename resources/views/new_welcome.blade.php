
@extends('layouts.app')

@section('content')
    
<div class="container-fluid cnt">
	<div class="row">
    	<div class="col-md-2">
        	<ul class="left-img">
            	<li class="txt-tp text-center">Top Recruiters</li>
                <marquee behaviour="scroll" direction="up" scrollamount="5"><li><img class="img-responsive" src="img/mcsoft.png" alt="" /></li>
                <li><img class="img-responsive" src="img/Qualcom.jpg" alt="" /></li>
                <li><img class="img-responsive" src="img/google.png" alt="" /></li>
                <li><img class="img-responsive" src="img/mcsoft.png" alt="" /></li></marquee>                
            </ul>
        </div>
        <div class="col-md-7">  
         @if (count($errors) > 0)
                  @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                  @endforeach
            @endif      	
            <div class="row bt-cn">
           		<div class="col-md-8 col-md-offset-2">
            		<h3 class="text-center bt-cn1">" The most effective way to cope with the cange is to help create it "</h3>
             		<p class="text-right">- Shri Vijaybhai Rupani, CM Gujarat</p>
                </div>
             </div>
             <div class="row">
             	<div class="col-md-12">
             		<div class="bt-cn2">
                		<h4 class="bt-cn3">Welcome to ITI Job Portal</h4>
                    	<p>While all efforts have been made to make this website as authentic as possible, The Directorate of Employment and Training, Gandhinagar will not be responsible for any loss to any person caused by any shortcoming, defect or inaccuracy in the information available on Website. Any discrepancy found may be brought to the notice of the Director. The Website also contains views, comments.</p>
                	</div>
                </div>    
             </div>
             
             <div class="row">
             	<div class="col-md-6">
             		<div class="bt-cn2">
                		<h4 class="bt-cn3 text-center">Jobs Notification</h4>
                    	<ul class="text-uppercase bt-cn5">
                        	<marquee behaviour="scroll" direction="up" scrollamount="5"><li><p>Aquatic Pump Industries<br/>site supervisior<br/><span class="text-lowercase">Venue:</span> Sanweeeear <span class="text-lowercase">Placement date: 11/07/2017</span></p></li>
                            <li><p>Balaji Wafers Pvt. Ltd.<br/>Machine Operations and Maintenance<br/><span class="text-lowercase">Venue:</span> ITI Indore <span class="text-lowercase">Placement date: 12/09/2017</span></p></li>
                            <li><p>Testing Mppsdm<br/>Jobs for testing</p></li></marquee>
                         </ul>
                	</div>
                </div>
                <div class="col-md-6">
             		<div class="bt-cn2">
                		<h4 class="bt-cn3 text-center">Top Recruitment ITI</h4>
                    	<ul class="bt-cn5 bt-cn6">
                        	<marquee behaviour="scroll" direction="up" scrollamount="5"><li>Govt. ITI, Rajkot</li>
                            <li>Govt. ITI, Bhavnagar</li>
                            <li>Govt. ITI, Surat</li>
                            <li>Govt. ITI, Vadodara</li>
                            <li>Govt. ITI, Ankleshwar</li>
                            <li>Govt. ITI, Jamnagar</li></marquee>
                        </ul>
                	</div>
                </div>    
             </div>
        </div>
        <div class="col-md-3">
        	<ul class="left-img right-img">
            	<li class="c1">
                	<img class="img-responsive" src="img/right1.png" alt="" />
                    <div class="top-right text-right">
                        <p class="p1">135</p>
                        <p class="p2">Total Companies</p>
                    </div>    
                </li>
                <li class="c2">
                	<img class="img-responsive" src="img/right2.png" alt="" />
                    <div class="top-right text-right">
                        <p class="p1">1,50,000</p>
                        <p class="p2">Registered Students</p>
                    </div>    
                </li>
                <li class="c3">
                	<img class="img-responsive" src="img/right3.png" alt="" />
                    <div class="top-right text-right">
                        <p class="p1">700</p>
                        <p class="p2">Total Placements</p>
                    </div>    
                </li>
                <li class="c4">
                	<img class="img-responsive" src="img/right4.png" alt="" />
                    <div class="top-right text-right">
                        <p class="p1">15,000</p>
                        <p class="p2">Average Salary per Month</p>
                    </div>    
                </li>
            </ul>
        </div>
    </div>
</div>   
    
    @endsection