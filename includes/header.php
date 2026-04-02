<?php
// Define Base URL for absolute paths
define('BASE_URL', '/ITWAYS/');
$base_url = BASE_URL;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITways - Empowering Your Digital Future</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/unique.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/responsive.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="icon" href="<?php echo $base_url; ?>assets/logo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <!-- Unique Page Loader -->
    <div id="page-loader" class="page-loader">
        <div class="loader-content">
            <div class="loader-ring"></div>
            <div class="loader-ring"></div>
            <span class="loader-text">IT WAYS</span>
        </div>
    </div>
    <!-- Reading Progress Bar -->
    <div class="reading-progress-container">
        <div id="reading-progress-bar"></div>
    </div>

    <header id="header">
        <!-- Top Row: Logo + Now Hiring + Phone Contact -->
        <div class="header-top-row">
            <div class="container header-top-inner">
                <!-- Logo -->
                <div class="logo-area">
                    <a href="<?php echo $base_url; ?>" class="logo">
                        <img src="<?php echo $base_url; ?>assets/logo.png" alt="IT WAYS" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" style="height: 60px !important; transition: all 0.3s ease;">
                        <div class="logo-text-fallback" style="display: none; align-items: center; gap: 10px;">
                            <span style="color: #0ea5e9; font-weight: 900; font-size: 32px; letter-spacing: -2px;">IIW</span>
                            <div style="display: flex; flex-direction: column; line-height: 1;">
                                <span style="color: #555; font-size: 14px; font-weight: 700;">IT WAYS</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Now Hiring Banner -->
                <div class="header-hiring-banner">
                    <a href="<?php echo $base_url; ?>careers/">
                        <span class="hiring-label">Now Hiring:</span> Are you a driven and motivated PHP / Laravel / CI developer?
                    </a>
                </div>

                <!-- Phone Contact -->
                <div class="header-contact-phone">
                    <div class="phone-bubble-icon">
                        <i class="fas fa-comment-dots"></i>
                    </div>
                    <div class="phone-text">
                        <span>Have any questions?</span>
                        <a href="tel:+919919227600">Call: <strong>+91 9919227600</strong></a>
                    </div>
                </div>

                <!-- Mobile Toggle -->
                <div class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>

        <!-- Separator Line -->
        <div class="header-separator"></div>

        <!-- Bottom Row: Centered Navigation -->
        <div class="header-nav-row">
            <div class="container">
                <nav class="nav-menu nav-menu-centered">
                    <ul class="nav-links">
                        <!-- Mobile Nav Header (Visible only on mobile/tablet) -->
                        <li class="mobile-nav-branding">
                            <div class="mobile-logo-wrap">
                                <img src="<?php echo $base_url; ?>assets/logo.png" alt="IT WAYS">
                                <span>IT WAYS</span>
                            </div>
                        </li>
                        <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
                        <li><a href="<?php echo $base_url; ?>" class="<?php echo ($currentPage == 'index.php' || $currentPage == '') ? 'active' : ''; ?>">Home</a></li>
                        <li class="has-dropdown">
                            <a href="<?php echo $base_url; ?>about/" class="<?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">Company <i class="fas fa-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $base_url; ?>about/">About</a></li>
                                <li><a href="<?php echo $base_url; ?>about/#mission">Mission, Vision and Values</a></li>
                                <li><a href="<?php echo $base_url; ?>about/#team">Leadership Team</a></li>
                                <li><a href="<?php echo $base_url; ?>about/#why-us">Why Choose Us</a></li>
                                <li><a href="<?php echo $base_url; ?>careers/">Careers</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="<?php echo $base_url; ?>products/" class="<?php echo ($currentPage == 'products.php') ? 'active' : ''; ?>">Products & Solutions <i class="fas fa-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $base_url; ?>product-details.php?product=real-estate">Real Estate Software</a></li>
                                <li><a href="<?php echo $base_url; ?>products/#">News Portal Software</a></li>
                                <li><a href="<?php echo $base_url; ?>products/#">ERP Software</a></li>
                                <li><a href="<?php echo $base_url; ?>products/#">Restaurant Software</a></li>
                                <li><a href="<?php echo $base_url; ?>products/#">Hotel Management Software</a></li>
                                <li><a href="<?php echo $base_url; ?>products/#">Salon Management Software</a></li>
                                <li><a href="<?php echo $base_url; ?>products/#">Educational Software</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="<?php echo $base_url; ?>services/" class="<?php echo ($currentPage == 'services.php') ? 'active' : ''; ?>">Services <i class="fas fa-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $base_url; ?>service-details.php?service=software-development">Software Development</a></li>
                                <li><a href="<?php echo $base_url; ?>service-details.php?service=hardware-networking">Hardware & Networking</a></li>
                                <li><a href="<?php echo $base_url; ?>service-details.php?service=website-development">Website Development</a></li>
                                <li><a href="<?php echo $base_url; ?>service-details.php?service=application-development">Application Development</a></li>
                                <li><a href="<?php echo $base_url; ?>service-details.php?service=digital-marketing">Digital Marketing</a></li>
                                <li><a href="<?php echo $base_url; ?>service-details.php?service=seo-services">SEO Services</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $base_url; ?>careers/" class="<?php echo ($currentPage == 'careers.php') ? 'active' : ''; ?>">Careers</a></li>
                        <li><a href="<?php echo $base_url; ?>contact/" class="<?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>