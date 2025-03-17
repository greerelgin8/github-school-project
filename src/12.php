<?php 
$con=mysqli_connect("localhost","my_user","my_password","my_db");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
for($i=0;$i<=15;$i++){
$sql = "INSERT INTO my_table(name, age) VALUES('John Doe', 25)";
if (mysqli_query($con,$sql))
{
echo "New record created successfully";
}
else
{
echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
}