
<div class="container-fluid">
	<div class="row head-row">
    	<div class="col-md-3">
        	<div class="logo">
            	
              <!--<img class="img-responsive pull-left" src="img/logo.png"/>     -->        
            </div>
            <!-- <p class="text-uppercase">Industrial Training Institute</p> -->
        </div>
        <div class="col-md-6 text-center">
        	<header id="heading">
    				<!-- <h1>કૌશલ્યબદ્ધ ગુજરાત</h1>
        			<h2>શ્રમ અને રોજગાર વિભાગ, ગુજરાત રાજ્ય</h2> -->
			</header>

        </div>
        <div class="col-md-3">
        	<div class="logo">
            	<!--<img class="img-responsive pull-right" src="img/logo2.png"/> -->
            </div>
        </div>
	</div>
</div>

<div class="container-fluid nv">  

    <div class="row">
    	<div class="col-md-6 col-md-offset-3">
    		<nav class="navbar">
 				 <ul class="navbar-nav list-unstyled">
    				<li class="nav-item"><a class="nav-link" href="\">Home</a></li>
<?php if(session('uemail')!=''){ ?>
             
                      <li class="nav-item"><a class="nav-link" href="/profile">Profile</a></li>
    				<?php }elseif(session('cemail')!=''){?>

                      <li class="nav-item"><a class="nav-link" href="/comp_profile">Company Profile</a></li>
            <?php }?>

                    <li class="nav-item">
                <a href="#" id="myBtn" class="nav-link">Jobs</a>

<!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>
      <ul type="none">
        <li><a href="/job_city" style="color: #000">By Cities</a></li>
        <li><a href="job_stream" style="color: #000"> By Stream</a></li>
      </ul>
    </p>
  </div>

</div>     </li>


    				<li class="nav-item"><a class="nav-link" href="iti_list">ITIist</a></li>
                   
                    @if (session('uemail')!="")
                      <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
                    @elseif( session('cemail')!="")
                    <li class="nav-item"><a class="nav-link" href="/clogout">Logout</a></li>
                    @else

             		       <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#myModal1">Login</a></li>   
                    
                        <div class="modal fade" id="myModal1" role="dialog">  
                              <div class="modal-dialog">
                              
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header" style="border-bottom: 1px solid #1432ca;">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div class="mv1">
                                        <h2 class="modal-title">Login</h2>
                                    </div>
                                    </div>
                                  <div class="modal-body">
                                    <!-- <p>Some text in the modal.</p> -->

                                    <form action="header/login" method="post">
                                        
                                      
                                        <select name ="select" id="soflow">
                                          <option value="">---Select---</option>
                                          <option value="jobseeker">Candidate</option>
                                          <option value="jobgiver">Recruiter</option>
                                        </select>
                                    <br><br>

                                        <label>Email ID :</label><br>
                                        <input type="Email" name="email" style="width: 100%;" placeholder="Enter your Email Id" autofocus=""><br><br>

                                        <label>Password :</label><br>
                                        <input type="Password" name="password" style="width: 100%;" placeholder="Password">  <br><br>

                                       <button type="submit" class="btn btn-primary btn-md">Log in</button>

                                       <a href="#">Forgot Password ?</a>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                                
                              </div>
                        </div>
                    

                    <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#myModal2">Register</a>

                          <div class="modal fade" id="myModal2" role="dialog">
                              <div class="modal-dialog">
                              
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header" style="border-bottom: 1px solid #1432ca;">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div class="mv1">
                                        <h2 class="modal-title">Registration</h2>
                                    </div>
                                  </div>
                                  <div class="modal-body">
                                    <!-- <p>Some text in the modal.</p> -->
                                    
                                    <div class="mv3">
                                      Choose who you are ?
                                    </div>
                                    <div class="mv4">
                                        <ul>
                                          <li><a style="color:blue" href="/jobseeker">Job-seeker</a></li>
                                          <li><a style="color:blue" href="/jobgiver">Employeers(Recruiter)</a></li>
                                        </ul>
                                    </div>

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                                
                              </div>
                        </div>
                        </li>
                    @endif
                    <!--<li class="nav-item"><a class="nav-link" href="help">Help</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="/test">Take Test</a></li>
                    <li class="nav-item"><a class="nav-link" href="/trends">Trending Jobs</a></li>

  				</ul>
			</nav>
    	</div>
    </div>
</div>