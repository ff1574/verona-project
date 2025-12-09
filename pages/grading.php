<?php $basePath = '..'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Grading criteria for Nora in Verona website" />
    <title>Grading - Nora in Verona</title>
    <link rel="stylesheet" href="../assets/css/styles.css" />
</head>

<body>
    <?php include __DIR__ . '/../components/navbar.php'; ?>

    <main class="container">
        <div class="page-header">
            <h2>Grading Criteria</h2>
        </div>

        <div class="page-single">
            <!-- Design -->
            <div class="component content-box-highlight">
                <h3 class="text-primary">1. Original JavaScript component</h3>
                <p>Interactive Image Lightbox Gallery</p>
                <p>This component is a fully functional image lightbox that enhances the user experience when viewing
                    gallery images. When users click on any gallery image (marked with the class "gallery-image"), the
                    lightbox opens in an overlay, displaying the full-size image with a semi-transparent backdrop.</p>

                <p>Key Features:</p>
                <p>Navigation: Previous/Next buttons allow users to browse through all gallery
                    images without closing the lightbox. Navigation buttons are intelligently hidden when at the
                    first or last image.</p>
                <p>Keyboard Support: Arrow keys navigate between images, and Escape key closes the
                    lightbox for improved accessibility.</p>
                <p>Image Captions: Displays the image alt text as a caption below each image.</p>
                <p>Close Functionality: Users can close the lightbox by clicking the X button or
                    clicking anywhere on the backdrop.</p>
                <p>Animation Lock: Prevents rapid clicking causing navigation conflicts by
                    implementing an animation state flag.</p>

                <p>Implementation: Written entirely in vanilla JavaScript with NO libraries (no jQuery,
                    Mootools, or Scriptaculous). The lightbox structure is dynamically created and injected into the DOM
                    on page load (script.js:1-170). See it in action on the Gallery page.</p>
            </div>

            <!-- Organization of Information -->
            <div class="component content-box-highlight">
                <h3 class="text-primary">2. DHTML component</h3>
                <p>Animated Lightbox Transitions (Combined with JavaScript Component)</p>
                <p>The lightbox incorporates multiple DHTML animations that enhance the user experience through dynamic
                    style changes and timed animations using setTimeout():</p>
                <p>Zoom-In Animation:When opening the lightbox, images animate with a smooth
                    zoom-in effect. The script applies the "zoom-in" CSS class after a 10ms delay, triggering a CSS
                    transform animation (script.js:59-63).</p>
                <p>Slide Transitions: When navigating between images, the current image slides out
                    (left or right depending on direction) while the new image slides in from the opposite side.
                    This creates a seamless browsing experience (script.js:84-132).</p>
                <p>Animation State Management: An "isAnimating" flag prevents users from
                    triggering multiple animations simultaneously, ensuring smooth transitions without glitches.
                </p>
                <p>Fade Effects: The backdrop smoothly fades in/out using CSS transitions when the
                    lightbox opens and closes.</p>

                <p>Implementation: No libraries used - all animations are achieved through vanilla
                    JavaScript using setTimeout() for timing control, combined with CSS transitions and transforms. The
                    animation timing (400ms) is coordinated between JavaScript state changes and CSS animations.</p>
            </div>

            <!-- Quality and Quantity of Content -->
            <div class="component content-box-highlight">
                <h3 class="text-primary">3. Extras</h3>
                <p>Additional Features Beyond Requirements:</p>
                <p>Accessibility Enhancements: All interactive lightbox buttons include aria-label
                    attributes for screen readers (script.js:12-14), making the component accessible to users with
                    disabilities.</p>
                <p>Image Preloading: Before displaying the next/previous image, the script
                    preloads it to ensure smooth transitions without loading delays (script.js:101-118).</p>
                <p>Error Handling: Graceful fallback if an image fails to load, preventing the
                    lightbox from breaking (script.js:120-128).</p>
                <p>Scroll Lock: When the lightbox or mobile menu is active, body scrolling is
                    prevented to keep focus on the overlay content (script.js:67, 230).</p>
                <p>Smart Navigation: The auto-hiding navbar with scroll detection and manual show
                    indicator enhances mobile usability without cluttering the screen (script.js:172-266).</p>
            </div>

            <!-- Responsive Design -->
            <div class="component content-box-highlight">
                <h3 class="text-primary">4. Fixes from Project1 Critique</h3>
                <p>
                    I Add a small indicator at the top to the side that allows the user to expand the navigational
                    element.
                    Most of my images are vertical so I like how they display in the multi column view, even when on
                    smaller screen sizes. Full images display on click, so I don't think there is a need to adjust the
                    number of columns at different breakpoints, or tamper with ratios.
                </p>
            </div>

        </div>

        <hr class="divider-thick" />

        <div class="quote-block">
            <p>
                <a href="../index.php" class="text-primary">Back to Home</a>
            </p>
        </div>
    </main>

    <?php include __DIR__ . '/../components/footer.php'; ?>

    <script src="../assets/js/script.js"></script>
</body>

</html>