<?php include 'includes/header.php'; ?>

<!-- Corporate Premium Hero Section -->
<section id="home" class="corporate-hero">
    <!-- Interactive Canvas Particle Network -->
    <canvas id="heroCanvas" class="hero-canvas"></canvas>

    <div class="container-fluid px-3 px-lg-5" style="position: relative; z-index: 5;">

        <!-- ===== Interactive Hero Slider ===== -->
        <div class="hero-main-swiper swiper" id="heroMainSwiper">
            <div class="swiper-wrapper">

                <!-- Slide 1: Lead Management -->
                <div class="swiper-slide">
                    <div class="hero-split-layout">
                        <div class="hero-content-col">
                            <div class="corporate-badge"><span class="hero-badge-dot"></span> Smart Lead Management</div>
                            <div class="hero-slide-icon-wrap" style="justify-content: flex-start; margin: 0 0 10px;">
                                <div class="hero-slide-icon-bg hero-icon-blue"><i class="fas fa-user-plus"></i></div>
                            </div>
                            <h1>Smart <span class="shimmer-text">Lead Management</span></h1>
                            <p>Capture, organize, and track all your leads from multiple sources in one place. Never miss an opportunity with automated follow-ups and real-time updates.<br>
                                <a href="#contact" class="btn-corporate-primary" style="margin-top: 20px;">Start Free Trial <i class="fas fa-arrow-right ms-1"></i></a>
                            </p>
                        </div>
                        <div class="hero-image-col">
                            <img src="<?php echo $base_url; ?>assets/screenshots/lead.png" alt="Leads" class="hero-floating-img img-delay-1">
                        </div>
                    </div>
                </div>

                <!-- Slide 2: WhatsApp Integration -->
                <div class="swiper-slide">
                    <div class="hero-split-layout">
                        <div class="hero-content-col">
                            <div class="corporate-badge"><span class="hero-badge-dot"></span> Instant Connectivity</div>
                            <div class="hero-slide-icon-wrap" style="justify-content: flex-start; margin: 0 0 10px;">
                                <div class="hero-slide-icon-bg hero-icon-emerald"><i class="fab fa-whatsapp"></i></div>
                            </div>
                            <h1>WhatsApp <span class="shimmer-text">Integration</span></h1>
                            <p>Connect instantly with your clients using automated messages, real-time chat, and smart follow-up reminders directly from your CRM.<br>
                                <a href="https://wapzapp.itways.in/" class="btn-corporate-primary" style="margin-top: 20px;">Try Now <i class="fas fa-arrow-right ms-1"></i></a>
                            </p>
                        </div>
                        <div class="hero-image-col">
                            <img src="<?php echo $base_url; ?>assets/screenshots/whatsapp.png" alt="WhatsApp" class="hero-floating-img img-delay-2">
                        </div>
                    </div>
                </div>

                <!-- Slide 3: Team Management -->
                <div class="swiper-slide">
                    <div class="hero-split-layout">
                        <div class="hero-content-col">
                            <div class="corporate-badge"><span class="hero-badge-dot"></span> Team Collaboration</div>
                            <div class="hero-slide-icon-wrap" style="justify-content: flex-start; margin: 0 0 10px;">
                                <div class="hero-slide-icon-bg hero-icon-amber"><i class="fas fa-users-viewfinder"></i></div>
                            </div>
                            <h1>Team Management <span class="shimmer-text">System</span></h1>
                            <p>Assign leads, monitor team performance, and track activities in real-time to improve productivity and accountability.<br>
                                <a href="#contact" class="btn-corporate-primary" style="margin-top: 20px;">Start Free Trial <i class="fas fa-arrow-right ms-1"></i></a>
                            </p>
                        </div>
                        <div class="hero-image-col">
                            <img src="<?php echo $base_url; ?>assets/screenshots/team.png" alt="Team" class="hero-floating-img">
                        </div>
                    </div>
                </div>

                <!-- Slide 4: Reports & Analytics -->
                <div class="swiper-slide">
                    <div class="hero-split-layout">
                        <div class="hero-content-col">
                            <div class="corporate-badge"><span class="hero-badge-dot"></span> Data Insights</div>
                            <div class="hero-slide-icon-wrap" style="justify-content: flex-start; margin: 0 0 10px;">
                                <div class="hero-slide-icon-bg hero-icon-blue"><i class="fas fa-chart-line"></i></div>
                            </div>
                            <h1>Reports & <span class="shimmer-text">Analytics</span></h1>
                            <p>Get detailed insights into your business with daily and monthly reports, lead conversion tracking, and performance analysis.<br>
                                <a href="#contact" class="btn-corporate-primary" style="margin-top: 20px;">Start Free Trial <i class="fas fa-arrow-right ms-1"></i></a>
                            </p>
                        </div>
                        <div class="hero-image-col">
                            <img src="<?php echo $base_url; ?>assets/screenshots/report.png" alt="Analytics" class="hero-floating-img img-delay-1">
                        </div>
                    </div>
                </div>

                <!-- Slide 5: Business Benefits -->
                <div class="swiper-slide">
                    <div class="hero-split-layout">
                        <div class="hero-content-col">
                            <div class="corporate-badge"><span class="hero-badge-dot"></span> Core Benefits</div>
                            <div class="hero-slide-icon-wrap" style="justify-content: flex-start; margin: 0 0 10px;">
                                <div class="hero-slide-icon-bg hero-icon-emerald"><i class="fas fa-arrow-trend-up"></i></div>
                            </div>
                            <h1>Why Choose <span class="shimmer-text">Our CRM</span></h1>
                            <p>Boost efficiency, increase sales, and manage your entire business from one centralized platform designed for real estate professionals.<br>
                                <a href="#contact" class="btn-corporate-primary" style="margin-top: 20px;">Start Free Trial <i class="fas fa-arrow-right ms-1"></i></a>
                            </p>
                        </div>
                        <div class="hero-image-col">
                            <img src="<?php echo $base_url; ?>assets/img/hero_web_1775735950992.png" alt="Benefits" class="hero-floating-img img-delay-2">
                        </div>
                    </div>
                </div>

                <!-- Slide 6: Demo -->
                <div class="swiper-slide">
                    <div class="hero-split-layout">
                        <div class="hero-content-col">
                            <div class="corporate-badge"><span class="hero-badge-dot"></span> Live Experience</div>
                            <div class="hero-slide-icon-wrap" style="justify-content: flex-start; margin: 0 0 10px;">
                                <div class="hero-slide-icon-bg hero-icon-amber"><i class="fas fa-laptop-file"></i></div>
                            </div>
                            <h1>Live CRM <span class="shimmer-text">Demo</span></h1>
                            <p>Experience our CRM in action with a real-time dashboard preview showcasing powerful features and an easy-to-use interface.<br>
                                <a href="#contact" class="btn-corporate-primary" style="margin-top: 20px;">Start Free Trial <i class="fas fa-arrow-right ms-1"></i></a>
                            </p>
                        </div>
                        <div class="hero-image-col">
                            <img src="<?php echo $base_url; ?>assets/screenshots/demo.png" alt="Dashboard Demo" class="hero-floating-img">
                        </div>
                    </div>
                </div>
            </div><!-- /.swiper-wrapper -->

            <!-- Navigation Arrows -->
            <button class="hero-nav-btn hero-nav-prev" id="heroSwiperPrev" aria-label="Previous slide">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="hero-nav-btn hero-nav-next" id="heroSwiperNext" aria-label="Next slide">
                <i class="fas fa-chevron-right"></i>
            </button>

            <!-- Slide Tabs (Dynamic Pagination Placeholder) -->
            <div class="hero-slide-tabs" id="heroSlideTabs">
                <button class="hero-tab" data-index="0">
                    <span class="tab-label">Leads</span>
                </button>
                <button class="hero-tab" data-index="1">
                    <span class="tab-label">WhatsApp</span>
                </button>
                <button class="hero-tab" data-index="2">
                    <span class="tab-label">Team</span>
                </button>
                <button class="hero-tab" data-index="3">
                    <span class="tab-label">Reports</span>
                </button>
                <button class="hero-tab" data-index="4">
                    <span class="tab-label">Benefits</span>
                </button>
                <button class="hero-tab" data-index="5">
                    <span class="tab-label">Demo</span>
                </button>
            </div>

        </div><!-- /.hero-main-swiper -->

    </div>
