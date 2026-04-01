<?php include 'includes/header.php';

// Service Data mapping
$services_data = [
    'software-development' => [
        'title' => 'Software Development',
        'icon' => 'fas fa-laptop-code',
        'badge' => 'Enterprise Solutions',
        'short_desc' => 'Comprehensive software solutions designed for cutting-edge scaling and business optimization.',
        'description' => 'We specialize in building robust, scalable, and high-performance software tailored to your unique business requirements. Our engineering team leverages modern architecture patterns to ensure your software is future-proof and efficient.',
        'features' => [
            'Custom ERP & CRM development',
            'Cloud-native architecture',
            'Microservices & API integration',
            'Legacy system modernization'
        ],
        'process' => [
            ['title' => 'Discovery', 'desc' => 'Understanding your goals and technical requirements.'],
            ['title' => 'Architecture', 'desc' => 'Designing a scalable and secure system blueprint.'],
            ['title' => 'Development', 'desc' => 'Agile sprints with continuous integration.'],
            ['title' => 'Deployment', 'desc' => 'Smooth transition to production environments.']
        ]
    ],
    'web-application-development' => [
        'title' => 'Web Application Development',
        'icon' => 'fas fa-layer-group',
        'badge' => 'Interactive Apps',
        'short_desc' => 'Modern, interactive and secure web applications built using the latest technology frameworks.',
        'description' => 'From single-page applications to complex enterprise portals, we create web apps that deliver exceptional user experiences while maintaining high security and performance standards.',
        'features' => [
            'Progressive Web Apps (PWA)',
            'React / Angular / Vue integration',
            'Real-time data processing',
            'Secure Auth & Data Encryption'
        ],
        'process' => [
            ['title' => 'UI/UX Design', 'desc' => 'Creating intuitive user journeys.'],
            ['title' => 'Frontend Dev', 'desc' => 'Building responsive interactive layers.'],
            ['title' => 'Backend Dev', 'desc' => 'Developing powerful logic and APIs.'],
            ['title' => 'Optimization', 'desc' => 'Ensuring fast load times and SEO.']
        ]
    ],
    'web-design-development' => [
        'title' => 'Web Design & Development',
        'icon' => 'fas fa-code',
        'badge' => 'Creative & Responsive',
        'short_desc' => 'Creative and responsive web designs that capture your brand essence and engage your audience.',
        'description' => 'We blend aesthetics with functionality to create websites that don\'t just look good but also convert visitors into customers. Our designs are pixel-perfect and fully responsive across all devices.',
        'features' => [
            'Custom UI/UX Design',
            'Responsive WordPress/CMS development',
            'Interactive animations & effects',
            'Cross-browser optimization'
        ],
        'process' => [
            ['title' => 'Wireframing', 'desc' => 'Defining the structural layout.'],
            ['title' => 'Visual Design', 'desc' => 'Applying brand identity and aesthetics.'],
            ['title' => 'Coding', 'desc' => 'W3C compliant clean coding.'],
            ['title' => 'Launch', 'desc' => 'Going live with performance checks.']
        ]
    ],
    'seo-solution' => [
        'title' => 'SEO Solution',
        'icon' => 'fas fa-chart-line',
        'badge' => 'Organic Growth',
        'short_desc' => 'Strategic search engine optimization to boost your online visibility and drive organic growth.',
        'description' => 'Our SEO strategies are data-driven and focus on long-term sustainability. We help you climb search rankings and maintain visibility in a competitive digital landscape.',
        'features' => [
            'In-depth Keyword Research',
            'Technical SEO audits',
            'Content strategy & optimization',
            'Backlink profile management'
        ],
        'process' => [
            ['title' => 'Audit', 'desc' => 'Analyzing current site performance.'],
            ['title' => 'Strategy', 'desc' => 'Mapping out growth opportunities.'],
            ['title' => 'Execution', 'desc' => 'On-page and Off-page optimization.'],
            ['title' => 'Reporting', 'desc' => 'Tracking rankings and traffic ROI.']
        ]
    ],
    'computer-hardware' => [
        'title' => 'Computer Hardware',
        'icon' => 'fas fa-desktop',
        'badge' => 'Infrastructure',
        'short_desc' => 'Full computer hardware procurement, maintenance and expert technical support services.',
        'description' => 'We provide end-to-end hardware solutions for businesses, from workstation setup to server maintenance. Our certified technicians ensure your physical infrastructure stays operational 24/7.',
        'features' => [
            'Workstation & Server procurement',
            'Preventive maintenance contracts',
            'Component repairs & upgrades',
            'Asset lifecycle management'
        ],
        'process' => [
            ['title' => 'Assessment', 'desc' => 'Evaluating your hardware needs.'],
            ['title' => 'Procurement', 'desc' => 'Sourcing high-quality components.'],
            ['title' => 'Installation', 'desc' => 'Expert setup and configuration.'],
            ['title' => 'Support', 'desc' => 'Ongoing maintenance and repairs.']
        ]
    ],
    'computer-networking' => [
        'title' => 'Computer Networking',
        'icon' => 'fas fa-network-wired',
        'badge' => 'Zero Downtime',
        'short_desc' => 'Secure and robust network infrastructure setup and management for your entire enterprise.',
        'description' => 'We design and implement secure network layouts that minimize latency and maximize security. Our solutions cover LAN/WAN, VPN, and wireless infrastructure.',
        'features' => [
            'Network design & architecture',
            'Fortified Firewall & Security',
            'Secure VPN & Remote Access',
            'Wireless optimization & Mesh'
        ],
        'process' => [
            ['title' => 'Topology', 'desc' => 'Designing the network structure.'],
            ['title' => 'Cabling/HW', 'desc' => 'Laying physical/virtual connections.'],
            ['title' => 'Security', 'desc' => 'Implementing strict access protocols.'],
            ['title' => 'Monitoring', 'desc' => '24/7 bandwidth and health tracking.']
        ]
    ],
    'video-surveillance-solution' => [
        'title' => 'Video Surveillance Solution',
        'icon' => 'fas fa-video',
        'badge' => 'Total Security',
        'short_desc' => 'Advanced CCTV systems and surveillance matrix solutions for monitoring your physical assets.',
        'description' => 'Protect your assets with our state-of-the-art surveillance solutions. We provide high-definition IP cameras, NVR/DVR storage system, and remote viewing capabilities.',
        'features' => [
            'IP & Analog Camera systems',
            'AI-powered motion detection',
            'Night vision & Thermal imaging',
            'Remote mobile monitoring'
        ],
        'process' => [
            ['title' => 'Site Survey', 'desc' => 'Identifying blind spots and coverage.'],
            ['title' => 'Design', 'desc' => 'Strategizing camera placements.'],
            ['title' => 'Installation', 'desc' => 'Setting up the surveillance matrix.'],
            ['title' => 'Training', 'desc' => 'Showing how to access and export.']
        ]
    ]
];

