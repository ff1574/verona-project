<?php $basePath = '..'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Discover what to see in Verona" />
  <title>What to see? - Nora in Verona</title>
  <link rel="stylesheet" href="../assets/css/styles.css" />
</head>

<body>
  <?php include __DIR__ . '/../components/navbar.php'; ?>
  <main class="container">
    <div class="page-header">
      <h2>What to see?</h2>
    </div>

    <section class="content-section">
      <div class="content-left">

        <a href="what-to-see/historic-landmarks.php" class="card">
          <h4 class="text-primary"> HISTORIC LANDMARKS</h4>
          <ul class="content-list">
            <li class="text-font-secondary">Arena di Verona</li>
            <li class="text-font-secondary">Roman Theatre</li>
            <li class="text-font-secondary">Porta Borsari & Porta Leoni</li>
            <li class="text-font-secondary">Arco dei Gavi</li>
            <li class="text-font-secondary">Piazza delle Erbe</li>
            <li class="text-font-secondary">Scaligeri Tombs</li>
          </ul>
        </a>

        <a href="what-to-see/museums-art-collections.php" class="card">
          <h4 class="text-primary">MUSEUMS & GALLERIES</h4>
          <ul class="content-list">
            <li class="text-font-secondary">Palazzo Maffei Casa Museo</li>
            <li class="text-font-secondary">Galleria d'Arte Moderna Achille Forti</li>
            <li class="text-font-secondary">Museo di Castelvecchio</li>
          </ul>
        </a>

        <a href="what-to-see/religious-heritage.php" class="card">
          <h4 class="text-primary">RELIGIOUS HERITAGE</h4>
          <ul class="content-list">
            <li class="text-font-secondary">Basilica di San Zeno Maggiore</li>
            <li class="text-font-secondary">The Cathedral Complex</li>
            <li class="text-font-secondary">Basilica di Santa Anastasia</li>
            <li class="text-font-secondary">Santuario della Madonna di Lourdes</li>
            <li class="text-font-secondary">San Giorgio in Braida</li>
          </ul>
        </a>
      </div>

      <div class="content-right">
        <div class="content-image">
          <img src="../assets/images/general/genral-maffei-sculpture.JPG" alt="Maffei Sculpture" />
        </div>

      </div>
    </section>
  </main>

  <?php include __DIR__ . '/../components/footer.php'; ?>

  <script src="assets/js/script.js"></script>
</body>

</html>