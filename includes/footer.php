    <!-- Global Call To Action -->
    <!-- Global Call To Action -->
    <section class="cta-section" style="padding: 60px 0; text-align: center; color: #fff; position: relative; overflow: hidden; background: linear-gradient(-45deg, #041E42, #06B6D4, #041E42, #06B6D4); background-size: 400% 400%; animation: gradientBG 15s ease infinite;">

        <!-- Floating Glass Elements -->
        <div class="glass-shape shape-1"></div>
        <div class="glass-shape shape-2"></div>
        <div class="glass-shape shape-3"></div>

        <div class="container" style="position: relative; z-index: 2;" data-aos="fade-up">
            <h3 style="color: #fff; font-size: clamp(1.0rem, 6vw, 1.5rem); font-weight: 800;">Ready to Elevate Your Business?</h3>
            <p style="font-size: 1.2rem; max-width: 700px; margin: 0 auto 40px; color: rgba(255,255,255,0.9); line-height: 1.8;">Join hands with ITways to unlock innovative tech solutions, robust software development, and unparalleled IT support tailored to your success.</p>

            <a href="<?php echo $base_url; ?>contact.php" class="cta-animated-btn">
                <span>Start Your Project</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>

    <footer class="section" style="background: var(--primary-color); color: rgba(255,255,255,0.7); padding-top: 80px; padding-bottom: 50px;">
        <div class="container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px;">

            <!-- Column 1: About -->
            <div class="footer-box">
                <a href="<?php echo $base_url; ?>" class="logo">
                    <img src="<?php echo $base_url; ?>assets/logo.png" alt="IT WAYS" style="height: 55px; transition: all 0.3s ease; filter: brightness(0) invert(1);">
                </a>
                <p style="margin-top: 20px; line-height: 1.6; color: rgba(255,255,255,0.7);">We offer our clients technology solutions that add real value to their business. It’s simple we understand that our success is measured by the success of our clients.</p>
                <div class="footer-social-links" style="margin-top: 25px; display: flex; gap: 15px;">
                    <a href="https://facebook.com/itwaysindia" target="_blank" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(255,255,255,0.05); display: flex; align-items: center; justify-content: center; color: #fff; transition: 0.3s; border: 1px solid rgba(255,255,255,0.1);"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://linkedin.com/company/itwaysindia" target="_blank" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(255,255,255,0.05); display: flex; align-items: center; justify-content: center; color: #fff; transition: 0.3s; border: 1px solid rgba(255,255,255,0.1);"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://twitter.com/itwaysindia" target="_blank" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(255,255,255,0.05); display: flex; align-items: center; justify-content: center; color: #fff; transition: 0.3s; border: 1px solid rgba(255,255,255,0.1);"><i class="fab fa-x-twitter"></i></a>
                    <a href="https://instagram.com/itwaysindia" target="_blank" style="width: 40px; height: 40px; border-radius: 50%; background: rgba(255,255,255,0.05); display: flex; align-items: center; justify-content: center; color: #fff; transition: 0.3s; border: 1px solid rgba(255,255,255,0.1);"><i class="fab fa-instagram"></i></a>
                </div>
                <p style="margin-top: 25px; font-size: 12px; color: rgba(255,255,255,0.4);">Copyright &copy; 2011 &ndash; <?php echo date('Y'); ?> IT WAYS. All Rights Reserved.</p>
            </div>

            <!-- Column 2: IT Services -->
            <div class="footer-box">
                <h3 style="color: #fff; margin-bottom: 20px; font-size: 16px; font-weight: 700; letter-spacing: 0.5px; text-transform: uppercase;"><i class="fas fa-laptop-code" style="color: var(--secondary-color); margin-right: 8px;"></i>IT Services</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 10px;">
                        <a href="<?php echo $base_url; ?>service-details.php?type=software-development" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>Custom Software
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="<?php echo $base_url; ?>service-details.php?type=computer-networking" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>Network Solutions
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="<?php echo $base_url; ?>service-details.php?type=digital-consulting" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>Digital Consulting
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="<?php echo $base_url; ?>service-details.php?type=video-surveillance-solution" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>CCTV & Surveillance
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="<?php echo $base_url; ?>service-details.php?type=web-design-development" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>Web Development
                        </a>
                    </li>
                </ul>
            </div>


            <!-- Column 3: Industries -->
            <div class="footer-box">
                <h3 style="color: #fff; margin-bottom: 20px; font-size: 16px; font-weight: 700; letter-spacing: 0.5px; text-transform: uppercase;"><i class="fas fa-industry" style="color: var(--secondary-color); margin-right: 8px;"></i>Industries</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 10px;">
                        <a href="#" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>Real Estate
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="#" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>Manufacturing
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="#" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>Enterprise Technology
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="#" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>Higher Education
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="#" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>Banking
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="#" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>Healthcare
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Company -->
            <!-- <div class="footer-box">
                <h3 style="color: #fff; margin-bottom: 20px; font-size: 16px; font-weight: 700; letter-spacing: 0.5px; text-transform: uppercase;">Company</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 10px;">
                        <a href="<?php echo $base_url; ?>about.php" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>About
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="<?php echo $base_url; ?>about.php" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>Our Approach
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="<?php echo $base_url; ?>products.php" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>Products
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="<?php echo $base_url; ?>contact.php" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>Locations
                        </a>
                    </li>
                </ul>
            </div> -->

            <!-- Column 5: Support -->
            <!-- <div class="footer-box">
                <h3 style="color: #fff; margin-bottom: 20px; font-size: 16px; font-weight: 700; letter-spacing: 0.5px; text-transform: uppercase;">Support</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 10px;">
                        <a href="#" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>Forum Support
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="#" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>Help &amp; FAQ
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="<?php echo $base_url; ?>contact.php" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>Contact Us
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="#" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>Cookies Policy
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="#" style="color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: 0.2s; display: flex; align-items: center; gap: 6px;">
                            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--secondary-color);"></i>Privacy Policy
                        </a>
                    </li>
                </ul>
            </div> -->

            <!-- Column 4: Cities We Serve -->
            <div class="footer-box">
                <h3 style="color: #fff; margin-bottom: 20px; font-size: 18px; font-weight: 700;"><i class="fas fa-map-marker-alt" style="color: var(--secondary-color); margin-right: 8px;"></i>Cities We Serve</h3>
                <div style="display: flex; flex-wrap: wrap; gap: 7px;">
                    <?php
                    $cities = [
                        'Delhi NCR',
                        'Mumbai',
                        'Bangalore',
                        'Hyderabad',
                        'Pune',
                        'Chennai',
                        'Kolkata',
                        'Gurugram',
                        'Ahmedabad',
                        'New Delhi',
                        'Noida',
                        'Lucknow',
                        'Jaipur',
                        'Chandigarh',
                        'Indore',
                        'Bhopal',
                        'Surat',
                        'Nagpur',
                        'Patna'
                    ];
                    foreach ($cities as $city): ?>
                        <span style="display: inline-flex; align-items: center; gap: 5px; padding: 4px 10px; background: rgba(14, 165, 233, 0.08); border: 1px solid rgba(14, 165, 233, 0.15); border-radius: 20px; font-size: 11px; font-weight: 600; color: rgba(255,255,255,0.75);">
                            <i class="fas fa-circle" style="font-size: 4px; color: var(--secondary-color);"></i>
                            <?php echo $city; ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Column 5: Coverage Areas -->
            <div class="footer-box">
                <h3 style="color: #fff; margin-bottom: 20px; font-size: 18px; font-weight: 700;"><i class="fas fa-globe" style="color: var(--secondary-color); margin-right: 8px;"></i>Coverage Areas</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <?php
                    $coverage = ['India', 'USA', 'Canada', 'UK', 'Australia', 'UAE', 'Singapore', 'South Africa'];
                    foreach ($coverage as $country): ?>
                        <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 8px; color: rgba(255,255,255,0.75); font-size: 13px; font-weight: 500;">
                            <i class="fas fa-circle" style="font-size: 4px; color: var(--secondary-color); flex-shrink: 0;"></i>
                            <?php echo $country; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Column 6: Contact Form -->
            <!-- <div class="footer-box">
                <h3 style="color: #fff; margin-bottom: 25px; font-size: 18px; font-weight: 700;">Get in Touch</h3>
                <form style="display: flex; flex-direction: column; gap: 12px;">
                    <input type="text" placeholder="Name" style="width: 100%; padding: 14px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; color: #fff; outline: none; transition: 0.3s;">
                    <input type="email" placeholder="E-Mail" style="width: 100%; padding: 14px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; color: #fff; outline: none; transition: 0.3s;">
                    <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; border-radius: 12px; font-weight: 700;">Send Message</button>
                </form>
            </div> -->
        </div>

        <!-- Bottom Bar -->
        <div class="container" style="margin-top: 50px; padding-top: 25px; border-top: 1px solid rgba(255,255,255,0.1); display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 20px; font-size: 13px;">
            <div style="color: rgba(255,255,255,0.5);">&copy; <?php echo date('Y'); ?> IT WAYS. All Rights Reserved.</div>
            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                <a href="#" style="color: rgba(255,255,255,0.6); text-decoration: none; transition: 0.3s;">Privacy Policy</a> |
                <a href="#" style="color: rgba(255,255,255,0.6); text-decoration: none; transition: 0.3s;">Terms & Conditions</a> |
                <a href="#" style="color: rgba(255,255,255,0.6); text-decoration: none; transition: 0.3s;">Refund Policy</a>
            </div>
        </div>

    </footer>
    <!-- Floating Widgets -->
    <div class="floating-widgets-right">
        <button id="back-to-top" class="floating-btn" aria-label="Back to Top" style="display: none; background: var(--secondary-color); color: #fff; box-shadow: 0 5px 15px rgba(6,182,212,0.4);">
            <i class="fas fa-arrow-up"></i>
        </button>
        <button id="dark-mode-toggle" class="floating-btn dark-toggle" aria-label="Toggle Dark Mode">
            <i class="fas fa-moon"></i>
        </button>
        <a href="https://wa.me/919919227600" target="_blank" class="floating-btn whatsapp-btn" aria-label="Chat on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <div class="floating-widgets-left">
        <button id="chat-box-toggle" class="floating-btn chat-btn" aria-label="Open Chat">
            <i class="fas fa-comments"></i>
        </button>
        <div id="chat-box" class="chat-box-container">
            <div class="chat-box-header">
                <h3><i class="fas fa-robot"></i> ITways AI</h3>
                <button id="close-chat"><i class="fas fa-times"></i></button>
            </div>
            <div class="chat-box-body">
                <div class="chat-msg bot-msg">
                    <span class="msg-sender">ITWAYS AI</span>
                    <div class="msg-content">Hello! I am ITways AI. How can I assist you with our services today?</div>
                </div>
                <div class="chat-msg user-msg">
                    <div class="msg-content">hii</div>
                </div>
            </div>
            <div class="chat-box-footer">
                <input type="text" placeholder="Ask something...">
                <button><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Vanilla Tilt JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js" integrity="sha512-wC/g5368cx-922618K/04+01oUIf0B1kK1F9H2kdtKVP0XkX5bBwA35iZfA8D2yP/8fH2wE8GZ4B5Bf4kHwEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
    </script>
    <script src="<?php echo $base_url; ?>js/script.js"></script>
    </body>

    </html>