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
        'image' => 'assets/image.png',
        'short_desc' => 'Real Estate CRM Pro is self hosted Customer Relationship Management software that is a great fit for almost any company, freelancer or many other uses. With its clean and modern design, it can help you look more professional to your customers and help improve business performance.',
        'price_old' => '₹15,000.00',
        'price_new' => '₹14,000.00',
        'discount' => '7% OFF',
        'quick_features' => ['Self Hosted', '5 User Panels', '1 Year Hosting', 'PHP Based'],
        'tags' => ['Agent Management', 'CRM', 'Lead Management', 'Property Listing', 'Real Estate', 'Real Estate CRM'],
        'description_title' => 'Empower your Real Estate Business with Real Estate CRM Pro.',
        'description_paragraphs' => [
            "Real Estate CRM Pro is a self-hosted Customer Relationship Management software that is a great fit for almost any company, freelancer or many other uses. With its clean and modern design, Real Estate CRM Pro can help you look more professional to your customers and help improve business performance at the same time.",
            "Real Estate CRM Pro is a tool used to handle Leads with auto-assign Lead functionality. You can create Clients, Agents, Employee and Admin. It has a wallet system and a payment gateway integrated. It's fully dynamic and easy to integrate with existing systems. We provide this web application with secure hosting for 1 year excluding source code. This project is developed in PHP language."
        ],
        'slider_images' => [
            'assets/slider/slider1.png', 'assets/slider/slider2.png', 'assets/slider/slider3.png',
            'assets/slider/slider4.png', 'assets/slider/slider5.png', 'assets/slider/slider6.png',
            'assets/slider/slider7.png', 'assets/slider/slider8.png', 'assets/slider/slider9.png',
            'assets/slider/slider0.png', 'assets/slider/00.png', 'assets/slider/11.png'
        ],
        'panels' => [
            ['title' => 'Super Admin Panel', 'icon' => 'fas fa-shield-alt', 'span' => 1],
            ['title' => 'Admin Panel', 'icon' => 'fas fa-user-tie', 'span' => 1],
            ['title' => 'Employee Panel', 'icon' => 'fas fa-briefcase', 'span' => 1],
            ['title' => 'Agent Panel', 'icon' => 'fas fa-handshake', 'span' => 1],
            ['title' => 'Client Panel', 'icon' => 'fas fa-user', 'span' => 2]
        ],
        'features' => [
            ['title' => 'Lead Creation / Generate lead from website', 'sub' => ''],
            ['title' => 'Lead Operations', 'sub' => 'Follow up, missed follow up, converted leads, postpone, re-open leads etc'],
            ['title' => 'Lead Re-Assign to any user', 'sub' => ''],
            ['title' => 'Create Property Listing to website', 'sub' => ''],
            ['title' => 'Inventory Operations', 'sub' => 'Published, inactive, available & sold out properties'],
            ['title' => 'Manage Projects, Create Projects, Project location, edit delete etc.', 'sub' => ''],
            ['title' => 'Add property to CRM and publish to website', 'sub' => ''],
            ['title' => 'Manage Property, View Available & Booked Properties', 'sub' => ''],
            ['title' => 'Manage Agents, Create Client & Track records', 'sub' => ''],
            ['title' => 'System setup & Password Reset', 'sub' => '']
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
            'assets/slider/slider1.png', 'assets/slider/slider2.png', 'assets/slider/slider3.png'
        ],
        'panels' => [
            ['title' => 'Agent Panel', 'icon' => 'fas fa-handshake', 'span' => 2]
        ],
        'features' => [
            ['title' => 'Lead Management & Tracking', 'sub' => 'Never miss a potential buyer'],
            ['title' => 'Property Inventory Management', 'sub' => 'Organize your listings'],
            ['title' => 'Automated SMS & Email Follow-ups', 'sub' => 'Stay in touch with your clients easily'],
            ['title' => 'Sales Performance Analytics', 'sub' => 'Track your monthly deals']
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
            "Whether you’re launching a new tower or managing handovers, this CRM simplifies every step. It’s not just software—it’s your project manager, sales assistant, and reporting tool rolled into one."
        ],
        'slider_images' => [
            'assets/slider/slider4.png', 'assets/slider/slider5.png', 'assets/slider/slider6.png'
        ],
        'panels' => [
            ['title' => 'Super Admin Panel', 'icon' => 'fas fa-shield-alt', 'span' => 1],
            ['title' => 'Project Manager Panel', 'icon' => 'fas fa-clipboard-list', 'span' => 1]
        ],
        'features' => [
            ['title' => 'Multi-Project Management', 'sub' => 'Track multiple towers and complexes'],
            ['title' => 'Site Visit Monitoring', 'sub' => 'Log and track all client visits'],
            ['title' => 'Inventory Booking System', 'sub' => 'Real-time flat availability'],
            ['title' => 'Payment Milestones & Reminders', 'sub' => 'Automated alerts for dues']
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
            'assets/slider/slider7.png', 'assets/slider/slider8.png', 'assets/slider/slider9.png'
        ],
        'panels' => [
            ['title' => 'Super Admin Panel', 'icon' => 'fas fa-shield-alt', 'span' => 1],
            ['title' => 'Construction Panel', 'icon' => 'fas fa-hammer', 'span' => 1],
            ['title' => 'Sales Panel', 'icon' => 'fas fa-chart-line', 'span' => 2]
        ],
        'features' => [
            ['title' => 'Execution & Workflow Tracking', 'sub' => 'Monitor construction progress phase-by-phase'],
            ['title' => 'Post-Sale Support & Handover', 'sub' => 'Streamline the handover process for buyers'],
            ['title' => 'Automated Documentation', 'sub' => 'Generate agreements and invoices easily'],
            ['title' => 'Client Communication Portal', 'sub' => 'Keep buyers updated with their flats progress']
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
<script type="application/ld+json"><?php echo json_encode($productSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<section class="corporate-sub-hero bg-grid-premium">
    <div class="mesh-bg"></div>
    <div class="hero-aura"></div>
    <div class="hero-particles">
        <div class="particle p1"></div>
        <div class="particle p3"></div>
        <div class="particle p6"></div>
        <div class="particle p9"></div>
        <div class="particle p12"></div>
        <div class="particle p15"></div>
    </div>
    <div class="container" style="position: relative; z-index: 5;">
        <!-- Breadcrumb -->
        <nav style="display: inline-flex; align-items: center; gap: 8px; padding: 8px 20px; background: rgba(14, 165, 233, 0.1); border: 1px solid rgba(14, 165, 233, 0.15); border-radius: 50px; color: var(--text-color); font-size: 13px; font-weight: 600; margin-bottom: 30px; backdrop-filter: blur(10px);">
            <a href="./" style="color: var(--secondary-color); text-decoration: none;">Home</a>
            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--text-color); opacity: 0.5;"></i>
            <a href="products/" style="color: var(--secondary-color); text-decoration: none;">Products</a>
            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--text-color); opacity: 0.5;"></i>
            <span><?php echo $product['title']; ?></span>
        </nav>
        <h1 data-aos="fade-up" data-aos-delay="100"><?php echo $product['title_prefix']; ?> <span style="color: var(--secondary-color);"><?php echo $product['title_focus']; ?></span></h1>
        <p data-aos="fade-up" data-aos-delay="200"><?php echo $product['header_desc']; ?></p>
    </div>
