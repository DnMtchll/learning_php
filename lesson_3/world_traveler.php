<?php
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;
echo "To start, you had $riel riel, $kyat kyat, $krones krones and $lek lek. ";

$riel_to_usd = 0.00025;
$kyat_to_usd = 0.00054;
$krones_to_usd = 0.098;
$lek_to_usd = 0.0087;

$usd_from_riel = $riel * $riel_to_usd;
$usd_from_kyat = $kyat * $kyat_to_usd;
$usd_from_krones = $krones * $krones_to_usd;
$usd_from_lek = $lek * $lek_to_usd;

echo "\nYour riel exchanged for $usd_from_riel dollars";
echo "\nYour kyat exchanged for $usd_from_kyat dollars";
echo "\nYour krones exchanged for $usd_from_krones dollars";
echo "\nYour leks exchanged for $usd_from_lek dollars";

$money_left_over = $usd_from_riel + $usd_from_kyat + $usd_from_krones + $usd_from_lek -4;

echo "\n the money you have left over adds up to $money_left_over dollars";





