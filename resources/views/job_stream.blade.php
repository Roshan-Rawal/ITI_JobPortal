
@extends('layouts.app')

@section('content')
    
<div class="container-fluid cnt">
    <div class="row">
        <div class="col-md-2">
          <marquee behaviour="scroll" direction="up" scrollamount="5"> <ul class="left-img">
                <li class="txt-tp text-center">Top Recruiters</li>
                <li><img class="img-responsive" src="img/accenture.png" alt="" /></li>
                <li><img class="img-responsive" src="img/google.png" alt="" /></li>
                <li><img class="img-responsive" src="img/mcsoft.png" alt="" /></li>
                <li><img class="img-responsive" src="img/qllqm.png" alt="" /></li>
            </ul></marquee>
        </div>
        <div class="col-md-7">          
             <h2>Streams List:</h2>

            <ul class="Stream">
                <a href="recruiter_list"><li>Electrician</li></a>
                <a href="recruiter_list"><li>Fitter</li></a>
                <a href="recruiter_list"><li>Carpenter</li></a>
                <a href="recruiter_list"><li>Foundry Man</li></a>
                <br>
                <a href="recruiter_list"><li>Book Binder</li></a>
                <a href="recruiter_list"><li>Plumber</li></a>
                <a href="recruiter_list"><li>Pattern Maker</li></a>
                <br>
                <a href="recruiter_list"><li>Mason Building Constructor</li></a>
                <a href="recruiter_list"><li>Advanced Welding</li></a>
                <a href="recruiter_list"><li>Wireman</li></a>
            </ul>
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