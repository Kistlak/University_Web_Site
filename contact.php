<html>

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/SLSOC.jpg">

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

<title>
<?php
include("title.php")
?>
</title>

<style>

#footer {
    width:auto;
	height:auto;
    margin-top: 0px;
    padding: 10px;
    color: white;
    background-color: #ffa700;
    clear: left;
	margin-left:0px;
	text-align: center;
     }

.about{
	margin-left:50px;
	margin-right:50px;
	font-family: Times New Roman;
	line-height: 180%;
	font-size:135%;
	text-align: left;
	color:#353c47;
}

p span { 
   color: white; 
   line-height: 300%; 
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.5);
   padding: 8px; 
}	

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

textarea {
    width: 100%;
	height:150px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 400px;
    background-color: #002147;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size: 15px;
	font-weight: bold;
}

input[type=submit]:hover {
    background-color: #8B008B;
}
	
.form{
	text-align:left;
	margin-left:50px;
	margin-right:50px;
}

.req{
	color:red;
}
	 
</style>

<?php
include("backtop.php")
?>

</head>

<body>

<?php
include("nav.php")
?>

<br><br><br>

<div class="container"> <!-- Start Of The Container Class -->

<p class="about"> <!-- Start Of The P About Class -->

<div class="row text-center"> <!-- Start Of The Row -->

<div class="col-md-12 col-sm-6 hero-feature">
<div class="caption">
<p>

<p><span>Contact Our Staff..<span class='spacer'></span>

<br>If you have any questions, please send us a Email. For any other concerns, please Call us to contact someone who can help..</a></span></p>

<div class="form">
  <form action="contact.ok.php" method="POST">

<br><strong>
<label for="text">Your Name : <span class="req">&#42;</span></label>
<input type="text" class="form-control" name="name"  placeholder="" required="required"/>
<br/><br/>

<label for="text">Your Email : <span class="req">&#42;</span></label>
<input type="text" class="form-control" name="email"  placeholder="" required/>
<br/><br/>

<label for="text">Your Contact Number : <span class="req">&#42;</span></label>
<input type="text" class="form-control" name="num"  placeholder="" required/>
<br/><br/></strong>

<b><label for="text">Your Message : <span class="req">&#42;</span></label>
<textarea name="msg" placeholder="What do you want to know ?" required/></textarea>

<center><div class="container">
  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message" value="Submit" width="50"></button>      
</div></center></strong>
	
</form></div>

<table class="cnt">

  <tr>
    <th><h4>Contact Info :</h4></th>
    <th><h4>Location :</h4></th>
  </tr>

  <tr>
    <td>Galle Fort ,<br>
Galle ,<br>
Sri Lanka<br>
Tel: ( Amila ) <a href="tel:+(94) 112565511" class="tel">+(94) 112565511</a><br>
Tel: ( Prakash ) <a href="tel:+(94) 112565594" class="tel">+(94) 112565594</a><br>

    <td>Get Directhion From Google Maps. <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.7652775469433!2d80.21568254410845!3d6.0269220437436815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173a378ee025d%3A0xb96f8a16ae16c3fe!2sGalle+fort!5e0!3m2!1sen!2sus!4v1481026300005" width="100%" height="380px" frameborder="0" style="border:0" allowfullscreen></iframe></td>

  </tr>

</table>

</p>
</div>
</div>

</div> <!-- End Of The Row Class -->

		</p> <!-- End Of The P About Class -->
		
</div> <!-- End Of The Container Class -->

<!-- Footer -->
<?php
include("footer.php")
?><!-- End Of The Footer -->
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>

  </body>
</html>