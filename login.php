
<?php
session_start();
$kode = $_POST['kode'];

// Simulasi kode login per siswa (bisa diganti dengan database)
$daftar_siswa = [
    "ABC123" => "siswa1.jpg",
    "DEF456" => "siswa2.jpg",
    "GHI789" => "siswa3.jpg"
];

if (array_key_exists($kode, $daftar_siswa)) {
    $_SESSION['login'] = true;
    $_SESSION['kode'] = $kode;
    $_SESSION['file'] = $daftar_siswa[$kode];
    header("Location: dashboard.php");
} else {
    echo "Kode tidak ditemukan!";
}
?>
