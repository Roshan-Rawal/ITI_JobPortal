@extends('layouts.app')

@section('content')

<div class="container">
  <h2 ><b>Company Dashboard</b></h2>
  

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
    <li><a data-toggle="tab" href="#menu1">Applicants</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
<style>
table {
    font-family: aerial,sans-serif;
    color: #20B2AA;
    font-size:20px;
    border-collapse: collapse;
    width: 200%;
}

td, th {
    border: 0.2px ;
    text-align: left;
    padding: 13px;
    
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<table>
  <tr>
    <th>WELSPUM MECHANICAL WORKS</th>
    <th></th>
  
  </tr>
  <tr>
    <td>Registration Id</td>
    <td>MNW76399203 &nbsp &nbsp &nbsp <a href="#">
          <span class="glyphicon glyphicon-pencil"></span>
        </a></td> 
  </tr>

    <tr>
    <td>Address</td>
    <td>13/B,GIDC Bavla,Near Texspin Bearings,Bavla,Ahmedabad  &nbsp &nbsp &nbsp <a href="#">
          <span class="glyphicon glyphicon-pencil"></span>
        </a></td>
    </tr>
  
    <tr>
    <td>Contact No</td>
    <td>7560242659 &nbsp &nbsp &nbsp <a href="#">
          <span class="glyphicon glyphicon-pencil"></span>
        </a></td>
   </tr>
  
   <tr>
    <td>Website</td>
    <td>www.welspummech.com &nbsp &nbsp &nbsp <a href="#">
          <span class="glyphicon glyphicon-pencil"></span>
        </a></td>
    </tr>

  
    <tr>
    <td>Portfolio</td>
    <td>The fine work of drilling holes in the cast iron through lathe machine.Experienced worker required for this work and those would be paid exclusively &nbsp &nbsp &nbsp <a href="#">
          <span class="glyphicon glyphicon-pencil"></span>
        </a></td>
    </tr>
  
    <tr>
    <td>Requirements</td>
    <td>Workers good at drilling,shaping,welding and capable of handling stress in critical situation &nbsp &nbsp &nbsp <a href="#">
          <span class="glyphicon glyphicon-pencil"></span>
        </a></td> 
  </tr>
  
 
  
  </table>



    </div>
    
    
     
    <div id="menu1" class="tab-pane fade">
<style>
table {
    font-family: aerial,sans-serif;
    color: #20B2AA;
    font-size:20px;
    border-collapse: collapse;
    width: 200%;
}

td, th {
    border: 0.2px ;
    text-align: left;
    padding: 13px;
    padding-right: 0px;
    
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<table>
  <tr>
    <th>No.</th>
    <th>Name</th>
    <th>Job Type</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Mahesh</td>
    <td>Mechanical work</td>
  </tr>

    <tr>
      <td>2</td>
    <td>Ramesh</td>
    <td>Plumbing Works</td>
    </tr>
  
    <tr>
      <td>3</td>
    <td>Suresh</td>
    <td>Drilling</td>
   </tr>
  
   <tr>
    <td>4</td>
    <td>Rakesh</td>
    <td>Lathe Machine</td>
    </tr>
  </table>
  </div>


@endsection