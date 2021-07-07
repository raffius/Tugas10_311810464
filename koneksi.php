<?php
$koneksi = mysqli_connect("localhost","root","","rafiudin_311810464");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database tidak berhasil : " . mysqli_connect_error();
}
?>