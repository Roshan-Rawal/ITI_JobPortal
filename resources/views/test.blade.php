
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
                <div class="col-md-12" style="margin-left:30px;margin-top:20px">
                     <h2>Time To Judge Your Skills</h2></div>
            <form method="post" action="test2">
            <div class="col-md-12" style="font-size:25px;border-radius:10px;margin-left:5px;margin-top:20px;background-color:#CCC">Skill Test Phase 1:</div>
           <div class="col-md-12" style="margin-top:10px">
            <div class="col-md-6"><p style="font-size:20px;"><b>1. Why Should we hire you?</b></p></div>
            <div class="col-md-6"><textarea class="form-control rounded-0" id="exampleFormControlTextarea2" required="" rows="3"></textarea></div>

                </div>
            
            <div class="col-md-12" style="margin-top:5px;"><hr></div>

            
          <div class="col-md-12" style="background-color:#CCC;margin-left:10px">
            <div class="col-md-6"><p style="font-size:20px;"><b>2. Why do you want this job?</b></p></div>
            <div class="col-md-6"><textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" required=""></textarea></div>
        </div>
            <div class="col-md-12" style="margin-top:5px;"><hr></div>

            
            <div class="btn-group" style="margin-left:420px">
              <input style="background-color:#36F;font-size:25px;box-shadow:4px 4px 4px black"   type="Submit" name="" value="Submit">
              
              </div>
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