</section>

<!-- Intro Section -->
<section id="intro" class="section bg-light-bg">
    <div class="container d-flex-align-center-gap-60-wrap">
        <div class="flex-1-min-300">
            <h4 class="text-secondary-color">Your Technology Partner</h4>
            <h3>Empowering Businesses Since 2013</h3>
            <p>ITways is a leading software solutions and services company, helping clients to develop and refine information systems to unlock their business potential. We achieve this by providing top-tier candidates for various IT roles, aiming to make tangible and lasting improvements in our clients' performance.</p>
            <div class="idx-feat-grid">
                <div class="feat-item">
                    <i class="fas fa-check-circle text-secondary-color"></i>
                    <span>100% Project Delivery</span>
                </div>
                <div class="feat-item">
                    <i class="fas fa-check-circle text-secondary-color"></i>
                    <span>Quality Assurance (QA)</span>
                </div>
                <div class="feat-item">
                    <i class="fas fa-check-circle text-secondary-color"></i>
                    <span>Expert Support</span>
                </div>
                <div class="feat-item">
                    <i class="fas fa-check-circle text-secondary-color"></i>
                    <span>Innovative Solutions</span>
                </div>
            </div>
        </div>
        <div class="flex-1-min-300 position-relative">
            <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-4.0.3&auto=format&fit=crop&w=1738&q=80" alt="ITWAYS Technology Partner Lucknow" class="img-fluid hero-image-br-shadow" loading="lazy">
            <div class="idx-experience-badge">
                <span class="idx-experience-val">15+</span>
                <span class="idx-experience-text">Years Experience</span>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section">
    <div class="container d-flex-align-center-gap-60-wrap-reverse">
        <div class="flex-1-min-300" data-aos="fade-left">
            <h4 class="text-secondary-color">01. About Us</h4>
            <h3>Company Overview</h3>
            <p>IT WAYS is a Lucknow-based software solutions company delivering cost-effective and scalable enterprise applications to clients across the globe.</p>
            <p class="mt-20">We focus on innovation, user experience, and reliable support to help businesses achieve digital transformation. With expertise across multiple industries, we provide modern IT solutions that drive growth and efficiency.</p>
        </div>
        <div class="flex-1-min-300 position-relative">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" alt="About ITWAYS - Software Solutions Lucknow" class="w-100-h-400-cover-br-8-shadow z-index-2 position-relative" loading="lazy">
            <div class="idx-about-image-overlay"></div>
        </div>
    </div>
