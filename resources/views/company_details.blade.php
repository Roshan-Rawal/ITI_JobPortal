
@extends('layouts.app')

@section('content')
  

        <div class="row">
    	<div class="col-md-2">
        	<ul class="left-img">
            	<li class="txt-tp text-center">Top Recruiters</li>
              <marquee behaviour="scroll" direction="up" scrollamount="5"> <li><img class="img-responsive" src="img/accenture.png" alt="" /></li>
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
            <div class="row">
			<div class="col-md-12">
			<div class="btn-group">
			
			  <a style="background-color:#36F;font-size:20px;color:white" href="/job_application" class="btn btn-default" role="button">Applications</a>

              <a style="background-color:#36F;font-size:20px;color:white" href="/posts" class="btn btn-default" role="button">Posts</a>
			 
				</div>
			    </div>
			    <div class="col-md-12" style="font-size:20px">

			 <div class="col-md-12" style="font-size:30px">{{$cuser->cname}}</div>
            <div class="col-md-12">
                <?php if(isset($cuser->gst)){ ?>
            <div class="col-md-3"><p><b>GST Tin NO</b></p></div>
            <div class="col-md-9"><p>{{$cuser->gst}}</p></b></div>
<?php }?>
            <?php if(isset($cuser->aadhar_no)){ ?>
            <div class="col-md-3"><p><b>Aadhar No</b></p></div>
            <div class="col-md-9"><p>{{$cuser->aadhar_no}}</p></div>
<?php }?>
            <div class="col-md-3"><p><b>Address</b></p></div>
            <div class="col-md-9"><p>{{$cuser->address}}</p></div>
            <div class="col-md-3"><p><b>Contact No</b></p></div>
            <div class="col-md-9"><p>{{$cuser->contactno}}</p></div>
            <div class="col-md-3"><p><b>Email</b></p></div>
            <div class="col-md-9"><p><u>{{$cuser->email}}</u></p></div>
            <div class="col-md-3"><p><b>Website</b></p></div>
            <div class="col-md-9"><p><u>{{$cuser->website}}</u></p></div>
			
		

			</div>
			</div>
			</div>
            <a class="nav-link btn btn-info btn-lg" style="font-size: 20px;background-color: blue;color: white" href="/job_post">Post Job</a>
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