<?php
class sekolah
{
	var $nama_sekolah;
	var $kepala_sekolah;
	var $jurusan;
	var $guru;
	var $staf_guru;
	var $jumlah_kelas;
}
echo $r = new sekolah();
echo $r ->$nama_sekolah="wassallam";
echo "<br>";
echo $r ->$kepala_sekolah="Pak.gujud";
echo "<br>";
echo $r ->$jurusan=("RPL");
echo "<br>";
echo $r ->$guru=("pak.kusut");
echo "<br>";
echo $r ->$staf_guru=("administrasi");
echo "<br>";
echo $r ->$jumlah_kelas=200;
?>