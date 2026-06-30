/* ============================
   Portfolio — Mylène Zijlstra
   main.js
   ============================ */

/* ─── Global Functions for Modals & Code Copy ─── */
window.openModal = function(id) {
  const backdrop = document.getElementById(id);
  if (backdrop) {
    backdrop.classList.add('open');
    document.body.style.overflow = 'hidden'; // Prevent background scrolling
  }
};

window.closeModal = function(id) {
  const backdrop = document.getElementById(id);
  if (backdrop) {
    backdrop.classList.remove('open');
    document.body.style.overflow = ''; // Restore scrolling
  }
};

window.closeModalOutside = function(event, element) {
  if (event.target === element) {
    element.classList.remove('open');
    document.body.style.overflow = '';
  }
};

window.copyCode = function(button) {
  const codeBlock = button.closest('.code-snapshot').querySelector('.code-snapshot__body code');
  if (!codeBlock) return;
  
  // Extract text to copy (removing line formatting if any)
  const textToCopy = codeBlock.innerText;
  
  navigator.clipboard.writeText(textToCopy).then(() => {
    // Visual feedback
    const originalHTML = button.innerHTML;
    button.innerHTML = '<i data-lucide="check" style="width:14px;height:14px;color:#10b981;"></i>';
    button.style.pointerEvents = 'none';
    
    // Re-initialize Lucide icons to render the checkmark
    if (window.lucide) {
      window.lucide.createIcons();
    }
    
    setTimeout(() => {
      button.innerHTML = originalHTML;
      button.style.pointerEvents = '';
      if (window.lucide) {
        window.lucide.createIcons();
      }
    }, 2000);
  }).catch(err => {
    console.error('Failed to copy text: ', err);
  });
};

