<?php
include_once("koneksi.php");
 //Include once () fungsi untuk menyertakan sebuah file PHP kedalam file PHP lainnya dan memastikan file yang disertakan tersebut hanya dieksekusi sekali saja
// menyertakan file koneksi.php untuk melakukan koneksi dengan mysql

//fungsi mysqli_query() adalah untuk mengirimkan perintah query ke database mysql
$result = mysqli_query($con, "SELECT * FROM mahasiswa ");
?>
<!-- SELECT* FORM MAHASISWA merupakan query untuk menampilkan semua data pada tabel mahasiswa!--> 

<html>
<head>
 <title>Halaman Utama</title>
</head>
<body>
<a href="tambah.php">Tambah Data Baru</a><br/><br/>
<!-- merujuk / mengarah ke halaman tambah.php!-->

 <table width='80%' border=1>
 <tr>
 <th>Nim</th> <th>Nama</th> <th>Gender</th> <th>Alamat</th>
 <th>tgl lahir</th> <th>Update</th>
 </tr>
<?php
while($user_data = mysqli_fetch_array($result)) {
	// fungsi mysql_fetch_array() digunakan untuk mengambil data sesuai dengan perintah sql (query)
 echo "<tr>";
 echo "<td>".$user_data['nim']."</td>"; // mengambil data kolom nim
 echo "<td>".$user_data['nama']."</td>";// mengambil data kolom nama
 echo "<td>".$user_data['jkel']."</td>"; // mengambil data kolom jkel
 echo "<td>".$user_data['alamat']."</td>"; // mengabil data kolom alamat
 echo "<td>".$user_data['tgllhr']."</td>"; // mengambil data kolom tgllhr
 echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a href='delete.php?nim=$user_data[nim]'>Delete</a></td></tr>";
 // merujuk / mengarah ke halaman edit.php untuk edit dan merujuk ke halaman delete.php untuk delete

}
?>
</table>
</body>
</html>