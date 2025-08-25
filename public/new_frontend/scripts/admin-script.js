// E-Gatepay Admin Portal JavaScript
document.addEventListener("DOMContentLoaded", () => {
  // Import Bootstrap
  const bootstrap = window.bootstrap

  // Initialize tooltips (Bootstrap 5)
  const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  const tooltipList = tooltipTriggerList.map((tooltipTriggerEl) => {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })

  const mobileToggle = document.getElementById("sidebarToggle")
  const sidebar = document.getElementById("adminSidebar")
  const sidebarOverlay = document.getElementById("sidebarOverlay")
  const sidebarClose = document.getElementById("sidebarClose")

  if (mobileToggle && sidebar && sidebarOverlay) {
    // Open sidebar
    mobileToggle.addEventListener("click", (e) => {
      e.preventDefault()
      sidebar.classList.add("mobile-open")
      sidebarOverlay.classList.add("active")
      document.body.style.overflow = "hidden"
    })

    // Close sidebar functions
    const closeSidebar = () => {
      sidebar.classList.remove("mobile-open")
      sidebarOverlay.classList.remove("active")
      document.body.style.overflow = ""
    }

    // Close sidebar when clicking overlay
    sidebarOverlay.addEventListener("click", closeSidebar)

    // Close sidebar when clicking close button
    if (sidebarClose) {
      sidebarClose.addEventListener("click", closeSidebar)
    }

    // Close sidebar when clicking nav links on mobile
    const navLinks = document.querySelectorAll(".nav-link")
    navLinks.forEach((link) => {
      link.addEventListener("click", () => {
        if (window.innerWidth <= 1024) {
          setTimeout(closeSidebar, 150)
        }
      })
    })

    // Handle window resize
    window.addEventListener("resize", () => {
      if (window.innerWidth > 1024) {
        closeSidebar()
      }
    })
  }

  const payableAmount = document.getElementById("payableAmount")
  const merchantAccount = document.getElementById("merchantAccount")

  if (payableAmount && merchantAccount) {
    // Handle payable amount click on mobile
    payableAmount.addEventListener("click", (e) => {
      if (window.innerWidth <= 1024) {
        e.preventDefault()
        const amountText = payableAmount.querySelector(".amount-text")
        const accountText = merchantAccount.querySelector(".account-text")

        // Hide other tooltip if open
        accountText.classList.remove("show")

        // Toggle current tooltip
        amountText.classList.toggle("show")

        // Auto hide after 3 seconds
        setTimeout(() => {
          amountText.classList.remove("show")
        }, 3000)
      }
    })

    // Handle merchant account click on mobile
    merchantAccount.addEventListener("click", (e) => {
      if (window.innerWidth <= 1024) {
        e.preventDefault()
        const accountText = merchantAccount.querySelector(".account-text")
        const amountText = payableAmount.querySelector(".amount-text")

        // Hide other tooltip if open
        amountText.classList.remove("show")

        // Toggle current tooltip
        accountText.classList.toggle("show")

        // Auto hide after 3 seconds
        setTimeout(() => {
          accountText.classList.remove("show")
        }, 3000)
      }
    })

    // Hide tooltips when clicking elsewhere
    document.addEventListener("click", (e) => {
      if (window.innerWidth <= 1024) {
        if (!payableAmount.contains(e.target) && !merchantAccount.contains(e.target)) {
          payableAmount.querySelector(".amount-text").classList.remove("show")
          merchantAccount.querySelector(".account-text").classList.remove("show")
        }
      }
    })
  }

  const currentPage = window.location.pathname.split("/").pop() || "dashboard.html"
  const sidebarLinks = document.querySelectorAll(".nav-link")

  sidebarLinks.forEach((link) => {
    const href = link.getAttribute("href")
    const parentLi = link.closest("li")

    // Remove existing active classes
    parentLi.classList.remove("active")

    if (href === currentPage) {
      parentLi.classList.add("active")

      // If it's a submenu item, also activate parent
      const parentSubmenu = parentLi.closest(".collapse")
      if (parentSubmenu) {
        parentSubmenu.classList.add("show")
        const parentToggle = document.querySelector(`[data-bs-target="#${parentSubmenu.id}"]`)
        if (parentToggle) {
          parentToggle.closest("li").classList.add("active")
        }
      }
    }
  })

  const mobileToggleOld = document.getElementById("mobileToggle") // Changed from "mobileToggle"
  const sidebarOld = document.getElementById("sidebar") // Changed from "sidebar"
  const sidebarOverlayOld = document.getElementById("sidebarOverlay")

  if (mobileToggleOld && sidebarOld && sidebarOverlayOld) {
    mobileToggleOld.addEventListener("click", (e) => {
      e.preventDefault()
      sidebarOld.classList.toggle("mobile-open")
      sidebarOverlayOld.classList.toggle("active")
      document.body.style.overflow = sidebarOld.classList.contains("mobile-open") ? "hidden" : ""
    })

    // Close sidebar when clicking overlay
    sidebarOverlayOld.addEventListener("click", () => {
      sidebarOld.classList.remove("mobile-open")
      sidebarOverlayOld.classList.remove("active")
      document.body.style.overflow = ""
    })

    // Close sidebar when clicking nav links on mobile
    const navLinksOld = document.querySelectorAll(".sidebar-menu a")
    navLinksOld.forEach((link) => {
      link.addEventListener("click", () => {
        if (window.innerWidth <= 992) {
          sidebarOld.classList.remove("mobile-open")
          sidebarOverlayOld.classList.remove("active")
          document.body.style.overflow = ""
        }
      })
    })
  }

  // Submenu toggle functionality
  const submenuToggles = document.querySelectorAll(".submenu-toggle")
  submenuToggles.forEach((toggle) => {
    toggle.addEventListener("click", (e) => {
      // Only prevent default if it's not a direct navigation link
      if (toggle.getAttribute("href") === "#") {
        e.preventDefault()
      }

      const parentLi = toggle.closest("li")
      const submenu = parentLi.querySelector(".submenu")

      if (submenu) {
        parentLi.classList.toggle("active")
        submenu.classList.toggle("show")
      }
    })
  })

  // Auto-hide alerts
  const alerts = document.querySelectorAll(".alert")
  alerts.forEach((alert) => {
    setTimeout(() => {
      alert.classList.add("fade")
      setTimeout(() => {
        alert.remove()
      }, 150)
    }, 5000)
  })

  // Form validation
  const forms = document.querySelectorAll(".needs-validation")
  forms.forEach((form) => {
    form.addEventListener("submit", (event) => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add("was-validated")
    })
  })

  // Search functionality
  const searchInput = document.getElementById("searchInput")
  if (searchInput) {
    searchInput.addEventListener("input", function () {
      const searchTerm = this.value.toLowerCase()
      const tableRows = document.querySelectorAll("tbody tr")

      tableRows.forEach((row) => {
        const text = row.textContent.toLowerCase()
        if (text.includes(searchTerm)) {
          row.style.display = ""
        } else {
          row.style.display = "none"
        }
      })
    })
  }

  // Smooth scrolling for anchor links
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
})

