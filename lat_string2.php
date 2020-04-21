<?php

include "koneksi.php";
$sql=mysqli_query($koneksi, "select a_nama2 from table_1");
$data=mysqli_fetch_array($sql);
$namalengkap=$data['a_nama2'];
$explode=explode(" ",$namalengkap);
$nama_awal=$explode[0];
$nama_akhir=$explode[1];
$shuffled=str_shuffle($nama_awal);
$random=rand(2,99);
$nama_inisial=$shuffled.$random;
echo "<h2>Latihan string 2</h2>";
echo "<h2>*koneksinya harus double ya pak agar nama deni di kolom a_nama1 ke input ?</h2>";
echo "Nama Lengkap :" . $namalengkap. "<br>";
echo "Nama Awal :" . $nama_awal. "<br>";
echo "Nama Akhir :" . $nama_akhir. "<br>";
echo "Nama Inisial :" . $nama_inisial. "<br>";
?>
<?php
echo "<h2>Latihan lanjutan (untuk MHS): </h2>";
$sql3=mysqli_query($koneksi, "select a_nama2 from table_1 limit 3,3");
$data=mysqli_fetch_array($sql3);
$namalengkap4=$data['a_nama2'];
$explode=explode(" ",$namalengkap4);
$namaawal = $explode[0];
$namatengah = $explode[1];
$namaakhir = $explode[2];
$out1 = ucwords(substr($namalengkap4,0,10));
$out2 = ucwords(substr($namaakhir,0,1));
$out3 = ucwords($namaakhir);
$out4 = ucwords($namaawal);
$out5 = ucwords($namatengah);
$kalimat = "Buat output untuk menampilkan tulisan";

echo $kalimat;
echo "<b> $out1</b>";
echo "<b>.</b>";
echo "<b>$out2</b>"."<br>";
echo $kalimat;
echo "<b> $out3, $out4 $out5</b>"."<br>";
"<br>";
echo "Dengan menggunakan" ." <b>explode, substr, ucwords</b>";
echo"<br>";
?>
