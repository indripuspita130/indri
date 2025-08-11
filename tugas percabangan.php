<?php
$saldo = 50000; // saldo saat ini (bisa kamu ubah sesuai kondisi)
$tarik = 30000; // jumlah yang ingin ditarik

if ($tarik > $saldo) {
    echo "Penarikan gagal: Saldo tidak mencukupi.<br>";
} elseif ($tarik > 0 && $tarik <= $saldo) {
    $saldo -= $tarik;
    echo "Penarikan berhasil: Anda menarik Rp $tarik. Sisa saldo: Rp $saldo.<br>";
} else {
    echo "Penarikan gagal: Jumlah penarikan tidak valid.<br>";
}
?>