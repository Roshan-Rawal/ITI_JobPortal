
@extends('layouts.app')

@section('content')
  

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
            <div class="row">
           
                <div class="col-md-12 style="margin-left:30px;margin-top:20px">
                     <h1 style="margin-left:420px">Time To Judge Your Skills</h1>
                 </div>
            <form action="/rank" method="post">
            <div class="col-md-12" style="font-size:30px;border-radius:10px;margin-left:5px;margin-top:20px;background-color:#CCC">Skill Test Phase 2:</div>
            <div class="col-md-12" style="margin-top:15px">
            <div class="col-md-6"><p style="font-size:20px;"><b>Select your course :</b></p></div>
              <script type="text/javascript">
                var resp;
                function getquestions() {
                    field = document.getElementById('field').value;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        resp = JSON.parse(this.responseText);
                        console.log(resp);
                        out='';
                        out+="Q1 : " + resp[0][0].q1 + "<br>";
                        out+="<input name='q1' type='radio' required>A: " + resp[1][0].a+"<br></input>";
                        out+="<input name='q1' type='radio' required>B: " + resp[1][0].b+"<br></input>";
                        out+="<input name='q1' type='radio' required>C: " + resp[1][0].c+"<br></input>";
                        out+="<input name='q1' type='radio' required>D: " + resp[1][0].d+"<br></input><br>";

                        out+="Q2 : " + resp[0][0].q2 + "<br>";
                        out+="<input name='q2' type='radio' required>A: " + resp[1][1].a+"<br></input>";
                        out+="<input name='q2' type='radio' required>B: " + resp[1][1].b+"<br></input>";
                        out+="<input name='q2' type='radio' required>C: " + resp[1][1].c+"<br></input>";
                        out+="<input name='q2' type='radio' required>D: " + resp[1][1].d+"<br></input><br>";

                        out+="Q3 : " + resp[0][0].q3 + "<br>";
                        out+="<input name='q3' type='radio' required>A: " + resp[1][2].a+"<br></input>";
                        out+="<input name='q3' type='radio' required>B: " + resp[1][2].b+"<br></input>";
                        out+="<input name='q3' type='radio' required>C: " + resp[1][2].c+"<br></input>";
                        out+="<input name='q3' type='radio' required>D: " + resp[1][2].d+"<br></input><br>";
                        out+="Q4 : " + resp[0][0].q4 + "<br>";
                        out+="<input name='q4' type='radio' required>A: " + resp[1][3].a+"<br></input>";
                        out+="<input name='q4' type='radio' required>B: " + resp[1][3].b+"<br></input>";
                        out+="<input name='q4' type='radio' required>C: " + resp[1][3].c+"<br></input>";
                        out+="<input name='q4' type='radio' required>D: " + resp[1][3].d+"<br></input><br>";
                        out+="Q5 : " + resp[0][0].q5 + "<br>";
                        out+="<input name='q5' type='radio' required>A: " + resp[1][4].a+"<br></input>";
                        out+="<input name='q5' type='radio' required>B: " + resp[1][4].b+"<br></input>";
                        out+="<input name='q5' type='radio' required>C: " + resp[1][4].c+"<br></input>";
                        out+="<input name='q5' type='radio' required>D: " + resp[1][4].d+"<br></input><br>";


                        // console.log(out);
                        document.getElementById("quest").innerHTML = out;                    
                    }
                };
                xmlhttp.open("GET", "fieldtest?field='" + field + "'", true);
                xmlhttp.send();
                }
              </script>
            <div class="col-md-6">  
                <select id='field' onchange="getquestions()">
                    <option selected disabled>Select Field</option>
                    <option value="carpenter">Carpenter</option>
                    <option value="electrician">Electrician</option>
                    <option value="plumber">Plumber</option>
                </select>
            </div>

            </div>
                <div class="col-md-12" id='quest'></div>
                



            
            <div class="col-md-12" style="margin-top:5px;"><hr></div>

            
            <!-- <div class="col-md-12" style="margin-top:15px">
            <div class="col-md-6"><p style="font-size:20px;"><b style="margin-left:15px">2. What are the masures to protect yourself from electric shock.</b></p></div>
            <div class="col-md-6 style="background-color:#CCC;"><input type="radio" name="ob" value="no ground"><p style="font-size:20px">no ground</p>
            <input type="radio" name="ob" value="no fuse"><p style="font-size:20px">no fuse</p><br>
            <input type="radio" name="ob" value="no mcb"><p style="font-size:20px">no mcb</p>
            <input type="radio" name="ob" value="cheap wire"><p style="font-size:20px">cheap wire</p>
                </div>
                </div>   -->             


</div>
            
            <div class="col-md-12" style="margin-top:5px;"><hr></div>

            <div class="col-md-12">
            <div class="btn-group" style="margin-left:420px">
              <input type="submit" name="" value="submit" style="background-color:#36F;font-size:25px;box-shadow:4px 4px 4px black">
              </div>
          </div>
      </form>
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