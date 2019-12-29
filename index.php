<html>
<head>
	<title>
		:: ONLINE GIFTING SYSTEM ::
	</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>
 
</head>
<script type="text/javascript">
	
	function reqsnd()
	{
		alert();
		$.ajax({
			type:"POST";
			url:"admreg.php";
			dataType:"JSON";
			success:function(){
				// alert(data[0]);
				// alert(data[1]);
				// alert(data[2]);
				alert();
			}
		});
	}
</script>
<style type="text/css">
	html,body {
    height:100%;
	width:100%;
	position:relative;
	//overflow: hidden;
}
#background-carousel{
	position:fixed;
	width:100%;
	height:100%;
	z-index:-1;
}
.carousel,
.carousel-inner {
	width:100%;
	height:100%;
	z-index:0;
//	overflow:hidden;
}
.item {
	width:100%;
	height:100%;
	background-position:center center;
	background-size:cover;
	z-index:0;
}
 
#content-wrapper {
	position:absolute;
	z-index:1 !important;
	min-width:100%;
	min-height:100%;
}
.well {
	background-color: rgba(0,0,0,.7);
    //opacity:0.85
}
h1
{
	font-size: 60px;
	font-family: Brush Script Std;
}
h2
{
	background:linear-gradient(to right,rgba(255,255,255,.1) 0%,rgba(255,255,255,1) 50%,rgba(255,255,255,.1) 100%);
	color:#4832a8;
	font-family: Segoe UI Semibold Italic;
}
.btn
{
	font-family: Ink Free bold;
	outline: none !important;
}
label{
	color: #f3cdef;
	font-family:Ink Free ;
	font-size: 20px;
}
.frm-bg
{
	width: 50%;
	//background-color: rgba(255,255,255,.7);
	transform: translate(-50% -50%);
	//border:1px solid white;
}
#email
{
	box-shadow: none !important;
	border:none !important;
	outline: none !important;
	border-radius: 0px;
	font-size: 18px !important;
	border-bottom: 2px solid grey !important;
	background-color: rgba(0,0,0,0) !important;
	color: white;
}
</style>
<script type="text/javascript">

	$(document).ready(function(){
		$("#shw").hide();
		$("#lg-en").hide();
		$("#su-en").hide();
  $(".hd").click(function(){
    $(".hd").hide();
    $("#shw").show();
    });
     $(".lg-sh").click(function(){
    $("#lg-en").show();
    $("#su-en").hide();
  });
     $(".su-sh").click(function(){
    $("#su-en").show();
    $("#lg-en").hide();
  });
});

</script>
<body class="bg-light">

	<div id="background-carousel" data-aos="zoom-in"  data-aos-duration="2000">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image:url(photos/mw3.jpg)"></div>
        <div class="item" style="background-image:url(photos/mw6.jpg)"></div>
        <div class="item" style="background-image:url(photos/mw11.jpg)"></div>  
         <div class="item" style="background-image:url(photos/mw7.jpg)"></div>  
          <div class="item" style="background-image:url(photos/w8.jpg)"></div>  
      </div>
    </div>
</div>
 
 
<div id="content-wrapper">
<!-- PAGE CONTENT -->
	<div id="content-wrapper" >
<!-- PAGE CONTENT -->
    <div class="container">
        <div class="page-header" data-aos="zoom-out-down"  data-aos-duration="2000"><h1 class="text-center"> WELCOME</h1></div>
        <div class="well" align="center" data-aos="fade-up" data-aos-duration="2000"> <center><button type="button"  class="btn btn-primary btn-lg hd" data-toggle="modal" data-target="#exampleModalCenter">
  Get Start
</button>
</center>
	<div  id="shw" align="center">
		<h2 >THIS IS ADMIN PHASE</h2>
		<br>
		<br>
		<div class="row  col-md-offset-4">
			<div class="col-md-3">
			<button type="button" class="btn btn-info btn-lg lg-sh">Login</button>
		</div>
		<div class="col-md-3">
			<button type="button" class="btn btn-success btn-lg su-sh">Register</button>
		</div>
		</div>
	</div>
	<br>
	<br>
<div class="frm-bg" id="lg-en">
  <form method="post" autocomplete="off">
    <div class="form-group row col-md-offset-2">
    	 <div class="col-md-10 ">
       <label for="username">Username</label>
      <input type="text" class="form-control underline-from-center" id="email" placeholder="Enter email" name="email" >
      <!-- onclick="style='border-bottom:2px solid red !important'"
      onblur="style='border-bottom:2px solid grey !important'"> -->
    </div> 
</div>
<br>
     <div class="form-group row col-md-offset-2">
    	<div class="col-md-10">
      <label for="pwd">Password</label>
      <input type="password" class="form-control" id="email" placeholder="Enter password" name="pwd" required>
    </div>
    </div> 
    <br>
    <div class="row" align="center">
    <button class="btn btn-primary btn-lg" onclick="reqsnd()" name="lgadm" type="submit">Submit</button>
</div>
 </form>
</div>
<!--signup--->
	<div class="frm-bg " id="su-en">
  <form action="" autocomplete="off">
    <div class="form-group row ">
    	<div class="col-md-6 ">
      <label for="email">Name:</label><br>
      <input type="text" class="form-control" id="email" placeholder="Name" name="name">
    </div>
    <div class="col-md-6">
      <label for="email">Sure Name:</label><br>
      <input type="text" class="form-control" id="email" placeholder="Sure Name" name="sure">
    </div>
</div>
<br>
<div class="form-group row">
    	<div class="col-md-6 ">
      <label for="Mobile">Mobile:</label><br>
      <input type="number" class="form-control" id="email" placeholder="Mobile" name="mobile">
    </div>
    <div class="col-md-6">
      <label for="email">Mobile(Alternative):</label><br>
      <input type="(optional)" class="form-control" id="email" placeholder="optional" name="altmobile">
    </div>
</div>

<br>
    <div class="form-group row">
    	<div class="col-md-6">
      <label for="pwd">Password:</label><br>
      <input type="password" class="form-control" id="email" placeholder="Enter password" name="pwd">
    </div>
    <div class="col-md-6">
      <label for="pwd">Conform Password:</label><br>
      <input type="password" class="form-control" id="email" placeholder="Conform password" name="cpwd">
    </div>
    </div>
    <br>
    <div align="center">
    <button type="submit" class="btn btn-info btn-lg" name="regadm">Register</button>
    </div>
  </form>
</div>
	<!---->
	</div><!-- End Well -->
    </div><!-- End Container -->
<!-- PAGE CONTENT -->
</div>
<!-- PAGE CONTENT -->
</div>

</body>
 <script>
  AOS.init();
</script>
</html>
