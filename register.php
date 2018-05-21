<!DOCTYPE html>
<html>
<head>
<center><img id="banner" src="http://www.calicuttaxi.com/images/banner_04.png" alt="Banner Image" width="1000" height="250"></center>
<body background="http://media.istockphoto.com/photos/abstract-blue-green-technology-and-science-modern-background-picture-id523760376?k=6&m=523760376&s=170667a&w=0&h=aftceF6b8PRPLj5ATpYHvA7a9g-KgxLBOihz9sT_3PM=">

<title>Register</title>
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


<h1><center>Register</h1></center>

<center>
<form action = "insertregister.php" method="POST">
<table   border="0">
<tr>
<th>Full Name :</th>
<td><input type="text" name="r_name"></td>
</tr>

<tr>
<th>Date of Birth :</th>
<td><input type="text" name="r_dob"></td>
</tr>

<tr>
<th>Phone Number :</th>
<td><input type="text" name="r_phone"></td>
</tr>

<tr>
<th>Email Address :</th>
<td><input type="text" name="r_email"></td>
</tr>

<tr>
<th>Password :</th>
<td><input type="password" name="r_pass"></td>
</tr>
<tr>

<tr>
<th>Confirm Password :</th>
<td><input type="password" name="r_confirm"></td>
</tr>
<tr>

</table>
</br></br>
<input type="checkbox" name="agreement" value="agreement"> I hereby declare all information stated here is a valid information
</br>
<input type="checkbox" name="agreement1" value="agreement1">I also agree with the Terms and Condition of Get Taxi And Co.
</br>
<input type="checkbox" name="agree" value="agree">I would like to participate in Get Taxi And Co Events & Promotions
</br></br>

<input type="submit" name="submit" value="Submit" / >
<input type = "reset" value = "Clear" />
</form>
  <br>
     
   </footer>
   <!--footer end-->
  </div>
<br><br>

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