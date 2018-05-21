<!DOCTYPE html>
<html>
<head>
<center><img id="banner" src="http://www.calicuttaxi.com/images/banner_04.png" alt="Banner Image" width="1000" height="250"></center>
<body background="http://media.istockphoto.com/photos/abstract-blue-green-technology-and-science-modern-background-picture-id523760376?k=6&m=523760376&s=170667a&w=0&h=aftceF6b8PRPLj5ATpYHvA7a9g-KgxLBOihz9sT_3PM=">

<title>Booking</title>
<style type="text/css">

body
{
  width: 1000px;   
  margin: 0 auto; 
  font-family:century Gothic;
  text-align:justify; 
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;

}

.dropdown-content a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>
</head>

<body>


<ul>
 	 <li><a href="index.php">Home</a></li>
	<li><a href="login.php">Login</a></li>
	<li><a href="book.php">Book A Car</a></li>
 	 <li><a href="contactus.php">Contact Us</a></li>
 	 <li class="dropdown">
 	   	<a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">About Us</a>
  	  	<div class="dropdown-content" id="myDropdown">
   		<a href="aboutus.php">Vision And Mission</a>
		<a href="history.php">History</a>
     	 	<a href="founder.php">Founder</a>
	<li><a href="fare.php">Fare Estimator</a></li>
	<li><a href="feedback.php">Feedback</a></li>
	<li><a href="lostPro.php">Lost Property</a></li>
    </div>
  </li>
</ul>

</style>
</head>
<center>
<h1>Book A Car</h1>
<form action = "insertbooking.php" method="POST">

<table id=order action=form.php align="center">

<tr>
<th>Car Type</th>
<td><a href="huge.php">Huge Cars</a> || <a href="small.php">Small Cars</a></option>
</td>
</tr>

</table>
</style>
</head>
</table>

<center>
<body>
<table id=order action=form.php >

    <p><center>Name: <input type=text
        name="b_name"
        placeholder="Enter Your Name"
        required
        autocomplete="on"></center><br>

    <center>Email: <input type=text
        name="b_email"
        placeholder="Enter Your Email"
        required
        autocomplete="off"></center>
<br>

<center> Departure : <select name = "b_depart">
  <option value="Johor">Johor</option>
   <option value="Kelantan">Kelantan</option>
  <option value="Kedah">Kedah</option>
  <option value="Melaka">Melaka</option>
  <option value="Negeri Sembeilan">Negeri Sembilan</option>
  <option value="Pahang">Pahang</option>
  <option value="Perak">Perak</option>
  <option value="Perlis">Perlis</option>
  <option value="Pulau Pinang">Pulau Pinang</option>
  <option value="Selangor">Selangor</option>
  <option value="Sabah">Sabah</option>
  <option value="Sarawak">Sarawak</option>
  <option value="Terengganu">Terengganu</option>
  <option value="Wilayah Persekutuan">Wilayah Persekutuan</option>
  </select>&thinsp;

Arrival :  <select name = "b_arrive">
   <option value="Johor">Johor</option>
   <option value="Kelantan">Kelantan</option>
  <option value="Kedah">Kedah</option>
  <option value="Melaka">Melaka</option>
  <option value="Negeri Sembeilan">Negeri Sembilan</option>
  <option value="Pahang">Pahang</option>
  <option value="Perak">Perak</option>
  <option value="Perlis">Perlis</option>
  <option value="Pulau Pinang">Pulau Pinang</option>
  <option value="Selangor">Selangor</option>
  <option value="Sabah">Sabah</option>
  <option value="Sarawak">Sarawak</option>
  <option value="Terengganu">Terengganu</option>
  <option value="Wilayah Persekutuan">Wilayah Persekutuan</option>
  </select>
</center>
</table>
<br>
<br>
<center>

 <table action="action_page.php">
      Date:
      <input type="date" name="b_date">
</table>

<br>
<br>
   <table action="action_page.php">
      Time:
      <input type="time" name="b_time">
  </table>
  
</center>
<br>
<center>
Payment :  <select name = "b_pay">
   <option>Cash</option>
   <option>Online</option>
  </select>
</center>
<center>

    <SCRIPT LANGUAGE="JavaScript">
function testButton (form){
    alert (form.check1.checked);
}
</center>
</SCRIPT>
</BODY>

<table NAME="testform">


<script type="text/javascript">
    function func(a) {
        if(a==1) {
            document.getElementById("order").style.display="none";
        }
        if(a==2) {
            document.getElementById("order").style.display="block";
        }
    }
    </script>

    <script type="text/javascript">
        function showValue(newValue)
        {
            document.getElementById("range").innerHTML=newValue;
        }
    </script>
    </head>
</table>
   
<br>

     <center>Bank Type: <br>
<input type="radio" name="b_type" value="Maybank2u">Maybank2U
    <input type="radio" name="b_type" value="Bank Islam">Bank Islam
 <input type="radio" name="b_type" value="CIMB">CIMB
 <input type="radio" name="b_type" value="Public Bank">Public Bank
 <input type="radio" name="b_type" value="Affin Bank">Affin Bank
<input type="radio" name="b_type" value="Hong Leong Bank">Hong Leong Bank

<br>

     <br>

    <center>
	
	<table name="myform" action="http://www.mydomain.com/myformhandler.cgi" method="POST">
   <div align="center">Bank Account num : <input name="b_card" size="25"></center><br>
</table>
<br>
  <table id=retrieve action=form2.php>

    Payment: RM <input type="text" name="b_payment"><br>
    <br>

    <br>

    <center>Would you like an email receive?<br>
    
 <input type="radio" name="b_receive" value="yes">yes
<input type="radio" name="b_receive" value="no">no
</table>
    <br>
<br>

  <input type="submit" name="submit" value="Save" / >
<input type = "reset" value = "Reset" />
<br><br>
</form>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<!--footer -->

   <footer>

    <div class="wrapper">

<center>
<a href="http://facebook.com"><img src="facebook.png" alt="" width="30"height="30"></a>
<a href="http://twitter.com"><img src="twitter.png" alt="" width="30"height="30"></a>
<a href="http://instagram.com"><img src="insta.png" alt="" width="30"height="30"></a>
<a href="http://linkedin.com"><img src="linkedin.png" alt="" width="30"height="30"></a>
<a href="http://gmail.com"><img src="googleplus.png" alt="" width="30"height="30"></a>
                      </center> 

<br>
 <hr>
    
     <div class="links">
<center>
      © 2016 Taxi Services Co. All Rights Reserved.</div>
                      </center>  
     </ul>
     
    </div>
   </footer>
   <!--footer end-->
  </div>
<hr>
<script type="text/javascript"> Cufon.now(); </script>
<script>
 jQuery(document).ready(function($) {
  $('#form_4').jqTransform({imgPath:'jqtransformplugin/img/'}); 
 });
</script>
</body>
</html>