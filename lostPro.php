<!DOCTYPE html>
<html>
<head>
<center><img id="banner" src="http://www.calicuttaxi.com/images/banner_04.png" alt="Banner Image" width="1000" height="250"></center>
<body background="http://media.istockphoto.com/photos/abstract-blue-green-technology-and-science-modern-background-picture-id523760376?k=6&m=523760376&s=170667a&w=0&h=aftceF6b8PRPLj5ATpYHvA7a9g-KgxLBOihz9sT_3PM=">

<title>About Us</title>
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

<body>
<br>

<center>
<form action="insertlost.php" method ="POST" >

    <p>Name : <input type=text
        name="l_name"
        placeholder="Enter Your Name"
        required
        autocomplete="on">
<br><br>
        E-mail : <input type=text
        name="l_email"
        placeholder="Enter Your email"
        required
        autocomplete="off">
<br>
<br>
    H/p No : <input type=text
        name="l_phone"
        placeholder="Enter Your phone"
        required
        autocomplete="off">
<br>
<br>
     Address 1 : <br><textarea type=text rows = "4" cols = "36"
        name="l_add1"
        placeholder="Address departure"
        required
        autocomplete="off"></textarea>
    
<br>
<br>
     Address 2 :<br> <textarea type=text rows = "4" cols = "36"
        name="l_add2"
        placeholder="Address arrival"
        required
        autocomplete="off" ></textarea><br><br>
      
<br>
<br>
  
<p>Date :</p>
<select name="l_month" >
 <option> - Month - </option>
 <option value="January" name="january">January</option>
 <option value="Febuary" name="Febuary">Febuary</option>
 <option value="March" name="March">March</option>
 <option value="April" name="April">April</option>
 <option value="May" name="May">May</option>
 <option value="June" name="June">June</option>
 <option value="July" name="July">July</option>
 <option value="August" name="August">August</option>
 <option value="September" name="September">September</option>
 <option value="October" name="October">October</option>
 <option value="November" name="November">November</option>
 <option value="December" name="December">December</option>
</select>
<br><br>
<select name="l_day">
 <option> - Day - </option>
 <option value="1" name="1">1</option>
 <option value="2" name="2">2</option>
 <option value="3" name="3">3</option>
 <option value="4" name="4">4</option>
 <option value="5" name="5" >5</option>
 <option value="6" name="6">6</option>
 <option value="7" name="7">7</option>
 <option value="8" name="8">8</option>
 <option value="9" name="9">9</option>
 <option value="10" name="10">10</option>
 <option value="11" name="11">11</option>
 <option value="12" name="12">12</option>
 <option value="13" name="13">13</option>
 <option value="14" name="14">14</option>
 <option value="15" name="15">15</option>
 <option value="16" name="16">16</option>
 <option value="17" name="17">17</option>
 <option value="18" name="18">18</option>
 <option value="19" name="19">19</option>
 <option value="20" name="20">20</option>
 <option value="21" name="21">21</option>
 <option value="22" name="22">22</option>
 <option value="23" name="23">23</option>
 <option value="24" name="24">24</option>
 <option value="25" name="25">25</option>
 <option value="26" name="26">26</option>
 <option value="27" name="27">27</option>
 <option value="28" name="28">28</option>
 <option value="29" name="29">29</option>
 <option value="30" name="30">30</option>
 <option value="31" name="31">31</option>
</select>

<br>
<br>
      Year:
      <input type=text
        name="l_year" 
        placeholder="yr"
        required
        autocomplete="off">

 
<br><br>

      Time:
      <input type=text
        name="l_time" 
        placeholder="time"
        required
        autocomplete="off">
 
 <br>
<br>
     Item Lost : <input type=text
        name="l_lost" 
        placeholder="Lost Item"
        required
        autocomplete="off">
<br>
<br>
 Description: <textarea name = "l_desc" rows = "4" cols = "36"> </textarea>

<br>
<br>
    
  <input type="submit" name="submit" value="Submit" / >
<input type = "reset" value = "Clear" />
</center>


 </form>


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















