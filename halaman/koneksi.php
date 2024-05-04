<?php
// Mengambil data dari formulir
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$nomor_identitas = $_POST['nomor_identitas'];
$fakultas_jurusan = $_POST['fakultas_jurusan'];
$tahun_masuk = $_POST['tahun_masuk'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// Koneksi ke database
$servername = "localhost"; // Ganti dengan nama server database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "my_database.php"; // Ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query SQL untuk menyimpan data ke dalam tabel mahasiswa
$sql = "INSERT INTO mahasiswa (nama, nim, nomor_identitas, fakultas_jurusan, tahun_masuk, tempat_lahir, tanggal_lahir, jenis_kelamin) 
        VALUES ('$nama', '$nim', '$nomor_identitas', '$fakultas_jurusan', '$tahun_masuk', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin')";

if ($conn->query($sql) === TRUE) {
    echo "Registrasi berhasil. Data mahasiswa telah disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
