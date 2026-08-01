<?php
include "koneksi.php";

// Ambil data dari form
$seri        = $_POST['seri'];
$nama_barang = $_POST['nama_barang'];
$jenis       = $_POST['jenis'];
$harga       = $_POST['harga'];
$deskripsi   = $_POST['deskripsi'];

// Proses upload foto
$foto   = $_FILES['foto']['name'];
$tmp    = $_FILES['foto']['tmp_name'];
$folder = "uploads/";

// Pastikan folder "uploads" sudah dibuat di direktori websitemu
if (move_uploaded_file($tmp, "upload/" . $foto)) {
    
    // Simpan ke database sesuai nama tabel di phpMyAdmin (tambahbrng)
    $sql = "INSERT INTO tambahbrng (seri, nama_baju, jenis, harga, deskripsi, foto) VALUES ('$seri', '$nama_barang', '$jenis', '$harga', '$deskripsi', '$foto')";
    
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='stok_barang.php';</script>";
    } else {
        echo "Gagal menyimpan data ke database: " . mysqli_error($koneksi);
    }

} else {
    echo "Upload foto gagal! Pastikan folder 'uploads' sudah dibuat.";
}
?>