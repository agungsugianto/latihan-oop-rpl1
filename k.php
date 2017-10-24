<?php

require_once 'what.php';

$orang1 = new orang ('Paulo dybala','Argentina Kulon','International','Menikah','17','Pemain Sepakbola');

//$robot1->set_suara('ariz kasepak kuda');
//$robot1->set_berat(120);


echo "Namanya : " .$orang1->get_nama().'<br>';
echo "Tempat lahir : " .$orang1->get_lahir().'<br>';
echo "Kelas : " .$orang1->get_kelas().'<br>';
echo "Status : " .$orang1->get_status().'<br>';
echo "Mempunyai istri : " .$orang1->get_istri().'<br>';
echo "Career : " .$orang1->get_pekerjaan().'<br>'.'<br>';

$orang2 = new orang ('Kim Sugianto','Kp.Pasawahan','International','Menikah','1 aja','Pemain Sepakbola');
echo "Namanya : " .$orang2->get_nama().'<br>';
echo "Tempat lahir : " .$orang2->get_lahir().'<br>';
echo "Kelas : " .$orang2->get_kelas().'<br>';
echo "Status : " .$orang2->get_status().'<br>';
echo "Mempunyai istri : " .$orang2->get_istri().'<br>';
echo "Career : " .$orang2->get_pekerjaan().'<br>'.'<br>';

$orang3 = new orang ('Egi Maulana Vikri','Medan','International','Alone','tidak','Pemain Sepakbola Di Real Madrid');
echo "Namanya : " .$orang3->get_nama().'<br>';
echo "Tempat lahir : " .$orang3->get_lahir().'<br>';
echo "Kelas : " .$orang3->get_kelas().'<br>';
echo "Status : " .$orang3->get_status().'<br>';
echo "Mempunyai istri : " .$orang3->get_istri().'<br>';
echo "Career : " .$orang3->get_pekerjaan().'<br>';
?>