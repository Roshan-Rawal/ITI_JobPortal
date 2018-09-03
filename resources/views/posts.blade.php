
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
 
  <a style="background-color:#36F;font-size:20px;color:white" href="/job_application" class="btn btn-default" role="button">Applications</a>
   <a style="background-color:#36F;font-size:20px;color:white" href="#" class="btn btn-default" role="button">Posts</a>
			 
    </div>
    </div>
 <br><br><br>
	<?php for($i=0;$i<count($posts);$i++){?>
   <div class="posts">
   
  Post course: <?php echo $posts[$i]->course; ?><br>
   Post Trade: <?php echo $posts[$i]->trade; ?><br>
   Post description: <?php echo $posts[$i]->job_description; ?><br>
   Post Employee type: <?php if($posts[$i]->emp_type=="both"){echo 'Freshers and Experiences'; }else{ echo $posts[$i]->emp_type; } ?><br>
   Post vacancy: <?php echo $posts[$i]->total_post; ?><br>
   Post job location: <?php echo $posts[$i]->job_location; ?><br>
  Post email: <?php echo $posts[$i]->email; ?><br>
  Post salary: <?php echo $posts[$i]->salary; ?><br>
  Post Deadline: <?php echo $posts[$i]->deadline; ?><br>
   </div><hr><br>
	<?php } ?>
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