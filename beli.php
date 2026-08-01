<?php
include "koneksi.php";

$id = $_GET['id_baju'] ?? 0;
$jumlah = $_GET['jumlah'] ?? 1;

// Ambil data barang dari database
$data = mysqli_query($koneksi, "SELECT * FROM tambahbrng WHERE id_baju='$id'");
$row = mysqli_fetch_assoc($data);

$harga = $row['harga'] ?? 0;
$total = $harga * $jumlah;

// Generate kode verifikasi otomatis
$kode = rand(100000, 999999);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pembelian Baju</title>
    <style>
        body {
            background: #0f0f0f;
            color: white;
            font-family: 'Segoe UI', sans-serif;
            padding: 20px;
        }
        h1 { text-align: center; }
        .container {
            display: flex;
            gap: 40px;
            margin-top: 20px;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }
        .box {
            flex: 1;
            background: #1a1a1a;
            padding: 20px;
            border-radius: 10px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px;
            border-radius: 6px;
            border: none;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background: linear-gradient(45deg, gold, orange);
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }
        button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
        #qrisBox {
            background: #222;
            padding: 10px;
            border-radius: 10px;
            margin-top: 10px;
        }
        .total {
            font-size: 18px;
            font-weight: bold;
            color: gold;
        }
        label {
            display: block;
            margin-top: 5px;
        }
    </style>
</head>
<body>
<h1>Form Pembelian Baju</h1>

<div class="container">
    <!-- KIRI: INFORMASI BARANG -->
    <div class="box">
        <h3>Identitas Baju</h3>
        
        <label>Nama:</label>
         <input type="text" name="nama_baju" value="<?php echo htmlspecialchars($row['nama_baju'] ?? $row['nama_baju'] ?? ''); ?>">

        <label><Jenis>
        <seri></seri>:</label>
         <input type="text" name="jenis_seri" value="<?php echo htmlspecialchars($row['jenis'] ?? $row['seri'] ?? ''); ?>">

        <label>Harga:</label>
          <input type="text" name="harga_input" value="Rp <?php echo number_format($harga, 0, ',', '.'); ?>">

        <label>Jumlah:</label>
        <input type="number" name="jumlah_input" value="<?php echo $jumlah; ?>">

        <label>Total:</label>
        <input class="total" value="Rp <?php echo number_format($total, 0, ',', '.'); ?>" readonly>
    </div>
    
    <!-- KANAN: FORM TRANSAKSI & PEMBELI -->
    <div class="box">
        <h3>Data Pembeli</h3>
        
        <form action="prosesbeli.php" method="post">
            <!-- PENTING: Gunakan name="id_skincare" -->
            <input type="hidden" name="id_baju" value="<?php echo $id; ?>">
            <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
            <input type="hidden" name="total" value="<?php echo $total; ?>">
            <input type="hidden" name="kode_verifikasi" value="<?php echo $kode; ?>">
            
            <label>No Faktur:</label>
            <input type="text" name="no_faktur" value="INV-<?php echo date('YmdHis'); ?>" required>
            
            <label>Tanggal:</label>
            <input type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>" required>
            
            <label>Nama:</label>
            <input type="text" name="nama_pembeli" placeholder="Masukkan nama..." required>
            
            <label>Alamat:</label>
            <input type="text" name="alamat" placeholder="Masukkan alamat..." required>
            
            <label>No KTP:</label>
            <input type="text" name="ktp" placeholder="Masukkan nomor KTP..." required>
            
            <!-- METODE PEMBAYARAN -->
            <label>Metode Pembayaran:</label>
            <select id="metode" name="metode" onchange="showPayment()" required>
                <option value="">Pilih Metode</option>
                <option value="transfer">Transfer Bank</option>
                <option value="wallet">Wallet</option>
                <option value="cod">COD</option>
            </select>
            
            <!-- TRANSFER BANK -->
            <div id="transferBox" style="display:none;">
                <label>Bank:</label>
                <select>
                    <option>BCA</option>
                    <option>BRI</option>
                    <option>BNI</option>
                </select>
            </div>
            
            <!-- EWALLET -->
            <div id="ewalletBox" style="display:none;">
                <label>E-Wallet:</label>
                <select>
                    <option>DANA</option>
                    <option>OVO</option>
                    <option>GoPay</option>
                </select>
            </div>
            
            <!-- QRIS -->
            <div id="qrisBox" style="display:none; text-align:center;">
                <h3>Scan QRIS</h3>
                <img src="Qrcode.png" width="180" alt="QRIS">
                <p>Total:</p>
                <b style="color:gold;">Rp <?php echo number_format($total, 0, ',', '.'); ?></b>
                <p>Kode Verifikasi:</p>
                <b style="color:lightgreen;"><?php echo $kode; ?></b>
            </div>
            
            <!-- INPUT KODE VERIFIKASI -->
            <div id="verifikasiBox" style="display:none;">
                <label>Masukkan Kode Verifikasi:</label>
                <input type="text" id="inputKode" onkeyup="cekKode()">
                <p id="statusBayar"></p>
            </div>
            
            <button type="submit" id="btnSubmit" disabled>
                Proses Pembelian
            </button>
        </form>
    </div>
</div>

<script>
    let kodeAsli = "<?php echo $kode; ?>";
    
    function showPayment() {
        let metode = document.getElementById("metode").value;
        
        document.getElementById("transferBox").style.display = "none";
        document.getElementById("ewalletBox").style.display = "none";
        document.getElementById("qrisBox").style.display = "none";
        document.getElementById("verifikasiBox").style.display = "none";
        document.getElementById("btnSubmit").disabled = true;
        document.getElementById("statusBayar").innerHTML = "";
        
        if (metode === "transfer") {
            document.getElementById("transferBox").style.display = "block";
            document.getElementById("qrisBox").style.display = "block";
            document.getElementById("verifikasiBox").style.display = "block";
        } else if (metode === "wallet") {
            document.getElementById("ewalletBox").style.display = "block";
            document.getElementById("qrisBox").style.display = "block";
            document.getElementById("verifikasiBox").style.display = "block";
        } else if (metode === "cod") {
            document.getElementById("btnSubmit").disabled = false;
        }
    }
    
    function cekKode() {
        let input = document.getElementById("inputKode").value;
        let status = document.getElementById("statusBayar");
        let btn = document.getElementById("btnSubmit");
        
        if (input === kodeAsli) {
            status.innerHTML = "✅ Pembayaran Berhasil";
            status.style.color = "lightgreen";
            btn.disabled = false;
        } else if (input.length > 0) {
            status.innerHTML = "❌ Kode Salah";
            status.style.color = "red";
            btn.disabled = true;
        } else {
            status.innerHTML = "";
            btn.disabled = true;
        }
    }
</script>

</body>
</html>