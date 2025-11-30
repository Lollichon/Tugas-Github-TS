    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TS Store - Top Up Game Terpercaya</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <style>
            /* VARIABLES & RESET */
            :root {
                --primary: #ff2d95;
                --primary-dark: #e6007a;
                --primary-light: #ff66b2;
                --secondary: #ff9ad5;
                --accent: #ff4da6;
                --dark: #1a1a2e;
                --darker: #0f0f1a;
                --light: #fff5f9;
                --gray: #a4a4b5;
                --success: #00e6b8;
                --warning: #ffd166;
                --danger: #ff6b6b;
                --card-bg: rgba(255, 255, 255, 0.08);
                --card-shadow: 0 8px 32px rgba(255, 45, 149, 0.15);
                --glass-bg: rgba(255, 255, 255, 0.1);
                --glass-border: rgba(255, 255, 255, 0.2);
                --transition-slow: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
                --transition-medium: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
                --transition-fast: all 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            html {
                scroll-behavior: smooth;
            }

            body {
                font-family: 'Poppins', sans-serif;
                background: linear-gradient(135deg, var(--darker) 0%, var(--dark) 50%, #2d1b4e 100%);
                color: var(--light);
                line-height: 1.6;
                overflow-x: hidden;
                position: relative;
            }

            body::before {
                content: '';
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: 
                    radial-gradient(circle at 20% 80%, rgba(255, 45, 149, 0.15) 0%, transparent 50%),
                    radial-gradient(circle at 80% 20%, rgba(255, 154, 213, 0.1) 0%, transparent 50%),
                    radial-gradient(circle at 40% 40%, rgba(255, 77, 166, 0.1) 0%, transparent 50%);
                z-index: -1;
            }

            .container {
                width: 100%;
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 20px;
            }

            /* TYPOGRAPHY */
            h1, h2, h3, h4, h5, h6 {
                font-weight: 700;
                line-height: 1.2;
                margin-bottom: 0.5em;
            }

            h1 {
                font-size: 3.5rem;
                background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }

            h2 {
                font-size: 2.5rem;
                color: var(--light);
            }

            h3 {
                font-size: 1.8rem;
            }

            p {
                margin-bottom: 1rem;
            }

            a {
                color: var(--primary-light);
                text-decoration: none;
                transition: var(--transition-medium);
            }

            a:hover {
                color: var(--secondary);
            }

            /* BUTTONS */
            .btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
                padding: 12px 28px;
                border-radius: 50px;
                font-weight: 600;
                font-size: 1rem;
                cursor: pointer;
                transition: var(--transition-medium);
                border: none;
                position: relative;
                overflow: hidden;
                z-index: 1;
            }

            .btn::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 0%;
                height: 100%;
                background: rgba(255, 255, 255, 0.1);
                transition: var(--transition-medium);
                z-index: -1;
            }

            .btn:hover::before {
                width: 100%;
            }

            .btn-primary {
                background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
                color: white;
                box-shadow: 0 4px 15px rgba(255, 45, 149, 0.4);
            }

            .btn-primary:hover {
                transform: translateY(-3px);
                box-shadow: 0 8px 25px rgba(255, 45, 149, 0.6);
            }

            .btn-secondary {
                background: var(--glass-bg);
                color: var(--light);
                backdrop-filter: blur(10px);
                border: 1px solid var(--glass-border);
            }

            .btn-secondary:hover {
                background: rgba(255, 255, 255, 0.15);
                transform: translateY(-3px);
            }

            .btn-large {
                padding: 16px 36px;
                font-size: 1.1rem;
            }

            .btn-small {
                padding: 8px 18px;
                font-size: 0.9rem;
            }

            /* HEADER & NAVIGATION */
            header {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 1000;
                transition: var(--transition-medium);
                padding: 15px 0;
            }

            header.scrolled {
                background: rgba(26, 26, 46, 0.9);
                backdrop-filter: blur(10px);
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
                padding: 10px 0;
            }

            .header-content {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .logo {
                display: flex;
                align-items: center;
                gap: 12px;
                font-size: 1.8rem;
                font-weight: 800;
                color: var(--light);
            }

            .logo-icon {
                width: 40px;
                height: 40px;
                background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
                border-radius: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
                animation: pulse 2s infinite;
            }

            @keyframes pulse {
                0% { transform: scale(1); }
                50% { transform: scale(1.05); }
                100% { transform: scale(1); }
            }

            nav ul {
                display: flex;
                list-style: none;
                gap: 30px;
            }

            nav a {
                color: var(--light);
                font-weight: 500;
                position: relative;
                padding: 5px 0;
            }

            nav a::after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 0;
                height: 2px;
                background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
                transition: var(--transition-medium);
            }

            nav a:hover::after,
            nav a.active::after {
                width: 100%;
            }

            .auth-buttons {
                display: flex;
                gap: 15px;
            }

            .mobile-menu-btn {
                display: none;
                background: none;
                border: none;
                color: var(--light);
                font-size: 1.5rem;
                cursor: pointer;
            }

            /* HERO SECTION */
            .hero {
                min-height: 100vh;
                display: flex;
                align-items: center;
                position: relative;
                overflow: hidden;
                padding-top: 80px;
            }

            .hero::before {
                content: '';
                position: absolute;
                top: -50%;
                right: -20%;
                width: 800px;
                height: 800px;
                background: radial-gradient(circle, rgba(255, 45, 149, 0.2) 0%, transparent 70%);
                border-radius: 50%;
                z-index: -1;
            }

            .hero-content {
                max-width: 650px;
                position: relative;
                z-index: 2;
            }

            .hero h1 {
                font-size: 4rem;
                margin-bottom: 20px;
                opacity: 0;
                animation: fadeInUp 1s 0.2s forwards;
            }

            .hero p {
                font-size: 1.2rem;
                margin-bottom: 40px;
                color: var(--gray);
                opacity: 0;
                animation: fadeInUp 1s 0.4s forwards;
            }

            .hero-buttons {
                display: flex;
                gap: 20px;
                opacity: 0;
                animation: fadeInUp 1s 0.6s forwards;
            }

            .hero-image {
                position: absolute;
                right: 0;
                top: 50%;
                transform: translateY(-50%);
                width: 50%;
                max-width: 600px;
                opacity: 0;
                animation: fadeInRight 1s 0.8s forwards;
            }

            .hero-image img {
                width: 100%;
                height: auto;
                filter: drop-shadow(0 20px 30px rgba(0, 0, 0, 0.3));
            }

            /* ANIMATIONS */
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes fadeInRight {
                from {
                    opacity: 0;
                    transform: translateX(50px) translateY(-50%);
                }
                to {
                    opacity: 1;
                    transform: translateX(0) translateY(-50%);
                }
            }

            @keyframes float {
                0% {
                    transform: translateY(0);
                }
                50% {
                    transform: translateY(-10px);
                }
                100% {
                    transform: translateY(0);
                }
            }

            /* RESPONSIVE */
            @media (max-width: 992px) {
                h1 {
                    font-size: 3rem;
                }
                
                h2 {
                    font-size: 2.2rem;
                }
                
                .hero h1 {
                    font-size: 3.2rem;
                }
                
                .hero-image {
                    width: 45%;
                }
            }

            @media (max-width: 768px) {
                .mobile-menu-btn {
                    display: block;
                }
                
                nav {
                    position: fixed;
                    top: 70px;
                    left: 0;
                    width: 100%;
                    background: rgba(26, 26, 46, 0.95);
                    backdrop-filter: blur(10px);
                    padding: 20px;
                    transform: translateY(-100%);
                    opacity: 0;
                    transition: var(--transition-medium);
                    pointer-events: none;
                }
                
                nav.active {
                    transform: translateY(0);
                    opacity: 1;
                    pointer-events: all;
                }
                
                nav ul {
                    flex-direction: column;
                    gap: 15px;
                }
                
                .hero-content {
                    text-align: center;
                    max-width: 100%;
                }
                
                .hero-buttons {
                    justify-content: center;
                    flex-wrap: wrap;
                }
                
                .hero-image {
                    position: relative;
                    width: 100%;
                    max-width: 500px;
                    margin: 40px auto 0;
                    transform: none;
                    top: 0;
                }
                
                .hero {
                    flex-direction: column;
                    justify-content: center;
                    text-align: center;
                    padding: 100px 0 50px;
                }
            }

            @media (max-width: 576px) {
                h1 {
                    font-size: 2.5rem;
                }
                
                .hero h1 {
                    font-size: 2.5rem;
                }
                
                .hero p {
                    font-size: 1rem;
                }
                
                .btn-large {
                    padding: 14px 28px;
                }
                
                .auth-buttons {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
        <!-- Header -->
        <header id="header">
            <div class="container">
                <div class="header-content">
                    <div class="logo">
                        <div class="logo-icon">
                            <i class="fas fa-gamepad"></i>
                        </div>
                        <span>TS Store</span>
                    </div>
                    
                    <nav id="nav">
                        <ul>
                            <li><a href="#beranda" class="active">Beranda</a></li>
                            <li><a href="#game">Game</a></li>
                            <li><a href="#promo">Promo</a></li>
                            <li><a href="#testimoni">Testimoni</a></li>
                            <li><a href="#faq">FAQ</a></li>
                            <li><a href="#kontak">Kontak</a></li>
                        </ul>
                    </nav>
                    
                    <div class="auth-buttons">
                        <button class="btn btn-secondary"><i class="fas fa-user"></i> Masuk</button>
                        <button class="btn btn-primary"><i class="fas fa-user-plus"></i> Daftar</button>
                    </div>
                    
                    <button class="mobile-menu-btn" id="mobileMenuBtn">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="hero" id="beranda">
            <div class="container">
                <div class="hero-content">
                    <h1>Top Up Game Favorit Anda dengan Mudah</h1>
                    <p>Dapatkan diamond, koin, dan item game lainnya dengan proses cepat dan aman. Dukungan untuk semua game populer dengan harga terbaik!</p>
                    <div class="hero-buttons">
                        <button class="btn btn-primary btn-large"><i class="fas fa-bolt"></i> Top Up Sekarang</button>
                        <button class="btn btn-secondary btn-large"><i class="fas fa-gamepad"></i> Lihat Semua Game</button>
                    </div>
                </div>
                
                <div class="hero-image">
                    <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Gaming">
                </div>
            </div>
        </section>

        <script>
            // Header scroll effect
            window.addEventListener('scroll', function() {
                const header = document.getElementById('header');
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // Mobile menu toggle
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const nav = document.getElementById('nav');
            
            mobileMenuBtn.addEventListener('click', function() {
                nav.classList.toggle('active');
                const icon = mobileMenuBtn.querySelector('i');
                if (nav.classList.contains('active')) {
                    icon.className = 'fas fa-times';
                } else {
                    icon.className = 'fas fa-bars';
                }
            });

            // Smooth scrolling for navigation links
            document.querySelectorAll('nav a').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                        
                        // Close mobile menu if open
                        if (nav.classList.contains('active')) {
                            nav.classList.remove('active');
                            mobileMenuBtn.querySelector('i').className = 'fas fa-bars';
                        }
                    }
                });
            });
        </script>
    </body>
    </html>

    <!-- Tambahkan kode ini setelah section Hero -->

    <!-- Games Section -->
    <section class="section games-section" id="game">
        <div class="container">
            <div class="section-title">
                <h2>Top Up Game Favorit</h2>
                <p>Pilih dari berbagai kategori game dan lakukan top up dengan mudah</p>
            </div>
            
            <div class="categories">
                <button class="category-btn active" data-category="all">Semua</button>
                <button class="category-btn" data-category="moba">MOBA</button>
                <button class="category-btn" data-category="battle-royale">Battle Royale</button>
                <button class="category-btn" data-category="ffs">FPS</button>
                <button class="category-btn" data-category="rpg">RPG</button>
                <button class="category-btn" data-category="sandbox">Sandbox</button>
                <button class="category-btn" data-category="sports">Sports</button>
                <button class="category-btn" data-category="social">Social</button>
            </div>
            
            <div class="games-grid" id="games-container">
                <!-- Game cards will be dynamically inserted here -->
            </div>
            
            <div class="section-footer">
                <button class="btn btn-secondary" id="loadMoreBtn">
                    <i class="fas fa-plus"></i> Muat Lebih Banyak
                </button>
            </div>
        </div>
    </section>

    <style>
        /* SECTIONS */
        .section {
            padding: 100px 0;
            position: relative;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.8rem;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            border-radius: 2px;
        }

        .section-title p {
            max-width: 600px;
            margin: 0 auto;
            color: var(--gray);
            font-size: 1.1rem;
        }

        /* GAMES SECTION */
        .games-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 10% 20%, rgba(255, 77, 166, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 90% 80%, rgba(255, 154, 213, 0.05) 0%, transparent 50%);
            z-index: -1;
        }

        .categories {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin-bottom: 50px;
        }

        .category-btn {
            padding: 12px 25px;
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: 50px;
            color: var(--light);
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition-medium);
            backdrop-filter: blur(10px);
        }

        .category-btn:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-3px);
        }

        .category-btn.active {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border-color: var(--primary);
            box-shadow: 0 4px 15px rgba(255, 45, 149, 0.4);
        }

        .games-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .game-card {
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: var(--transition-medium);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            position: relative;
            opacity: 0;
            transform: translateY(30px);
        }

        .game-card.animate {
            animation: fadeInUp 0.6s forwards;
        }

        .game-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(255, 45, 149, 0.25);
        }

        .game-image {
            height: 200px;
            width: 100%;
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }

        .game-image::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50%;
            background: linear-gradient(transparent, rgba(26, 26, 46, 0.8));
        }

        .game-category {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(26, 26, 46, 0.8);
            color: var(--light);
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            z-index: 1;
        }

        .game-content {
            padding: 25px;
        }

        .game-title {
            font-size: 1.4rem;
            margin-bottom: 10px;
            color: var(--light);
        }

        .game-description {
            color: var(--gray);
            margin-bottom: 20px;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .game-price {
            font-weight: 700;
            color: var(--primary-light);
            font-size: 1.3rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .game-price::before {
            content: '';
            width: 4px;
            height: 20px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 2px;
        }

        .game-actions {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        .section-footer {
            text-align: center;
        }

        /* ANIMATION DELAYS FOR CARDS */
        .game-card:nth-child(1) { animation-delay: 0.1s; }
        .game-card:nth-child(2) { animation-delay: 0.2s; }
        .game-card:nth-child(3) { animation-delay: 0.3s; }
        .game-card:nth-child(4) { animation-delay: 0.4s; }
        .game-card:nth-child(5) { animation-delay: 0.5s; }
        .game-card:nth-child(6) { animation-delay: 0.6s; }
        .game-card:nth-child(7) { animation-delay: 0.7s; }
        .game-card:nth-child(8) { animation-delay: 0.8s; }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .games-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                gap: 20px;
            }
            
            .categories {
                gap: 10px;
            }
            
            .category-btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }
    </style>

    <script>
        // Sample game data
        const games = [
            {
                id: 1,
                title: "Mobile Legends",
                category: "moba",
                image: "https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80",
                description: "Top up Diamond Mobile Legends dengan proses cepat dan aman. Dapatkan hero dan skin terbaru!",
                price: "Rp 5.000 - Rp 1.000.000"
            },
            {
                id: 2,
                title: "Free Fire",
                category: "battle-royale",
                image: "https://images.unsplash.com/photo-1552820728-8b83bb6b773f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80",
                description: "Dapatkan Diamond Free Fire dengan harga terbaik. Bermain lebih seru dengan item eksklusif!",
                price: "Rp 5.000 - Rp 500.000"
            },
            {
                id: 3,
                title: "PUBG Mobile",
                category: "battle-royale",
                image: "https://images.unsplash.com/photo-1542751110-97427bbecf20?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2084&q=80",
                description: "Top up UC PUBG Mobile untuk berbagai item menarik. Menangkan pertempuran dengan style!",
                price: "Rp 10.000 - Rp 2.000.000"
            },
            {
                id: 4,
                title: "Genshin Impact",
                category: "rpg",
                image: "https://images.unsplash.com/photo-1635863138275-d9b33299680a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2084&q=80",
                description: "Top up Genesis Crystal untuk karakter dan weapon terbaru. Jelajahi dunia Teyvat!",
                price: "Rp 15.000 - Rp 3.000.000"
            },
            {
                id: 5,
                title: "Call of Duty: Mobile",
                category: "ffs",
                image: "https://images.unsplash.com/photo-1612198188060-c7c2a3b66eae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2084&q=80",
                description: "Dapatkan CP untuk berbagai skin dan item eksklusif. Pengalaman FPS mobile terbaik!",
                price: "Rp 10.000 - Rp 1.500.000"
            },
            {
                id: 6,
                title: "Valorant",
                category: "ffs",
                image: "https://images.unsplash.com/photo-1593305841991-05c297ba4575?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2074&q=80",
                description: "Top up Points Valorant untuk skin dan battle pass. Tampil beda di setiap match!",
                price: "Rp 20.000 - Rp 2.500.000"
            },
            {
                id: 7,
                title: "Minecraft",
                category: "sandbox",
                image: "https://images.unsplash.com/photo-1550745165-9bc0b252726f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80",
                description: "Beli Minecraft coins untuk skin dan resource pack. Bangun dunia impian Anda!",
                price: "Rp 25.000 - Rp 500.000"
            },
            {
                id: 8,
                title: "FIFA Mobile",
                category: "sports",
                image: "https://images.unsplash.com/photo-1612872087720-bb876e2e67d1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2087&q=80",
                description: "Top up FIFA Points untuk pack dan player terbaik. Bangun tim impian Anda!",
                price: "Rp 30.000 - Rp 1.000.000"
            }
        ];

        // DOM elements
        const gamesContainer = document.getElementById('games-container');
        const categoryButtons = document.querySelectorAll('.category-btn');
        const loadMoreBtn = document.getElementById('loadMoreBtn');

        // Initialize the page with all games
        function initializeGames() {
            displayGames(games);
            
            // Add animation to cards when they come into view
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                    }
                });
            }, { threshold: 0.1 });
            
            document.querySelectorAll('.game-card').forEach(card => {
                observer.observe(card);
            });
        }

        // Display games in the grid
        function displayGames(gamesToDisplay) {
            gamesContainer.innerHTML = '';
            
            gamesToDisplay.forEach(game => {
                const gameCard = document.createElement('div');
                gameCard.className = 'game-card';
                gameCard.setAttribute('data-category', game.category);
                
                gameCard.innerHTML = `
                    <div class="game-image" style="background-image: url('${game.image}')">
                        <div class="game-category">${getCategoryName(game.category)}</div>
                    </div>
                    <div class="game-content">
                        <h3 class="game-title">${game.title}</h3>
                        <p class="game-description">${game.description}</p>
                        <div class="game-price">${game.price}</div>
                        <div class="game-actions">
                            <button class="btn btn-primary btn-small"><i class="fas fa-shopping-cart"></i> Top Up</button>
                            <button class="btn btn-secondary btn-small"><i class="fas fa-info-circle"></i> Detail</button>
                        </div>
                    </div>
                `;
                
                gamesContainer.appendChild(gameCard);
            });
        }

        // Get category name for display
        function getCategoryName(category) {
            const categoryNames = {
                'moba': 'MOBA',
                'battle-royale': 'Battle Royale',
                'ffs': 'FPS',
                'rpg': 'RPG',
                'sandbox': 'Sandbox',
                'sports': 'Sports',
                'social': 'Social'
            };
            
            return categoryNames[category] || category;
        }

        // Filter games by category
        function filterGames(category) {
            if (category === 'all') {
                displayGames(games);
            } else {
                const filteredGames = games.filter(game => game.category === category);
                displayGames(filteredGames);
            }
        }

        // Initialize event listeners for games section
        function initializeGameEvents() {
            // Category filter buttons
            categoryButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    categoryButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    // Filter games
                    const category = this.getAttribute('data-category');
                    filterGames(category);
                });
            });
            
            // Load more button
            loadMoreBtn.addEventListener('click', function() {
                // In a real app, this would load more games from an API
                // For demo, we'll just show an alert
                alert('Fitur ini akan memuat lebih banyak game. Dalam implementasi nyata, ini akan mengambil data dari server.');
            });
        }

        // Initialize games when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            initializeGames();
            initializeGameEvents();
        });
    </script>

    <!-- Tambahkan kode ini setelah section Games -->

    <!-- Promo Section -->
    <section class="section promo-section" id="promo">
        <div class="container">
            <div class="section-title">
                <h2>Promo Spesial</h2>
                <p>Jangan lewatkan penawaran menarik untuk top up game favorit Anda</p>
            </div>
            
            <div class="promo-slider">
                <div class="promo-track" id="promoTrack">
                    <div class="promo-slide active">
                        <div class="promo-card">
                            <div class="promo-badge">HOT</div>
                            <div class="promo-image">
                                <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Bonus Diamond">
                            </div>
                            <div class="promo-content">
                                <h3 class="promo-title">Bonus Diamond 20%</h3>
                                <p class="promo-description">Dapatkan bonus diamond 20% untuk setiap pembelian di Mobile Legends. Berlaku hingga 30 Juni 2023.</p>
                                <div class="promo-meta">
                                    <div class="promo-price">
                                        <span class="old-price">Rp 100.000</span>
                                        <span class="new-price">Rp 80.000</span>
                                    </div>
                                    <div class="promo-countdown">
                                        <i class="fas fa-clock"></i>
                                        <span id="countdown1">07:22:15</span>
                                    </div>
                                </div>
                                <div class="promo-actions">
                                    <button class="btn btn-primary btn-small"><i class="fas fa-gift"></i> Klaim Promo</button>
                                    <button class="btn btn-secondary btn-small"><i class="fas fa-info-circle"></i> Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="promo-slide">
                        <div class="promo-card">
                            <div class="promo-badge">NEW</div>
                            <div class="promo-image">
                                <img src="https://images.unsplash.com/photo-1552820728-8b83bb6b773f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Cashback 15%">
                            </div>
                            <div class="promo-content">
                                <h3 class="promo-title">Cashback 15%</h3>
                                <p class="promo-description">Dapatkan cashback 15% untuk pembelian pertama di Free Fire. Minimal pembelian Rp 50.000.</p>
                                <div class="promo-meta">
                                    <div class="promo-price">
                                        <span class="old-price">Rp 50.000</span>
                                        <span class="new-price">Rp 42.500</span>
                                    </div>
                                    <div class="promo-countdown">
                                        <i class="fas fa-clock"></i>
                                        <span id="countdown2">01:14:32</span>
                                    </div>
                                </div>
                                <div class="promo-actions">
                                    <button class="btn btn-primary btn-small"><i class="fas fa-gift"></i> Klaim Promo</button>
                                    <button class="btn btn-secondary btn-small"><i class="fas fa-info-circle"></i> Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="promo-slide">
                        <div class="promo-card">
                            <div class="promo-badge">LIMITED</div>
                            <div class="promo-image">
                                <img src="https://images.unsplash.com/photo-1542751110-97427bbecf20?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2084&q=80" alt="Buy 1 Get 1">
                            </div>
                            <div class="promo-content">
                                <h3 class="promo-title">Buy 1 Get 1</h3>
                                <p class="promo-description">Beli 1 item PUBG Mobile dapat 1 item gratis. Berlaku untuk semua item kecuali bundle limited.</p>
                                <div class="promo-meta">
                                    <div class="promo-price">
                                        <span class="old-price">Rp 200.000</span>
                                        <span class="new-price">Rp 100.000</span>
                                    </div>
                                    <div class="promo-countdown">
                                        <i class="fas fa-clock"></i>
                                        <span id="countdown3">12:45:10</span>
                                    </div>
                                </div>
                                <div class="promo-actions">
                                    <button class="btn btn-primary btn-small"><i class="fas fa-gift"></i> Klaim Promo</button>
                                    <button class="btn btn-secondary btn-small"><i class="fas fa-info-circle"></i> Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="slider-controls">
                    <button class="slider-btn prev-btn" id="prevPromo">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="slider-btn next-btn" id="nextPromo">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
                
                <div class="slider-dots" id="promoDots">
                    <span class="dot active" data-slide="0"></span>
                    <span class="dot" data-slide="1"></span>
                    <span class="dot" data-slide="2"></span>
                </div>
            </div>
            
            <div class="promo-grid">
                <div class="promo-mini-card">
                    <div class="mini-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div class="mini-content">
                        <h4>Proses Instan</h4>
                        <p>Item masuk dalam 1-5 menit setelah pembayaran</p>
                    </div>
                </div>
                
                <div class="promo-mini-card">
                    <div class="mini-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="mini-content">
                        <h4>100% Aman</h4>
                        <p>Garansi keamanan data dan transaksi</p>
                    </div>
                </div>
                
                <div class="promo-mini-card">
                    <div class="mini-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="mini-content">
                        <h4>CS 24/7</h4>
                        <p>Customer Service siap membantu kapan saja</p>
                    </div>
                </div>
                
                <div class="promo-mini-card">
                    <div class="mini-icon">
                        <i class="fas fa-tags"></i>
                    </div>
                    <div class="mini-content">
                        <h4>Harga Terbaik</h4>
                        <p>Harga kompetitif dengan bonus menarik</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section testimonials-section" id="testimoni">
        <div class="container">
            <div class="section-title">
                <h2>Apa Kata Pelanggan Kami</h2>
                <p>Testimoni dari ribuan pelanggan yang telah menggunakan layanan kami</p>
            </div>
            
            <div class="testimonials-container">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p>"Proses top up sangat cepat, hanya butuh 5 menit diamond sudah masuk. Pelayanan CS juga ramah dan responsif. Recommended banget!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Ahmad Rizki">
                        </div>
                        <div class="author-info">
                            <h4>Ahmad Rizki</h4>
                            <p>Mobile Legends Player</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p>"Saya sudah langganan top up di TS Store selama 2 tahun. Tidak pernah ada masalah dan selalu dapat bonus. Harga juga bersaing!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Sari Dewi">
                        </div>
                        <div class="author-info">
                            <h4>Sari Dewi</h4>
                            <p>Free Fire Player</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p>"Pertama kali top up agak ragu, tapi ternyata prosesnya mudah dan aman. Sekarang sudah top up berkali-kali tanpa kendala. Terima kasih TS Store!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Budi Santoso">
                        </div>
                        <div class="author-info">
                            <h4>Budi Santoso</h4>
                            <p>PUBG Mobile Player</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-stats">
                <div class="stat-item">
                    <div class="stat-number" data-count="50000">0</div>
                    <div class="stat-label">Pelanggan</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-count="120000">0</div>
                    <div class="stat-label">Transaksi</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-count="4.9">0</div>
                    <div class="stat-label">Rating</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-count="24">0</div>
                    <div class="stat-label">Jam</div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* PROMO SECTION */
        .promo-section {
            background: linear-gradient(135deg, rgba(255, 45, 149, 0.05) 0%, rgba(255, 154, 213, 0.05) 100%);
            position: relative;
            overflow: hidden;
        }

        .promo-section::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(255, 45, 149, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
        }

        .promo-slider {
            position: relative;
            margin-bottom: 80px;
            overflow: hidden;
            border-radius: 20px;
        }

        .promo-track {
            display: flex;
            transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .promo-slide {
            min-width: 100%;
            padding: 0 10px;
            opacity: 0;
            transform: scale(0.9);
            transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .promo-slide.active {
            opacity: 1;
            transform: scale(1);
        }

        .promo-card {
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            display: flex;
            flex-direction: column;
            height: 100%;
            position: relative;
            transition: var(--transition-medium);
        }

        .promo-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(255, 45, 149, 0.25);
        }

        .promo-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 2;
            box-shadow: 0 4px 10px rgba(255, 45, 149, 0.4);
        }

        .promo-image {
            height: 200px;
            overflow: hidden;
        }

        .promo-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition-slow);
        }

        .promo-card:hover .promo-image img {
            transform: scale(1.05);
        }

        .promo-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .promo-title {
            font-size: 1.4rem;
            margin-bottom: 10px;
            color: var(--light);
        }

        .promo-description {
            color: var(--gray);
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .promo-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .promo-price {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .old-price {
            text-decoration: line-through;
            color: var(--gray);
            font-size: 0.9rem;
        }

        .new-price {
            color: var(--primary-light);
            font-weight: 700;
            font-size: 1.2rem;
        }

        .promo-countdown {
            display: flex;
            align-items: center;
            gap: 5px;
            background: rgba(255, 45, 149, 0.1);
            padding: 8px 12px;
            border-radius: 10px;
            font-size: 0.9rem;
            color: var(--primary-light);
        }

        .promo-actions {
            display: flex;
            gap: 10px;
        }

        .slider-controls {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
            pointer-events: none;
            z-index: 3;
        }

        .slider-btn {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            color: var(--light);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition-medium);
            backdrop-filter: blur(10px);
            pointer-events: all;
        }

        .slider-btn:hover {
            background: var(--primary);
            transform: scale(1.1);
        }

        .slider-dots {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 30px;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--gray);
            cursor: pointer;
            transition: var(--transition-medium);
        }

        .dot.active {
            background: var(--primary);
            transform: scale(1.2);
        }

        .promo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .promo-mini-card {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 25px;
            display: flex;
            align-items: center;
            gap: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            transition: var(--transition-medium);
        }

        .promo-mini-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(255, 45, 149, 0.15);
        }

        .mini-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            flex-shrink: 0;
        }

        .mini-content h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: var(--light);
        }

        .mini-content p {
            color: var(--gray);
            font-size: 0.9rem;
            margin: 0;
        }

        /* TESTIMONIALS SECTION */
        .testimonials-section {
            position: relative;
        }

        .testimonials-section::before {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(255, 154, 213, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
        }

        .testimonials-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .testimonial-card {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 30px;
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            transition: var(--transition-medium);
            position: relative;
            overflow: hidden;
        }

        .testimonial-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(255, 45, 149, 0.15);
        }

        .testimonial-content {
            position: relative;
            margin-bottom: 25px;
        }

        .quote-icon {
            position: absolute;
            top: -10px;
            left: -10px;
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            color: white;
        }

        .testimonial-content p {
            font-style: italic;
            color: var(--light);
            margin: 0;
            padding-left: 20px;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid var(--primary);
            flex-shrink: 0;
        }

        .author-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-info h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: var(--light);
        }

        .author-info p {
            color: var(--gray);
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .rating {
            color: var(--warning);
            font-size: 0.9rem;
        }

        .testimonial-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 30px;
            text-align: center;
        }

        .stat-item {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 30px 20px;
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            transition: var(--transition-medium);
        }

        .stat-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(255, 45, 149, 0.15);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-light);
            margin-bottom: 10px;
        }

        .stat-label {
            color: var(--gray);
            font-weight: 500;
        }

        /* ANIMATIONS */
        @keyframes countdownPulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .promo-countdown.pulse {
            animation: countdownPulse 1s infinite;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .promo-slider {
                margin-bottom: 50px;
            }
            
            .promo-content {
                padding: 20px;
            }
            
            .promo-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .slider-controls {
                padding: 0 10px;
            }
            
            .slider-btn {
                width: 40px;
                height: 40px;
            }
            
            .promo-grid {
                grid-template-columns: 1fr;
            }
            
            .testimonials-container {
                grid-template-columns: 1fr;
            }
            
            .testimonial-stats {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .promo-actions {
                flex-direction: column;
            }
            
            .testimonial-stats {
                grid-template-columns: 1fr;
            }
            
            .stat-number {
                font-size: 2rem;
            }
        }
    </style>

    <script>
        // Promo Slider Functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize promo slider
            initPromoSlider();
            
            // Initialize countdown timers
            initCountdowns();
            
            // Initialize stats counter
            initStatsCounter();
        });

        // Promo Slider
        function initPromoSlider() {
            const track = document.getElementById('promoTrack');
            const slides = document.querySelectorAll('.promo-slide');
            const dots = document.querySelectorAll('.dot');
            const prevBtn = document.getElementById('prevPromo');
            const nextBtn = document.getElementById('nextPromo');
            
            let currentSlide = 0;
            const totalSlides = slides.length;
            
            // Function to update slider position
            function updateSlider() {
                track.style.transform = `translateX(-${currentSlide * 100}%)`;
                
                // Update active states
                slides.forEach((slide, index) => {
                    slide.classList.toggle('active', index === currentSlide);
                });
                
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentSlide);
                });
            }
            
            // Next slide
            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateSlider();
            }
            
            // Previous slide
            function prevSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                updateSlider();
            }
            
            // Event listeners
            nextBtn.addEventListener('click', nextSlide);
            prevBtn.addEventListener('click', prevSlide);
            
            // Dot navigation
            dots.forEach(dot => {
                dot.addEventListener('click', function() {
                    currentSlide = parseInt(this.getAttribute('data-slide'));
                    updateSlider();
                });
            });
            
            // Auto slide
            let slideInterval = setInterval(nextSlide, 5000);
            
            // Pause on hover
            const slider = document.querySelector('.promo-slider');
            slider.addEventListener('mouseenter', () => clearInterval(slideInterval));
            slider.addEventListener('mouseleave', () => {
                slideInterval = setInterval(nextSlide, 5000);
            });
        }

        // Countdown Timers
        function initCountdowns() {
            const countdowns = [
                { id: 'countdown1', hours: 7, minutes: 22, seconds: 15 },
                { id: 'countdown2', hours: 1, minutes: 14, seconds: 32 },
                { id: 'countdown3', hours: 12, minutes: 45, seconds: 10 }
            ];
            
            countdowns.forEach(countdown => {
                updateCountdown(countdown.id, countdown.hours, countdown.minutes, countdown.seconds);
                
                // Update every second
                setInterval(() => {
                    updateCountdown(countdown.id, countdown.hours, countdown.minutes, countdown.seconds);
                }, 1000);
            });
        }
        
        function updateCountdown(elementId, hours, minutes, seconds) {
            const element = document.getElementById(elementId);
            
            // Decrease time
            seconds--;
            if (seconds < 0) {
                seconds = 59;
                minutes--;
                if (minutes < 0) {
                    minutes = 59;
                    hours--;
                    if (hours < 0) {
                        hours = 0;
                        minutes = 0;
                        seconds = 0;
                    }
                }
            }
            
            // Format time
            const formattedTime = 
                `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            
            element.textContent = formattedTime;
            
            // Add pulse animation when time is running out
            if (hours === 0 && minutes < 5) {
                element.classList.add('pulse');
            } else {
                element.classList.remove('pulse');
            }
        }

        // Stats Counter Animation
        function initStatsCounter() {
            const statNumbers = document.querySelectorAll('.stat-number');
            
            // Check if element is in viewport
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }
            
            // Animate numbers
            function animateNumbers() {
                statNumbers.forEach(stat => {
                    if (isInViewport(stat) && !stat.classList.contains('animated')) {
                        const target = parseInt(stat.getAttribute('data-count'));
                        const duration = 2000; // 2 seconds
                        const step = target / (duration / 16); // 60fps
                        let current = 0;
                        
                        const timer = setInterval(() => {
                            current += step;
                            if (current >= target) {
                                current = target;
                                clearInterval(timer);
                                stat.classList.add('animated');
                            }
                            
                            // Format number based on type
                            if (stat.getAttribute('data-count').includes('.')) {
                                stat.textContent = current.toFixed(1);
                            } else {
                                stat.textContent = Math.floor(current).toLocaleString();
                            }
                        }, 16);
                    }
                });
            }
            
            // Check on scroll and load
            window.addEventListener('scroll', animateNumbers);
            window.addEventListener('load', animateNumbers);
        }
    </script>


    <!-- Tambahkan kode ini setelah section Testimoni -->

    <!-- FAQ Section -->
    <section class="section faq-section" id="faq">
        <div class="container">
            <div class="section-title">
                <h2>Pertanyaan Umum</h2>
                <p>Temukan jawaban untuk pertanyaan yang sering diajukan</p>
            </div>
            
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Bagaimana cara melakukan top up?</span>
                        <div class="faq-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Pilih game yang ingin Anda top up, pilih nominal yang diinginkan, masukkan ID game Anda, lakukan pembayaran, dan item akan langsung masuk ke akun game Anda dalam waktu 1-5 menit. Prosesnya sangat mudah dan bisa dilakukan dalam beberapa langkah sederhana.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Berapa lama proses top up?</span>
                        <div class="faq-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Proses top up biasanya memakan waktu 1-5 menit setelah pembayaran berhasil. Namun, dalam beberapa kasus tertentu bisa memakan waktu hingga 15 menit tergantung kondisi server game. Kami selalu berusaha memproses secepat mungkin.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Apakah pembelian di TS Store aman?</span>
                        <div class="faq-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Ya, sangat aman. Kami menggunakan sistem pembayaran terenkripsi dan tidak menyimpan data pribadi Anda. Semua transaksi dilindungi dengan sistem keamanan berlapis. Kami telah melayani ribuan transaksi dengan tingkat keamanan 99.9%.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Bagaimana jika item tidak masuk ke akun saya?</span>
                        <div class="faq-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Jika item tidak masuk dalam waktu 15 menit, silakan hubungi Customer Service kami dengan menyertakan bukti pembayaran. Tim kami akan segera memproses keluhan Anda dan melakukan pengembalian dana atau mengirimkan item yang dipesan.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Metode pembayaran apa saja yang diterima?</span>
                        <div class="faq-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Kami menerima berbagai metode pembayaran termasuk transfer bank (BCA, BNI, BRI, Mandiri), e-wallet (GoPay, OVO, Dana, LinkAja), serta minimarket (Alfamart, Indomaret). Semua pembayaran diproses secara instan.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Apakah bisa melakukan top up untuk region lain?</span>
                        <div class="faq-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Ya, kami mendukung top up untuk berbagai region termasuk Indonesia, Malaysia, Singapore, Thailand, dan lainnya. Pastikan untuk memilih region yang sesuai dengan akun game Anda saat melakukan top up.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-cta">
                <div class="cta-content">
                    <h3>Masih ada pertanyaan?</h3>
                    <p>Tim customer service kami siap membantu Anda 24/7</p>
                </div>
                <button class="btn btn-primary btn-large">
                    <i class="fas fa-headset"></i> Hubungi CS Sekarang
                </button>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section contact-section" id="kontak">
        <div class="container">
            <div class="section-title">
                <h2>Hubungi Kami</h2>
                <p>Butuh bantuan? Tim customer service kami siap membantu 24/7</p>
            </div>
            
            <div class="contact-grid">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Alamat</h4>
                            <p>Jl. Gaming Center No. 123, Jakarta Selatan, Indonesia</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Telepon</h4>
                            <p>+62 21 1234 5678</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <p>support@tsstore.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Jam Operasional</h4>
                            <p>Senin - Minggu: 24 Jam</p>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <h4>Follow Kami</h4>
                        <div class="social-icons">
                            <a href="#" class="social-link">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-discord"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form-container">
                    <form class="contact-form" id="contactForm">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="text" id="subject" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea id="message" class="form-control" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-large" id="submitBtn">
                            <i class="fas fa-paper-plane"></i> Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <div class="footer-logo">
                        <div class="logo">
                            <div class="logo-icon">
                                <i class="fas fa-gamepad"></i>
                            </div>
                            <span>TS Store</span>
                        </div>
                    </div>
                    <p class="footer-description">
                        Tempat terpercaya untuk top up game favorit Anda. Proses cepat, aman, dan harga terjangkau dengan layanan customer service 24/7.
                    </p>
                    <div class="footer-social">
                        <a href="#" class="social-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3 class="footer-title">Menu Utama</h3>
                    <ul class="footer-links">
                        <li><a href="#beranda">Beranda</a></li>
                        <li><a href="#game">Game</a></li>
                        <li><a href="#promo">Promo</a></li>
                        <li><a href="#testimoni">Testimoni</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#kontak">Kontak</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3 class="footer-title">Game Populer</h3>
                    <ul class="footer-links">
                        <li><a href="#">Mobile Legends</a></li>
                        <li><a href="#">Free Fire</a></li>
                        <li><a href="#">PUBG Mobile</a></li>
                        <li><a href="#">Genshin Impact</a></li>
                        <li><a href="#">Call of Duty</a></li>
                        <li><a href="#">Valorant</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3 class="footer-title">Bantuan</h3>
                    <ul class="footer-links">
                        <li><a href="#">Cara Top Up</a></li>
                        <li><a href="#">Metode Pembayaran</a></li>
                        <li><a href="#">Status Pesanan</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3 class="footer-title">Download App</h3>
                    <div class="download-apps">
                        <a href="#" class="download-btn">
                            <i class="fab fa-google-play"></i>
                            <div class="download-text">
                                <span>Get it on</span>
                                <strong>Google Play</strong>
                            </div>
                        </a>
                        <a href="#" class="download-btn">
                            <i class="fab fa-apple"></i>
                            <div class="download-text">
                                <span>Download on the</span>
                                <strong>App Store</strong>
                            </div>
                        </a>
                    </div>
                    <div class="payment-methods">
                        <h4>Metode Pembayaran</h4>
                        <div class="payment-icons">
                            <i class="fab fa-cc-visa"></i>
                            <i class="fab fa-cc-mastercard"></i>
                            <i class="fab fa-cc-paypal"></i>
                            <i class="fab fa-cc-amazon-pay"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p>&copy; 2023 TS Store. All rights reserved.</p>
                    <div class="footer-bottom-links">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Service</a>
                        <a href="#">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating Action Buttons -->
    <div class="floating-actions">
        <button class="floating-btn chat-btn" id="chatBtn">
            <i class="fas fa-comments"></i>
            <span class="tooltip">Live Chat</span>
        </button>
        <button class="floating-btn scroll-top" id="scrollTop">
            <i class="fas fa-arrow-up"></i>
            <span class="tooltip">Ke Atas</span>
        </button>
    </div>

    <!-- Loading Screen -->
    <div class="loading-screen" id="loadingScreen">
        <div class="loading-content">
            <div class="loading-logo">
                <div class="logo-icon">
                    <i class="fas fa-gamepad"></i>
                </div>
                <span>TS Store</span>
            </div>
            <div class="loading-spinner"></div>
            <p>Memuat pengalaman terbaik untuk Anda...</p>
        </div>
    </div>

    <style>
        /* FAQ SECTION */
        .faq-section {
            background: linear-gradient(135deg, rgba(255, 45, 149, 0.03) 0%, rgba(255, 154, 213, 0.03) 100%);
            position: relative;
        }

        .faq-section::before {
            content: '';
            position: absolute;
            bottom: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(255, 77, 166, 0.08) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
        }

        .faq-container {
            max-width: 800px;
            margin: 0 auto 60px;
        }

        .faq-item {
            background: var(--card-bg);
            border-radius: 15px;
            margin-bottom: 15px;
            overflow: hidden;
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            transition: var(--transition-medium);
        }

        .faq-item:hover {
            box-shadow: 0 10px 20px rgba(255, 45, 149, 0.1);
        }

        .faq-item.active {
            box-shadow: 0 10px 25px rgba(255, 45, 149, 0.15);
        }

        .faq-question {
            padding: 25px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--transition-medium);
        }

        .faq-question:hover {
            background: rgba(255, 255, 255, 0.05);
        }

        .faq-question span {
            font-weight: 600;
            font-size: 1.1rem;
            color: var(--light);
        }

        .faq-icon {
            width: 30px;
            height: 30px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: var(--transition-medium);
            flex-shrink: 0;
        }

        .faq-item.active .faq-icon {
            transform: rotate(45deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .faq-item.active .faq-answer {
            max-height: 500px;
        }

        .faq-answer p {
            padding: 0 25px 25px;
            margin: 0;
            color: var(--gray);
            line-height: 1.6;
        }

        .faq-cta {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 20px;
            padding: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 10px 30px rgba(255, 45, 149, 0.3);
            position: relative;
            overflow: hidden;
        }

        .faq-cta::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            z-index: 1;
        }

        .faq-cta::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            z-index: 1;
        }

        .cta-content {
            position: relative;
            z-index: 2;
        }

        .cta-content h3 {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: white;
        }

        .cta-content p {
            color: rgba(255, 255, 255, 0.8);
            margin: 0;
        }

        .faq-cta .btn {
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .faq-cta .btn:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        /* CONTACT SECTION */
        .contact-section {
            position: relative;
        }

        .contact-section::before {
            content: '';
            position: absolute;
            top: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(255, 154, 213, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 50px;
            position: relative;
            z-index: 1;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }

        .contact-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .contact-details h4 {
            font-size: 1.2rem;
            margin-bottom: 8px;
            color: var(--light);
        }

        .contact-details p {
            color: var(--gray);
            margin: 0;
        }

        .social-links h4 {
            font-size: 1.2rem;
            margin-bottom: 15px;
            color: var(--light);
        }

        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-link {
            width: 45px;
            height: 45px;
            background: var(--card-bg);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--light);
            transition: var(--transition-medium);
            border: 1px solid var(--glass-border);
        }

        .social-link:hover {
            background: var(--primary);
            transform: translateY(-5px);
        }

        .contact-form-container {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 40px;
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            box-shadow: var(--card-shadow);
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: 500;
            margin-bottom: 10px;
            color: var(--light);
        }

        .form-control {
            padding: 15px 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--glass-border);
            border-radius: 10px;
            color: var(--light);
            font-size: 1rem;
            transition: var(--transition-medium);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(255, 45, 149, 0.2);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        /* FOOTER */
        .footer {
            background: linear-gradient(135deg, var(--darker) 0%, #1a1a2e 100%);
            padding: 80px 0 0;
            position: relative;
            overflow: hidden;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 10%, rgba(255, 45, 149, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 90%, rgba(255, 154, 213, 0.05) 0%, transparent 50%);
            z-index: 0;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr 1.5fr;
            gap: 40px;
            position: relative;
            z-index: 1;
        }

        .footer-column:first-child {
            grid-column: 1;
        }

        .footer-logo {
            margin-bottom: 20px;
        }

        .footer-description {
            color: var(--gray);
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .footer-social {
            display: flex;
            gap: 15px;
        }

        .footer-title {
            font-size: 1.2rem;
            margin-bottom: 25px;
            color: var(--light);
            position: relative;
            padding-bottom: 10px;
        }

        .footer-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            border-radius: 2px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: var(--gray);
            transition: var(--transition-medium);
            display: inline-block;
        }

        .footer-links a:hover {
            color: var(--primary-light);
            transform: translateX(5px);
        }

        .download-apps {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 30px;
        }

        .download-btn {
            display: flex;
            align-items: center;
            gap: 15px;
            background: var(--card-bg);
            border: 1px solid var(--glass-border);
            border-radius: 10px;
            padding: 15px;
            color: var(--light);
            transition: var(--transition-medium);
        }

        .download-btn:hover {
            background: rgba(255, 255, 255, 0.05);
            transform: translateY(-3px);
        }

        .download-btn i {
            font-size: 1.8rem;
            color: var(--primary-light);
        }

        .download-text {
            display: flex;
            flex-direction: column;
        }

        .download-text span {
            font-size: 0.8rem;
            color: var(--gray);
        }

        .download-text strong {
            font-size: 1rem;
        }

        .payment-methods h4 {
            font-size: 1rem;
            margin-bottom: 15px;
            color: var(--light);
        }

        .payment-icons {
            display: flex;
            gap: 15px;
        }

        .payment-icons i {
            font-size: 2rem;
            color: var(--gray);
            transition: var(--transition-medium);
        }

        .payment-icons i:hover {
            color: var(--primary-light);
        }

        .footer-bottom {
            margin-top: 60px;
            padding: 30px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            z-index: 1;
        }

        .footer-bottom-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-bottom p {
            color: var(--gray);
            margin: 0;
        }

        .footer-bottom-links {
            display: flex;
            gap: 25px;
        }

        .footer-bottom-links a {
            color: var(--gray);
            font-size: 0.9rem;
            transition: var(--transition-medium);
        }

        .footer-bottom-links a:hover {
            color: var(--primary-light);
        }

        /* FLOATING ACTIONS */
        .floating-actions {
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 1000;
        }

        .floating-btn {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(255, 45, 149, 0.4);
            transition: var(--transition-medium);
            position: relative;
        }

        .floating-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(255, 45, 149, 0.6);
        }

        .floating-btn .tooltip {
            position: absolute;
            right: 70px;
            background: var(--dark);
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            font-size: 0.8rem;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: var(--transition-medium);
        }

        .floating-btn:hover .tooltip {
            opacity: 1;
            right: 75px;
        }

        /* LOADING SCREEN */
        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--darker) 0%, var(--dark) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }

        .loading-screen.hidden {
            opacity: 0;
            visibility: hidden;
        }

        .loading-content {
            text-align: center;
            color: white;
        }

        .loading-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .loading-spinner {
            width: 50px;
            height: 50px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: var(--primary);
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 1200px) {
            .footer-content {
                grid-template-columns: 1.5fr 1fr 1fr 1fr;
                gap: 30px;
            }
            
            .footer-column:last-child {
                grid-column: 1 / -1;
                margin-top: 30px;
            }
        }

        @media (max-width: 992px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .faq-cta {
                flex-direction: column;
                text-align: center;
                gap: 25px;
            }
            
            .footer-content {
                grid-template-columns: 1fr 1fr;
                gap: 40px;
            }
        }

        @media (max-width: 768px) {
            .faq-question {
                padding: 20px;
            }
            
            .faq-answer p {
                padding: 0 20px 20px;
            }
            
            .contact-form-container {
                padding: 30px;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .footer-bottom-content {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .floating-actions {
                bottom: 20px;
                right: 20px;
            }
            
            .floating-btn {
                width: 50px;
                height: 50px;
            }
        }

        @media (max-width: 576px) {
            .faq-cta {
                padding: 30px 25px;
            }
            
            .cta-content h3 {
                font-size: 1.5rem;
            }
            
            .contact-form-container {
                padding: 25px 20px;
            }
            
            .footer {
                padding: 60px 0 0;
            }
        }
    </style>

    <script>
        // Initialize FAQ functionality
        document.addEventListener('DOMContentLoaded', function() {
            // FAQ Accordion
            initFAQAccordion();
            
            // Contact Form
            initContactForm();
            
            // Scroll to Top
            initScrollToTop();
            
            // Loading Screen
            initLoadingScreen();
            
            // Floating Chat Button
            initChatButton();
        });

        // FAQ Accordion
        function initFAQAccordion() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                const icon = item.querySelector('.faq-icon i');
                
                question.addEventListener('click', () => {
                    // Close all other items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains('active')) {
                            otherItem.classList.remove('active');
                            otherItem.querySelector('.faq-icon i').className = 'fas fa-plus';
                        }
                    });
                    
                    // Toggle current item
                    item.classList.toggle('active');
                    
                    // Update icon
                    if (item.classList.contains('active')) {
                        icon.className = 'fas fa-times';
                    } else {
                        icon.className = 'fas fa-plus';
                    }
                });
            });
        }

        // Contact Form
        function initContactForm() {
            const contactForm = document.getElementById('contactForm');
            const submitBtn = document.getElementById('submitBtn');
            
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form values
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const subject = document.getElementById('subject').value;
                const message = document.getElementById('message').value;
                
                // Show loading state
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengirim...';
                submitBtn.disabled = true;
                
                // Simulate form submission
                setTimeout(() => {
                    // Show success message
                    showNotification('success', `Terima kasih ${name}! Pesan Anda telah berhasil dikirim. Kami akan membalas ke ${email} dalam 1x24 jam.`);
                    
                    // Reset form
                    contactForm.reset();
                    
                    // Reset button
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }, 2000);
            });
        }

        // Scroll to Top
        function initScrollToTop() {
            const scrollBtn = document.getElementById('scrollTop');
            
            // Show/hide button based on scroll position
            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 300) {
                    scrollBtn.style.display = 'flex';
                } else {
                    scrollBtn.style.display = 'none';
                }
            });
            
            // Scroll to top when clicked
            scrollBtn.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }

        // Loading Screen
        function initLoadingScreen() {
            const loadingScreen = document.getElementById('loadingScreen');
            
            // Hide loading screen after page load
            window.addEventListener('load', () => {
                setTimeout(() => {
                    loadingScreen.classList.add('hidden');
                }, 1500);
            });
        }

        // Floating Chat Button
        function initChatButton() {
            const chatBtn = document.getElementById('chatBtn');
            
            chatBtn.addEventListener('click', () => {
                showNotification('info', 'Fitur Live Chat akan segera tersedia!');
            });
        }

        // Notification System
        function showNotification(type, message) {
            // Create notification element
            const notification = document.createElement('div');
            notification.className = `notification notification-${type}`;
            notification.innerHTML = `
                <div class="notification-content">
                    <i class="fas fa-${type === 'success' ? 'check-circle' : 'info-circle'}"></i>
                    <span>${message}</span>
                </div>
                <button class="notification-close">
                    <i class="fas fa-times"></i>
                </button>
            `;
            
            // Add styles for notification
            if (!document.querySelector('.notification-styles')) {
                const styles = document.createElement('style');
                styles.className = 'notification-styles';
                styles.innerHTML = `
                    .notification {
                        position: fixed;
                        top: 20px;
                        right: 20px;
                        background: var(--card-bg);
                        border-left: 4px solid var(--primary);
                        border-radius: 10px;
                        padding: 15px 20px;
                        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        gap: 15px;
                        max-width: 400px;
                        z-index: 10000;
                        backdrop-filter: blur(10px);
                        border: 1px solid var(--glass-border);
                        transform: translateX(150%);
                        transition: transform 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
                    }
                    
                    .notification.show {
                        transform: translateX(0);
                    }
                    
                    .notification-success {
                        border-left-color: var(--success);
                    }
                    
                    .notification-info {
                        border-left-color: var(--primary);
                    }
                    
                    .notification-content {
                        display: flex;
                        align-items: center;
                        gap: 10px;
                        color: var(--light);
                    }
                    
                    .notification-content i {
                        font-size: 1.2rem;
                    }
                    
                    .notification-success .notification-content i {
                        color: var(--success);
                    }
                    
                    .notification-info .notification-content i {
                        color: var(--primary);
                    }
                    
                    .notification-close {
                        background: none;
                        border: none;
                        color: var(--gray);
                        cursor: pointer;
                        transition: var(--transition-medium);
                    }
                    
                    .notification-close:hover {
                        color: var(--light);
                    }
                `;
                document.head.appendChild(styles);
            }
            
            // Add notification to page
            document.body.appendChild(notification);
            
            // Show notification
            setTimeout(() => {
                notification.classList.add('show');
            }, 100);
            
            // Auto remove after 5 seconds
            setTimeout(() => {
                hideNotification(notification);
            }, 5000);
            
            // Close button event
            const closeBtn = notification.querySelector('.notification-close');
            closeBtn.addEventListener('click', () => {
                hideNotification(notification);
            });
        }
        
        function hideNotification(notification) {
            notification.classList.remove('show');
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        }
    </script>