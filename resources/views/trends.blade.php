
@extends('layouts.app')

@section('content')
    
<div class="container-fluid cnt">
	<div class="row">
    	<div class="col-md-2">
        	<ul class="left-img">
            	<li class="txt-tp text-center">Top Recruiters</li>
               <marquee behaviour="scroll" direction="up" scrollamount="5"> <li><img class="img-responsive" src="img/accenture.png" alt="" /></li>
                <li><img class="img-responsive" src="img/google.png" alt="" /></li>
                <li><img class="img-responsive" src="img/mcsoft.png" alt="" /></li>
                <li><img class="img-responsive" src="img/qllqm.png" alt="" /></li></marquee>
            </ul>
        </div><br><br>
        <form action="/trends_filter" method="POST">
            <input type="text" name="fcourse" placeholder="Course">
            <input type="text" name="ftrade" placeholder="Trade">
            <input type="text" name="flocation" placeholder="Location">
             <input type="text" name="fsalary" placeholder="Salary">
             <select name="femp_type">

                 <option value="fresher">Freshers</option>
                 <option value="experienced">Experience</option>
                 <option value="both">Both</option>
             </select>
             <input type="submit" value="Filter">
        </form>
        <div class="col-md-7">  
            <?php if(isset($trendingpostsfilter)){?>
                   <?php for($i=0;$i<count($trendingpostsfilter)-1;$i++){?>         
            <div class="R-Box">
                <h1><?php echo $trendingpostsfilter[$i+1]->cname; ?>
                   
                </h1>
                 <h3>Course: <?php echo $trendingpostsfilter[$i]->course; ?></h3>
                <h3>Trade: <?php echo $trendingpostsfilter[$i]->trade; ?></h3>
                <h3>Salary: <?php echo $trendingpostsfilter[$i]->salary; ?></h3>
                <h3>Location: <?php echo $trendingpostsfilter[$i]->job_location; ?></h3>
                <h3>Experience: <?php echo $trendingpostsfilter[$i]->emp_type; ?></h3>
            
                <h3>Vacancies:<?php echo $trendingpostsfilter[$i]->total_post; ?></h3>
                <br>

                <h3>Description of job:</h3>
                <p><?php echo $trendingpostsfilter[$i+1]->job_description; ?></p>
                <a href="applied" >Apply here</a>

            </div>
        <?php } }else{echo '<div class="R-Box"><p>No Match Found Please Choose another options!</p></div>';} ?>

        
            <?php if(isset($trendingposts)){ ?>
        <?php for($i=0;$i<count($trendingposts);$i++){ ?>     	
            <div class="R-Box">
                <h1><?php echo $trendingposts[$i]->cname; ?>
                   
                </h1>
                <h3>Course: <?php echo $trendingposts[$i]->course; ?></h3>
                <h3>Trade: <?php echo $trendingposts[$i]->trade; ?></h3>
                <h3>Salary: <?php echo $trendingposts[$i]->salary; ?></h3>
                <h3>Location: <?php echo $trendingposts[$i]->job_location; ?></h3>
                <h3>Experience: <?php echo $trendingposts[$i]->emp_type; ?></h3>
            
                <h3>Vacancies:<?php echo $trendingposts[$i]->total_post; ?></h3>
                <br>

                <h3>Description of job:</h3>
                <p><?php echo $trendingposts[$i]->job_description; ?></p>
                <a href="applied" >Apply here</a>

            </div>
        <?php } }?>

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