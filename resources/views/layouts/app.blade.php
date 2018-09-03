<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta Content-type="text/javascript" charset="utf-8">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>ITI JobPortal</title>
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css.map">
	<link rel="stylesheet" href="/js/bootstrap.min.js">
	<link rel="stylesheet" href="/js/app.js">
	<link rel="stylesheet" href="/css/aadarsh.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Manana header -->
  <link rel="stylesheet" type="text/css" href="/css/mvstyle.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
 
  <link rel="stylesheet" href="/css/bootstrap-multiselect.css" type="text/css"/>
 <!-- <style>
		.row .col-md-10{margin-top:10px;font-size:40px;font-family:"Arial Black", Gadget, sans-serif}
		.col-md-12{font-size:40px;font-family:"Arial Black", Gadget, sans-serif}
		.col-md-2{margin-top:10px;}

		body{background-color:#EFEFEF}
		.row .col-md-10{margin-top:10px;font-size:10px;font-family:"Arial Black", Gadget, sans-serif;margin-left:40px;}
		.col-md-4{font-size:30px;font-family:"Arial", Gadget, sans-serif;background-color:#CCC;color:#09F;border-radius:10px;margin-left:55px;margin-top:15px;width:auto}
		.col-md-2{margin-top:10px;}
		.col-md-12{margin-left:40px;margin-top:10px;}
		.col-md-12 .btn-group{box-shadow:5px 5px 5px #333333}
		p{font-size:20px;}
</style> -->
</head>
<body>
	@include('inc.header')
	
	@yield('content')
	

	@include('inc.footer')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-multiselect.js">
    </script>



<script>

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>

</html>