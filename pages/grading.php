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
                <h3 class="text-primary">1. Design</h3>
                <p>
                    The design uses a consistent color palette with neutral backgrounds (#eeeeee), white card elements,
                    and blue accents (#3b82f6) that create a clean, modern aesthetic fitting for a travel guide. Custom
                    fonts were carefully selected: Balgend for bold, impactful headings and Carme for readable body
                    text, creating a friendly yet sophisticated tone. Each page maintains consistent spacing using a
                    systematic design token system (CSS variables for all spacing, colors, and typography), ensuring
                    visual harmony throughout the site. The hero section on the landing page provides immediate visual
                    impact, while gallery layouts showcase Verona's beauty through carefully organized photography.
                </p>
            </div>

            <!-- Organization of Information -->
            <div class="component content-box-highlight">
                <h3 class="text-primary">2. Organization of Information</h3>
                <p>
                    Content is logically divided into three main categories accessible from the homepage: "What to
                    See?" (historic landmarks, museums, religious heritage), "What to Do?" (cultural experiences,
                    outdoor activities, day trips), and "What to Know?" (practical travel information). The navigation
                    bar remains consistent across all pages and appears on scroll for easy access. Each main category
                    page serves as a hub with clear visual cards linking to detailed subpages. Internal links connect
                    related content throughout the site; for example, the Arena di Verona section links to the Opera
                    Festival page, and museum pages reference nearby landmarks. This creates an intuitive information
                    hierarchy that guides visitors naturally through the content.
                </p>
            </div>

            <!-- Quality and Quantity of Content -->
            <div class="component content-box-highlight">
                <h3 class="text-primary">3. Quality and Quantity of Content</h3>
                <p>
                    All text is original content written from personal experience visiting Verona, combined with
                    independent research. The website contains over 10 substantial content pages covering diverse
                    aspects of the city: historic landmarks (Arena di Verona, Roman Theatre, Porta Borsari, Porta
                    Leoni, Arco dei Gavi, Piazza delle Erbe, Scaligeri Tombs), museums and art galleries (Palazzo
                    Maffei Casa Museo, Galleria d'Arte Moderna Achille Forti, Museo di Castelvecchio), religious
                    heritage (multiple basilicas and churches), cultural experiences (Opera Festival, local markets),
                    outdoor activities and walks, day trips to nearby destinations (Lake Garda, Monte Baldo, Padova,
                    Gardaland), and practical travel information. Each page provides detailed descriptions, personal
                    insights, and actionable information for visitors, accompanied by original photography from the
                    trip.
                </p>
            </div>

            <!-- Code and Technical Design -->
            <div class="component content-box-highlight">
                <h3 class="text-primary">4. Code and Technical Design</h3>
                <p>
                    The website is built with semantic HTML5 elements (nav, main, section, article structure) to ensure
                    proper document structure and accessibility. A single, comprehensive CSS file (styles.css) is
                    linked to all pages, maintaining consistency and efficient caching. The CSS is organized into clear
                    sections: custom fonts, CSS variables (design tokens), reset/base styles, typography, layout
                    components, specific components (navigation, galleries, text blocks), utilities, and responsive
                    breakpoints. All code is properly indented and includes section headers for easy maintenance. The
                    website uses a component-based architecture with reusable classes (.gallery-h-3v, .text-block-title,
                    .page-split, etc.) that can be combined to create diverse page layouts. JavaScript is minimal and
                    focused on enhancing user experience (lightbox and navigation functionality). Code follows web
                    standards and has been validated.
                </p>
            </div>

            <!-- Navigation -->
            <div class="component content-box-highlight">
                <h3 class="text-primary">5. Navigation</h3>
                <p>
                    The site features a fixed navigation bar that appears after scrolling 100 pixels down the page,
                    allowing users to access main sections from anywhere without cluttering the hero section. The
                    navigation highlights the current page using JavaScript that detects the URL path. On mobile
                    devices, the navigation transforms into a hamburger menu with a slide-in drawer and backdrop
                    overlay, ensuring usability on all screen sizes. The homepage uses large, clickable cards to guide
                    visitors to the three main sections. Within content pages, anchor links in tables of contents allow
                    quick jumps to specific landmarks or topics. Visual hierarchy through typography, spacing, and card
                    design prevents users from feeling lost, while clear page titles always indicate the current
                    location.
                </p>
            </div>

            <!-- Responsive Design -->
            <div class="component content-box-highlight">
                <h3 class="text-primary">6. Responsive Design</h3>
                <p>
                    The website is built mobile-first and includes five responsive breakpoints (375px, 768px, 1024px,
                    1280px, 1536px) that progressively enhance the layout for larger screens. CSS Grid and Flexbox are
                    used throughout to create fluid, adaptive layouts. Gallery components automatically reflow - for
                    example, three-column image grids stack vertically on mobile devices for easier viewing. The
                    two-column split layouts (.page-split) become single-column on mobile. Navigation transforms from a
                    horizontal menu to a mobile-friendly hamburger drawer. Image heights and font sizes scale
                    appropriately using CSS clamp() functions and media queries. Card hover effects adapt for touch
                    devices. The entire site is fully functional and readable from smartphones to large desktop
                    displays.
                </p>
            </div>

            <!-- Accessibility and Usability -->
            <div class="component content-box-highlight">
                <h3 class="text-primary">7. Accessibility and Usability</h3>
                <p>
                    All images include descriptive alt text that conveys the content and context of each photograph.
                    Links use meaningful text rather than generic "click here" phrases. The color contrast between text
                    and backgrounds meets WCAG standards - dark text (#1f2937) on light backgrounds (#eeeeee), with blue
                    accent color (#3b82f6) tested for sufficient contrast. Semantic HTML5 structure enables screen
                    readers to properly interpret page hierarchy. Interactive elements (buttons, links, images) include
                    hover states and focus indicators. The navigation menu includes proper ARIA labels for the toggle
                    button. Font sizes are relative (rem units) and respect user preferences. The lightbox image viewer
                    supports keyboard navigation (arrow keys to move between images, Escape to close) alongside mouse
                    controls.
                </p>
            </div>

            <!-- Visual Consistency -->
            <div class="component content-box-highlight">
                <h3 class="text-primary">8. Visual Consistency</h3>
                <p>
                    Every page follows the same structural system using a component-based design approach. The CSS
                    variables in :root ensure consistent spacing, colors, typography, shadows, and border radii
                    throughout the site. Section titles appear in the same position and style across all pages. Card
                    elements use identical styling (white background, rounded corners, shadow on hover, same padding).
                    The seven gallery variations provide diverse layouts while maintaining visual coherence through
                    consistent image treatment (border radius, shadow, hover effects). Text blocks use the same
                    typographic hierarchy: Balgend for headings, Carme for body text, consistent line height and
                    spacing. This repetition creates a professional, cohesive experience that reinforces brand identity
                    while allowing content flexibility.
                </p>
            </div>

            <!-- References -->
            <div class="component content-box-highlight">
                <h3 class="text-primary">9. References</h3>
                <p>
                    All external images and information sources are properly documented on the dedicated
                    <a href="sources.html" class="text-primary">Sources</a> page. The majority of photographs are
                    original images taken during personal travel to Verona. Where external images are used (such as for
                    locations not personally visited, like the Roman Theatre), sources include complete attribution with
                    links. Text content draws from personal experience, supplemented by official tourism websites,
                    museum information pages, and cultural heritage resources, all cited appropriately. Links to ticket
                    purchasing sites and official venue websites are provided inline for user convenience.
                </p>
            </div>

            <!-- Extras -->
            <div class="component content-box-highlight">
                <h3 class="text-primary">10. Extras</h3>
                <p>
                    Beyond the basic requirements, the website includes several enhanced features: a custom JavaScript
                    lightbox that allows full-screen viewing of all gallery images with smooth animations, previous/next
                    navigation, keyboard controls, and image captions. The navigation bar uses smooth scroll detection
                    with a 100px threshold and animated slide-in transition. Custom fonts (Balgend and Carme) are
                    locally hosted rather than using standard web fonts. The CSS includes sophisticated hover effects on
                    cards, images, and navigation items with smooth transitions. Seven different gallery layout
                    variations provide visual diversity across content pages. Badge components (.badge, .badge-outline)
                    indicate visit status for locations. The mobile menu includes animated hamburger transformation and
                    backdrop overlay. The modular component system makes the site easily extensible for future content
                    additions.
                </p>
            </div>

            <!-- Validation -->
            <div class="component content-box-highlight">
                <h3 class="text-primary">11. Validation</h3>
                <p>
                    All HTML pages have been validated using the W3C HTML Validator and meet HTML5 standards. The CSS
                    has been checked with the W3C CSS Validator and passes CSS3 validation. Semantic HTML structure is
                    maintained throughout, with proper nesting and element usage. The website functions correctly across
                    modern browsers (Chrome, Firefox, Safari, Edge) and properly degrades in older browsers. JavaScript
                    is unobtrusive and enhances rather than replaces core functionality - the site remains fully usable
                    with JavaScript disabled, though interactive features like the lightbox and mobile menu require it.
                </p>
            </div>
        </div>

        <hr class="divider-thick" />

        <div class="quote-block">
            <p>
                <a href="../index.html" class="text-primary">Back to Home</a>
            </p>
        </div>
    </main>

    <script src="../assets/js/script.js"></script>
</body>

</html>
