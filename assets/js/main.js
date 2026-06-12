/* ============================
   Portfolio — Mylène Zijlstra
   main.js
   ============================ */

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
      // Toggle class on container or simulate custom view
      hamburger.classList.toggle('active');
      navLinksContainer.classList.toggle('active');
      
      // Simple CSS transition toggle for active links in style.css or direct mapping
      if (navLinksContainer.classList.contains('active')) {
        navLinksContainer.style.display = 'flex';
        navLinksContainer.style.flexDirection = 'column';
        navLinksContainer.style.position = 'absolute';
        navLinksContainer.style.top = '68px';
        navLinksContainer.style.left = '0';
        navLinksContainer.style.right = '0';
        navLinksContainer.style.background = 'rgba(10, 15, 30, 0.95)';
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
      const elementVisible = 120; // threshold

      if (elementTop < windowHeight - elementVisible) {
        revealElements[i].classList.add('visible');
      }
    }
  };

  window.addEventListener('scroll', revealOnScroll);
  // Trigger on initial page load
  revealOnScroll();
});
