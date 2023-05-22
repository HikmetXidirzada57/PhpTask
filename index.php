<?php

function yeniAd($ad) {
    $dosya = 'adlar.txt';
    $icerik = file_get_contents($dosya);
    $adlar = explode("\n", $icerik);
    $adlar[] = $ad;
    natcasesort($adlar); // Alfabetik sıraya göre sıralama

    // Dosyayı güncelleme
    file_put_contents($dosya, implode("\n", $adlar));

    // Eklenen adın bulunduğu satırı bulma
    $sira = array_search($ad, $adlar) + 1;

    return $sira;
}

// Örnek kullanım
$yeniAdSira = yeniAd('Emma');
echo 'Yeni eklenen adın sırası: ' . $yeniAdSira;

?>

