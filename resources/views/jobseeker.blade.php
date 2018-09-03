
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
            <div class="form" id="aadharform">
              
                
                <p class="contact"><label for="fname">Aadhar no.</label></p>
                <input id="aadhar" class="aadharno" name="aadhar" placeholder="xxxx-xxxx-xxxx" required="" tabindex="0" type="text">
                <br>
                <input class="buttom" name="submit" id="aadharsubmit" value="Get Details" type="submit" tabindex="1"> 
            
                <hr>

            </div>
            <div class="newaadhar">
              <div  class="form">
                <h3>Personal Details:</h3><br>
                      <form id="contactform" action="/jobseeker/register" method="post" enctype="multipart/form-data"> 
                        
                        <p class="contact"><label for="fname">First Name</label></p> 
                        <input id="fname" value="{{old('fname')}}" name="fname" placeholder="First name" required="" tabindex="1" type="text" autofocus>

                        <p class="contact"><label for="lname">Last Name</label></p> 
                        <input id="lname" value="{{old('lname')}}" name="lname" placeholder="Last name" required="" tabindex="2" type="text"> 
                         
                        <p class="contact"><label for="email">Email</label></p> 
                        <input id="email" name="email" value="{{old('email')}}" placeholder="example@domain.com" required="" type="email" tabindex="3"> 
                        <p class="contact"><label for="phone">Contact</label></p> 
                          <input id="phone" value="{{old('mobile')}}" name="mobile" placeholder="Phone number" required="" type="text" tabindex="4"> <br> 
                        
                          <label>Age</label><br>
                          <input type="text" id="age" name="age" required="" tabindex="6"> 
                          <br> 
                          <label>Gender</label><br>

                          <select class="select-style gender" name="gender" tabindex="7">
                              <option value="">i am..</option>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                              <option value="other">Other</option>
                          </select><br>
                          <label>City</label>
                          <br>
                          <select class="select-style gender" name="city" tabindex="8">
                              <option value="">city..</option>
                              <option value="male">Surat</option>
                              <option value="female">Ahmedabad</option>
                              <option value="other">Other</option>
                          </select><br>
                        <p class="contact"><label for="address">Address</label></p> 
                        <textarea tabindex="9" rows="3" cols="30" name="address"></textarea><br>

                         <label>Upload photo</label><br>
                          <input type="file" name="photo"> 
                          <br> 
                            <h3>Educational Details:</h3><br>
                            <label>Passout ITI Institutes: </label>
                          <input type="text" name="itiname"><br>
                          <label>Highest Education</label>
                          <select class="select-style gender" name="education" tabindex="10">
                                <option value="">Education</option>
                                <option  value="S.S.C>">S.S.C.</option>
                                <option value="H.S.C.">H.S.C.</option>
                                <option value="Diploma">Diploma</option>
                          </select>
                          <label>Passout Year: </label>
                          <input type="text" name="pyear"><br>
                          <label>ITI Course</label>
                          <select class="select-style gender" name="fields" tabindex="11">
                                <option value="Electricians">Electricians </option>
                                <option value="Plumber">Plumber</option>
                                <option value="Carpenter">Carpenter</option>
                                <option value="Dress_making">Dress making</option>
                                <option value="Grienders">Grienders</option>
                                <option value="Govt.Certified">Instrument Mechanics</option>
                          </select>

                            <label>ITI Trade</label>
                          <select class="select-style gender" name="trade" tabindex="11">
                                <option value="Building Maintenance">Building Maintenance </option>
                                <option value="Electronics Mechanic">Electronics Mechanic</option>
                                <option value="Excavator Operator (Mining)">Excavator Operator (Mining)</option>
                                <option value="Mechanic Repair & Maintenance of Two Wheeler's">Mechanic Repair & Maintenance of Two Wheeler's</option>
                                <option value="Mechanic Auto Electrical and Electronics">Mechanic Auto Electrical and Electronics</option>
                                <option value="Sanitary Hardware fitter">Sanitary Hardware fitter</option>
                          </select>
                          <label>Percentage</label><br>
                          <input type="text" name="perc" placeholder="Percentage of Course">
                          <label>Experinece (if any)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="extype">Primary &nbsp;&nbsp;<input type="radio" name="extype">Advance </label>
                          <br>
                          <textarea tabindex="13" rows="3" cols="30" name="experience"></textarea>
                          <br>
                          <br>
                        
                          <h3>Login Credentials:</h3><br>
                           <p class="contact"><label for="password">Create a password</label></p> 
                        <input type="password" id="password" name="password" required="" tabindex="5"> 
                        <p class="contact"><label for="repassword">Confirm your password</label></p> 
                        <input type="password" id="repassword" name="password_confirmation" required="" tabindex="5"><br>
                          <input class="buttom" name="submit" id="submit" tabindex="14" value="Register" type="submit" tabindex="2"> 


                      </form> 
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
       $("#aadharsubmit").click(function(){
        var adhar = $("#aadhar").val();
          //  alert(adhar);
        
        $.ajax({
          type: "POST",
          url: '/aadhar',
          data: {adhar:adhar},
          success:function(data){
          
            $(".newaadhar").html("");
            $(".newaadhar").html(data);
           
            //$("#aadhar").val(data.aadhar);
            //$("#fname").val(data.fname);
             
          },
         
       
        });

       }); 
    });

</script>