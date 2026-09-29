<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STAR UP KOBIKA NA NDAKU | Innovation Technologique & Écologique</title>

    <link rel="icon" type="image/x-icon" href="asset/img/logo/WhatsApp Image 2026-09-18 at 13.18.41 (2).jpeg">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Tailwind Custom Configuration -->
    <script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Inter', 'sans-serif'],
                },
                colors: {
                    brand: {
                        emerald: '#059669', // Santé & Écologie (Emerald-600)
                        emeraldDark: '#047857',
                        cyan: '#0284c7', // Énergie & Tech Quantique (Sky-600)
                        cyanDark: '#0369a1',
                        teal: '#0d9488', // Accord Santé (Teal-600)
                        amber: '#d97706', // Chaleur Humaine & Agro (Amber-600)
                        amberLight: '#fef3c7',
                        dark: '#0f172a', // Slate-900
                    }
                }
            }
        }
    }
    </script>

    <style>
    /* CSS DÉDIÉ POUR LE LOGO */
    .brand-logo-icon {
        background: linear-gradient(135deg, #0284c7 0%, #059669 100%);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }

    .brand-logo-icon::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(60deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transform: rotate(30deg);
        transition: transform 0.6s ease;
    }

    .group:hover .brand-logo-icon::after {
        transform: rotate(30deg) translate(100%, 100%);
    }

    .group:hover .brand-logo-icon {
        transform: scale(1.08) rotate(3deg);
        box-shadow: 0 10px 20px -5px rgba(5, 150, 105, 0.4);
    }

    /* ANIMATIONS CSS GLOBALES */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes pulseGlow {

        0%,
        100% {
            box-shadow: 0 0 15px rgba(5, 150, 105, 0.3);
        }

        50% {
            box-shadow: 0 0 25px rgba(2, 132, 199, 0.6);
        }
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .gradient-hero {
        background: linear-gradient(135deg, #0284c7 0%, #059669 100%);
    }

    .page-section {
        display: none;
        opacity: 0;
        transition: opacity 0.4s ease-in-out, transform 0.4s ease-in-out;
        transform: translateY(10px);
    }

    .page-section.active {
        display: block;
        opacity: 1;
        transform: translateY(0);
        animation: fadeInUp 0.5s ease-out forwards;
    }

    .custom-shadow {
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
    }

    .hover-lift {
        transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-7px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
    }

    /* Animation pour les cartes de la galerie */
    .gallery-card {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .gallery-card:hover {
        transform: scale(1.03);
        z-index: 10;
    }
    </style>
</head>

<body
    class="bg-slate-50 text-slate-800 flex flex-col min-h-screen font-sans antialiased selection:bg-brand-emerald selection:text-white">

    <!-- NAVIGATION BAR -->
    <header
        class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-200 shadow-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo Personnalisé -->
                <a href="#home" onclick="navigateTo('home')" class="flex items-center gap-3 group">
                    <div
                        class="w-11 h-11 rounded-xl brand-logo-icon flex items-center justify-center text-white shadow-md">
                        <!-- <i class="fa-solid fa-atom text-xl animate-spin-slow"></i> -->
                        <img src="asset/img/logo/WhatsApp Image 2026-09-18 at 13.18.41 (2).jpeg" alt="" srcset="">
                    </div>
                    <div class="flex flex-col">
                        <span
                            class="text-xs text-brand-emerald font-bold uppercase tracking-wider mt-1 transition-colors group-hover:text-brand-cyan">Star
                            Up</span>
                        <span
                            class="font-extrabold text-lg sm:text-xl text-slate-900 tracking-tight leading-none group-hover:text-brand-emerald transition-colors">KOBIKA
                            NA NDAKU</span>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden xl:flex items-center space-x-1">
                    <button onclick="navigateTo('home')" id="nav-home"
                        class="nav-btn px-3 py-2 rounded-lg text-sm font-semibold text-brand-emerald bg-emerald-50 transition-all duration-200">Accueil</button>
                    <button onclick="navigateTo('about')" id="nav-about"
                        class="nav-btn px-3 py-2 rounded-lg text-sm font-medium text-slate-600 hover:text-brand-emerald hover:bg-slate-100 transition-all duration-200">À
                        Propos & Équipe</button>
                    <button onclick="navigateTo('health')" id="nav-health"
                        class="nav-btn px-3 py-2 rounded-lg text-sm font-medium text-slate-600 hover:text-brand-emerald hover:bg-slate-100 transition-all duration-200">Santé
                        & Néonatologie</button>
                    <button onclick="navigateTo('energy')" id="nav-energy"
                        class="nav-btn px-3 py-2 rounded-lg text-sm font-medium text-slate-600 hover:text-brand-emerald hover:bg-slate-100 transition-all duration-200">Énergie
                        & Écologie</button>
                    <button onclick="navigateTo('tech-agro')" id="nav-tech-agro"
                        class="nav-btn px-3 py-2 rounded-lg text-sm font-medium text-slate-600 hover:text-brand-emerald hover:bg-slate-100 transition-all duration-200">Numérique
                        & Aquaponie</button>
                    <button onclick="navigateTo('gallery')" id="nav-gallery"
                        class="nav-btn px-3 py-2 rounded-lg text-sm font-medium text-slate-600 hover:text-brand-emerald hover:bg-slate-100 transition-all duration-200">Galerie</button>
                    <button onclick="navigateTo('contact')" id="nav-contact"
                        class="ml-2 px-4 py-2.5 rounded-lg text-sm font-semibold text-white bg-brand-emerald hover:bg-brand-emeraldDark shadow-sm hover:shadow-md transition-all duration-300 hover:scale-105">Contact
                        & Devis</button>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="xl:hidden flex items-center">
                    <button id="mobile-menu-btn" onclick="toggleMobileMenu()"
                        class="p-2 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-100 focus:outline-none transition-colors">
                        <i class="fa-solid fa-bars text-2xl" id="menu-icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu Dropdown -->
        <div id="mobile-menu"
            class="hidden xl:hidden bg-white border-b border-slate-200 px-4 pt-2 pb-6 space-y-2 shadow-lg transition-all duration-300">
            <button onclick="navigateTo('home'); toggleMobileMenu()"
                class="block w-full text-left px-4 py-2.5 rounded-lg text-base font-medium text-slate-700 hover:bg-slate-100">Accueil</button>
            <button onclick="navigateTo('about'); toggleMobileMenu()"
                class="block w-full text-left px-4 py-2.5 rounded-lg text-base font-medium text-slate-700 hover:bg-slate-100">À
                Propos & Équipe</button>
            <button onclick="navigateTo('health'); toggleMobileMenu()"
                class="block w-full text-left px-4 py-2.5 rounded-lg text-base font-medium text-slate-700 hover:bg-slate-100">Santé
                & Néonatologie</button>
            <button onclick="navigateTo('energy'); toggleMobileMenu()"
                class="block w-full text-left px-4 py-2.5 rounded-lg text-base font-medium text-slate-700 hover:bg-slate-100">Énergie
                Verte & Écologie</button>
            <button onclick="navigateTo('tech-agro'); toggleMobileMenu()"
                class="block w-full text-left px-4 py-2.5 rounded-lg text-base font-medium text-slate-700 hover:bg-slate-100">Santé
                Numérique & Aquaponie</button>
            <button onclick="navigateTo('gallery'); toggleMobileMenu()"
                class="block w-full text-left px-4 py-2.5 rounded-lg text-base font-medium text-slate-700 hover:bg-slate-100">Galerie
                Photos</button>
            <button onclick="navigateTo('contact'); toggleMobileMenu()"
                class="block w-full text-center mt-4 px-4 py-3 rounded-lg text-base font-bold text-white bg-brand-emerald hover:bg-brand-emeraldDark shadow">Demander
                un Devis</button>
        </div>
    </header>

    <!-- MAIN CONTENT AREA WITH PAGES -->
    <main class="flex-grow">

        <!-- ==================== PAGE 1: HOME ==================== -->
        <section id="page-home" class="page-section active">
            <!-- Hero Banner -->
            <div class="relative bg-slate-900 text-white overflow-hidden py-20 lg:py-28">
                <div class="absolute inset-0 z-0 opacity-30 bg-cover bg-center transition-transform duration-1000 scale-105 hover:scale-100"
                    style="background-image: url('asset/img/alls/WhatsApp Image 2026-09-18 at 13.33.28 copy.jpeg');">
                </div>
                <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-900/90 to-slate-900/40 z-0">
                </div>

                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-3xl animate-fade-in-up">
                        <span
                            class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 mb-6">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span> Innovation Médicale
                            & Solaire
                        </span>
                        <h1
                            class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight text-white mb-6">
                            L'innovation technologique et écologique au service de la vie.
                        </h1>
                        <p class="text-base sm:text-xl text-slate-300 mb-8 leading-relaxed">
                            <strong class="text-white font-semibold">STAR UP KOBIKA NA NDAKU</strong> conçoit des
                            solutions locales et durables : couveuses néonatales quantiques à énergie solaire,
                            numérisation hospitalière, phytothérapie et agriculture écoresponsable.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button onclick="navigateTo('health')"
                                class="px-7 py-4 rounded-xl text-base font-bold bg-brand-emerald hover:bg-brand-emeraldDark text-white shadow-lg hover:shadow-emerald-500/20 transition-all hover:scale-105 flex items-center justify-center gap-2">
                                Découvrir nos solutions <i class="fa-solid fa-arrow-right text-sm"></i>
                            </button>
                            <button onclick="navigateTo('contact')"
                                class="px-7 py-4 rounded-xl text-base font-bold bg-white/10 hover:bg-white/20 text-white border border-white/20 backdrop-blur-md transition-all hover:scale-105 flex items-center justify-center">
                                Demander un devis / Contact
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Impact Banner & Key Stats -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10 relative z-20">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div
                        class="bg-white p-6 rounded-2xl custom-shadow border border-slate-100 flex items-start gap-4 hover-lift">
                        <div
                            class="w-12 h-12 rounded-xl bg-sky-100 text-brand-cyan flex items-center justify-center shrink-0 text-xl font-bold">
                            <i class="fa-solid fa-baby"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-base mb-1">Santé Néonatale</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Couveuses quantiques locales autonomes à
                                100 % en énergie solaire.</p>
                        </div>
                    </div>

                    <div
                        class="bg-white p-6 rounded-2xl custom-shadow border border-slate-100 flex items-start gap-4 hover-lift">
                        <div
                            class="w-12 h-12 rounded-xl bg-amber-100 text-brand-amber flex items-center justify-center shrink-0 text-xl font-bold">
                            <i class="fa-solid fa-heart-pulse"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-base mb-1">Accompagnement Humain</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Soutien psychologique dédié aux mères
                                confrontées au deuil périnatal.</p>
                        </div>
                    </div>

                    <div
                        class="bg-white p-6 rounded-2xl custom-shadow border border-slate-100 flex items-start gap-4 hover-lift">
                        <div
                            class="w-12 h-12 rounded-xl bg-emerald-100 text-brand-emerald flex items-center justify-center shrink-0 text-xl font-bold">
                            <i class="fa-solid fa-solar-panel"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-base mb-1">Énergie & Autonomie</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Kits solaires hybrides au lithium pour une
                                alimentation hospitalière continue.</p>
                        </div>
                    </div>

                    <div
                        class="bg-white p-6 rounded-2xl custom-shadow border border-slate-100 flex items-start gap-4 hover-lift">
                        <div
                            class="w-12 h-12 rounded-xl bg-teal-100 text-brand-teal flex items-center justify-center shrink-0 text-xl font-bold">
                            <i class="fa-solid fa-laptop-medical"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-base mb-1">Santé Numérique</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Digitalisation des signes vitaux et
                                dossiers médicaux intelligents.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4 Pillars Section -->
            <div class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-brand-emerald text-sm font-bold uppercase tracking-wider">Domaines
                        d'expertise</span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 mt-2">Une approche intégrée pour la
                        santé et le développement durable</h2>
                    <p class="text-slate-600 mt-4 text-base">Nos 4 piliers d'action répondent de manière globale et
                        transversale aux défis des infrastructures locales.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Pillar 1 -->
                    <div
                        class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 custom-shadow flex flex-col justify-between hover-lift">
                        <div class="relative h-56 bg-slate-200 overflow-hidden">
                            <img src="asset/img/alls/WhatsApp Image 2026-09-18 at 13.33.27 (1).jpeg"
                                alt="Santé & Néonatologie"
                                class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                            <span
                                class="absolute top-4 left-4 bg-brand-emerald text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Pilier
                                1</span>
                        </div>
                        <div class="p-6 flex-grow flex flex-col justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">1. Santé & Néonatologie</h3>
                                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                                    Nous luttons activement contre la mortalité néonatale sévère en fabriquant
                                    localement des couveuses néonatales quantiques alimentées par des kits solaires
                                    complets. Nous accompagnons également la santé mentale des femmes confrontées à la
                                    perte d'un nouveau-né et produisons des thés médicinaux locaux (Artemisia Annua &
                                    Gingembre) pour lutter contre le paludisme et les états grippaux.
                                </p>
                            </div>
                            <button onclick="navigateTo('health')"
                                class="text-brand-emerald font-bold text-sm inline-flex items-center gap-2 hover:gap-3 transition-all pt-2">
                                En savoir plus sur la santé néonatale <i class="fa-solid fa-arrow-right text-xs"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Pillar 2 -->
                    <div
                        class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 custom-shadow flex flex-col justify-between hover-lift">
                        <div class="relative h-56 bg-slate-200 overflow-hidden">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlI8ZfSPhDsZQW8WYrC2k7SAa-1VSKlR11pUE-O2z3nolpi71gY4t7J946&s=10"
                                alt="Énergie Verte & Écologie"
                                class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                            <span
                                class="absolute top-4 left-4 bg-brand-cyan text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Pilier
                                2</span>
                        </div>
                        <div class="p-6 flex-grow flex flex-col justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">2. Énergie Verte & Écologie</h3>
                                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                                    Nous assurons l'autonomie énergétique des centres de santé par l'assemblage et
                                    l'installation de kits solaires hybrides avec batteries au lithium. Notre engagement
                                    écologique s'étend à la fabrication de foyers améliorés écologiques et aux systèmes
                                    de filtration et purification d'eau potable.
                                </p>
                            </div>
                            <button onclick="navigateTo('energy')"
                                class="text-brand-cyan font-bold text-sm inline-flex items-center gap-2 hover:gap-3 transition-all pt-2">
                                Découvrir nos solutions d'énergie verte <i class="fa-solid fa-arrow-right text-xs"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Pillar 3 -->
                    <div
                        class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 custom-shadow flex flex-col justify-between hover-lift">
                        <div class="relative h-56 bg-slate-200 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=800&q=80"
                                alt="Santé Numérique"
                                class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                            <span
                                class="absolute top-4 left-4 bg-brand-teal text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Pilier
                                3</span>
                        </div>
                        <div class="p-6 flex-grow flex flex-col justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">3. Santé Numérique</h3>
                                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                                    Nous modernisons la prise en charge médicale grâce à la numérisation des signes
                                    vitaux en temps réel et au développement de dossiers médicaux numériques
                                    intelligents, garantissant un suivi fluide et sécurisé des patients.
                                </p>
                            </div>
                            <button onclick="navigateTo('tech-agro')"
                                class="text-brand-teal font-bold text-sm inline-flex items-center gap-2 hover:gap-3 transition-all pt-2">
                                Découvrir nos outils numériques <i class="fa-solid fa-arrow-right text-xs"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Pillar 4 -->
                    <div
                        class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 custom-shadow flex flex-col justify-between hover-lift">
                        <div class="relative h-56 bg-slate-200 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?auto=format&fit=crop&w=800&q=80"
                                alt="Agriculture Biologique & Aquaponie"
                                class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                            <span
                                class="absolute top-4 left-4 bg-brand-amber text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Pilier
                                4</span>
                        </div>
                        <div class="p-6 flex-grow flex flex-col justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-slate-900 mb-3">4. Agriculture Biologique & Aquaponie
                                </h3>
                                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                                    Nous promouvons la souveraineté alimentaire et la nutrition saine par la production
                                    d'aquaponie combinant l'élevage de poissons et la culture de tomates biologiques,
                                    créant un écosystème fermé, naturel et durable.
                                </p>
                            </div>
                            <button onclick="navigateTo('tech-agro')"
                                class="text-brand-amber font-bold text-sm inline-flex items-center gap-2 hover:gap-3 transition-all pt-2">
                                Découvrir nos produits bio <i class="fa-solid fa-arrow-right text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CEO Quote Section -->
            <div class="bg-slate-900 text-white py-16 my-8">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col md:flex-row items-center gap-8 lg:gap-12">
                        <div
                            class="w-36 h-36 sm:w-44 sm:h-44 rounded-full overflow-hidden border-4 border-brand-emerald shrink-0 shadow-xl hover:scale-105 transition-transform duration-300">
                            <img src="asset/img/teams/WhatsApp Image 2026-09-22 at 10.54.27.jpeg" alt="Dr Sophonie FOKA"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="space-y-4 text-center md:text-left">
                            <i class="fa-solid fa-quote-left text-3xl text-brand-emerald"></i>
                            <p class="text-lg sm:text-2xl italic font-light text-slate-200 leading-relaxed">
                                « Face aux défis sanitaires et énergétiques, nous avons fait le choix de l'innovation
                                locale. Notre mission est de préserver la vie dès ses premiers instants en combinant
                                technologie quantique, énergie propre et accompagnement humain. »
                            </p>
                            <div>
                                <h4 class="font-bold text-xl text-white">Dr Sophonie FOKA</h4>
                                <p class="text-brand-emerald font-medium text-sm">CEO & Fondateur, STAR UP KOBIKA NA
                                    NDAKU</p>
                            </div>
                            <button onclick="navigateTo('about')"
                                class="mt-2 inline-flex items-center gap-2 text-sm font-semibold text-slate-300 hover:text-white transition-colors">
                                Découvrir l'équipe dirigeante <i class="fa-solid fa-arrow-right text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Why Choose Us Section -->
            <div class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">Pourquoi choisir STAR UP KOBIKA NA
                        NDAKU ?
                    </h2>
                    <p class="text-slate-600 mt-2">Des garanties solides pour les partenaires hospitaliers et
                        institutionnels.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div
                        class="p-8 rounded-2xl bg-slate-50 border border-slate-200 text-center hover:bg-white hover:shadow-lg transition-all hover-lift">
                        <div
                            class="w-14 h-14 mx-auto rounded-2xl bg-emerald-100 text-brand-emerald flex items-center justify-center text-2xl mb-6">
                            <i class="fa-solid fa-microchip"></i>
                        </div>
                        <h3 class="font-bold text-lg text-slate-900 mb-2">Fabrication & Expertise Locales</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Des équipements conçus, assemblés et maintenus sur place pour répondre directement aux
                            réalités du terrain.
                        </p>
                    </div>

                    <div
                        class="p-8 rounded-2xl bg-slate-50 border border-slate-200 text-center hover:bg-white hover:shadow-lg transition-all hover-lift">
                        <div
                            class="w-14 h-14 mx-auto rounded-2xl bg-sky-100 text-brand-cyan flex items-center justify-center text-2xl mb-6">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                        <h3 class="font-bold text-lg text-slate-900 mb-2">Autonomie Énergétique Garantie</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Des solutions médicales et techniques couplées au solaire pour pallier les coupures
                            d'électricité.
                        </p>
                    </div>

                    <div
                        class="p-8 rounded-2xl bg-slate-50 border border-slate-200 text-center hover:bg-white hover:shadow-lg transition-all hover-lift">
                        <div
                            class="w-14 h-14 mx-auto rounded-2xl bg-amber-100 text-brand-amber flex items-center justify-center text-2xl mb-6">
                            <i class="fa-solid fa-hands-holding-circle"></i>
                        </div>
                        <h3 class="font-bold text-lg text-slate-900 mb-2">Impact Social & Écologique</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Une action globale visant la réduction de la mortalité, la transition écologique et la santé
                            communautaire.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Home Call to Action -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-20">
                <div
                    class="gradient-hero rounded-3xl p-8 sm:p-12 text-white text-center sm:text-left flex flex-col lg:flex-row justify-between items-center gap-8 shadow-xl hover:shadow-2xl transition-shadow">
                    <div class="max-w-2xl">
                        <h2 class="text-2xl sm:text-3xl font-extrabold mb-3">Vous êtes un établissement de santé, une
                            institution ou un partenaire ?</h2>
                        <p class="text-emerald-50 text-base">Équipons vos structures avec nos couveuses quantiques, nos
                            kits solaires et nos solutions numériques.</p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 shrink-0 w-full lg:w-auto">
                        <button onclick="navigateTo('contact')"
                            class="px-6 py-3.5 bg-white text-slate-900 rounded-xl font-bold text-sm hover:bg-slate-100 shadow transition-all hover:scale-105">
                            Demander un devis personnalisé
                        </button>
                        <button onclick="navigateTo('contact')"
                            class="px-6 py-3.5 bg-emerald-800/40 text-white rounded-xl font-bold text-sm border border-white/30 hover:bg-emerald-800/60 transition-all hover:scale-105">
                            Prendre contact avec nous
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== PAGE 2: ABOUT & TEAM ==================== -->
        <section id="page-about" class="page-section">
            <!-- Hero Banner -->
            <div class="bg-slate-900 text-white py-16 sm:py-20 relative overflow-hidden">
                <div class="absolute inset-0 opacity-20 bg-cover bg-center"
                    style="background-image: url('asset/img/alls/WhatsApp Image 2026-09-18 at 13.18.32.jpeg');"></div>
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <span class="text-brand-emerald font-bold text-sm tracking-wider uppercase mb-2 block">Présentation
                        Institutionnelle</span>
                    <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight mb-4">Notre Vision, Nos Combats, Notre
                        Équipe</h1>
                    <p class="text-slate-300 text-base sm:text-lg max-w-3xl leading-relaxed">
                        STAR UP KOBIKA NA NDAKU est une société de droit engagée dans la santé, le numérique, l'énergie
                        verte et l'agriculture écoresponsable.
                    </p>
                </div>
            </div>

            <!-- History & Mission -->
            <div class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <span class="text-brand-cyan font-bold text-xs uppercase tracking-wider">Notre Histoire &
                            Mission</span>
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-2 mb-6">Transformer les défis
                            sanitaires et écologiques en solutions durables</h2>
                        <p class="text-slate-600 mb-6 leading-relaxed">
                            Face aux taux élevés de mortalité néonatale et à l'instabilité des infrastructures
                            énergétiques et sanitaires, <strong class="text-slate-800">STAR UP KOBIKA NA NDAKU</strong>
                            a été créée avec une ambition claire : développer des technologies endogènes, écologiques et
                            accessibles.
                        </p>
                        <p class="text-slate-800 font-semibold mb-4">Notre engagement s'articule autour d'une réponse
                            systémique :</p>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div
                                    class="w-6 h-6 rounded-full bg-emerald-100 text-brand-emerald flex items-center justify-center font-bold text-xs shrink-0 mt-1">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <p class="text-slate-600 text-sm"><strong class="text-slate-800">Protéger la vie dès la
                                        naissance :</strong> En concevant des couveuses néonatales quantiques autonomes
                                    grâce à l'énergie solaire, et en accompagnant la santé mentale des mères
                                    endeuillées.</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <div
                                    class="w-6 h-6 rounded-full bg-emerald-100 text-brand-emerald flex items-center justify-center font-bold text-xs shrink-0 mt-1">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <p class="text-slate-600 text-sm"><strong class="text-slate-800">Garantir la
                                        souveraineté sanitaire et énergétique :</strong> Par la numérisation des soins,
                                    la production de traitements phytothérapeutiques locaux et l'installation
                                    d'équipements solaires hybrides.</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <div
                                    class="w-6 h-6 rounded-full bg-emerald-100 text-brand-emerald flex items-center justify-center font-bold text-xs shrink-0 mt-1">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <p class="text-slate-600 text-sm"><strong class="text-slate-800">Promouvoir la
                                        transition écologique :</strong> Via des foyers améliorés, l'accès à l'eau
                                    potable et une agriculture biologique intégrée en aquaponie.</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-3xl overflow-hidden shadow-2xl relative hover-lift">
                        <img src="asset/img/alls/WhatsApp Image 2026-09-18 at 13.18.30.jpeg"
                            alt="Équipe STAR UP KOBIKA NA NDAKU" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <!-- Core Values -->
            <div class="bg-slate-100 py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center max-w-2xl mx-auto mb-12">
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">Nos Valeurs Fondamentales</h2>
                        <p class="text-slate-600 mt-2">Les principes guidant chacune de nos innovations.</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200 text-center hover-lift">
                            <div
                                class="w-12 h-12 mx-auto rounded-xl bg-sky-100 text-brand-cyan flex items-center justify-center text-xl mb-4">
                                <i class="fa-solid fa-lightbulb"></i>
                            </div>
                            <h3 class="font-bold text-lg text-slate-900 mb-2">Innovation Endogène</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Concevoir et assembler des solutions
                                techniques adaptées aux réalités du terrain.</p>
                        </div>

                        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200 text-center hover-lift">
                            <div
                                class="w-12 h-12 mx-auto rounded-xl bg-emerald-100 text-brand-emerald flex items-center justify-center text-xl mb-4">
                                <i class="fa-solid fa-hand-holding-heart"></i>
                            </div>
                            <h3 class="font-bold text-lg text-slate-900 mb-2">Impact Humain & Éthique</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Placer la préservation de la vie et le
                                soutien psychologique au cœur de nos actions.</p>
                        </div>

                        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200 text-center hover-lift">
                            <div
                                class="w-12 h-12 mx-auto rounded-xl bg-amber-100 text-brand-amber flex items-center justify-center text-xl mb-4">
                                <i class="fa-solid fa-leaf"></i>
                            </div>
                            <h3 class="font-bold text-lg text-slate-900 mb-2">Durabilité Écologique</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">Privilégier les énergies renouvelables et
                                les cycles de production zéro déchet.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Leadership Team -->
            <div class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-brand-emerald text-sm font-bold uppercase tracking-wider">Gouvernance</span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 mt-1">L'Équipe Dirigeante (Board
                        Management)</h2>
                    <p class="text-slate-600 mt-3">Un leadership multidisciplinaire au service de l'innovation.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Member 1 -->
                    <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 custom-shadow hover-lift">
                        <div class="h-64 bg-slate-200 relative overflow-hidden">
                            <img src="asset/img/alls/WhatsApp Image 2026-09-18 at 13.18.35.jpeg" alt="Dr Sophonie FOKA"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="font-bold text-xl text-slate-900">Dr Sophonie FOKA</h3>
                            <p class="text-brand-emerald font-semibold text-sm mt-1">Chief Executive Officer (CEO)</p>
                            <p class="text-xs text-slate-500 mt-3">Fondateur & Visionnaire des technologies de santé
                                quantiques.</p>
                        </div>
                    </div>

                    <!-- Member 2 -->
                    <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 custom-shadow hover-lift">
                        <div class="h-64 bg-slate-200 relative overflow-hidden">
                            <img src="asset/img/teams/WhatsApp Image 2026-09-18 at 13.18.25.jpeg"
                                alt="Dr Edna MUNTUMALADIE"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="font-bold text-xl text-slate-900">Dr Edna MUNTUMALADIE</h3>
                            <p class="text-brand-emerald font-semibold text-sm mt-1">Chief Financial Officer (CFO)</p>
                            <p class="text-xs text-slate-500 mt-3">Co-fondatrice & Direction des investissements
                                stratégiques.</p>
                        </div>
                    </div>

                    <!-- Member 3 -->
                    <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 custom-shadow hover-lift">
                        <div class="h-64 bg-slate-200 relative overflow-hidden">
                            <img src="asset/img/teams/WhatsApp Image 2026-09-22 at 10.54.54.jpeg"
                                alt="Dr Pie Roger BAUSSA"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="font-bold text-xl text-slate-900">Dr Pie Roger BAUSSA</h3>
                            <p class="text-brand-emerald font-semibold text-sm mt-1">Directeur Administratif</p>
                            <p class="text-xs text-slate-500 mt-3">Co-fondateur & Gestion des relations
                                institutionnelles.</p>
                        </div>
                    </div>

                    <!-- Member 4 -->
                    <div
                        class="bg-white rounded-2xl overflow-hidden border border-slate-200 custom-shadow hover-lift lg:col-span-1 lg:col-start-1">
                        <div class="h-64 bg-slate-200 relative overflow-hidden">
                            <img src="asset/img/logo/WhatsApp%20Image%202026-09-18%20at%2013.18.41%20(2).jpeg"
                                alt="Ir KABEMBA Alka"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="font-bold text-xl text-slate-900">Ir KABEMBA Alka</h3>
                            <p class="text-brand-emerald font-semibold text-sm mt-1">Chief Product Officer (CPO)</p>
                            <p class="text-xs text-slate-500 mt-3">Directeur Produit & Conception matérielle.</p>
                        </div>
                    </div>

                    <!-- Member 5 -->
                    <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 custom-shadow hover-lift">
                        <div class="h-64 bg-slate-200 relative overflow-hidden">
                            <img src="asset/img/logo/WhatsApp%20Image%202026-09-18%20at%2013.18.41%20(2).jpeg"
                                alt="Ir AFANA Stéphane"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="font-bold text-xl text-slate-900">Ir AFANA Stéphane</h3>
                            <p class="text-brand-emerald font-semibold text-sm mt-1">Chief Technology Officer (CTO)</p>
                            <p class="text-xs text-slate-500 mt-3">Directeur Technique & Numérique hospitalier.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Call -->
            <div class="bg-emerald-50 border-t border-b border-emerald-100 py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h3 class="text-xl sm:text-2xl font-bold text-slate-900 mb-4">Vous souhaitez en savoir plus sur nos
                        technologies et nos solutions ?</h3>
                    <div class="flex flex-wrap justify-center gap-4">
                        <button onclick="navigateTo('health')"
                            class="px-6 py-3 bg-brand-emerald hover:bg-brand-emeraldDark text-white font-bold rounded-xl text-sm transition-all shadow hover:scale-105">
                            Découvrir nos solutions de santé →
                        </button>
                        <button onclick="navigateTo('contact')"
                            class="px-6 py-3 bg-white border border-slate-300 hover:bg-slate-50 text-slate-800 font-bold rounded-xl text-sm transition-all shadow-sm hover:scale-105">
                            Nous contacter
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== PAGE 3: HEALTH & NEONATOLOGY ==================== -->
        <section id="page-health" class="page-section">
            <!-- Hero Banner -->
            <div class="bg-slate-900 text-white py-16 sm:py-20 relative overflow-hidden">
                <div class="absolute inset-0 opacity-25 bg-cover bg-center"
                    style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHx6Z5fbzipAMlNih2JhK4A_CZF9c1IYfggZPIdaVk0nkXHsBk7yUrkQQ&s=10');">
                </div>
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <span class="text-brand-emerald font-bold text-sm tracking-wider uppercase mb-2 block">Pôle Santé
                        Médicale</span>
                    <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight mb-4">Protéger la vie dès les premiers
                        instants et soutenir la santé maternelle</h1>
                    <p class="text-slate-300 text-base sm:text-lg max-w-3xl leading-relaxed">
                        Innovations médicales quantiques, soutien psychologique spécialisé et solutions
                        phytothérapeutiques locales pour sauver des vies et renforcer les soins néonatals.
                    </p>
                </div>
            </div>

            <!-- Quantum Incubator Detailed -->
            <div class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <span
                            class="px-3 py-1 rounded-full text-xs font-bold bg-sky-100 text-brand-cyan mb-3 inline-block">Dispositif
                            Médical Innovant</span>
                        <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 mb-6">La Couveuse Néonatale
                            Quantique à Kit Solaire Intégré</h2>
                        <p class="text-slate-600 mb-6 leading-relaxed">
                            Dans de nombreux centres de santé, l'instabilité électrique constitue une menace directe
                            pour les nouveau-nés prématurés ou vulnérables. Notre couveuse néonatale quantique résout ce
                            défi grâce à un système complet et autonome.
                        </p>

                        <div class="space-y-4">
                            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 hover-lift">
                                <h4 class="font-bold text-slate-900 text-sm flex items-center gap-2">
                                    <i class="fa-solid fa-microchip text-brand-emerald"></i> Fabrication & Assemblage
                                    Locaux
                                </h4>
                                <p class="text-xs text-slate-600 mt-1">Conçus et adaptés précisément aux conditions
                                    thermiques et environnementales du terrain.</p>
                            </div>

                            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 hover-lift">
                                <h4 class="font-bold text-slate-900 text-sm flex items-center gap-2">
                                    <i class="fa-solid fa-atom text-brand-cyan"></i> Technologie Quantique & Régulation
                                </h4>
                                <p class="text-xs text-slate-600 mt-1">Stabilisation avancée des paramètres vitaux et
                                    thermiques pour une sécurité néonatale optimale.</p>
                            </div>

                            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 hover-lift">
                                <h4 class="font-bold text-slate-900 text-sm flex items-center gap-2">
                                    <i class="fa-solid fa-solar-panel text-brand-amber"></i> Autonomie Électrique 100 %
                                    Solaire
                                </h4>
                                <p class="text-xs text-slate-600 mt-1">Couplée à un kit solaire dédié garantissant un
                                    fonctionnement continuous sans coupure ni rupture de charge.</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-3xl overflow-hidden shadow-2xl relative border-4 border-white hover-lift">
                        <img src="asset/img/alls/WhatsApp Image 2026-09-18 at 13.18.34 (1).jpeg"
                            alt="Couveuse néonatale quantique" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <!-- Maternal Mental Health -->
            <div class="bg-slate-100 py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="order-2 lg:order-1 rounded-3xl overflow-hidden shadow-xl hover-lift">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXJ3fCe5dL-jtedMuWVH5UNtXNaOnWv0oV90NEvQtdgL1ywLJlDRag2J0&s=10"
                                alt="Accompagnement psychologique" class="w-full h-full object-cover">
                        </div>
                        <div class="order-1 lg:order-2">
                            <span
                                class="px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-brand-amber mb-3 inline-block">Soutien
                                Psychologique</span>
                            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mb-4">Soutien psychologique et
                                prise en charge du deuil périnatal</h2>
                            <p class="text-slate-600 mb-6 leading-relaxed">
                                La perte d'un nouveau-né engendre une détresse psychologique profonde trop souvent
                                négligée. STAR UP KOBIKA NA NDAKU met en place un programme d'accompagnement humain et
                                thérapeutique dédié aux femmes touchées par la dépression périnatale.
                            </p>

                            <ul class="space-y-3">
                                <li class="flex items-start gap-3 text-sm text-slate-700">
                                    <i class="fa-solid fa-heart text-brand-amber mt-1"></i>
                                    <div><strong>Cellule d'écoute et d'accompagnement :</strong> Prise en charge
                                        individualisée par des professionnels de la santé mentale.</div>
                                </li>
                                <li class="flex items-start gap-3 text-sm text-slate-700">
                                    <i class="fa-solid fa-users text-brand-amber mt-1"></i>
                                    <div><strong>Groupes de parole et suivi personnalisé :</strong> Espaces sécurisés
                                        pour briser l'isolement et favoriser le rétablissement.</div>
                                </li>
                                <li class="flex items-start gap-3 text-sm text-slate-700">
                                    <i class="fa-solid fa-graduation-cap text-brand-amber mt-1"></i>
                                    <div><strong>Sensibilisation hospitalière :</strong> Formation des équipes
                                        soignantes à la prise en charge humaine du deuil périnatal.</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Phytotherapy -->
            <div class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-brand-emerald text-sm font-bold uppercase tracking-wider">Santé
                        Communautaire</span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1">Phytothérapie Localement
                        Produite</h2>
                    <p class="text-slate-600 mt-2">Nous valorisons la pharmacopée locale par la transformation et le
                        conditionnement de plantes médicinales aux vertus éprouvées.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <!-- Product 1 -->
                    <div
                        class="bg-white p-8 rounded-2xl border border-slate-200 custom-shadow flex flex-col justify-between hover-lift">
                        <div>
                            <div
                                class="w-14 h-14 rounded-2xl bg-emerald-100 text-brand-emerald flex items-center justify-center text-2xl mb-6">
                                <i class="fa-solid fa-leaf"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Thé ARTEMISIA ANNUA et Gingembre ( Thé
                                Artemisia KOBIKA)</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-4">
                                Solution naturelle efficace pour la prévention et traitement des États grippaux, et du
                                paludisme simple.
                                Stimulant naturelle de l'immunité sans effet secondaire.
                                À consommer avec modération pendant un mois
                            </p>
                        </div>
                        <div class="pt-4 border-t border-slate-100">
                            <span
                                class="text-xs font-semibold text-emerald-700 bg-emerald-50 px-3 py-1 rounded-full">100%
                                Biologique & Normes d'hygiène</span>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div
                        class="bg-white p-8 rounded-2xl border border-slate-200 custom-shadow flex flex-col justify-between hover-lift">
                        <div>
                            <div
                                class="w-14 h-14 rounded-2xl bg-amber-100 text-brand-amber flex items-center justify-center text-2xl mb-6">
                                <i class="fa-solid fa-mug-hot"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Thé GINGEMBRE MENTHE</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-4">
                                Formulation stimulant le système immunitaire, idéale contre les états grippaux et les
                                infections respiratoires.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-slate-100">
                            <span
                                class="text-xs font-semibold text-amber-700 bg-amber-50 px-3 py-1 rounded-full">Accessibilité
                                financière pour les ménages</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Call -->
            <div class="bg-slate-900 text-white py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h3 class="text-xl sm:text-2xl font-bold mb-3">Vous êtes un hôpital, un centre de santé ou une ONG ?
                    </h3>
                    <p class="text-slate-300 text-sm mb-6">Équipez vos services de néonatologie ou commandez nos lots de
                        produits phytothérapeutiques.</p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <button onclick="navigateTo('contact')"
                            class="px-6 py-3 bg-brand-emerald hover:bg-brand-emeraldDark text-white font-bold rounded-xl text-sm transition-all shadow hover:scale-105">
                            Demander une cotation / Devis
                        </button>
                        <button onclick="navigateTo('energy')"
                            class="px-6 py-3 bg-white/10 hover:bg-white/20 text-white font-bold rounded-xl text-sm border border-white/20 transition-all hover:scale-105">
                            Découvrir nos solutions d'énergie solaire →
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== PAGE 4: GREEN ENERGY & ECOLOGY ==================== -->
        <section id="page-energy" class="page-section">
            <!-- Hero Banner -->
            <div class="bg-slate-900 text-white py-16 sm:py-20 relative overflow-hidden">
                <div class="absolute inset-0 opacity-25 bg-cover bg-center"
                    style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ7J4wt9nDFN3_dYhvgIVSueKyRWrW4A7AxONg0jpfYwg0VYmGyjAoC04&s=10');">
                </div>
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <span class="text-brand-cyan font-bold text-sm tracking-wider uppercase mb-2 block">Pôle Énergie &
                        Environnement</span>
                    <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight mb-4">L'autonomie énergétique et la
                        transition écologique au service des infrastructures</h1>
                    <p class="text-slate-300 text-base sm:text-lg max-w-3xl leading-relaxed">
                        Installation de kits solaires hybrides au lithium pour hôpitaux, conception de foyers améliorés
                        écologiques et solutions de purification d'eau potable.
                    </p>
                </div>
            </div>

            <!-- Solar Hospital Systems -->
            <div class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <span
                            class="px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-brand-emerald mb-3 inline-block">Énergie
                            Solaire Hospitalière</span>
                        <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 mb-6">Sécuriser l'alimentation
                            électrique des centres de santé</h2>
                        <p class="text-slate-600 mb-6 leading-relaxed">
                            Les ruptures d'électricité en milieu hospitalier mettent directement en danger la vie des
                            patients, notamment dans les services de néonatologie et de soins intensifs. STAR UP KOBIKA
                            NA NDAKU dimensionne, assemble et installe des systèmes solaires autonomes et hybrides
                            sur-mesure.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 hover-lift">
                                <h4 class="font-bold text-slate-900 text-sm">Panneaux Haute Capacité</h4>
                                <p class="text-xs text-slate-600 mt-1">Captation optimale dimensionnée selon les besoins
                                    réels du centre.</p>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 hover-lift">
                                <h4 class="font-bold text-slate-900 text-sm">Batteries Lithium Hybrides</h4>
                                <p class="text-xs text-slate-600 mt-1">Stockage haute densité longue durée, alimentation
                                    continue 24/7.</p>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 hover-lift">
                                <h4 class="font-bold text-slate-900 text-sm">Onduleurs Intelligents</h4>
                                <p class="text-xs text-slate-600 mt-1">Bascule automatique gérée entre réseau, solaire
                                    et stockage.</p>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 hover-lift">
                                <h4 class="font-bold text-slate-900 text-sm">Maintenance & Suivi Local</h4>
                                <p class="text-xs text-slate-600 mt-1">Installation et assistance technique assurées par
                                    nos ingénieurs.</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-3xl overflow-hidden shadow-2xl relative hover-lift">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTW8gFen0IdG9l3Mzp-vov_AIrQE4TSVHEmpkgZj023xA&s=10"
                            alt="Installation solaire hospitalière" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <!-- Eco Stoves & Water Purification -->
            <div class="bg-slate-100 py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Eco Stoves -->
                        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200 hover-lift">
                            <div
                                class="w-12 h-12 rounded-xl bg-amber-100 text-brand-amber flex items-center justify-center text-xl mb-4">
                                <i class="fa-solid fa-fire-burner"></i>
                            </div>
                            <h3 class="font-bold text-xl text-slate-900 mb-3">Foyers Améliorés Écologiques</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-4">
                                La cuisson traditionnelle au bois non efficient contribue à la déforestation et cause
                                des maladies respiratoires. Nos foyers améliorés apportent une réponse concrète pour les
                                ménages et collectivités.
                            </p>
                            <ul class="space-y-2 text-xs text-slate-700">
                                <li><i class="fa-solid fa-check text-brand-amber mr-2"></i><strong>Économie de
                                        combustible :</strong> Réduction jusqu'à 60% de bois/charbon.</li>
                                <li><i class="fa-solid fa-check text-brand-amber mr-2"></i><strong>Protection de la
                                        santé :</strong> Forte baisse des fumées toxiques émanantes.</li>
                                <li><i class="fa-solid fa-check text-brand-amber mr-2"></i><strong>Matériaux
                                        réfractaires locaux :</strong> Robustesse et longévité garantie.</li>
                            </ul>
                        </div>

                        <!-- Water Purification -->
                        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200 hover-lift">
                            <div
                                class="w-12 h-12 rounded-xl bg-sky-100 text-brand-cyan flex items-center justify-center text-xl mb-4">
                                <i class="fa-solid fa-faucet-drip"></i>
                            </div>
                            <h3 class="font-bold text-xl text-slate-900 mb-3">Filtration & Purification de l'Eau</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-4">
                                L'accès à une eau exempte de germes est le premier pilier de la santé préventive. Nous
                                installons des modules de filtration adaptés aux hôpitaux, écoles et collectivités.
                            </p>
                            <ul class="space-y-2 text-xs text-slate-700">
                                <li><i class="fa-solid fa-check text-brand-cyan mr-2"></i><strong>Filtration
                                        multi-étapes :</strong> Élimination des sédiments et particules.</li>
                                <li><i class="fa-solid fa-check text-brand-cyan mr-2"></i><strong>Purification
                                        bactériologique :</strong> Éradication des agents pathogènes sans produit nocif.
                                </li>
                                <li><i class="fa-solid fa-check text-brand-cyan mr-2"></i><strong>Maintenance simplifiée
                                        :</strong> Consommables facilement nettoyables.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Call -->
            <div class="bg-slate-900 text-white py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h3 class="text-xl sm:text-2xl font-bold mb-3">Besoin d'une étude d'autonomie énergétique ou d'un
                        équipement écologique ?</h3>
                    <p class="text-slate-300 text-sm mb-6">Consultez nos experts pour un dimensionnement solaire
                        d'hôpital ou un équipement d'eau potable.</p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <button onclick="navigateTo('contact')"
                            class="px-6 py-3 bg-brand-cyan hover:bg-brand-cyanDark text-white font-bold rounded-xl text-sm transition-all shadow hover:scale-105">
                            Demander un devis énergétique
                        </button>
                        <button onclick="navigateTo('tech-agro')"
                            class="px-6 py-3 bg-white/10 hover:bg-white/20 text-white font-bold rounded-xl text-sm border border-white/20 transition-all hover:scale-105">
                            Découvrir Santé Numérique & Aquaponie →
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== PAGE 5: DIGITAL HEALTH & AQUAPONICS ==================== -->
        <section id="page-tech-agro" class="page-section">
            <!-- Hero Banner -->
            <div class="bg-slate-900 text-white py-16 sm:py-20 relative overflow-hidden">
                <div class="absolute inset-0 opacity-25 bg-cover bg-center"
                    style="background-image: url('asset/img/alls/WhatsApp Image 2026-09-18 at 13.18.22 (1).jpeg');">
                </div>
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <span class="text-brand-teal font-bold text-sm tracking-wider uppercase mb-2 block">Pôle Digital &
                        Souveraineté Alimentaire</span>
                    <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight mb-4">Digitalisation des soins et
                        souveraineté alimentaire durable</h1>
                    <p class="text-slate-300 text-base sm:text-lg max-w-3xl leading-relaxed">
                        Modernisation des infrastructures hospitalières grâce au dossier médical numérique intelligent
                        et production agroalimentaire bio via l'aquaponie.
                    </p>
                </div>
            </div>

            <!-- Digital Health -->
            <div class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <span
                            class="px-3 py-1 rounded-full text-xs font-bold bg-teal-100 text-brand-teal mb-3 inline-block">Santé
                            Numérique</span>
                        <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 mb-6">Digitalisation des
                            structures hospitalières & constantes vitales</h2>
                        <p class="text-slate-600 mb-6 leading-relaxed">
                            La perte de dossiers papier et le retard dans la prise en compte des constantes vitales
                            freinent la qualité des soins. Notre pôle technologique conçoit et déploie des solutions de
                            santé numérique adaptées aux réalités locales.
                        </p>

                        <div class="space-y-4">
                            <div class="flex items-start gap-4 p-3 rounded-xl hover:bg-slate-100 transition-colors">
                                <div
                                    class="w-10 h-10 rounded-xl bg-teal-100 text-brand-teal flex items-center justify-center font-bold shrink-0 mt-1">
                                    <i class="fa-solid fa-heart-pulse"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-base">Numérisation des Signes Vitaux</h4>
                                    <p class="text-xs text-slate-600">Suivi automatisé et transmission en temps réel des
                                        données du patient aux soignants.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 p-3 rounded-xl hover:bg-slate-100 transition-colors">
                                <div
                                    class="w-10 h-10 rounded-xl bg-teal-100 text-brand-teal flex items-center justify-center font-bold shrink-0 mt-1">
                                    <i class="fa-solid fa-folder-tree"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-base">Dossier Médical Numérique Intelligent
                                    </h4>
                                    <p class="text-xs text-slate-600">Centralisation sécurisée des historiques médicaux,
                                        ordonnances et antécédents.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 p-3 rounded-xl hover:bg-slate-100 transition-colors">
                                <div
                                    class="w-10 h-10 rounded-xl bg-teal-100 text-brand-teal flex items-center justify-center font-bold shrink-0 mt-1">
                                    <i class="fa-solid fa-shield-halved"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-base">Sécurisation & Accessibilité Mobile
                                    </h4>
                                    <p class="text-xs text-slate-600">Archivage chiffré, sauvegardes et ergonomie
                                        parfaite sur tablettes et PC.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-slate-800 p-2 hover-lift">
                        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=800&q=80"
                            alt="Interface dossier médical" class="w-full h-full object-cover rounded-2xl">
                    </div>
                </div>
            </div>

            <!-- Aquaponics -->
            <div class="bg-slate-100 py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="rounded-3xl overflow-hidden shadow-xl hover-lift">
                            <img src="https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?auto=format&fit=crop&w=800&q=80"
                                alt="Système Aquaponique" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <span
                                class="px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-brand-amber mb-3 inline-block">Agriculture
                                Écoresponsable</span>
                            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mb-4">Agriculture Biologique &
                                Aquaponie</h2>
                            <p class="text-slate-600 mb-6 leading-relaxed">
                                L'aquaponie associe l'élevage de poissons (aquaculture) à la culture de végétaux
                                (hydroponie) dans un écosystème fermé. Les déjections des poissons fournissent un
                                engrais naturel aux plantes, qui en retour purifient l'eau.
                            </p>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="bg-white p-4 rounded-xl border border-slate-200 hover-lift">
                                    <h4 class="font-bold text-slate-900 text-sm">Poissons & Tomates Bio</h4>
                                    <p class="text-xs text-slate-600 mt-1">Aliments 100% naturels, sans aucun pesticide
                                        ni engrais chimique.</p>
                                </div>
                                <div class="bg-white p-4 rounded-xl border border-slate-200 hover-lift">
                                    <h4 class="font-bold text-slate-900 text-sm">90% d'Économie d'Eau</h4>
                                    <p class="text-xs text-slate-600 mt-1">Utilisation en circuit fermé idéale pour la
                                        préservation des ressources.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Call -->
            <div class="bg-slate-900 text-white py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h3 class="text-xl sm:text-2xl font-bold mb-3">Intéressé par la numérisation de votre hôpital ou nos
                        produits bio ?</h3>
                    <p class="text-slate-300 text-sm mb-6">Demandez une démonstration de notre logiciel médical ou
                        passez commande de nos produits d'aquaponie.</p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <button onclick="navigateTo('contact')"
                            class="px-6 py-3 bg-brand-teal hover:bg-teal-700 text-white font-bold rounded-xl text-sm transition-all shadow hover:scale-105">
                            Demander une démo / Un devis
                        </button>
                        <button onclick="navigateTo('contact')"
                            class="px-6 py-3 bg-white/10 hover:bg-white/20 text-white font-bold rounded-xl text-sm border border-white/20 transition-all hover:scale-105">
                            Prendre contact avec notre équipe →
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== PAGE 6: GALLERY (SANS TABS - IMAGES ALÉATOIRES) ==================== -->
        <section id="page-gallery" class="page-section">
            <!-- Hero Banner -->
            <div class="bg-slate-900 text-white py-16 sm:py-20 relative overflow-hidden">
                <div class="absolute inset-0 opacity-25 bg-cover bg-center"
                    style="background-image: url('asset/img/alls/WhatsApp Image 2026-09-18 at 13.18.43 (1).jpeg');">
                </div>
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <span
                        class="text-brand-emerald font-bold text-sm tracking-wider uppercase mb-2 block">Médiathèque</span>
                    <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight mb-4">Galerie de nos Réalisations</h1>
                    <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto">
                        Aperçu interactif et aléatoire de nos innovations médicales quantiques, installations solaires,
                        produits
                        phytothérapeutiques et serres d'aquaponie.
                    </p>
                    <button onclick="renderRandomGallery()"
                        class="mt-6 inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-brand-emerald/80 hover:bg-brand-emerald text-white text-xs font-bold transition-all shadow-lg hover:scale-105 backdrop-blur-sm">
                        <i class="fa-solid fa-shuffle"></i> Mélanger les photos
                    </button>
                </div>
            </div>

            <!-- Random Gallery Grid Container (No tabs) -->
            <div class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="random-gallery-grid">
                    <!-- Généré dynamiquement en JS -->
                </div>
            </div>
        </section>

        <!-- ==================== PAGE 7: CONTACT & QUOTE ==================== -->
        <section id="page-contact" class="page-section">
            <!-- Hero Banner -->
            <div class="bg-slate-900 text-white py-16 sm:py-20 relative overflow-hidden">
                <div class="absolute inset-0 opacity-25 bg-cover bg-center"
                    style="background-image: url('asset/img/alls/WhatsApp Image 2026-09-18 at 13.33.23 (1).jpeg');">
                </div>
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <span class="text-brand-emerald font-bold text-sm tracking-wider uppercase mb-2 block">Contact &
                        Partenariat</span>
                    <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight mb-4">Travaillons ensemble pour la
                        santé, l'énergie et l'environnement</h1>
                    <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto">
                        Vous êtes un établissement de santé, une institution, une ONG ou un particulier ? Contactez-nous
                        pour un devis, un partenariat ou une commande.
                    </p>
                </div>
            </div>

            <!-- Contact & Form Section -->
            <div class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                    <!-- Left Column: Coordonnées -->
                    <div class="space-y-8">
                        <div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-6">Nos Coordonnées</h3>
                            <p class="text-slate-600 text-sm mb-6 leading-relaxed">
                                Notre équipe est à votre disposition pour répondre à toutes vos interrogations
                                techniques et institutionnelles.
                            </p>
                        </div>

                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-emerald-100 text-brand-emerald flex items-center justify-center shrink-0 mt-1">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm">Adresse Physique</h4>
                                    <p class="text-slate-600 text-xs mt-1">Siège social & Ateliers de
                                        fabrication<br>Kinshasa, République Démocratique du Congo</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-emerald-100 text-brand-emerald flex items-center justify-center shrink-0 mt-1">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm">Téléphones & WhatsApp</h4>
                                    <p class="text-slate-600 text-xs mt-1">+243 848 444 216</p>
                                    <!-- <p class="text-slate-600 text-xs">WhatsApp Client : +243 99 00 00 000</p> -->
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-emerald-100 text-brand-emerald flex items-center justify-center shrink-0 mt-1">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm">Adresses E-mail</h4>
                                    <p class="text-slate-600 text-xs mt-1">Général : contact@starupkobikandaku.cd</p>
                                    <p class="text-slate-600 text-xs">Devis & Commandes : devis@starupkobikandaku.cd
                                    </p>
                                </div>
                            </div>

                            <!-- Réseaux Sociaux & Vidéos (Ajouté selon vos liens) -->
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-emerald-100 text-brand-emerald flex items-center justify-center shrink-0 mt-1">
                                    <i class="fa-solid fa-share-nodes"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm">Réseaux & Médias</h4>
                                    <div class="flex flex-col gap-2 mt-2">
                                        <a href="https://www.facebook.com/share/1GtT9t8HPQ/" target="_blank"
                                            rel="noopener noreferrer"
                                            class="text-xs text-slate-600 hover:text-brand-emerald flex items-center gap-2 transition-colors">
                                            <i class="fa-brands fa-facebook text-blue-600 text-sm"></i> Facebook
                                        </a>
                                        <a href="https://youtu.be/uVY8ubzufJw" target="_blank" rel="noopener noreferrer"
                                            class="text-xs text-slate-600 hover:text-brand-emerald flex items-center gap-2 transition-colors">
                                            <i class="fa-brands fa-youtube text-red-600 text-sm"></i> Présentation Vidéo
                                            1
                                        </a>
                                        <a href="https://youtu.be/1Y8tf1NPl9M" target="_blank" rel="noopener noreferrer"
                                            class="text-xs text-slate-600 hover:text-brand-emerald flex items-center gap-2 transition-colors">
                                            <i class="fa-brands fa-youtube text-red-600 text-sm"></i> Présentation Vidéo
                                            2
                                        </a>
                                        <a href="https://x.com/StarUpKobika?t=IQIKIKIKobh20d-iuwBcSA&s=08"
                                            target="_blank" rel="noopener noreferrer"
                                            class="text-xs text-slate-600 hover:text-brand-emerald flex items-center gap-2 transition-colors">
                                            <i class="fa-brands fa-x text-slate-900 text-sm"></i> X (Twitter)
                                        </a>
                                        <a href="https://vm.tiktok.com/ZS9AuLTYDkDU4-KGbKW/" target="_blank"
                                            rel="noopener noreferrer"
                                            class="text-xs text-slate-600 hover:text-brand-emerald flex items-center gap-2 transition-colors">
                                            <i class="fa-brands fa-tiktok text-slate-900 text-sm"></i> TikTok
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-xl bg-emerald-100 text-brand-emerald flex items-center justify-center shrink-0 mt-1">
                                    <i class="fa-solid fa-clock"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm">Horaires d'Ouverture</h4>
                                    <p class="text-slate-600 text-xs mt-1">Lundi – Vendredi : 08h00 – 17h00</p>
                                    <p class="text-slate-600 text-xs">Samedi : 08h00 – 13h00</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Form Interactive -->
                    <div class="lg:col-span-2 bg-white p-8 sm:p-10 rounded-3xl border border-slate-200 custom-shadow">
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">Envoyez-nous un message ou demandez un devis
                        </h3>
                        <p class="text-slate-600 text-sm mb-8">Remplissez le formulaire ci-dessous et nos équipes vous
                            recontacteront sous 24h.</p>

                        <!-- Interactive Form Notification -->
                        <div id="form-notification"
                            class="hidden mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm flex items-center gap-3 animate-fade-in-up">
                            <i class="fa-solid fa-circle-check text-xl text-emerald-600"></i>
                            <div>
                                <strong class="font-bold">Demande envoyée avec succès !</strong>
                                <p class="text-xs">Merci pour votre intérêt. Notre équipe traitera votre devis dans les
                                    plus brefs délais.</p>
                            </div>
                        </div>

                        <form id="contact-quote-form" onsubmit="handleFormSubmit(event)" class="space-y-5">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Nom & Prénom
                                        *</label>
                                    <input type="text" name="fullname" required
                                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-brand-emerald focus:border-transparent outline-none text-sm transition-all"
                                        placeholder="Ex: Jean Dupont">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Structure /
                                        Hôpital / Entreprise</label>
                                    <input type="text" name="company"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-brand-emerald focus:border-transparent outline-none text-sm transition-all"
                                        placeholder="Ex: Centre Hospitalier Régional">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Adresse E-mail
                                        *</label>
                                    <input type="email" name="email" required
                                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-brand-emerald focus:border-transparent outline-none text-sm transition-all"
                                        placeholder="nom@exemple.com">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Téléphone /
                                        WhatsApp *</label>
                                    <input type="tel" name="phone" required
                                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-brand-emerald focus:border-transparent outline-none text-sm transition-all"
                                        placeholder="+243 ...">
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Objet de la demande
                                    *</label>
                                <select name="subject" required
                                    class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-brand-emerald focus:border-transparent outline-none text-sm transition-all bg-white">
                                    <option value="">-- Sélectionnez l'objet de votre demande --</option>
                                    <option value="Demande de devis : Couveuses Néonatales Quantiques">Demande de devis
                                        : Couveuses Néonatales Quantiques</option>
                                    <option value="Demande de devis : Kits Solaires Hybrides & Batteries Lithium">
                                        Demande de devis : Kits Solaires Hybrides & Batteries Lithium</option>
                                    <option value="Démonstration / Devis : Dossier Médical Numérique & Signes Vitaux">
                                        Démonstration / Devis : Dossier Médical Numérique & Signes Vitaux</option>
                                    <option value="Commande : Thés Artemisia Annua & Gingembre">Commande : Thés
                                        Artemisia Annua & Gingembre</option>
                                    <option value="Commande / Devis : Foyers Améliorés Écologiques">Commande / Devis :
                                        Foyers Améliorés Écologiques</option>
                                    <option value="Devis : Filtration & Purification d'Eau">Devis : Filtration &
                                        Purification d'Eau</option>
                                    <option value="Commande : Produits d'Aquaponie (Poissons / Tomates bio)">Commande :
                                        Produits d'Aquaponie (Poissons / Tomates bio)</option>
                                    <option value="Autre demande / Partenariat institutionnel">Autre demande /
                                        Partenariat institutionnel</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase mb-2">Message / Détails
                                    du besoin *</label>
                                <textarea name="message" required rows="4"
                                    class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-brand-emerald focus:border-transparent outline-none text-sm transition-all"
                                    placeholder="Précisez votre demande..."></textarea>
                            </div>

                            <button type="submit" id="submit-btn"
                                class="w-full py-4 rounded-xl bg-brand-emerald hover:bg-brand-emeraldDark text-white font-bold text-base shadow-lg hover:shadow-emerald-500/20 transition-all hover:scale-[1.01] flex items-center justify-center gap-2">
                                <i class="fa-solid fa-paper-plane"></i> Envoyer ma demande
                            </button>
                        </form>

                    </div>
                </div>

                <!-- Google Maps Interactive Widget Mockup -->
                <div class="mt-16">
                    <h3 class="text-xl font-bold text-slate-900 mb-4">Localisation de nos bureaux</h3>
                    <div
                        class="rounded-3xl overflow-hidden shadow-lg border border-slate-200 h-80 relative bg-slate-200 flex items-center justify-center">
                        <iframe title="STAR UP KOBIKA NA NDAKU"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127263.26871141755!2d15.2413398!3d-4.3224471!2m3!1f0!1f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a3130283c77d1%3A0x868c287661b32f14!2sKinshasa%2C%20Democratic%20Republic%20of%20the%20Congo!5e0!3m2!1sen!2s!4v1710000000000!5m2!1sen!2s"
                            class="w-full h-full border-0" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- LIGHTBOX MODAL FOR GALLERY -->
    <div id="lightbox"
        class="fixed inset-0 z-50 bg-black/90 hidden flex items-center justify-center p-4 transition-all duration-300">
        <button onclick="closeLightbox()"
            class="absolute top-6 right-6 text-white text-3xl hover:text-brand-emerald transition-colors">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="max-w-4xl max-h-[90vh] flex flex-col items-center animate-fade-in-up">
            <img id="lightbox-img" src="" alt="" class="max-h-[75vh] w-auto object-contain rounded-lg">
            <p id="lightbox-caption" class="text-white text-center mt-4 text-base font-medium"></p>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-slate-950 text-slate-400 border-t border-slate-800 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
                <!-- Col 1: Brand Info -->
                <div class="space-y-4">
                    <div class="block items-center gap-3">
                        <div
                            class="w-9 h-9 rounded-lg brand-logo-icon flex items-center justify-center text-white font-bold">
                            <img src="asset/img/logo/WhatsApp Image 2026-09-18 at 13.18.41 (2).jpeg"
                                alt="logo startup kobika na ndaku" srcset="">
                        </div>
                        <span class="font-extrabold text-lg text-white">STAR UP KOBIKA NA NDAKU</span>
                    </div>
                    <p class="text-xs leading-relaxed text-slate-400">
                        STAR UP KOBIKA NA NDAKU développe des solutions locales et durables : couveuses néonatales
                        quantiques solaires, digitalisation hospitalière, phytothérapie et agriculture bio.
                    </p>
                </div>

                <!-- Col 2: Quick Links -->
                <div>
                    <h4 class="text-white font-bold text-sm mb-4 uppercase tracking-wider">Navigation Rapide</h4>
                    <ul class="space-y-2 text-xs">
                        <li><button onclick="navigateTo('home')"
                                class="hover:text-white transition-colors">Accueil</button></li>
                        <li><button onclick="navigateTo('about')" class="hover:text-white transition-colors">À Propos &
                                Équipe</button></li>
                        <li><button onclick="navigateTo('health')" class="hover:text-white transition-colors">Santé &
                                Néonatologie</button></li>
                        <li><button onclick="navigateTo('energy')" class="hover:text-white transition-colors">Énergie
                                Verte & Écologie</button></li>
                        <li><button onclick="navigateTo('tech-agro')"
                                class="hover:text-white transition-colors">Numérique & Aquaponie</button></li>
                        <li><button onclick="navigateTo('gallery')" class="hover:text-white transition-colors">Galerie
                                Photos</button></li>
                        <li><button onclick="navigateTo('contact')" class="hover:text-white transition-colors">Contact &
                                Devis</button></li>
                    </ul>
                </div>

                <!-- Col 3: Secteurs -->
                <div>
                    <h4 class="text-white font-bold text-sm mb-4 uppercase tracking-wider">Secteurs d'Activité</h4>
                    <ul class="space-y-2 text-xs">
                        <li><span class="hover:text-white">Couveuses Néonatales Quantiques</span></li>
                        <li><span class="hover:text-white">Solaire Hybride & Lithium</span></li>
                        <li><span class="hover:text-white">Dossier Médical Numérique</span></li>
                        <li><span class="hover:text-white">Thés Artemisia & Gingembre</span></li>
                        <li><span class="hover:text-white">Foyers Améliorés Écologiques</span></li>
                        <li><span class="hover:text-white">Aquaponie Bio (Poissons/Tomates)</span></li>
                    </ul>
                </div>

                <!-- Col 4: Contact rapide -->
                <div>
                    <h4 class="text-white font-bold text-sm mb-4 uppercase tracking-wider">Contact Rapide</h4>
                    <p class="text-xs text-slate-400 mb-2"><i class="fa-solid fa-phone text-brand-emerald mr-2"></i>
                        +243 848 444 216</p>
                    <p class="text-xs text-slate-400 mb-2"><i class="fa-solid fa-envelope text-brand-emerald mr-2"></i>
                        contact@starupkobikandaku.cd</p>
                    <p class="text-xs text-slate-400 mb-4"><i
                            class="fa-solid fa-location-dot text-brand-emerald mr-2"></i> Kinshasa, RDC</p>
                    <div class="flex gap-3">
                        <a href="https://www.facebook.com/share/1GtT9t8HPQ/" target="_blank" rel="noopener noreferrer"
                            class="w-8 h-8 rounded-lg bg-slate-800 flex items-center justify-center hover:bg-brand-emerald hover:text-white transition-all hover:scale-110"
                            title="Facebook"><i class="fa-brands fa-facebook-f text-xs"></i></a>
                        <a href="https://youtu.be/uVY8ubzufJw" target="_blank" rel="noopener noreferrer"
                            class="w-8 h-8 rounded-lg bg-slate-800 flex items-center justify-center hover:bg-brand-emerald hover:text-white transition-all hover:scale-110"
                            title="YouTube Video 1"><i class="fa-brands fa-youtube text-xs"></i></a>
                        <a href="https://youtu.be/1Y8tf1NPl9M" target="_blank" rel="noopener noreferrer"
                            class="w-8 h-8 rounded-lg bg-slate-800 flex items-center justify-center hover:bg-brand-emerald hover:text-white transition-all hover:scale-110"
                            title="YouTube Video 2"><i class="fa-brands fa-youtube text-xs"></i></a>                       
                            <a href="https://x.com/StarUpKobika?t=IQIKIKIKobh20d-iuwBcSA&s=08" target="_blank" rel="noopener noreferrer"
                            class="w-8 h-8 rounded-lg bg-slate-800 flex items-center justify-center hover:bg-brand-emerald hover:text-white transition-all hover:scale-110"
                            title="X twitter Video 1"><i class="fa-brands fa-x text-xs"></i></a>
                        <a href="https://vm.tiktok.com/ZS9AuLTYDkDU4-KGbKW/" target="_blank" rel="noopener noreferrer"
                            class="w-8 h-8 rounded-lg bg-slate-800 flex items-center justify-center hover:bg-brand-emerald hover:text-white transition-all hover:scale-110"
                            title="TikTok Video 2"><i class="fa-brands fa-tiktok text-xs"></i></a>
                    </div>
                </div>
            </div>

            <div class="border-t border-slate-900 pt-6 text-center text-xs text-slate-500">
                <p>&copy; 2026 STAR UP KOBIKA NA NDAKU. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT LOGIC -->
    <script>
    // Catalogue des images réelles du projet
    const galleryImages = [{
            src: 'asset/img/alls/WhatsApp Image 2026-09-18 at 13.33.28 copy.jpeg',
            title: ' ',
            badge: 'Santé & Néonatologie',
            badgeColor: 'bg-brand-emerald'
        },
        {
            src: 'asset/img/alls/WhatsApp Image 2026-09-18 at 13.33.27 (1).jpeg',
            title: ' ',
            badge: 'Couveuse Quantique',
            badgeColor: 'bg-brand-emerald'
        },
        {
            src: 'asset/img/alls/WhatsApp Image 2026-09-18 at 13.18.34 (1).jpeg',
            title: ' ',
            badge: 'Énergie & Tech',
            badgeColor: 'bg-brand-cyan'
        },
        {
            src: 'asset/img/alls/WhatsApp Image 2026-09-18 at 13.18.22 (1).jpeg',
            title: ' ',
            badge: 'Santé Numérique',
            badgeColor: 'bg-brand-teal'
        },
        {
            src: 'asset/img/alls/WhatsApp Image 2026-09-18 at 13.18.35.jpeg',
            title: ' ',
            badge: 'Gouvernance',
            badgeColor: 'bg-brand-emerald'
        },
        {
            src: 'asset/img/alls/WhatsApp Image 2026-09-18 at 13.18.32.jpeg',
            title: ' ',
            badge: 'Présentation',
            badgeColor: 'bg-brand-cyan'
        },
        {
            src: 'asset/img/alls/WhatsApp Image 2026-09-18 at 13.18.30.jpeg',
            title: ' ',
            badge: 'Équipe Local',
            badgeColor: 'bg-brand-emerald'
        },
        {
            src: 'asset/img/alls/WhatsApp Image 2026-09-18 at 13.18.31.jpeg',
            title: ' ',
            badge: 'Soutien Humain',
            badgeColor: 'bg-brand-amber'
        },
        {
            src: 'asset/img/alls/WhatsApp Image 2026-09-18 at 13.18.27.jpeg',
            title: ' ',
            badge: 'Énergie Solaire',
            badgeColor: 'bg-brand-cyan'
        },
        {
            src: 'asset/img/alls/WhatsApp Image 2026-09-18 at 13.18.23.jpeg',
            title: ' ',
            badge: 'Énergie Solaire',
            badgeColor: 'bg-brand-cyan'
        },
        {
            src: 'asset/img/alls/WhatsApp Image 2026-09-18 at 13.18.43 (1).jpeg',
            title: ' ',
            badge: 'Aquaponie & Agro',
            badgeColor: 'bg-brand-amber'
        },
        {
            src: 'asset/img/alls/WhatsApp Image 2026-09-18 at 13.33.23 (1).jpeg',
            title: ' ',
            badge: 'Infrastructure',
            badgeColor: 'bg-brand-emerald'
        }
    ];

    // Fonction pour afficher des images mélangées aléatoirement dans la galerie
    function renderRandomGallery() {
        const grid = document.getElementById('random-gallery-grid');
        if (!grid) return;

        // Algorithme d'impartialité (Fisher-Yates) pour mélanger les images
        const shuffled = [...galleryImages].sort(() => 0.5 - Math.random());

        grid.innerHTML = shuffled.map((item, index) => `
                <div class="gallery-card group relative rounded-2xl overflow-hidden cursor-pointer shadow-md bg-slate-800 hover:shadow-xl"
                    onclick="openLightbox('${item.src}', '${item.title.replace(/'/g, "\\'")}')">
                    <img src="${item.src}" alt="${item.title}"
                        class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500 opacity-90 group-hover:opacity-100">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-6 text-white">
                         
                    </div>
                </div>
            `).join('');
    }

    // SPA Page Navigation Logic
    function navigateTo(pageId) {
        const pages = document.querySelectorAll('.page-section');
        pages.forEach(page => {
            page.classList.remove('active');
        });

        const targetPage = document.getElementById('page-' + pageId);
        if (targetPage) {
            targetPage.classList.add('active');
        }

        // Gestion de l'état actif des onglets de navigation
        const navButtons = document.querySelectorAll('.nav-btn');
        navButtons.forEach(btn => {
            btn.classList.remove('text-brand-emerald', 'bg-emerald-50', 'font-semibold');
            btn.classList.add('text-slate-600', 'font-medium');
        });

        const activeBtn = document.getElementById('nav-' + pageId);
        if (activeBtn) {
            activeBtn.classList.remove('text-slate-600', 'font-medium');
            activeBtn.classList.add('text-brand-emerald', 'bg-emerald-50', 'font-semibold');
        }

        // Scroll to top smooth
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

        // Close mobile menu if open
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
            toggleMobileMenu();
        }

        // If navigating to gallery, re-render random
        if (pageId === 'gallery') {
            renderRandomGallery();
        }
    }

    // Mobile Menu Toggle
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        const icon = document.getElementById('menu-icon');
        if (menu) {
            menu.classList.toggle('hidden');
            if (menu.classList.contains('hidden')) {
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            } else {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-xmark');
            }
        }
    }

    // Lightbox Functions
    function openLightbox(src, caption) {
        const lightbox = document.getElementById('lightbox');
        const img = document.getElementById('lightbox-img');
        const cap = document.getElementById('lightbox-caption');
        if (lightbox && img && cap) {
            img.src = src;
            cap.innerText = caption;
            lightbox.classList.remove('hidden');
        }
    }

    function closeLightbox() {
        const lightbox = document.getElementById('lightbox');
        if (lightbox) {
            lightbox.classList.add('hidden');
        }
    }

    // Form Submit Handler
    function handleFormSubmit(e) {
        e.preventDefault();
        const notification = document.getElementById('form-notification');
        if (notification) {
            notification.classList.remove('hidden');
            e.target.reset();
            setTimeout(() => {
                notification.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }, 100);
        }
    }

    // Init Gallery on Load
    document.addEventListener('DOMContentLoaded', () => {
        renderRandomGallery();
    });
    </script>
</body>

</html>