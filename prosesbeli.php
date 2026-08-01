<?php
include "koneksi.php";

// Ambil data dari form POST atau GET
$no_faktur = $_POST['no_faktur'] ?? "202607310001";
$tanggal   = $_POST['tanggal'] ?? date('d-m-Y');
$nama      = $_POST['nama_pembeli'] ?? $_POST['nama'] ?? 'Pelanggan';
$alamat    = $_POST['alamat'] ?? '-';
$ktp       = $_POST['ktp'] ?? '-';
$id        = $_POST['id_baju'] ?? $_POST['id_barang'] ?? $_GET['id_baju'] ?? '';
$jumlah    = (int)($_POST['jumlah'] ?? 1);
$total     = (float)($_POST['total'] ?? 0);

if ($jumlah <= 0) $jumlah = 1;

// 1. Ambil data produk berdasarkan ID
$row = null;
if (!empty($id)) {
    $stmt = $koneksi->prepare("SELECT * FROM tambahbrng WHERE id_baju = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
}

// Fallback jika ID tidak terdeteksi
if (!$row) {
    $queryFallback = mysqli_query($koneksi, "SELECT * FROM tambahbrng LIMIT 1");
    if ($queryFallback && mysqli_num_rows($queryFallback) > 0) {
        $row = mysqli_fetch_assoc($queryFallback);
        $id  = $row['id_baju'];
    }
}

// Perhitungan Harga, Total, Tunai, dan Kembalian
$harga   = (float)($row['harga'] ?? 0);
if ($total == 0) {
    $total = $harga * $jumlah;
}
$diskon  = 0;
$pajak   = 0;
$grand_total = $total - $diskon + $pajak;
$tunai   = $_POST['tunai'] ?? $grand_total; 
$kembali = $tunai - $grand_total;

// 2. Simpan transaksi ke database
if ($row && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $queryInsert = "INSERT INTO tabel_transaksi (no_faktur, tanggal, nama_pembeli, alamat, ktp, id_baju, jumlah, total) 
                    VALUES ('$no_faktur', '$tanggal', '$nama', '$alamat', '$ktp', '$id', '$jumlah', '$total')";
    @mysqli_query($koneksi, $queryInsert);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembelian - TOKO BAJU KEKINIAN</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #eef2f5;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            color: #000;
        }
        .receipt-box {
            width: 320px;
            background: #fff;
            padding: 20px 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            font-size: 13px;
        }
        .header {
            text-align: center;
            margin-bottom: 15px;
        }
        .header h3 {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 3px;
        }
        .header p {
            font-size: 12px;
            line-height: 1.3;
        }
        .info-table, .calc-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }
        .info-table td {
            padding: 2px 0;
            vertical-align: top;
        }
        .info-table td.label {
            width: 90px;
        }
        .divider-double {
            border-top: 2px dashed #000;
            margin: 8px 0;
        }
        .divider-single {
            border-top: 1px dashed #000;
            margin: 8px 0;
        }
        .item-row {
            margin: 5px 0;
        }
        .item-name {
            font-weight: normal;
        }
        .item-details {
            display: flex;
            justify-content: space-between;
            padding-left: 15px;
        }
        .calc-table td {
            padding: 2px 0;
            text-align: right;
        }
        .calc-table td.label {
            text-align: right;
            padding-right: 10px;
        }
        .bold {
            font-weight: bold;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            margin-top: 15px;
            line-height: 1.4;
        }
        .btn-container {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }
        .btn {
            border: none;
            padding: 8px 16px;
            font-size: 13px;
            font-family: sans-serif;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
        }
        .btn-print {
            background-color: #2563eb;
            color: white;
        }
        .btn-home {
            background-color: #4b5563;
            color: white;
        }
        @media print {
            body { background: none; padding: 0; }
            .receipt-box { box-shadow: none; width: 100%; padding: 0; }
            .btn-container { display: none; }
        }
    </style>
</head>
<body>

<div class="receipt-box">
    <!-- HEADER -->
    <div class="header">
        <h3>TOKO BAJU COWOK KEKKINIAN</h3>
        <p>Jl. Soekarno-Hatta No. 123, Jakarta Selatan</p>
        <p>0812-3333-000</p>
    </div>

    <!-- INFORMASI TRANSAKSI -->
    <table class="info-table">
        <tr>
            <td class="label">Tanggal</td>
            <td>: <?php echo htmlspecialchars($tanggal); ?></td>
        </tr>
        <tr>
            <td class="label">Transaksi</td>
            <td>: <?php echo htmlspecialchars($no_faktur); ?></td>
        </tr>
        <tr>
            <td class="label">Operator</td>
            <td>: admin(Administrator)</td>
        </tr>
        <tr>
            <td class="label">Pelanggan</td>
            <td>: <?php echo htmlspecialchars($nama); ?></td>
        </tr>
    </table>

    <div class="divider-double"></div>

    <!-- DAFTAR BARANG -->
    <?php if ($row): ?>
        <div class="item-row">
            <div class="item-name"><?php echo htmlspecialchars($id); ?> <?php echo htmlspecialchars($row['nama_baju']); ?></div>
            <div class="item-details">
                <span><?php echo $jumlah; ?> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo number_format($harga, 0, ',', '.'); ?> / PCS</span>
                <span><?php echo number_format($total, 0, ',', '.'); ?></span>
            </div>
        </div>

        <div class="divider-double"></div>

        <!-- RINCIAN PEMBAYARAN -->
        <table class="calc-table">
            <tr>
                <td style="text-align: left;"><?php echo $jumlah; ?> item.</td>
                <td class="label">TOTAL :</td>
                <td style="width: 80px;"><?php echo number_format($total, 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td></td>
                <td class="label">DISKON :</td>
                <td><?php echo number_format($diskon, 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td></td>
                <td class="label">PAJAK (PPn) :</td>
                <td><?php echo number_format($pajak, 0, ',', '.'); ?></td>
            </tr>
            <tr class="bold">
                <td></td>
                <td class="label">GRAND TOTAL :</td>
                <td><?php echo number_format($grand_total, 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td></td>
                <td class="label">TUNAI :</td>
                <td><?php echo number_format($tunai, 0, ',', '.'); ?></td>
            </tr>
        </table>

        <div class="divider-single" style="width: 50%; float: right;"></div>
        <div style="clear: both;"></div>

        <table class="calc-table">
            <tr class="bold">
                <td style="width: 50%;"></td>
                <td class="label">KEMBALI :</td>
                <td style="width: 80px;"><?php echo number_format($kembali, 0, ',', '.'); ?></td>
            </tr>
        </table>

        <div class="divider-single" style="margin-top: 15px;"></div>

        <!-- FOOTER BARU -->
        <div class="footer">
            <p>Terima kasih atas kunjungan anda</p>
            <p>Semoga anda puas dengan layanan kami</p>
            <p style="margin-top: 5px;">barang yang sudah di beli tidak dapat di kembalikan lagi</p>
        </div>
    <?php else: ?>
        <div style="text-align: center; color: red; padding: 10px 0;">
            Data produk tidak ditemukan.
        </div>
    <?php endif; ?>
</div>

<div class="btn-container">
    <button class="btn btn-print" onclick="window.print()">Cetak Struk</button>
    <a href="home.php" class="btn btn-home">Kembali</a>
</div>

</body>
</html>