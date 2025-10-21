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
