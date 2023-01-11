<?php 

$koneksi = mysqli_connect("localhost","azaq8246_baki","adminbaki","azaq8246_hmpe-upi");

if (mysqli_connect_error()){
	echo "koneksi database gagal" .mysqli_connect_error();
}

?>