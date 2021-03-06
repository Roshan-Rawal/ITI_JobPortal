
@extends('layouts.app')

@section('content')
  

        <div class="row">
    	<div class="col-md-2">
        	<ul class="left-img">
            	<li class="txt-tp text-center">Top Recruiters</li>
                <marquee behaviour="scroll" direction="up" scrollamount="5"><li><img class="img-responsive" src="img/accenture.png" alt="" /></li>
                <li><img class="img-responsive" src="img/google.png" alt="" /></li>
                <li><img class="img-responsive" src="img/mcsoft.png" alt="" /></li>
                <li><img class="img-responsive" src="img/qllqm.png" alt="" /></li></marquee>
            </ul>
        </div>
        <div class="col-md-7">        	
            @if (count($errors) > 0)
                  @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                  @endforeach
            @endif
            <div class="row" style="margin-top:20px">
            <div class="col-md-12">
            <div class="btn-group">
              <a style="background-color:#337ab7;font-size:20px;color:white" href="\resume" class="btn btn-default" role="button">Resume</a>
              <a style="background-color:#337ab7;font-size:20px;color:white" href="#" class="btn btn-default" role="button">Application</a>
             
              </div>
                </div>
                

            <div class="col-md-6" style="font-size:25px;margin-top:10PX">LATHE DRILLING WORK</div>
            <div class="col-md-12"><p>The Fine work of drillinf holes in the cast iron through lathe machine.</p>
            <p>Experienced worker required for this work will be paid exclusively</p>
            <p>Salary :10000/- per month&nbsp &nbsp &nbsp &nbsp Applied On:3-12-2017</p>

            <p><b>Roger Mechanical Works</b></p>  
            <p><b>12/A GIDC Vatva Ahmedabad</b>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="\status" style="box-shadow:5px 5px 5px #333333" type="button" class="btn btn-primary">Check Status</a></p>
            </div>
            <div class="col-md-6" style="font-size:25px">MOBILE REPAIRING WORK</div>
            <div class="col-md-12"><p>The Fine work of drillinf holes in the cast iron through lathe machine.</p>
            <p>Experienced worker required for this work will be paid exclusively</p>
            <p>Salary :15000/- per month&nbsp &nbsp &nbsp &nbsp Applied On:15-12-2017</p>

            <p><b>Kabir Mobile Zone</b></p> 
            <p><b>2nd floor Shivaranjani Ahmedabad</b>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp<a href="\status" style="box-shadow:5px 5px 5px #333333" type="button" class="btn btn-primary">Check Status</a></p>
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
 
    @endsection