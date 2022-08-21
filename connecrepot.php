<html>
<body>

<?php

//create.connection

$user="root";
$pass="";
$db="repot";

$connection= new mysqli("localhost",$user ,$pass ,$db);

//check connection
if(!$connection)
{
die("unable to connect to the database".connection_erorr);
}
echo "Database connection successfully .";
//close connection

	 if(isset($_POST['id'])) 
	
if ($_POST['button'=="Stop"]){
$query1="update pain SET pain ='Stop'";
} else
if ($_POST['button'=="Right"]){
$query1="update pain SET pain ='Right'";
}
else if ($_POST['button'=="Left"]){
$query1="update pain SET pain ='Left'";
} else if ($_POST['button'=="Forward"]){
$query1="update pain SET pain ='Forward'";
} else if ($_POST['button'=="Backward"]){
$query1="update pain SET pain ='Backward'";
}
else{
echo 'Failed update Value'; }
    
?> 

	</body>
</html>
