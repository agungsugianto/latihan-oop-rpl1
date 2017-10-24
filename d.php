<?php
class buku
{
  var $judul_buku;
  var $pengarang;
  var $penerbit;
  var $harga;
}
$buku_hamba = new buku();
$buku_hamba ->judul_buku = "sangkuriang";
$buku_hamba ->pengarang ="Djadjang Nur Jaman";
$buku_hamba ->penerbit = "sidu";
$buku_hamba ->harga ="1000.000.000";

echo $buku_hamba->judul_buku;
echo "<br>";
echo $buku_hamba->pengarang;
echo "<br>";
echo $buku_hamba->penerbit;
echo "<br>";
echo $buku_hamba->harga;
echo "<br>";
?>