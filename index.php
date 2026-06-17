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
        <li><a href="#hero" class="active">Home</a></li>
        <li><a href="#about">Over Mij</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projecten</a></li>
        <li><a href="#contact" class="nav-cta">Contact</a></li>
      </ul>
      
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
              <span class="role">Developer &amp; Designer</span>
              <span class="name">Mylène Zijlstra</span>
            </h1>
            
            <p class="hero-desc">
              Ik creëer hoogwaardige, responsieve en esthetische webapplicaties. Focus op prestaties, uitstekend design en schone code.
            </p>
            
            <div class="hero-actions">
              <a href="#projects" class="btn btn-primary">
                Bekijk Projecten <i data-lucide="arrow-right" style="width: 18px; height: 18px;"></i>
              </a>
              <a href="#contact" class="btn btn-outline">
                Neem Contact Op
              </a>
            </div>
            
            <div class="hero-stats">
              <div class="stat">
                <div class="stat-num">2</div>
                <div class="stat-label">Jaar Ervaring</div>
              </div>
              <div class="stat">
                <div class="stat-num">6+</div>
                <div class="stat-label">Projecten</div>
              </div>
              <div class="stat">
                <div class="stat-num">100%</div>
                <div class="stat-label">Tevredenheid</div>
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
          <div class="section-tag">Wie ben ik</div>
          <h2 class="section-title">Gepassioneerd door web en design</h2>
          
          <div class="about-grid" style="margin-top: 3rem;">
            <div class="about-text">
              <p style="margin-bottom: 1.5rem; color: var(--text-secondary);">
                Als developer combineer ik technische functionaliteit met prachtig visueel design. Ik geloof dat software niet alleen goed moet werken, maar dat de gebruikerservaring even belangrijk is.
              </p>
              <p style="color: var(--text-secondary);">
                Of het nu gaat om het bouwen van robuuste backends, interactieve frontends of het ontwerpen van intuïtieve user interfaces — ik pak elke uitdaging met enthousiasme aan.
              </p>
              
              <div class="about-chips">
                <span class="chip">JavaScript</span>
                <span class="chip">PHP</span>
                <span class="chip">Python</span>
                <span class="chip">CSS3</span>
                <span class="chip">React</span>
                <span class="chip">MySQL</span>
              </div>
            </div>
            
            <div class="about-image">
              <div class="about-card">
                <div class="about-card-quote">
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
          <div class="section-tag">Wat ik doe</div>
          <h2 class="section-title">Mijn Expertises</h2>
          <p class="section-subtitle">Een selectie van mijn vaardigheden en tools waarmee ik dagelijks werk.</p>
          
          <div class="skills-grid">
            <!-- Skill 1 -->
            <div class="skill-card">
              <div class="skill-icon"><i data-lucide="layout" style="color: var(--accent-light);"></i></div>
              <h3 class="skill-title">Frontend Development</h3>
              <p class="skill-desc">Gebruiksvriendelijke en interactieve interfaces met moderne technologieën en strakke animaties.</p>
              <div class="skill-tags">
                <span class="skill-tag">HTML5/CSS3</span>
                <span class="skill-tag">JavaScript</span>
                <span class="skill-tag">Vite</span>
              </div>
            </div>
            
            <!-- Skill 2 -->
            <div class="skill-card">
              <div class="skill-icon"><i data-lucide="server" style="color: var(--accent-2);"></i></div>
              <h3 class="skill-title">Backend Development</h3>
              <p class="skill-desc">Robuuste server-side logica, RESTful API's en veilige database integraties.</p>
              <div class="skill-tags">
                <span class="skill-tag">PHP</span>
                <span class="skill-tag">Node.js</span>
                <span class="skill-tag">MySQL</span>
              </div>
            </div>
            
            <!-- Skill 3 -->
            <div class="skill-card">
              <div class="skill-icon"><i data-lucide="terminal" style="color: var(--accent-light);"></i></div>
              <h3 class="skill-title">Tooling &amp; Scripting</h3>
              <p class="skill-desc">Automatisering, scripting in Python en handige CLI-applicaties ter ondersteuning.</p>
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
          <div class="section-tag">Portfolio</div>
          <h2 class="section-title">Uitgelichte Projecten</h2>
          <p class="section-subtitle">Een greep uit de meest recente projecten die ik heb ontworpen en ontwikkeld.</p>
          
          <div class="projects-grid">
            <!-- Project 1 -->
            <div class="project-card">
              <div class="project-thumbnail">
                <i data-lucide="cpu" style="width: 60px; height: 60px; color: var(--accent-light); opacity: 0.8;"></i>
                <div class="overlay">
                  <i data-lucide="external-link"></i>
                </div>
              </div>
              <div class="project-body">
                <div class="project-meta">
                  <span class="project-type">Web Applicatie</span>
                </div>
                <h3 class="project-title">OSINT Profiler Tool</h3>
                <p class="project-desc">Een geautomatiseerd dashboard voor OSINT-analisten om profielinformatie te aggregeren en visualiseren.</p>
                <div class="project-stack">
                  <span class="project-tag">Python</span>
                  <span class="project-tag">Tailwind</span>
                  <span class="project-tag">API Integration</span>
                </div>
              </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card">
              <div class="project-thumbnail">
                <i data-lucide="globe" style="width: 60px; height: 60px; color: var(--accent-2); opacity: 0.8;"></i>
                <div class="overlay">
                  <i data-lucide="external-link"></i>
                </div>
              </div>
              <div class="project-body">
                <div class="project-meta">
                  <span class="project-type">E-Commerce</span>
                </div>
                <h3 class="project-title">Modern Webshop Platform</h3>
                <p class="project-desc">Een volledig responsive, headless e-commerce webshop met snelle laadtijden en een clean checkout proces.</p>
                <div class="project-stack">
                  <span class="project-tag">JavaScript</span>
                  <span class="project-tag">CSS Grid</span>
                  <span class="project-tag">PHP</span>
                </div>
              </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card">
              <div class="project-thumbnail">
                <i data-lucide="palette" style="width: 60px; height: 60px; color: var(--accent-light); opacity: 0.8;"></i>
                <div class="overlay">
                  <i data-lucide="external-link"></i>
                </div>
              </div>
              <div class="project-body">
                <div class="project-meta">
                  <span class="project-type">UI/UX Design</span>
                </div>
                <h3 class="project-title">SaaS Dashboard Mockup</h3>
                <p class="project-desc">Minimalistisch UI concept en interactief dashboard prototype met een verfijnd kleurenpalet.</p>
                <div class="project-stack">
                  <span class="project-tag">Figma</span>
                  <span class="project-tag">Interactive</span>
                  <span class="project-tag">CSS Glow</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Section -->
      <section id="contact" class="reveal">
        <div class="container contact-inner">
          <div class="section-tag">Zeg hallo</div>
          <h2 class="section-title">Laten we samenwerken!</h2>
          <p class="section-subtitle">Heb je een idee, een project dat je wilt realiseren, of wil je gewoon even kennismaken? Stuur me gerust een bericht!</p>
          
          <div class="contact-card">
            <a href="mailto:info@mylenezijlstra.nl" class="contact-email">
              <i data-lucide="mail"></i> info@mylenezijlstra.nl
            </a>
            
            <div class="social-links">
              <a href="#" class="social-link" title="GitHub"><i data-lucide="github"></i></a>
              <a href="#" class="social-link" title="LinkedIn"><i data-lucide="linkedin"></i></a>
              <a href="#" class="social-link" title="Twitter/X"><i data-lucide="twitter"></i></a>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!-- Footer -->
    <footer>
      <p>&copy; <?php echo date("Y"); ?> Mylène Zijlstra. Gemaakt met <span>&hearts;</span> en passie.</p>
    </footer>

  </div>

  <!-- JavaScript logic & Lucide activation -->
  <script src="assets/js/main.js"></script>
  <script>
    // Initialize icons
    lucide.createIcons();
  </script>
</body>
</html>
