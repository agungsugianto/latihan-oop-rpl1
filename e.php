<?php
class orang
{
	var $nama_depan;
	var $nama_belakang ='ezezhul';
	var $umur =12;
	var $jenis_kelamin =array("akhi","ukhti");
}
?>
<!DOCTYPE html>
<html lang ="id">
<head>
	<title></title>
</head>
<body>
<?php
$student = new orang;
$student->nama_depan ="dejul";
$student->nama_belakang;
echo "Nama Lengkap :" .$student->nama_depan ." ".$student->nama_belakang."<br>";
echo "umur 		   :".$student->umur."tahun <br>";
echo "jenis_kelamin: ".$student->jenis_kelamin[0]."<br>";;?>333.0000