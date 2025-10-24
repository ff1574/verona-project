// ===================================
// Image Lightbox
// ===================================

document.addEventListener("DOMContentLoaded", function () {
  // Create lightbox elements
  const lightbox = document.createElement("div");
  lightbox.className = "lightbox";
  lightbox.innerHTML = `
    <div class="lightbox-backdrop"></div>
    <div class="lightbox-content">
      <button class="lightbox-close" aria-label="Close lightbox">&times;</button>
      <button class="lightbox-prev" aria-label="Previous image">‹</button>
      <button class="lightbox-next" aria-label="Next image">›</button>
      <img src="" alt="" class="lightbox-image" />
      <div class="lightbox-caption"></div>
    </div>
  `;
  document.body.appendChild(lightbox);

  // Get all gallery images
  const galleryImages = document.querySelectorAll(".gallery-image");
  let currentIndex = 0;
  let imageArray = [];

  // Convert NodeList to array and store image data
  galleryImages.forEach((img, index) => {
    imageArray.push({
      src: img.src,
      alt: img.alt,
    });

    // Add click event to each image
    img.style.cursor = "pointer";
    img.addEventListener("click", function () {
      openLightbox(index);
    });
  });

  // Lightbox elements
  const lightboxImg = lightbox.querySelector(".lightbox-image");
  const lightboxCaption = lightbox.querySelector(".lightbox-caption");
  const closeBtn = lightbox.querySelector(".lightbox-close");
  const prevBtn = lightbox.querySelector(".lightbox-prev");
  const nextBtn = lightbox.querySelector(".lightbox-next");
  const backdrop = lightbox.querySelector(".lightbox-backdrop");

  // Open lightbox
  function openLightbox(index) {
    currentIndex = index;
    updateLightboxImage();
    lightbox.classList.add("lightbox-active");
    document.body.style.overflow = "hidden";
  }

  // Close lightbox
  function closeLightbox() {
    lightbox.classList.remove("lightbox-active");
    document.body.style.overflow = "";
  }

  // Update lightbox image
  function updateLightboxImage() {
    const currentImage = imageArray[currentIndex];
    lightboxImg.src = currentImage.src;
    lightboxImg.alt = currentImage.alt;
    lightboxCaption.textContent = currentImage.alt;

    // Show/hide navigation buttons
    prevBtn.style.display = currentIndex === 0 ? "none" : "block";
    nextBtn.style.display =
      currentIndex === imageArray.length - 1 ? "none" : "block";
  }

  // Navigate to previous image
  function prevImage() {
    if (currentIndex > 0) {
      currentIndex--;
      updateLightboxImage();
    }
  }

  // Navigate to next image
  function nextImage() {
    if (currentIndex < imageArray.length - 1) {
      currentIndex++;
      updateLightboxImage();
    }
  }

  // Event listeners
  closeBtn.addEventListener("click", closeLightbox);
  backdrop.addEventListener("click", closeLightbox);
  prevBtn.addEventListener("click", prevImage);
  nextBtn.addEventListener("click", nextImage);

  // Keyboard navigation
  document.addEventListener("keydown", function (e) {
    if (!lightbox.classList.contains("lightbox-active")) return;

    switch (e.key) {
      case "Escape":
        closeLightbox();
        break;
      case "ArrowLeft":
        prevImage();
        break;
      case "ArrowRight":
        nextImage();
        break;
    }
  });
});

// ===================================
// Mobile Navigation Toggle & Scroll Detection
// ===================================

document.addEventListener("DOMContentLoaded", function () {
  const navbar = document.querySelector(".navbar");
  const navbarToggle = document.querySelector(".navbar-toggle");
  const navbarMenu = document.querySelector(".navbar-menu");

  // Create backdrop element
  const backdrop = document.createElement("div");
  backdrop.className = "navbar-backdrop";
  document.body.appendChild(backdrop);

  let lastScrollY = window.scrollY;
  let scrollThreshold = 100; // Show navbar after scrolling 100px

  // Scroll detection
  function handleScroll() {
    const currentScrollY = window.scrollY;
    
    if (currentScrollY > scrollThreshold) {
      navbar.classList.add("navbar-visible");
    } else {
      navbar.classList.remove("navbar-visible");
      // Close mobile menu if open when navbar hides
      if (navbarMenu.classList.contains("active")) {
        closeMenu();
      }
    }

    lastScrollY = currentScrollY;
  }

  // Toggle menu
  function toggleMenu() {
    navbarToggle.classList.toggle("active");
    navbarMenu.classList.toggle("active");
    backdrop.classList.toggle("active");

    // Prevent body scroll when menu is open
    if (navbarMenu.classList.contains("active")) {
      document.body.style.overflow = "hidden";
    } else {
      document.body.style.overflow = "";
    }
  }

  // Close menu
  function closeMenu() {
    navbarToggle.classList.remove("active");
    navbarMenu.classList.remove("active");
    backdrop.classList.remove("active");
    document.body.style.overflow = "";
  }

  // Event listeners
  window.addEventListener("scroll", handleScroll);
  navbarToggle.addEventListener("click", toggleMenu);
  backdrop.addEventListener("click", closeMenu);

  // Close menu when clicking a link
  const navbarLinks = document.querySelectorAll(".navbar-link");
  navbarLinks.forEach((link) => {
    link.addEventListener("click", closeMenu);
  });

  // Set active link based on current page
  const currentPath = window.location.pathname;
  navbarLinks.forEach((link) => {
    const linkHref = link.getAttribute("href");
    if (linkHref && currentPath.includes(linkHref)) {
      link.classList.add("active");
    }
  });

  // Initial check in case page is loaded scrolled down
  handleScroll();
});
