document.addEventListener('DOMContentLoaded', () => {
    
    const paavitImageSizes = {
        'media/individual-images/Paavit-floor-cleaner.png': { w: 856, h: 972 },
        'media/individual-images/Paavit-Detergent-Liquid.png': { w: 866, h: 966 },
        'media/individual-images/Paavit-Dish-Wash-Liquid.png': { w: 866, h: 968 },
        'media/individual-images/Paavit-Floor-Cleaner-Liquid-5Ltr.png': { w: 722, h: 710 },
        'media/individual-images/Paavit-Handwash--orangeLiquid-5Ltr.png': { w: 856, h: 844 },
        'media/individual-images/Paavit-Handwash-ice-blast-Liquid-5Ltr.png': { w: 852, h: 848 },
        'media/individual-images/Paavit-Handwash-strawberry-Liquid-5Ltr.png': { w: 730, h: 710 },
        'media/individual-images/Paavit-Ice-Blast-Handwash-Liquid.png': { w: 860, h: 972 },
        'media/individual-images/Paavit-Orange-Handwash-Liquid.png': { w: 864, h: 970 },
        'media/individual-images/Paavit-Strawberry-Handwash-Liquid.png': { w: 864, h: 968 },
        'media/individual-images/Paavit-Toilet-Cleaner-Liquid.png': { w: 868, h: 970 },
        'media/individual-images/Paavit-Toilet-cleaner-Liquid-5Ltr.png': { w: 856, h: 838 },
        'media/individual-images/Paavit-dishwash-Liquid-5Ltr.png': { w: 858, h: 842 },
        'media/individual-images/Paavit-washing-detergent-Liquid-5Ltr.png': { w: 828, h: 844 }
    };

    // --- 1. Product Database & Dynamic Injection ---
    const paavitProducts = {
        'floor-cleaner': {
            name: 'Paavit White Floor Cleaner',
            image: 'media/individual-images/Paavit-floor-cleaner.png',
            image5L: 'media/individual-images/Paavit-Floor-Cleaner-Liquid-5Ltr.png',
            shortDesc: 'A Quality Product for advanced stain removal and hygiene.',
            description: 'Paavit White Floor Cleaner ensures your home stays sparkling clean and germ-free. Formulated with a fresh fragrance, it cuts through tough stains and grime on all hard surfaces, leaving a brilliant shine without any sticky residue.',
            features: ['99.9% Germ Kill Protection', 'Tough on stubborn stains', 'Safe for all hard floors', 'Long-lasting freshness'],
            category: 'Home Care'
        },
        'detergent': {
            name: 'Paavit Detergent Liquid',
            image: 'media/individual-images/Paavit-Detergent-Liquid.png',
            image5L: 'media/individual-images/Paavit-washing-detergent-Liquid-5Ltr.png',
            shortDesc: 'Gentle on fabrics, tough on stubborn stains.',
            description: 'Experience a new level of clean with Paavit Detergent Liquid. Designed for both top-load and front-load washing machines, this powerful liquid dissolves quickly, removing deep-seated dirt while preserving the color and softness of your clothes.',
            features: ['Color-protect technology', 'No powder residue left behind', 'Suitable for all washing machines', 'Fresh floral scent'],
            category: 'Laundry Care'
        },
        'toilet-cleaner': {
            name: 'Paavit Toilet Cleaner (10x Power)',
            image: 'media/individual-images/Paavit-Toilet-Cleaner-Liquid.png',
            image5L: 'media/individual-images/Paavit-Toilet-cleaner-Liquid-5Ltr.png',
            shortDesc: 'Thick gel formula for ultimate bathroom hygiene.',
            description: 'Paavit Toilet Cleaner features a thick liquid formula that clings to the bowl, providing 10x more stain removal power. It eliminates odors and kills 99.9% of germs, ensuring a hygienic and fresh bathroom environment.',
            features: ['10x Stain Removal Power', 'Kills 99.9% of germs and bacteria', 'Thick clinging gel formula', 'Eliminates bad odors instantly'],
            category: 'Bathroom Care'
        },
        'dish-wash': {
            name: 'Paavit Dish Wash Liquid',
            image: 'media/individual-images/Paavit-Dish-Wash-Liquid.png',
            image5L: 'media/individual-images/Paavit-dishwash-Liquid-5Ltr.png',
            shortDesc: 'Cuts through tough grease instantly.',
            description: 'Paavit Dish Wash Liquid is infused with active grease-cutting technology. A single drop creates a rich lather that effortlessly removes burnt-on food and tough oil stains, leaving your utensils sparkling clean and smelling fresh.',
            features: ['Instant grease release formulation', 'Gentle and safe on hands', 'Leaves a sparkling clean shine', 'Refreshing lemon zest scent'],
            category: 'Kitchen Care'
        },
        'ice-blast': {
            name: 'Paavit Soft Wash - Ice Blast',
            image: 'media/individual-images/Paavit-Ice-Blast-Handwash-Liquid.png',
            image5L: 'media/individual-images/Paavit-Handwash-ice-blast-Liquid-5Ltr.png',
            shortDesc: 'Cooling handwash for absolute freshness.',
            description: 'Refresh and protect your hands with Paavit Soft Wash Ice Blast. This invigorating handwash provides a cooling sensation while effectively washing away dirt and germs. Enriched with moisturizers to prevent dryness.',
            features: ['Invigorating cooling sensation', 'Antibacterial germ protection', 'pH balanced for sensitive skin', 'Moisturizing formula'],
            category: 'Personal Care'
        },
        'orange': {
            name: 'Paavit Soft Wash - Orange',
            image: 'media/individual-images/Paavit-Orange-Handwash-Liquid.png',
            image5L: 'media/individual-images/Paavit-Handwash--orangeLiquid-5Ltr.png',
            shortDesc: 'Citrus-infused germ protection.',
            description: 'Infused with the uplifting scent of fresh oranges, Paavit Soft Wash Orange keeps your hands clean, soft, and beautifully fragranced. Its rich lather washes away impurities while maintaining your skin\'s natural moisture.',
            features: ['Citrus burst fragrance', 'Rich, creamy lather', 'Tough on germs and dirt', 'Gentle on hands and skin'],
            category: 'Personal Care'
        },
        'strawberry': {
            name: 'Paavit Soft Wash - Strawberry',
            image: 'media/individual-images/Paavit-Strawberry-Handwash-Liquid.png',
            image5L: 'media/individual-images/Paavit-Handwash-strawberry-Liquid-5Ltr.png',
            shortDesc: 'Sweet and gentle cleansing for soft hands.',
            description: 'Delight your senses with Paavit Soft Wash Strawberry. Formulated for everyday use, this gentle handwash cleanses effectively while leaving behind a sweet, lingering strawberry fragrance. Perfect for the whole family.',
            features: ['Sweet strawberry scent', 'Hydrating formula for dry hands', 'Effective daily germ removal', 'Dermatologically tested'],
            category: 'Personal Care'
        }
    };

    // Populate Product Details Page if elements exist
    const urlParams = new URLSearchParams(window.location.search);
    const productId = urlParams.get('id');
    
    if (productId && paavitProducts[productId] && document.getElementById('pd-name')) {
        const product = paavitProducts[productId];
        
        document.title = `${product.name} | Paavit Products`;
        document.getElementById('pd-name').textContent = product.name;
        document.getElementById('pd-category').textContent = product.category;
        document.getElementById('pd-shortDesc').textContent = product.shortDesc;
        document.getElementById('pd-description').textContent = product.description;

        const carouselViewport = document.getElementById('pd-carousel-viewport');
        const packOptions = document.querySelectorAll('.pd-pack-option');
        if (carouselViewport && product.image5L) {
            const variants = [
                { pack: '1L', label: '1 Litre Bottle', image: product.image },
                { pack: '5L', label: '5 Litre Can', image: product.image5L }
            ];

            carouselViewport.innerHTML = variants.map((variant, index) => {
                const size = paavitImageSizes[variant.image] || { w: 856, h: 972 };
                return `
                <div class="pd-carousel-slide${index === 0 ? ' active' : ''}" data-pack="${variant.pack}">
                    <span class="pd-carousel-badge">${variant.label}</span>
                    <img src="${variant.image}" alt="${product.name} ${variant.label}" class="product-detail-img" width="${size.w}" height="${size.h}"${index === 0 ? ' loading="eager" fetchpriority="high"' : ' loading="lazy"'}>
                </div>
            `;
            }).join('');

            const slides = carouselViewport.querySelectorAll('.pd-carousel-slide');
            const goToPack = (pack) => {
                slides.forEach(slide => slide.classList.toggle('active', slide.dataset.pack === pack));
                packOptions.forEach(option => {
                    const isActive = option.dataset.pack === pack;
                    option.classList.toggle('active', isActive);
                    option.setAttribute('aria-selected', isActive);
                });
                document.querySelectorAll('.pd-carousel-dot').forEach(dot => {
                    const isActive = dot.dataset.pack === pack;
                    dot.classList.toggle('active', isActive);
                    dot.setAttribute('aria-selected', isActive);
                });
            };

            packOptions.forEach(option => {
                option.addEventListener('click', () => goToPack(option.dataset.pack));
            });

            document.querySelectorAll('.pd-carousel-dot').forEach(dot => {
                dot.addEventListener('click', () => goToPack(dot.dataset.pack));
            });
        }
        
        const featuresList = document.getElementById('pd-features');
        featuresList.innerHTML = '';
        product.features.forEach(feature => {
            const li = document.createElement('li');
            li.innerHTML = `<i class="fas fa-check"></i> ${feature}`;
            featuresList.appendChild(li);
        });
    }

    // --- 2. Progress Bar & Navbar Scroll Effect ---
    const header = document.querySelector('header');
    const progressBar = document.getElementById('progress-bar');
    const backToTopBtn = document.getElementById('back-to-top');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) header.classList.add('scrolled');
        else header.classList.remove('scrolled');

        const scrollTotal = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        if(progressBar) progressBar.style.width = `${(window.scrollY / scrollTotal) * 100}%`;

        if(backToTopBtn) {
            if (window.scrollY > 500) backToTopBtn.classList.add('show');
            else backToTopBtn.classList.remove('show');
        }
    });

    if(backToTopBtn) backToTopBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

    // --- 3. Dark/Light Mode Toggle ---
    const themeToggle = document.querySelector('.theme-toggle');
    const htmlEl = document.documentElement;
    const icon = themeToggle ? themeToggle.querySelector('i') : null;

    if (localStorage.getItem('paavit-theme') === 'dark') {
        htmlEl.setAttribute('data-theme', 'dark');
        if(icon) icon.classList.replace('fa-moon', 'fa-sun');
    }

    if(themeToggle) {
        themeToggle.addEventListener('click', () => {
            if (htmlEl.getAttribute('data-theme') === 'dark') {
                htmlEl.removeAttribute('data-theme');
                localStorage.setItem('paavit-theme', 'light');
                icon.classList.replace('fa-sun', 'fa-moon');
            } else {
                htmlEl.setAttribute('data-theme', 'dark');
                localStorage.setItem('paavit-theme', 'dark');
                icon.classList.replace('fa-moon', 'fa-sun');
            }
        });
    }

    // --- 4. Scroll Reveal Animation ---
    const reveals = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15, rootMargin: "0px 0px -50px 0px" });
    reveals.forEach(reveal => revealObserver.observe(reveal));

    // --- 5. Animated Counters ---
    const counters = document.querySelectorAll('.counter');
    let countersAnimated = false;
    const counterObserver = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting && !countersAnimated) {
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const inc = target / 50;
                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 40);
                    } else counter.innerText = target;
                };
                updateCount();
            });
            countersAnimated = true;
        }
    }, { threshold: 0.5 });
    const statsSection = document.querySelector('.stats');
    if(statsSection) counterObserver.observe(statsSection);

    // --- 6. FAQ Accordion ---
    const accordionItems = document.querySelectorAll('.accordion-item');
    accordionItems.forEach(item => {
        const header = item.querySelector('.accordion-header');
        header.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            accordionItems.forEach(el => {
                el.classList.remove('active');
                el.querySelector('.accordion-body').style.maxHeight = null;
            });
            if (!isActive) {
                item.classList.add('active');
                const body = item.querySelector('.accordion-body');
                body.style.maxHeight = body.scrollHeight + "px";
            }
        });
    });

    // --- 8. Hero Product Carousel ---
    const heroCarousel = document.querySelector('.hero-carousel');
    if (heroCarousel) {
        const slides = heroCarousel.querySelectorAll('.hero-carousel-slide');
        const dots = heroCarousel.querySelectorAll('.hero-carousel-dot');
        let currentSlide = 0;
        let slideInterval;

        const goToSlide = (index) => {
            currentSlide = (index + slides.length) % slides.length;
            slides.forEach((slide, i) => slide.classList.toggle('active', i === currentSlide));
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === currentSlide);
                dot.setAttribute('aria-selected', i === currentSlide);
            });
        };

        const startAutoplay = () => {
            slideInterval = setInterval(() => goToSlide(currentSlide + 1), 4000);
        };

        const resetAutoplay = () => {
            clearInterval(slideInterval);
            startAutoplay();
        };

        dots.forEach(dot => dot.addEventListener('click', () => {
            goToSlide(Number(dot.dataset.index));
            resetAutoplay();
        }));

        startAutoplay();
    }

    // --- 9. Collection Showcase Slider ---
    const showcaseSlider = document.querySelector('.showcase-slider');
    if (showcaseSlider) {
        const slides = showcaseSlider.querySelectorAll('.showcase-slide');
        const dots = showcaseSlider.querySelectorAll('.showcase-dot');
        const prevBtn = showcaseSlider.querySelector('.showcase-prev');
        const nextBtn = showcaseSlider.querySelector('.showcase-next');
        let currentSlide = 0;
        let slideInterval;

        const goToSlide = (index) => {
            currentSlide = (index + slides.length) % slides.length;
            slides.forEach((slide, i) => slide.classList.toggle('active', i === currentSlide));
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === currentSlide);
                dot.setAttribute('aria-selected', i === currentSlide);
            });
        };

        const startAutoplay = () => {
            slideInterval = setInterval(() => goToSlide(currentSlide + 1), 5000);
        };

        const resetAutoplay = () => {
            clearInterval(slideInterval);
            startAutoplay();
        };

        if (prevBtn) prevBtn.addEventListener('click', () => { goToSlide(currentSlide - 1); resetAutoplay(); });
        if (nextBtn) nextBtn.addEventListener('click', () => { goToSlide(currentSlide + 1); resetAutoplay(); });
        dots.forEach(dot => dot.addEventListener('click', () => {
            goToSlide(Number(dot.dataset.index));
            resetAutoplay();
        }));

        startAutoplay();
    }

    // --- 10. Contact Form Captcha ---
    const contactForm = document.querySelector('.contact-card form');
    if (contactForm) {
        const captchaQuestion = document.getElementById('captcha-question');
        const captchaAnswer = document.getElementById('captcha-answer');
        const captchaError = document.getElementById('captcha-error');
        const captchaRefresh = document.getElementById('captcha-refresh');
        let captchaExpected = 0;

        const generateCaptcha = () => {
            const a = Math.floor(Math.random() * 10) + 1;
            const b = Math.floor(Math.random() * 10) + 1;
            captchaExpected = a + b;
            if (captchaQuestion) captchaQuestion.textContent = `What is ${a} + ${b}?`;
            if (captchaAnswer) captchaAnswer.value = '';
            if (captchaError) captchaError.hidden = true;
        };

        generateCaptcha();
        if (captchaRefresh) captchaRefresh.addEventListener('click', generateCaptcha);

        contactForm.addEventListener('submit', (e) => {
            if (Number(captchaAnswer.value.trim()) !== captchaExpected) {
                e.preventDefault();
                if (captchaError) captchaError.hidden = false;
                generateCaptcha();
                captchaAnswer.focus();
            }
        });
    }

    // --- 11. Contact Form Success Message ---
    if (new URLSearchParams(window.location.search).get('sent') === 'true') {
        const successEl = document.getElementById('form-success');
        if (successEl) {
            const cleanUrl = window.location.pathname + window.location.hash;
            window.history.replaceState({}, '', cleanUrl);

            successEl.hidden = false;
            requestAnimationFrame(() => successEl.classList.add('form-success--visible'));
            successEl.scrollIntoView({ behavior: 'smooth', block: 'center' });

            const hideSuccess = () => {
                successEl.classList.remove('form-success--visible');
                successEl.classList.add('form-success--hiding');
                const finishHide = () => {
                    successEl.hidden = true;
                    successEl.classList.remove('form-success--hiding');
                };
                successEl.addEventListener('transitionend', finishHide, { once: true });
                setTimeout(finishHide, 500);
            };

            setTimeout(hideSuccess, 8000);
        }
    }
});
