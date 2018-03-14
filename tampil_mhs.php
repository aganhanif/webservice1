
<?php
$xml=simplexml_load_file("mhs.xml") or die("Error: Cannot create object");

echo "Data Mahasiswa - 1 <br/>";
echo $xml->Mahasiswa[0]->Nim . "<br>";
echo $xml->Mahasiswa[0]->Nama . "<br>";
echo $xml->Mahasiswa[0]->Alamat . "<br>";
echo $xml->Mahasiswa[0]->Prodi . "<br>";
echo $xml->Mahasiswa[0]->br .    "<br>";

echo "Data Mahasiswa - 2 <br/>";
echo $xml->Mahasiswa[1]->Nim . "<br>";
echo $xml->Mahasiswa[1]->Nama . "<br>";
echo $xml->Mahasiswa[1]->Alamat . "<br>";
echo $xml->Mahasiswa[1]->Prodi . "<br>";
echo $xml->Mahasiswa[1]->br .    "<br>";

echo "Data Mahasiswa - 3 <br/>";
echo $xml->Mahasiswa[2]->Nim . "<br>";
echo $xml->Mahasiswa[2]->Nama . "<br>";
echo $xml->Mahasiswa[2]->Alamat . "<br>";
echo $xml->Mahasiswa[2]->Prodi . "<br>";
echo $xml->Mahasiswa[2]->br .    "<br>";

echo "Data Mahasiswa - 4 <br/>";
echo $xml->Mahasiswa[3]->Nim . "<br>";
echo $xml->Mahasiswa[3]->Nama . "<br>";
echo $xml->Mahasiswa[3]->Alamat . "<br>";
echo $xml->Mahasiswa[3]->Prodi . "<br>";
echo $xml->Mahasiswa[3]->br .    "<br>";
?>

