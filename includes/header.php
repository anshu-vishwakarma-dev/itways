<?php
// Define Base URL for absolute paths
if (!defined('BASE_URL')) {
    define('BASE_URL', '/ITWAYS/');
}
$base_url = BASE_URL;

$currentPage = basename($_SERVER['PHP_SELF'] ?? 'index.php');
$requestUri = $_SERVER['REQUEST_URI'] ?? $base_url;
$uriPath = parse_url($requestUri, PHP_URL_PATH) ?: $base_url;
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$siteUrl = $scheme . '://' . $host;
$canonicalUrl = rtrim($siteUrl, '/') . $uriPath;
if (!empty($_SERVER['QUERY_STRING']) && $currentPage !== '404.php') {
    $canonicalUrl .= '?' . $_SERVER['QUERY_STRING'];
}

$seo = [
    'title' => 'ITWAYS | Software Development, Web Development and SEO Company in Lucknow',
    'description' => 'ITWAYS delivers software development, website development, SEO services, enterprise solutions, and IT support for growing businesses from Lucknow, India.',
    'keywords' => 'ITWAYS, software company Lucknow, website development company, SEO services, custom software development, IT solutions India',
    'robots' => 'index, follow',
    'type' => 'website',
    'image' => $siteUrl . $base_url . 'assets/logo.png'
];

$pageSeo = [
    'index.php' => [
        'title' => 'ITWAYS | Smart IT Solutions, Software Development and SEO Services',
        'description' => 'Explore ITWAYS for custom software development, web application development, SEO services, IT infrastructure, and digital solutions that help businesses grow faster.',
        'keywords' => 'software development company, SEO services company, web application development, IT infrastructure solutions, digital transformation company'
    ],
    'about.php' => [
        'title' => 'About ITWAYS | Software Company in Lucknow',
        'description' => 'Learn about ITWAYS, a Lucknow-based software company delivering scalable software, website, and digital growth solutions since 2013.',
        'keywords' => 'about ITWAYS, software company Lucknow, IT company profile, digital solutions company'
    ],
    'services.php' => [
        'title' => 'IT Services | Software Development, Web Development, SEO and IT Infrastructure',
        'description' => 'Discover ITWAYS services including custom software development, website development, SEO, networking, surveillance, and bulk SMS solutions.',
        'keywords' => 'software development services, web development services, SEO services, IT infrastructure, networking services'
    ],
    'products.php' => [
        'title' => 'Products and Solutions | ITWAYS CRM and Business Software',
        'description' => 'Browse ITWAYS products and business software solutions, including CRM tools and industry-focused platforms for real estate and enterprise operations.',
        'keywords' => 'CRM software, business software solutions, real estate CRM, enterprise software products'
    ],
    'contact.php' => [
        'title' => 'Contact ITWAYS | Talk to Our Software and SEO Team',
        'description' => 'Contact ITWAYS for software development, website development, SEO solutions, and IT consulting. Reach our Lucknow office by phone, email, or form.',
        'keywords' => 'contact ITWAYS, software company contact, SEO consultation, web development inquiry'
    ],
    'careers.php' => [
        'title' => 'Careers at ITWAYS | Join Our Software Team',
        'description' => 'Explore current career opportunities at ITWAYS for developers, designers, and technology professionals building impactful digital products.',
        'keywords' => 'IT jobs Lucknow, software careers, developer jobs, careers at ITWAYS'
    ],
    '404.php' => [
        'title' => 'Page Not Found | ITWAYS',
        'description' => 'The page you are looking for could not be found. Explore ITWAYS services, products, and contact details from the main website.',
        'keywords' => 'page not found, ITWAYS',
        'robots' => 'noindex, follow'
    ]
];

$serviceSeo = [
    'software-development' => [
        'title' => 'Software Development Services | ITWAYS',
        'description' => 'Custom software development services from ITWAYS for scalable business systems, ERP, CRM, cloud platforms, and modern enterprise applications.',
        'keywords' => 'custom software development, ERP development, CRM development, enterprise software company'
    ],
    'hardware-networking' => [
        'title' => 'Hardware and Networking Services | ITWAYS',
        'description' => 'ITWAYS provides hardware procurement, setup, maintenance, and networking solutions for secure, reliable business infrastructure.',
        'keywords' => 'hardware services, computer networking, IT infrastructure setup, network support'
    ],
    'website-development' => [
        'title' => 'Website Development Services | ITWAYS',
        'description' => 'Build responsive, high-performance business websites with ITWAYS website development services focused on speed, design, SEO, and conversions.',
        'keywords' => 'website development company, responsive website design, business website development, SEO friendly website'
    ],
    'application-development' => [
        'title' => 'Application Development Services | ITWAYS',
        'description' => 'ITWAYS develops powerful mobile and web applications tailored to business workflows, customer engagement, and long-term scalability.',
        'keywords' => 'application development, mobile app development, business apps, custom app solutions'
    ],
    'digital-marketing' => [
        'title' => 'Digital Marketing Services | ITWAYS',
        'description' => 'Grow your online presence with ITWAYS digital marketing services including SEO strategy, lead generation, content optimization, and campaign support.',
        'keywords' => 'digital marketing services, online marketing company, lead generation, content marketing'
    ],
    'seo-services' => [
        'title' => 'SEO Services | ITWAYS',
        'description' => 'Improve rankings, traffic, and visibility with ITWAYS SEO services including on-page SEO, technical SEO, keyword research, and content optimization.',
        'keywords' => 'SEO services, technical SEO, on-page SEO, keyword research, search engine optimization company'
    ]
];

