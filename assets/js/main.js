/* ============================
   Portfolio — Mylène Zijlstra
   main.js
   ============================ */

/* ─── Global Functions for Modals & Code Copy ─── */
window.openModal = function (id) {
  const backdrop = document.getElementById(id);
  if (backdrop) {
    backdrop.classList.add('open');
    document.body.style.overflow = 'hidden'; // Prevent background scrolling
  }
};

window.closeModal = function (id) {
  const backdrop = document.getElementById(id);
  if (backdrop) {
    backdrop.classList.remove('open');
    document.body.style.overflow = ''; // Restore scrolling
  }
};

window.closeModalOutside = function (event, element) {
  if (event.target === element) {
    element.classList.remove('open');
    document.body.style.overflow = '';
  }
};

window.copyCode = function (button) {
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
      hamburger.classList.toggle('open');
      navLinksContainer.classList.toggle('open');
    });
  }

  // Close mobile menu on link click
  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      hamburger.classList.remove('open');
      navLinksContainer.classList.remove('open');
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

  // Calculate current age dynamically based on June 14, 2008
  const birthDate = new Date(2008, 5, 14); // June is month index 5
  const today = new Date();
  let age = today.getFullYear() - birthDate.getFullYear();
  const m = today.getMonth() - birthDate.getMonth();
  if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
    age--;
  }

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
      hero_role: "Web Developer",
      hero_desc: "Ik vind het leuk om nieuwe dingen te leren en mezelf uit te dagen door oplossingen te zoeken als iets niet meteen lukt. Ik geef niet snel op en blijf doorwerken totdat mijn website helemaal af is en voldoet aan mijn eigen verwachtingen.",
      hero_btn_projects: "Bekijk Projecten",
      hero_btn_contact: "Neem Contact Op",
      hero_stat_experience: "Jaar Ervaring",
      hero_stat_projects: "Projecten",
      hero_stat_satisfaction: "Tevredenheid",
      about_tag: "Wie ben ik?",
      about_title: "Hey, ik ben Mylène!",
      about_p1: "Ik ben {age} jaar oud en student op het Grafisch Lyceum Utrecht. Op dit moment zit ik in mijn 2e jaar van de opleiding Web Developer.",
      about_p2: "Van het bouwen van een stabiele backend tot het ontwerpen van een strakke interface die lekker werkt: ik vind het allemaal tof om te doen en duik graag in nieuwe technieken.",
      about_quote_1: "Hard werkende student!",
      about_author_1: "Iris Govaard <br> - Klasgenoot",
      about_quote_2: "Hard werkende student!",
      about_author_2: "Martijn Kunstman <br> - Docent",
      about_quote_3: "Hard werkende student!",
      about_author_3: "Cecile van Erp <br> - Klant",
      skills_tag: "Wat ik doe",
      skills_title: "Mijn Expertises",
      skills_subtitle: "De tools en talen waar ik mee werk om projecten te realiseren.",
      skills_frontend_title: "Frontend Development",
      skills_frontend_desc: "Websites die er op elk scherm strak uitzien, met vloeiende animaties en een fijne user experience.",
      skills_backend_title: "Backend Development",
      skills_backend_desc: "Servers en databases die snel en veilig werken, zodat de voorkant van een app altijd soepel draait.",
      skills_tooling_title: "Tooling & Scripting",
      skills_tooling_desc: "Kleine automatiseringen, scripts in Python en handige tools om het ontwikkelproces te versnellen.",
      projects_tag: "Portfolio",
      projects_title: "Uitgelichte Projecten",
      projects_subtitle: "Klik op een project om meer details te bekijken.",
      project_osint_type: "OSINT Tool · Verdieping Software",
      project_osint_title: "OSINT Profiler Tool",
      project_osint_aria: "Open OSINT Profiler details",
      project_osint_alt: "OSINT Profiler screenshot",
      project_osint_desc: "Een op Python gebaseerde OSINT-profilingtool ontwikkeld voor Verdieping Software, gericht op het verzamelen, analyseren en structureren van openbaar beschikbare inlichtingengegevens.",
      project_utrechtsarchief_type: "Educatief / Historisch",
      project_utrechtsarchief_title: "Het Utrechts Archief",
      project_utrechtsarchief_aria: "Open details voor Het Utrechts Archief",
      project_utrechtsarchief_alt: "Het Utrechts Archief screenshot",
      project_utrechtsarchief_desc: "Een gebruiksvriendelijke webapplicatie voor het doorzoeken en bekijken van historische archiefgegevens uit Utrecht, met een overzichtelijke interface en snelle zoekfunctionaliteit.",
      modal_utrechtsarchief_login_title: "Admin Panel:",
      modal_utrechtsarchief_login_desc: "Login: Admin | Wachtwoord: test123",
      project_remote_type: "Media / Afstandsbediening",
      project_remote_title: "RemoteController",
      project_remote_aria: "Open details voor RemoteController",
      project_remote_alt: "RemoteController screenshot",
      project_remote_desc: "Een afstandsbediening-applicatie voor YouTube, waarmee gebruikers eenvoudig media kunnen navigeren, afspelen en beheren vanaf hun apparaat.",
      project_kiosk_type: "Touchscreen Kiosk",
      project_kiosk_title: "Kiosk Happy Herbivore",
      project_kiosk_aria: "Open details voor Kiosk Happy Herbivore",
      project_kiosk_alt: "Kiosk screenshot",
      project_kiosk_desc: "Een interactieve touchscreen-kiosk met een overzichtelijke, meertalige interface waarmee bezoekers snel informatie, locaties en voorzieningen kunnen vinden.",
      project_festival_type: "Progressive Web App",
      project_festival_title: "LoveU Festival App",
      project_festival_aria: "Open details voor LoveU Festival App",
      project_festival_alt: "Festival App screenshot",
      project_festival_desc: "LoveU Festival App is een moderne offline-first Progressive Web App (PWA) voor studenten in Utrecht. De app bevat een interactieve timetable, live podiumstatussen, een zoom- en sleepbare festivalkaart, favorieten en volledige offline ondersteuning voor de ultieme festivalervaring.",
      project_portfolio_type: "Web / Design",
      project_portfolio_title: "Portfolio Website",
      project_portfolio_meta: "Demo &middot; Web",
      project_portfolio_aria: "Open portfolio project details",
      project_portfolio_desc: "Een persoonlijke portfoliowebsite gebouwd met PHP, CSS en JavaScript. Volledig responsive met vloeiende animaties en een modern design systeem.",
      contact_tag: "Zeg hallo",
      contact_title: "Neem contact op",
      contact_subtitle: "Dit portfolio laat een selectie van mijn werk zien. Hoewel ik momenteel niet beschikbaar ben voor nieuwe projecten, kun je me altijd bereiken via e-mail.",
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
      hero_role: "Web Developer",
      hero_desc: "I enjoy learning new things and challenging myself by finding solutions when something doesn't work out right away. I don't give up easily and keep working until my website is completely finished and meets my own expectations.",
      hero_btn_projects: "View Projects",
      hero_btn_contact: "Get In Touch",
      hero_stat_experience: "Years Experience",
      hero_stat_projects: "Projects Done",
      hero_stat_satisfaction: "Satisfaction Rate",
      about_tag: "Who am I?",
      about_title: "Hey, I'm Mylène!",
      about_p1: "I am {age} years old and a student at Grafisch Lyceum Utrecht. Currently, I am in my second year of the Web Developer program.",
      about_p2: "From building reliable backends to designing smooth interfaces that feel great to use: I love diving into code and learning new things along the way.",
      about_quote_1: "Hard working student!",
      about_author_1: "Iris Govaard <br> - Classmate",
      about_quote_2: "Hard working student!",
      about_author_2: "Martijn Kunstman <br> - Teacher",
      about_quote_3: "Hard working student!",
      about_author_3: "Cecile van Erp <br> - Client",
      skills_tag: "What I do",
      skills_title: "My Areas of Expertise",
      skills_subtitle: "The tools, languages, and systems I enjoy using to bring projects to life.",
      skills_frontend_title: "Frontend Development",
      skills_frontend_desc: "Responsive, interactive interfaces that look great on any device, complete with smooth animations.",
      skills_backend_title: "Backend Development",
      skills_backend_desc: "Fast and secure servers and databases, making sure the frontend always runs smoothly.",
      skills_tooling_title: "Tooling & Scripting",
      skills_tooling_desc: "Automating tasks, writing custom scripts in Python, and building CLI tools to speed up workflows.",
      projects_tag: "Portfolio",
      projects_title: "Featured Projects",
      projects_subtitle: "Click on a project to view more details.",
      project_osint_type: "OSINT Tool · Verdieping Software",
      project_osint_title: "OSINT Profiler Tool",
      project_osint_aria: "Open OSINT Profiler details",
      project_osint_alt: "OSINT Profiler screenshot",
      project_osint_desc: "A Python-based OSINT profiling tool developed for Verdieping Software, focused on gathering, analyzing, and structuring publicly available intelligence data.",
      project_utrechtsarchief_type: "Educational / Historical",
      project_utrechtsarchief_title: "Het Utrechts Archief",
      project_utrechtsarchief_aria: "Open details for Het Utrechts Archief",
      project_utrechtsarchief_alt: "Het Utrechts Archief screenshot",
      project_utrechtsarchief_desc: "A user-friendly web application for searching and viewing historical Utrecht archive records, with an intuitive interface and rapid search functionality.",
      modal_utrechtsarchief_login_title: "Admin Panel:",
      modal_utrechtsarchief_login_desc: "Login: Admin | Password: test123",
      project_remote_type: "Media / Remote Control",
      project_remote_title: "RemoteController",
      project_remote_aria: "Open details for RemoteController",
      project_remote_alt: "RemoteController screenshot",
      project_remote_desc: "A remote control application for YouTube, allowing users to easily navigate, play, and manage media from their device.",
      project_kiosk_type: "Touchscreen Kiosk",
      project_kiosk_title: "Kiosk Happy Herbivore",
      project_kiosk_aria: "Open details for Kiosk Happy Herbivore",
      project_kiosk_alt: "Kiosk screenshot",
      project_kiosk_desc: "An interactive touchscreen kiosk with a clean, multilingual interface that lets visitors quickly find information, locations, and amenities.",
      project_festival_type: "Progressive Web App",
      project_festival_title: "LoveU Festival App",
      project_festival_aria: "Open details for LoveU Festival App",
      project_festival_alt: "Festival App screenshot",
      project_festival_desc: "LoveU Festival App is a modern offline-first Progressive Web App (PWA) for students in Utrecht. The app includes an interactive timetable, live stage statuses, a zoomable and draggable festival map, favorites, and full offline support for the ultimate festival experience.",
      project_portfolio_type: "Web / Design",
      project_portfolio_title: "Portfolio Website",
      project_portfolio_meta: "Demo &middot; Web",
      project_portfolio_aria: "Open portfolio website details",
      project_portfolio_desc: "A personal portfolio website built with PHP, CSS, and JavaScript. Fully responsive with smooth animations and a modern design system.",
      contact_tag: "Say hello",
      contact_title: "Contact me",
      contact_subtitle: "This portfolio showcases a selection of my work. While I'm not currently available for new projects, you're always welcome to reach out via email.",
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
        let textVal = translations[lang][key];
        if (typeof textVal === 'string') {
          textVal = textVal.replace('{age}', age);
        }

        // Elements that may contain HTML elements inside them
        if (key === 'footer_crafted' || key === 'hero_btn_projects' || key.startsWith('about_author_')) {
          elem.innerHTML = textVal;
        } else {
          elem.textContent = textVal;
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

  // Initialize automatic slideshows (fade every 3 seconds)
  const slideshows = document.querySelectorAll('.slideshow');
  slideshows.forEach(slideshow => {
    const slides = slideshow.querySelectorAll('.slide');
    if (slides.length <= 1) return;
    let currentSlide = 0;
    setInterval(() => {
      slides[currentSlide].classList.remove('active');
      currentSlide = (currentSlide + 1) % slides.length;
      slides[currentSlide].classList.add('active');
    }, 3000);
  });
});