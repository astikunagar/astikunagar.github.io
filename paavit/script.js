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

    // --- 7. Mobile Navigation Menu ---
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navLinks = document.querySelector('.nav-links');
    let mobileNavBackdrop = document.querySelector('.mobile-nav-backdrop');

    if (mobileMenuBtn && navLinks) {
        if (!mobileNavBackdrop) {
            mobileNavBackdrop = document.createElement('div');
            mobileNavBackdrop.className = 'mobile-nav-backdrop';
            document.body.appendChild(mobileNavBackdrop);
        }

        const menuIcon = mobileMenuBtn.querySelector('i');

        const setMobileMenuOpen = (open) => {
            header.classList.toggle('nav-open', open);
            mobileMenuBtn.setAttribute('aria-expanded', String(open));
            mobileNavBackdrop.classList.toggle('active', open);
            if (menuIcon) {
                menuIcon.classList.toggle('fa-bars', !open);
                menuIcon.classList.toggle('fa-times', open);
            }
            document.body.style.overflow = open ? 'hidden' : '';
        };

        mobileMenuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            setMobileMenuOpen(!header.classList.contains('nav-open'));
        });

        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => setMobileMenuOpen(false));
        });

        mobileNavBackdrop.addEventListener('click', () => setMobileMenuOpen(false));

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && header.classList.contains('nav-open')) {
                setMobileMenuOpen(false);
            }
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth > 768 && header.classList.contains('nav-open')) {
                setMobileMenuOpen(false);
            }
        });
    }

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

    // --- 11. Offers Page ---
    const offersGrid = document.getElementById('offers-grid');
    if (offersGrid) {
        const offerProducts = [
            { id: 'floor-cleaner', short: 'Floor Cleaner', group: 'home' },
            { id: 'detergent', short: 'Detergent', group: 'home' },
            { id: 'toilet-cleaner', short: 'Toilet Cleaner', group: 'home' },
            { id: 'dish-wash', short: 'Dish Wash', group: 'home' },
            { id: 'ice-blast', short: 'Ice Blast Handwash', group: 'handwash' },
            { id: 'orange', short: 'Orange Handwash', group: 'handwash' },
            { id: 'strawberry', short: 'Strawberry Handwash', group: 'handwash' }
        ];

        const comboDiscount = (count, size, groups) => {
            const hasHandwash = groups.includes('handwash');
            const base = count === 2 ? (size === '5L' ? 10 : 8) : (size === '5L' ? 14 : 12);
            return hasHandwash ? base + 2 : base;
        };

        const productCombos = (size, count) => {
            const results = [];
            const pick = (arr, k, start = 0, current = []) => {
                if (current.length === k) {
                    results.push([...current]);
                    return;
                }
                for (let i = start; i < arr.length; i++) {
                    current.push(arr[i]);
                    pick(arr, k, i + 1, current);
                    current.pop();
                }
            };
            pick(offerProducts, count);
            return results.map(products => {
                const names = products.map(p => p.short);
                const ids = products.map(p => p.id).join('-');
                const groups = [...new Set(products.map(p => p.group))];
                const discount = comboDiscount(count, size, groups);
                const category = count === 2 ? 'combo-2' : 'combo-3';
                return {
                    id: `${category.toUpperCase()}-${ids}-${size}`,
                    category,
                    badge: count === 2 ? '2-Product Combo' : '3-Product Combo',
                    badgeClass: '',
                    title: `${names.join(' + ')}`,
                    savings: `${discount}% off`,
                    description: `Bundle any ${count} products together in ${size} packs and save ${discount}% on the combined order.`,
                    includes: names.map(n => `${n} (${size})`),
                    pack: size,
                    terms: [`Minimum ${count} different products`, `${size} pack size per item`, 'One-time or repeat order'],
                    featured: false
                };
            });
        };

        const paavitOffers = [
            {
                id: 'SUB-12TH-FREE',
                category: 'subscription',
                badge: 'Most Popular',
                badgeClass: 'offer-badge--featured',
                title: '12th Month On Us',
                savings: '1 month free',
                description: 'Buy any Paavit product every month for 11 consecutive months and receive the 12th month absolutely free — same product, same pack size.',
                includes: ['Any product from our range', '1L or 5L pack'],
                pack: '1L / 5L',
                terms: ['11 consecutive monthly orders required', 'Same SKU each month', '12th month credit applied automatically'],
                featured: true
            },
            {
                id: 'SUB-6TH-HALF',
                category: 'subscription',
                badge: 'Subscription',
                badgeClass: 'offer-badge--subscription',
                title: '6th Month at Half Price',
                savings: '50% off month 6',
                description: 'Commit to five straight months of any single product and get your 6th monthly delivery at 50% off.',
                includes: ['Any product from our range', '1L or 5L pack'],
                pack: '1L / 5L',
                terms: ['5 consecutive monthly orders', 'Discount applies to 6th month only'],
                featured: false
            },
            {
                id: 'SUB-ANNUAL-PREPAY',
                category: 'subscription',
                badge: 'Subscription',
                badgeClass: 'offer-badge--subscription',
                title: 'Annual Prepay Saver',
                savings: '2 months free',
                description: 'Pay upfront for 10 months of supply and receive a full 12 months of product delivered on your schedule.',
                includes: ['Any product from our range', '1L or 5L pack'],
                pack: '1L / 5L',
                terms: ['Single upfront payment', 'Delivery schedule agreed at order', 'Equivalent to 2 months free'],
                featured: true
            },
            {
                id: 'SUB-QUARTERLY',
                category: 'subscription',
                badge: 'Subscription',
                badgeClass: 'offer-badge--subscription',
                title: 'Quarterly Commit',
                savings: '8% off',
                description: 'Prepay for 3 months of the same product and save 8% compared to ordering month by month.',
                includes: ['Any product from our range', '1L or 5L pack'],
                pack: '1L / 5L',
                terms: ['3-month minimum commitment', 'Same product and pack size'],
                featured: false
            },
            {
                id: 'BUNDLE-HOME-4-1L',
                category: 'bundle',
                badge: 'Curated Bundle',
                badgeClass: 'offer-badge--featured',
                title: 'Complete Home Care Pack',
                savings: '15% off',
                description: 'All four home care essentials in 1 Litre bottles — floor, laundry, bathroom, and kitchen covered in one order.',
                includes: ['Floor Cleaner (1L)', 'Detergent (1L)', 'Toilet Cleaner (1L)', 'Dish Wash (1L)'],
                pack: '1L',
                terms: ['All four products required', 'Retail & household orders'],
                featured: true
            },
            {
                id: 'BUNDLE-HOME-4-5L',
                category: 'bundle',
                badge: 'Curated Bundle',
                badgeClass: 'offer-badge--featured',
                title: 'Complete Home Care Bulk',
                savings: '18% off',
                description: 'Stock up with 5 Litre cans of all four home care products — ideal for families, societies, and small businesses.',
                includes: ['Floor Cleaner (5L)', 'Detergent (5L)', 'Toilet Cleaner (5L)', 'Dish Wash (5L)'],
                pack: '5L',
                terms: ['All four 5L cans required', 'Free delivery on bulk bundles'],
                featured: true
            },
            {
                id: 'BUNDLE-HANDWASH-TRIO-1L',
                category: 'bundle',
                badge: 'Curated Bundle',
                badgeClass: '',
                title: 'Handwash Trio Pack',
                savings: '12% off',
                description: 'Get all three Soft Wash fragrances — Ice Blast, Orange, and Strawberry — in 1 Litre bottles at a bundle price.',
                includes: ['Ice Blast (1L)', 'Orange Handwash (1L)', 'Strawberry Handwash (1L)'],
                pack: '1L',
                terms: ['All three scents included', 'Perfect for multi-sink homes'],
                featured: false
            },
            {
                id: 'BUNDLE-HANDWASH-TRIO-5L',
                category: 'bundle',
                badge: 'Curated Bundle',
                badgeClass: '',
                title: 'Handwash Trio Bulk',
                savings: '15% off',
                description: 'Three 5 Litre handwash cans — one of each scent — for offices, restaurants, and high-traffic washrooms.',
                includes: ['Ice Blast (5L)', 'Orange Handwash (5L)', 'Strawberry Handwash (5L)'],
                pack: '5L',
                terms: ['All three 5L cans required'],
                featured: false
            },
            {
                id: 'BUNDLE-FULL-HOUSE-1L',
                category: 'bundle',
                badge: 'Best Value',
                badgeClass: 'offer-badge--featured',
                title: 'Full House Starter',
                savings: '20% off',
                description: 'Every product in the Paavit range — all 7 SKUs in 1 Litre — for a complete home hygiene setup in one go.',
                includes: offerProducts.map(p => `${p.short} (1L)`),
                pack: '1L',
                terms: ['All 7 products required', 'Maximum range discount'],
                featured: true
            },
            {
                id: 'BUNDLE-FULL-HOUSE-5L',
                category: 'bundle',
                badge: 'Best Value',
                badgeClass: 'offer-badge--featured',
                title: 'Full House Bulk',
                savings: '22% off',
                description: 'The ultimate bulk order — all 7 products in 5 Litre cans for hotels, hostels, and large households.',
                includes: offerProducts.map(p => `${p.short} (5L)`),
                pack: '5L',
                terms: ['All 7 × 5L cans required', 'Distributor pricing available on request'],
                featured: true
            },
            {
                id: 'BUNDLE-KITCHEN-1L',
                category: 'bundle',
                badge: 'Curated Bundle',
                badgeClass: '',
                title: 'Kitchen Care Duo',
                savings: '10% off',
                description: 'Dish Wash and Floor Cleaner together — tackle grease on utensils and grime on kitchen floors.',
                includes: ['Dish Wash (1L)', 'Floor Cleaner (1L)'],
                pack: '1L',
                terms: ['Both 1L products required'],
                featured: false
            },
            {
                id: 'BUNDLE-KITCHEN-5L',
                category: 'bundle',
                badge: 'Curated Bundle',
                badgeClass: '',
                title: 'Kitchen Care Bulk',
                savings: '12% off',
                description: 'Commercial kitchens and canteens — 5 Litre Dish Wash plus 5 Litre Floor Cleaner at a combo rate.',
                includes: ['Dish Wash (5L)', 'Floor Cleaner (5L)'],
                pack: '5L',
                terms: ['Both 5L cans required'],
                featured: false
            },
            {
                id: 'BUNDLE-BATHROOM-1L',
                category: 'bundle',
                badge: 'Curated Bundle',
                badgeClass: '',
                title: 'Bathroom Essentials',
                savings: '10% off',
                description: 'Toilet Cleaner paired with your choice of Soft Wash handwash — complete bathroom hygiene in one bundle.',
                includes: ['Toilet Cleaner (1L)', 'Any Handwash (1L)'],
                pack: '1L',
                terms: ['Pick any handwash scent', 'Both 1L products required'],
                featured: false
            },
            {
                id: 'BUNDLE-BATHROOM-5L',
                category: 'bundle',
                badge: 'Curated Bundle',
                badgeClass: '',
                title: 'Bathroom Essentials Bulk',
                savings: '12% off',
                description: '5 Litre Toilet Cleaner plus 5 Litre Handwash — built for hotels, gyms, and shared washrooms.',
                includes: ['Toilet Cleaner (5L)', 'Any Handwash (5L)'],
                pack: '5L',
                terms: ['Pick any handwash scent', 'Both 5L cans required'],
                featured: false
            },
            {
                id: 'BUNDLE-OFFICE-5L',
                category: 'bundle',
                badge: 'Business',
                badgeClass: '',
                title: 'Office Essentials Pack',
                savings: '15% off',
                description: 'Floor Cleaner, Dish Wash, and Handwash (your choice of scent) — everything a workplace pantry and washroom needs.',
                includes: ['Floor Cleaner (5L)', 'Dish Wash (5L)', 'Any Handwash (5L)'],
                pack: '5L',
                terms: ['All three 5L products required', 'Ideal for offices & co-working spaces'],
                featured: false
            },
            {
                id: 'BUNDLE-HOTEL-5L',
                category: 'bundle',
                badge: 'Business',
                badgeClass: '',
                title: 'Hotel Housekeeping Pack',
                savings: '16% off',
                description: 'Floor Cleaner, Detergent, and Toilet Cleaner in 5 Litre — the housekeeping trio for hospitality.',
                includes: ['Floor Cleaner (5L)', 'Detergent (5L)', 'Toilet Cleaner (5L)'],
                pack: '5L',
                terms: ['All three 5L cans required', 'Housekeeping & laundry covered'],
                featured: false
            },
            {
                id: 'BUNDLE-LAUNDRY-FLOOR-1L',
                category: 'bundle',
                badge: 'Curated Bundle',
                badgeClass: '',
                title: 'Laundry & Living Duo',
                savings: '10% off',
                description: 'Detergent for fabrics and Floor Cleaner for living spaces — fresh clothes and spotless floors together.',
                includes: ['Detergent (1L)', 'Floor Cleaner (1L)'],
                pack: '1L',
                terms: ['Both 1L products required'],
                featured: false
            },
            {
                id: 'BUNDLE-LAUNDRY-FLOOR-5L',
                category: 'bundle',
                badge: 'Curated Bundle',
                badgeClass: '',
                title: 'Laundry & Living Bulk',
                savings: '12% off',
                description: '5 Litre Detergent and Floor Cleaner combo for homes with high laundry and foot traffic.',
                includes: ['Detergent (5L)', 'Floor Cleaner (5L)'],
                pack: '5L',
                terms: ['Both 5L cans required'],
                featured: false
            },
            {
                id: 'HW-MIX-2GET1-1L',
                category: 'handwash',
                badge: 'Mix & Match',
                badgeClass: '',
                title: 'Buy 2 Get 1 Free',
                savings: '33% off',
                description: 'Pick any two 1 Litre Soft Wash handwashes and get a third bottle of equal or lesser value free.',
                includes: ['Any 2 handwash scents (1L)', '1 free handwash (1L)'],
                pack: '1L',
                terms: ['Free item = lowest-priced of the three', 'Mix scents freely'],
                featured: true
            },
            {
                id: 'HW-MIX-3GET1-5L',
                category: 'handwash',
                badge: 'Mix & Match',
                badgeClass: '',
                title: 'Buy 3 Get 1 Free (Bulk)',
                savings: '25% off',
                description: 'Order any three 5 Litre handwash cans and receive a fourth can free — mix Ice Blast, Orange, and Strawberry.',
                includes: ['Any 3 handwash scents (5L)', '1 free handwash (5L)'],
                pack: '5L',
                terms: ['Free can = lowest-priced of the four', 'Ideal for multi-floor buildings'],
                featured: false
            },
            {
                id: 'HW-FAMILY-3-1L',
                category: 'handwash',
                badge: 'Family Pack',
                badgeClass: '',
                title: 'Family Handwash Pack',
                savings: '15% off',
                description: 'Any three 1 Litre handwash bottles — same scent or mixed — at a family bundle discount.',
                includes: ['Any 3 handwash (1L)'],
                pack: '1L',
                terms: ['Scents can be mixed or matched', 'Minimum 3 bottles'],
                featured: false
            },
            {
                id: 'HW-DUO-5L',
                category: 'handwash',
                badge: 'Handwash Special',
                badgeClass: '',
                title: 'Handwash Duo (5L)',
                savings: '10% off',
                description: 'Two 5 Litre handwash cans in any combination of Ice Blast, Orange, or Strawberry.',
                includes: ['Any 2 handwash scents (5L)'],
                pack: '5L',
                terms: ['Same or different scents allowed'],
                featured: false
            },
            {
                id: 'HW-SCENT-TRIO-1L',
                category: 'handwash',
                badge: 'Handwash Special',
                badgeClass: '',
                title: 'Scent Explorer Pack',
                savings: '1 free 500ml equivalent',
                description: 'Buy Ice Blast and Orange 1L together and get Strawberry 1L at 50% off — try every fragrance.',
                includes: ['Ice Blast (1L)', 'Orange Handwash (1L)', 'Strawberry Handwash (1L) at 50% off'],
                pack: '1L',
                terms: ['All three scents in one order', 'Strawberry discount applied at checkout'],
                featured: false
            },
            {
                id: 'VOL-5L-BONUS-1L',
                category: 'volume',
                badge: 'Volume Deal',
                badgeClass: 'offer-badge--volume',
                title: '5L + Free 1L Sampler',
                savings: 'Free 1L bottle',
                description: 'Buy any 5 Litre can and receive a complimentary 1 Litre bottle of the same product to try or refill dispensers.',
                includes: ['Any product (5L)', 'Same product (1L) free'],
                pack: '5L + 1L',
                terms: ['One free 1L per 5L can purchased', 'Same SKU only'],
                featured: true
            },
            {
                id: 'VOL-5L-4GET1',
                category: 'volume',
                badge: 'Volume Deal',
                badgeClass: 'offer-badge--volume',
                title: 'Buy 4 Cans, 5th Free',
                savings: '20% off',
                description: 'Order four 5 Litre cans of the same product and get the fifth can absolutely free.',
                includes: ['Any product (5L × 4)', 'Same product (5L) free'],
                pack: '5L',
                terms: ['Same SKU for all 5 cans', 'Distributor orders welcome'],
                featured: false
            },
            {
                id: 'VOL-FIRST-ORDER',
                category: 'volume',
                badge: 'New Customer',
                badgeClass: '',
                title: 'First Order Welcome',
                savings: '10% off',
                description: 'New customers save 10% on their first order of three or more products — any mix of 1L or 5L.',
                includes: ['Any 3+ products', '1L or 5L mix allowed'],
                pack: '1L / 5L',
                terms: ['First order only', 'Minimum 3 distinct or same SKUs'],
                featured: false
            },
            {
                id: 'VOL-REFER',
                category: 'volume',
                badge: 'Referral',
                badgeClass: '',
                title: 'Refer & Refresh',
                savings: 'Free 1L each',
                description: 'Refer a friend who places their first order — you both receive a free 1 Litre product of your choice.',
                includes: ['Your choice (1L)', 'Friend\'s choice (1L)'],
                pack: '1L',
                terms: ['Referral must complete first order', 'One free 1L per successful referral'],
                featured: false
            }
        ];

        offerProducts.forEach(product => {
            ['1L', '5L'].forEach(size => {
                paavitOffers.push({
                    id: `VOL-3GET1-${product.id}-${size}`,
                    category: 'volume',
                    badge: 'Volume Deal',
                    badgeClass: 'offer-badge--volume',
                    title: `Buy 3 Get 1 Free — ${product.short}`,
                    savings: '25% off',
                    description: `Stock up on ${product.short} — buy three ${size} units and get a fourth free.`,
                    includes: [`${product.short} (${size}) × 3`, `${product.short} (${size}) free`],
                    pack: size,
                    terms: ['Same product and pack size', 'Free unit = lowest-priced if mixed packs'],
                    featured: false
                });
                paavitOffers.push({
                    id: `VOL-5GET2-${product.id}-${size}`,
                    category: 'volume',
                    badge: 'Volume Deal',
                    badgeClass: 'offer-badge--volume',
                    title: `Buy 5 Get 2 Free — ${product.short}`,
                    savings: '28% off',
                    description: `Maximum savings on ${product.short} — purchase five ${size} units and receive two extra free.`,
                    includes: [`${product.short} (${size}) × 5`, `${product.short} (${size}) × 2 free`],
                    pack: size,
                    terms: ['Same product and pack size', 'Best per-unit savings'],
                    featured: false
                });
            });
        });

        paavitOffers.push(...productCombos('1L', 2));
        paavitOffers.push(...productCombos('5L', 2));
        paavitOffers.push(...productCombos('1L', 3));
        paavitOffers.push(...productCombos('5L', 3));

        const offersCountEl = document.getElementById('offers-count');
        const offersResultsEl = document.getElementById('offers-results');
        const offersEmptyEl = document.getElementById('offers-empty');
        const filterButtons = document.querySelectorAll('.offers-filter');
        let activeFilter = 'all';

        if (offersCountEl) offersCountEl.textContent = paavitOffers.length;

        const renderOffers = (filter) => {
            const filtered = filter === 'all' ? paavitOffers : paavitOffers.filter(o => o.category === filter);
            offersGrid.innerHTML = '';

            filtered.forEach((offer, index) => {
                const card = document.createElement('article');
                card.className = `offer-card reveal${offer.featured ? ' offer-card--featured' : ''}`;
                card.style.transitionDelay = `${Math.min(index % 9, 8) * 0.05}s`;
                card.innerHTML = `
                    <div class="offer-card-top">
                        <span class="offer-badge ${offer.badgeClass || ''}">${offer.badge}</span>
                        <span class="offer-code">${offer.id}</span>
                    </div>
                    <div class="offer-savings"><i class="fas fa-tag"></i> ${offer.savings}</div>
                    <h3>${offer.title}</h3>
                    <p>${offer.description}</p>
                    <div class="offer-includes">
                        <h4>Includes</h4>
                        <ul>${offer.includes.map(item => `<li>${item}</li>`).join('')}</ul>
                    </div>
                    <div class="offer-meta">
                        <span><i class="fas fa-box"></i> ${offer.pack}</span>
                    </div>
                    <a href="contact.html?offer=${encodeURIComponent(offer.id)}" class="btn btn-primary">Claim This Offer</a>
                `;
                offersGrid.appendChild(card);
            });

            if (offersResultsEl) {
                offersResultsEl.textContent = `Showing ${filtered.length} of ${paavitOffers.length} offers`;
            }
            if (offersEmptyEl) offersEmptyEl.hidden = filtered.length > 0;
            offersGrid.hidden = filtered.length === 0;

            offersGrid.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));
        };

        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                activeFilter = btn.dataset.filter;
                filterButtons.forEach(b => b.classList.toggle('active', b === btn));
                renderOffers(activeFilter);
            });
        });

        renderOffers(activeFilter);
    }

    // --- 12. Contact Form — pre-fill offer code from URL ---
    const offerCodeInput = document.getElementById('offer-code');
    const offerParam = new URLSearchParams(window.location.search).get('offer');
    if (offerCodeInput && offerParam) {
        offerCodeInput.value = offerParam;
        const inquirySelect = document.querySelector('select[name="inquiry_type"]');
        if (inquirySelect) inquirySelect.value = 'offer';
        const messageField = document.querySelector('textarea[name="message"]');
        if (messageField && !messageField.value.trim()) {
            messageField.value = `I would like to claim offer ${offerParam}. Please share pricing and availability.`;
        }
    }

    // --- 13. Contact Form Success Message ---
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
