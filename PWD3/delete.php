<?php
include_once("koneksi.php");
// menyertakan file koneksi.php untuk melakukan koneksi dengan mysql

$nim = $_GET['nim'];
// mendapatkan nilai nim sesuai dengan yang dikirimkan oleh form


$result = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim='$nim'");
// query untuk menghapus data berdasarkan nim yang dipilih


header("Location:index.php");
//setelah menghapus data kembali ke halaman index.php

?>