</section>

<!-- Range of Services -->
<section id="services" class="section bg-light-bg">
    <div class="container">
        <h4 class="text-center text-secondary-color">Our Range of Services</h4>
        <h3 class="text-center mb-60">Solutions for Every Need</h3>
        <div class="bento-grid">
            <a href="<?php echo $base_url; ?>service-details.php?type=software-development" class="card service-card bento-card-wide idx-bento-wide idx-bento-wide-1" data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.1">
                <div class="icon-box icon-box-mb-25"><i class="fas fa-laptop-code"></i></div>
                <h4 class="fs-28">Custom Software Development</h4>
                <p class="fs-16 mt-10">Tailored software solutions designed to meet your unique business requirements and challenges. We engineer precise logic matching your exact scale requirements.</p>
            </a>
            <a href="<?php echo $base_url; ?>service-details.php?type=web-application-development" class="card service-card" data-aos="fade-up" data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.1">
                <div class="icon-box icon-box-mb-25"><i class="fas fa-globe"></i></div>
                <h4>Web Application Development</h4>
                <p>Highly interactive and scalable web applications built with modern frameworks and cutting-edge tech.</p>
            </a>
            <a href="<?php echo $base_url; ?>service-details.php?type=seo-solution" class="card service-card" data-aos="fade-up" data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.1">
                <div class="icon-box icon-box-mb-25"><i class="fas fa-magnifying-glass-chart"></i></div>
                <h4>SEO Development</h4>
                <p>Strategic organic search engine optimization tracking to radically boost your active online visibility globally.</p>
            </a>
            <a href="<?php echo $base_url; ?>service-details.php?type=computer-hardware" class="card service-card bento-card-wide idx-bento-wide idx-bento-wide-2" data-aos="fade-up" data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.1">
                <div class="icon-box icon-box-mb-25"><i class="fas fa-server"></i></div>
                <h4 class="fs-28">IT Infrastructure</h4>
                <p class="fs-16 mt-10">Robust and ultra-secure IT infrastructure hosting solutions, handling hardware arrays entirely to vast encrypted network management solutions for modern enterprise.</p>
            </a>
            <a href="<?php echo $base_url; ?>service-details.php?type=video-surveillance-solution" class="card service-card" data-aos="fade-up" data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.1">
                <div class="icon-box icon-box-mb-25"><i class="fas fa-video"></i></div>
                <h4>Video Surveillance</h4>
                <p>Advanced real-time physical security and complex surveillance matrix setups for monitoring assets securely.</p>
            </a>
            <div class="card service-card" data-aos="fade-up" data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.1">
                <div class="icon-box icon-box-mb-25"><i class="fas fa-comment-sms"></i></div>
                <h4>Bulk SMS Services</h4>
                <p>High-volume API pathways for reliable transactional routing and lightning-fast delivery.</p>
            </div>
        </div>
    </div>
