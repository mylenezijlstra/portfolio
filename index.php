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
      <a href="#" class="nav-logo">MYLÈNE</a>
      
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
          <h2 class="section-title" data-i18n="about_title">Gepassioneerd door web</h2>
          
          <div class="about-grid" style="margin-top: 3rem;">
            <div class="about-text">
              <p style="margin-bottom: 1.5rem; color: var(--text-secondary);" data-i18n="about_p1">
                Ik ben <?php echo $age; ?> jaar oud en student op het Grafisch Lyceum Utrecht. Op dit moment zit ik in mijn 2e jaar van de opleiding Web Developer.
              </p>
              <p style="color: var(--text-secondary);" data-i18n="about_p2">
                Van het bouwen van een stabiele backend tot het ontwerpen van een strakke interface die lekker werkt: ik vind het allemaal tof om te doen en duik graag in nieuwe technieken.
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
                <span class="skill-tag">GitHub</span>
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
              </div>
              <div class="project-body">
                <div class="project-meta">
                  <span class="project-type" data-i18n="project_osint_type">OSINT Tool · Verdieping Software</span>
                </div>
                <h3 class="project-title" data-i18n="project_osint_title">OSINT Profiler Tool</h3>
              </div>
            </div>

            <!-- Project 2: LoveU Festival App -->
            <div class="project-card" onclick="openModal('modal-5')" role="button" tabindex="0" aria-label="Open details voor LoveU Festival App" data-i18n-aria-label="project_festival_aria">
              <div class="project-thumbnail">
                <img src="assets/img/loveu-festival.png" alt="Festival App screenshot" data-i18n-alt="project_festival_alt">
              </div>
              <div class="project-body">
                <div class="project-meta">
                  <span class="project-type" data-i18n="project_festival_type">Progressive Web App</span>
                </div>
                <h3 class="project-title" data-i18n="project_festival_title">LoveU Festival App</h3>
              </div>
            </div>

            <!-- Project 3: RemoteController -->
            <div class="project-card" onclick="openModal('modal-3')" role="button" tabindex="0" aria-label="Open details voor RemoteController" data-i18n-aria-label="project_remote_aria">
              <div class="project-thumbnail">
                <img src="assets/img/remote-controller.png" alt="RemoteController screenshot" data-i18n-alt="project_remote_alt">
              </div>
              <div class="project-body">
                <div class="project-meta">
                  <span class="project-type" data-i18n="project_remote_type">Media / Afstandsbediening</span>
                </div>
                <h3 class="project-title" data-i18n="project_remote_title">RemoteController</h3>
              </div>
            </div>

            <!-- Project 4: Kiosk Happy Herbivore -->
            <div class="project-card" onclick="openModal('modal-4')" role="button" tabindex="0" aria-label="Open details voor Kiosk Happy Herbivore" data-i18n-aria-label="project_kiosk_aria">
              <div class="project-thumbnail">
                <img src="assets/img/kiosk.png" alt="Kiosk screenshot" data-i18n-alt="project_kiosk_alt">
              </div>
              <div class="project-body">
                <div class="project-meta">
                  <span class="project-type" data-i18n="project_kiosk_type">Touchscreen Kiosk</span>
                </div>
                <h3 class="project-title" data-i18n="project_kiosk_title">Kiosk Happy Herbivore</h3>
              </div>
            </div>

               <!-- Project 5: Het Utrechts Archief -->
            <div class="project-card" onclick="openModal('modal-2')" role="button" tabindex="0" aria-label="Open details voor Het Utrechts Archief" data-i18n-aria-label="project_utrechtsarchief_aria">
              <div class="project-thumbnail">
                <img src="assets/img/utrechts-archief.jpg" alt="Het Utrechts Archief screenshot" data-i18n-alt="project_utrechtsarchief_alt">
              </div>
              <div class="project-body">
                <div class="project-meta">
                  <span class="project-type" data-i18n="project_utrechtsarchief_type">Educatief / Historisch</span>
                </div>
                <h3 class="project-title" data-i18n="project_utrechtsarchief_title">Het Utrechts Archief</h3>
              </div>
            </div>

            <!-- Project 6: Portfolio Website -->
            <div class="project-card" onclick="openModal('modal-6')" role="button" tabindex="0" aria-label="Open details voor Portfolio Website" data-i18n-aria-label="project_portfolio_aria">
              <div class="project-thumbnail">
                <img src="assets/img/portfolio-website.png" alt="Portfolio Website screenshot" data-i18n-alt="project_portfolio_alt">
              </div>
              <div class="project-body">
                <div class="project-meta">
                  <span class="project-type" data-i18n="project_portfolio_type">Web / Design</span>
                </div>
                <h3 class="project-title" data-i18n="project_portfolio_title">Portfolio Website</h3>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- Contact Section -->
      <section id="contact" class="reveal">
        <div class="container contact-inner">
          <div class="section-tag" data-i18n="contact_tag">Zeg hallo</div>
          <h2 class="section-title" data-i18n="contact_title">Neem contact op</h2>
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

  <!-- Modal 2: Het Utrechts Archief -->
  <div class="modal-backdrop" id="modal-2" onclick="closeModalOutside(event,this)">
    <div class="modal" role="dialog" aria-modal="true" aria-labelledby="modal-2-title">
      <button class="modal__close" onclick="closeModal('modal-2')" aria-label="Sluiten" data-i18n-aria-label="modal_close_aria"><i data-lucide="x"></i></button>
      <div class="modal__img">
        <img src="assets/img/utrechts-archief.jpg" alt="Het Utrechts Archief screenshot" data-i18n-alt="project_utrechtsarchief_alt">
      </div>
      <div class="modal__body">
        <div class="modal__meta"><span class="project-type" data-i18n="project_utrechtsarchief_type">Educatief / Historisch</span></div>
        <h2 class="modal__title" id="modal-2-title" data-i18n="project_utrechtsarchief_title">Het Utrechts Archief</h2>
        <p class="modal__desc" data-i18n="project_utrechtsarchief_desc">Een gebruiksvriendelijke webapplicatie voor het doorzoeken en bekijken van historische archiefgegevens uit Utrecht, met een overzichtelijke interface en snelle zoekfunctionaliteit.</p>

        <div class="code-snapshot">
          <div class="code-snapshot__header">
            <div class="code-snapshot__dots"><span></span><span></span><span></span></div>
            <span class="code-snapshot__filename">positioning.php</span>
            <button class="code-snapshot__copy" onclick="copyCode(this)" title="Kopieer code" data-i18n-title="copy_code_title"><i data-lucide="copy" style="width:14px;height:14px;"></i></button>
          </div>
          <pre class="code-snapshot__body"><code><span class="kw">$pos_top</span> = <span class="fn">array_key_exists</span>(<span class="st">'desc_top'</span>, <span class="kw">$data</span>)
    ? (<span class="tp">int</span>)<span class="kw">$data</span>[<span class="st">'desc_top'</span>]
    : (<span class="kw">$existing</span>[<span class="st">'pos_top'</span>] ?? <span class="st">20</span>);</code></pre>
        </div>

        <div style="margin-top: 1rem; margin-bottom: 1rem; padding: 0.75rem 1rem; background: rgba(212, 72, 138, 0.08); border-radius: var(--radius-sm); border: 1.5px solid var(--border-accent); display: flex; align-items: center; gap: 0.5rem; font-size: 0.85rem; color: var(--text-primary);">
          <i data-lucide="info" style="width:16px;height:16px;color:var(--accent);flex-shrink:0;"></i>
          <span>
            <strong data-i18n="modal_utrechtsarchief_login_title">Admin Panel:</strong> 
            <span data-i18n="modal_utrechtsarchief_login_desc">Login: Admin | Wachtwoord: test123</span>
          </span>
        </div>

        <div class="modal__tags">
          <span class="project-tag">HTML</span>
          <span class="project-tag">PHP</span>
          <span class="project-tag">CSS</span>
          <span class="project-tag">JavaScript</span>
        </div>
        <div class="modal__actions" style="flex-wrap: wrap; gap: 0.5rem;">
          <a href="https://github.com/mylenezijlstra/utrechtsarchief-module6.1" target="_blank" class="btn-project btn-project-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:16px;height:16px;margin-right:4px;"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg>
            GitHub
          </a>
          <a href="https://u240381.gluwebsite.nl/utrechtsarchief/archiefbreed.php" target="_blank" class="btn-project btn-project-primary">
            <i data-lucide="external-link" style="width:16px;height:16px;"></i> Live Demo
          </a>
          <a href="https://u240381.gluwebsite.nl/utrechtsarchief/admin/login.php" target="_blank" class="btn-project btn-project-primary">
            <i data-lucide="lock" style="width:16px;height:16px;"></i> Admin Login
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3: RemoteController -->
  <div class="modal-backdrop" id="modal-3" onclick="closeModalOutside(event,this)">
    <div class="modal" role="dialog" aria-modal="true" aria-labelledby="modal-3-title">
      <button class="modal__close" onclick="closeModal('modal-3')" aria-label="Sluiten" data-i18n-aria-label="modal_close_aria"><i data-lucide="x"></i></button>
      <div class="modal__img">
        <img src="assets/img/remote-controller.png" alt="RemoteController screenshot" data-i18n-alt="project_remote_alt">
      </div>
      <div class="modal__body">
        <div class="modal__meta"><span class="project-type" data-i18n="project_remote_type">Media / Afstandsbediening</span></div>
        <h2 class="modal__title" id="modal-3-title" data-i18n="project_remote_title">RemoteController</h2>
        <p class="modal__desc" data-i18n="project_remote_desc">A remote control application for YouTube, allowing users to easily navigate, play, and manage media from their device.</p>

        <div class="code-snapshot">
          <div class="code-snapshot__header">
            <div class="code-snapshot__dots"><span></span><span></span><span></span></div>
            <span class="code-snapshot__filename">server.js</span>
            <button class="code-snapshot__copy" onclick="copyCode(this)" title="Kopieer code" data-i18n-title="copy_code_title"><i data-lucide="copy" style="width:14px;height:14px;"></i></button>
          </div>
          <pre class="code-snapshot__body"><code><span class="kw">io</span>.<span class="fn">on</span>(<span class="st">'connection'</span>, (<span class="kw">socket</span>) =&gt; {
    <span class="kw">socket</span>.<span class="fn">on</span>(<span class="st">'command'</span>, (<span class="kw">data</span>) =&gt; {
        <span class="kw">socket</span>.<span class="kw">broadcast</span>.<span class="fn">emit</span>(<span class="st">'execute'</span>, <span class="kw">data</span>);
    });
});</code></pre>
        </div>

        <div class="modal__tags">
          <span class="project-tag">Node.js</span>
          <span class="project-tag">HTML</span>
          <span class="project-tag">JSON</span>
          <span class="project-tag">CSS</span>
        </div>
        <div class="modal__actions" style="flex-wrap: wrap; gap: 0.5rem;">
          <a href="https://github.com/mylenezijlstra/RemoteController" target="_blank" class="btn-project btn-project-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:16px;height:16px;margin-right:4px;"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg>
            GitHub
          </a>
          <a href="https://remotecontroller-r0oe.onrender.com/" target="_blank" class="btn-project btn-project-primary">
            <i data-lucide="external-link" style="width:16px;height:16px;"></i> Remote Live
          </a>
          <a href="https://remotecontroller-r0oe.onrender.com/screen.html" target="_blank" class="btn-project btn-project-primary">
            <i data-lucide="monitor" style="width:16px;height:16px;"></i> Screen Live
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4: Kiosk Happy Herbivore -->
  <div class="modal-backdrop" id="modal-4" onclick="closeModalOutside(event,this)">
    <div class="modal" role="dialog" aria-modal="true" aria-labelledby="modal-4-title">
      <button class="modal__close" onclick="closeModal('modal-4')" aria-label="Sluiten" data-i18n-aria-label="modal_close_aria"><i data-lucide="x"></i></button>
      <div class="modal__img">
        <img src="assets/img/kiosk.png" alt="Kiosk screenshot" data-i18n-alt="project_kiosk_alt">
      </div>
      <div class="modal__body">
        <div class="modal__meta"><span class="project-type" data-i18n="project_kiosk_type">Touchscreen Kiosk</span></div>
        <h2 class="modal__title" id="modal-4-title" data-i18n="project_kiosk_title">Kiosk Happy Herbivore</h2>
        <p class="modal__desc" data-i18n="project_kiosk_desc">Een interactieve touchscreen-kiosk met een overzichtelijke, meertalige interface waarmee bezoekers snel informatie, locaties en voorzieningen kunnen vinden.</p>

        <div class="code-snapshot">
          <div class="code-snapshot__header">
            <div class="code-snapshot__dots"><span></span><span></span><span></span></div>
            <span class="code-snapshot__filename">get_order.php</span>
            <button class="code-snapshot__copy" onclick="copyCode(this)" title="Kopieer code" data-i18n-title="copy_code_title"><i data-lucide="copy" style="width:14px;height:14px;"></i></button>
          </div>
          <pre class="code-snapshot__body"><code><span class="kw">$items</span> = [];
