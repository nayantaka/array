<?php
 $mhs = array(
	"nim" => "15.01.55.1234",
	"nama" => "Joni",
	"nilai" => array("uts" => array("ujian" => 40,"tugas" => 20, "presensi" => 10), "uas" => array("ujian" => 60,"tugas" => 10, "presensi" => 10) )
 );
 echo "<h1><center> DATA MAHASISWA </center></h1><hr>";
 echo "NIM : ".$mhs['nim']; 
 echo "<br>";
 echo "NAMA : ".$mhs['nama']; 
 echo "<br>";
 echo "NILAI UTS : ";
 echo $mhs['nilai']['uts']['ujian'] + 
		$mhs['nilai']['uts']['tugas'] +
		$mhs['nilai']['uts']['presensi']; 
 echo "<br>";
 echo "NILAI UAS : ";
 echo $mhs['nilai']['uas']['ujian'] + 
		$mhs['nilai']['uas']['tugas'] +
		$mhs['nilai']['uas']['presensi']; 
 echo "<br>";
 echo "NILAI AKHIR : ";
 echo ($mhs['nilai']['uts']['ujian'] + 
		$mhs['nilai']['uts']['tugas'] +
		$mhs['nilai']['uts']['presensi'] +
		$mhs['nilai']['uas']['ujian'] + 
		$mhs['nilai']['uas']['tugas'] +
		$mhs['nilai']['uas']['presensi'])/2; 
 
?>




