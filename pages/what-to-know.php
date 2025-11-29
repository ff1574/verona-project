<?php $basePath = '..'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Essential information about Verona" />
  <title>What to know? - Nora in Verona</title>
  <link rel="stylesheet" href="../assets/css/styles.css" />
</head>

<body>
  <?php include __DIR__ . '/../components/navbar.php'; ?>

  <main class="container">
    <section class="hero">
      <h2>About</h2>
      <h1>Verona</h1>
    </section>

    <hr class="divider" />

    <div class="page-split">
      <!-- Left Side -->
      <div id="castelvecchio" class="page-split-left">
        <!-- Text Block with Title -->
        <div class="component text-block-title">
          <h2>History</h2>
          <p>
            Verona’s story goes back over 2,000 years, starting along the Adige River. It became an important Roman city
            thanks to its location on major trade routes. Many Roman landmarks still stand today — like the Arena di
            Verona, a huge amphitheatre that still hosts shows, and the ancient Ponte Pietra bridge. In the Middle Ages,
            the Scaligeri family ruled Verona and turned it into a powerful and beautiful city filled with castles and
            palaces.
          </p>
          <p>
            Later, Verona became part of the Republic of Venice and continued to grow in art, architecture, and trade
            before joining Italy in 1866. Even after wars and floods, the city has kept much of its old charm. Today,
            its historic centre is a UNESCO World Heritage site — a place where Roman ruins, medieval walls, and
            Renaissance buildings all come together to tell the story of Verona’s long and colorful past. <a
              href="https://museodicastelvecchio.comune.verona.it/nqcontent.cfm?a_id=42545" class="list-link">(UNESCO
              World Heritage Centre)</a>.
          </p>
        </div>
      </div>
      <!-- Right Side -->
      <div class="page-split-right">
        <!-- Gallery: Single Horizontal -->
        <div class="component gallery gallery-single">
          <img src="../assets/images/general/IMG_9607.JPG" alt="Historic Verona" class="gallery-image" />
        </div>
      </div>
    </div>

    <hr class="divider" />

    <div class="page-single">
      <!-- Maps Section -->
      <div class="component text-block-title">
        <h3>Map(s)</h3>
        <p>
          The city is wrapped around a big curve of the Adige River, which
          works like your built-in compass. If you follow the river, you'll
          circle most of the main sights: the Arena di Verona, Castelvecchio,
          Piazza delle Erbe, and the Roman Theatre all sit along its bend.
        </p>
        <p>
          A good rule of thumb: the Arena is your center point. From there,
          walk east to find the older, quieter streets leading to Ponte Pietra
          and the hills. Walk west, and you'll end up at Castelvecchio and its
          bridge. The city is compact, so you can walk nearly everywhere
          without worrying about getting lost. If you do, just find the river
          again and it'll guide you back.
        </p>
      </div>

      <!-- Maps Gallery -->
      <div class="component gallery gallery-single">
        <iframe class="gallery-image"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9367.556975125257!2d10.98764451615258!3d45.43998892670639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477f5f68699be0e3%3A0x53f85a636882595b!2sVerona%2C%20VR%2C%20Italy!5e0!3m2!1sen!2sus!4v1761247197625!5m2!1sen!2sus"
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <hr class="divider" />
    </div>
    </div>
  </main>

  <?php include __DIR__ . '/../components/footer.php'; ?>

  <script src="../assets/js/script.js"></script>
</body>

</html>