// ===================================
// Comments Form Validation
// ===================================

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("commentForm");
  const nameInput = document.getElementById("name");
  const commentInput = document.getElementById("comment");
  const nameError = document.getElementById("nameError");
  const commentError = document.getElementById("commentError");
  const submitBtn = document.getElementById("submitBtn");

  // Exit if form doesn't exist on the page
  if (!form) return;

  // Validation rules
  const validationRules = {
    name: {
      required: true,
      minLength: 2,
      maxLength: 100,
      pattern: /^[a-zA-Z\s\-'\.]+$/,
      messages: {
        required: "Name is required.",
        minLength: "Name must be at least 2 characters long.",
        maxLength: "Name must be less than 100 characters.",
        pattern: "Name can only contain letters, spaces, hyphens, apostrophes, and periods."
      }
    },
    comment: {
      required: true,
      minLength: 10,
      maxLength: 1000,
      messages: {
        required: "Comment is required.",
        minLength: "Comment must be at least 10 characters long.",
        maxLength: "Comment must be less than 1000 characters."
      }
    }
  };

  // Validate a single field
  function validateField(input, rules, errorElement) {
    const value = input.value.trim();
    let isValid = true;
    let errorMessage = "";

    // Check required
    if (rules.required && value === "") {
      isValid = false;
      errorMessage = rules.messages.required;
    }
    // Check minLength
    else if (rules.minLength && value.length < rules.minLength) {
      isValid = false;
      errorMessage = rules.messages.minLength;
    }
    // Check maxLength
    else if (rules.maxLength && value.length > rules.maxLength) {
      isValid = false;
      errorMessage = rules.messages.maxLength;
    }
    // Check pattern (if exists)
    else if (rules.pattern && !rules.pattern.test(value)) {
      isValid = false;
      errorMessage = rules.messages.pattern;
    }

    // Update UI
    if (isValid) {
      input.classList.remove("error");
      errorElement.textContent = "";
      errorElement.classList.remove("visible");
    } else {
      input.classList.add("error");
      errorElement.textContent = errorMessage;
      errorElement.classList.add("visible");
    }

    return isValid;
  }

  // Validate entire form
  function validateForm() {
    const isNameValid = validateField(nameInput, validationRules.name, nameError);
    const isCommentValid = validateField(commentInput, validationRules.comment, commentError);
    return isNameValid && isCommentValid;
  }

  // Real-time validation on input
  nameInput.addEventListener("input", function () {
    validateField(nameInput, validationRules.name, nameError);
  });

  commentInput.addEventListener("input", function () {
    validateField(commentInput, validationRules.comment, commentError);
  });

  // Validate on blur (when user leaves field)
  nameInput.addEventListener("blur", function () {
    validateField(nameInput, validationRules.name, nameError);
  });

  commentInput.addEventListener("blur", function () {
    validateField(commentInput, validationRules.comment, commentError);
  });

  // Form submission
  form.addEventListener("submit", function (e) {
    // Validate form before submission
    if (!validateForm()) {
      e.preventDefault();
      return false;
    }

    // Disable submit button to prevent double submission
    submitBtn.disabled = true;
    submitBtn.textContent = "Submitting...";
  });

  // Sanitize input to prevent XSS (additional client-side protection)
  function sanitizeInput(str) {
    const div = document.createElement("div");
    div.textContent = str;
    return div.innerHTML;
  }

  // Clear form after successful submission (if page doesn't reload)
  if (document.querySelector(".form-success")) {
    form.reset();
  }
});