<span class="kw">$result</span> = <span class="kw">$conn</span>-&gt;<span class="fn">query</span>(<span class="st">"
    SELECT p.name, op.price
    FROM order_product op
    JOIN products p ON op.product_id = p.product_id
    WHERE op.order_id = $order_id
"</span>);

<span class="kw">while</span> (<span class="kw">$row</span> = <span class="kw">$result</span>-&gt;<span class="fn">fetch_assoc</span>()) {
    <span class="kw">$items</span>[] = <span class="kw">$row</span>;
}</code></pre>
        </div>

        <div class="modal__tags">
          <span class="project-tag">API</span>
          <span class="project-tag">PHP</span>
          <span class="project-tag">JavaScript</span>
          <span class="project-tag">HTML</span>
          <span class="project-tag">CSS</span>
        </div>
        <div class="modal__actions" style="flex-wrap: wrap; gap: 0.5rem;">
          <a href="https://github.com/mylenezijlstra/kiosk" target="_blank" class="btn-project btn-project-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:16px;height:16px;margin-right:4px;"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg>
            GitHub
          </a>
          <a href="https://u240381.gluwebsite.nl/kiosk/menu.php?type=hier&lang=nl" target="_blank" class="btn-project btn-project-primary">
            <i data-lucide="external-link" style="width:16px;height:16px;"></i> Menu Kiosk
          </a>
          <a href="https://u240381.gluwebsite.nl/kiosk/kitchen.php" target="_blank" class="btn-project btn-project-primary">
            <i data-lucide="chef-hat" style="width:16px;height:16px;"></i> Kitchen View
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5: LoveU Festival App -->
  <div class="modal-backdrop" id="modal-5" onclick="closeModalOutside(event,this)">
    <div class="modal" role="dialog" aria-modal="true" aria-labelledby="modal-5-title">
      <button class="modal__close" onclick="closeModal('modal-5')" aria-label="Sluiten" data-i18n-aria-label="modal_close_aria"><i data-lucide="x"></i></button>
      <div class="modal__img">
        <img src="assets/img/loveu-festival.png" alt="Festival App screenshot" data-i18n-alt="project_festival_alt">
      </div>
      <div class="modal__body">
        <div class="modal__meta"><span class="project-type" data-i18n="project_festival_type">Progressive Web App</span></div>
        <h2 class="modal__title" id="modal-5-title" data-i18n="project_festival_title">LoveU Festival App</h2>
        <p class="modal__desc" data-i18n="project_festival_desc">LoveU Festival App is een moderne offline-first Progressive Web App (PWA) voor studenten in Utrecht. De app bevat een interactieve timetable, live podiumstatussen, een zoom- en sleepbare festivalkaart, favorieten en volledige offline ondersteuning voor de ultieme festivalervaring.</p>

        <div class="code-snapshot">
          <div class="code-snapshot__header">
            <div class="code-snapshot__dots"><span></span><span></span><span></span></div>
            <span class="code-snapshot__filename">qrcode.js</span>
            <button class="code-snapshot__copy" onclick="copyCode(this)" title="Kopieer code" data-i18n-title="copy_code_title"><i data-lucide="copy" style="width:14px;height:14px;"></i></button>
          </div>
          <pre class="code-snapshot__body"><code><span class="kw">https</span>.<span class="fn">get</span>(<span class="kw">apiUrl</span>, (<span class="kw">res</span>) =&gt; {
  <span class="kw">if</span> (<span class="kw">res</span>.<span class="kw">statusCode</span> !== <span class="st">200</span>) {
    <span class="kw">console</span>.<span class="fn">error</span>(<span class="st">`Failed to generate QR code. Status code: ${res.statusCode}`</span>);
    <span class="kw">return</span>;
  }

  <span class="kw">const</span> <span class="kw">fileStream</span> = <span class="kw">fs</span>.<span class="fn">createWriteStream</span>(<span class="kw">outputPath</span>);
  <span class="kw">res</span>.<span class="fn">pipe</span>(<span class="kw">fileStream</span>);

  <span class="kw">fileStream</span>.<span class="fn">on</span>(<span class="st">'finish'</span>, () =&gt; {
    <span class="kw">fileStream</span>.<span class="fn">close</span>();
    <span class="kw">console</span>.<span class="fn">log</span>(<span class="st">`Successfully saved QR code image to: ${outputPath}`</span>);
  });
}).<span class="fn">on</span>(<span class="st">'error'</span>, (<span class="kw">err</span>) =&gt; {
  <span class="kw">console</span>.<span class="fn">error</span>(<span class="st">`Error requesting QR code: ${err.message}`</span>);
});</code></pre>
        </div>

        <div class="modal__tags">
          <span class="project-tag">JavaScript</span>
          <span class="project-tag">HTML</span>
          <span class="project-tag">CSS</span>
        </div>
        <div class="modal__actions">
          <a href="https://github.com/mylenezijlstra/Festival-App-8.1" target="_blank" class="btn-project btn-project-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:16px;height:16px;margin-right:4px;"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg>
            GitHub
          </a>
          <a href="https://u240381.gluwebsite.nl/loveu/" target="_blank" class="btn-project btn-project-primary">
            <i data-lucide="external-link" style="width:16px;height:16px;"></i> Live Demo
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6: Portfolio Website -->
  <div class="modal-backdrop" id="modal-6" onclick="closeModalOutside(event,this)">
    <div class="modal" role="dialog" aria-modal="true" aria-labelledby="modal-6-title">
      <button class="modal__close" onclick="closeModal('modal-6')" aria-label="Sluiten" data-i18n-aria-label="modal_close_aria"><i data-lucide="x"></i></button>
      <div class="modal__img">
        <img src="assets/img/portfolio-website.png" alt="Portfolio Website screenshot" data-i18n-alt="project_portfolio_alt">
      </div>
      <div class="modal__body">
        <div class="modal__meta"><span class="project-type" data-i18n="project_portfolio_meta">Demo &middot; Web</span></div>
        <h2 class="modal__title" id="modal-6-title" data-i18n="project_portfolio_title">Portfolio Website</h2>
        <p class="modal__desc" data-i18n="project_portfolio_desc">Een persoonlijke portfoliowebsite gebouwd met PHP, CSS en JavaScript. Volledig responsive met vloeiende animaties en een modern design systeem.</p>

        <div class="code-snapshot">
          <div class="code-snapshot__header">
            <div class="code-snapshot__dots"><span></span><span></span><span></span></div>
            <span class="code-snapshot__filename">theme.js</span>
            <button class="code-snapshot__copy" onclick="copyCode(this)" title="Kopieer code" data-i18n-title="copy_code_title"><i data-lucide="copy" style="width:14px;height:14px;"></i></button>
          </div>
          <pre class="code-snapshot__body"><code><span class="kw">const</span> <span class="fn">updateTheme</span> = (<span class="kw">theme</span>) =&gt; {
  <span class="kw">currentTheme</span> = <span class="kw">theme</span>;
  <span class="kw">localStorage</span>.<span class="fn">setItem</span>(<span class="st">'portfolio-theme'</span>, <span class="kw">theme</span>);
  <span class="kw">document</span>.<span class="kw">documentElement</span>.<span class="fn">setAttribute</span>(<span class="st">'data-theme'</span>, <span class="kw">theme</span>);
};</code></pre>
        </div>

        <div class="modal__tags">
          <span class="project-tag">HTML</span>
          <span class="project-tag">PHP</span>
          <span class="project-tag">CSS</span>
          <span class="project-tag">JavaScript</span>
        </div>
        <div class="modal__actions">
          <a href="https://github.com/mylenezijlstra/portfolio" target="_blank" class="btn-project btn-project-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:16px;height:16px;margin-right:4px;"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg>
            GitHub
          </a>
          <a href="#" class="btn-project btn-project-primary"><i data-lucide="external-link" style="width:16px;height:16px;"></i> Live Demo</a>
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
</html>tivation -->
  <script src="assets/js/main.js"></script>
  <script>
    lucide.createIcons();
  </script>
</body>
</html>