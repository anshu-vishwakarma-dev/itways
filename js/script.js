window.addEventListener('scroll', function () {
    const header = document.getElementById('header');
    if (window.scrollY > 100) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }

    // Back to top button visibility
    const backToTopBtn = document.getElementById('back-to-top');
    if (backToTopBtn) {
        if (window.scrollY > 400) {
            backToTopBtn.style.display = 'flex';
        } else {
            backToTopBtn.style.display = 'none';
        }
    }
});

// Back to Top Click Handler
document.addEventListener('DOMContentLoaded', () => {
    const backToTopBtn = document.getElementById('back-to-top');
    if (backToTopBtn) {
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;

        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            e.preventDefault();
            const headerHeight = document.getElementById('header').offsetHeight;
            window.scrollTo({
                top: targetElement.offsetTop - headerHeight,
                behavior: 'smooth'
            });
            // Close mobile menu if open
            document.querySelector('.nav-links').classList.remove('active');
        }
    });
});

// Mobile menu toggle
const mobileToggle = document.querySelector('.mobile-toggle');
const navLinks = document.querySelector('.nav-links');

if (mobileToggle) {
    mobileToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        const icon = mobileToggle.querySelector('i');
        if (navLinks.classList.contains('active')) {
            icon.classList.replace('fa-bars', 'fa-times');
        } else {
            icon.classList.replace('fa-times', 'fa-bars');
        }
    });
}

// Mobile Dropdown Toggle
const dropdownToggles = document.querySelectorAll('.has-dropdown > a > i.fa-caret-down');

dropdownToggles.forEach(toggle => {
    toggle.addEventListener('click', (e) => {
        if (window.innerWidth <= 991) {
            e.preventDefault();
            e.stopPropagation();
            const parentLi = toggle.closest('.has-dropdown');
            parentLi.classList.toggle('mobile-open');
        }
    });
});

// Dark Mode Toggle
const darkModeToggle = document.getElementById('dark-mode-toggle');
const body = document.body;

// Check for saved dark mode preference
if (localStorage.getItem('dark-mode') === 'enabled') {
    body.classList.add('dark-mode');
    if (darkModeToggle) darkModeToggle.querySelector('i').classList.replace('fa-moon', 'fa-sun');
}

if (darkModeToggle) {
    darkModeToggle.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
        const icon = darkModeToggle.querySelector('i');

        if (body.classList.contains('dark-mode')) {
            localStorage.setItem('dark-mode', 'enabled');
            icon.classList.replace('fa-moon', 'fa-sun');
        } else {
            localStorage.setItem('dark-mode', 'disabled');
            icon.classList.replace('fa-sun', 'fa-moon');
        }
    });
}

// Chat Box Toggle
const chatToggle = document.getElementById('chat-box-toggle');
const chatBox = document.getElementById('chat-box');
const closeChat = document.getElementById('close-chat');

if (chatToggle && chatBox) {
    chatToggle.addEventListener('click', () => {
        chatBox.classList.toggle('active');
    });
}

if (closeChat && chatBox) {
    closeChat.addEventListener('click', () => {
        chatBox.classList.remove('active');
    });
}

document.addEventListener('DOMContentLoaded', () => {
    // Initialize Hero Slider
    if (document.querySelector('.swiper-container')) {
        const heroSwiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: { delay: 5000 },
            effect: 'fade',
            fadeEffect: { crossFade: true }
        });
    }

    // Initialize Tech Stack Slider
    if (document.querySelector('.tech-swiper')) {
        const techSwiper = new Swiper('.tech-swiper', {
            slidesPerView: 2,
            spaceBetween: 30,
            loop: true,
            autoplay: { delay: 2000, disableOnInteraction: false },
            breakpoints: {
                640: { slidesPerView: 3 },
                768: { slidesPerView: 4 },
                1024: { slidesPerView: 6 },
            }
        });
    }

    // Initialize Product Screenshots Slider
    if (document.querySelector('.product-screenshots-swiper')) {
        const productSwiper = new Swiper('.product-screenshots-swiper', {
            loop: true,
            autoplay: { delay: 3000, disableOnInteraction: false },
            pagination: {
                el: '.product-screenshots-swiper .swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.product-screenshots-swiper .swiper-button-next',
                prevEl: '.product-screenshots-swiper .swiper-button-prev',
            },
            effect: 'slide',
            grabCursor: true,
            observer: true,
            observeParents: true
        });
    }
});

// Progress bar and other global scripts...

// Reading Progress Bar
const progressBar = document.getElementById("reading-progress-bar");

if (progressBar) {
    window.addEventListener("scroll", () => {
        let scrollDistance = document.documentElement.scrollTop;
        let totalScrollableHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;

        let scrollPercentage = (scrollDistance / totalScrollableHeight) * 100;
        progressBar.style.width = scrollPercentage + "%";
    });
}

