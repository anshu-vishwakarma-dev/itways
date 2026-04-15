<?php include 'includes/header.php';

// Product Data mapping
$products_data = [
    'real-estate-crm' => [
        'title' => 'Real Estate CRM Pro',
        'title_focus' => 'CRM Pro',
        'title_prefix' => 'Real Estate',
        'category' => 'Real Estate',
        'category_icon' => 'fas fa-building',
        'header_desc' => 'Optimize Your Real Estate Business with Our Advanced CRM Solution. Seamless, Powerful, Scalable.',
        'hero_tagline' => 'Manage Leads, Properties & Sales in One Place',
        'image' => 'assets/image.png',
        'short_desc' => 'Real Estate CRM Pro is self hosted Customer Relationship Management software that is a great fit for almost any company, freelancer or many other uses. With its clean and modern design, it can help you look more professional to your customers and help improve business performance.',
        'price_old' => '₹15,000.00',
        'price_new' => '₹14,000.00',
        'discount' => '7% OFF',
        'quick_features' => ['Self Hosted', '5 User Panels', '1 Year Hosting'],
        'tags' => ['Agent Management', 'CRM', 'Lead Management', 'Property Listing', 'Real Estate', 'Real Estate CRM'],
        'description_title' => 'Empower your Real Estate Business with Real Estate CRM Pro.',
        'description_paragraphs' => [
            "Real Estate CRM Pro is a self-hosted Customer Relationship Management software that is a great fit for almost any company, freelancer or many other uses. With its clean and modern design, Real Estate CRM Pro can help you look more professional to your customers and help improve business performance at the same time.",
            "Real Estate CRM Pro is a tool used to handle Leads with auto-assign Lead functionality. You can create Clients, Agents, Employee and Admin. It has a wallet system and a payment gateway integrated. It's fully dynamic and easy to integrate with existing systems. We provide this web application with secure hosting for 1 year excluding source code. This project is developed in PHP language."
        ],
        'slider_images' => [
            ['src' => 'assets/slider/slider1.png', 'label' => 'Admin Dashboard'],
            ['src' => 'assets/slider/slider2.png', 'label' => 'Lead Management'],
            ['src' => 'assets/slider/slider3.png', 'label' => 'Property Listing'],
            ['src' => 'assets/slider/slider4.png', 'label' => 'Agent Panel'],
            ['src' => 'assets/slider/slider5.png', 'label' => 'Client Management'],
            ['src' => 'assets/slider/slider6.png', 'label' => 'Deal Tracking'],
            ['src' => 'assets/slider/slider7.png', 'label' => 'Reports & Analytics'],
            ['src' => 'assets/slider/slider8.png', 'label' => 'Inventory View'],
            ['src' => 'assets/slider/slider9.png', 'label' => 'Settings Panel'],
            ['src' => 'assets/slider/slider0.png', 'label' => 'User Roles'],
            ['src' => 'assets/slider/00.png', 'label' => 'Wallet System'],
            ['src' => 'assets/slider/11.png', 'label' => 'Payment Gateway']
        ],
        'panels' => [
            ['title' => 'Super Admin Panel', 'icon' => 'fas fa-shield-alt', 'span' => 1],
            ['title' => 'Admin Panel', 'icon' => 'fas fa-user-tie', 'span' => 1],
            ['title' => 'Employee Panel', 'icon' => 'fas fa-briefcase', 'span' => 1],
            ['title' => 'Agent Panel', 'icon' => 'fas fa-handshake', 'span' => 1],
            ['title' => 'Client Panel', 'icon' => 'fas fa-user', 'span' => 2]
        ],
        'features' => [
            ['title' => 'Lead Management', 'icon' => 'fas fa-bullseye', 'desc' => 'Auto-assign, follow up, convert & track all leads from one place'],
            ['title' => 'Property Management', 'icon' => 'fas fa-home', 'desc' => 'Create, publish & manage properties across your website'],
            ['title' => 'WhatsApp Automation', 'icon' => 'fab fa-whatsapp', 'desc' => 'Send automated follow-ups & notifications via WhatsApp'],
            ['title' => 'Deal Tracking', 'icon' => 'fas fa-handshake', 'desc' => 'Track every deal from interest to closure in real-time'],
            ['title' => 'Agent & Team Mgmt', 'icon' => 'fas fa-users', 'desc' => 'Manage agents, employees & clients with role-based access'],
            ['title' => 'Reports & Analytics', 'icon' => 'fas fa-chart-bar', 'desc' => 'Get insights on sales performance, lead conversion & more'],
            ['title' => 'Inventory System', 'icon' => 'fas fa-layer-group', 'desc' => 'Track available, booked & sold properties in real-time'],
            ['title' => 'Payment & Wallet', 'icon' => 'fas fa-wallet', 'desc' => 'Integrated wallet system with payment gateway support']
        ],
        'video_url' => 'https://www.youtube.com/embed/8Zy5OTwmlOQ'
    ],
    'agent-crm' => [
        'title' => 'Agent CRM Software',
        'title_focus' => 'Agent CRM',
        'title_prefix' => 'Real Estate',
        'category' => 'Agents',
        'category_icon' => 'fas fa-user-tie',
        'header_desc' => 'Sell Smarter, Faster & Better. Accelerate your deals and manage your pipeline effortlessly.',
        'hero_tagline' => 'Close More Deals, Waste Less Time',
        'image' => 'assets/agent.png',
        'short_desc' => 'As an agent, time is your biggest asset. Our Agent CRM saves hours every week by automating lead follow-ups, client interactions, and property scheduling.',
        'price_old' => '₹12,000.00',
        'price_new' => '₹10,500.00',
        'discount' => '12% OFF',
        'quick_features' => ['Lead Tracking', 'Property Inventory', 'Automated SMS', 'Sales Analytics'],
        'tags' => ['Agent', 'CRM', 'Lead Management', 'Sales', 'Real Estate'],
        'description_title' => 'Sell Smarter, Faster & Better',
        'description_paragraphs' => [
            "As an agent, time is your biggest asset. Our Agent CRM saves hours every week by automating lead follow-ups, client interactions, and property scheduling. Track every lead from interest to closure—all from your phone or desktop.",
            "Impress clients with prompt responses and never miss a sales opportunity again. Built specifically for agents who want to sell smarter, faster, and better."
        ],
        'slider_images' => [
            ['src' => 'assets/slider/slider1.png', 'label' => 'Agent Dashboard'],
            ['src' => 'assets/slider/slider2.png', 'label' => 'Lead Pipeline'],
            ['src' => 'assets/slider/slider3.png', 'label' => 'Client View']
        ],
        'panels' => [
            ['title' => 'Agent Panel', 'icon' => 'fas fa-handshake', 'span' => 2]
        ],
        'features' => [
            ['title' => 'Lead Management', 'icon' => 'fas fa-bullseye', 'desc' => 'Never miss a potential buyer with smart lead tracking'],
            ['title' => 'Property Inventory', 'icon' => 'fas fa-home', 'desc' => 'Organize all your listings in one place'],
            ['title' => 'Auto Follow-ups', 'icon' => 'fas fa-envelope', 'desc' => 'Stay in touch with clients via automated SMS & email'],
            ['title' => 'Sales Analytics', 'icon' => 'fas fa-chart-line', 'desc' => 'Track your monthly deals and performance']
        ],
        'video_url' => 'https://www.youtube.com/embed/8Zy5OTwmlOQ'
    ],
    'developer-crm' => [
        'title' => 'Developer CRM Software',
        'title_focus' => 'Developer CRM',
        'title_prefix' => 'Real Estate',
        'category' => 'Developers',
        'category_icon' => 'fas fa-hard-hat',
        'header_desc' => 'Bring all your real estate projects under one powerful dashboard.',
        'hero_tagline' => 'One Dashboard for All Your Projects',
        'image' => 'assets/developer.png',
        'short_desc' => 'Managing multiple projects and buyers can be chaotic. Our Developer CRM brings everything under one dashboard. Track sales, monitor site visits, manage inventories, and automate buyer communication.',
        'price_old' => '₹25,000.00',
        'price_new' => '₹22,000.00',
        'discount' => '12% OFF',
        'quick_features' => ['Project Tracking', 'Multi-Tower Mgmt', 'Site Visit Logs', 'Automated Comms'],
        'tags' => ['Developer', 'CRM', 'Project Management', 'Real Estate'],
        'description_title' => 'Streamline Your Property Business',
        'description_paragraphs' => [
            "Managing multiple projects and buyers can be chaotic. Our Developer CRM brings everything under one dashboard. Track sales, monitor site visits, manage inventories, and automate buyer communication—all with real-time visibility.",
            "Whether you're launching a new tower or managing handovers, this CRM simplifies every step. It's not just software—it's your project manager, sales assistant, and reporting tool rolled into one."
        ],
        'slider_images' => [
            ['src' => 'assets/slider/slider4.png', 'label' => 'Project Dashboard'],
            ['src' => 'assets/slider/slider5.png', 'label' => 'Inventory View'],
            ['src' => 'assets/slider/slider6.png', 'label' => 'Site Visit Log']
        ],
        'panels' => [
            ['title' => 'Super Admin Panel', 'icon' => 'fas fa-shield-alt', 'span' => 1],
            ['title' => 'Project Manager Panel', 'icon' => 'fas fa-clipboard-list', 'span' => 1]
        ],
        'features' => [
            ['title' => 'Multi-Project Mgmt', 'icon' => 'fas fa-project-diagram', 'desc' => 'Track multiple towers and complexes simultaneously'],
            ['title' => 'Site Visit Monitoring', 'icon' => 'fas fa-map-marker-alt', 'desc' => 'Log and track all client visits automatically'],
            ['title' => 'Inventory Booking', 'icon' => 'fas fa-calendar-check', 'desc' => 'Real-time flat availability and booking system'],
            ['title' => 'Payment Reminders', 'icon' => 'fas fa-bell', 'desc' => 'Automated alerts for payment milestones & dues']
        ],
        'video_url' => 'https://www.youtube.com/embed/8Zy5OTwmlOQ'
    ],
    'builder-crm' => [
        'title' => 'Builder CRM Software',
        'title_focus' => 'Builder CRM',
        'title_prefix' => 'Real Estate',
        'category' => 'Builders',
        'category_icon' => 'fas fa-tools',
        'header_desc' => 'Construction meets convenience. Take absolute control of your building projects.',
        'hero_tagline' => 'Build Smarter, Deliver Faster',
        'image' => 'assets/builder.png',
        'short_desc' => 'Our Builder CRM is designed for builders who want complete control over project execution, buyer interactions, and workflow management. From lead nurturing to post-sale service—it handles it all.',
        'price_old' => '₹30,000.00',
        'price_new' => '₹26,500.00',
        'discount' => '11% OFF',
        'quick_features' => ['Execution Tracking', 'Workflow Mgmt', 'Post-Sale Service', 'Cloud Analytics'],
        'tags' => ['Builder', 'CRM', 'Execution Tracking', 'Real Estate'],
        'description_title' => 'Construction meets convenience',
        'description_paragraphs' => [
            "Construction meets convenience. Our Builder CRM is designed for builders who want complete control over project execution, buyer interactions, and workflow management. From lead nurturing and documentation to construction updates and post-sale service—it handles it all.",
            "Reduce delays, improve communication, and deliver better customer experiences. Build trust, build faster, build smarter—with our all-in-one Builder CRM."
        ],
        'slider_images' => [
            ['src' => 'assets/slider/slider7.png', 'label' => 'Builder Dashboard'],
            ['src' => 'assets/slider/slider8.png', 'label' => 'Workflow Tracker'],
            ['src' => 'assets/slider/slider9.png', 'label' => 'Construction Panel']
        ],
        'panels' => [
            ['title' => 'Super Admin Panel', 'icon' => 'fas fa-shield-alt', 'span' => 1],
            ['title' => 'Construction Panel', 'icon' => 'fas fa-hammer', 'span' => 1],
            ['title' => 'Sales Panel', 'icon' => 'fas fa-chart-line', 'span' => 2]
        ],
        'features' => [
            ['title' => 'Workflow Tracking', 'icon' => 'fas fa-tasks', 'desc' => 'Monitor construction progress phase-by-phase'],
            ['title' => 'Post-Sale Handover', 'icon' => 'fas fa-key', 'desc' => 'Streamline the handover process for buyers'],
            ['title' => 'Auto Documentation', 'icon' => 'fas fa-file-alt', 'desc' => 'Generate agreements and invoices effortlessly'],
            ['title' => 'Client Portal', 'icon' => 'fas fa-comments', 'desc' => 'Keep buyers updated with flat progress']
        ],
        'video_url' => 'https://www.youtube.com/embed/8Zy5OTwmlOQ'
    ]
];