</section>

<!-- Product Showcase Section -->
<section class="section" style="background: var(--bg-color); padding-top: 80px;">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <!-- Product Image -->
            <div class="col-lg-6 mb-4">
                <div class="card product-main-card" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.05">
                    <img src="<?php echo BASE_URL; ?><?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?> - ITWAYS CRM Solution" class="img-fluid" style="border-radius: 12px; display: block; width: 100%;" loading="lazy">
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
                        <?php foreach ($product['tags'] as $tag): ?>
                            <a href="#" style="padding: 4px 12px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 6px; font-size: 11px; font-weight: 600; color: var(--text-color); text-decoration: none;"><?php echo $tag; ?></a>
                        <?php endforeach; ?>
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
                    <h3 style="font-size: 24px; font-weight: 900; letter-spacing: -0.02em; color: var(--heading-color); margin-bottom: 25px;"><?php echo $product['description_title']; ?></h3>

                    <?php foreach ($product['description_paragraphs'] as $para): ?>
                    <p style="font-size: 15px; line-height: 1.9; color: var(--text-color); margin-bottom: 20px;"><?php echo $para; ?></p>
                    <?php endforeach; ?>

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
                            <?php foreach ($product['slider_images'] as $slide): ?>
                            <div class="swiper-slide" style="width: 100%; background: #f1f5f9; border-radius: 12px; display: flex; align-items: center; justify-content: center; min-height: 350px;">
                                <img src="<?php echo BASE_URL; ?><?php echo $slide; ?>" alt="<?php echo $product['title']; ?> Screenshot" style="width: 100%; height: auto; max-height: 450px; object-fit: contain; border-radius: 12px;">
                            </div>
                            <?php endforeach; ?>
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
                        <?php foreach ($product['panels'] as $panel): ?>
                        <div style="display: flex; align-items: center; gap: 12px; padding: 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 12px; grid-column: span <?php echo $panel['span']; ?>;">
                            <div style="min-width: 38px; height: 38px; background: rgba(6,182,212,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--secondary-color); font-size: 16px;"><i class="<?php echo $panel['icon']; ?>"></i></div>
                            <span style="font-weight: 700; font-size: 14px; color: var(--heading-color);"><?php echo $panel['title']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Overview Card -->
                <div class="card pc-detail-card" style="margin-bottom: 40px;">
                    <h3 style="font-size: 20px; font-weight: 900; color: var(--heading-color); margin-bottom: 20px;">Features</h3>
                    <ul style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: 12px;">
                        <?php foreach ($product['features'] as $feat): ?>
                        <li style="display: flex; align-items: flex-start; gap: 12px; padding: 14px 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 10px;">
                            <i class="fas fa-check-circle" style="color: var(--secondary-color); margin-top: 2px;"></i>
                            <?php if (!empty($feat['sub'])): ?>
                            <div><span style="font-size: 14px; color: var(--heading-color); font-weight: 600;"><?php echo $feat['title']; ?></span><br><span style="font-size: 13px; color: var(--text-color);"><?php echo $feat['sub']; ?></span></div>
                            <?php else: ?>
                            <span style="font-size: 14px; color: var(--heading-color); font-weight: 600;"><?php echo $feat['title']; ?></span>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- YouTube Video Section -->
                <div class="card" style="padding: 40px; border-radius: var(--radius-lg); margin-bottom: 40px; overflow: hidden;">
                    <h3 style="font-size: 20px; font-weight: 900; color: var(--heading-color); margin-bottom: 20px;"><i class="fab fa-youtube" style="color: #ff0000; margin-right: 10px;"></i>Product Walkthrough</h3>
                    <div style="position: relative; width: 100%; padding-bottom: 56.25%; height: 0; border-radius: 12px; overflow: hidden; background: #000; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
                        <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;" src="<?php echo $product['video_url']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                <div style="position: sticky; top: 150px;">

                    <!-- Request Callback Form -->
                    <div class="card" style="padding: 30px; border-radius: var(--radius-lg); background: var(--light-bg); border: 1px solid var(--border-color); margin-bottom: 25px; position: relative; overflow: hidden; box-shadow: var(--shadow);">
                        <!-- Accent Glow -->
                        <div style="position: absolute; top: -50px; right: -50px; width: 120px; height: 120px; background: var(--secondary-color); filter: blur(70px); opacity: 0.1;"></div>

                        <h4 style="font-size: 18px; font-weight: 900; color: var(--heading-color); margin-bottom: 6px;"><i class="fas fa-phone-alt" style="color: var(--secondary-color); margin-right: 8px;"></i>Request Call Back</h4>
                        <p style="font-size: 12px; color: var(--text-color); margin-bottom: 18px;">We'll reach out to schedule your demo.</p>
                        <form class="callback-form" action="<?php echo $base_url; ?>includes/form-handler.php" method="POST" style="display: flex; flex-direction: column; gap: 12px;">
                            <input type="hidden" name="form_type" value="Product Callback Form">
                            <input type="hidden" name="service_product" value="<?php echo htmlspecialchars($product['title']); ?>">
                            <input type="text" name="name" placeholder="Your Name" style="width: 100%; padding: 12px 14px; background: var(--bg-color); border: 1px solid var(--border-color); border-radius: 10px; color: var(--heading-color); outline: none; transition: 0.3s; font-size: 13px;" onfocus="this.style.borderColor='var(--secondary-color)'" onblur="this.style.borderColor='var(--border-color)'" required>
                            <input type="email" name="email" placeholder="Email Address" style="width: 100%; padding: 12px 14px; background: var(--bg-color); border: 1px solid var(--border-color); border-radius: 10px; color: var(--heading-color); outline: none; transition: 0.3s; font-size: 13px;" onfocus="this.style.borderColor='var(--secondary-color)'" onblur="this.style.borderColor='var(--border-color)'" required>
                            <input type="tel" name="phone" placeholder="Phone Number" style="width: 100%; padding: 12px 14px; background: var(--bg-color); border: 1px solid var(--border-color); border-radius: 10px; color: var(--heading-color); outline: none; transition: 0.3s; font-size: 13px;" onfocus="this.style.borderColor='var(--secondary-color)'" onblur="this.style.borderColor='var(--border-color)'">
                            <textarea name="message" rows="4" placeholder="Your Message" style="width: 100%; padding: 12px 14px; background: var(--bg-color); border: 1px solid var(--border-color); border-radius: 10px; color: var(--heading-color); outline: none; transition: 0.3s; font-size: 13px;" onfocus="this.style.borderColor='var(--secondary-color)'" onblur="this.style.borderColor='var(--border-color)'"></textarea>
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