$productSeo = [
    'real-estate' => [
        'title' => 'Real Estate CRM Software | ITWAYS',
        'description' => 'Discover ITWAYS real estate CRM software for lead management, property tracking, agent workflows, and faster sales operations.',
        'keywords' => 'real estate CRM software, property management CRM, lead management software, CRM for builders'
    ],
    'real-estate-crm' => [
        'title' => 'Real Estate CRM Pro | ITWAYS',
        'description' => 'Real Estate CRM Pro by ITWAYS helps builders and agents manage leads, listings, teams, and customer relationships from one platform.',
        'keywords' => 'real estate CRM pro, CRM for real estate, builder CRM, sales automation software'
    ],
    'agent-crm' => [
        'title' => 'Agent CRM Software | ITWAYS',
        'description' => 'Agent CRM Software by ITWAYS streamlines follow-ups, property inventory, client communication, and performance tracking for agents.',
        'keywords' => 'agent CRM software, real estate agent CRM, sales CRM, property lead management'
    ],
    'construction-crm' => [
        'title' => 'Construction CRM Software | ITWAYS',
        'description' => 'Manage projects, customer pipelines, site updates, and team coordination with construction CRM software from ITWAYS.',
        'keywords' => 'construction CRM software, project CRM, construction lead management, builder software'
    ],
    'builder-crm' => [
        'title' => 'Builder CRM Software | ITWAYS',
        'description' => 'Builder CRM software from ITWAYS centralizes bookings, inventory, leads, payments, and customer communication for real estate teams.',
        'keywords' => 'builder CRM software, real estate builder software, property sales CRM, booking management CRM'
    ],
    'developer-crm' => [
        'title' => 'Developer CRM Software | ITWAYS',
        'description' => 'ITWAYS developer CRM software helps real estate developers manage sales pipelines, site inventory, leads, and customer engagement efficiently.',
        'keywords' => 'developer CRM software, real estate developer CRM, sales pipeline software, property CRM'
    ]
];

if (isset($pageSeo[$currentPage])) {
    $seo = array_merge($seo, $pageSeo[$currentPage]);
}

if ($currentPage === 'service-details.php') {
    $serviceSlug = $_GET['service'] ?? '';
    if (isset($serviceSeo[$serviceSlug])) {
        $seo = array_merge($seo, $serviceSeo[$serviceSlug], ['type' => 'article']);
    }
}

if ($currentPage === 'product-details.php') {
    $productSlug = $_GET['product'] ?? '';
    if (isset($productSeo[$productSlug])) {
        $seo = array_merge($seo, $productSeo[$productSlug], ['type' => 'product']);
    }
}

$organizationSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => 'ITWAYS',
    'url' => rtrim($siteUrl . $base_url, '/'),
    'logo' => $siteUrl . $base_url . 'assets/logo.png',
    'email' => 'info@itways.in',
    'telephone' => '+91 9919227600',
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => 'LGF 180, Khazana Complex, Ashiana',
        'addressLocality' => 'Lucknow',
        'addressRegion' => 'Uttar Pradesh',
        'addressCountry' => 'IN'
    ]
];

$webPageSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => $seo['title'],
    'description' => $seo['description'],
    'url' => $canonicalUrl
];

// Breadcrumb Schema
$breadcrumbs = [
    [
        '@type' => 'ListItem',
        'position' => 1,
        'name' => 'Home',
        'item' => $siteUrl . $base_url
    ]
];

if ($currentPage !== 'index.php') {
    $breadcrumbs[] = [
        '@type' => 'ListItem',
        'position' => 2,
        'name' => ucwords(str_replace(['.php', '-'], ['', ' '], $currentPage)),
        'item' => $canonicalUrl
    ];
}

$breadcrumbSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $breadcrumbs
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($seo['description'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($seo['keywords'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="robots" content="<?php echo htmlspecialchars($seo['robots'], ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="<?php echo htmlspecialchars($seo['type'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($seo['description'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($seo['image'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:site_name" content="ITWAYS">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($seo['description'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($seo['image'], ENT_QUOTES, 'UTF-8'); ?>">
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
    <script type="application/ld+json"><?php echo json_encode($organizationSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
    <script type="application/ld+json"><?php echo json_encode($webPageSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
    <script type="application/ld+json"><?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
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
