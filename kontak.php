<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Aksara Renjana</title>
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

        /* Container Utama Laptop (1180px) */
        .laptop-container {
            background-color: #ffffff;
            width: 92%;
            max-width: 1180px;
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

        .btn-nav {
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
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .btn-nav:hover {
            background-color: #e0f2fe;
        }

        /* Banner Kontak */
        .contact-banner {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border-radius: 16px;
            padding: 24px 32px;
            margin-bottom: 28px;
            border: 1px solid #bae6fd;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .banner-text h1 {
            font-size: 24px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 4px;
        }

        .banner-text h1 span {
            color: #0284c7;
        }

        .banner-text p {
            font-size: 12px;
            color: #475569;
        }

        .badge-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background-color: #ffffff;
            color: #0284c7;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
        }

        /* Layout Utama Tanpa Form (2 Kolom Seimbang) */
        .contact-main-grid {
            display: grid;
            grid-template-columns: 340px 1fr;
            gap: 24px;
            margin-bottom: 32px;
        }

        /* Kartu Profil Pemilik */
        .owner-card-full {
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 28px 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .owner-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 3px solid #0284c7;
            object-fit: cover;
            margin-bottom: 12px;
            padding: 2px;
            background-color: #ffffff;
        }

        .owner-card-full h3 {
            font-size: 16px;
            font-weight: 800;
            color: #0f172a;
        }

        .owner-card-full p {
            font-size: 12px;
            color: #0284c7;
            font-weight: 600;
            margin-bottom: 16px;
        }

        .owner-desc {
            font-size: 12px;
            color: #64748b;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .owner-socials {
            display: flex;
            gap: 10px;
        }

        .social-btn {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background-color: #f0f9ff;
            border: 1px solid #bae6fd;
            color: #0284c7;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.2s;
        }

        .social-btn:hover {
            background-color: #0284c7;
            color: #ffffff;
        }

        /* Grid Kartu Kontak Detail */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }

        .contact-box {
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 20px;
            display: flex;
            align-items: flex-start;
            gap: 14px;
            transition: all 0.2s;
        }

        .contact-box:hover {
            border-color: #bae6fd;
            box-shadow: 0 4px 12px rgba(2, 132, 199, 0.08);
            transform: translateY(-2px);
        }

        .contact-box-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background-color: #f0f9ff;
            border: 1px solid #bae6fd;
            color: #0284c7;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
        }

        .contact-box-content label {
            display: block;
            font-size: 10px;
            font-weight: 700;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }

        .contact-box-content p {
            font-size: 13px;
            font-weight: 700;
            color: #0f172a;
            line-height: 1.4;
        }

        /* Footer Bar */
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
        <!-- Header Navigasi -->
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
                    <a href="profil.php" class="btn-nav"><i class="fa-solid fa-user"></i> profil</a>
                    <a href="kontak.php" class="btn-nav"><i class="fa-solid fa-phone"></i> kontak</a>       
                </div>
            </div>
        </header>

        <!-- Banner Kontak -->
        <div class="contact-banner">
            <div class="banner-text">
                <h1>Hubungi <span>Kami</span></h1>
                <p>Informasi layanan pelanggan dan kontak resmi Toko Baju</p>
            </div>
            <div class="badge-pill">
                💬 Respon Cepat (Jam Kerja)
            </div>
        </div>

        <!-- Layout Utama Tanpa Form -->
        <div class="contact-main-grid">
            <!-- Profil Pemilik -->
            <div class="owner-card-full">
                <img src="aksara43.jpg" alt="Aksara Renjana" class="owner-avatar">
                <h3>Aksara Renjana</h3>
                <p>Owner & Founder Toko Baju</p>
                <div class="owner-desc">
                    Silakan hubungi kami melalui media di bawah untuk pertanyaan seputar ketersediaan produk, pesanan khusus, maupun kerja sama.
                </div>
                <div class="owner-socials">
                    <a href="#" class="social-btn" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social-btn" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#" class="social-btn" title="TikTok"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>

            <!-- Grid Kontak Detail -->
            <div class="info-grid">
                <div class="contact-box">
                    <div class="contact-box-icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="contact-box-content">
                        <label>Telepon / WhatsApp</label>
                        <p>+62 867 5673 653431</p>
                    </div>
                </div>

                <div class="contact-box">
                    <div class="contact-box-icon"><i class="fa-solid fa-envelope"></i></div>
                    <div class="contact-box-content">
                        <label>Email Resmi</label>
                        <p>R@gmail.com</p>
                    </div>
                </div>

                <div class="contact-box">
                    <div class="contact-box-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="contact-box-content">
                        <label>Alamat Toko</label>
                        <p>Jl. Raya Utama No. 12, Pusat Pertokoan Modern, Indonesia</p>
                    </div>
                </div>

                <div class="contact-box">
                    <div class="contact-box-icon"><i class="fa-solid fa-clock"></i></div>
                    <div class="contact-box-content">
                        <label>Jam Operasional</label>
                        <p>Senin - Minggu<br>(09.00 – 22.00 WIB)</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bar -->
        <div class="footer-bar">
            <div>
                🏷️ #TokoBajuCowok &nbsp;•&nbsp; Layanan Pelanggan Toko Baju
            </div>
            <div class="footer-socials">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
            <div>
                🕒 Fast Response: 09.00 – 22.00 WIB
            </div>
        </div>
    </div>

</body>
</html>