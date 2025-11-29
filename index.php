<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your website description" />
  <title>Nora in Verona</title>
  <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>
  <main class="container">
    <section class="hero">
      <h2>Nora in</h2>
      <h1>VERONA</h1>
    </section>
    <hr class="divider-thick" />
    <section class="hero-content">
      <div class="cards-container">
        <a href="pages/what-to-see.php" class="card">
          <h3 class="card-subtitle">What to see?</h3>
          <p class="card-description">
            Explore the most iconic landmarks and hidden gems throughout the
            beautiful city of Verona.
          </p>
          <img src="assets/images/cutouts/what-to-see.png" alt="What to see in Verona" class="card-image" />
        </a>

        <a href="pages/what-to-do.php" class="card">
          <h3 class="card-subtitle">What to do?</h3>
          <p class="card-description">
            Discover exciting activities and experiences that will make your
            visit to Verona unforgettable.
          </p>
          <img src="assets/images/cutouts/what-to-do.png" alt="What to do in Verona" class="card-image" />
        </a>

        <a href="pages/what-to-know.php" class="card">
          <h3 class="card-subtitle">What to know?</h3>
          <p class="card-description">
            Essential information and travel tips to help you navigate Verona
            like a local.
          </p>
          <img src="assets/images/cutouts/what-to-know.png" alt="What to know about Verona" class="card-image" />
        </a>
      </div>
    </section>
    <hr class="divider-thick" />
    <div class="quote-block">
      <p>
        <a href="pages/sources.php" class="text-primary">Sources</a>
      </p>
    </div>
    <div class="quote-block">
      <p>
        <a href="pages/grading.php" class="text-primary">Grading</a>
      </p>
    </div>
  </main>

  <?php include __DIR__ . '/components/footer.php'; ?>

  <script src="assets/js/script.js"></script>
</body>

</html>