// Stats Counter Animation
const counters = document.querySelectorAll('.counter');
const startCounters = (entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const counter = entry.target;
            const target = +counter.getAttribute('data-target');
            // speed of animation
            const speed = target > 100 ? 50 : 20;

            const updateCount = () => {
                const count = +counter.innerText;
                const inc = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 30);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
            observer.unobserve(counter);
        }
    });
};

const counterObserver = new IntersectionObserver(startCounters, {
    root: null,
    threshold: 0.5
});

counters.forEach(counter => {
    counterObserver.observe(counter);
});

// --- Global Interactivity Scripts ---
document.addEventListener('DOMContentLoaded', () => {

    // 1. Custom Interactive Cursor (Removed)

    // 2. Global IntersectionObserver (Scroll Reveal)
    const revealElements = document.querySelectorAll('.card, .feat-item, .industry-item, .service-card, h2, h3, .idx-hero-cta');
    revealElements.forEach(el => {
        // Prevent adding reveal class if element already has AOS to prevent conflicts
        if (!el.hasAttribute('data-aos')) {
            el.classList.add('reveal-up');
        }
    });

    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target); // Reveal only once
            }
        });
    }, { root: null, threshold: 0.15, rootMargin: "0px 0px -50px 0px" });

    document.querySelectorAll('.reveal-up').forEach(el => revealObserver.observe(el));

    // 3. Button Ripple Effect
    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(btn => {
        btn.addEventListener('click', function (e) {
            let rect = e.target.getBoundingClientRect();
            let x = e.clientX - rect.left;
            let y = e.clientY - rect.top;

            let ripple = document.createElement('span');
            ripple.style.left = `${x}px`;
            ripple.style.top = `${y}px`;

            // Calc max dimension to cover entire button
            let size = Math.max(rect.width, rect.height);
            ripple.style.width = ripple.style.height = `${size}px`;
            ripple.style.transform = `translate(-50%, -50%) scale(0)`;
            ripple.classList.add('ripple');

            this.appendChild(ripple);
            setTimeout(() => { ripple.remove(); }, 600);
        });
    });

    // 4. Page Loader
    const pageLoader = document.getElementById('page-loader');
    if (pageLoader) {
        window.addEventListener('load', () => {
            setTimeout(() => {
                pageLoader.classList.add('fade-out');
            }, 300); // Slight delay for smooth visual transition
        });
    }

    // --- 5. AJAX Form Submission Handler ---
    const allForms = document.querySelectorAll('form.idx-query-form, form.contact-form, form.quote-form, form.callback-form');

    allForms.forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;

            // Set loading state
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Sending...';

            const formData = new FormData(form);

            fetch(form.action || 'includes/form-handler.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        // Show success message
                        showToast(data.message);
                        form.reset();
                    } else {
                        // Show error message
                        showToast(data.message, 'error');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showToast('Something went wrong. Please try again later.', 'error');
                })
                .finally(() => {
                    // Restore button state
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                });
        });
    });

    // --- Modern Interaction Core Functions ---

    // 6. Function to show modern toast notifications
    function showToast(message, type = 'success') {
        let container = document.querySelector('.toast-container');
        if (!container) {
            container = document.createElement('div');
            container.className = 'toast-container';
            document.body.appendChild(container);
        }

        const toast = document.createElement('div');
        toast.className = `toast-msg ${type === 'error' ? 'error' : ''}`;
        toast.innerHTML = `<i class="fas ${type === 'error' ? 'fa-exclamation-circle' : 'fa-check-circle'}"></i> <span>${message}</span>`;

        container.appendChild(toast);

        // Trigger animation
        setTimeout(() => toast.classList.add('active'), 10);

        // Auto-remove
        setTimeout(() => {
            toast.classList.remove('active');
            setTimeout(() => toast.remove(), 400);
        }, 4000);
    }

    // 7. Simulated AI Chatbot Logic
    const chatBoxBody = document.querySelector('.chat-box-body');
    const chatInput = document.querySelector('.chat-box-footer input');
    const chatSendBtn = document.querySelector('.chat-box-footer button');

    function addChatMessage(msg, sender = 'bot') {
        const msgDiv = document.createElement('div');
        msgDiv.className = `chat-msg ${sender === 'bot' ? 'bot-msg' : 'user-msg'}`;
        const name = sender === 'bot' ? 'ITWAYS AI' : 'You';
        msgDiv.innerHTML = `<span class="msg-sender">${name}</span><div class="msg-content">${msg}</div>`;
        chatBoxBody.appendChild(msgDiv);
        chatBoxBody.scrollTop = chatBoxBody.scrollHeight;
    }

    function handleChatSubmit() {
        const message = chatInput.value.trim();
        if (!message) return;

        addChatMessage(message, 'user');
        chatInput.value = '';

        // Show typing indicator
        const typing = document.createElement('div');
        typing.className = 'typing-indicator';
        typing.innerText = 'ITWAYS AI is typing...';
        chatBoxBody.appendChild(typing);
        chatBoxBody.scrollTop = chatBoxBody.scrollHeight;

        setTimeout(() => {
            typing.remove();
            let response = "Thank you for reaching out! A human expert will get back to you shortly. Can I help you with anything else?";

            const lowerMsg = message.toLowerCase();
            if (lowerMsg.includes('hello') || lowerMsg.includes('hi')) {
                response = "Hello! Looking for software solutions or SEO services? I'm here to help!";
            } else if (lowerMsg.includes('price') || lowerMsg.includes('cost')) {
                response = "Our pricing depends on your specific needs. Would you like a free quote?";
            } else if (lowerMsg.includes('service')) {
                response = "We offer Web Development, SEO, App Development, and IT Infrastructure. Which one interests you?";
            }

            addChatMessage(response, 'bot');
        }, 1500);
    }

    if (chatSendBtn && chatInput) {
        chatSendBtn.addEventListener('click', handleChatSubmit);
        chatInput.addEventListener('keypress', (e) => { if (e.key === 'Enter') handleChatSubmit(); });
    }


    window.showToast = showToast; // Export to global scope
});

