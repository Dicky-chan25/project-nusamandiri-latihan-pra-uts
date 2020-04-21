<?php

include "koneksi.php";
$sql=mysqli_query($koneksi, "select a_nama1 from table_1");
$data=mysqli_fetch_array($sql);
$namapanggilan=$data['a_nama1'];
echo "<h2>Latihan String 1 </h2>";
echo "Nama di database(original) = ". $namapanggilan."<br>";
echo "Nama dalam Huruf Besar = ". strtoupper($namapanggilan)."<br>";
echo "Nama dalam Huruf kecil = ". strtolower($namapanggilan)."<br>";
echo "Huruf kecil di awal besar = ". ucwords($namapanggilan)."<br>";

echo "<h2>Menggunakan array 2 dimensi (menampilkan urutan array)</h2>";
$qry2=mysqli_query($koneksi, "select a_nama1 from table_1");
$data2=array();
while($data2[]=mysqli_fetch_array($qry2));
$namapanggilan2=$data2[3]['a_nama1'];
echo "Nama di database(original) = ". $namapanggilan2."<br>";
echo "Nama dalam Huruf Besar = ". strtoupper($namapanggilan2)."<br>";
echo "Nama dalam Huruf kecil = ". strtolower($namapanggilan2)."<br>";
echo "Huruf kecil di awal besar = ". ucwords($namapanggilan2)."<br>";


echo"<br>";
echo "<h2>Menggunakan Query SQL </h2>";
$sql=mysqli_query($koneksi, "select a_nama1 from table_1 limit 2,2");
$data=mysqli_fetch_array($sql);
$namapanggilan=$data['a_nama1'];
echo "Nama di database(original) = ". $namapanggilan."<br>";
echo "Nama dalam Huruf Besar = ". strtoupper($namapanggilan)."<br>";
echo "Nama dalam Huruf kecil = ". strtolower($namapanggilan)."<br>";
echo "Huruf kecil di awal besar = ". ucwords($namapanggilan)."<br>";
echo"<br>";


echo "<h2>Latihan lanjutan (untuk mhs): </h2>";
$sql1=mysqli_query($koneksi, "select a_nama1 from table_1");
$data=mysqli_fetch_array($sql1);
$namapanggilan1=$data['a_nama1'];
$kalimat ="Buat ouput untuk menampilkan tulisan ";
$output1 = substr($namapanggilan1,0,3);
$output2 = substr($namapanggilan1,1,3);
$ou1 = ucwords($output1);
$ou2 = ucwords($output2);
$ou3 = ucwords($output1).$output1;
echo  $kalimat ;
echo "<b> $ou1</b>"."<br>";
echo  $kalimat;
echo "<b> $ou2</b>"."<br>";
echo  $kalimat;
echo "<b> $ou3</b>"."<br>";
echo "Dengan menggunakan" ."<b> substr,ucwords</b>";
echo"<br>";


?>

