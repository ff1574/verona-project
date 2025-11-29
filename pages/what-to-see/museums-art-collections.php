<?php $basePath = '../..'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Museums & Art Collections - Nora in Verona</title>
    <link rel="stylesheet" href="../../assets/css/styles.css" />
</head>

<body>
    <?php include __DIR__ . '/../../components/navbar.php'; ?>
    <main class="container">
        <section class="hero">
            <h2>Museums & Art Collections</h2>
            <div class="content-right">
                <p>All the spots where you can geek out on paintings, sculptures, and collections. Some are massive,<br>
                    some
                    are tiny gems — all of them are worth your time if you love art or just want to feel cultured.</p>
                <div class="list-group">
                    <ul class="content-list">
                        <li><a href="#maffei" class="list-link">Palazzo Maffei Casa Museo</a></li>
                        <li><a href="#moderna" class="list-link">Galleria d’Arte Moderna Achille Forti</a></li>
                        <li><a href="#castelvecchio" class="list-link">Museo di Castelvecchio</a></li>
                    </ul>
                </div>
        </section>

        <div class="page-split">
            <!-- Left Side -->
            <div id="maffei" class="page-split-left">
                <!-- Text Block with Title -->
                <div class="component text-block-title">
                    <h2>Palazzo Maffei Casa Museo</h2>
                    <p>
                        Palazzo Maffei is definitely my favorite museum in Verona. It’s famous for having a Picasso, but
                        that’s not why I loved it—I’m not a huge Picasso fan. The museum also has the original Great
                        Wave by Hokusai, a Bauhaus chair, and so many other beautiful pieces. The interior itself is
                        stunning, with a great design and color-coded rooms that make everything easy to follow.
                    </p>
                </div>

                <!-- Gallery: Single Horizontal -->
                <div class="component gallery gallery-single">
                    <img src="../../assets/images/museums/maffei/balcony.JPG" alt="Arena di Verona"
                        class="gallery-image" />
                </div>

                <!-- Text Block with Subtitle -->
                <div class="component text-block-subtitle">
                    <p>
                        The museum mixes old and new art, from realistic to abstract, and all the descriptions are clear
                        and straight to the point—perfect if you actually want to read and understand the art. The
                        circular staircase at the entrance is steep and gorgeous, and there’s a balcony/terrace at the
                        top with great views.
                    </p>
                </div>

                <!-- Gallery: Vertical Left + 2 Horizontal -->
                <div class="component gallery gallery-v-2h">
                    <div class="gallery-col-vertical">
                        <img src="../../assets/images/museums/maffei/staircase.JPG" alt="Vertical image"
                            class="gallery-image" />
                    </div>
                    <div class="gallery-col-horizontal">
                        <img src="../../assets/images/museums/maffei/ready-made.JPG" alt="Horizontal 1"
                            class="gallery-image" />
                        <img src="../../assets/images/museums/maffei/wave.jpeg" alt="Horizontal 2"
                            class="gallery-image" />
                    </div>
                </div>

            </div>

            <!-- Right Side -->
            <div class="page-split-right">

                <!-- Gallery: Horizontal + 3 Vertical -->
                <div class="component gallery gallery-h-3v">
                    <div class="gallery-row-main">
                        <img src="../../assets/images/museums/maffei/interior1.jpeg" alt="Arena panorama"
                            class="gallery-image" />
                    </div>
                    <div class="gallery-row-grid">
                        <img src="../../assets/images/museums/maffei/horizons-left.JPG" alt="Detail 1"
                            class="gallery-image" />
                        <img src="../../assets/images/museums/maffei/warhol.JPG" alt="Detail 2" class="gallery-image" />
                        <img src="../../assets/images/museums/maffei/horizons-right.JPG" alt="Detail 3"
                            class="gallery-image" />
                    </div>
                </div>

                <!-- Text Block (no title) -->
                <div class="component text-block">
                    <p>
                        Be careful with the hours—they’re a bit unusual, and we got kicked out once because we misread
                        them! Check the official site before going: <a href="https://palazzomaffeiverona.com/en/visit/"
                            class="list-link">Palazzo Maffei Casa
                            Museo</a>. Even if you’re not an art
                        lover, it’s worth spending a few hours here just to enjoy the interior.
                    </p>
                </div>

                <!-- Gallery: 2 Horizontal -->
                <div class="component gallery gallery-2h">
                    <div class="gallery-row-grid">
                        <img src="../../assets/images/museums/maffei/chair.jpeg" alt="Description 1"
                            class="gallery-image" />
                        <img src="../../assets/images/museums/maffei/hope.JPG" alt="Description 2"
                            class="gallery-image" />
                    </div>
                </div>
            </div>
        </div>


        <div class="page-single">
            <div id="moderna" class="component text-block-title">
                <h2>Galleria d'Arte Moderna Achille Forti</h2>
                <p>
                    Galleria d'Arte Moderna Achille Forti is a hidden gem in Verona, located in the Palazzo della
                    Ragione on Piazza delle Erbe. The museum offers a mix of historical and contemporary Italian art,
                    with a collection that includes works by artists like Giorgio Morandi and Umberto Boccioni.
                    <a href="https://wanderlog.com/place/details/22806/galleria-darte-moderna-achille-forti"
                        class="list-link">Wanderlog</a>
                </p>
                <p>
                    One standout piece is Francesco Hayez's La Meditazione (1851), depicting a woman with a fierce,
                    intense expression. The painting's symbolism reflects the artist's disappointment at the failure of
                    the 1848 uprisings in Italy. <a
                        href="https://artsandculture.google.com/partner/galleria-d-arte-moderna-achille-forti"
                        class="list-link">Google Arts & Culture</a>
                </p>
            </div>
            <!-- Gallery: 2 Vertical + Horizontal -->
            <div class="component gallery gallery-2v-h">
                <div class="gallery-row-grid">
                    <img src="../../assets/images/museums/ragione/achille-forti/meditation-on-the -history-of -italy.jpeg"
                        alt="Meditation on the History of Italy by Francesco Hayez" class="gallery-image" />
                    <img src="../../assets/images/museums/ragione/looking-up-at-the-tower.JPG"
                        alt="View at the lomberti tower from the Ragione Square" class="gallery-image" />
                </div>
                <div class="gallery-row-main">
                    <img src="../../assets/images/museums/ragione/achille-forti/glass-achille.jpeg"
                        alt="Temporary Exhibition in Galleria d'Arte Moderna Achille Forti" class="gallery-image" />
                </div>
            </div>

            <!-- Text Block  -->
            <div class="component text-block-subtitle">
                <p>
                    During our visit, there was a temporary exhibition featuring an installation that highlighted the
                    disparities in people's lives by showcasing illuminated windows of a large apartment building in
                    China. The exhibit also touched on cultural issues, offering a thought-provoking experience.
                    The museum is situated near the Lamberti Tower, and from its location, you can enter the tower
                    directly. It's just a short walk from Piazza delle Erbe—Verona's compact size makes it easy to
                    explore.<br>
                    For current exhibitions and opening hours, check out the official website: <a
                        href="https://gam.comune.verona.it/nqcontent.cfm?a_id=42701" class="list-link">Galleria d'Arte
                        Moderna Achille Forti</a>.
                </p>
            </div>

            <!-- Gallery: Horizontal + 3 Vertical -->
            <div class="component gallery gallery-h-3v">
                <div class="gallery-row-main">
                    <img src="../../assets/images/museums/ragione/general-ragione.JPG" alt="Arena panorama"
                        class="gallery-image" />
                </div>
                <div class="gallery-row-grid">
                    <img src="../../assets/images/museums/ragione/achille-forti/backstage.jpeg"
                        alt="Back of an Installation from a Temporary Exhibition in Galleria d'Arte Moderna Achille Forti"
                        class="gallery-image" />
                    <img src="../../assets/images/museums/ragione/achille-forti/windows.jpeg"
                        alt="Temporary Exhibition in Galleria d'Arte Moderna Achille Forti" class="gallery-image" />
                    <img src="../../assets/images/museums/ragione/achille-forti/windows-me.JPG"
                        alt="Me in Galleria d'Arte Moderna Achille Forti" class="gallery-image" />
                </div>
            </div>
        </div>
        <div class="page-split">
            <!-- Left Side -->
            <div id="castelvecchio" class="page-split-left">
                <!-- Text Block with Title -->
                <div class="component text-block-title">
                    <h2>Museo di Castelvecchio</h2>
                    <p>
                        Museo di Castelvecchio is housed in a 14th-century castle built by the Scaliger family,
                        featuring Gothic architecture and a red-brick design. The museum showcases a diverse collection
                        of art and artifacts, including sculptures, paintings, and medieval weapons. The castle's
                        strategic location near the Adige River and its connection to the Castelvecchio Bridge highlight
                        its historical significance.
                    </p>
                    <p>
                        We didn't have the chance to visit due to early closing hours, but it's highly recommended for
                        anyone interested in art and history. Be sure to check the official website for current opening
                        times: <a href="https://museodicastelvecchio.comune.verona.it/nqcontent.cfm?a_id=42545"
                            class="list-link">Museo di Castelvecchio</a>.
                    </p>
                </div>
            </div>
            <!-- Right Side -->
            <div class="page-split-right">
                <!-- Gallery: Single Horizontal -->
                <div class="component gallery gallery-single">
                    <img src="../../assets/images/outdoors/ponte-scaligero/sideways.jpeg"
                        alt="Ponte Scaligero leading to Castelvecchio Museum" class="gallery-image" />
                </div>
            </div>
        </div>
    </main>

    <script src="../../assets/js/script.js"></script>
</body>

</html>