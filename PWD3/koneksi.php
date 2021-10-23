<?php
$host="localhost"; // variable untuk menyimpan nama host
$username="root";
$password="";
$databasename="akademik"; // variable untuk menyimpan nama database

//Membuat koneksi antara PHP dengan MySQL dengan menggunakan fungsi mysqli_connect()
$con=@mysqli_connect($host,$username,$password,$databasename);
if (!$con) {
 echo "Error: " . mysqli_connect_error(); //mengecek apakah PHP sudah terhubung dengan MySQL
exit();
}
?>