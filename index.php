<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mylène Zijlstra — Portfoliowebsite</title>
  <meta name="description" content="Welkom op de portfoliowebsite van Mylène Zijlstra, Developer en Designer. Bekijk mijn projecten, vaardigheden en contactgegevens.">
  
  <!-- CSS Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">
  
  <!-- Lucide Icons CDN -->
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>

  <!-- Dynamic Animated background blobs -->
  <div class="bg-blobs">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <div class="content">
    
    <!-- Navbar Header -->
    <header class="navbar">
      <a href="#" class="nav-logo">MYLÈNE.</a>
      
      <ul class="nav-links">
        <li><a href="#hero" class="active" data-i18n="nav_home">Home</a></li>
        <li><a href="#about" data-i18n="nav_about">Over Mij</a></li>
        <li><a href="#skills" data-i18n="nav_skills">Skills</a></li>
        <li><a href="#projects" data-i18n="nav_projects">Projecten</a></li>
        <li><a href="#contact" class="nav-cta" data-i18n="nav_contact">Contact</a></li>
      </ul>
      
      <div class="navbar-controls">
        <button id="theme-toggle" class="btn-toggle" aria-label="Schakel donkere modus in" data-i18n-aria-label="theme_toggle_aria">
          <i data-lucide="moon" class="icon-theme-dark"></i>
          <i data-lucide="sun" class="icon-theme-light" style="display: none;"></i>
        </button>
        <button id="lang-toggle" class="btn-toggle" aria-label="Switch language" data-i18n-aria-label="lang_toggle_aria">
          <span class="lang-label">EN</span>
        </button>
      </div>

      <div class="hamburger" id="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </header>

    <!-- Main Content Container -->
    <main>
      
      <!-- Hero Section -->
      <section id="hero">
        <div class="container hero-inner">
          <div class="hero-content">
            
            <h1 class="hero-title">
              <span class="role" data-i18n="hero_role">Developer &amp; Designer</span>
              <span class="name">Mylène Zijlstra</span>
            </h1>
            
            <p class="hero-desc" data-i18n="hero_desc">
              Ik creëer hoogwaardige, responsieve en esthetische webapplicaties. Focus op prestaties, uitstekend design en schone code.
            </p>
            
            <div class="hero-actions">
              <a href="#projects" class="btn btn-primary">
                <span data-i18n="hero_btn_projects">Bekijk Projecten</span> <i data-lucide="arrow-right" style="width: 18px; height: 18px;"></i>
              </a>
              <a href="#contact" class="btn btn-outline" data-i18n="hero_btn_contact">
                Neem Contact Op
              </a>
            </div>
            
            <div class="hero-stats">
              <div class="stat">
                <div class="stat-num">2</div>
                <div class="stat-label" data-i18n="hero_stat_experience">Jaar Ervaring</div>
              </div>
              <div class="stat">
                <div class="stat-num">6+</div>
                <div class="stat-label" data-i18n="hero_stat_projects">Projecten</div>
              </div>
              <div class="stat">
                <div class="stat-num">100%</div>
                <div class="stat-label" data-i18n="hero_stat_satisfaction">Tevredenheid</div>
              </div>
            </div>
          </div>
          
          <div class="hero-visual">
            <div class="avatar-ring">
              <div class="avatar-img">
                <i data-lucide="code" style="width: 80px; height: 80px;"></i>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- About Section -->
      <section id="about" class="reveal">
        <div class="container">
          <div class="section-tag" data-i18n="about_tag">Wie ben ik</div>
          <h2 class="section-title" data-i18n="about_title">Gepassioneerd door web en design</h2>
          
          <div class="about-grid" style="margin-top: 3rem;">
            <div class="about-text">
              <p style="margin-bottom: 1.5rem; color: var(--text-secondary);" data-i18n="about_p1">
                Als developer combineer ik technische functionaliteit met prachtig visueel design. Ik geloof dat software niet alleen goed moet werken, maar dat de gebruikerservaring even belangrijk is.
              </p>
              <p style="color: var(--text-secondary);" data-i18n="about_p2">
                Of het nu gaat om het bouwen van robuuste backends, interactieve frontends of het ontwerpen van intuïtieve user interfaces — ik pak elke uitdaging met enthousiasme aan.
              </p>
              
              <div class="about-chips">
                <span class="chip">HTML</span>
                <span class="chip">PHP</span>
                <span class="chip">JavaScript</span>
                <span class="chip">CSS</span>
                <span class="chip">Python</span>
                <span class="chip">React</span>
                <span class="chip">MySQL</span>
              </div>
            </div>
            
            <div class="about-image">
              <div class="about-card">
                <div class="about-card-quote" data-i18n="about_quote">
                  "De beste manier om de toekomst te voorspellen is door hem zelf te programmeren."
                </div>
                <div class="about-card-author">Mylène Zijlstra</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Skills Section -->
      <section id="skills" class="reveal">
        <div class="container">
          <div class="section-tag" data-i18n="skills_tag">Wat ik doe</div>
          <h2 class="section-title" data-i18n="skills_title">Mijn Expertises</h2>
          <p class="section-subtitle" data-i18n="skills_subtitle">Een selectie van mijn vaardigheden en tools waarmee ik dagelijks werk.</p>
          
          <div class="skills-grid">
            <!-- Skill 1 -->
            <div class="skill-card">
              <div class="skill-icon"><i data-lucide="layout" style="color: var(--accent-light);"></i></div>
              <h3 class="skill-title" data-i18n="skills_frontend_title">Frontend Development</h3>
              <p class="skill-desc" data-i18n="skills_frontend_desc">Gebruiksvriendelijke en interactieve interfaces met moderne technologieën en strakke animaties.</p>
              <div class="skill-tags">
                <span class="skill-tag">HTML5/CSS3</span>
                <span class="skill-tag">JavaScript</span>
                <span class="skill-tag">Vite</span>
              </div>
            </div>
            
            <!-- Skill 2 -->
            <div class="skill-card">
              <div class="skill-icon"><i data-lucide="server" style="color: var(--accent-2);"></i></div>
              <h3 class="skill-title" data-i18n="skills_backend_title">Backend Development</h3>
              <p class="skill-desc" data-i18n="skills_backend_desc">Robuuste server-side logica, RESTful API's en veilige database integraties.</p>
              <div class="skill-tags">
                <span class="skill-tag">PHP</span>
                <span class="skill-tag">Node.js</span>
                <span class="skill-tag">MySQL</span>
              </div>
            </div>
            
            <!-- Skill 3 -->
            <div class="skill-card">
              <div class="skill-icon"><i data-lucide="terminal" style="color: var(--accent-light);"></i></div>
              <h3 class="skill-title" data-i18n="skills_tooling_title">Tooling &amp; Scripting</h3>
              <p class="skill-desc" data-i18n="skills_tooling_desc">Automatisering, scripting in Python en handige CLI-applicaties ter ondersteuning.</p>
              <div class="skill-tags">
                <span class="skill-tag">Python</span>
                <span class="skill-tag">Git</span>
                <span class="skill-tag">Linux</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Projects Section -->
      <section id="projects" class="reveal">
        <div class="container">
          <div class="section-tag" data-i18n="projects_tag">Portfolio</div>
          <h2 class="section-title" data-i18n="projects_title">Uitgelichte Projecten</h2>
          <p class="section-subtitle" data-i18n="projects_subtitle">Klik op een project om meer details te bekijken.</p>

          <div class="projects-grid">

            <!-- Project 1: OSINT Profiler -->
            <div class="project-card" onclick="openModal('modal-1')" role="button" tabindex="0" aria-label="Open OSINT Profiler details" data-i18n-aria-label="project_osint_aria">
              <div class="project-thumbnail">
                <img src="assets/img/osint-profiler.png" alt="OSINT Profiler screenshot" data-i18n-alt="project_osint_alt">
                <div class="card-hover-hint"><i data-lucide="zoom-in" style="width:28px;height:28px;"></i></div>
              </div>
              <div class="project-body">
                <div class="project-meta">
                  <span class="project-type" data-i18n="project_osint_type">OSINT Tool · Verdieping Software</span>
                </div>
                <h3 class="project-title" data-i18n="project_osint_title">OSINT Profiler Tool</h3>
              </div>
            </div>

            <!-- Project 2: Demo -->
            <div class="project-card" onclick="openModal('modal-2')" role="button" tabindex="0" aria-label="Open demo project details" data-i18n-aria-label="project_portfolio_aria">
              <div class="project-thumbnail project-thumbnail--gradient" style="--g1:#d4488a;--g2:#f472b6;">
                <i data-lucide="globe" style="width:56px;height:56px;color:#fff;opacity:0.85;"></i>
                <div class="card-hover-hint"><i data-lucide="zoom-in" style="width:28px;height:28px;"></i></div>
              </div>
              <div class="project-body">
                <div class="project-meta">
                  <span class="project-type" data-i18n="project_portfolio_type">Demo</span>
                </div>
                <h3 class="project-title" data-i18n="project_portfolio_title">Portfolio Website</h3>
              </div>
            </div>

            <!-- Project 3: Demo -->
            <div class="project-card" onclick="openModal('modal-3')" role="button" tabindex="0" aria-label="Open demo project details" data-i18n-aria-label="project_taskmanager_aria">
              <div class="project-thumbnail project-thumbnail--gradient" style="--g1:#7c3aed;--g2:#a78bfa;">
                <i data-lucide="check-square" style="width:56px;height:56px;color:#fff;opacity:0.85;"></i>
                <div class="card-hover-hint"><i data-lucide="zoom-in" style="width:28px;height:28px;"></i></div>
              </div>
              <div class="project-body">
                <div class="project-meta">
                  <span class="project-type" data-i18n="project_taskmanager_type">Demo</span>
                </div>
                <h3 class="project-title" data-i18n="project_taskmanager_title">Task Manager App</h3>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- Contact Section -->
      <section id="contact" class="reveal">
        <div class="container contact-inner">
          <div class="section-tag" data-i18n="contact_tag">Zeg hallo</div>
          <h2 class="section-title" data-i18n="contact_title">Laten we samenwerken!</h2>
          <p class="section-subtitle" data-i18n="contact_subtitle">Heb je een idee, een project dat je wilt realiseren, of wil je gewoon even kennismaken? Stuur me gerust een bericht!</p>
          
          <div class="contact-card">
            <a href="mailto:info@mylenezijlstra.nl" class="contact-email">
              <i data-lucide="mail"></i> info@mylenezijlstra.nl
            </a>
            
            <div class="social-links">
              <a href="https://github.com/mylenezijlstra" target="_blank" rel="noopener noreferrer" class="social-link" title="GitHub — mylenezijlstra">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg>
              </a>
              <a href="https://www.linkedin.com/in/myl%C3%A8ne-zijlstra-1666423b9/" target="_blank" rel="noopener noreferrer" class="social-link" title="LinkedIn — Mylène Zijlstra">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect width="4" height="12" x="2" y="9"></rect><circle cx="4" cy="4" r="2"></circle></svg>
              </a>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!-- Footer -->
    <footer>
      <p>&copy; <?php echo date("Y"); ?> Mylène Zijlstra. <span data-i18n="footer_crafted">Gemaakt met <span>&hearts;</span> en passie.</span></p>
    </footer>

  </div>

  <!-- ═══════════════════════════════════════════
       PROJECT MODALS
       ═══════════════════════════════════════════ -->

  <!-- Modal 1: OSINT Profiler -->
  <div class="modal-backdrop" id="modal-1" onclick="closeModalOutside(event,this)">
    <div class="modal" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
      <button class="modal__close" onclick="closeModal('modal-1')" aria-label="Sluiten" data-i18n-aria-label="modal_close_aria"><i data-lucide="x"></i></button>
      <div class="modal__img">
        <img src="assets/img/osint-profiler.png" alt="OSINT Profiler screenshot" data-i18n-alt="project_osint_alt">
      </div>
      <div class="modal__body">
        <div class="modal__meta"><span class="project-type" data-i18n="project_osint_type">OSINT Tool &middot; Verdieping Software</span></div>
        <h2 class="modal__title" id="modal-1-title" data-i18n="project_osint_title">OSINT Profiler Tool</h2>
        <p class="modal__desc" data-i18n="project_osint_desc">A Python-based OSINT profiling tool developed for Verdieping Software, focused on gathering, analyzing, and structuring publicly available intelligence data.</p>

        <div class="code-snapshot">
          <div class="code-snapshot__header">
            <div class="code-snapshot__dots"><span></span><span></span><span></span></div>
            <span class="code-snapshot__filename">security.py</span>
            <button class="code-snapshot__copy" onclick="copyCode(this)" title="Kopieer code" data-i18n-title="copy_code_title"><i data-lucide="copy" style="width:14px;height:14px;"></i></button>
          </div>
          <pre class="code-snapshot__body"><code><span class="kw">def</span> <span class="fn">change_master_password</span>(
    old_key: <span class="tp">bytes</span>,
    new_password: <span class="tp">str</span>,
    db_path: <span class="tp">str</span> = <span class="st">"profiles.db"</span>
) -&gt; <span class="tp">bytes</span>:</code></pre>
        </div>

        <div class="modal__tags">
          <span class="project-tag">Python</span>
          <span class="project-tag">Streamlit</span>
          <span class="project-tag">Pandas</span>
          <span class="project-tag">HTTPX</span>
          <span class="project-tag">SQLite</span>
        </div>
        <div class="modal__actions">
          <a href="https://github.com/mylenezijlstra/python-OSINT-Profiler-VerdiepingSoftware" target="_blank" class="btn-project btn-project-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:16px;height:16px;margin-right:4px;"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg>
            GitHub
          </a>
          <a href="https://python-osint-profiler-verdiepingsoftware-uobf.onrender.com/" target="_blank" class="btn-project btn-project-primary">
            <i data-lucide="external-link" style="width:16px;height:16px;"></i> Live Demo
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2: Portfolio Website (demo) -->
  <div class="modal-backdrop" id="modal-2" onclick="closeModalOutside(event,this)">
    <div class="modal" role="dialog" aria-modal="true" aria-labelledby="modal-2-title">
      <button class="modal__close" onclick="closeModal('modal-2')" aria-label="Sluiten" data-i18n-aria-label="modal_close_aria"><i data-lucide="x"></i></button>
      <div class="modal__img modal__img--gradient" style="--g1:#d4488a;--g2:#f472b6;">
        <i data-lucide="globe" style="width:72px;height:72px;color:#fff;opacity:0.9;"></i>
      </div>
      <div class="modal__body">
        <div class="modal__meta"><span class="project-type" data-i18n="project_portfolio_meta">Demo &middot; Web</span></div>
        <h2 class="modal__title" id="modal-2-title" data-i18n="project_portfolio_title">Portfolio Website</h2>
        <p class="modal__desc" data-i18n="project_portfolio_desc">Een persoonlijke portfoliowebsite gebouwd met PHP, CSS en JavaScript. Volledig responsive met vloeiende animaties en een modern design systeem.</p>
        <div class="modal__tags">
          <span class="project-tag">HTML</span>
          <span class="project-tag">PHP</span>
          <span class="project-tag">CSS</span>
          <span class="project-tag">JavaScript</span>
        </div>
        <div class="modal__actions">
          <a href="#" class="btn-project btn-project-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:16px;height:16px;margin-right:4px;"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg>
            GitHub
          </a>
          <a href="#" class="btn-project btn-project-primary"><i data-lucide="external-link" style="width:16px;height:16px;"></i> Demo</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3: Task Manager (demo) -->
  <div class="modal-backdrop" id="modal-3" onclick="closeModalOutside(event,this)">
    <div class="modal" role="dialog" aria-modal="true" aria-labelledby="modal-3-title">
      <button class="modal__close" onclick="closeModal('modal-3')" aria-label="Sluiten" data-i18n-aria-label="modal_close_aria"><i data-lucide="x"></i></button>
      <div class="modal__img modal__img--gradient" style="--g1:#7c3aed;--g2:#a78bfa;">
        <i data-lucide="check-square" style="width:72px;height:72px;color:#fff;opacity:0.9;"></i>
      </div>
      <div class="modal__body">
        <div class="modal__meta"><span class="project-type" data-i18n="project_taskmanager_meta">Demo &middot; App</span></div>
        <h2 class="modal__title" id="modal-3-title" data-i18n="project_taskmanager_title">Task Manager App</h2>
        <p class="modal__desc" data-i18n="project_taskmanager_desc">Een interactieve taakbeheer applicatie met drag-and-drop functionaliteit, categorieën en voortgangsoverzichten. Gebouwd als full-stack webapplicatie.</p>
        <div class="modal__tags">
          <span class="project-tag">JavaScript</span>
          <span class="project-tag">Node.js</span>
          <span class="project-tag">MySQL</span>
        </div>
        <div class="modal__actions">
          <a href="#" class="btn-project btn-project-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:16px;height:16px;margin-right:4px;"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg>
            GitHub
          </a>
          <a href="#" class="btn-project btn-project-primary"><i data-lucide="external-link" style="width:16px;height:16px;"></i> Demo</a>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript logic & Lucide activation -->
  <script src="assets/js/main.js"></script>
  <script>
    lucide.createIcons();
  </script>
</body>
</html>