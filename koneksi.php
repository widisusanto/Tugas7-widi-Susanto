<?php
$koneksi = mysqli_connect("localhost","root","","widi_311810225");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database tidak berhasil : " . mysqli_connect_error();
}
?>