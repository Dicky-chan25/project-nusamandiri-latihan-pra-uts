<?php

include "koneksi.php";
$qry=mysqli_query($koneksi,"select b_tgl1, c_rupiah, d_array_hari from table_1");
$data=mysqli_fetch_array($qry);
$tanggal_default=$data['b_tgl1'];
$tanggal_replace=str_replace("-","/",$data['b_tgl1']);
$uang_default=$data['c_rupiah'];
$uang_rupiah=number_format($uang_default,0,',',',');
$kumpulan_hari=$data['d_array_hari'];
$kumpulan_hari_explode=explode(" ",$kumpulan_hari);
echo "<h2>Latihan string 3</h2>";
echo "Tanggal Default =" . $tanggal_default."<br>";
echo "Tanggal Replace =". $tanggal_replace ."<br>";
echo "Uang Default =" . $uang_default ."<br>";
echo "Uang Rupiah =" . $uang_rupiah ."<br><br>";
echo "<hr><h4>Hari2</h4>
<table border='1' cellpading='3'>";
foreach($kumpulan_hari_explode as $hari)
    {
        echo "<tr><td>".$hari."</td></tr>";
    }
    echo "</table>";

?>

<?php

include "koneksi.php";
$qry=mysqli_query($koneksi,"select d_array_hari from table_1");
$data=mysqli_fetch_array($qry);
$kumpulan_hari=$data['d_array_hari'];
$kumpulan_hari_explode=explode(" ",ucwords($kumpulan_hari));
echo "<h2>Latihan lanjutan (untuk mhs):</h2>";
echo "<label>Agama :</label>
<select>";

foreach($kumpulan_hari_explode as $hari)
{
    echo"<option>".$hari."</option>";
}
echo "</select>";
echo " ";
echo "<button>YA</button>";
echo "<hr>";

?>

<?php

include "koneksi.php";
$qry=mysqli_query($koneksi,"select b_tgl1 from table_1");
$data=mysqli_fetch_array($qry);
$tanggal_default=$data['b_tgl1'];
$format1=$data['b_tgl1'];
$format2=$data['b_tgl1'];

echo "<h2>Latihan lanjutan</h2>";
echo "<h2>GA NGERTI PA</h2>";
echo "Format Default : " . $tanggal_default."<br>";
echo "Format 1 : " .date('d F yy',strtotime($format1))."<br>";
echo "Format 2 : " .date('d/m/y',strtotime($format2))."<br>";
?>