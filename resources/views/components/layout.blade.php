<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Portfolio | @yield('title', 'Our Team')</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }
        
        /* Color Scheme */
        :root {
            --charcoal: #2E3440;
            --off-black: #3B4252;
            --primary: #5E81AC;
            --secondary: #81A1C1;
            --accent: #88C0D0;
            --light: #ECEFF4;
            --gray: #D8DEE9;
        }
        
        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--charcoal) 0%, var(--off-black) 100%);
            color: white;
            padding: 3rem 0;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        header h1 {
            font-size: 2.8rem;
            margin-bottom: 0.8rem;
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        
        header p {
            font-size: 1.2rem;
            opacity: 0.85;
            font-weight: 300;
            max-width: 600px;
            margin: 0 auto;
        }
        
        /* Main Content Styles */
        main {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 1.5rem;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 2.5rem;
            color: var(--charcoal);
            position: relative;
            padding-bottom: 0.8rem;
            font-weight: 600;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 2px;
        }
        
        /* Carousel Styles */
        .carousel-container {
            position: relative;
            max-width: 900px;
            margin: 0 auto 3rem;
            overflow: hidden;
            border-radius: 16px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            background: white;
        }
        
        .carousel {
            display: flex;
            transition: transform 0.5s cubic-bezier(0.23, 1, 0.32, 1);
        }
        
        .member-card {
            min-width: 100%;
            padding: 3rem 2rem;
            text-align: center;
        }
        
        .member-image {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 1.8rem;
            border: 5px solid var(--gray);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .member-card:hover .member-image {
            border-color: var(--secondary);
            transform: scale(1.03);
        }
        
        .member-name {
            font-size: 1.8rem;
            margin-bottom: 0.6rem;
            color: var(--charcoal);
            font-weight: 600;
        }
        
        .member-role {
            color: var(--primary);
            font-weight: 500;
            margin-bottom: 1.2rem;
            font-size: 1.1rem;
        }
        
        .member-bio {
            max-width: 600px;
            margin: 0 auto 2rem;
            color: var(--off-black);
            line-height: 1.7;
        }
        
        .portfolio-btn {
            display: inline-block;
            padding: 0.9rem 2.2rem;
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(94, 129, 172, 0.3);
            letter-spacing: 0.5px;
        }
        
        .portfolio-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(94, 129, 172, 0.4);
        }
        
        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.95);
            border: none;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            font-size: 1.5rem;
            color: var(--primary);
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .carousel-btn:hover {
            background: white;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            color: var(--charcoal);
        }
        
        .carousel-btn.prev {
            left: 20px;
        }
        
        .carousel-btn.next {
            right: 20px;
        }
        
        .carousel-indicators {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
            padding: 0.5rem;
        }
        
        .indicator {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: var(--gray);
            margin: 0 0.6rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .indicator.active {
            background: var(--primary);
            transform: scale(1.2);
        }
        
        /* About Section */
        .about-section {
            background: white;
            border-radius: 16px;
            padding: 3rem;
            margin: 4rem auto;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .about-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        
        .about-content p {
            margin-bottom: 1.5rem;
            color: var(--off-black);
            line-height: 1.8;
        }
        
        /* Footer Styles */
        footer {
            background: var(--charcoal);
            color: white;
            padding: 3.5rem 0 2rem;
            margin-top: 5rem;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .footer-section {
            flex: 1;
            min-width: 300px;
            margin-bottom: 2.5rem;
            padding: 0 1.5rem;
            text-align: center;
        }
        
        .footer-section h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.8rem;
            font-weight: 600;
        }
        
        .footer-section h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: var(--primary);
        }
        
        .contact-info {
            list-style: none;
        }
        
        .contact-info li {
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .contact-info i {
            margin-right: 1rem;
            color: var(--accent);
            font-style: normal;
            font-weight: 500;
        }
        
        .social-links {
            display: flex;
            margin-top: 2rem;
            justify-content: center;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            margin: 0 0.8rem;
            transition: all 0.3s ease;
            text-decoration: none;
            font-weight: bold;
        }
        
        .social-links a:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 2.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 1rem;
            width: 100%;
        }
        
        .footer-bottom p {
            opacity: 0.8;
            font-size: 0.95rem;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            header {
                padding: 2.5rem 0;
            }
            
            header h1 {
                font-size: 2.2rem;
            }
            
            .member-card {
                padding: 2.5rem 1.5rem;
            }
            
            .member-image {
                width: 160px;
                height: 160px;
            }
            
            .member-name {
                font-size: 1.6rem;
            }
            
            .carousel-btn {
                width: 45px;
                height: 45px;
                font-size: 1.2rem;
            }
            
            .carousel-btn.prev {
                left: 12px;
            }
            
            .carousel-btn.next {
                right: 12px;
            }
            
            .about-section {
                padding: 2rem;
            }
            
            .footer-section {
                min-width: 100%;
                padding: 0 1rem;
            }
            
            .social-links a {
                margin: 0 0.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Our Amazing Team</h1>
        <p>Meet the talented individuals behind our success</p>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Contact Us</h3>
                <ul class="contact-info">
                    <li><i>📧</i> team@example.com</li>
                    <li><i>📞</i> +1 (123) 456-7890</li>
                    <li><i>📍</i> 123 Tech Street, Innovation City</li>
                </ul>
                <div class="social-links">
                    <a href="#" title="Facebook">f</a>
                    <a href="#" title="Twitter">t</a>
                    <a href="#" title="Instagram">i</a>
                    <a href="#" title="LinkedIn">in</a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Team Portfolio. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('.carousel');
            const cards = document.querySelectorAll('.member-card');
            const prevBtn = document.querySelector('.carousel-btn.prev');
            const nextBtn = document.querySelector('.carousel-btn.next');
            const indicators = document.querySelectorAll('.indicator');
            
            let currentIndex = 0;
            const cardCount = cards.length;
            let autoSlideInterval;
            
            // Initialize carousel
            function updateCarousel() {
                carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
                
                // Update indicators
                indicators.forEach((indicator, index) => {
                    if (index === currentIndex) {
                        indicator.classList.add('active');
                    } else {
                        indicator.classList.remove('active');
                    }
                });
            }
            
            // Next button event
            nextBtn.addEventListener('click', function() {
                currentIndex = (currentIndex + 1) % cardCount;
                resetAutoSlide();
                updateCarousel();
            });
            
            // Previous button event
            prevBtn.addEventListener('click', function() {
                currentIndex = (currentIndex - 1 + cardCount) % cardCount;
                resetAutoSlide();
                updateCarousel();
            });
            
            // Indicator click events
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', function() {
                    currentIndex = index;
                    resetAutoSlide();
                    updateCarousel();
                });
            });
            
            // Reset auto slide timer
            function resetAutoSlide() {
                clearInterval(autoSlideInterval);
                autoSlideInterval = setInterval(function() {
                    currentIndex = (currentIndex + 1) % cardCount;
                    updateCarousel();
                }, 5000);
            }
            
            // Auto-advance carousel every 5 seconds
            autoSlideInterval = setInterval(function() {
                currentIndex = (currentIndex + 1) % cardCount;
                updateCarousel();
            }, 5000);
            
            // Pause auto slide on hover
            carousel.addEventListener('mouseenter', () => {
                clearInterval(autoSlideInterval);
            });
            
            carousel.addEventListener('mouseleave', () => {
                resetAutoSlide();
            });
            
            // Initialize
            updateCarousel();
        });
    </script>
</body>
</html>