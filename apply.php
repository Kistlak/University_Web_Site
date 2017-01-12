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

<h3 style="color:#002147;margin-left:50px;Font-Family:Times New Roman">If you want to join with us , you should have these qualifications.</h3>

<p class="about">
*. Faced O/L examination.<br>
*. Faced A/L examination.<br>
*. If you haven't faced to A/L examination , you have to do SLSOC Foundation Programme.<br>
</p>

<h3 style="color:#002147;margin-left:50px;Font-Family:Times New Roman">Financial.</h3>
<p class="about">
*. You have to pay Rs 1,200,000/= for 4 year Degree Programme.<br>
*. You can take a talk with us , to manage paying methods and time.<br>
</p>

<h3 style="color:#002147;margin-left:50px;Font-Family:Times New Roman">-- Fill this below form to Join with us. --</h3>

<div class="form">
  <form action="apply.joined.php" method="POST">

<br><strong>
<label for="text">First Name : <span class="req">&#42;</span></label>
<input type="text" class="form-control" name="fname"  placeholder="Enter Your First Name" required="required"/>
<br/><br/>

<label for="text">Last Name : <span class="req">&#42;</span></label>
<input type="text" class="form-control" name="lname"  placeholder="Enter Your Last Name" required/>
<br/><br/>

<label for="text">Address Line : <span class="req">&#42;</span></label>
<input type="text" class="form-control" name="adone"  placeholder="Enter Your Address Line 1" required/>
<br/><br/>

<label for="text">Address Line 2 :</label>
<input type="text" class="form-control" name="adtwo"  placeholder="Enter Your Address Line 2"/>
<br/><br/>

<label for="text">City : <span class="req">&#42;</span></label>
<input type="text" class="form-control" name="city"  placeholder="Enter Your Living City" required/>
<br/><br/>

<label for="text">Country : <span class="req">&#42;</span></label>
<input type="text" class="form-control" name="country"  placeholder="Enter Your Living Country" required/>
<br/><br/>

<label for="text">Mobile Number : <span class="req">&#42;</span></label>
<input type="text" class="form-control" name="num"  placeholder="Enter Your mobile Phone Number" required/>
<br/><br/>

<label for="email">Email : <span class="req">&#42;</span></label>
<input type="text" class="form-control" name="email"  placeholder="Enter Your Email" required/> <br/><br/>

<label for="gender">Gender : <span class="req">&#42;</span></label>
<br/><br/>
<input type="radio" name="gender" value="male" class="fm_gender" required>&nbsp;Male&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="female" required>&nbsp;Female
<br/><br/>


<label for="year">Birth Year : <span class="req">&#42;</span></label>
<select name="year" class="b_day">
<option>--</option>
<option>1990</option>
<option>1991</option> <option>1192</option> <option>1993</option> <option>1994</option> <option>1995</option> <option>1996</option> <option>1997</option> <option>1998</option> <option>1999</option> <option>2000</option> <option>2001</option> <option>2002</option> <option>2003</option> <option>2005</option> 
</select>

<label for="month">Birth Month : <span class="req">&#42;</span></label>
<select name="month" class="b_day">
<option>--</option>
<option>January</option>
<option>February</option> <option>March</option> <option>April</option> <option>May</option> <option>June</option> <option>July</option> <option>August</option> <option>September</option> <option>October</option> <option>November</option> <option>December</option>
</select>

<label for="day">Birth Day : <span class="req">&#42;</span></label>
<select name="date" class="b_day">
<option>--</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option> <option>15</option> <option>16</option> 
<option>17</option> <option>18</option> <option>19</option> 
<option>20</option> <option>21</option> <option>22</option> 
<option>23</option> <option>24</option> <option>25</option> 
<option>26</option> <option>27</option> <option>28</option> 
<option>29</option> <option>30</option> <option>31</option> 
</select>

<br/><br/>
	
    <div class="checkbox">
      <label><input type="checkbox" required> I agree to follow the qualifications.</label>
    </div>

</strong>	
</form></div>

<div class="row text-center">
            <div class="col-md-12 col-sm-6 hero-feature">
                  <input type="submit" class="btn btn-info btn-lg" value="Submit" value="Submit"/></button>   
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