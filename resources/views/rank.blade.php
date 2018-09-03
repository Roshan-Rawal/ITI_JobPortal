
@extends('layouts.app')

@section('content')
  

        <div class="row">
    	<div class="col-md-2">
        	<ul class="left-img">
            	<li class="txt-tp text-center">Top Recruiters</li>
               <marquee behaviour="scroll" direction="up" scrollamount="5"> <li><img class="img-responsive" src="img/accenture.png" alt="" /></li>
                <li><img class="img-responsive" src="img/google.png" alt="" /></li>
                <li><img class="img-responsive" src="img/mcsoft.png" alt="" /></li>
                <li><img class="img-responsive" src="img/qllqm.png" alt="" /></li>
          </marquee></ul>
        </div>
        <div class="col-md-7">        	
            @if (count($errors) > 0)
                  @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                  @endforeach
            @endif
            <h2>Congralutions! You gave the test successfully</h2>
            <h2> Your score : <span id='score'></span><script type="text/javascript"> document.getElementById('score').innerHTML=2 * Math.floor(5 * Math.random())</script></h2>

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