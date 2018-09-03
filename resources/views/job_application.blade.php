
@extends('layouts.app')

@section('content')
  

        <div class="row">
    	<div class="col-md-2">
        	<marquee behaviour="scroll" direction="up" scrollamount="5"><ul class="left-img">
            	<li class="txt-tp text-center">Top Recruiters</li>
                <li><img class="img-responsive" src="img/accenture.png" alt="" /></li>
                <li><img class="img-responsive" src="img/google.png" alt="" /></li>
                <li><img class="img-responsive" src="img/mcsoft.png" alt="" /></li>
                <li><img class="img-responsive" src="img/qllqm.png" alt="" /></li>
            </ul></marquee>
        </div>
        <div class="col-md-7">        	
            @if (count($errors) > 0)
                  @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                  @endforeach
            @endif
<div class="row">
<div class="col-md-12">
<div class="btn-group" style="box-shadow:5px 5px 5px #999999;font-size:10px;font-family:"Arial Black", Gadget, sans-serif">
  <a style="background-color:#36F;font-size:20px;color:white" href="#" class="btn btn-default" role="button">Applications</a>
   <a style="background-color:#36F;font-size:20px;color:white" href="/posts" class="btn btn-default" role="button">Posts</a>
 
    </div>
    </div>
    <div class="col-md-12 style="margin-left:30px;margin-top:10px">

<div class="col-md-4" style="font-size:30px;border-radius:10px;margin-left:5px;margin-top:15px;width:auto;background-color:#CCC">Applicants:</div>
<div class="col-md-12" style="margin-top:15px;background-color:#CCC">
<div class="col-md-3"><p style="font-size:20px;"><b>1. Darshan Harsora</b></p></div>
<div class="col-md-6"><p style="font-size:25px;"><b><u style="color:green">Job Type</u>&nbsp</b>:&nbsp Plumber </p><p style="font-size:25px;"></div>
<div class="col-md-2"><div class="vl" style="margin-left:-160px;margin-top:10px; border-left: 2px solid green;
    height: 75px;"></div></div>
    <div class="col-md-2" style="margin-left:-275px;margin-top:8px"><p style="font-size:20px"><b>Score - 10</b></p>
    <div class="btn-group" style="box-shadow:5px 5px 5px #999999;font-size:12px;font-family:"Arial", Gadget, sans-serif;">
    <a style="background-color:#36F;color:white;font-size:15px" href="resume.html" class="btn btn-default" role="button">Contact</a>
    </div>
    



</div>
<div class="col-md-12" style="margin-top:5px;"><hr></div>

</div>
<div class="col-md-12" style="margin-top:15px">
<div class="col-md-3"><p style="font-size:20px;"><b>2. Ajay Kothiya</b></p></div>
<div class="col-md-4"><p style="font-size:25px;"><b><u style="color:green">Job Type</u>&nbsp</b>:&nbspWireman </p></div>
<div class="col-md-2"><div class="vl" style="margin-left:-2px;margin-top:10px; border-left: 2px solid green;
    height: 75px;"></div></div>
    <div class="col-md-2" style="margin-left:-120px;margin-top:8px"><p style="font-size:20px"><b>Score- 9</b></p>
    <div class="btn-group" style="box-shadow:5px 5px 5px #999999;font-size:12px;font-family:"Arial", Gadget, sans-serif;">
    <a style="background-color:#36F;color:white;font-size:15px" href="resume.html" class="btn btn-default" role="button">Contact</a>
    </div>
    </div>
    </div>
    <div class="col-md-12" style="margin-top:5px;"><hr></div>
<div class="col-md-12" style="margin-top:15px">
<div class="col-md-3"><p style="font-size:20px;"><b>3. Roshan Rawal</b></p></div>
<div class="col-md-4"><p style="font-size:25px;"><b><u style="color:green">Job Type</u>&nbsp</b>:&nbspBook Binder </p></div>
<div class="col-md-2"><div class="vl" style="margin-left:-2px;margin-top:10px; border-left: 2px solid green;
    height: 75px;"></div></div>
    <div class="col-md-2" style="margin-left:-120px;margin-top:8px"><p style="font-size:20px"><b>Score - 7</b></p>
    <div class="btn-group" style="box-shadow:5px 5px 5px #999999;font-size:12px;font-family:"Arial", Gadget, sans-serif;">
    <a style="background-color:#36F;color:white;font-size:15px" href="resume.html" class="btn btn-default" role="button">Contact</a>
    </div>
    </div>
    <div class="col-md-12" style="margin-top:5px;"><hr></div>
<div class="col-md-12" style="margin-top:15px">
<div class="col-md-3"><p style="font-size:20px;"><b>4. Suniyo Disoza</b></p></div>
<div class="col-md-4"><p style="font-size:25px;"><b><u style="color:green">Job Type</u>&nbsp</b>:&nbspElectrician </p></div>
<div class="col-md-2"><div class="vl" style="margin-left:-2px;margin-top:10px; border-left: 2px solid green;
    height: 75px;"></div></div>
    <div class="col-md-2" style="margin-left:-120px;margin-top:8px"><p style="font-size:20px"><b>Score - 5</b></p>
    <div class="btn-group" style="box-shadow:5px 5px 5px #999999;font-size:12px;font-family:"Arial", Gadget, sans-serif;">
    <a style="background-color:#36F;color:white;font-size:15px" href="resume.html" class="btn btn-default" role="button">Contact</a>
    </div>
    </div>
    </div>
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
 
    @endsection