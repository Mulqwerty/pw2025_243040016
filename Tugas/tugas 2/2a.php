<?php
$nama_depan = "Azriel";
$nama_belakang = "Hakim";
$nama_lengkap = "Azriel Mulqie Hakim";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $nama_lengkap . "<br>";
    } elseif ($i % 3 == 0) {
        echo $nama_depan . "<br>";
    } elseif ($i % 5 == 0) {
        echo $nama_belakang . "<br>";
    } else {
        echo $i . "<br>";
    }
}
?>