// Get current service info
$type = isset($_GET['type']) ? $_GET['type'] : 'software-development';
$service = isset($services_data[$type]) ? $services_data[$type] : $services_data['software-development'];

?>

<section class="corporate-sub-hero bg-grid-premium">
    <div class="mesh-bg"></div>
    <div class="hero-aura"></div>
    <div class="hero-particles">
        <div class="particle p2"></div>
        <div class="particle p5"></div>
        <div class="particle p8"></div>
        <div class="particle p11"></div>
        <div class="particle p14"></div>
        <div class="particle p16"></div>
    </div>
    <div class="container" style="position: relative; z-index: 5;">
        <!-- Breadcrumb -->
        <nav style="display: inline-flex; align-items: center; gap: 8px; padding: 8px 20px; background: rgba(14, 165, 233, 0.1); border: 1px solid rgba(14, 165, 233, 0.15); border-radius: 50px; color: var(--text-color); font-size: 13px; font-weight: 600; margin-bottom: 30px; backdrop-filter: blur(10px);">
            <a href="<?php echo $base_url; ?>" style="color: var(--secondary-color); text-decoration: none;">Home</a>
            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--text-color); opacity: 0.5;"></i>
            <a href="<?php echo $base_url; ?>services/" style="color: var(--secondary-color); text-decoration: none;">Services</a>
            <i class="fas fa-chevron-right" style="font-size: 9px; color: var(--text-color); opacity: 0.5;"></i>
            <span><?php echo $service['title']; ?></span>
        </nav>
        <h1 data-aos="fade-up" data-aos-delay="100"><?php echo explode(' ', $service['title'])[0]; ?> <span style="color: var(--secondary-color);"><?php echo implode(' ', array_slice(explode(' ', $service['title']), 1)); ?></span></h1>
        <p data-aos="fade-up" data-aos-delay="200"><?php echo $service['short_desc']; ?></p>
    </div>
</section>

