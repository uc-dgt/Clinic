<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>The Clinic</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	
</head>
<body>

    <div class="container">
        <h1><a href="../index.php">The Clinic</a>
		  <div class="pull-right">
			<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					Patient: <span class="caret"></span>
					</button>
					
				
			</div>
		  </div>
		  </h1>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li><a href="patientmain.php">View My Information</a></li>
                        <li class="active"><a href="#">View My Appointments</a></li> 
                        <li><a href="../index.php">Logout</a></li>

                    </ul>
                </div>
            </div>
        </div>


    </div>

<body>

<br>


</body>

    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>

<?php

$con=mysqli_connect("localhost","root","0123456","clinic");
//Check connection
if (!$con) {
    die('Could not connect' . mysqli_error());
   // echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
  // echo "sucessful";  
}

session_start();

// apptid sent from form 
$mycarecard=intval($_POST['carecard']); 
$mylname=$_POST['lname']; 
echo $mycarecard;
echo $mylname;


echo '<h3 align="center">Viewing Scheduled Appointments Under CareCard# : ' . $cc . '</h3>';

$allpappts = mysqli_query($con,"SELECT *  FROM book b WHERE CareCard='$cc'");

echo "<center><table border='1' style='width:800px'>
<tr>
<th>CareCard #</th>
<th>Appointment ID</th>

</tr>";

while($row = mysqli_fetch_array($allpappts)) {
  echo "<tr>";
  echo '<td align="center">' . $row['CareCard'] . "</td>";
  echo '<td align="center">' . $row['appointmentID'] . "</td>";
  echo "</tr>";
}

echo "</table><p></p><center>";



?>