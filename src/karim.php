<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <style>
        /* Color scheme based on the k-tronics logo */
        :root {
            --primary-black: #000000;
            --primary-white: #ffffff;
            --accent-gray: #333333;
            --light-gray: #f5f5f5;
            --accent-color: #2c2c2c;
            --highlight: #e6e6e6;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--primary-white);
            color: var(--primary-black);
            line-height: 1.6;
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

        .name {
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .name span {
            color: var(--highlight);
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 25px;
        }

        .nav-links a {
            color: var(--primary-white);
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            transition: 0.3s ease;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: var(--primary-white);
            transition: 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, var(--primary-black) 0%, var(--accent-gray) 100%);
            margin-top: 60px;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("/api/placeholder/1200/800") center/cover;
            opacity: 0.15;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            padding: 0 20px;
            color: var(--primary-white);
            animation: fadeInUp 1s ease-out;
        }

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

        .hero h1 {
            font-size: 56px;
            font-weight: 800;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero h2 {
            font-size: 28px;
            font-weight: 400;
            margin-bottom: 30px;
            color: var(--highlight);
        }

        .hero p {
            font-size: 18px;
            max-width: 600px;
            margin-bottom: 40px;
        }

        .btn {
            display: inline-block;
            background-color: var(--primary-white);
            color: var(--primary-black);
            padding: 12px 30px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s ease;
            border: 2px solid var(--primary-white);
            margin-right: 15px;
        }

        .btn:hover {
            background-color: transparent;
            color: var(--primary-white);
        }

        .btn.secondary {
            background-color: transparent;
            color: var(--primary-white);
        }

        .btn.secondary:hover {
            background-color: var(--primary-white);
            color: var(--primary-black);
        }

        /* About Section */
        .about {
            padding: 100px 0;
            background-color: var(--primary-white);
        }

        .section-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background-color: var(--primary-black);
            bottom: -10px;
            left: 0;
        }

        .about-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 60px;
        }

        .about-img {
            flex: 1;
            min-width: 300px;
            margin-right: 50px;
        }

        .about-img img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .about-text {
            flex: 1;
            min-width: 300px;
        }

        .about-text h3 {
            font-size: 26px;
            margin-bottom: 20px;
        }

        .about-text p {
            margin-bottom: 20px;
            font-size: 16px;
        }

        .tech-stack {
            display: flex;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .tech-item {
            background-color: var(--light-gray);
            padding: 8px 20px;
            margin: 5px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
        }

        /* Experience Section */
        .experience {
            padding: 100px 0;
            background-color: var(--light-gray);
        }

        .timeline {
            position: relative;
            max-width: 800px;
            margin: 50px auto 0;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 3px;
            background-color: var(--accent-gray);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -1.5px;
        }

        .timeline-item {
            position: relative;
            width: 50%;
            padding: 20px 40px;
            box-sizing: border-box;
            animation: fadeIn 0.5s ease-in-out;
        }

        .timeline-item:nth-child(odd) {
            left: 0;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: var(--primary-white);
            border: 3px solid var(--primary-black);
            border-radius: 50%;
            top: 25px;
            z-index: 1;
        }

        .timeline-item:nth-child(odd)::after {
            right: -13px;
        }

        .timeline-item:nth-child(even)::after {
            left: -13px;
        }

        .timeline-content {
            padding: 25px;
            background-color: var(--primary-white);
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            position: relative;
        }

        .timeline-content::after {
            content: '';
            position: absolute;
            border-style: solid;
            border-width: 10px;
            top: 20px;
        }

        .timeline-item:nth-child(odd) .timeline-content::after {
            border-color: transparent var(--primary-white) transparent transparent;
            right: 100%;
        }

        .timeline-item:nth-child(even) .timeline-content::after {
            border-color: transparent transparent transparent var(--primary-white);
            left: 100%;
        }

        .timeline-date {
            font-weight: 600;
            color: var(--primary-black);
            margin-bottom: 10px;
        }

        .timeline-title {
            font-size: 20px;
            margin-bottom: 5px;
            color: var(--primary-black);
        }

        .timeline-subtitle {
            font-size: 16px;
            color: #777;
            margin-bottom: 15px;
        }

        .timeline-desc {
            font-size: 15px;
        }

        /* Skills Section */
        .skills {
            padding: 100px 0;
            background-color: var(--primary-white);
        }

        .skills-content {
            margin-top: 50px;
        }

        .skills-category {
            margin-bottom: 40px;
        }

        .skills-category h3 {
            font-size: 22px;
            margin-bottom: 20px;
            color: var(--primary-black);
        }

        .skill-bars {
            margin-top: 30px;
        }

        .skill-bar {
            margin-bottom: 20px;
        }

        .skill-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .skill-name {
            font-weight: 500;
            font-size: 16px;
        }

        .skill-level {
            font-weight: 500;
            color: #666;
        }

        .progress-bar {
            height: 8px;
            background-color: #e0e0e0;
            border-radius: 4px;
            overflow: hidden;
        }

        .progress {
            height: 100%;
            background-color: var(--primary-black);
            transition: width 1s ease;
        }

        /* Projects Section */
        .projects {
            padding: 100px 0;
            background-color: var(--light-gray);
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .project-card {
            background-color: var(--primary-white);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .project-img {
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .project-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s ease;
        }

        .project-card:hover .project-img img {
            transform: scale(1.1);
        }

        .project-content {
            padding: 25px;
        }

        .project-title {
            font-size: 20px;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .project-category {
            color: #777;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .project-desc {
            font-size: 15px;
            margin-bottom: 20px;
        }

        .project-links {
            display: flex;
        }

        .project-link {
            margin-right: 15px;
            color: var(--primary-black);
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            display: flex;
            align-items: center;
            transition: 0.3s ease;
        }

        .project-link:hover {
            color: #777;
        }

        .project-tech {
            display: flex;
            flex-wrap: wrap;
            margin-top: 15px;
        }

        .project-tech span {
            background-color: var(--light-gray);
            font-size: 12px;
            padding: 5px 10px;
            border-radius: 4px;
            margin-right: 5px;
            margin-bottom: 5px;
        }

        /* Testimonials Section */
        .testimonials {
            padding: 100px 0;
            background-color: var(--primary-white);
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .testimonial-card {
            background-color: var(--light-gray);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .testimonial-text {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
            position: relative;
        }

        .testimonial-text::before {
            content: """;
            font-size: 60px;
            color: #ddd;
            position: absolute;
            top: -20px;
            left: -10px;
            z-index: 0;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }

        .author-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-info h4 {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .author-info p {
            font-size: 14px;
            color: #777;
        }

        /* Contact Section */
        .contact {
            padding: 100px 0;
            background-color: var(--primary-black);
            color: var(--primary-white);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }

        .contact-info h3 {
            font-size: 22px;
            margin-bottom: 20px;
        }

        .contact-info p {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .contact-info p span {
            margin-right: 10px;
        }

        .contact-form {
            background-color: var(--accent-gray);
            padding: 30px;
            border-radius: 8px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border-radius: 4px;
            border: 1px solid #444;
            background-color: rgba(255,255,255,0.1);
            color: var(--primary-white);
            font-size: 16px;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-white);
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .submit-btn {
            background-color: var(--primary-white);
            color: var(--primary-black);
            border: none;
            padding: 12px 30px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #e0e0e0;
        }

        /* Footer */
        footer {
            background-color: var(--accent-gray);
            color: var(--primary-white);
            padding: 25px 0;
            text-align: center;
        }

        .social-links {
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
        }

        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255,255,255,0.1);
            margin: 0 5px;
            color: var(--primary-white);
            text-decoration: none;
            transition: 0.3s ease;
        }

        .social-link:hover {
            background-color: var(--primary-white);
            color: var(--primary-black);
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .timeline::after {
                left: 31px;
            }
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }
            .timeline-item:nth-child(even) {
                left: 0;
            }
            .timeline-item::after {
                left: 16px;
            }
            .timeline-item:nth-child(odd) .timeline-content::after {
                border-color: transparent transparent transparent transparent;
            }
            .timeline-item:nth-child(even) .timeline-content::after {
                border-color: transparent transparent transparent transparent;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 40px;
            }
            .hero h2 {
                font-size: 24px;
            }
            .section-title {
                font-size: 30px;
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

        /* Animation */
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <div class="name">k-tronics <span>Professional</span></div>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#experience">Experience</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#resume">Resume</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Karim S. Haruna</h1>
                <h2>Tech Entrepreneur & Electronics Specialist</h2>
                <p>I'm passionate about creating quality, affordable technology solutions. With experience in hardware, software, and electronics repair, I help businesses and individuals get the most out of their tech investments.</p>
                <a href="#projects" class="btn">View My Work</a>
                <a href="#contact" class="btn secondary">Contact Me</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <div class="about-img">
                    <img src="/api/placeholder/500/500" alt="Profile Picture">
                </div>
                <div class="about-text">
                    <h3>Electronics & Technology Specialist</h3>
                    <p>With over 10 years of experience in the technology sector, I've developed a deep understanding of electronic systems, computer hardware, and mobile device technology. As the founder of k-tronics, I've helped countless clients find quality, affordable tech solutions.</p>
                    <p>My expertise spans across a wide range of areas including custom PC builds, networking solutions, mobile device repairs, gaming system modifications, and security system installations. I pride myself on staying at the cutting edge of technology while maintaining a commitment to quality and affordability.</p>
                    <p>Whether you're looking for personal tech support, business IT solutions, or a consultation on your next tech purchase, I'm here to help you navigate the complex world of technology.</p>
                    <div class="tech-stack">
                        <div class="tech-item">Computer Hardware</div>
                        <div class="tech-item">Networking</div>
                        <div class="tech-item">Mobile Devices</div>
                        <div class="tech-item">Gaming Systems</div>
                        <div class="tech-item">Security Systems</div>
                        <div class="tech-item">Electronics Repair</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="experience">
        <div class="container">
            <h2 class="section-title">My Experience</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">2020 - Present</div>
                        <h3 class="timeline-title">Founder & CEO</h3>
                        <h4 class="timeline-subtitle">k-tronics</h4>
                        <p class="timeline-desc">Founded and manage k-tronics, providing quality and affordable technology solutions across computer hardware, mobile devices, gaming systems, and security installations.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">2017 - 2020</div>
                        <h3 class="timeline-title">Lead Technician</h3>
                        <h4 class="timeline-subtitle">TechHub Solutions</h4>
                        <p class="timeline-desc">Managed a team of technicians in providing comprehensive tech support, repairs, and system installations for business clients.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">2015 - 2017</div>
                        <h3 class="timeline-title">Technical Support Specialist</h3>
                        <h4 class="timeline-subtitle">ElectroFix Inc.</h4>
                        <p class="timeline-desc">Provided technical support for a variety of electronic devices, specializing in computer hardware troubleshooting and mobile device repairs.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">2012 - 2015</div>
                        <h3 class="timeline-title">IT Support Technician</h3>
                        <h4 class="timeline-subtitle">Global Networks</h4>
                        <p class="timeline-desc">Assisted with network setup, maintenance, and troubleshooting for corporate clients, ensuring reliable connectivity and system performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="container">
            <h2 class="section-title">My Skills</h2>
            <div class="skills-content">
                <div class="skills-category">
                    <h3>Technical Skills</h3>
                    <div class="skill-bars">
                        <div class="skill-bar">
                            <div class="skill-info">
                                <span class="skill-name">Computer Hardware</span>
                                <span class="skill-level">95%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress" style="width: 95%;"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-info">
                                <span class="skill-name">Mobile Device Repair</span>
                                <span class="skill-level">90%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress" style="width: 90%;"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-info">
                                <span class="skill-name">Networking & Security</span>
                                <span class="skill-level">85%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress" style="width: 85%;"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-info">
                                <span class="skill-name">Gaming System Modifications</span>
                                <span class="skill-level">80%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress" style="width: 80%;"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-info">
                                <span class="skill-name">Troubleshooting & Diagnostics</span>
                                <span class="skill-level">95%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress" style="width: 95%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="skills-category">
                    <h3>Professional Skills</h3>
                    <div class="skill-bars">
                        <div class="skill-bar">
                            <div class="skill-info">
                                <span class="skill-name">Customer Service</span>
                                <span class="skill-level">90%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress" style="width: 90%;"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-info">
                                <span class="skill-name">Project Management</span>
                                <span class="skill-level">85%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress" style="width: 85%;"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-info">
                                <span class="skill-name">Technical Writing</span>
                                <span class="skill-level">80%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress" style="width: 80%;"></div>
                            </div>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-info">
                                <span class="skill-name">Team Leadership</span>
                                <span class="skill-level">85%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress" style="width: 85%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <h2 class="section-title">My Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-img">
                        <img src="/api/placeholder/400/300" alt="Corporate Network">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Enterprise Network Solution</h3>
                        <div class="project-category">Networking</div>
                        <p class="project-desc">Designed and implemented a secure, scalable network infrastructure for a medium-sized business with multiple locations.</p>
                        <div class="project-tech">
                            <span>Network Design</span>
                            <span>Security</span>
                            <span>VPN</span>
                            <span>Firewall</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link">View Case Study →</a>
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-img">
                        <img src="/api/placeholder/400/300" alt="Corporate Network">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Enterprise Network Solution</h3>
                        <div class="project-category">Networking</div>
                        <p class="project-desc">Designed and implemented a secure, scalable network infrastructure for a medium-sized business with multiple locations.</p>
                        <div class="project-tech">
                            <span>Network Design</span>
                            <span>Security</span>
                            <span>VPN</span>
                            <span>Firewall</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link">View Case Study →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Karim S. Haruna. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>