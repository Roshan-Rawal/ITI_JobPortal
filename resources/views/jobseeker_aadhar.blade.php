
@extends('layouts.app')

@section('content')
  
<div class="container-fluid cnt">
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

            <div class="fhead">
              <center><h3 style="padding: 10px;">Job-Seeker Registration Form</h3></center>
            </div>
            <div class="form">
                <form id="contactform" action="/jobseeker_aadhar" method="post">
                <p class="contact"><label for="fname">First Name</label></p>
                <input id="name" value="395012454569"  name="aadhar" placeholder="xxxx-xxxx-xxxx" required="" tabindex="0" type="text">
                <br>
                <input class="buttom" name="submit" id="submit" value="Get Details" type="submit" tabindex="1"> 
                </form>

            </div>
              <div  class="form">
                      <form id="contactform" action="jobseeker_aadhar/aadhar_register" method="post"> 
                        
                        <p class="contact"><label for="fname">First Name</label></p> 
                        <input id="name" value="roshan" name="fname" placeholder="First name" required="" tabindex="1" type="text" autofocus>

                        <p class="contact"><label for="lname">Last Name</label></p> 
                        <input id="name" value="rawal" name="lname" placeholder="Last name" required="" tabindex="2" type="text"> 
                         
                        <p class="contact"><label for="email">Email</label></p> 
                        <input id="email" name="email" value="roshanrawal43@gmail.com" placeholder="example@domain.com" required="" type="email" tabindex="3"> 
                        <p class="contact"><label for="phone">Contact</label></p> 
                          <input id="phone" value="7623072273" name="phone" placeholder="Phone number" required="" type="text" tabindex="4"> <br> 
                        <p class="contact"><label for="password">Create a password</label></p> 
                        <input type="password" id="password" name="password" required="" tabindex="5"> 
                        <p class="contact"><label for="repassword">Confirm your password</label></p> 
                        <input type="password" id="repassword" name="password_confirmation" required="" tabindex="5"> 
                          <label>Age</label><br>
                          <input type="text" value="20" id="age" name="age" required="" tabindex="6"> 
                          <br> 
                          <label>Gender</label><br>

                          <select class="select-style gender" name="gender" tabindex="7">
                              <option value="">male</option>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                              <option value="other">Other</option>
                          </select><br>
                          <label>City</label>
                          <br>
                          <select class="select-style gender" name="city" tabindex="8">
                              <option value="">ahmedabad</option>
                              <option value="surat">Surat</option>
                              <option value="ahmedabad">Ahmedabad</option>
                              <option value="other">Other</option>
                          </select><br>
                        <p class="contact"><label for="address">Address</label></p> 
                        <textarea tabindex="9" rows="3" cols="30" name="address">ldce hostel</textarea>
                            <br>
                          <label>Education</label>
                          <select class="select-style gender" name="education" tabindex="10">
                                <option value="">Education</option>
                                <option  value="S.S.C>">S.S.C.</option>
                                <option value="H.S.C.">H.S.C.</option>
                          </select>
                          <label>Intersted fields</label>
                          <select class="select-style gender" name="fields" tabindex="11">
                                <option value="">Electricians </option>
                                <option value="S.S.C>">Plumber</option>
                                <option value="H.S.C.">Carpenter</option>
                                <option value="Diploma">Dress making</option>
                                <option value="Degree">Grienders</option>
                                <option value="Govt. Certified">Instrument Mechanics</option>
                          </select>
                          <label>Grade</label><br>
                            <select class="select-style gender" name="grade" tabindex="12">
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="D">D</option>
                              <option value="F">F</option>
                          </select>
                          <label>Experinece (if any)</label>
                          <br>
                          <textarea tabindex="13" rows="3" cols="30" name="experience"></textarea>
                          <br>
                          <br>
                         <label>Upload photo</label><br>
                          <input type="file" name="photo"> 
                          <br> 
                          <input class="buttom" name="submit" id="submit" tabindex="14" value="Register" type="submit" tabindex="2">    
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