<!-- Main Detail Content -->
<section class="section" style="background: var(--bg-color); padding-top: 60px;">
    <div class="container">
        <div class="row">

            <!-- Left: Main Content -->
            <div class="col-lg-8" data-aos="fade-up">

                <!-- Overview Card -->
                <div class="card pc-detail-card" style="margin-bottom: 40px;">
                    <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">
                        <div style="width: 70px; height: 70px; background: rgba(6, 182, 212, 0.1); border-radius: 20px; display: flex; align-items: center; justify-content: center; font-size: 32px; color: var(--secondary-color);">
                            <i class="<?php echo $service['icon']; ?>"></i>
                        </div>
                        <div>
                            <span style="font-size: 11px; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; color: var(--secondary-color);"><?php echo $service['badge']; ?></span>
                            <h2 style="font-size: 28px; font-weight: 800; color: var(--heading-color); margin: 0;"><?php echo $service['title']; ?></h2>
                        </div>
                    </div>

                    <p style="font-size: 17px; line-height: 1.9; color: var(--text-color); margin-bottom: 30px;"><?php echo $service['description']; ?></p>

                    <h3 style="font-size: 20px; font-weight: 800; color: var(--heading-color); margin-bottom: 25px;">Core Features & Capabilities</h3>

                    <div class="row g-4 mb-4">
                        <?php foreach ($service['features'] as $feature): ?>
                            <div class="col-md-6">
                                <div style="display: flex; align-items: center; gap: 15px; padding: 20px; background: var(--light-bg); border-radius: 16px; border: 1px solid var(--border-color);">
                                    <i class="fas fa-check-circle" style="color: var(--secondary-color); font-size: 18px;"></i>
                                    <span style="font-weight: 600; font-size: 14px; color: var(--heading-color);"><?php echo $feature; ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Process Section -->
                <div class="card pc-detail-card">
                    <h3 style="font-size: 24px; font-weight: 800; color: var(--heading-color); margin-bottom: 35px;">Our Approach & Process</h3>

                    <div style="position: relative;">
                        <!-- Vertical Line -->
                        <div style="position: absolute; left: 25px; top: 0; height: 100%; width: 2px; background: rgba(6, 182, 212, 0.1);"></div>

                        <?php foreach ($service['process'] as $index => $step): ?>
                            <div style="display: flex; gap: 30px; margin-bottom: 40px; position: relative; z-index: 2;">
                                <div style="width: 50px; min-width: 50px; height: 50px; background: #fff; border: 2px solid var(--secondary-color); color: var(--secondary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px;">
                                    <?php echo $index + 1; ?>
                                </div>
                                <div>
                                    <h4 style="font-size: 18px; font-weight: 700; color: var(--heading-color); margin-bottom: 8px;"><?php echo $step['title']; ?></h4>
                                    <p style="font-size: 15px; color: var(--text-color); margin: 0; line-height: 1.6;"><?php echo $step['desc']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>

            <!-- Right: Sidebar -->
            <div class="col-lg-4">
                <div style="position: sticky; top: 120px;">

                    <!-- Quick Request Card -->
                    <div class="card" style="padding: 35px; border-radius: 30px; background: var(--dark-navy); color: #fff; border: 1px solid rgba(255,255,255,0.1); margin-bottom: 30px; position: relative; overflow: hidden;">
                        <!-- Glow effect -->
                        <div style="position: absolute; top: -50px; right: -50px; width: 150px; height: 150px; background: var(--secondary-color); filter: blur(80px); opacity: 0.2;"></div>

                        <h4 style="font-size: 20px; font-weight: 800; margin-bottom: 10px;">Get a Quote</h4>
                        <p style="font-size: 14px; opacity: 0.7; margin-bottom: 25px;">Ready to start your project? Let's discuss your requirements.</p>

                        <form style="display: flex; flex-direction: column; gap: 12px;">
                            <input type="text" placeholder="Full Name" style="padding: 14px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; color: #fff; outline: none; transition: 0.3s; font-size: 14px;" onfocus="this.style.borderColor='var(--secondary-color)'">
                            <input type="tel" placeholder="Phone Number" style="padding: 14px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; color: #fff; outline: none; transition: 0.3s; font-size: 14px;" onfocus="this.style.borderColor='var(--secondary-color)'">
                            <textarea placeholder="Tell us about your project..." rows="3" style="padding: 14px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; color: #fff; outline: none; transition: 0.3s; font-size: 14px;" onfocus="this.style.borderColor='var(--secondary-color)'"></textarea>
                            <button type="submit" class="btn btn-primary" style="padding: 14px; font-weight: 800; font-size: 15px; margin-top: 10px;">Send Message <i class="fas fa-paper-plane ms-2"></i></button>
                        </form>
                    </div>

                    <!-- Other Services List -->
                    <div class="card" style="padding: 30px; border-radius: 30px; border: 1px solid var(--border-color);">
                        <h4 style="font-size: 16px; font-weight: 800; color: var(--heading-color); margin-bottom: 20px;">Other Core Services</h4>
                        <div style="display: flex; flex-direction: column; gap: 10px;">
                            <?php foreach ($services_data as $slug => $data): if ($slug === $type) continue; ?>
                                <a href="<?php echo $base_url; ?>service-details.php?type=<?php echo $slug; ?>" style="display: flex; align-items: center; gap: 12px; padding: 12px 18px; background: var(--light-bg); border-radius: 12px; text-decoration: none; color: var(--heading-color); font-weight: 600; font-size: 14px; transition: 0.3s;" onmouseover="this.style.background='rgba(6,182,212,0.05)'; this.style.color='var(--secondary-color)';" onmouseout="this.style.background='var(--light-bg)'; this.style.color='var(--heading-color)';">
                                    <i class="<?php echo $data['icon']; ?>" style="font-size: 14px; opacity: 0.7;"></i>
                                    <?php echo $data['title']; ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>