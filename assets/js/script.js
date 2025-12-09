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
  let isAnimating = false;

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
    const currentImage = imageArray[currentIndex];

    // Set image immediately on open
    lightboxImg.src = currentImage.src;
    lightboxImg.alt = currentImage.alt;
    lightboxCaption.textContent = currentImage.alt;

    // Apply zoom-in animation
    lightboxImg.className = "lightbox-image";
    setTimeout(() => {
      lightboxImg.classList.add("zoom-in");
    }, 10);

    updateNavigationButtons();
    lightbox.classList.add("lightbox-active");
    document.body.style.overflow = "hidden";
  }

  // Close lightbox
  function closeLightbox() {
    lightbox.classList.remove("lightbox-active");
    document.body.style.overflow = "";
    lightboxImg.className = "lightbox-image";
  }

  // Update navigation button visibility
  function updateNavigationButtons() {
    prevBtn.style.display = currentIndex === 0 ? "none" : "flex";
    nextBtn.style.display =
      currentIndex === imageArray.length - 1 ? "none" : "flex";
  }

  // Navigate with slide animation
  function navigateToImage(newIndex, direction) {
    if (isAnimating || newIndex < 0 || newIndex >= imageArray.length) return;

    isAnimating = true;
    const outClass =
      direction === "next" ? "slide-out-left" : "slide-out-right";
    const inClass = direction === "next" ? "slide-in-right" : "slide-in-left";

    // Step 1: Slide out current image
    lightboxImg.className = "lightbox-image " + outClass;

    // Step 2: After slide-out completes, change image and slide in
    setTimeout(() => {
      currentIndex = newIndex;
      const newImage = imageArray[currentIndex];

      // Preload the new image
      const img = new Image();
      img.onload = function () {
        // Update DOM
        lightboxImg.src = newImage.src;
        lightboxImg.alt = newImage.alt;
        lightboxCaption.textContent = newImage.alt;
        updateNavigationButtons();

        // Slide in new image
        lightboxImg.className = "lightbox-image " + inClass;

        // Reset animation lock after slide-in completes
        setTimeout(() => {
          isAnimating = false;
          lightboxImg.className = "lightbox-image"; // Clean up classes
        }, 400);
      };

      img.onerror = function () {
        // Fallback if image fails to load
        lightboxImg.src = newImage.src;
        lightboxImg.alt = newImage.alt;
        lightboxCaption.textContent = newImage.alt;
        updateNavigationButtons();
        isAnimating = false;
        lightboxImg.className = "lightbox-image";
      };

      img.src = newImage.src;
    }, 400); // Wait for slide-out animation to complete
  }

  // Navigate to previous image
  function prevImage() {
    if (currentIndex > 0) {
      navigateToImage(currentIndex - 1, "prev");
    }
  }

  // Navigate to next image
  function nextImage() {
    if (currentIndex < imageArray.length - 1) {
      navigateToImage(currentIndex + 1, "next");
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
  const indicator = document.getElementById("navbar-show-indicator");
  const navbarToggle = document.querySelector(".navbar-toggle");
  const navbarMenu = document.querySelector(".navbar-menu");

  // Create backdrop element
  const backdrop = document.createElement("div");
  backdrop.className = "navbar-backdrop";
  document.body.appendChild(backdrop);

  let lastScrollY = window.scrollY;
  let scrollThreshold = 100; // Show navbar after scrolling 100px
  let manuallyOpened = false; // Track if user clicked the indicator

  // Navbar indicator click handler
  if (navbar && indicator) {
    indicator.addEventListener("click", function () {
      navbar.classList.add("navbar-visible");
      manuallyOpened = true; // Flag that user manually opened it
    });
  }

  // Scroll detection
  function handleScroll() {
    const currentScrollY = window.scrollY;

    if (currentScrollY > scrollThreshold) {
      navbar.classList.add("navbar-visible");
      manuallyOpened = false; // Reset flag when auto-showing via scroll
    } else if (currentScrollY < 50 && !manuallyOpened) {
      // Only hide if near top AND not manually opened
      navbar.classList.remove("navbar-visible");
      // Close mobile menu if open when navbar hides
      if (navbarMenu.classList.contains("active")) {
        closeMenu();
      }
    } else if (manuallyOpened && currentScrollY < 10) {
      // Reset manual flag if user scrolls back to very top
      manuallyOpened = false;
      navbar.classList.remove("navbar-visible");
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
