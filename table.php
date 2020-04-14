<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praktikum10";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die ("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE validasi (
tanggal DATE NOT NULL, 
nama VARCHAR(100) NOT NULL,
jk VARCHAR(10) NOT NULL,
nisn VARCHAR(10) PRIMARY KEY,
nik VARCHAR(20) NOT NULL,
tmptlahir varchar(25) NOT NULL,
tgllahir date NOT NULL,
noregeris varchar(32) NOT NULL,
agama varchar(15) NOT NULL,
kwn varchar(20) NOT NULL,
kebutuhan varchar(100) NOT NULL,
alamat varchar(50) NOT NULL,
rt varchar(4) NOT NULL,
rw varchar(4) NOT NULL,
dusun varchar(25) NOT NULL,
kelurahan varchar(25) NOT NULL,
kecamatan varchar(25) NOT NULL,
kodepos varchar(7) NOT NULL,
lintang varchar(25) DEFAULT NULL,
bujur varchar(25) DEFAULT NULL,
tmpttinggal varchar(50) NOT NULL,
transportasi varchar(20) NOT NULL,
nokks varchar(6) DEFAULT NULL,
anak varchar(2) NOT NULL,
kps varchar(6) NOT NULL,
nokps varchar(15) DEFAULT NULL) "; 
if (mysqli_query($conn, $sql)){
	echo "Created successfuly";
} else {
	echo "Error creating" . mysqli_error($conn);
}
mysqli_close($conn);
?>