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

  // Initialize charts after a short delay to ensure Chart.js is loaded
  function initializeCharts() {
    if (typeof window.Chart !== "undefined") {
      // Volume by Currency Chart (Bar Chart)
      const volumeByCurrencyCtx = document.getElementById("volumeByCurrencyChart")
      if (volumeByCurrencyCtx) {
        new window.Chart(volumeByCurrencyCtx, {
          type: "bar",
          data: {
            labels: ["Card", "Mobile"],
            datasets: [
              {
                label: "Collections",
                data: [1120, 0],
                backgroundColor: "#10b981",
                borderRadius: 8,
                maxBarThickness: 80,
              },
              {
                label: "Disbursals",
                data: [300, 0],
                backgroundColor: "#f04f36",
                borderRadius: 8,
                maxBarThickness: 80,
              },
            ],
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: {
                position: "top",
                align: "center",
                labels: {
                  usePointStyle: true,
                  padding: 20,
                  font: {
                    family: "Poppins",
                    size: 12,
                  },
                },
              },
            },
            scales: {
              x: {
                grid: {
                  display: false,
                },
                ticks: {
                  font: {
                    family: "Poppins",
                    size: 11,
                  },
                },
              },
              y: {
                beginAtZero: true,
                max: 1200,
                grid: {
                  color: "#e2e8f0",
                },
                ticks: {
                  font: {
                    family: "Poppins",
                    size: 11,
                  },
                },
              },
            },
          },
        })
      }

      // Daily Volume vs Transaction Count Chart (Line Chart)
      const dailyVolumeCtx = document.getElementById("dailyVolumeChart")
      if (dailyVolumeCtx) {
        new window.Chart(dailyVolumeCtx, {
          type: "line",
          data: {
            labels: ["2025-08-21", "2025-08-22", "2025-08-23", "2025-08-24"],
            datasets: [
              {
                label: "Volume",
                data: [800, 950, 1100, 1200],
                borderColor: "#10b981",
                backgroundColor: "rgba(16, 185, 129, 0.1)",
                tension: 0.4,
                fill: true,
              },
              {
                label: "Transactions",
                data: [600, 750, 850, 900],
                borderColor: "#60a5fa",
                backgroundColor: "rgba(96, 165, 250, 0.1)",
                tension: 0.4,
                fill: true,
              },
            ],
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: {
                position: "top",
                align: "center",
                labels: {
                  usePointStyle: true,
                  padding: 20,
                  font: {
                    family: "Poppins",
                    size: 12,
                  },
                },
              },
            },
            scales: {
              x: {
                grid: {
                  color: "#e2e8f0",
                },
                ticks: {
                  font: {
                    family: "Poppins",
                    size: 11,
                  },
                },
              },
              y: {
                beginAtZero: true,
                max: 1200,
                grid: {
                  color: "#e2e8f0",
                },
                ticks: {
                  font: {
                    family: "Poppins",
                    size: 11,
                  },
                },
              },
            },
          },
        })
      }

      // Weekly Volume vs Transaction Count Chart (Line Chart)
      const weeklyVolumeCtx = document.getElementById("weeklyVolumeChart")
      if (weeklyVolumeCtx) {
        new window.Chart(weeklyVolumeCtx, {
          type: "line",
          data: {
            labels: ["202534", "202535", "202536", "202537"],
            datasets: [
              {
                label: "Volume",
                data: [900, 1000, 1100, 1200],
                borderColor: "#f89043",
                backgroundColor: "rgba(248, 144, 67, 0.1)",
                tension: 0.4,
                fill: true,
              },
              {
                label: "Transactions",
                data: [700, 800, 850, 900],
                backgroundColor: "rgba(96, 165, 250, 0.1)",
                borderColor: "#60a5fa",
                tension: 0.4,
                fill: true,
              },
            ],
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: {
                position: "top",
                align: "center",
                labels: {
                  usePointStyle: true,
                  padding: 20,
                  font: {
                    family: "Poppins",
                    size: 12,
                  },
                },
              },
            },
            scales: {
              x: {
                grid: {
                  color: "#e2e8f0",
                },
                ticks: {
                  font: {
                    family: "Poppins",
                    size: 11,
                  },
                },
              },
              y: {
                beginAtZero: true,
                max: 1200,
                grid: {
                  color: "#e2e8f0",
                },
                ticks: {
                  font: {
                    family: "Poppins",
                    size: 11,
                  },
                },
              },
            },
          },
        })
      }
    } else {
      setTimeout(initializeCharts, 100)
    }
  }

  // Initialize charts after a short delay to ensure Chart.js is loaded
  setTimeout(initializeCharts, 200)

  // Real-time updates simulation
  // function updateStats() {
  //   const statsElements = document.querySelectorAll(".stats-value")
  //   statsElements.forEach((element) => {
  //     const currentValue = Number.parseFloat(element.textContent.replace(/[$,]/g, ""))
  //     const newValue = currentValue + (Math.random() * 100 - 50)
  //     if (newValue > 0) {
  //       element.textContent = "$" + newValue.toFixed(2)
  //     }
  //   })
  // }

  // Update stats every 30 seconds (for demo purposes)
  // setInterval(updateStats, 30000)

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

  // Copy to clipboard functionality
  function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
      // Show success message
      const toast = document.createElement("div")
      toast.className = "toast align-items-center text-white bg-success border-0"
      toast.innerHTML = `
                <div class="d-flex">
                    <div class="toast-body">
                        Copied to clipboard!
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            `
      document.body.appendChild(toast)
      const bsToast = new bootstrap.Toast(toast)
      bsToast.show()

      setTimeout(() => {
        toast.remove()
      }, 3000)
    })
  }

  // Add copy functionality to transaction IDs
  document.querySelectorAll("[data-copy]").forEach((element) => {
    element.addEventListener("click", function () {
      copyToClipboard(this.dataset.copy)
    })
  })

  // Initialize date range picker if jQuery and daterangepicker are available
  function initializeDateRangePicker() {
    if (typeof window.$ !== "undefined" && typeof window.$.fn.daterangepicker !== "undefined") {
      const dateRangeInput = document.getElementById("dateRangePicker")
      if (dateRangeInput) {
        window.$(dateRangeInput).daterangepicker({
          startDate: window.moment().subtract(29, "days"),
          endDate: window.moment(),
          ranges: {
            Today: [window.moment(), window.moment()],
            Yesterday: [window.moment().subtract(1, "days"), window.moment().subtract(1, "days")],
            "Last 7 Days": [window.moment().subtract(6, "days"), window.moment()],
            "Last 30 Days": [window.moment().subtract(29, "days"), window.moment()],
            "This Month": [window.moment().startOf("month"), window.moment().endOf("month")],
            "Last Month": [
              window.moment().subtract(1, "month").startOf("month"),
              window.moment().subtract(1, "month").endOf("month"),
            ],
          },
          locale: {
            format: "MMM DD, YYYY",
          },
        })

        const filterBtn = document.getElementById("filterBtn")
        if (filterBtn) {
          filterBtn.addEventListener("click", () => {
            const dateRange = window.$(dateRangeInput).val()
            const currencyFilter = document.getElementById("currencyFilter")
            const currency = currencyFilter ? currencyFilter.value : ""

            console.log("[v0] Filtering with:", { dateRange, currency })

            // Show loading state
            filterBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i>Filtering...'
            filterBtn.disabled = true

            // Simulate filter operation
            setTimeout(() => {
              filterBtn.innerHTML = '<i class="fas fa-search me-1"></i>Search'
              filterBtn.disabled = false

              // Show success message
              if (window.EGatePayAdmin) {
                window.EGatePayAdmin.showAlert(
                  `Filtered transactions for ${dateRange}${currency ? ` in ${currency}` : ""}`,
                  "success",
                )
              }
            }, 1500)
          })
        }
      }
    } else {
      // Retry after a short delay if libraries aren't loaded yet
      setTimeout(initializeDateRangePicker, 100)
    }
  }

  setTimeout(initializeDateRangePicker, 300)
})

// Export functions for global use
window.EGatePayAdmin = {
  showAlert: (message, type = "info") => {
    const alertDiv = document.createElement("div")
    alertDiv.className = `alert alert-${type} alert-dismissible fade show`
    alertDiv.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `

    const container = document.querySelector(".admin-main .container-fluid")
    if (container) {
      container.insertBefore(alertDiv, container.firstChild)
    }

    setTimeout(() => {
      alertDiv.classList.add("fade")
      setTimeout(() => {
        alertDiv.remove()
      }, 150)
    }, 5000)
  },

  refreshData: function () {
    // Simulate data refresh
    const loadingElements = document.querySelectorAll(".loading-placeholder")
    loadingElements.forEach((element) => {
      element.classList.add("loading")
    })

    setTimeout(() => {
      loadingElements.forEach((element) => {
        element.classList.remove("loading")
      })
      this.showAlert("Data refreshed successfully!", "success")
    }, 2000)
  },
}
