<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>k-tronics Portfolio</title>
    <style>
        /* Color scheme based on the k-tronics logo */
        :root {
            --primary-black: #000000;
            --primary-white: #ffffff;
            --accent-gray: #333333;
            --light-gray: #f5f5f5;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--primary-white);
            color: var(--primary-black);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background-color: var(--primary-black);
            color: var(--primary-white);
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .logo span {
            color: var(--primary-white);
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            color: var(--primary-white);
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            transition: 0.3s ease;
        }

        .nav-links a:hover {
            color: #ccc;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(45deg, var(--primary-black) 0%, var(--accent-gray) 100%);
            margin-top: 60px;
            position: relative;
            overflow: hidden;
        }

        .hero::after {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(ellipse at center, rgba(255,255,255,0.1) 0%, rgba(0,0,0,0) 70%);
            top: -50%;
            left: -50%;
            animation: rotate 60s linear infinite;
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .hero-content {
            position: relative;
            z-index: 1;
            color: var(--primary-white);
            padding: 0 20px;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .hero h1 {
            font-size: 60px;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            max-width: 600px;
        }

        .cta-btn {
            display: inline-block;
            background-color: var(--primary-white);
            color: var(--primary-black);
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s ease;
            border: 2px solid var(--primary-white);
        }

        .cta-btn:hover {
            background-color: transparent;
            color: var(--primary-white);
        }

        /* About Section */
        .about {
            padding: 100px 0;
            background-color: var(--light-gray);
        }

        .section-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 50px;
            text-align: center;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 100px;
            height: 4px;
            background-color: var(--primary-black);
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
        }

        .about-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .about-img {
            flex: 1;
            min-width: 300px;
            margin-right: 50px;
        }

        .about-img img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .about-text {
            flex: 1;
            min-width: 300px;
        }

        .about-text h3 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .about-text p {
            margin-bottom: 20px;
            line-height: 1.6;
        }

        /* Services Section */
        .services {
            padding: 100px 0;
            background-color: var(--primary-white);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .service-card {
            background-color: var(--light-gray);
            border-radius: 10px;
            padding: 30px;
            transition: 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .service-icon {
            font-size: 40px;
            margin-bottom: 20px;
            color: var(--primary-black);
        }

        .service-card h3 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .service-card p {
            color: #666;
            line-height: 1.6;
        }

        /* Portfolio Section */
        .portfolio {
            padding: 100px 0;
            background-color: var(--light-gray);
        }

        .portfolio-filter {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
        }

        .filter-btn {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            padding: 8px 20px;
            margin: 0 5px;
            border-radius: 20px;
            transition: 0.3s ease;
        }

        .filter-btn.active, .filter-btn:hover {
            background-color: var(--primary-black);
            color: var(--primary-white);
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .portfolio-item {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            height: 250px;
        }

        .portfolio-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s ease;
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: 0.5s ease;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        .portfolio-item:hover .portfolio-img {
            transform: scale(1.1);
        }

        .portfolio-overlay h3 {
            color: var(--primary-white);
            margin-bottom: 10px;
        }

        .portfolio-overlay a {
            color: var(--primary-white);
            text-decoration: none;
            border: 1px solid var(--primary-white);
            padding: 8px 20px;
            border-radius: 20px;
            transition: 0.3s ease;
        }

        .portfolio-overlay a:hover {
            background-color: var(--primary-white);
            color: var(--primary-black);
        }

        /* Testimonials Section */
        .testimonials {
            padding: 100px 0;
            background-color: var(--primary-white);
        }

        .testimonial-slider {
            max-width: 700px;
            margin: 0 auto;
            text-align: center;
        }

        .testimonial {
            padding: 40px;
            border-radius: 10px;
            background-color: var(--light-gray);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin: 20px 0;
        }

        .testimonial p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
            font-style: italic;
        }

        .client-info {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .client-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }

        .client-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .client-text h4 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .client-text p {
            font-size: 14px;
            margin: 0;
            font-style: normal;
            color: #666;
        }

        /* Contact Section */
        .contact {
            padding: 100px 0;
            background-color: var(--primary-black);
            color: var(--primary-white);
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 15px;
            border-radius: 5px;
            border: none;
            background-color: rgba(255,255,255,0.1);
            color: var(--primary-white);
            font-size: 16px;
        }

        .form-control:focus {
            outline: none;
            background-color: rgba(255,255,255,0.2);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .submit-btn {
            background-color: var(--primary-white);
            color: var(--primary-black);
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #ccc;
        }

        /* Footer */
        footer {
            background-color: var(--accent-gray);
            color: var(--primary-white);
            padding: 50px 0 20px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .footer-column {
            flex: 1;
            min-width: 200px;
            margin-bottom: 30px;
        }

        .footer-column h3 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .footer-column p, .footer-column a {
            color: #ccc;
            margin-bottom: 10px;
            display: block;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .footer-column a:hover {
            color: var(--primary-white);
        }

        .social-links {
            display: flex;
            margin-top: 15px;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255,255,255,0.1);
            margin-right: 10px;
            transition: 0.3s ease;
        }

        .social-links a:hover {
            background-color: var(--primary-white);
            color: var(--primary-black);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 40px;
            }
            
            .about-img {
                margin-right: 0;
                margin-bottom: 30px;
            }
            
            .about-content {
                flex-direction: column;
            }
            
            .nav-links {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <div class="logo">K-<span>TRONICS</span></div>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Quality & Affordable<br>Tech Solutions</h1>
                <p>Providing high-quality electronic products and services at competitive prices. Your one-stop shop for all technology needs.</p>
                <a href="#contact" class="cta-btn">Get In Touch</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">About Us</h2>
            <div class="about-content">
                <div class="about-img">
                    <img src="/api/placeholder/600/400" alt="About k-tronics">
                </div>
                <div class="about-text">
                    <h3>Your Trusted Tech Partner</h3>
                    <p>k-tronics is a leading provider of high-quality electronic products and services. With years of experience in the industry, we've built a reputation for delivering exceptional solutions that meet our clients' needs.</p>
                    <p>Our mission is to make cutting-edge technology accessible to everyone through quality products at affordable prices. We stay at the forefront of technological advancements to provide you with the latest innovations.</p>
                    <p>Whether you're looking for personal electronics, business solutions, or custom tech development, k-tronics has you covered with expertise, reliability, and outstanding customer service.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">💻</div>
                    <h3>Computer Solutions</h3>
                    <p>From custom PC builds to laptop repairs and upgrades, we provide comprehensive computer solutions for individuals and businesses.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📱</div>
                    <h3>Mobile Device Services</h3>
                    <p>Expert repairs, screen replacements, and performance optimization for all major smartphone and tablet brands.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🎮</div>
                    <h3>Gaming Systems</h3>
                    <p>Sales, repairs, and modifications for gaming consoles and accessories to enhance your gaming experience.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🔒</div>
                    <h3>Security Systems</h3>
                    <p>Installation and maintenance of advanced security systems to protect your home or business.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🌐</div>
                    <h3>Networking Solutions</h3>
                    <p>Design and implementation of reliable networking infrastructure for seamless connectivity.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🛒</div>
                    <h3>Electronics Retail</h3>
                    <p>Quality and affordable electronics products from trusted brands with expert guidance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="section-title">Our Portfolio</h2>
            <div class="portfolio-filter">
                <button class="filter-btn active">All</button>
                <button class="filter-btn">Computers</button>
                <button class="filter-btn">Mobile</button>
                <button class="filter-btn">Gaming</button>
                <button class="filter-btn">Security</button>
            </div>
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <img src="/api/placeholder/400/300" alt="Project 1" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Corporate Network Setup</h3>
                        <a href="#">View Details</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="/api/placeholder/400/300" alt="Project 2" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Custom Gaming PC Build</h3>
                        <a href="#">View Details</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="/api/placeholder/400/300" alt="Project 3" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Smartphone Repair Service</h3>
                        <a href="#">View Details</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="/api/placeholder/400/300" alt="Project 4" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Security Camera Installation</h3>
                        <a href="#">View Details</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="/api/placeholder/400/300" alt="Project 5" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Smart Home Setup</h3>
                        <a href="#">View Details</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="/api/placeholder/400/300" alt="Project 6" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Console Modification</h3>
                        <a href="#">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <h2 class="section-title">What Our Clients Say</h2>
            <div class="testimonial-slider">
                <div class="testimonial">
                    <p>"k-tronics provided exceptional service when setting up our office network. The team was professional, knowledgeable, and completed the project ahead of schedule. Highly recommended!"</p>
                    <div class="client-info">
                        <div class="client-img">
                            <img src="/api/placeholder/60/60" alt="Client">
                        </div>
                        <div class="client-text">
                            <h4>Sarah Johnson</h4>
                            <p>CEO, TechStart Inc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-form">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>k-tronics</h3>
                    <p>Quality and affordable technology solutions for all your needs. From computers to mobile devices, gaming systems to security solutions.</p>
                    <div class="social-links">
                        <a href="#">FB</a>
                        <a href="#">TW</a>
                        <a href="#">IG</a>
                        <a href="#">LI</a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <a href="#home">Home</a>
                    <a href="#about">About Us</a>
                    <a href="#services">Services</a>
                    <a href="#portfolio">Portfolio</a>
                    <a href="#testimonials">Testimonials</a>
                    <a href="#contact">Contact</a>
                </div>
                <div class="footer-column">
                    <h3>Contact Info</h3>
                    <p>123 Tech Street, Silicon Valley, CA 94000</p>
                    <p>info@k-tronics.com</p>
                    <p>(123) 456-7890</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 k-tronics. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>