<?php include 'includes/header.php'; ?>

<section class="corporate-sub-hero bg-grid-premium">
    <canvas id="heroCanvas" class="hero-canvas"></canvas>
    <div class="container" style="position: relative; z-index: 5;">
        <div class="corporate-badge" data-aos="fade-up">
            <i class="fas fa-box-open"></i> Product Portfolio
        </div>
        <h1 data-aos="fade-up" data-aos-delay="100">Smart Solutions for <span style="color: var(--secondary-color);">Digital Excellence</span></h1>
        <p data-aos="fade-up" data-aos-delay="200">Empower your business with our suite of premium CRM and Enterprise solutions tailored for growth and precision.</p>
        <div class="d-flex justify-content-center mt-4" data-aos="fade-up" data-aos-delay="300">
            <a href="#products-discovery" class="btn btn-primary px-40">Explore Our Products <i class="fas fa-chevron-down ms-2"></i></a>
        </div>
    </div>
</section>

<section class="section bg-light-bg" id="products-discovery">
    <div class="container">
        <!-- Filter Tabs -->
        <div class="product-filter-container" data-aos="fade-up">
            <button class="filter-btn active" data-filter="all">All Solutions</button>
            <button class="filter-btn" data-filter="real-estate">Real Estate CRM</button>
            <button class="filter-btn" data-filter="enterprise">Enterprise ERP</button>
            <button class="filter-btn" data-filter="industry">Industry Specific</button>
        </div>

        <div class="products-grid" id="products-grid">
            <!-- Real Estate CRM Pro -->
            <div class="product-item" data-category="real-estate" data-aos="fade-up">
                <div class="glow-card-wrapper" data-tilt data-tilt-max="5" data-tilt-glare="true" data-tilt-max-glare="0.1">
                    <div class="glow-card-bg"></div>
                    <div class="glow-card-content">
                        <div class="product-img-container">
                            <img src="<?php echo $base_url; ?>assets/image.png" alt="Real Estate CRM Pro" loading="lazy">
                        </div>
                        <h3 class="mb-2">Real Estate CRM Pro</h3>
                        <p class="paragraph fs-14 mb-3">Complete lead management & property tracking for large scale developers.</p>
                        <div class="feature-chips">
                            <span class="chip">Lead Tracking</span>
                            <span class="chip">Inventory</span>
                            <span class="chip">Automation</span>
                        </div>
                        <div class="product-card-actions">
                            <a href="<?php echo $base_url; ?>product-details.php?type=real-estate-crm" class="card-btn card-btn-primary">Details</a>
                            <a href="<?php echo $base_url; ?>contact.php" class="card-btn card-btn-outline">Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Agent CRM -->
            <div class="product-item" data-category="real-estate" data-aos="fade-up" data-aos-delay="100">
                <div class="glow-card-wrapper" data-tilt data-tilt-max="5" data-tilt-glare="true" data-tilt-max-glare="0.1">
                    <div class="glow-card-bg"></div>
                    <div class="glow-card-content">
                        <div class="product-img-container">
                            <img src="<?php echo $base_url; ?>assets/agent.png" alt="Agent CRM" loading="lazy">
                        </div>
                        <h3 class="mb-2">Agent CRM Software</h3>
                        <p class="paragraph fs-14 mb-3">Save hours every week by automating follow-ups and property scheduling.</p>
                        <div class="feature-chips">
                            <span class="chip">Mobile Ready</span>
                            <span class="chip">SMS Alerts</span>
                            <span class="chip">Quick Follow-up</span>
                        </div>
                        <div class="product-card-actions">
                            <a href="<?php echo $base_url; ?>product-details.php?type=agent-crm" class="card-btn card-btn-primary">Details</a>
                            <a href="<?php echo $base_url; ?>contact.php" class="card-btn card-btn-outline">Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Developer CRM -->
            <div class="product-item" data-category="real-estate" data-aos="fade-up" data-aos-delay="200">
                <div class="glow-card-wrapper" data-tilt data-tilt-max="5" data-tilt-glare="true" data-tilt-max-glare="0.1">
                    <div class="glow-card-bg"></div>
                    <div class="glow-card-content">
                        <div class="product-img-container">
                            <img src="<?php echo $base_url; ?>assets/developer.png" alt="Developer CRM" loading="lazy">
                        </div>
                        <h3 class="mb-2">Developer CRM</h3>
                        <p class="paragraph fs-14 mb-3">Central dashboard for multiple projects, site visits, and inventory monitoring.</p>
                        <div class="feature-chips">
                            <span class="chip">Multi-Project</span>
                            <span class="chip">Analytics</span>
                            <span class="chip">Site Visits</span>
                        </div>
                        <div class="product-card-actions">
                            <a href="<?php echo $base_url; ?>product-details.php?type=developer-crm" class="card-btn card-btn-primary">Details</a>
                            <a href="<?php echo $base_url; ?>contact.php" class="card-btn card-btn-outline">Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Builder CRM -->
            <div class="product-item" data-category="real-estate" data-aos="fade-up">
                <div class="glow-card-wrapper" data-tilt data-tilt-max="5" data-tilt-glare="true" data-tilt-max-glare="0.1">
                    <div class="glow-card-bg"></div>
                    <div class="glow-card-content">
                        <div class="product-img-container">
                            <img src="<?php echo $base_url; ?>assets/builder.png" alt="Builder CRM" loading="lazy">
                        </div>
                        <h3 class="mb-2">Builder CRM</h3>
                        <p class="paragraph fs-14 mb-3">Construction to convenience. Control project execution and buyer interactions.</p>
                        <div class="feature-chips">
                            <span class="chip">Workflow</span>
                            <span class="chip">Billing</span>
                            <span class="chip">Compliance</span>
                        </div>
                        <div class="product-card-actions">
                            <a href="<?php echo $base_url; ?>product-details.php?type=builder-crm" class="card-btn card-btn-primary">Details</a>
                            <a href="<?php echo $base_url; ?>contact.php" class="card-btn card-btn-outline">Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Portal ERP -->
            <div class="product-item" data-category="enterprise" data-aos="fade-up" data-aos-delay="100">
                <div class="glow-card-wrapper" data-tilt data-tilt-max="5" data-tilt-glare="true" data-tilt-max-glare="0.1">
                    <div class="glow-card-bg"></div>
                    <div class="glow-card-content">
                        <div class="product-img-container">
                            <i class="fas fa-newspaper fa-5x text-secondary-color opacity-20"></i>
                        </div>
                        <h3 class="mb-2">News Portal Software</h3>
                        <p class="paragraph fs-14 mb-3">Modern CMS for high-traffic news portals with SEO optimization and ads integration.</p>
                        <div class="feature-chips">
                            <span class="chip">SEO Ready</span>
                            <span class="chip">Ads Manager</span>
                            <span class="chip">Real-time</span>
                        </div>
                        <div class="product-card-actions">
                            <a href="<?php echo $base_url; ?>contact.php" class="card-btn card-btn-primary">Enquire</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ERP Solutions -->
            <div class="product-item" data-category="enterprise" data-aos="fade-up" data-aos-delay="200">
                <div class="glow-card-wrapper" data-tilt data-tilt-max="5" data-tilt-glare="true" data-tilt-max-glare="0.1">
                    <div class="glow-card-bg"></div>
                    <div class="glow-card-content">
                        <div class="product-img-container">
                            <i class="fas fa-chart-line fa-5x text-secondary-color opacity-20"></i>
                        </div>
                        <h3 class="mb-2">Custom ERP Software</h3>
                        <p class="paragraph fs-14 mb-3">Enterprise Resource Planning software tailored to your unique business workflows.</p>
                        <div class="feature-chips">
                            <span class="chip">HRMS</span>
                            <span class="chip">Payroll</span>
                            <span class="chip">Accounting</span>
                        </div>
                        <div class="product-card-actions">
                            <a href="<?php echo $base_url; ?>contact.php" class="card-btn card-btn-primary">Consult Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Industry Specific: Restaurant -->
            <div class="product-item" data-category="industry" data-aos="fade-up">
                <div class="glow-card-wrapper" data-tilt data-tilt-max="5" data-tilt-glare="true" data-tilt-max-glare="0.1">
                    <div class="glow-card-bg"></div>
                    <div class="glow-card-content">
                        <div class="product-img-container">
                            <i class="fas fa-utensils fa-5x text-secondary-color opacity-20"></i>
                        </div>
                        <h3 class="mb-2">Restaurant POS</h3>
                        <p class="paragraph fs-14 mb-3">Manage orders, billing, inventory, and kitchen workflows from one screen.</p>
                        <div class="feature-chips">
                            <span class="chip">Billing</span>
                            <span class="chip">Inventory</span>
                            <span class="chip">KOT</span>
                        </div>
                        <div class="product-card-actions">
                            <a href="<?php echo $base_url; ?>contact.php" class="card-btn card-btn-primary">Book Demo</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Industry Specific: Education -->
            <div class="product-item" data-category="industry" data-aos="fade-up" data-aos-delay="100">
                <div class="glow-card-wrapper" data-tilt data-tilt-max="5" data-tilt-glare="true" data-tilt-max-glare="0.1">
                    <div class="glow-card-bg"></div>
                    <div class="glow-card-content">
                        <div class="product-img-container">
                            <i class="fas fa-school fa-5x text-secondary-color opacity-20"></i>
                        </div>
                        <h3 class="mb-2">Educational ERP</h3>
                        <p class="paragraph fs-14 mb-3">Complete campus management solution for schools, colleges and coaching centers.</p>
                        <div class="feature-chips">
                            <span class="chip">Students</span>
                            <span class="chip">Fees</span>
                            <span class="chip">Exams</span>
                        </div>
                        <div class="product-card-actions">
                            <a href="<?php echo $base_url; ?>contact.php" class="card-btn card-btn-primary">Book Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // 1. Mouse Tracking Hero Aura (Removed because we use canvas now)

        // 2. Product Filtering Logic
        const filterBtns = document.querySelectorAll('.filter-btn');
        const productItems = document.querySelectorAll('.product-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active button
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filterValue = btn.getAttribute('data-filter');

                productItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.classList.remove('hidden');
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 50);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.9)';
                        setTimeout(() => {
                            item.classList.add('hidden');
                        }, 400);
                    }
                });
            });
        });

        // 3. Cursor Glow Effect for Cards
        const cards = document.querySelectorAll('.glow-card-wrapper');

        cards.forEach(card => {
            card.addEventListener('mousemove', e => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                card.style.setProperty('--mouse-x', `${x}px`);
                card.style.setProperty('--mouse-y', `${y}px`);
            });
        });
    });
</script>

<?php include 'includes/footer.php'; ?>