// Get current product info
$type = isset($_GET['type']) ? $_GET['type'] : 'real-estate-crm';
$product = isset($products_data[$type]) ? $products_data[$type] : $products_data['real-estate-crm'];

// Product Schema
$productPrice = floatval(str_replace(['₹', ','], '', $product['price_new']));
$productSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Product',
    'name' => $product['title'],
    'image' => 'https://itwaysindia.com/' . $product['image'],
    'description' => $product['short_desc'],
    'brand' => [
        '@type' => 'Brand',
        'name' => 'ITWAYS'
    ],
    'offers' => [
        '@type' => 'Offer',
        'url' => 'https://itwaysindia.com/product-details.php?type=' . $type,
        'priceCurrency' => 'INR',
        'price' => $productPrice,
        'availability' => 'https://schema.org/InStock',
        'itemCondition' => 'https://schema.org/NewCondition'
    ]
];
?>
<script type="application/ld+json">
    <?php echo json_encode($productSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>
</script>

<!-- ============================================================
     1. HERO SECTION — Strong Impact with CTA
     ============================================================ -->
<section class="pd-hero-section">
    <canvas id="heroCanvas" class="hero-canvas"></canvas>
    <!-- Floating gradient orbs -->
    <div class="pd-hero-orb pd-hero-orb-1"></div>
    <div class="pd-hero-orb pd-hero-orb-2"></div>
    <div class="pd-hero-orb pd-hero-orb-3"></div>

    <div class="container" style="position: relative; z-index: 5;">
        <!-- Breadcrumb -->
        <nav class="pd-breadcrumb" data-aos="fade-down" data-aos-delay="0">
            <a href="./">Home</a>
            <i class="fas fa-chevron-right"></i>
            <a href="products/">Products</a>
            <i class="fas fa-chevron-right"></i>
            <span><?php echo $product['title']; ?></span>
        </nav>

        <div class="pd-hero-badge" data-aos="fade-up" data-aos-delay="100">
            <i class="<?php echo $product['category_icon']; ?>"></i>
            <span><?php echo $product['category']; ?> Solution</span>
            <span class="pd-hero-badge-dot"></span>
            <span>Trusted by 100+ Businesses</span>
        </div>

        <h3 class="pd-hero-title" data-aos="fade-up" data-aos-delay="150">
            Smart <?php echo $product['title_prefix']; ?> <span class="pd-hero-title-accent"><?php echo $product['title_focus']; ?></span>
        </h3>
        <p class="pd-hero-tagline" data-aos="fade-up" data-aos-delay="200"><?php echo $product['hero_tagline']; ?></p>

        <!-- Trust Indicators -->
        <div class="pd-hero-trust" data-aos="fade-up" data-aos-delay="250">
            <div class="pd-trust-item">
                <i class="fas fa-arrow-up"></i>
                <span><strong>40%</strong> More Lead Conversion</span>
            </div>
            <div class="pd-trust-divider"></div>
            <div class="pd-trust-item">
                <i class="fas fa-chart-line"></i>
                <span><strong>30%</strong> More Sales</span>
            </div>
            <div class="pd-trust-divider"></div>
            <div class="pd-trust-item">
                <i class="fas fa-clock"></i>
                <span><strong>5hrs</strong> Saved Weekly</span>
            </div>
        </div>

        <!-- Hero CTA Buttons -->
        <div class="pd-hero-cta" data-aos="fade-up" data-aos-delay="300">
            <a href="#demo-form" class="btn btn-primary pd-btn-hero-primary">
                <i class="fas fa-calendar-check"></i> Book Free Demo
            </a>
            <a href="<?php echo $product['video_url']; ?>" target="_blank" class="btn pd-btn-hero-secondary">
                <i class="fas fa-play-circle"></i> View Live Demo
            </a>
        </div>
    </div>
</section>


<!-- ============================================================
     2. PROBLEM + SOLUTION SECTION
     ============================================================ -->
<section class="pd-problem-solution-section" data-aos="fade-up">
    <div class="container">
        <div class="pd-section-header">
            <span class="pd-section-badge"><i class="fas fa-lightbulb"></i> Why You Need This</span>
            <h2 class="pd-section-title-main">Still Managing Your Business <span class="pd-highlight">Manually?</span></h2>
            <p class="pd-section-subtitle">Here's what happens without a proper CRM system — and how we fix it</p>
        </div>

        <div class="pd-ps-grid">
            <!-- Problems Column -->
            <div class="pd-ps-card pd-ps-problem" data-aos="fade-right" data-aos-delay="100">
                <div class="pd-ps-card-header">
                    <div class="pd-ps-icon pd-ps-icon-red"><i class="fas fa-times-circle"></i></div>
                    <h3>Without CRM</h3>
                </div>
                <ul class="pd-ps-list">
                    <li><i class="fas fa-exclamation-triangle"></i> <span>Leads get lost in spreadsheets & WhatsApp</span></li>
                    <li><i class="fas fa-exclamation-triangle"></i> <span>No follow-up reminders = missed sales</span></li>
                    <li><i class="fas fa-exclamation-triangle"></i> <span>Team confusion — no clear task assignment</span></li>
                    <li><i class="fas fa-exclamation-triangle"></i> <span>Manual reports take hours to prepare</span></li>
                    <li><i class="fas fa-exclamation-triangle"></i> <span>Zero visibility on sales performance</span></li>
                </ul>
            </div>

            <!-- Arrow / Divider -->
            <div class="pd-ps-arrow" data-aos="zoom-in" data-aos-delay="200">
                <div class="pd-ps-arrow-circle">
                    <i class="fas fa-arrow-right"></i>
                </div>
                <span>We Fix This</span>
            </div>

            <!-- Solution Column -->
            <div class="pd-ps-card pd-ps-solution" data-aos="fade-left" data-aos-delay="100">
                <div class="pd-ps-card-header">
                    <div class="pd-ps-icon pd-ps-icon-green"><i class="fas fa-check-circle"></i></div>
                    <h3>With IT Ways CRM</h3>
                </div>
                <ul class="pd-ps-list pd-ps-list-green">
                    <li><i class="fas fa-check"></i> <span>All leads organized with auto-assignment</span></li>
                    <li><i class="fas fa-check"></i> <span>Automated follow-ups — never miss a sale</span></li>
                    <li><i class="fas fa-check"></i> <span>Clear role-based team management</span></li>
                    <li><i class="fas fa-check"></i> <span>One-click reports & real-time analytics</span></li>
                    <li><i class="fas fa-check"></i> <span>Complete sales pipeline visibility</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<!-- ============================================================
     3. FEATURES SECTION — Visual Cards with Icons
     ============================================================ -->
<section class="pd-features-section" data-aos="fade-up">
    <div class="container">
        <div class="pd-section-header">
            <span class="pd-section-badge"><i class="fas fa-star"></i> Powerful Features</span>
            <h2 class="pd-section-title-main">Everything You Need to <span class="pd-highlight">Grow Sales</span></h2>
            <p class="pd-section-subtitle">Built specifically for <?php echo strtolower($product['category']); ?> businesses — no generic tools</p>
        </div>

        <div class="pd-features-grid">
            <?php foreach ($product['features'] as $i => $feat): ?>
                <div class="pd-feature-card" data-aos="fade-up" data-aos-delay="<?php echo ($i * 80); ?>">
                    <div class="pd-feature-card-icon">
                        <i class="<?php echo $feat['icon']; ?>"></i>
                    </div>
                    <h4><?php echo $feat['title']; ?></h4>
                    <p><?php echo $feat['desc']; ?></p>
                    <div class="pd-feature-card-glow"></div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Mid CTA -->
        <div class="pd-mid-cta" data-aos="fade-up">
            <a href="#demo-form" class="btn btn-primary pd-btn-hero-primary">
                <i class="fas fa-rocket"></i> Get Started — Book Free Demo
            </a>
        </div>
    </div>
</section>


<!-- ============================================================
     4. PRODUCT SHOWCASE — Image + Info + Pricing
     ============================================================ -->
<section class="section pd-showcase-section">
    <div class="container" data-aos="fade-up">
        <div class="row align-items-center">
            <!-- Product Image -->
            <div class="col-lg-6 mb-4 text-center">
                <div class="card product-main-card" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.05" style="border:none; box-shadow:none; background:transparent;">
                    <img src="<?php echo BASE_URL; ?><?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?> - ITWAYS CRM Solution" class="img-fluid" style="border-radius: 12px; display: block; max-width: 75%; margin: 0 auto;" loading="lazy">
                </div>
            </div>

            <!-- Product Info -->
            <div class="col-lg-6">
                <div style="display: inline-block; padding: 6px 14px; background: rgba(6, 182, 212, 0.1); border: 1px solid rgba(6, 182, 212, 0.2); border-radius: 50px; color: var(--secondary-color); font-weight: 700; font-size: 11px; letter-spacing: 1px; margin-bottom: 15px; text-transform: uppercase;">
                    <i class="<?php echo $product['category_icon']; ?>" style="margin-right: 5px;"></i> <?php echo $product['category']; ?>
                </div>
                <h2 style="font-size: 32px; font-weight: 900; letter-spacing: -0.03em; margin-bottom: 10px; color: var(--heading-color);"><?php echo $product['title']; ?></h2>
                <p style="font-size: 16px; color: var(--text-color); margin-bottom: 25px; line-height: 1.8;"><?php echo $product['short_desc']; ?></p>

                <!-- Price -->
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px; flex-wrap: wrap;">
                    <span style="font-size: 16px; color: var(--text-color); text-decoration: line-through; opacity: 0.5;"><?php echo $product['price_old']; ?></span>
                    <span style="font-size: 32px; font-weight: 900; color: var(--secondary-color);"><?php echo $product['price_new']; ?></span>
                    <span style="background: #ef4444; color: #fff; padding: 4px 12px; border-radius: 50px; font-size: 11px; font-weight: 700;"><?php echo $product['discount']; ?></span>
                </div>

                <!-- Quick Features -->
                <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 30px;">
                    <?php foreach ($product['quick_features'] as $qf): ?>
                        <span style="display: flex; align-items: center; gap: 6px; padding: 8px 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 50px; font-size: 13px; font-weight: 600; color: var(--heading-color);"><i class="fas fa-check-circle" style="color: var(--secondary-color);"></i> <?php echo $qf; ?></span>
                    <?php endforeach; ?>
                </div>

                <!-- CTA Buttons -->
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <a href="#demo-form" class="btn btn-primary" style="padding: 16px 40px; font-weight: 800; font-size: 15px; box-shadow: 0 10px 30px rgba(6, 182, 212, 0.3);">
                        <i class="fas fa-calendar-check" style="margin-right: 8px;"></i> Book Free Demo
                    </a>
                    <a href="contact/" class="btn" style="padding: 16px 40px; font-weight: 800; font-size: 15px; border: 2px solid var(--border-color); color: var(--heading-color);">
                        <i class="fas fa-shopping-cart" style="margin-right: 8px;"></i> Purchase Now
                    </a>
                </div>

                <!-- Tags -->
                <div style="margin-top: 30px; padding-top: 25px; border-top: 1px solid var(--border-color);">
                    <span style="font-size: 13px; font-weight: 700; color: var(--heading-color); margin-right: 10px;">Tags:</span>
                    <div style="display: inline-flex; flex-wrap: wrap; gap: 8px;">
                        <?php foreach ($product['tags'] as $tag): ?>
                            <a href="#" style="padding: 4px 12px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 6px; font-size: 11px; font-weight: 600; color: var(--text-color); text-decoration: none; transition: all 0.3s ease;" onmouseover="this.style.background='var(--secondary-color)'; this.style.color='#ffffff'; this.style.transform='scale(1.05)';" onmouseout="this.style.background='var(--light-bg)'; this.style.color='var(--text-color)'; this.style.transform='scale(1)';"><?php echo $tag; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================================
     5. SCREENSHOTS SECTION — With Labels
     ============================================================ -->
<section class="pd-screenshots-section" data-aos="fade-up">
    <div class="container">
        <div class="pd-section-header">
            <span class="pd-section-badge"><i class="fas fa-images"></i> Product Screenshots</span>
            <h2 class="pd-section-title-main">See <span class="pd-highlight"><?php echo $product['title']; ?></span> in Action</h2>
            <p class="pd-section-subtitle">Explore the clean, modern interface designed for maximum productivity</p>
        </div>

        <div class="pd-screenshots-slider-container">
            <div class="swiper pd-screenshots-swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($product['slider_images'] as $slide): ?>
                        <div class="swiper-slide pd-screenshot-slide">
                            <div class="pd-screenshot-img-wrap">
                                <img src="<?php echo BASE_URL; ?><?php echo $slide['src']; ?>" alt="<?php echo $product['title']; ?> — <?php echo $slide['label']; ?>" loading="lazy">
                            </div>
                            <div class="pd-screenshot-label">
                                <i class="fas fa-desktop"></i> <?php echo $slide['label']; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next pd-swiper-btn"></div>
                <div class="swiper-button-prev pd-swiper-btn"></div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================================
     6. BENEFITS SECTION
     ============================================================ -->
<section class="pd-benefits-section" data-aos="fade-up">
    <div class="container">
        <div class="pd-section-header">
            <span class="pd-section-badge"><i class="fas fa-trophy"></i> Key Benefits</span>
            <h2 class="pd-section-title-main">Why Businesses <span class="pd-highlight">Choose Us</span></h2>
            <p class="pd-section-subtitle">Real results that make a real difference to your bottom line</p>
        </div>

        <div class="pd-benefits-grid">
            <div class="pd-benefit-card" data-aos="fade-up" data-aos-delay="0">
                <div class="pd-benefit-icon"><i class="fas fa-chart-line"></i></div>
                <h4>Increase Sales</h4>
                <p>Convert more leads into customers with automated follow-ups and deal tracking pipeline</p>
            </div>
            <div class="pd-benefit-card" data-aos="fade-up" data-aos-delay="100">
                <div class="pd-benefit-icon"><i class="fas fa-clock"></i></div>
                <h4>Save Time</h4>
                <p>Automate repetitive tasks, reduce manual data entry, and focus on closing deals</p>
            </div>
            <div class="pd-benefit-card" data-aos="fade-up" data-aos-delay="200">
                <div class="pd-benefit-icon"><i class="fas fa-users-cog"></i></div>
                <h4>Better Team Control</h4>
                <p>Assign leads, track performance, and manage your entire team from one dashboard</p>
            </div>
            <div class="pd-benefit-card" data-aos="fade-up" data-aos-delay="300">
                <div class="pd-benefit-icon"><i class="fas fa-database"></i></div>
                <h4>Centralized System</h4>
                <p>All your data — leads, properties, clients, payments — in one secure platform</p>
            </div>
        </div>
    </div>
</section>


<!-- ============================================================
     7. USP SECTION — What Makes Us Different
     ============================================================ -->
<section class="pd-usp-section" data-aos="fade-up">
    <div class="container">
        <div class="pd-section-header">
            <span class="pd-section-badge"><i class="fas fa-gem"></i> Why IT Ways</span>
            <h2 class="pd-section-title-main">What Makes Our CRM <span class="pd-highlight">Different</span></h2>
        </div>

        <div class="pd-usp-grid">
            <div class="pd-usp-item" data-aos="fade-up" data-aos-delay="0">
                <div class="pd-usp-number">01</div>
                <div class="pd-usp-content">
                    <h4><i class="fas fa-paint-brush"></i> White-Label CRM</h4>
                    <p>Use your own brand name, logo & domain — your clients never see our name</p>
                </div>
            </div>
            <div class="pd-usp-item" data-aos="fade-up" data-aos-delay="80">
                <div class="pd-usp-number">02</div>
                <div class="pd-usp-content">
                    <h4><i class="fab fa-whatsapp"></i> WhatsApp Integration</h4>
                    <p>Send automated messages, follow-ups & reminders directly via WhatsApp</p>
                </div>
            </div>
            <div class="pd-usp-item" data-aos="fade-up" data-aos-delay="160">
                <div class="pd-usp-number">03</div>
                <div class="pd-usp-content">
                    <h4><i class="fas fa-sliders-h"></i> Fully Customizable</h4>
                    <p>We tailor every module to your exact business workflow — no compromises</p>
                </div>
            </div>
            <div class="pd-usp-item" data-aos="fade-up" data-aos-delay="240">
                <div class="pd-usp-number">04</div>
                <div class="pd-usp-content">
                    <h4><i class="fas fa-infinity"></i> Unlimited Users</h4>
                    <p>No per-user pricing — add unlimited team members at no extra cost</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================================
     8. COMPARISON TABLE — Without CRM vs With CRM
     ============================================================ -->
<section class="pd-comparison-section" data-aos="fade-up">
    <div class="container">
        <div class="pd-section-header">
            <span class="pd-section-badge"><i class="fas fa-exchange-alt"></i> The Difference</span>
            <h2 class="pd-section-title-main">Before & After <span class="pd-highlight">IT Ways CRM</span></h2>
        </div>

        <div class="pd-comparison-table-wrap">
            <table class="pd-comparison-table">
                <thead>
                    <tr>
                        <th class="pd-comp-header-bad"><i class="fas fa-times-circle"></i> Without CRM</th>
                        <th class="pd-comp-header-good"><i class="fas fa-check-circle"></i> With IT Ways CRM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pd-comp-bad"><i class="fas fa-times"></i> Leads lost in spreadsheets</td>
                        <td class="pd-comp-good"><i class="fas fa-check"></i> Organized & auto-assigned leads</td>
                    </tr>
                    <tr>
                        <td class="pd-comp-bad"><i class="fas fa-times"></i> Manual follow-ups (mostly forgotten)</td>
                        <td class="pd-comp-good"><i class="fas fa-check"></i> Automated follow-ups via WhatsApp/SMS</td>
                    </tr>
                    <tr>
                        <td class="pd-comp-bad"><i class="fas fa-times"></i> No property tracking system</td>
                        <td class="pd-comp-good"><i class="fas fa-check"></i> Real-time inventory management</td>
                    </tr>
                    <tr>
                        <td class="pd-comp-bad"><i class="fas fa-times"></i> Reports? What reports?</td>
                        <td class="pd-comp-good"><i class="fas fa-check"></i> One-click analytics & insights</td>
                    </tr>
                    <tr>
                        <td class="pd-comp-bad"><i class="fas fa-times"></i> Team has no clarity on tasks</td>
                        <td class="pd-comp-good"><i class="fas fa-check"></i> Clear roles, tasks & performance tracking</td>
                    </tr>
                    <tr>
                        <td class="pd-comp-bad"><i class="fas fa-times"></i> Data scattered everywhere</td>
                        <td class="pd-comp-good"><i class="fas fa-check"></i> One centralized, secure platform</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>


<!-- ============================================================
     9. TWO-COLUMN: Content + Sticky Sidebar (Demo Form + Download Brochure)
     ============================================================ -->
<section class="section" style="background: var(--bg-color);" id="demo-form">
    <div class="container">
        <div class="row">
            <!-- Left: Main Content Column -->
            <div class="col-lg-8" data-aos="fade-up">

                <!-- Description Section -->
                <div class="card pc-detail-card">
                    <h2 style="color: var(--secondary-color); font-size: 13px; text-transform: uppercase; letter-spacing: 2px; font-weight: 800; margin-bottom: 8px;">Description</h2>
                    <h3 style="font-size: 24px; font-weight: 900; letter-spacing: -0.02em; color: var(--heading-color); margin-bottom: 25px;"><?php echo $product['description_title']; ?></h3>

                    <?php foreach ($product['description_paragraphs'] as $para): ?>
                        <p style="font-size: 15px; line-height: 1.9; color: var(--text-color); margin-bottom: 20px;"><?php echo $para; ?></p>
                    <?php endforeach; ?>

                    <div style="background: var(--light-bg); padding: 25px; border-radius: 16px; border: 1px solid var(--border-color);" data-tilt data-tilt-max="3" data-tilt-glare="true" data-tilt-max-glare="0.1">
                        <h4 style="color: var(--heading-color); margin-bottom: 12px; font-size: 17px;"><i class="fas fa-cogs" style="color: var(--secondary-color); margin-right: 10px;"></i>We can customize according to your requirement</h4>
                        <p style="font-size: 14px; color: var(--text-color); margin: 0;">Our team can tailor the CRM to fit your specific business needs.</p>
                    </div>
                </div>

                <!-- Panels Section -->
                <div class="card pc-detail-card">
                    <h3 style="font-size: 20px; font-weight: 900; color: var(--heading-color); margin-bottom: 20px;">Having <?php echo count($product['panels']); ?> Panels in this CRM</h3>
                    <div class="pc-panels-grid">
                        <?php foreach ($product['panels'] as $panel): ?>
                            <div style="display: flex; align-items: center; gap: 12px; padding: 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 12px; grid-column: span <?php echo $panel['span']; ?>; transition: all 0.3s ease; cursor: default;" onmouseover="this.style.transform='translateY(-5px)'; this.style.borderColor='var(--secondary-color)'; this.style.boxShadow='0 10px 20px rgba(6,182,212,0.1)';" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='var(--border-color)'; this.style.boxShadow='none';">
                                <div style="min-width: 38px; height: 38px; background: rgba(6,182,212,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--secondary-color); font-size: 16px;"><i class="<?php echo $panel['icon']; ?>"></i></div>
                                <span style="font-weight: 700; font-size: 14px; color: var(--heading-color);"><?php echo $panel['title']; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- YouTube Video Section -->
                <div class="card" style="padding: 40px; border-radius: var(--radius-lg); margin-bottom: 40px; overflow: hidden;">
                    <h3 style="font-size: 20px; font-weight: 900; color: var(--heading-color); margin-bottom: 20px;"><i class="fab fa-youtube" style="color: #ff0000; margin-right: 10px;"></i>Product Walkthrough</h3>
                    <div style="position: relative; width: 100%; padding-bottom: 56.25%; height: 0; border-radius: 12px; overflow: hidden; background: #000; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
                        <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;" src="<?php echo $product['video_url']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <p style="font-size: 13px; color: var(--text-color); margin-top: 15px; text-align: center; font-style: italic;">Watch this video to understand how <?php echo $product['title']; ?> can transform your business workflows.</p>
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
                <div style="position: sticky; top: 150px;">

                    <!-- Request Demo / Callback Form -->
                    <div class="card" style="padding: 30px; border-radius: var(--radius-lg); background: var(--light-bg); border: 1px solid var(--border-color); margin-bottom: 25px; position: relative; overflow: hidden; box-shadow: var(--shadow);">
                        <!-- Accent Glow -->
                        <div style="position: absolute; top: -50px; right: -50px; width: 120px; height: 120px; background: var(--secondary-color); filter: blur(70px); opacity: 0.1;"></div>

                        <h4 style="font-size: 18px; font-weight: 900; color: var(--heading-color); margin-bottom: 6px;"><i class="fas fa-calendar-check" style="color: var(--secondary-color); margin-right: 8px;"></i>Request Free Demo</h4>
                        <p style="font-size: 12px; color: var(--text-color); margin-bottom: 18px;">Fill the form & our team will schedule your personalized demo.</p>
                        <form class="callback-form" action="<?php echo $base_url; ?>includes/form-handler.php" method="POST" style="display: flex; flex-direction: column; gap: 12px;">
                            <input type="hidden" name="form_type" value="Product Callback Form">
                            <input type="hidden" name="service_product" value="<?php echo htmlspecialchars($product['title']); ?>">
                            <input type="text" name="name" placeholder="Your Name" style="width: 100%; padding: 12px 14px; background: var(--bg-color); border: 1px solid var(--border-color); border-radius: 10px; color: var(--heading-color); outline: none; transition: 0.3s; font-size: 13px;" onfocus="this.style.borderColor='var(--secondary-color)'" onblur="this.style.borderColor='var(--border-color)'" required>
                            <input type="email" name="email" placeholder="Email Address" style="width: 100%; padding: 12px 14px; background: var(--bg-color); border: 1px solid var(--border-color); border-radius: 10px; color: var(--heading-color); outline: none; transition: 0.3s; font-size: 13px;" onfocus="this.style.borderColor='var(--secondary-color)'" onblur="this.style.borderColor='var(--border-color)'" required>
                            <input type="tel" name="phone" placeholder="Phone Number" style="width: 100%; padding: 12px 14px; background: var(--bg-color); border: 1px solid var(--border-color); border-radius: 10px; color: var(--heading-color); outline: none; transition: 0.3s; font-size: 13px;" onfocus="this.style.borderColor='var(--secondary-color)'" onblur="this.style.borderColor='var(--border-color)'">
                            <textarea name="message" rows="3" placeholder="Your Message (Optional)" style="width: 100%; padding: 12px 14px; background: var(--bg-color); border: 1px solid var(--border-color); border-radius: 10px; color: var(--heading-color); outline: none; transition: 0.3s; font-size: 13px;" onfocus="this.style.borderColor='var(--secondary-color)'" onblur="this.style.borderColor='var(--border-color)'"></textarea>

                            <!-- Two buttons: Download Brochure + Submit -->
                            <div style="display: flex; gap: 10px;">
                                <a href="#" class="btn" style="flex: 1; padding: 12px; font-size: 13px; font-weight: 800; border-radius: 10px; border: 2px solid var(--secondary-color); color: var(--secondary-color); text-align: center; text-decoration: none; transition: 0.3s;" onmouseover="this.style.background='var(--secondary-color)'; this.style.color='#fff';" onmouseout="this.style.background='transparent'; this.style.color='var(--secondary-color)';">
                                    <i class="fas fa-download" style="margin-right: 4px;"></i> Brochure
                                </a>
                                <button type="submit" class="btn btn-primary" style="flex: 1; padding: 12px; font-size: 13px; font-weight: 800; border-radius: 10px;">
                                    <i class="fas fa-paper-plane" style="margin-right: 4px;"></i> Request Demo
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Quick Contact Card -->
                    <div class="card" style="padding: 25px; border-radius: var(--radius-lg); margin-bottom: 25px; text-align: center;">
                        <div style="width: 50px; height: 50px; background: rgba(6,182,212,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; color: var(--secondary-color); font-size: 20px;">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4 style="font-size: 15px; font-weight: 800; color: var(--heading-color); margin-bottom: 8px;">Need Help Choosing?</h4>
                        <p style="font-size: 13px; color: var(--text-color); margin-bottom: 15px;">Talk to our CRM expert for free consultation</p>
                        <a href="tel:+919919227600" class="btn btn-primary" style="width: 100%; padding: 12px; font-size: 14px; font-weight: 700; border-radius: 10px;">
                            <i class="fas fa-phone-alt" style="margin-right: 6px;"></i> Call +91 9919227600
                        </a>
                    </div>

                    <!-- Shop Categories -->
                    <div class="card" style="padding: 25px; border-radius: var(--radius-lg); margin-bottom: 25px;">
                        <h4 style="font-size: 15px; font-weight: 800; color: var(--heading-color); margin-bottom: 15px;"><i class="fas fa-folder" style="color: var(--secondary-color); margin-right: 8px;"></i>Other Products</h4>
                        <ul style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: 8px;">
                            <?php
                            foreach ($products_data as $slug => $pdata):
                                $isActive = ($slug === $type);
                            ?>
                                <li>
                                    <a href="product-details.php?type=<?php echo $slug; ?>" style="display: flex; align-items: center; gap: 8px; padding: 10px 14px; background: <?php echo $isActive ? 'rgba(6,182,212,0.08)' : 'var(--light-bg)'; ?>; border: 1px solid <?php echo $isActive ? 'rgba(6,182,212,0.2)' : 'var(--border-color)'; ?>; border-radius: 8px; font-size: 13px; font-weight: 600; color: <?php echo $isActive ? 'var(--secondary-color)' : 'var(--heading-color)'; ?>; text-decoration: none; transition: 0.3s ease;" onmouseover="this.style.transform='translateX(6px)'; this.style.borderColor='var(--secondary-color)';" onmouseout="this.style.transform='translateX(0)'; this.style.borderColor='<?php echo $isActive ? 'rgba(6,182,212,0.2)' : 'var(--border-color)'; ?>';"><i class="<?php echo $pdata['category_icon']; ?>" style="color: var(--secondary-color);"></i> <?php echo $pdata['title']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Product Tags -->
                    <div class="card" style="padding: 25px; border-radius: var(--radius-lg);">
                        <h4 style="font-size: 15px; font-weight: 800; color: var(--heading-color); margin-bottom: 15px;"><i class="fas fa-tags" style="color: var(--secondary-color); margin-right: 8px;"></i>Product Tags</h4>
                        <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                            <?php foreach ($product['tags'] as $tag): ?>
                                <a href="#" style="padding: 5px 12px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 6px; font-size: 11px; font-weight: 600; color: var(--text-color); text-decoration: none; transition: all 0.3s ease;" onmouseover="this.style.background='var(--secondary-color)'; this.style.color='#ffffff'; this.style.transform='scale(1.05)';" onmouseout="this.style.background='var(--light-bg)'; this.style.color='var(--text-color)'; this.style.transform='scale(1)';"><?php echo $tag; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Details Swiper Init -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.pd-screenshots-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },
            pagination: {
                el: '.pd-screenshots-swiper .swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.pd-screenshots-swiper .swiper-button-next',
                prevEl: '.pd-screenshots-swiper .swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 1.5
                },
                1024: {
                    slidesPerView: 2
                }
            }
        });
    });
</script>

<?php include 'includes/footer.php'; ?>