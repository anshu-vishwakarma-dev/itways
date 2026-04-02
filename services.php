<?php include 'includes/header.php'; ?>

<section class="corporate-sub-hero bg-grid-premium">
    <div class="mesh-bg"></div>
    <div class="hero-aura"></div>
    <div class="hero-particles">
        <div class="particle p2"></div>
        <div class="particle p4"></div>
        <div class="particle p6"></div>
        <div class="particle p8"></div>
        <div class="particle p14"></div>
        <div class="particle p16"></div>
    </div>
    <div class="container" style="position: relative; z-index: 5;">
        <div class="corporate-badge" data-aos="fade-up">
            <i class="fas fa-layer-group"></i> Expertise
        </div>
        <h1 data-aos="fade-up" data-aos-delay="100">Enterprise <span style="color: var(--secondary-color);">Services</span></h1>
        <p data-aos="fade-up" data-aos-delay="200">World-class IT solutions designed to solve complex business challenges and drive operational efficiency.</p>
    </div>
</section>

<section class="section bg-light-bg" style="padding-top: 60px;">
    <div class="container" data-aos="fade-up">

        <!-- Software Category -->
        <div style="margin-bottom: 70px;">
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 40px; border-bottom: 2px solid rgba(6,182,212,0.1); padding-bottom: 15px;">
                <h2 style="font-size: 28px; font-weight: 800; color: var(--heading-color); margin: 0; display: flex; align-items: center; gap: 15px;">
                    <div style="width: 45px; height: 45px; background: rgba(6,182,212,0.1); color: var(--secondary-color); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px;"><i class="fas fa-laptop-code"></i></div>
                    Software Solutions
                </h2>
            </div>
            
            <div class="sv-services-grid">
                <!-- 1. Custom Software Development -->
                <div class="card service-detail" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.2">
                    <i class="fas fa-cogs text-secondary-color fs-24 mb-4"></i>
                    <h3 style="font-size: 20px; font-weight: 700;">Custom Software Development</h3>
                    <p style="font-size: 14px; margin-bottom: 20px;">Expert engineered, robust & custom tailored software, ready to fulfill your business goals.</p>
                    <a href="<?php echo $base_url; ?>service-details.php?type=software-development" style="color: var(--secondary-color); text-decoration: none; font-weight: 700; font-size: 13px; text-transform: uppercase;">read more <i class="fas fa-arrow-right ms-1"></i></a>
                </div>

                <!-- 2. Web Application Development -->
                <div class="card service-detail" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.2">
                    <i class="fas fa-layer-group text-secondary-color fs-24 mb-4"></i>
                    <h3 style="font-size: 20px; font-weight: 700;">Web Application Development</h3>
                    <p style="font-size: 14px; margin-bottom: 20px;">Complex web applications and scalable enterprise portals built for performance.</p>
                    <a href="<?php echo $base_url; ?>service-details.php?type=web-application-development" style="color: var(--secondary-color); text-decoration: none; font-weight: 700; font-size: 13px; text-transform: uppercase;">read more <i class="fas fa-arrow-right ms-1"></i></a>
                </div>

                <!-- 3. Web Design & Development -->
                <div class="card service-detail" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.2">
                    <i class="fas fa-code text-secondary-color fs-24 mb-4"></i>
                    <h3 style="font-size: 20px; font-weight: 700;">Web Design & Development</h3>
                    <p style="font-size: 14px; margin-bottom: 20px;">Be it business portals or informative lead-gen websites, we have a portfolio which speaks.</p>
                    <a href="<?php echo $base_url; ?>service-details.php?type=web-design-development" style="color: var(--secondary-color); text-decoration: none; font-weight: 700; font-size: 13px; text-transform: uppercase;">read more <i class="fas fa-arrow-right ms-1"></i></a>
                </div>

                <!-- 4. SEO Solution -->
                <div class="card service-detail" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.2">
                    <i class="fas fa-magnifying-glass-chart text-secondary-color fs-24 mb-4"></i>
                    <h3 style="font-size: 20px; font-weight: 700;">SEO Solution</h3>
                    <p style="font-size: 14px; margin-bottom: 20px;">We help you climb search rankings and maintain visibility in a competitive digital landscape.</p>
                    <a href="<?php echo $base_url; ?>service-details.php?type=seo-solution" style="color: var(--secondary-color); text-decoration: none; font-weight: 700; font-size: 13px; text-transform: uppercase;">read more <i class="fas fa-arrow-right ms-1"></i></a>
                </div>

                <!-- 5. App Maintenance & Mobile -->
                <div class="card service-detail" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.2">
                    <i class="fas fa-mobile-alt text-secondary-color fs-24 mb-4"></i>
                    <h3 style="font-size: 20px; font-weight: 700;">Mobile App Solutions</h3>
                    <p style="font-size: 14px; margin-bottom: 20px;">Immersive mobile app solutions and continuous support to transform your business.</p>
                    <a href="<?php echo $base_url; ?>service-details.php?type=mobile-app-solutions" style="color: var(--secondary-color); text-decoration: none; font-weight: 700; font-size: 13px; text-transform: uppercase;">read more <i class="fas fa-arrow-right ms-1"></i></a>
                </div>

                <!-- 6. Digital Consulting -->
                <div class="card service-detail" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.2">
                    <i class="fas fa-chart-line text-secondary-color fs-24 mb-4"></i>
                    <h3 style="font-size: 20px; font-weight: 700;">Digital Consulting</h3>
                    <p style="font-size: 14px; margin-bottom: 20px;">Our research based and goal driven approach in consulting, lays the perfect foundation.</p>
                    <a href="<?php echo $base_url; ?>service-details.php?type=digital-consulting" style="color: var(--secondary-color); text-decoration: none; font-weight: 700; font-size: 13px; text-transform: uppercase;">read more <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>

        <!-- Hardware & Networking Category -->
        <div style="margin-bottom: 70px;">
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 40px; border-bottom: 2px solid rgba(6,182,212,0.1); padding-bottom: 15px;">
                <h2 style="font-size: 28px; font-weight: 800; color: var(--heading-color); margin: 0; display: flex; align-items: center; gap: 15px;">
                    <div style="width: 45px; height: 45px; background: rgba(6,182,212,0.1); color: var(--secondary-color); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px;"><i class="fas fa-server"></i></div>
                    Hardware & Networking
                </h2>
            </div>
            
            <div class="sv-services-grid">
                <!-- 1. Laptop Desktop Repairs -->
                <div class="card service-detail" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.2">
                    <i class="fas fa-tools text-secondary-color fs-24 mb-4"></i>
                    <h3 style="font-size: 20px; font-weight: 700;">Laptop & Desktop Repairs</h3>
                    <p style="font-size: 14px; margin-bottom: 20px;">Fast, reliable, and professional component repair services for critical business workstations.</p>
                    <a href="<?php echo $base_url; ?>service-details.php?type=computer-hardware" style="color: var(--secondary-color); text-decoration: none; font-weight: 700; font-size: 13px; text-transform: uppercase;">read more <i class="fas fa-arrow-right ms-1"></i></a>
                </div>

                <!-- 2. Computer Hardware -->
                <div class="card service-detail" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.2">
                    <i class="fas fa-desktop text-secondary-color fs-24 mb-4"></i>
                    <h3 style="font-size: 20px; font-weight: 700;">Computer Hardware</h3>
                    <p style="font-size: 14px; margin-bottom: 20px;">We provide a full product line including servers, routers, firewalls, and enterprise accessories.</p>
                    <a href="<?php echo $base_url; ?>service-details.php?type=computer-hardware" style="color: var(--secondary-color); text-decoration: none; font-weight: 700; font-size: 13px; text-transform: uppercase;">read more <i class="fas fa-arrow-right ms-1"></i></a>
                </div>

                <!-- 3. Computer Networks -->
                <div class="card service-detail" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.2">
                    <i class="fas fa-network-wired text-secondary-color fs-24 mb-4"></i>
                    <h3 style="font-size: 20px; font-weight: 700;">Computer Networks</h3>
                    <p style="font-size: 14px; margin-bottom: 20px;">Cisco Certified engineers ready to design, secure, and manage your enterprise networking needs.</p>
                    <a href="<?php echo $base_url; ?>service-details.php?type=computer-networking" style="color: var(--secondary-color); text-decoration: none; font-weight: 700; font-size: 13px; text-transform: uppercase;">read more <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>

        <!-- Video Surveillance Category -->
        <div style="margin-bottom: 40px;">
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 40px; border-bottom: 2px solid rgba(6,182,212,0.1); padding-bottom: 15px;">
                <h2 style="font-size: 28px; font-weight: 800; color: var(--heading-color); margin: 0; display: flex; align-items: center; gap: 15px;">
                    <div style="width: 45px; height: 45px; background: rgba(6,182,212,0.1); color: var(--secondary-color); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px;"><i class="fas fa-video"></i></div>
                    Video Surveillance
                </h2>
            </div>
            
            <div class="sv-services-grid">
                <!-- 1. Home Solution -->
                <div class="card service-detail" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.2">
                    <i class="fas fa-home text-secondary-color fs-24 mb-4"></i>
                    <h3 style="font-size: 20px; font-weight: 700;">Home Solutions</h3>
                    <p style="font-size: 14px; margin-bottom: 20px;">Secure your residence with top-tier IP cameras and remote mobile viewing capabilities.</p>
                    <a href="<?php echo $base_url; ?>service-details.php?type=video-surveillance-solution" style="color: var(--secondary-color); text-decoration: none; font-weight: 700; font-size: 13px; text-transform: uppercase;">read more <i class="fas fa-arrow-right ms-1"></i></a>
                </div>

                <!-- 2. Corporate Solution -->
                <div class="card service-detail" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.2">
                    <i class="fas fa-building text-secondary-color fs-24 mb-4"></i>
                    <h3 style="font-size: 20px; font-weight: 700;">Corporate Solutions</h3>
                    <p style="font-size: 14px; margin-bottom: 20px;">Comprehensive biometric and IP CCTV surveillance matrix solutions for offices and teams.</p>
                    <a href="<?php echo $base_url; ?>service-details.php?type=video-surveillance-solution" style="color: var(--secondary-color); text-decoration: none; font-weight: 700; font-size: 13px; text-transform: uppercase;">read more <i class="fas fa-arrow-right ms-1"></i></a>
                </div>

                <!-- 3. Large Scale Solution -->
                <div class="card service-detail" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.2">
                    <i class="fas fa-industry text-secondary-color fs-24 mb-4"></i>
                    <h3 style="font-size: 20px; font-weight: 700;">Large Scale Solutions</h3>
                    <p style="font-size: 14px; margin-bottom: 20px;">Thermal AI imaging and complex NVR storage setups for factories and campuses.</p>
                    <a href="<?php echo $base_url; ?>service-details.php?type=video-surveillance-solution" style="color: var(--secondary-color); text-decoration: none; font-weight: 700; font-size: 13px; text-transform: uppercase;">read more <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>