<!DOCTYPE html>
<?php
//Create connection
$con=mysqli_connect("localhost","root","0123456","clinic");
//Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<html>
<head>
    <meta charset="utf-8">
    <title>The Clinic</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/patientbutton.css">
	
</head>
<body>

    <div class="container">
        <h1><a href="doctormain.php">The Clinic</a>
		  <div class="pull-right">
			<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					Doctor: <span class="caret"></span>
					</button>
					
				
			</div>
		  </div>
		  </h1>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">

                        

                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              Personal
                              <b class="caret"></b>
                              </a>
                            <ul class="dropdown-menu">
                              <li><a href="showmyinfo.php">Personal Info</a></li>
                              <li><a href="myappointments.php">All Appointments</a></li>
                            </ul>
                        </li>

                        <li><a href="mypatients.php">View Patients</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            About Prescriptions 
                            <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a href="createprescription.php">Create Prescription</a></li>
                              <li class="active"><a href="searchprescription.php">Search Prescription</a></li>
                              <li><a href="prescriptioninfo.php">Prescription Info</a></li>
                         
                            </ul>
                        </li>
                        <li><a href="../index.php">Logout</a></li>
                </ul>                        
            </div>
        </div>
    </div>
    </div>


<br>

<p align="center"><img border="1" src="img/searchprescription.jpg" alt="The Clinic" style="center" width="800" height="350"></p>


<form form style="text-align:center" action="getprescription.php" method="post">
 <fieldset>
<legend>Enter Patient's Information:</legend>
  <table align="center">
    <tr>
      <td align="right">CareCard#:</td>
      <td align="left"><input type="text" name="carecard" required/></td>
    </tr>
    <tr>
      <td align="right">Name:</td>
      <td align="left"><input type="text" name="name" required/></td>
    </tr>    
  </table>
  <input type="submit">
</fieldset>
</form>

<hr>


</body>

    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>





