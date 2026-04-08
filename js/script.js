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
        form.addEventListener('submit', function(e) {
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
                    alert(data.message); // Replace with a pretty toast if possible
                    form.reset();
                } else {
                    // Show error message
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Something went wrong. Please try again later.');
            })
            .finally(() => {
                // Restore button state
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            });
        });
    });
});
