<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Toko Baju Cowok Kekinian</title>
    <!-- Google Font & FontAwesome Icon -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-color: #eef6ff; /* Latar luar biru soft pastel */
            color: #334155;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding: 24px 0;
        }

        /* Container Utama Pas untuk Layar Laptop */
        .laptop-container {
            background-color: #ffffff;
            width: 92%;
            max-width: 1180px; /* Ukuran standar kontainer laptop */
            border-radius: 20px;
            box-shadow: 0 12px 32px rgba(2, 132, 199, 0.08);
            padding: 28px 36px;
            border: 1px solid rgba(186, 230, 253, 0.5);
        }

        /* Header Navigation */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 28px;
            padding-bottom: 16px;
            border-bottom: 1px solid #f1f5f9;
        }

        .brand-logo {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 18px;
            font-weight: 800;
            color: #0f172a;
        }

        .brand-logo i {
            color: #0284c7;
            font-size: 20px;
        }

        .brand-logo span {
            color: #64748b;
            font-weight: 500;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
            font-size: 12px;
            color: #64748b;
        }

        .contact-info {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .contact-info i {
            color: #0284c7;
        }

        .auth-buttons {
            display: flex;
            gap: 8px;
        }

        .btn-daftar {
            padding: 7px 16px;
            border: 1px solid #bae6fd;
            background-color: #f0f9ff;
            color: #0284c7;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            font-size: 12px;
            transition: all 0.2s;
        }

        .btn-daftar:hover {
            background-color: #e0f2fe;
        }

        .btn-masuk {
            padding: 7px 18px;
            background-color: #0284c7;
            color: #ffffff;
            font-weight: 600;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            font-size: 12px;
            transition: all 0.2s;
            box-shadow: 0 4px 10px rgba(2, 132, 199, 0.2);
        }

        .btn-masuk:hover {
            background-color: #0369a1;
        }

        /* Hero Banner Section (Kompak Laptop) */
        .hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            padding: 24px 32px;
            border-radius: 16px;
            margin-bottom: 32px;
            border: 1px solid #bae6fd;
        }

        .hero-text {
            flex: 1.2;
        }

        .badge-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background-color: #ffffff;
            color: #0284c7;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 12px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
        }

        .hero-title {
            font-size: 26px;
            font-weight: 800;
            line-height: 1.3;
            color: #0f172a;
            margin-bottom: 10px;
        }

        .hero-title span {
            color: #0284c7;
        }

        .hero-desc {
            font-size: 12px;
            color: #475569;
            line-height: 1.6;
            margin-bottom: 18px;
            max-width: 440px;
        }

        .hero-actions {
            display: flex;
            gap: 10px;
        }

        .btn-primary {
            padding: 9px 20px;
            background-color: #0284c7;
            color: #ffffff;
            font-weight: 600;
            font-size: 12px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.2s;
            box-shadow: 0 4px 12px rgba(2, 132, 199, 0.2);
        }

        .btn-primary:hover {
            background-color: #0369a1;
        }

        .btn-secondary {
            padding: 9px 20px;
            background-color: #ffffff;
            border: 1px solid #cbd5e1;
            color: #475569;
            font-weight: 600;
            font-size: 12px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.2s;
        }

        .btn-secondary:hover {
            border-color: #0284c7;
            color: #0284c7;
        }

        .hero-image {
            flex: 0.9;
            display: flex;
            justify-content: flex-end;
        }

        .hero-image img {
            width: 100%;
            max-width: 320px;
            height: 180px;
            border-radius: 12px;
            object-fit: cover;
            box-shadow: 0 8px 16px rgba(0,0,0,0.06);
        }

        /* Section Title */
        .section-header {
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 700;
            color: #0f172a;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .section-subtitle {
            font-size: 11px;
            color: #64748b;
            margin-top: 2px;
        }

        /* Product Grid Laptop (3 Kolom Presisi) */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 32px;
        }

        .product-card {
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 14px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.25s;
        }

        .product-card:hover {
            border-color: #38bdf8;
            box-shadow: 0 8px 20px rgba(56, 189, 248, 0.15);
            transform: translateY(-3px);
        }

        .product-img-box {
            background-color: #f8fafc;
            border-radius: 10px;
            height: 180px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 12px;
            overflow: hidden;
        }

        .product-img-box img {
            max-width: 85%;
            max-height: 85%;
            object-fit: contain;
        }

        .product-price-row {
            margin-bottom: 4px;
        }

        .price-main {
            font-size: 15px;
            font-weight: 800;
            color: #0f172a;
        }

        .price-unit {
            font-size: 11px;
            color: #94a3b8;
            font-weight: 400;
        }

        .product-name {
            font-size: 13px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 4px;
        }

        .product-desc {
            font-size: 11px;
            color: #64748b;
            line-height: 1.4;
            margin-bottom: 14px;
            height: 30px;
            overflow: hidden;
        }

        .product-action-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 11px;
            background: #f1f5f9;
            padding: 4px 8px;
            border-radius: 6px;
        }

        .qty-btn {
            color: #475569;
            cursor: pointer;
            font-weight: 700;
            user-select: none;
        }

        .qty-num {
            font-weight: 600;
            color: #0f172a;
        }

        .btn-buy {
            padding: 7px 14px;
            background-color: #0284c7;
            color: #ffffff;
            font-size: 11px;
            font-weight: 600;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-buy:hover {
            background-color: #0369a1;
        }

        /* Footer Info Bar */
        .footer-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 18px;
            border-top: 1px solid #f1f5f9;
            font-size: 11px;
            color: #64748b;
        }

        .footer-socials {
            display: flex;
            gap: 12px;
            font-size: 13px;
        }

        .footer-socials a {
            color: #64748b;
            transition: color 0.2s;
        }

        .footer-socials a:hover {
            color: #0284c7;
        }
    </style>
