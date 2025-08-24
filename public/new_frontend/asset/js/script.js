document.addEventListener("DOMContentLoaded", () => {
  // Enhanced smooth scrolling for navigation links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault()
      const target = document.querySelector(this.getAttribute("href"))
      if (target) {
        target.scrollIntoView({
          behavior: "smooth",
          block: "start",
        })
      }
    })
  })

  // Advanced parallax scrolling for hero background elements
  window.addEventListener("scroll", () => {
    const scrolled = window.pageYOffset
    const shapes = document.querySelectorAll(".floating-shape")

    shapes.forEach((shape, index) => {
      const speed = 0.2 + index * 0.1
      const yPos = -(scrolled * speed)
      const rotation = scrolled * (0.1 + index * 0.05)
      shape.style.transform = `translateY(${yPos}px) rotate(${rotation}deg)`
    })
  })

  // Enhanced intersection observer for animations
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("animate-in")

        // Staggered animations for cards
        if (
          entry.target.classList.contains("service-card") ||
          entry.target.classList.contains("industry-card") ||
          entry.target.classList.contains("onboarding-step")
        ) {
          const cards = entry.target.parentElement.querySelectorAll(".service-card, .industry-card, .onboarding-step")
          cards.forEach((card, index) => {
            setTimeout(() => {
              card.style.opacity = "1"
              card.style.transform = "translateY(0)"
            }, index * 150)
          })
        }
      }
    })
  }, observerOptions)

  // Observe all animated elements
  document
    .querySelectorAll(".service-card, .industry-card, .onboarding-step, .feature-item, .about-feature")
    .forEach((el) => {
      observer.observe(el)
    })

  // Advanced counter animation for statistics
  function animateCounter(element, target, duration = 2500) {
    let start = 0
    const increment = target / (duration / 16)

    function updateCounter() {
      start += increment
      if (start < target) {
        // Handle different number formats
        if (element.textContent.includes("$")) {
          element.textContent = "$" + (start / 1000000000).toFixed(1) + "B+"
        } else if (element.textContent.includes("%")) {
          element.textContent = start.toFixed(1) + "%"
        } else if (element.textContent.includes("150")) {
          element.textContent = Math.floor(start) + "+"
        } else {
          element.textContent = Math.floor(start).toLocaleString()
        }
        requestAnimationFrame(updateCounter)
      } else {
        // Set final values
        if (element.textContent.includes("$")) {
          element.textContent = "$2.5B+"
        } else if (element.textContent.includes("%")) {
          element.textContent = "99.9%"
        } else if (element.textContent.includes("150")) {
          element.textContent = "150+"
        }
      }
    }
    updateCounter()
  }

  // Animate statistics when they come into view
  const statNumbers = document.querySelectorAll(".stat-number, .metric-number, .stat-value")
  const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting && !entry.target.classList.contains("animated")) {
        entry.target.classList.add("animated")
        const text = entry.target.textContent

        if (text.includes("$")) {
          animateCounter(entry.target, 2500000000)
        } else if (text.includes("%")) {
          animateCounter(entry.target, 99.9)
        } else if (text.includes("150")) {
          animateCounter(entry.target, 150)
        } else if (text.includes("2.5M")) {
          animateCounter(entry.target, 2500000)
        } else if (text.includes("1.2")) {
          animateCounter(entry.target, 1.2)
        }
      }
    })
  }, observerOptions)

  statNumbers.forEach((stat) => {
    statsObserver.observe(stat)
  })

  // Enhanced button interactions
  document.querySelectorAll(".btn-primary").forEach((btn) => {
    btn.addEventListener("mouseenter", function () {
      this.style.transform = "translateY(-3px) scale(1.02)"
      this.style.boxShadow = "0 15px 35px rgba(240, 79, 54, 0.4)"
    })

    btn.addEventListener("mouseleave", function () {
      this.style.transform = "translateY(0) scale(1)"
      this.style.boxShadow = "0 10px 15px rgba(0, 0, 0, 0.1)"
    })
  })

  // Advanced floating card animations
  function animateFloatingElements() {
    const floatingCards = document.querySelectorAll(".floating-ui-card, .floating-metric, .floating-benefit")

    floatingCards.forEach((card, index) => {
      const baseDelay = index * 2000

      setInterval(() => {
        const randomY = (Math.random() - 0.5) * 25
        const randomX = (Math.random() - 0.5) * 15
        const randomRotate = (Math.random() - 0.5) * 10

        card.style.transform = `translate(${randomX}px, ${randomY}px) rotate(${randomRotate}deg)`

        setTimeout(() => {
          card.style.transform = "translate(0, 0) rotate(0deg)"
        }, 2500)
      }, 5000 + baseDelay)
    })
  }

  // Initialize floating animations
  setTimeout(animateFloatingElements, 1500)

  // Enhanced navbar scroll behavior
  let lastScrollTop = 0
  const navbar = document.querySelector(".navbar")

  window.addEventListener("scroll", () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop

    if (scrollTop > 100) {
      navbar.classList.add("scrolled")
    } else {
      navbar.classList.remove("scrolled")
    }

    // Hide/show navbar on scroll
    if (scrollTop > lastScrollTop && scrollTop > 200) {
      navbar.style.transform = "translateY(-100%)"
    } else {
      navbar.style.transform = "translateY(0)"
    }

    lastScrollTop = scrollTop
  })

  // Enhanced card hover effects
  document.querySelectorAll(".service-card, .industry-card").forEach((card) => {
    card.addEventListener("mouseenter", function () {
      this.style.transform = "translateY(-10px) scale(1.02)"

      // Add glow effect to icon
      const icon = this.querySelector(".service-icon, .industry-icon")
      if (icon) {
        icon.style.boxShadow = "0 0 30px rgba(240, 79, 54, 0.5)"
        icon.style.transform = "scale(1.1)"
      }
    })

    card.addEventListener("mouseleave", function () {
      this.style.transform = "translateY(0) scale(1)"

      // Remove glow effect
      const icon = this.querySelector(".service-icon, .industry-icon")
      if (icon) {
        icon.style.boxShadow = "none"
        icon.style.transform = "scale(1)"
      }
    })
  })

  // Advanced form interactions
  document.querySelectorAll("input, textarea").forEach((input) => {
    input.addEventListener("focus", function () {
      this.style.borderColor = "var(--primary-color)"
      this.style.boxShadow = "0 0 0 3px rgba(240, 79, 54, 0.1)"
      this.style.transform = "scale(1.02)"
    })

    input.addEventListener("blur", function () {
      this.style.borderColor = ""
      this.style.boxShadow = ""
      this.style.transform = "scale(1)"
    })
  })

  // Enhanced loading animations for sections
  const sections = document.querySelectorAll("section")
  const sectionObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const title = entry.target.querySelector(".section-title")
          const subtitle = entry.target.querySelector(".section-subtitle")
          const description = entry.target.querySelector(".section-description")

          if (title) {
            title.style.animation = "fadeInUp 0.8s ease-out"
          }
          if (subtitle) {
            subtitle.style.animation = "fadeInUp 0.8s ease-out 0.2s both"
          }
          if (description) {
            description.style.animation = "fadeInUp 0.8s ease-out 0.4s both"
          }
        }
      })
    },
    { threshold: 0.3 },
  )

  sections.forEach((section) => {
    sectionObserver.observe(section)
  })

  // Advanced cursor effects for interactive elements
  document.querySelectorAll(".btn, .nav-link, .service-card, .industry-card").forEach((element) => {
    element.addEventListener("mouseenter", () => {
      document.body.style.cursor = "pointer"
    })

    element.addEventListener("mouseleave", () => {
      document.body.style.cursor = "default"
    })
  })

  // Enhanced mobile menu interactions
  const navbarToggler = document.querySelector(".navbar-toggler")
  const navbarCollapse = document.querySelector(".navbar-collapse")

  if (navbarToggler) {
    navbarToggler.addEventListener("click", function () {
      this.style.transform = "scale(0.95)"
      setTimeout(() => {
        this.style.transform = "scale(1)"
      }, 150)
    })
  }

  function preloadImages() {
    const imageUrls = [
      "https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
      "https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
      "https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
    ]

    imageUrls.forEach((url) => {
      const img = new Image()
      img.crossOrigin = "anonymous"
      img.src = url
    })
  }

  // Initialize image preloading
  preloadImages()

  // Add dynamic CSS animations
  const style = document.createElement("style")
  style.textContent = `
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    @keyframes slideInLeft {
      from {
        opacity: 0;
        transform: translateX(-30px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }
    
    @keyframes slideInRight {
      from {
        opacity: 0;
        transform: translateX(30px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }
    
    .service-card, .industry-card, .onboarding-step {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .animate-in {
      opacity: 1 !important;
      transform: translateY(0) !important;
    }
    
    .floating-ui-card, .floating-metric, .floating-benefit {
      animation-play-state: running;
    }

    /* Enhanced image loading states */
    img {
     
    }
    
    img[src*="unsplash"] {
      background: linear-gradient(135deg, #f1f5f9, #e2e8f0);
      min-height: 200px;
      object-fit: cover;
    }
    
    @media (prefers-reduced-motion: reduce) {
      * {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
      }
    }
  `
  document.head.appendChild(style)

  const images = document.querySelectorAll("img")
  const imageObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const img = entry.target

   
       
       

       

        // Handle load errors
        img.onerror = () => {
          console.warn(`Failed to load image: ${img.src}`)
          img.style.opacity = "1"
          // Keep the image element but it will show broken image or fallback
        }

        imageObserver.unobserve(img)
      }
    })
  })

  images.forEach((img) => {
    imageObserver.observe(img)
  })
})
