
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "school project";
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
die("Sorry : ".mysqli_connect_error());
}
?>