</section>

<!-- Industries We Serve -->
<section id="industries" class="section">
    <div class="container pb-40">
        <h4 class="text-center text-secondary-color">Industries We Serve</h4>
        <h3 class="text-center mb-80">Expertise Across Domains</h3>
        <div class="industries-grid">
            <!-- <div class="industry-item card" data-aos="zoom-in" data-tilt data-tilt-max="15" data-tilt-speed="400">
                <i class="fas fa-bolt" style="color: var(--secondary-color);"></i>
                <span>Real Estate</span>
            </div> -->
            <div class="industry-item card" data-aos="zoom-in" data-tilt data-tilt-max="15" data-tilt-speed="400">
                <i class="fas fa-building" style="color: var(--secondary-color);"></i>
                <span>Real Estate</span>
            </div>
            <div class="industry-item card" data-aos="zoom-in" data-tilt data-tilt-max="15" data-tilt-speed="400">
                <i class="fas fa-graduation-cap" style="color: var(--secondary-color);"></i>
                <span>Education</span>
            </div>
            <div class="industry-item card" data-aos="zoom-in" data-tilt data-tilt-max="15" data-tilt-speed="400">
                <i class="fas fa-cart-shopping" style="color: var(--secondary-color);"></i>
                <span>E-Commerce</span>
            </div>
            <div class="industry-item card" data-aos="zoom-in" data-tilt data-tilt-max="15" data-tilt-speed="400">
                <i class="fas fa-utensils" style="color: var(--secondary-color);"></i>
                <span>Restaurant</span>
            </div>
            <div class="industry-item card" data-aos="zoom-in" data-tilt data-tilt-max="15" data-tilt-speed="400">
                <i class="fas fa-plane" style="color: var(--secondary-color);"></i>
                <span>Tour & Travels</span>
            </div>
            <div class="industry-item card" data-aos="zoom-in" data-tilt data-tilt-max="15" data-tilt-speed="400">
                <i class="fas fa-heart-pulse" style="color: var(--secondary-color);"></i>
                <span>Healthcare</span>
            </div>
            <div class="industry-item card" data-aos="zoom-in" data-tilt data-tilt-max="15" data-tilt-speed="400">
                <i class="fas fa-basket-shopping" style="color: var(--secondary-color);"></i>
                <span>Grocery</span>
            </div>

            <div class="industry-item card" data-aos="zoom-in" data-tilt data-tilt-max="15" data-tilt-speed="400">
                <i class="fas fa-building-columns" style="color: var(--secondary-color);"></i>
                <span>Banking</span>
            </div>

            <div class="industry-item card" data-aos="zoom-in" data-tilt data-tilt-max="15" data-tilt-speed="400">
                <i class="fas fa-chart-line" style="color: var(--secondary-color);"></i>
                <span>Capital markets</span>
            </div>

            <div class="industry-item card" data-aos="zoom-in" data-tilt data-tilt-max="15" data-tilt-speed="400">
                <i class="fas fa-industry" style="color: var(--secondary-color);"></i>
                <span>Manufacturing</span>
            </div>

        </div>
    </div>
</section>

