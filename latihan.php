<?php

require_once 'penjumlahan.php';

$penjumlahan1 = new penjumlahan;
$penjumlahan1->set_penjumlahan(300,30);
echo "|xxxxxx)=================================== >".'<br>';
echo "perhitungan bilangan 300 dengan bilangan 30 " .'<br>';
echo "|xxxxxx)=================================== >".'<br>';
echo "Hasil penjumlahan : " .$penjumlahan1->get_penjumlahan1().'<br>';
echo "Hasil pengurangan : " .$penjumlahan1->get_penjumlahan2().'<br>';
echo "Hasil perkalian : " .$penjumlahan1->get_penjumlahan3().'<br>';
echo "Hasil pembagian 	: " .$penjumlahan1->get_penjumlahan4().'<br>';
?>