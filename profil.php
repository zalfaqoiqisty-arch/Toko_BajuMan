<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pemilik - Aksara Renjana</title>
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

        /* Container Utama Pas untuk Layar Laptop (1180px) */
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

        .btn-home {
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

        .btn-home:hover {
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

        /* Profile Banner Section (Biru Soft Gradient) */
        .profile-banner {
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
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
        }

        /* Content Profil Layout */
        .profile-layout {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 28px;
            margin-bottom: 32px;
        }

        /* Avatar Box / Card Kiri */
        .avatar-card {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 24px 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .avatar-wrapper {
            position: relative;
            width: 110px;
            height: 110px;
            margin-bottom: 16px;
        }

        .avatar-wrapper img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #0284c7;
            padding: 3px;
            background-color: #ffffff;
        }

        .owner-name {
            font-size: 16px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 4px;
        }

        .owner-role {
            font-size: 11px;
            color: #0284c7;
            background-color: #e0f2fe;
            padding: 3px 10px;
            border-radius: 12px;
            font-weight: 600;
            margin-bottom: 16px;
        }

        .owner-bio {
            font-size: 11px;
            color: #64748b;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            gap: 12px;
        }

        .social-btn {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background-color: #ffffff;
            border: 1px solid #cbd5e1;
            color: #0284c7;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 13px;
            transition: all 0.2s;
        }

        .social-btn:hover {
            background-color: #0284c7;
            color: #ffffff;
            border-color: #0284c7;
        }

        /* Detail Info / Grid Kanan */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }

        .info-card {
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 16px 20px;
            transition: all 0.25s;
        }

        .info-card:hover {
            border-color: #38bdf8;
            box-shadow: 0 6px 16px rgba(56, 189, 248, 0.1);
        }

        .info-card.full-width {
            grid-column: span 2;
        }

        .info-label {
            font-size: 11px;
            font-weight: 700;
            color: #0284c7;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .info-value {
            font-size: 13px;
            color: #1e293b;
            font-weight: 600;
            line-height: 1.5;
        }

        .info-value-desc {
            font-size: 12px;
            color: #64748b;
            font-weight: 400;
            line-height: 1.6;
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
                    <a href="home.php" class="btn-home"><i class="fa-solid fa-house"></i> Beranda</a>
                    <a href="#" class="btn-masuk">Masuk</a>
                </div>
            </div>
        </header>

        <!-- Banner Profil -->
        <div class="profile-banner">
            <div class="banner-text">
                <h1>Profil <span>Pemilik Toko</span></h1>
                <p>Informasi resmi seputar pemilik dan operasional Toko Baju Cowok Kekinian</p>
            </div>
            <div class="badge-pill">
                🛡️ Pemilik Terverifikasi
            </div>
        </div>

        <!-- Grid Konten Utama -->
        <div class="profile-layout">
            <!-- Kartu Foto & Identitas Kiri -->
            <div class="avatar-card">
                <div class="avatar-wrapper">
                    <img src="aksara43.jpg" alt="Foto Aksara Renjana">
                </div>
                <div class="owner-name">Aksara Renjana</div>
                <div class="owner-role">Owner & Founder</div>
                <p class="owner-bio">
                    Fokus menghadirkan fashion pria berkualitas premium dengan desain kekinian, kasual, dan modern untuk anak muda.
                </p>
                <div class="social-links">
                    <a href="#" class="social-btn" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social-btn" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#" class="social-btn" title="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>

            <!-- Detail Informasi Kanan -->
            <div class="info-grid">
                <div class="info-card">
                    <div class="info-label">
                        <i class="fa-solid fa-user-check"></i> Nama Pemilik
                    </div>
                    <div class="info-value">Aksara Renjana</div>
                </div>

                <div class="info-card">
                    <div class="info-label">
                        <i class="fa-solid fa-store"></i> Nama Usaha
                    </div>
                    <div class="info-value">Toko Baju Cowok Kekinian</div>
                </div>

                <div class="info-card">
                    <div class="info-label">
                        <i class="fa-solid fa-envelope"></i> Email Kontak
                    </div>
                    <div class="info-value">Tokobaju@gmail.com</div>
                </div>

                <div class="info-card">
                    <div class="info-label">
                        <i class="fa-solid fa-phone"></i> Nomor Telepon
                    </div>
                    <div class="info-value">+62 867 5673 653431</div>
                </div>

                <div class="info-card full-width">
                    <div class="info-label">
                        <i class="fa-solid fa-circle-info"></i> Tentangnya / Deskripsi Toko
                    </div>
                    <div class="info-value-desc">
                        Didirikan oleh Aksara Renjana, Toko Baju Cowok Kekinian hadir sebagai destinasi fasyen pria pilihan yang menyediakan berbagai brand lokal maupun ternama. Mengedepankan kenyamanan bahan, estetika warna soft, dan harga yang terjangkau.
                    </div>
                </div>

                <div class="info-card full-width">
                    <div class="info-label">
                        <i class="fa-solid fa-location-dot"></i> Alamat Operasional
                    </div>
                    <div class="info-value-desc">
                        Jl. Raya Utama No. 12, Pusat Pertokoan Modern, Indonesia
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bar -->
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
                🕒 09.00 – 22.00 WIB
            </div>
        </div>
    </div>

</body>
</html>