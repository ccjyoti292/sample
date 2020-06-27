<?php
	include 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>APPARTMENT DETAILS</title>
</head>
<body>
<div class="topnav">
  <a href="index.php">Main Page</a>
  <a href="login.php">Admin Login</a>
  <a href="userlogin.php">User Login</a>
</div>

<header>
<h1 align="center">NEPALESE APPARTMENT </H1>
<h2 align="center" ><i> Feel like home away from home</i></h2>
  <img src="images/a.jpg"style="width:128px;height:128px;">
<img src="images/c.jpg"style="width:128px;height:128px;">
<img src="images/h.jpg"style="width:128px;height:128px;">
<img src="images/g.jpg"style="width:128px;height:128px;">
<img src="images/e.jpg"style="width:128px;height:128px;">
<img src="images/f.jpg"style="width:128px;height:128px;">
<img src="images/i.jpg"style="width:128px;height:128px;">
<img src="images/b.jpg"style="width:128px;height:128px;">
<img src="images/d.jpg"style="width:128px;height:128px;">
<p align ="upright">Preferred Corporate Housing provides custom tailored furnished 
Nepalese apartment rentals to consultants, business travelers, relocating employees,
 government personnel and others who want a cost-saving alternative to an extended hotel stay.
 <p align ="upright">
Your Nepalese furnished apartment will include an upgraded furniture package, comprehensive housewares collection,
 local and long distance telephone services, cable television, internet access and all utilities. Relax - everything is taken care of!
When you combine all this with one point of contact, nationwide locations, online account management tools, 
consolidated billing and outstanding customer service, you will see why Preferred Corporate Housing is your "Permanent Solution for Temporary Housing Nationwide"
</p>
</header>

<section>
  <nav>
    <p align ="center">
<h2>Amenities</h2>
<input type="text" value="Kitchen"><br>
<input type="text" value="Shower/bath"><br>
<input type="text" value="Balcony"><br>
<input type="text" value="Fridge/freezer"><br>
<input type="text" value=" Heating"><br>
 <input type="text" value="Family-friendly"><br>   
<input type="text" value="Lift"><br>
<input type="text" value="Gay-friendly"><br>
<input type="text" value="Dishwasher"><br>
<input type="text" value="Internet"><br>
<input type="text" value="Washing machine"><br>
<input type="text" value="WiFi"><br>
<input type="text" value="Bed linen"><br>
<input type="text" value="Hair dryer"><br>
<input type="text" value="Iron"><br>
<input type="text" value="Kettle"><br>  
<input type="text" value="Towels"><br> 
</p>

  </nav>
  
  <article>
<strong><p align ="upright">After submitting your furnished housing request, you will receive detailed apartment community information for your desired location along with our all inclusive price quote for your fully furnished Lawrence apartment.<br><br>
 Please submit your request into our reservation system by using the SUBMIT button below. 
 </p></strong>
 <section>

                <form name="form1" action="" method="post">
                    <h2 align="center">Request Form</h2><br>
                    <div align="center">
                    <label>First Name:</label><br>
                        <input type="text" class="form-control" placeholder="FirstName" name="f_name" required=""/>
                        </div>
               
                    <div align="center">
                    <label>Last Name:</label><br>
                        <input type="text" class="form-control" placeholder="LastName" name="l_name" required=""/></div>
                    
                    <div align="center">
                    <label>User Name:</label><br>
                        <input type="text" class="form-control" placeholder="Username" name="u_name" required=""/>
                    </div>
                    
                    <div align="center">
                    <label>Password:</label><br>
                        <input type="password" class="form-control" placeholder="Password" name="pass" required=""/>
                    </div>
                    <div align="center">
                    <label>Email:</label><br>
                        <input type="text" class="form-control" placeholder="Email" name="email" required=""/>
                    </div>
                    
                    <div align="center">
                    <label>Permanent Address:</label><br>
                        <input type="text" class="form-control" placeholder="Permanent Address" name="par_address" required=""/>
                    </div>
                    
                    <div align="center">
                    <label>Move In Date:</label><br>
                        <input type="date" class="form-control" placeholder="Date" name="move_in_date" required="">
                    </div>
                    
                    <div align="center">
                    <label>Gender:</label><br>
                    	<input type="radio" name="gender" value="male" checked> Male
  						<input type="radio" name="gender" value="female"> Female
                        
                    </div>
                    
                    <div align="center">
                    <label>Flat Type:</label>
                   <form class="form-control" placeholder="Flat Type" name="f_type">
                        <select name="Choose">
								<option value="1">Choose</option>
 								<option value="1">1 Bed/1 Bath</option>
 								<option value="2">2 Bed/1 Bath</option>
 								<option value="3">2 Bed/2 Bath</option>
 								<option value="3">3 Bed/2 Bath</option>
                         </select>
                         </form>
                    </div>
                    
                    
                    
                    <div align="center">
                        <input class="btn btn-default submit " type="submit" name="submit1" value="Submit Request">
                    </div>
                </form>
               
            </section>
     </article>
</section>

      	<?php
			if(isset($_POST["submit1"]))
			{
			mysqli_query($conn,"insert into users values('','$_POST[f_name]','$_POST[l_name]','$_POST[u_name]','$_POST[pass]','$_POST[email]','$_POST[par_address]','$_POST[move_in_date]','$_POST[gender]','$_POST[f_type]','no')");
			?>
		<div class="alert alert-success col-lg-6 col-lg-push-3">
        Registration successfully, You will get email when your account is approved
  	  </div>
	  
	  <?php
			
			}
	?>
</body>
</html>