/* ─── DOM Content Loaded Logic ─── */
document.addEventListener('DOMContentLoaded', () => {
  // Navigation element query selectors
  const navbar = document.querySelector('.navbar');
  const hamburger = document.querySelector('.hamburger');
  const navLinksContainer = document.querySelector('.nav-links');
  const navLinks = document.querySelectorAll('.nav-links a');
  const sections = document.querySelectorAll('section');

  /* ─── Smooth Navbar Scroll Styling ─── */
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }

    // Active Link Scroll Spying
    let current = '';
    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;
      if (window.scrollY >= (sectionTop - 150)) {
        current = section.getAttribute('id');
      }
    });

    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${current}`) {
        link.classList.add('active');
      }
    });
  });

  /* ─── Mobile Menu Toggle ─── */
  if (hamburger) {
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active');
      navLinksContainer.classList.toggle('active');

      if (navLinksContainer.classList.contains('active')) {
        navLinksContainer.style.display = 'flex';
        navLinksContainer.style.flexDirection = 'column';
        navLinksContainer.style.position = 'absolute';
        navLinksContainer.style.top = '68px';
        navLinksContainer.style.left = '0';
        navLinksContainer.style.right = '0';
        navLinksContainer.style.background = 'var(--bg-primary)';
        navLinksContainer.style.padding = '2rem';
        navLinksContainer.style.borderBottom = '1px solid var(--border-accent)';
      } else {
        navLinksContainer.style.display = '';
      }
    });
  }

  // Close mobile menu on link click
  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      hamburger.classList.remove('active');
      navLinksContainer.classList.remove('active');
      navLinksContainer.style.display = '';
    });
  });

  /* ─── Scroll Reveal Effect ─── */
  const revealElements = document.querySelectorAll('.reveal');
  const revealOnScroll = () => {
    for (let i = 0; i < revealElements.length; i++) {
      const windowHeight = window.innerHeight;
      const elementTop = revealElements[i].getBoundingClientRect().top;
      const elementVisible = 120; // Threshold

      if (elementTop < windowHeight - elementVisible) {
        revealElements[i].classList.add('visible');
      }
    }
  };

  window.addEventListener('scroll', revealOnScroll);
  revealOnScroll(); // Trigger on initial page load

  /* ─── Theme Toggling & State Persistence ─── */
  let currentTheme = localStorage.getItem('portfolio-theme') || 'light';

  const updateTheme = (theme) => {
    currentTheme = theme;
    localStorage.setItem('portfolio-theme', theme);
    document.documentElement.setAttribute('data-theme', theme);

    // Update icons visibility
    const moonIcon = document.querySelector('.icon-theme-dark');
    const sunIcon = document.querySelector('.icon-theme-light');
    if (moonIcon && sunIcon) {
      if (theme === 'dark') {
        moonIcon.style.display = 'none';
        sunIcon.style.display = 'block';
      } else {
        moonIcon.style.display = 'block';
        sunIcon.style.display = 'none';
      }
    }
  };

  const themeToggle = document.getElementById('theme-toggle');
  if (themeToggle) {
    themeToggle.addEventListener('click', () => {
      const nextTheme = currentTheme === 'light' ? 'dark' : 'light';
      updateTheme(nextTheme);
    });
  }

  updateTheme(currentTheme);

  /* ─── Translation Engine & Dictionary ─── */
  const translations = {
    nl: {
      nav_home: "Home",
      nav_about: "Over Mij",
      nav_skills: "Skills",
      nav_projects: "Projecten",
      nav_contact: "Contact",
      theme_toggle_aria: "Schakel donkere modus in",
      lang_toggle_aria: "Switch naar Engels",
      hero_role: "Developer & Designer",
      hero_desc: "Ik creëer hoogwaardige, responsieve en esthetische webapplicaties. Focus op prestaties, uitstekend design en schone code.",
      hero_btn_projects: "Bekijk Projecten",
      hero_btn_contact: "Neem Contact Op",
      hero_stat_experience: "Jaar Ervaring",
      hero_stat_projects: "Projecten",
      hero_stat_satisfaction: "Tevredenheid",
      about_tag: "Wie ben ik",
      about_title: "Gepassioneerd door web en design",
      about_p1: "Als developer combineer ik technische functionaliteit met prachtig visueel design. Ik geloof dat software niet alleen goed moet werken, maar dat de gebruikerservaring even belangrijk is.",
      about_p2: "Of het nu gaat om het bouwen van robuuste backends, interactieve frontends of het ontwerpen van intuïtieve user interfaces — ik pak elke uitdaging met enthousiasme aan.",
      about_quote: "De beste manier om de toekomst te voorspellen is door hem zelf te programmeren.",
      skills_tag: "Wat ik doe",
      skills_title: "Mijn Expertises",
      skills_subtitle: "Een selectie van mijn vaardigheden en tools waarmee ik dagelijks werk.",
      skills_frontend_title: "Frontend Development",
      skills_frontend_desc: "Gebruiksvriendelijke en interactieve interfaces met moderne technologieën en strakke animaties.",
      skills_backend_title: "Backend Development",
      skills_backend_desc: "Robuuste server-side logica, RESTful API's en veilige database integraties.",
      skills_tooling_title: "Tooling & Scripting",
      skills_tooling_desc: "Automatisering, scripting in Python en handige CLI-applicaties ter ondersteuning.",
      projects_tag: "Portfolio",
      projects_title: "Uitgelichte Projecten",
      projects_subtitle: "Klik op een project om meer details te bekijken.",
      project_osint_type: "OSINT Tool · Verdieping Software",
      project_osint_title: "OSINT Profiler Tool",
      project_osint_aria: "Open OSINT Profiler details",
      project_osint_alt: "OSINT Profiler screenshot",
      project_osint_desc: "Een op Python gebaseerde OSINT-profilingtool ontwikkeld voor Verdieping Software, gericht op het verzamelen, analyseren en structureren van openbaar beschikbare inlichtingengegevens.",
      project_portfolio_type: "Demo",
      project_portfolio_title: "Portfolio Website",
      project_portfolio_meta: "Demo · Web",
      project_portfolio_aria: "Open portfolio project details",
      project_portfolio_desc: "Een persoonlijke portfoliowebsite gebouwd met PHP, CSS en JavaScript. Volledig responsive met vloeiende animaties en een modern design systeem.",
      project_taskmanager_type: "Demo",
      project_taskmanager_title: "Task Manager App",
      project_taskmanager_meta: "Demo · App",
      project_taskmanager_aria: "Open task manager details",
      project_taskmanager_desc: "Een interactieve taakbeheer applicatie met drag-and-drop functionaliteit, categorieën en voortgangsoverzichten. Gebouwd als full-stack webapplicatie.",
      contact_tag: "Zeg hallo",
      contact_title: "Laten we samenwerken!",
      contact_subtitle: "Heb je een idee, een project dat je wilt realiseren, of wil je gewoon even kennismaken? Stuur me gerust een bericht!",
      footer_crafted: "Gemaakt met <span>&hearts;</span> en passie.",
      modal_close_aria: "Sluiten",
      copy_code_title: "Kopieer code"
    },
    en: {
      nav_home: "Home",
      nav_about: "About Me",
      nav_skills: "Skills",
      nav_projects: "Projects",
      nav_contact: "Contact",
      theme_toggle_aria: "Switch to dark mode",
      lang_toggle_aria: "Switch to Dutch",
      hero_role: "Developer & Designer",
      hero_desc: "I create high-quality, responsive, and aesthetic web applications. Focused on performance, excellent design, and clean code.",
      hero_btn_projects: "View Projects",
      hero_btn_contact: "Get In Touch",
      hero_stat_experience: "Years Experience",
      hero_stat_projects: "Projects Done",
      hero_stat_satisfaction: "Satisfaction Rate",
      about_tag: "Who am I",
      about_title: "Passionate about web and design",
      about_p1: "As a developer, I combine technical functionality with beautiful visual design. I believe that software should not only work well, but that the user experience is equally important.",
      about_p2: "Whether it is building robust backends, interactive frontends, or designing intuitive user interfaces — I tackle every challenge with enthusiasm.",
      about_quote: "The best way to predict the future is to program it yourself.",
      skills_tag: "What I do",
      skills_title: "My Areas of Expertise",
      skills_subtitle: "A selection of my skills and tools that I work with on a daily basis.",
      skills_frontend_title: "Frontend Development",
      skills_frontend_desc: "User-friendly and interactive interfaces with modern technologies and clean animations.",
      skills_backend_title: "Backend Development",
      skills_backend_desc: "Robust server-side logic, RESTful APIs, and secure database integrations.",
      skills_tooling_title: "Tooling & Scripting",
      skills_tooling_desc: "Automation, Python scripting, and handy CLI applications to support development.",
      projects_tag: "Portfolio",
      projects_title: "Featured Projects",
      projects_subtitle: "Click on a project to view more details.",
      project_osint_type: "OSINT Tool · Verdieping Software",
      project_osint_title: "OSINT Profiler Tool",
      project_osint_aria: "Open OSINT Profiler details",
      project_osint_alt: "OSINT Profiler screenshot",
      project_osint_desc: "A Python-based OSINT profiling tool developed for Verdieping Software, focused on gathering, analyzing, and structuring publicly available intelligence data.",
      project_portfolio_type: "Demo",
      project_portfolio_title: "Portfolio Website",
      project_portfolio_meta: "Demo · Web",
      project_portfolio_aria: "Open portfolio website details",
      project_portfolio_desc: "A personal portfolio website built with PHP, CSS, and JavaScript. Fully responsive with smooth animations and a modern design system.",
      project_taskmanager_type: "Demo",
      project_taskmanager_title: "Task Manager App",
      project_taskmanager_meta: "Demo · App",
      project_taskmanager_aria: "Open task manager app details",
      project_taskmanager_desc: "An interactive task management application with drag-and-drop functionality, categories, and progress overviews. Built as a full-stack web application.",
      contact_tag: "Say hello",
      contact_title: "Let's collaborate!",
      contact_subtitle: "Have an idea, a project you want to realize, or just want to connect? Feel free to send me a message!",
      footer_crafted: "Crafted with <span>&hearts;</span> and passion.",
      modal_close_aria: "Close",
      copy_code_title: "Copy code"
    }
  };

  let currentLang = localStorage.getItem('portfolio-lang') || 'nl';

  const updateLanguage = (lang) => {
    currentLang = lang;
    localStorage.setItem('portfolio-lang', lang);
    
    // Update toggle button text (displays the NEXT available language)
    const langLabel = document.querySelector('#lang-toggle .lang-label');
    if (langLabel) {
      langLabel.textContent = lang === 'nl' ? 'EN' : 'NL';
    }

    // Apply translations to all translatable texts
    document.querySelectorAll('[data-i18n]').forEach(elem => {
      const key = elem.getAttribute('data-i18n');
      if (translations[lang][key]) {
        // Elements that may contain HTML elements inside them
        if (key === 'footer_crafted' || key === 'hero_btn_projects') {
          elem.innerHTML = translations[lang][key];
        } else {
          elem.textContent = translations[lang][key];
        }
      }
    });

    // Translate aria-labels
    document.querySelectorAll('[data-i18n-aria-label]').forEach(elem => {
      const key = elem.getAttribute('data-i18n-aria-label');
      if (translations[lang][key]) {
        elem.setAttribute('aria-label', translations[lang][key]);
      }
    });

    // Translate HTML titles
    document.querySelectorAll('[data-i18n-title]').forEach(elem => {
      const key = elem.getAttribute('data-i18n-title');
      if (translations[lang][key]) {
        elem.setAttribute('title', translations[lang][key]);
      }
    });

    // Translate image alt attributes
    document.querySelectorAll('[data-i18n-alt]').forEach(elem => {
      const key = elem.getAttribute('data-i18n-alt');
      if (translations[lang][key]) {
        elem.setAttribute('alt', translations[lang][key]);
      }
    });

    // Adjust html lang attribute
    document.documentElement.setAttribute('lang', lang);
  };

  const langToggle = document.getElementById('lang-toggle');
  if (langToggle) {
    langToggle.addEventListener('click', () => {
      const nextLang = currentLang === 'nl' ? 'en' : 'nl';
      updateLanguage(nextLang);
    });
  }

  // Set initial language from storage or default
  updateLanguage(currentLang);
});