
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
        </div>
        <div class="col-md-7">          
            <div class="R-Box">
                <h1>Ajay Solutions</h1>
                <h3>Data Entry</h3>
                <h3>Vacancies:120</h3>
                <p>As a data entry clerk (or database administrator) it's your job to update and maintain information on computer systems and in archives. It's an important role as information in these systems is only valuable if it is accurate, up to date and useable.</p>
                <a href="applied" >Apply here</a>

            </div>
            <div class="R-Box">
                <h1>Bhavna Electrics</h1>
                <h3>Electrician</h3>
                <h3>Vacancies:300</h3>
                <p>Install, maintain, and repair electrical wiring, equipment, and fixtures. Ensure that work is in accordance with relevant codes. May install or service street lights, intercom systems, or electrical control systems.</p>
                <a href="applied" >Apply here</a>
            </div>
            <div class="R-Box">
                <h1>maruti Electrics</h1>
                <h3>Electric Engineer</h3>
                <h3>Vacancies:100</h3>
                <p>Install, maintain, and repair electrical wiring, equipment, and fixtures. Ensure that work is in accordance with relevant codes. May install or service street lights, intercom systems, or electrical control systems.</p>
                <a href="applied" >Apply here</a>
            </div>
            <div class="R-Box">
                <h1>Roshan Electrics</h1>
                <h3>Electrician</h3>
                <h3>Vacancies:150</h3>
                <p>Install, maintain, and repair electrical wiring, equipment, and fixtures. Ensure that work is in accordance with relevant codes. May install or service street lights, intercom systems, or electrical control systems.</p>
                <a href="applied">Apply here</a>
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