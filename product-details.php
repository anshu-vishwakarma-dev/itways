<?php include 'includes/header.php'; ?>

<section class="corporate-sub-hero bg-grid-premium">
    <div class="mesh-bg"></div>
    <div class="hero-aura"></div>
    <div class="hero-particles">
        <div class="particle p1"></div><div class="particle p3"></div>
        <div class="particle p6"></div><div class="particle p9"></div>
        <div class="particle p12"></div><div class="particle p15"></div>
    </div>
    <div class="container" style="position: relative; z-index: 5;">
        <!-- Breadcrumb -->
        <nav style="display: inline-flex; align-items: center; gap: 8px; padding: 8px 20px; background: rgba(14, 165, 233, 0.1); border: 1px solid rgba(14, 165, 233, 0.15); border-radius: 50px; color: var(--text-color); font-size: 13px; font-weight: 600; margin-bottom: 30px; backdrop-filter: blur(10px);">
            <a href="./" style="color: var(--secondary-color); text-decoration: none;">Home</a>
            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--text-color); opacity: 0.5;"></i>
            <a href="products/" style="color: var(--secondary-color); text-decoration: none;">Products</a>
            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--text-color); opacity: 0.5;"></i>
            <span>Real Estate CRM Pro</span>
        </nav>
        <h1 data-aos="fade-up" data-aos-delay="100">Real Estate <span style="color: var(--secondary-color);">CRM Pro</span></h1>
        <p data-aos="fade-up" data-aos-delay="200">Optimize Your Real Estate Business with Our Advanced CRM Solution. Seamless, Powerful, Scalable.</p>
    </div>
</section>

<!-- Product Showcase Section -->
<section class="section" style="background: var(--bg-color); padding-top: 80px;">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <!-- Product Image -->
            <div class="col-lg-6 mb-4">
                <div class="card product-main-card" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.05">
                    <img src="<?php echo BASE_URL; ?>assets/image.png" alt="Real Estate CRM Pro" class="img-fluid" style="border-radius: 12px; display: block; width: 100%;">
                </div>
            </div>

            <!-- Product Info -->
            <div class="col-lg-6">
                <div style="display: inline-block; padding: 6px 14px; background: rgba(6, 182, 212, 0.1); border: 1px solid rgba(6, 182, 212, 0.2); border-radius: 50px; color: var(--secondary-color); font-weight: 700; font-size: 11px; letter-spacing: 1px; margin-bottom: 15px; text-transform: uppercase;">
                    <i class="fas fa-building" style="margin-right: 5px;"></i> Real Estate
                </div>
                <h2 style="font-size: 32px; font-weight: 900; letter-spacing: -0.03em; margin-bottom: 10px; color: var(--heading-color);">Real Estate CRM Pro</h2>
                <p style="font-size: 16px; color: var(--text-color); margin-bottom: 25px; line-height: 1.8;">Real Estate CRM Pro is self hosted Customer Relationship Management software that is a great fit for almost any company, freelancer or many other uses. With its clean and modern design, it can help you look more professional to your customers and help improve business performance.</p>

                <!-- Price -->
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px; flex-wrap: wrap;">
                    <span style="font-size: 16px; color: var(--text-color); text-decoration: line-through; opacity: 0.5;">₹15,000.00</span>
                    <span style="font-size: 32px; font-weight: 900; color: var(--secondary-color);">₹14,000.00</span>
                    <span style="background: #ef4444; color: #fff; padding: 4px 12px; border-radius: 50px; font-size: 11px; font-weight: 700;">7% OFF</span>
                </div>

                <!-- Quick Features -->
                <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 30px;">
                    <span style="display: flex; align-items: center; gap: 6px; padding: 8px 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 50px; font-size: 13px; font-weight: 600; color: var(--heading-color);"><i class="fas fa-check-circle" style="color: var(--secondary-color);"></i> Self Hosted</span>
                    <span style="display: flex; align-items: center; gap: 6px; padding: 8px 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 50px; font-size: 13px; font-weight: 600; color: var(--heading-color);"><i class="fas fa-check-circle" style="color: var(--secondary-color);"></i> 5 User Panels</span>
                    <span style="display: flex; align-items: center; gap: 6px; padding: 8px 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 50px; font-size: 13px; font-weight: 600; color: var(--heading-color);"><i class="fas fa-check-circle" style="color: var(--secondary-color);"></i> 1 Year Hosting</span>
                    <span style="display: flex; align-items: center; gap: 6px; padding: 8px 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 50px; font-size: 13px; font-weight: 600; color: var(--heading-color);"><i class="fas fa-check-circle" style="color: var(--secondary-color);"></i> PHP Based</span>
                </div>

                <!-- CTA Buttons -->
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <a href="contact/" class="btn btn-primary" style="padding: 16px 40px; font-weight: 800; font-size: 15px; box-shadow: 0 10px 30px rgba(6, 182, 212, 0.3);">
                        <i class="fas fa-shopping-cart" style="margin-right: 8px;"></i> Purchase Now
                    </a>
                    <a href="contact/" class="btn" style="padding: 16px 40px; font-weight: 800; font-size: 15px; border: 2px solid var(--border-color); color: var(--heading-color);">
                        <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Request Demo
                    </a>
                </div>

                <!-- Tags -->
                <div style="margin-top: 30px; padding-top: 25px; border-top: 1px solid var(--border-color);">
                    <span style="font-size: 13px; font-weight: 700; color: var(--heading-color); margin-right: 10px;">Tags:</span>
                    <div style="display: inline-flex; flex-wrap: wrap; gap: 8px;">
                        <a href="#" style="padding: 4px 12px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 6px; font-size: 11px; font-weight: 600; color: var(--text-color); text-decoration: none;">Agent Management</a>
                        <a href="#" style="padding: 4px 12px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 6px; font-size: 11px; font-weight: 600; color: var(--text-color); text-decoration: none;">CRM</a>
                        <a href="#" style="padding: 4px 12px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 6px; font-size: 11px; font-weight: 600; color: var(--text-color); text-decoration: none;">Lead Management</a>
                        <a href="#" style="padding: 4px 12px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 6px; font-size: 11px; font-weight: 600; color: var(--text-color); text-decoration: none;">Property Listing</a>
                        <a href="#" style="padding: 4px 12px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 6px; font-size: 11px; font-weight: 600; color: var(--text-color); text-decoration: none;">Real Estate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Two-Column Layout: Content + Sticky Sidebar -->
