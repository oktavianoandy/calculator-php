<?php 

function jumlah($a, $b)
{
    return ($a + $b);
}

function kurang($a, $b)
{
    return ($a - $b);
}

function perkalian($a, $b)
{
    return ($a * $b);
}

function pembagian($a, $b)
{
    return ($a / $b);
}

echo 'Penjumlahan 2 + 3 : ' . jumlah(2,3) . '<br>';
echo 'Pengurangan 3 - 2 : ' . kurang(3,2) . '<br>';
echo 'Perkalian 2 * 3 : ' . perkalian(2,3) . '<br>';
echo 'Pembagian 3 / 3 : ' . pembagian(3,3) . '<br>';

?>