<?php
//include "koneksi.php";
$conn = mysqli_connect('rahmatmysqlserver.mysql.database.azure.com','rahmat@rahmatmysqlserver','Rmt025524123','dbdicoding') or
	die ( $conn -> error);

if ($conn){
	echo "koneksi berhasil";
$name = $_POST['name'];
$email = $_POST['email'];
$job = $_POST['job'];
$psw = $_POST['psw'];

$sql = "INSERT INTO tb_register(name, email,job,psw) VALUES('$name', '$email','$job','$psw')";

if(mysqli_query($conn,$sql))
{
	echo "Registerd Successfully";

}
else
{
	echo mysqli_error($conn);
}
}

?>
