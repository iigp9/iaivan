/**
 * iaivan Theme Scripts
 * Scripts personalizados para el tema
 */

document.addEventListener("DOMContentLoaded", () => {
  // Inicializar iconos Lucide si está disponible
  const lucide = window.lucide // Declare the variable before using it
  if (typeof lucide !== "undefined") {
    lucide.createIcons()
  }

  // Smooth scroll para enlaces internos
  const smoothScrollLinks = document.querySelectorAll('a[href^="#"]')
  smoothScrollLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      const href = this.getAttribute("href")
      if (href !== "#" && document.querySelector(href)) {
        e.preventDefault()
        const target = document.querySelector(href)
        target.scrollIntoView({
          behavior: "smooth",
          block: "start",
        })
      }
    })
  })

  // Efecto de aparición al hacer scroll
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = "1"
        entry.target.style.transform = "translateY(0)"
      }
    })
  }, observerOptions)

  // Aplicar efecto a las tarjetas de servicio
  const serviceCards = document.querySelectorAll(".service-card")
  serviceCards.forEach((card) => {
    card.style.opacity = "0"
    card.style.transform = "translateY(30px)"
    card.style.transition = "opacity 0.6s ease, transform 0.6s ease"
    observer.observe(card)
  })
})
