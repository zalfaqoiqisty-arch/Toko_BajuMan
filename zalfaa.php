<html>
<head>
    <title>Toko Aksara Renjana</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%; 
            background-color: #97bffc; /* Membuat background seluruh website menjadi gelap/hitam */
            color: white;
            font-family: 'Segoe UI', sans-serif;
        }
        table {
             width: 100%;
             height: 100%;
             border-collapse: collapse;
        }
        th, td {
             border: 1px solid #292c54; /* Warna garis border disesuaikan agar rapi di tema gelap */
             text-align: center;
        }
        
        /* Mengatur lebar kolom */
        th.kecil, td.kecil {
            width: 100px;
        }
        
        /* Mengatur tinggi baris */
        tr.baris1 td {
            height: 5%; 
        }

        tr.baris2 td {
            height: 15%; 
        }

        tr.baris3 td {
            height: 80%; 
        }

        /* Layout teks kiri-kanan di dalam sel */
        .cell-flex {
            display: flex;
            justify-content: space-between; /* pisahkan kiri & kanan */
            align-items: center; /* vertikal tengah */
            height: 100%;
            padding: 0 15px;
        }

        /* Bungkus teks kiri dan kanan */
        .left-text, .right-text, .left-tekt {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        /* Styling Menu Navigasi */
        .menu a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
        }
        .menu a:hover {
            color: gold;
        }
    </style>
</head>
<body>

<?php

echo "<table border='1'>";
echo "<tr class='baris1'> 
        <th class='kecil'>
            <div class='cell-flex'>
                <div class='left-text'>
                    <span><b>TOKO BAJU COWOK KEKINIAN</b></span>
                </div>
                <div class='right-text'>
                    <span>TLP +62897743586 | Mail: Renjanastudio@gmail.com</span>
                </div>
            </div>
        </th>
      </tr>";
	  
echo "<tr class='baris2'>
        <td class='kecil'>
            <div class='cell-flex'>
                <!-- kiri: logo + nama -->
                <div class='left-tekt' style='display:flex; align-items:center; gap:10px;'>
                    <img src='logob0.JPEG' alt='logo' width='80' height='80'>
                    <span><b>TOKO BAJU COWOK KEKINIAN</b></span>
                </div>

                <!-- tengah: menu -->
                <div class='menu'>
                    <a href='home.php'>Home</a> |
                    <a href='Profil.php'>Profil</a> |
                    <a href='stok_barang.php'>Stok Barang</a> |
                    <a href='tambah.php'>Tambah Penjualan</a> |
                    <a href='kontak.php'>Kontak</a>
                </div>
				
                <!-- kanan: search -->
                <div class='search'>
                    <form action='cari.php' method='get'>
                        <input type='text' name='q' placeholder='Cari...'>
                        <input type='submit' value='Cari'>
                    </form>
                </div>
            </div>
        </td>
      </tr>";
	  
echo "<tr class='baris3'>
        <td class='kecil' colspan='3'>
            <div class='row-cards' style='display:flex; justify-content:space-around; gap:20px; padding:20px;'>
		   
                <!-- Card 1 -->
                <div class='card' style='background:#111; color:white; width:30%; padding:15px; text-align:center; border-radius:10px;'>
                    <img src='baju8.JPEG' alt='Starcross' style='width:100%; height:auto; border-radius:5px;'>
                    <h2>179.000,00 <small style='color:gold;'>/188.000,00</small></h2>
                    <h3>Starcross</h3>
                    <p>★ ★ ★ ★ ★</p>
                    <p>Code baju: Flying Astronaut</p>
                    <p>Color: Black</p>
                    <p>Material: Cotton Combed 30s</p>
                    <p>Size: All Size</p>
                    <a href='beli.php'>
                        <button style='margin-top:10px; padding:8px 15px; border:1px solid gold; background:none; color:white; cursor:pointer;'>BELI</button>
                    </a>
                </div>
			  
                <!-- Card 2 -->
                <div class='card' style='background:#111; color:white; width:30%; padding:15px; text-align:center; border-radius:10px;'>
                    <img src='baju6.JPEG' alt='Aerostreet' style='width:100%; height:auto; border-radius:5px;'>
                    <h2>69.000,00 <small style='color:gold;'>/139.000,00</small></h2>
                    <h3>Aerostreet</h3>
                    <p>★ ★ ★ ★ ★</p>
                    <p>Code: Arvid Navy</p>
                    <p>Color: Navy</p>
                    <p>Material: Katun Combed 24s</p>
                    <p>Size: All Size</p>
                    <a href='beli.php'>
                        <button style='margin-top:10px; padding:8px 15px; border:1px solid gold; background:none; color:white; cursor:pointer;'>BELI</button>
                    </a>
                </div>
			  
                <!-- Card 3 -->
                <div class='card' style='background:#111; color:white; width:30%; padding:15px; text-align:center; border-radius:10px;'>
                    <img src='baju9.JPEG' alt='Rucas' style='width:100%; height:auto; border-radius:5px;'>
                    <h2>199.000,00 <small style='color:gold;'>/250.000,00</small></h2>
                    <h3>Rucas</h3>
                    <p>★ ★ ★ ★ ★</p>
                    <p>Code: Stitch Monogram Skeleton</p>
                    <p>Color: Grey</p>
                    <p>Material: Cotton</p>
                    <p>Size: All Size</p>
                    <a href='beli.php'> 
                        <button style='margin-top:10px; padding:8px 15px; border:1px solid gold; background:none; color:white; cursor:pointer;'>BELI</button>
                    </a>
                </div>

            </div>
        </td>
      </tr>";
echo "</table>";
?>

</body>
</html>