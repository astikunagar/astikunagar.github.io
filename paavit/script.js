document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. Product Database & Dynamic Injection ---
    const paavitProducts = {
        'floor-cleaner': {
            name: 'Paavit White Floor Cleaner',
            image: 'Paavit-floor-cleaner.png',
            shortDesc: 'A Quality Product for advanced stain removal and hygiene.',
            description: 'Paavit White Floor Cleaner ensures your home stays sparkling clean and germ-free. Formulated with a fresh fragrance, it cuts through tough stains and grime on all hard surfaces, leaving a brilliant shine without any sticky residue.',
            features: ['99.9% Germ Kill Protection', 'Tough on stubborn stains', 'Safe for all hard floors', 'Long-lasting freshness'],
            category: 'Home Care'
        },
        'detergent': {
            name: 'Paavit Detergent Liquid',
            image: 'Paavit-Detergent-Liquid.png',
            shortDesc: 'Gentle on fabrics, tough on stubborn stains.',
            description: 'Experience a new level of clean with Paavit Detergent Liquid. Designed for both top-load and front-load washing machines, this powerful liquid dissolves quickly, removing deep-seated dirt while preserving the color and softness of your clothes.',
            features: ['Color-protect technology', 'No powder residue left behind', 'Suitable for all washing machines', 'Fresh floral scent'],
            category: 'Laundry Care'
        },
        'toilet-cleaner': {
            name: 'Paavit Toilet Cleaner (10x Power)',
            image: 'Paavit-Toilet-Cleaner-Liquid.png',
            shortDesc: 'Thick gel formula for ultimate bathroom hygiene.',
            description: 'Paavit Toilet Cleaner features a thick liquid formula that clings to the bowl, providing 10x more stain removal power. It eliminates odors and kills 99.9% of germs, ensuring a hygienic and fresh bathroom environment.',
            features: ['10x Stain Removal Power', 'Kills 99.9% of germs and bacteria', 'Thick clinging gel formula', 'Eliminates bad odors instantly'],
            category: 'Bathroom Care'
        },
        'dish-wash': {
            name: 'Paavit Dish Wash Liquid',
            image: 'Paavit-Dish-Wash-Liquid.png',
            shortDesc: 'Cuts through tough grease instantly.',
            description: 'Paavit Dish Wash Liquid is infused with active grease-cutting technology. A single drop creates a rich lather that effortlessly removes burnt-on food and tough oil stains, leaving your utensils sparkling clean and smelling fresh.',
            features: ['Instant grease release formulation', 'Gentle and safe on hands', 'Leaves a sparkling clean shine', 'Refreshing lemon zest scent'],
            category: 'Kitchen Care'
        },
        'ice-blast': {
            name: 'Paavit Soft Wash - Ice Blast',
            image: 'Paavit-Ice-Blast-Handwash-Liquid.png',
            shortDesc: 'Cooling handwash for absolute freshness.',
            description: 'Refresh and protect your hands with Paavit Soft Wash Ice Blast. This invigorating handwash provides a cooling sensation while effectively washing away dirt and germs. Enriched with moisturizers to prevent dryness.',
            features: ['Invigorating cooling sensation', 'Antibacterial germ protection', 'pH balanced for sensitive skin', 'Moisturizing formula'],
            category: 'Personal Care'
        },
        'orange': {
            name: 'Paavit Soft Wash - Orange',
            image: 'Paavit-Orange-Handwash-Liquid.png',
            shortDesc: 'Citrus-infused germ protection.',
            description: 'Infused with the uplifting scent of fresh oranges, Paavit Soft Wash Orange keeps your hands clean, soft, and beautifully fragranced. Its rich lather washes away impurities while maintaining your skin\'s natural moisture.',
            features: ['Citrus burst fragrance', 'Rich, creamy lather', 'Tough on germs and dirt', 'Gentle on hands and skin'],
            category: 'Personal Care'
        },
        'strawberry': {
            name: 'Paavit Soft Wash - Strawberry',
            image: 'Paavit-Strawberry-Handwash-Liquid.png',
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
        document.getElementById('pd-image').src = product.image;
        document.getElementById('pd-image').alt = product.name;
        
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
});
