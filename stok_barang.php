<?php
include "koneksi.php";

// Ambil data barang dari tabel tambahbrng
$result = mysqli_query($koneksi, "SELECT * FROM tambahbrng"); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Stok Barang</title>
    <style>
        body {
            background: #9cbded;
            color: white;
            font-family: 'Segoe UI', sans-serif;
            padding: 20px;
            margin: 0;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .container-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: stretch; /* Membuat tinggi semua card sama */
            gap: 20px;
        }

        .card {
            background: #1a1a1a;
            border-radius: 15px;
            width: 240px;
            padding: 15px;
            text-align: center;
            transition: 0.3s;
            box-shadow: 0 0 10px rgba(255,255,255,0.05);
            box-sizing: border-box;
            
            /* PENTING: Membuat layout card fleksibel dari atas ke bawah */
            display: flex;
            flex-direction: column;
            justify-content: space-between; 
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 20px rgba(255,215,0,0.3);
        }

        .card-img-container {
            width: 100%;
            height: 180px;
            background: #252525;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .price {
            color: gold;
            font-size: 18px;
            font-weight: bold;
            margin: 5px 0;
        }

        .deskripsi {
            font-size: 12px;
            color: #ccc;
            margin: 8px 0;
            line-height: 1.4;
            /* Membatasi teks deskripsi max 3 baris agar rapi */
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .qty-box {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }

        .qty-box button {
            width: 32px;
            height: 32px;
            border: none;
            background: gold;
            color: black;
            font-weight: bold;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        .qty-box input {
            width: 45px;
            text-align: center;
            margin: 0 6px;
            padding: 4px;
            border-radius: 6px;
            border: none;
            font-weight: bold;
            background: #fff;
            color: #000;
        }

        .buy-btn {
            padding: 10px;
            width: 100%;
            border: none;
            background: linear-gradient(45deg, gold, orange);
            color: black;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        .buy-btn:hover {
            opacity: 0.9;
        }
    </style>

    <script>
        function tambah(id) {
            let qty = document.getElementById('qty_' + id);
            if (qty) {
                qty.value = parseInt(qty.value) + 1;
            }
        }

        function kurang(id) {
            let qty = document.getElementById('qty_' + id);
            if (qty && parseInt(qty.value) > 1) {
                qty.value = parseInt(qty.value) - 1;
            }
        }

        function setQty(id) {
            let val = document.getElementById('qty_' + id).value;
            document.getElementById('buy_qty_' + id).value = val;
        }
    </script>
</head>
<body>

    <h2>Selamat Datang</h2>
    <h2>Selamat Berbelanja di Toko Kami</h2>

    <div class="container-cards">
        <?php 
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) { 
            // Ambil ID Unik Produk
            $id_produk = $row['id_barang'] ?? $row['id_brg'] ?? $row['id'] ?? $no;
            
            // Ambil Nama Foto dari database (Pengecekan path uploads vs link langsung)
            $foto = $row['foto'] ?? '';
            if (strpos($foto, 'http') === 0 || strpos($foto, 'data:') === 0) {
                $src_gambar = $foto;
            } else {
                $src_gambar = "upload/" . $foto;
            }
        ?>
            <div class="card">
                <!-- BAGIAN ATAS (Gambar & Info Produk) -->
                <div>
                    <div class="card-img-container">
                        <img src="<?php echo htmlspecialchars($src_gambar); ?>" alt="Foto Produk" onerror="this.onerror=null; this.src='https://via.placeholder.com/240x180?text=No+Image';">
                    </div>

                    <div class="price">
                        Rp <?php echo number_format($row['harga'] ?? 0, 0, ',', '.'); ?>
                    </div>
                    
                    <b><?php echo htmlspecialchars($row['nama_barang'] ?? $row['nama'] ?? $row['seri'] ?? ''); ?></b><br>
                    <small style="color: #aaa;"><?php echo htmlspecialchars($row['seri'] ?? ''); ?></small>
                    
                    <p class="deskripsi">
                        <?php echo htmlspecialchars($row['deskripsi'] ?? ''); ?>
                    </p>
                </div>

                <!-- BAGIAN BAWAH (Tombol Qty & Beli - Selalu Sejajar) -->
                <div>
                    <div class="qty-box">
                        <button type="button" onclick="kurang('<?php echo $id_produk; ?>')">-</button>
                        <input type="number" id="qty_<?php echo $id_produk; ?>" value="1" min="1" readonly>
                        <button type="button" onclick="tambah('<?php echo $id_produk; ?>')">+</button>
                    </div>

                    <form action="beli.php" method="get">
                        <input type="hidden" name="id_barang" value="<?php echo $id_produk; ?>">
                        <input type="hidden" name="jumlah" id="buy_qty_<?php echo $id_produk; ?>" value="1">
                        
                        <button class="buy-btn" type="submit" onclick="setQty('<?php echo $id_produk; ?>')">
                            Beli Sekarang
                        </button>
                    </form>
                </div>
            </div>
        <?php 
            $no++;
        } 
        ?>
    </div>

</body>
</html>