// =============================================
// Hero Interactive Slider
// =============================================
(function () {
    if (!document.querySelector('.hero-main-swiper')) return;

    var heroSwiper = new Swiper('.hero-main-swiper', {
        loop: true,
        speed: 900,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '#heroSwiperNext',
            prevEl: '#heroSwiperPrev',
        },
        keyboard: { enabled: true, onlyInViewport: true },
        grabCursor: true,
        on: {
            realIndexChange: function () {
                var idx = this.realIndex;
                document.querySelectorAll('#heroSlideTabs .hero-tab').forEach(function (tab, i) {
                    tab.classList.toggle('active', i === idx);
                });
            },
            autoplayTimeLeft: function (s, time, progress) {
                var bar = document.getElementById('heroProgressBar');
                if (bar) bar.style.width = ((1 - progress) * 100) + '%';
            }
        }
    });

    // Tab click → jump to that slide
    document.querySelectorAll('#heroSlideTabs .hero-tab').forEach(function (tab) {
        tab.addEventListener('click', function () {
            heroSwiper.slideToLoop(parseInt(this.dataset.index));
        });
    });

    // Pause on hover, resume on leave
    var swiperEl = document.querySelector('.hero-main-swiper');
    if (swiperEl) {
        swiperEl.addEventListener('mouseenter', function () { heroSwiper.autoplay.stop(); });
        swiperEl.addEventListener('mouseleave', function () { heroSwiper.autoplay.start(); });
    }
})();


