
@extends('layouts.app')

@section('content')
    
<div class="container-fluid cnt">
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
            <div class="fhead">
              <center><h3 style="padding: 10px;">Recruiter Registration Form</h3></center>
            </div>
              <div  class="form">
                      <form id="contactform" action="jobgiver/company_register" method="post"> 
                        <p class="contact"><label for="gst">GST Number(optional)</label></p> 
                        <input id="gst" name="gst" placeholder="gst number" tabindex="1" type="text" class="orgform">

                        <p class="contact"><label for="gst">Aadhar No</label></p> 
                        <input id="gst" name="aadhar_no" placeholder="Aadhar no" required="" tabindex="1" type="text" class="orgform">

                        <p class="contact"><label for="fname">Organization Name</label></p> 
                        <input id="name" name="cname" placeholder="Company name" required="" tabindex="2" type="text" autofocus class="orgform">

                        <p class="contact"><label for="lname">Director Name</label></p> 
                        <input id="name" name="dname" placeholder="Director name" required="" tabindex="2" type="text" class="orgform"> 
                         
                        <p class="contact"><label for="email">Official Email Id</label></p> 
                        <input id="email" name="email" placeholder="example@domain.com" required="" type="email" tabindex="2" class="orgform"> 
                        <br><br>
                          <p class="contact"><label for="phone">Mobile phone</label></p> 
                          <input id="phone" name="mobile" placeholder="Phone number" required="" type="text" tabindex="2" class="orgform">      
                        <p class="contact"><label for="website">Your Website (if have)</label></p> 
                        <input id="website" name="website" placeholder="www.website.com" tabindex="2" type="text" class="orgform"> 
                        <label>City</label>
                          <br>
                          <select class="select-style gender" name="city" tabindex="2">
                              <option value="">city..</option>
                              <option value="male">Surat</option>
                              <option value="female">Ahmedabad</option>
                              <option value="other">Other</option>
                          </select><br>
                        <p class="contact"><label for="address">Address</label></p> 
                        <textarea tabindex="2" rows="3" cols="30" name="address"></textarea>
                            <br>

                        <p class="contact"><label for="password">Create a password</label></p> 
                        <input type="password" id="password" name="password" required="" tabindex="2"> 

                        <p class="contact"><label for="repassword">Confirm your password</label></p> 

                        <input type="password" id="repassword" name="password_confirmation" required="" tabindex="2"> 
                        
                         <!-- <label>Requirements</label><br>
                          <select class="select-style gender" name="requirement" tabindex="2">
                                <option value="">Requirement</option>
                                <option  value="Plumbing">Plumbing</option>
                                <option value="Electrician">Electrician</option>
                                <option value="Mobile Repairer" >Mobile Repairer</option>
                                <option value="Mechanic Radio and TV">Mechanic Radio & TV</option>
                                <option value="Wireman">Wireman</option>
                                <option value="Carpenter">Carpenter</option>
                          </select> -->

                          <!--
                          <select id="select-requirements" class="select-style" multiple="multiple">
                              <option value="Plumbing">Plumbing</option>
                              <option value="Electrician">Electrician</option>
                              <option value="Mobile Repairer">Mobile Repairer</option>
                              <option value="Mechanic Radio & TV">Mechanic Radio & TV</option>
                              <option value="Wireman">Wireman</option>
                              <option value="Carpenter">Carpenter</option>
                          </select>
                         <script type="text/javascript">
                              $(document).ready(function() {
                                  $('#select-requirements').multiselect({
                                      enableCaseInsensitiveFiltering: true
                                  });
                              });
                          </script> -->
                           <br>
                          <input class="buttom" name="submit" id="submit" tabindex="5" value="Register" type="submit" tabindex="2">    
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
</div>   
    
    @endsection