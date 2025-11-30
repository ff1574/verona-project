<?php $basePath = '../..'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>One day Trips - Nora in Verona</title>
    <link rel="stylesheet" href="../../assets/css/styles.css" />
</head>

<body>
    <?php include __DIR__ . '/../../components/navbar.php'; ?>
    <main class="container">
        <section class="hero">
            <h2>One day Trips</h2>
            <div class="content-right">
                <p>If you're staying in Verona for a few days, definitely plan at least one day trip. There are some
                    amazing spots nearby;<br>close enough to go in the morning and be back by night.</p>
                <p>Verona isn't an
                    expensive city to stay in, but these surrounding areas can get pricey,<br> so day trips are the
                    perfect
                    way to explore more without overcomplicating things.</p>
                <div class="list-group">
                    <ul class="content-list">
                        <li><a href="#malcesine" class="list-link">Malcesine (Monte Baldo)</a></li>
                        <li><a href="#garda" class="list-link">Lake Garda</a></li>
                        <li><a href="#padova" class="list-link">Padova</a></li>
                        <li><a href="#gardaland" class="list-link">Gardaland</a></li>
                </div>
        </section>

        <div class="page-single">
            <?php
            $textBlock = [
                'id' => 'malcesine',
                'title' => 'Malcesine & Monte Baldo',
                'badges' => [
                    ['type' => 'badge', 'text' => 'Visited'],
                    ['type' => 'badge-outline', 'text' => 'not climbed']
                ],
                'content' => '<p>Malcesine might sound like just another town on Lake Garda, but what makes it special is the mountain right above it - Monte Baldo. The town itself is cute. Cobblestone streets, lakeside views, all that, but going up the mountain is where the magic happens.</p><p>You take a two-part cable car to reach the top (you can hike too, but we didn\'t \'cuz we were there as a family). Even though we went in summer, it was freezing up there. We started in fog so thick we couldn\'t see ten meters ahead, and then an hour later it cleared up into one of the most beautiful views I\'ve ever seen - the lake, the towns below, the mountains around...</p><p>👉 Head here for some official info on <a href="https://www.visitmalcesine.com/en/malcesine-monte-baldo-cable-car" class="list-link">Monte Baldo</a> and <a href="https://www.visitmalcesine.com/en" class="list-link">Malcesine</a>.</p>'
            ];
            include __DIR__ . '/../../components/text-block-title.php';
            ?>

            <?php
            $gallery = ['src' => '../../assets/images/one-day-trips/baldo/baldo-landscape-main.JPG', 'alt' => 'Castle interior'];
            include __DIR__ . '/../../components/gallery-single.php';
            ?>

            <?php
            $gallery = [
                'grid' => [
                    ['src' => '../../assets/images/one-day-trips/baldo/baldo-climber.jpeg', 'alt' => 'Bridge view 1'],
                    ['src' => '../../assets/images/one-day-trips/baldo/me-baldo-portrait.jpeg', 'alt' => 'Me at Monte Baldo']
                ],
                'main' => ['src' => '../../assets/images/one-day-trips/baldo/baldo-foggy.jpeg', 'alt' => 'Bridge panorama']
            ];
            include __DIR__ . '/../../components/gallery-2v-h.php';
            ?>

            <?php
            $textBlock = [
                'id' => 'garda',
                'subtitle' => 'Lake Garda',
                'badges' => [['type' => 'badge', 'text' => 'Visited x3']],
                'content' => '<p>Lake Garda is the classic day trip from Verona — and for a good reason. It\'s absolutely beautiful and full of little towns, beaches, and viewpoints. I\'ve been there a few times now, and it\'s one of those places that never gets old.</p><p>If you want something small and cozy, go to Sirmione. It\'s a tiny lakeside town with a castle right on the water, pastel houses, and little shops everywhere. You can literally walk around the whole town in twenty minutes, grab a coffee, and just enjoy the views. If that doesn\'t sound so cool, maybe you would like some other towns around Garda better, but honestly, even just sitting by the water is enough. And that\'s also enough from me.</p><p>👉 More about Lake Garda <a href="https://www.visitgarda.com/en/garda-unico/?s=578" class="list-link">here</a>.</p>'
            ];
            include __DIR__ . '/../../components/text-block-subtitle.php';
            ?>

            <?php
            $gallery = ['src' => '../../assets/images/one-day-trips/garda/garda-horizontal.JPG', 'alt' => 'Lake garda in Summer'];
            include __DIR__ . '/../../components/gallery-single.php';
            ?>
        </div>

        <div id="padova" class="page-split">
            <!-- Left Side -->
            <div class="page-split-left">
                <?php
                $textBlock = [
                    'title' => 'Padova',
                    'badges' => [['type' => 'badge', 'text' => 'Visited']],
                    'content' => '<p>Padova is a small city near Verona. It is perfect for a calm, one-day trip. It\'s not too big, so you can easily walk everywhere. The streets are quiet, full of greenery, and there\'s this relaxed, local vibe that makes it feel less touristy.<br>The main highlight is the Basilica di Sant\'Antonio, a massive and beautiful church that dominates the city center. There are a few lovely squares and gardens nearby.</p>'
                ];
                include __DIR__ . '/../../components/text-block-title.php';
                ?>

                <?php
                $gallery = ['src' => '../../assets/images/one-day-trips/padova/st-anthony.jpg', 'alt' => 'Church of St. Anthony'];
                include __DIR__ . '/../../components/gallery-single.php';
                ?>
            </div>
            <!-- Right Side -->
            <div class="page-split-right">
                <?php
                $gallery = [
                    'main' => ['src' => '../../assets/images/one-day-trips/padova/kanal1.jpg', 'alt' => 'Canal Alicorno'],
                    'grid' => [
                        ['src' => '../../assets/images/one-day-trips/padova/church-inside-sculpture.jpg', 'alt' => 'Inside of St. Anthony Church'],
                        ['src' => '../../assets/images/one-day-trips/padova/clock-gate.jpg', 'alt' => "Torre dell'Orologio"],
                        ['src' => '../../assets/images/one-day-trips/padova/garden.jpg', 'alt' => 'St. Anthony Church Courtyard']
                    ]
                ];
                include __DIR__ . '/../../components/gallery-h-3v.php';
                ?>

                <?php
                $textBlock = [
                    'content' => '<p>Historically, Padova is one of the oldest cities in northern Italy and home to one of Europe\'s oldest universities, where Galileo once taught. So yeah, it\'s small, but it\'s got depth. <a href="https://www.padova.com/" class="list-link">(padova.com)</a></p>'
                ];
                include __DIR__ . '/../../components/text-block-title.php';
                ?>
            </div>
        </div>

        <div class="page-single">
            <?php
            $textBlock = [
                'id' => 'gardaland',
                'subtitle' => 'Gardaland',
                'badges' => [['type' => 'badge', 'text' => 'Visited x5']],
                'content' => '<p>And if you\'re ready for something less "cultural" and more fun, then let\'s go to Gardaland! It\'s Italy\'s biggest amusement park, and it\'s only about 30 minutes from Verona. Rollercoasters, water rides, themed areas, it\'s basically pure chaos in the best way, and I make sure to visit it every few years.</p><p>What to do? I think it\'s pretty self-explanatory; just go, have fun, scream a little, and take a break from all the history</p><p>👉 Gardaland <a href="https://www.gardaland.it/en/" class="list-link">Official Site</a></p>'
            ];
            include __DIR__ . '/../../components/text-block-subtitle.php';
            ?>

            <?php
            $gallery = [
                'main' => ['src' => '../../assets/images/one-day-trips/gardaland/gardaland-entrance.JPG', 'alt' => 'My Sisters and I at the Entrance Area'],
                'grid' => [
                    ['src' => '../../assets/images/one-day-trips/gardaland/gardaland-atlantida.JPG', 'alt' => 'Atlantida (one of the attractions)'],
                    ['src' => '../../assets/images/one-day-trips/gardaland/me-gardaland.jpeg', 'alt' => 'Me on the Kids Carousel'],
                    ['src' => '../../assets/images/one-day-trips/gardaland/gardaland-landscape-wide-shot.JPG', 'alt' => 'Blue Tornado (one of the Attractions)']
                ]
            ];
            include __DIR__ . '/../../components/gallery-h-3v.php';
            ?>
        </div>
    </main>

    <?php include __DIR__ . '/../../components/footer.php'; ?>

    <script src="../../assets/js/script.js"></script>
</body>

</html>
