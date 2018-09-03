
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
            
        <div  class="form">
                      <form id="contactform" action="job_post/post" method="post"> 
                        <p class="contact"><label for="gst">Course</label></p> 
                        <input id="Trade" name="course" placeholder="Courses by comma" required="" tabindex="1" type="text" class="orgform">
                        <p class="contact"><label for="gst">Trade</label></p> 
                        <input id="Trade" name="trade" placeholder="Job Trades by comma" required="" tabindex="1" type="text" class="orgform">
                        <p class="contact"><label for="fname">Salary</label></p> 
                        <input id="salary" name="salary" placeholder="Salary" required="" tabindex="2" type="text" autofocus class="orgform">

                        <p class="contact"><label for="lname">Deadline   </label></p> 
                        <input id="name" name="deadline" placeholder="Date" required="" tabindex="2" type="date" class="orgform"> 
                         
                        <p class="contact"><label for="email">Job Description</label></p> 
                        <input id="jd" name="job_description" placeholder="Description" required="" type="text" tabindex="2" class="orgform"> 
                        <br><br>
                            <p class="contact"><label for="email">Employee Type:</label></p> 
                        <input type="radio" value="experienced" name="emp_type">&nbsp;Experienced &nbsp;&nbsp;<input type="radio" value="fresher" name="emp_type">&nbsp;Fresher <input type="radio" value="both" name="emp_type">&nbsp;Both 
                        <br><br>
                          <p class="contact"><label for="phone">Number of Post</label></p> 
                          <input id="vacancy" name="total_post" placeholder="Vacancy" required="" type="text" tabindex="2" class="orgform"> 
                          <br><br>
                          <p class="contact"><label for="location">Location</label></p> 
                        <input id="jd" name="job_location" placeholder="job city " required="" type="text" tabindex="2" class="orgform">     
                        
                           <br>
                          <button class="buttom" name="submit" id="submit" tabindex="5"  type="submit" tabindex="2">Post    </button>
                      </form> 
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