<section class="section" style="background: var(--bg-color);">
    <div class="container">
        <div class="row">
            <!-- Left: Main Content Column -->
            <div class="col-lg-8" data-aos="fade-up">

                <!-- Process Section -->
                <div class="card pc-detail-card">
                    <h2 style="color: var(--secondary-color); font-size: 13px; text-transform: uppercase; letter-spacing: 2px; font-weight: 800; margin-bottom: 8px;">Description</h2>
                    <h3 style="font-size: 24px; font-weight: 900; letter-spacing: -0.02em; color: var(--heading-color); margin-bottom: 25px;">Empower your Real Estate Business with Real Estate CRM Pro.</h3>

                    <p style="font-size: 15px; line-height: 1.9; color: var(--text-color); margin-bottom: 20px;">Real Estate CRM Pro is a self-hosted Customer Relationship Management software that is a great fit for almost any company, freelancer or many other uses. With its clean and modern design, Real Estate CRM Pro can help you look more professional to your customers and help improve business performance at the same time.</p>
                    <p style="font-size: 15px; line-height: 1.9; color: var(--text-color); margin-bottom: 25px;">Real Estate CRM Pro is a tool used to handle Leads with auto-assign Lead functionality. You can create Clients, Agents, Employee and Admin. It has a wallet system and a payment gateway integrated. It's fully dynamic and easy to integrate with existing systems. We provide this web application with secure hosting for 1 year excluding source code. This project is developed in PHP language.</p>

                    <div style="background: var(--light-bg); padding: 25px; border-radius: 16px; border: 1px solid var(--border-color);">
                        <h4 style="color: var(--heading-color); margin-bottom: 12px; font-size: 17px;"><i class="fas fa-cogs" style="color: var(--secondary-color); margin-right: 10px;"></i>We can customize according to your requirement</h4>
                        <p style="font-size: 14px; color: var(--text-color); margin: 0;">Our team can tailor the CRM to fit your specific business needs.</p>
                    </div>
                </div>

                <!-- Screenshots Slider -->
                <div class="card" style="padding: 30px; border-radius: var(--radius-lg); margin-bottom: 40px; overflow: hidden;">
                    <h3 style="font-size: 20px; font-weight: 900; color: var(--heading-color); margin-bottom: 20px;"><i class="fas fa-images" style="color: var(--secondary-color); margin-right: 10px;"></i>Screenshots</h3>
                    <div class="swiper product-screenshots-swiper" style="width: 100%; height: 100%; border-radius: 12px; overflow: hidden; position: relative;">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="width: 100%; background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; min-height: 350px;">
                                <img src="<?php echo BASE_URL; ?>assets/slider/slider1.png" alt="CRM Dashboard" style="width: 100%; height: auto; max-height: 450px; object-fit: contain; border-radius: 12px;">
                            </div>
                            <div class="swiper-slide" style="width: 100%; background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; min-height: 350px;">
                                <img src="<?php echo BASE_URL; ?>assets/slider/slider2.png" alt="Leads Management" style="width: 100%; height: auto; max-height: 450px; object-fit: contain; border-radius: 12px;">
                            </div>
                            <div class="swiper-slide" style="width: 100%; background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; min-height: 350px;">
                                <img src="<?php echo BASE_URL; ?>assets/slider/slider3.png" alt="Property Listings" style="width: 100%; height: auto; max-height: 450px; object-fit: contain; border-radius: 12px;">
                            </div>

                            <div class="swiper-slide" style="width: 100%; background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; min-height: 350px;">
                                <img src="<?php echo BASE_URL; ?>assets/slider/slider4.png" alt="CRM Dashboard" style="width: 100%; height: auto; max-height: 450px; object-fit: contain; border-radius: 12px;">
                            </div>
                            <div class="swiper-slide" style="width: 100%; background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; min-height: 350px;">
                                <img src="<?php echo BASE_URL; ?>assets/slider/slider5.png" alt="Leads Management" style="width: 100%; height: auto; max-height: 450px; object-fit: contain; border-radius: 12px;">
                            </div>
                            <div class="swiper-slide" style="width: 100%; background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; min-height: 350px;">
                                <img src="<?php echo BASE_URL; ?>assets/slider/slider6.png" alt="Property Listings" style="width: 100%; height: auto; max-height: 450px; object-fit: contain; border-radius: 12px;">
                            </div>
                            <div class="swiper-slide" style="width: 100%; background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; min-height: 350px;">
                                <img src="<?php echo BASE_URL; ?>assets/slider/slider7.png" alt="CRM Dashboard" style="width: 100%; height: auto; max-height: 450px; object-fit: contain; border-radius: 12px;">
                            </div>
                            <div class="swiper-slide" style="width: 100%; background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; min-height: 350px;">
                                <img src="<?php echo BASE_URL; ?>assets/slider/slider8.png" alt="Leads Management" style="width: 100%; height: auto; max-height: 450px; object-fit: contain; border-radius: 12px;">
                            </div>
                            <div class="swiper-slide" style="width: 100%; background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; min-height: 350px;">
                                <img src="<?php echo BASE_URL; ?>assets/slider/slider9.png" alt="Property Listings" style="width: 100%; height: auto; max-height: 450px; object-fit: contain; border-radius: 12px;">
                            </div>
                            <div class="swiper-slide" style="width: 100%; background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; min-height: 350px;">
                                <img src="<?php echo BASE_URL; ?>assets/slider/slider0.png" alt="CRM Dashboard" style="width: 100%; height: auto; max-height: 450px; object-fit: contain; border-radius: 12px;">
                            </div>
                            <div class="swiper-slide" style="width: 100%; background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; min-height: 350px;">
                                <img src="<?php echo BASE_URL; ?>assets/slider/00.png" alt="Leads Management" style="width: 100%; height: auto; max-height: 450px; object-fit: contain; border-radius: 12px;">
                            </div>
                            <div class="swiper-slide" style="width: 100%; background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; min-height: 350px;">
                                <img src="<?php echo BASE_URL; ?>assets/slider/11.png" alt="Property Listings" style="width: 100%; height: auto; max-height: 450px; object-fit: contain; border-radius: 12px;">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next" style="color: var(--secondary-color);"></div>
                        <div class="swiper-button-prev" style="color: var(--secondary-color);"></div>
                    </div>
                </div>

                <!-- 5 Panels -->
                <div class="card pc-detail-card">
                    <h3 style="font-size: 20px; font-weight: 900; color: var(--heading-color); margin-bottom: 20px;">Having 5 Panels in this CRM</h3>
                    <div class="pc-panels-grid">
                        <div style="display: flex; align-items: center; gap: 12px; padding: 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 12px;">
                            <div style="min-width: 38px; height: 38px; background: rgba(6,182,212,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--secondary-color); font-size: 16px;"><i class="fas fa-shield-alt"></i></div>
                            <span style="font-weight: 700; font-size: 14px; color: var(--heading-color);">Super Admin Panel</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 12px; padding: 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 12px;">
                            <div style="min-width: 38px; height: 38px; background: rgba(6,182,212,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--secondary-color); font-size: 16px;"><i class="fas fa-user-tie"></i></div>
                            <span style="font-weight: 700; font-size: 14px; color: var(--heading-color);">Admin Panel</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 12px; padding: 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 12px;">
                            <div style="min-width: 38px; height: 38px; background: rgba(6,182,212,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--secondary-color); font-size: 16px;"><i class="fas fa-briefcase"></i></div>
                            <span style="font-weight: 700; font-size: 14px; color: var(--heading-color);">Employee Panel</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 12px; padding: 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 12px;">
                            <div style="min-width: 38px; height: 38px; background: rgba(6,182,212,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--secondary-color); font-size: 16px;"><i class="fas fa-handshake"></i></div>
                            <span style="font-weight: 700; font-size: 14px; color: var(--heading-color);">Agent Panel</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 12px; padding: 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 12px; grid-column: span 2;">
                            <div style="min-width: 38px; height: 38px; background: rgba(6,182,212,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--secondary-color); font-size: 16px;"><i class="fas fa-user"></i></div>
                            <span style="font-weight: 700; font-size: 14px; color: var(--heading-color);">Client Panel</span>
                        </div>
                    </div>
                </div>

                <!-- Overview Card -->
                <div class="card pc-detail-card" style="margin-bottom: 40px;">
                    <h3 style="font-size: 20px; font-weight: 900; color: var(--heading-color); margin-bottom: 20px;">Features</h3>
                    <ul style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: 12px;">
                        <li style="display: flex; align-items: flex-start; gap: 12px; padding: 14px 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 10px;">
                            <i class="fas fa-check-circle" style="color: var(--secondary-color); margin-top: 2px;"></i>
                            <span style="font-size: 14px; color: var(--heading-color); font-weight: 600;">Lead Creation / Generate lead from website</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 12px; padding: 14px 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 10px;">
                            <i class="fas fa-check-circle" style="color: var(--secondary-color); margin-top: 2px;"></i>
                            <div><span style="font-size: 14px; color: var(--heading-color); font-weight: 600;">Lead Operations</span><br><span style="font-size: 13px; color: var(--text-color);">Follow up, missed follow up, converted leads, postpone, re-open leads etc</span></div>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 12px; padding: 14px 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 10px;">
                            <i class="fas fa-check-circle" style="color: var(--secondary-color); margin-top: 2px;"></i>
                            <span style="font-size: 14px; color: var(--heading-color); font-weight: 600;">Lead Re-Assign to any user</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 12px; padding: 14px 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 10px;">
                            <i class="fas fa-check-circle" style="color: var(--secondary-color); margin-top: 2px;"></i>
                            <span style="font-size: 14px; color: var(--heading-color); font-weight: 600;">Create Property Listing to website</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 12px; padding: 14px 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 10px;">
                            <i class="fas fa-check-circle" style="color: var(--secondary-color); margin-top: 2px;"></i>
                            <div><span style="font-size: 14px; color: var(--heading-color); font-weight: 600;">Inventory Operations</span><br><span style="font-size: 13px; color: var(--text-color);">Published, inactive, available & sold out properties</span></div>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 12px; padding: 14px 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 10px;">
                            <i class="fas fa-check-circle" style="color: var(--secondary-color); margin-top: 2px;"></i>
                            <span style="font-size: 14px; color: var(--heading-color); font-weight: 600;">Manage Projects, Create Projects, Project location, edit delete etc.</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 12px; padding: 14px 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 10px;">
                            <i class="fas fa-check-circle" style="color: var(--secondary-color); margin-top: 2px;"></i>
                            <span style="font-size: 14px; color: var(--heading-color); font-weight: 600;">Add property to CRM and publish to website</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 12px; padding: 14px 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 10px;">
                            <i class="fas fa-check-circle" style="color: var(--secondary-color); margin-top: 2px;"></i>
                            <span style="font-size: 14px; color: var(--heading-color); font-weight: 600;">Manage Property, View Available & Booked Properties</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 12px; padding: 14px 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 10px;">
                            <i class="fas fa-check-circle" style="color: var(--secondary-color); margin-top: 2px;"></i>
                            <span style="font-size: 14px; color: var(--heading-color); font-weight: 600;">Manage Agents, Create Client & Track records</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 12px; padding: 14px 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 10px;">
                            <i class="fas fa-check-circle" style="color: var(--secondary-color); margin-top: 2px;"></i>
                            <span style="font-size: 14px; color: var(--heading-color); font-weight: 600;">System setup & Password Reset</span>
                        </li>
                    </ul>
                </div>

                <!-- YouTube Video Section -->
                <div class="card" style="padding: 40px; border-radius: var(--radius-lg); margin-bottom: 40px; overflow: hidden;">
                    <h3 style="font-size: 20px; font-weight: 900; color: var(--heading-color); margin-bottom: 20px;"><i class="fab fa-youtube" style="color: #ff0000; margin-right: 10px;"></i>Product Walkthrough</h3>
                    <div style="position: relative; width: 100%; padding-bottom: 56.25%; height: 0; border-radius: 12px; overflow: hidden; background: #000; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
                        <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;" src="https://www.youtube.com/embed/8Zy5OTwmlOQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <p style="font-size: 13px; color: var(--text-color); margin-top: 15px; text-align: center; font-style: italic;">Watch this video to understand how Real Estate CRM Pro can transform your business workflows.</p>
                </div>

                <!-- System Requirements -->
                <div class="card" style="padding: 40px; border-radius: var(--radius-lg);">
                    <h3 style="font-size: 20px; font-weight: 900; color: var(--heading-color); margin-bottom: 15px;">System Requirements</h3>
                    <p style="font-size: 14px; color: var(--text-color); line-height: 1.8; margin-bottom: 20px;">Supports almost all web browsers. You can use this software on your PC, tablet, and mobile.</p>
                    <div style="display: flex; gap: 25px; flex-wrap: wrap;">
                        <div style="text-align: center;"><i class="fab fa-chrome" style="font-size: 28px; color: var(--secondary-color); margin-bottom: 6px; display: block;"></i><span style="font-size: 11px; font-weight: 600; color: var(--text-color);">Chrome</span></div>
                        <div style="text-align: center;"><i class="fab fa-firefox-browser" style="font-size: 28px; color: var(--secondary-color); margin-bottom: 6px; display: block;"></i><span style="font-size: 11px; font-weight: 600; color: var(--text-color);">Firefox</span></div>
                        <div style="text-align: center;"><i class="fab fa-safari" style="font-size: 28px; color: var(--secondary-color); margin-bottom: 6px; display: block;"></i><span style="font-size: 11px; font-weight: 600; color: var(--text-color);">Safari</span></div>
                        <div style="text-align: center;"><i class="fab fa-edge" style="font-size: 28px; color: var(--secondary-color); margin-bottom: 6px; display: block;"></i><span style="font-size: 11px; font-weight: 600; color: var(--text-color);">Edge</span></div>
                        <div style="text-align: center;"><i class="fas fa-mobile-alt" style="font-size: 28px; color: var(--secondary-color); margin-bottom: 6px; display: block;"></i><span style="font-size: 11px; font-weight: 600; color: var(--text-color);">Mobile</span></div>
                        <div style="text-align: center;"><i class="fas fa-tablet-alt" style="font-size: 28px; color: var(--secondary-color); margin-bottom: 6px; display: block;"></i><span style="font-size: 11px; font-weight: 600; color: var(--text-color);">Tablet</span></div>
                    </div>
                </div>

            </div>

            <!-- Right: Sticky Sidebar -->
            <div class="col-lg-4">
                <div style="position: sticky; top: 120px;">

                    <!-- Request Callback Form -->
                    <div class="card" style="padding: 30px; border-radius: var(--radius-lg); background: var(--light-bg); border: 1px solid var(--border-color); margin-bottom: 25px; position: relative; overflow: hidden; box-shadow: var(--shadow);">
                        <!-- Accent Glow -->
                        <div style="position: absolute; top: -50px; right: -50px; width: 120px; height: 120px; background: var(--secondary-color); filter: blur(70px); opacity: 0.1;"></div>

                        <h4 style="font-size: 18px; font-weight: 900; color: var(--heading-color); margin-bottom: 6px;"><i class="fas fa-phone-alt" style="color: var(--secondary-color); margin-right: 8px;"></i>Request Call Back</h4>
                        <p style="font-size: 12px; color: var(--text-color); margin-bottom: 18px;">We'll reach out to schedule your demo.</p>
                        <form style="display: flex; flex-direction: column; gap: 12px;">
                            <input type="text" placeholder="Your Name" style="width: 100%; padding: 12px 14px; background: var(--bg-color); border: 1px solid var(--border-color); border-radius: 10px; color: var(--heading-color); outline: none; transition: 0.3s; font-size: 13px;" onfocus="this.style.borderColor='var(--secondary-color)'" onblur="this.style.borderColor='var(--border-color)'">
                            <input type="email" placeholder="Email Address" style="width: 100%; padding: 12px 14px; background: var(--bg-color); border: 1px solid var(--border-color); border-radius: 10px; color: var(--heading-color); outline: none; transition: 0.3s; font-size: 13px;" onfocus="this.style.borderColor='var(--secondary-color)'" onblur="this.style.borderColor='var(--border-color)'">
                            <input type="tel" placeholder="Phone Number" style="width: 100%; padding: 12px 14px; background: var(--bg-color); border: 1px solid var(--border-color); border-radius: 10px; color: var(--heading-color); outline: none; transition: 0.3s; font-size: 13px;" onfocus="this.style.borderColor='var(--secondary-color)'" onblur="this.style.borderColor='var(--border-color)'">
                            <div style="position: relative;">
                                <select style="width: 100%; padding: 12px 14px; background: var(--bg-color); border: 1px solid var(--border-color); border-radius: 10px; color: var(--text-color); outline: none; transition: 0.3s; font-size: 13px; appearance: none;">
                                    <option value="" disabled selected>Select Interest</option>
                                    <option value="crm">CRM Application</option>
                                    <option value="custom">Custom Application</option>
                                    <option value="web">Web Development</option>
                                    <option value="ecommerce">E-Commerce</option>
                                    <option value="other">Other</option>
                                </select>
                                <i class="fas fa-chevron-down" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); font-size: 10px; color: var(--text-color); pointer-events: none;"></i>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 12px; font-size: 14px; font-weight: 800; border-radius: 10px;">
                                <i class="fas fa-paper-plane" style="margin-right: 6px;"></i> Send
                            </button>
                        </form>
                    </div>

                    <!-- Shop Categories -->
                    <div class="card" style="padding: 25px; border-radius: var(--radius-lg); margin-bottom: 25px;">
                        <h4 style="font-size: 15px; font-weight: 800; color: var(--heading-color); margin-bottom: 15px;"><i class="fas fa-folder" style="color: var(--secondary-color); margin-right: 8px;"></i>Shop Categories</h4>
                        <ul style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: 8px;">
                            <li><a href="#" style="display: flex; align-items: center; gap: 8px; padding: 10px 14px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 8px; font-size: 13px; font-weight: 600; color: var(--heading-color); text-decoration: none;"><i class="fas fa-graduation-cap" style="color: var(--secondary-color);"></i> Educational</a></li>
                            <li><a href="#" style="display: flex; align-items: center; gap: 8px; padding: 10px 14px; background: rgba(6,182,212,0.08); border: 1px solid rgba(6,182,212,0.2); border-radius: 8px; font-size: 13px; font-weight: 600; color: var(--secondary-color); text-decoration: none;"><i class="fas fa-building"></i> Real Estate</a></li>
                        </ul>
                    </div>

                    <!-- Product Tags -->
                    <div class="card" style="padding: 25px; border-radius: var(--radius-lg);">
                        <h4 style="font-size: 15px; font-weight: 800; color: var(--heading-color); margin-bottom: 15px;"><i class="fas fa-tags" style="color: var(--secondary-color); margin-right: 8px;"></i>Product Tags</h4>
                        <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                            <a href="#" style="padding: 5px 12px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 6px; font-size: 11px; font-weight: 600; color: var(--text-color); text-decoration: none;">Agent Management</a>
                            <a href="#" style="padding: 5px 12px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 6px; font-size: 11px; font-weight: 600; color: var(--text-color); text-decoration: none;">CRM</a>
                            <a href="#" style="padding: 5px 12px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 6px; font-size: 11px; font-weight: 600; color: var(--text-color); text-decoration: none;">Lead Management</a>
                            <a href="#" style="padding: 5px 12px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 6px; font-size: 11px; font-weight: 600; color: var(--text-color); text-decoration: none;">Property Listing</a>
                            <a href="#" style="padding: 5px 12px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 6px; font-size: 11px; font-weight: 600; color: var(--text-color); text-decoration: none;">Real Estate</a>
                            <a href="#" style="padding: 5px 12px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 6px; font-size: 11px; font-weight: 600; color: var(--text-color); text-decoration: none;">Real Estate CRM</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>