// =============================================
// Hero Canvas — Interactive Particle Network
// =============================================
(function () {
    var canvas = document.getElementById('heroCanvas');
    if (!canvas) return;

    var ctx = canvas.getContext('2d');
    var hero = canvas.closest('section') || document.body;
    var raf;

    var mouse = { x: -9999, y: -9999 };
    var particles = [];

    var PARTICLE_COUNT = 85;
    var CONNECT_DIST = 140;
    var MOUSE_RADIUS = 120;

    /* ── Resize canvas to match section ── */
    function resize() {
        canvas.width = hero.offsetWidth;
        canvas.height = hero.offsetHeight;
    }

    /* ── Particle constructor ── */
    function Particle() {
        this.reset(true);
    }

    Particle.prototype.reset = function (init) {
        this.x = Math.random() * canvas.width;
        this.y = init ? Math.random() * canvas.height : -5;
        this.vx = (Math.random() - 0.5) * 0.55;
        this.vy = (Math.random() - 0.5) * 0.55;
        this.r = Math.random() * 1.8 + 0.6;
        this.a = Math.random() * 0.45 + 0.12;
        this.cyan = Math.random() > 0.62;  // ~38 % cyan, rest white
    };

    Particle.prototype.update = function () {
        /* Mouse repulsion */
        var dx = this.x - mouse.x;
        var dy = this.y - mouse.y;
        var dist = Math.sqrt(dx * dx + dy * dy);
        if (dist < MOUSE_RADIUS && dist > 0) {
            var force = (MOUSE_RADIUS - dist) / MOUSE_RADIUS;
            this.vx += (dx / dist) * force * 1.0;
            this.vy += (dy / dist) * force * 1.0;
        }

        /* Gentle velocity damping */
        this.vx *= 0.97;
        this.vy *= 0.97;

        /* Speed cap */
        var spd = Math.sqrt(this.vx * this.vx + this.vy * this.vy);
        if (spd > 2.8) { this.vx = (this.vx / spd) * 2.8; this.vy = (this.vy / spd) * 2.8; }

        this.x += this.vx;
        this.y += this.vy;

        /* Wrap at edges */
        if (this.x < -5) this.x = canvas.width + 5;
        if (this.x > canvas.width + 5) this.x = -5;
        if (this.y < -5) this.y = canvas.height + 5;
        if (this.y > canvas.height + 5) this.y = -5;
    };

    Particle.prototype.draw = function () {
        var dark = document.body.classList.contains('dark-mode');
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
        if (dark) {
            ctx.fillStyle = this.cyan ? 'rgba(56,189,248,' + this.a + ')' : 'rgba(255,255,255,' + this.a + ')';
        } else {
            ctx.fillStyle = this.cyan ? 'rgba(14,165,233,' + this.a + ')' : 'rgba(15,23,42,' + this.a + ')';
        }
        ctx.fill();
    };

    /* ── Draw connection lines ── */
    function drawLines() {
        var n = particles.length;
        for (var i = 0; i < n; i++) {
            for (var j = i + 1; j < n; j++) {
                var dx = particles[i].x - particles[j].x;
                var dy = particles[i].y - particles[j].y;
                var dist = Math.sqrt(dx * dx + dy * dy);
                if (dist < CONNECT_DIST) {
                    var dark = document.body.classList.contains('dark-mode');
                    var alpha = (1 - dist / CONNECT_DIST) * 0.32;
                    ctx.beginPath();
                    ctx.moveTo(particles[i].x, particles[i].y);
                    ctx.lineTo(particles[j].x, particles[j].y);
                    ctx.strokeStyle = dark ? 'rgba(14,165,233,' + alpha + ')' : 'rgba(14,165,233,' + (alpha * 1.5) + ')';
                    ctx.lineWidth = 0.75;
                    ctx.stroke();
                }
            }
        }
    }

    /* ── Draw background gradient ── */
    function drawBg() {
        var dark = document.body.classList.contains('dark-mode');
        var g = ctx.createLinearGradient(0, 0, canvas.width, canvas.height);
        if (dark) {
            g.addColorStop(0, '#06122a');
            g.addColorStop(0.5, '#0b1d3d');
            g.addColorStop(1, '#06122a');
        } else {
            g.addColorStop(0, '#f8fafc');
            g.addColorStop(0.4, '#f1f5f9');
            g.addColorStop(1, '#f8fafc');
        }
        ctx.fillStyle = g;
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        /* Soft central glow */
        var cx = canvas.width / 2, cy = canvas.height / 2;
        var glow = ctx.createRadialGradient(cx, cy, 0, cx, cy, canvas.width * 0.55);
        glow.addColorStop(0, dark ? 'rgba(14,165,233,0.09)' : 'rgba(14,165,233,0.04)');
        glow.addColorStop(1, 'rgba(14,165,233,0)');
        ctx.fillStyle = glow;
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        /* Mouse spotlight */
        if (mouse.x > 0) {
            var spot = ctx.createRadialGradient(mouse.x, mouse.y, 0, mouse.x, mouse.y, MOUSE_RADIUS * 1.4);
            spot.addColorStop(0, dark ? 'rgba(56,189,248,0.07)' : 'rgba(14,165,233,0.05)');
            spot.addColorStop(1, 'rgba(56,189,248,0)');
            ctx.fillStyle = spot;
            ctx.fillRect(0, 0, canvas.width, canvas.height);
        }
    }

    /* ── Main animation loop ── */
    function animate() {
        drawBg();
        drawLines();
        particles.forEach(function (p) { p.update(); p.draw(); });
        raf = requestAnimationFrame(animate);
    }

    /* ── Init ── */
    function init() {
        resize();
        particles = [];
        for (var i = 0; i < PARTICLE_COUNT; i++) particles.push(new Particle());
        if (raf) cancelAnimationFrame(raf);
        animate();
    }

    /* ── Mouse / touch tracking (on section, not canvas) ── */
    hero.addEventListener('mousemove', function (e) {
        var r = hero.getBoundingClientRect();
        mouse.x = e.clientX - r.left;
        mouse.y = e.clientY - r.top;
    });
    hero.addEventListener('mouseleave', function () { mouse.x = -9999; mouse.y = -9999; });
    hero.addEventListener('touchmove', function (e) {
        var r = hero.getBoundingClientRect();
        mouse.x = e.touches[0].clientX - r.left;
        mouse.y = e.touches[0].clientY - r.top;
    }, { passive: true });
    hero.addEventListener('touchend', function () { mouse.x = -9999; mouse.y = -9999; });

    /* ── Resize handler ── */
    window.addEventListener('resize', function () {
        resize();
        particles.forEach(function (p) {
            if (p.x > canvas.width) p.x = Math.random() * canvas.width;
            if (p.y > canvas.height) p.y = Math.random() * canvas.height;
        });
    });

    init();
})();