<!-- Stats Counter Section -->
<section class="section stats-container idx-stats-section" style="background: var(--light-bg);">
    <div class="container idx-stats-grid">
        <div class="stat-item idx-stat-box" style="background: var(--card-bg); padding: 40px; border-radius: 24px; box-shadow: var(--shadow);">
            <h4 class="idx-stat-val"><span class="counter" data-target="10">0</span>+</h4>
            <p class="idx-stat-text">Years of Experience</p>
        </div>
        <div class="stat-item idx-stat-box" style="background: var(--card-bg); padding: 40px; border-radius: 24px; box-shadow: var(--shadow);">
            <h4 class="idx-stat-val"><span class="counter" data-target="321">0</span>+</h4>
            <p class="idx-stat-text">Projects Completed</p>
        </div>
        <div class="stat-item idx-stat-box" style="background: var(--card-bg); padding: 40px; border-radius: 24px; box-shadow: var(--shadow);">
            <h4 class="idx-stat-val"><span class="counter" data-target="280">0</span>+</h4>
            <p class="idx-stat-text">Satisfied Customers</p>
        </div>
        <div class="stat-item idx-stat-box" style="background: var(--card-bg); padding: 40px; border-radius: 24px; box-shadow: var(--shadow);">
            <h4 class="idx-stat-val"><span class="counter" data-target="17">0</span>+</h4>
            <p class="idx-stat-text">Expert Workers</p>
        </div>
    </div>
</section>

<!-- Technology Stack Slider -->
<section id="tech-stack" class="section tech-stack-section">
    <div class="container">
        <h2 class="text-center text-secondary-color mb-40">Technology Stack</h2>
        <div class="swiper tech-swiper" data-aos="fade-up">
            <div class="swiper-wrapper">
                <div class="swiper-slide tech-slide"><i class="fab fa-html5"></i><span>HTML5</span></div>
                <div class="swiper-slide tech-slide"><i class="fab fa-laravel"></i><span>Laravel</span></div>
                <div class="swiper-slide tech-slide"><i class="fab fa-angular"></i><span>Angular</span></div>
                <div class="swiper-slide tech-slide"><i class="fab fa-python"></i><span>Python</span></div>
                <div class="swiper-slide tech-slide"><i class="fab fa-java"></i><span>Java</span></div>
                <div class="swiper-slide tech-slide"><i class="fab fa-wordpress"></i><span>Wordpress</span></div>
                <div class="swiper-slide tech-slide"><i class="fab fa-php"></i><span>PHP</span></div>
                <div class="swiper-slide tech-slide"><i class="fab fa-js"></i><span>JavaScript</span></div>
            </div>
        </div>
    </div>
</section>

<!-- Final Contact / Query Section -->
<section id="contact" class="section bg-light-bg">
    <div class="container idx-contact-grid">
        <div data-aos="fade-right">
            <h4 class="text-secondary-color">Have a Query?</h4>
            <h3>Let's Discuss Your Project</h3>
            <p class="mt-20">Fill out the form and our team will get back to you within 24 hours.</p>
            <div class="mt-40">
                <div class="idx-contact-method">
                    <i class="fas fa-phone-alt contact-icon-secondary"></i>
                    <div>
                        <h4 class="text-heading-color">Call Us</h4>
                        <p>+91 9919227600</p>
                    </div>
                </div>
                <div class="idx-contact-method">
                    <i class="fas fa-envelope contact-icon-secondary"></i>
                    <div>
                        <h4 class="text-heading-color">Email Us</h4>
                        <p>info@itways.in</p>
                    </div>
                </div>
                <div class="idx-contact-method mb-0">
                    <i class="fas fa-location-dot contact-icon-secondary"></i>
                    <div>
                        <h4 class="text-heading-color">Visit Us</h4>
                        <p>LGF 180, Khazana Complex, Ashiana, Lucknow</p>
                    </div>
                </div>
            </div>
        </div>
        <form action="<?php echo $base_url; ?>includes/form-handler.php" method="POST" class="query-form idx-query-form" data-aos="fade-left">
            <input type="hidden" name="form_type" value="Index Query Form">
            <div class="mb-20">
                <input type="text" name="name" placeholder="Your Name" class="form-control" required>
            </div>
            <div class="mb-20">
                <input type="email" name="email" placeholder="Your Email" class="form-control" required>
            </div>
            <div class="mb-20">
                <input type="text" name="phone" placeholder="Your Phone" class="form-control" required>
            </div>
            <div class="mb-20">
                <textarea name="message" rows="4" placeholder="Your Message" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100 p-15">Submit Query</button>
        </form>
    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<?php include 'includes/footer.php'; ?>