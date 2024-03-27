<?php
require_once('class_lingkaran.php');
echo "Nilai PHI: " . Lingkaran::PHI;

// instansiasi object Lingkaran
$Lingkar1 = new Lingkaran(20);
$Lingkar2 = new Lingkaran(8);

echo "<br> Luas Lingkaran 1: " . $Lingkar1->getLuas();
echo "<br> Luas Lingkaran 2: " . $Lingkar2->getLuas();

echo "<br>";

echo "<br> Luas Lingkaran 1: " . $Lingkar1->getKeliling();
echo "<br> Luas Lingkaran 2: " . $Lingkar2->getKeliling();