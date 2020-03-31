<html>
<style>
p
{
	color:black;
	font-size:40;
}

b
{
	color:red;
	font-size:40;
}
</style>
<body background="11.jpg">
<?php


$empname= $_POST['empname'];
$empnum= $_POST['empnum'];
$position= $_POST['position'];
$nationality= $_POST['nationality'];
$iqno= $_POST['iqno'];
$iqedate= $_POST['iqedate'];
$passportno= $_POST['passportno'];
$passportdate= $_POST['passportdate'];


$servername="localhost";
$username = "root";
$password = "";


$dbname="employeedb";
$conn = new mysqli($servername, $username, $password,$dbname);

if($_REQUEST['btn_submit']=="save")
{
		$sql = "INSERT INTO employeetable(empname,empnum,position,nationality,iqno,iqedate,passportno,passportdate) VALUES ($empname,$empnum,$position,$nationality,$iqno,$iqedate,$passportno,$passportdate)";

		if ($conn->multi_query($sql) === TRUE) 
		{
    			echo "<p>Your details are stored</p>";
		} 
		else 
		{
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		mysqli_close($conn);

}
?>
</body>
</html>