</head>
<body>

    <div class="laptop-container">
        <!-- Header -->
        <header>
            <div class="brand-logo">
                <i class="fa-solid fa-shirt"></i>
                TOKO <span>BAJU</span>
            </div>
            
            <div class="header-right">
                <div class="contact-info">
                    <i class="fa-solid fa-phone"></i> +62 867 5673 653431
                </div>
                <div class="contact-info">
                    <i class="fa-solid fa-envelope"></i> Renjanastudio@gmail.com
                </div>
                <div class="auth-buttons">
                    <a href="kontak.php" class="btn-daftar">kontak</a>
                    <a href="profil.php" class="btn-masuk">profil</a>
                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-text">
                <div class="badge-pill">
                    ✨ Toko Baju Cowok Kekinian
                </div>
                <h1 class="hero-title">
                    Gaya <span>Kekinian</span> untuk<br>Pria Modern
                </h1>
                <p class="hero-desc">
                    Temukan koleksi fashion pria terbaru dengan kualitas premium. Dari kaos hingga polo shirt, semua ada di sini.
                </p>
                <div class="hero-actions">
                    <a href="#" class="btn-primary">Mulai Belanja</a>
                    <a href="#" class="btn-secondary">Lihat Koleksi</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="baju54.jpg" alt="Banner Utama">
            </div>
        </section>

        <!-- Section Produk Unggulan -->
        <section>
            <div class="section-header">
                <div class="section-title">
                    🔥 Produk Unggulan
                </div>
                <div class="section-subtitle">
                    Koleksi terbaik untuk gaya kekinianmu
                </div>
            </div>

            <div class="product-grid">
                <!-- Produk 1 -->
                <div class="product-card">
                    <div class="product-img-box">
                        <img src="baju8.jpeg" alt="Starcross">
                    </div>
                    <div>
                        <div class="product-price-row">
                            <span class="price-main">Rp 179.000</span> <span class="price-unit">/ kaos</span>
                        </div>
                        <div class="product-name">Starcross</div>
                        <div class="product-desc">
                            Kaos dengan desain simpel namun keren, berbahan katun yang adem dan nyaman...
                        </div>
                    </div>
                    <div class="product-action-row">
                        <div class="quantity-control">
                            <span class="qty-btn">-</span>
                            <span class="qty-num">1</span>
                            <span class="qty-btn">+</span>
                        </div>
                        <button class="btn-buy">Beli Sekarang</button>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div class="product-card">
                    <div class="product-img-box">
                        <img src="baju6.jpeg" alt="Aerostreet">
                    </div>
                    <div>
                        <div class="product-price-row">
                            <span class="price-main">Rp 139.000</span> <span class="price-unit">/ kaos</span>
                        </div>
                        <div class="product-name">Aerostreet</div>
                        <div class="product-desc">
                            Kaos ini cocok untuk aktivitas sehari-hari, nongkrong, sekolah, atau jalan santai...
                        </div>
                    </div>
                    <div class="product-action-row">
                        <div class="quantity-control">
                            <span class="qty-btn">-</span>
                            <span class="qty-num">1</span>
                            <span class="qty-btn">+</span>
                        </div>
                        <button class="btn-buy">Beli Sekarang</button>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div class="product-card">
                    <div class="product-img-box">
                        <img src="baju9.jpeg" alt="Rucas">
                    </div>
                    <div>
                        <div class="product-price-row">
                            <span class="price-main">Rp 199.000</span> <span class="price-unit">/ kaos</span>
                        </div>
                        <div class="product-name">Rucas</div>
                        <div class="product-desc">
                            Jabatan monogram yang membuat tampilannya lebih standout. Desainnya memberi...
                        </div>
                    </div>
                    <div class="product-action-row">
                        <div class="quantity-control">
                            <span class="qty-btn">-</span>
                            <span class="qty-num">1</span>
                            <span class="qty-btn">+</span>
                        </div>
                        <button class="btn-buy">Beli Sekarang</button>
                    </div>
                </div>

                <!-- Produk 4 -->
                <div class="product-card">
                    <div class="product-img-box">
                        <img src="baju19.jpg" alt="Way Indonesia">
                    </div>
                    <div>
                        <div class="product-price-row">
                            <span class="price-main">Rp 120.000</span> <span class="price-unit">/ kaos</span>
                        </div>
                        <div class="product-name">Way Indonesia</div>
                        <div class="product-desc">
                            Desainnya sangat simpel dan kasual. Memiliki kerah lipat standar dengan kancing...
                        </div>
                    </div>
                    <div class="product-action-row">
                        <div class="quantity-control">
                            <span class="qty-btn">-</span>
                            <span class="qty-num">1</span>
                            <span class="qty-btn">+</span>
                        </div>
                        <button class="btn-buy">Beli Sekarang</button>
                    </div>
                </div>

                <!-- Produk 5 -->
                <div class="product-card">
                    <div class="product-img-box">
                        <img src="baju20.jpg" alt="Deramstore">
                    </div>
                    <div>
                        <div class="product-price-row">
                            <span class="price-main">Rp 125.000</span> <span class="price-unit">/ polo</span>
                        </div>
                        <div class="product-name">Deramstore</div>
                        <div class="product-desc">
                            Polo shirt modern yang mengganti kancing konvensional dengan resleting zipper...
                        </div>
                    </div>
                    <div class="product-action-row">
                        <div class="quantity-control">
                            <span class="qty-btn">-</span>
                            <span class="qty-num">1</span>
                            <span class="qty-btn">+</span>
                        </div>
                        <button class="btn-buy">Beli Sekarang</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <div class="footer-bar">
            <div>
                🏷️ #TokoBajuCowok &nbsp;•&nbsp; ⭐ 4.9 (120+ ulasan)
            </div>
            <div class="footer-socials">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
            <div>
                🕒 09.00 – 21.00 WIB
            </div>
        </div>
    </div>

</body>
</html>