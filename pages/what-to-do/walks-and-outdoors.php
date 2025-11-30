<?php $basePath = '../..'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Walks & Outdoors - Nora in Verona</title>
    <link rel="stylesheet" href="../../assets/css/styles.css" />
</head>

<body>
    <?php include __DIR__ . '/../../components/navbar.php'; ?>
    <main class="container">
        <section class="hero">
            <h2>Walks & Outdoors</h2>
            <div class="content-right">
                <p>The best way to see Verona? On foot. Bridges, riverbanks, hills, gardens — even a short stroll turns
                    into a mini-adventure.</p>
                <div class="list-group">
                    <ul class="content-list">
                        <li><a href="#pietro" class="list-link">Castel San Pietro Hill & Fortresse</a></li>
                        <li><a href="#river" class="list-link">Adige River Bridges</a></li>
                        <li><a href="#santuario-walk" class="list-link">The Walk to the Santuario</a></li>
                    </ul>
                </div>
        </section>

        <div class="page-split">
            <!-- Left Side -->
            <div class="page-split-left">
                <?php
                $textBlock = [
                    'id' => 'pietro',
                    'title' => 'Castel San Pietro Hill & Fortress',
                    'badges' => [
                        ['type' => 'badge', 'text' => 'Climbed'],
                        ['type' => 'badge-outline', 'text' => 'not Visited']
                    ],
                    'content' => '<p>One of the most beautiful walks in Verona is up to Castel San Pietro — and it\'s more about the journey than the destination. Start from the Ponte Pietra bridge and follow the stairs up through little streets shaded by trees. The walk is easy for just about anyone, and it\'s perfect with a family or a friend.</p><p>At the top, you\'ll find Castel San Pietro, a historic fortress originally built in the Middle Ages and later rebuilt as a barracks in the 1800s. The building itself isn\'t currently open to the public, but the big draw is the view. From the terrace, you\'ll get sweeping panoramas of Verona\'s rooftops, the Adige River, and landmarks spreading across the city. There\'s even a small café at the top, where you can grab a drink, sit outside, and just soak it all in as the sun sets.</p>'
                ];
                include __DIR__ . '/../../components/text-block-title.php';
                ?>

                <?php
                $gallery = ['src' => '../../assets/images/architecture/castel-san-pietro/view-picture.JPG', 'alt' => 'Me and Verona in the Background'];
                include __DIR__ . '/../../components/gallery-single.php';
                ?>
            </div>

            <!-- Right Side -->
            <div class="page-split-right">
                <?php
                $textBlock = [
                    'content' => '<p>The area is especially charming in the evening — it\'s quiet, peaceful, and the sunset makes everything feel magical. It\'s the perfect way to spend a couple of hours walking, talking, and capturing some amazing photos with very little effort.</p><p>If you consider going, <a href="https://www.hotelveronesilatorre.it/en/vacations-in-verona/castel-san-pietro/" class="list-link">this website</a> will help you out a lot.</p>'
                ];
                include __DIR__ . '/../../components/text-block.php';
                ?>

                <?php
                $gallery = [
                    'main' => ['src' => '../../assets/images/architecture/castel-san-pietro/climb1.JPG', 'alt' => 'Walk up the Hill part 1'],
                    'grid' => [
                        ['src' => '../../assets/images/architecture/castel-san-pietro/climb2.JPG', 'alt' => 'Walk up the Hill part 2'],
                        ['src' => '../../assets/images/architecture/castel-san-pietro/walk-on-the-top.JPG', 'alt' => 'Walk up the Hill part 3'],
                        ['src' => '../../assets/images/architecture/castel-san-pietro/drinks.JPG', 'alt' => 'Having a drink at the top!']
                    ]
                ];
                include __DIR__ . '/../../components/gallery-h-3v.php';
                ?>
            </div>
        </div>

        <div class="page-split">
            <!-- Left Side -->
            <div id="river" class="page-split-left">
                <?php
                $textBlock = [
                    'title' => 'Adige River Bridges',
                    'badges' => [['type' => 'badge', 'text' => 'Walked']],
                    'content' => '<p>One of the best things you can do in Verona (honestly, maybe the best) is just to walk along the Adige River and cross all its bridges. Morning or evening, it doesn\'t matter; both are beautiful in their own way. In the morning it\'s calm, quiet, and a bit foggy; in the evening, everything glows. You\'ll really feel like you\'re part of the city, not just visiting it.</p>'
                ];
                include __DIR__ . '/../../components/text-block-title.php';
                ?>

                <?php
                $gallery = ['src' => '../../assets/images/outdoors/ponte-pietra/me-shore-pietra.JPG', 'alt' => 'Me at the Gate on the Start of the Pietra Bridge'];
                include __DIR__ . '/../../components/gallery-single.php';
                ?>

                <?php
                $textBlock = [
                    'content' => '<p>My two favorite bridges are Ponte Scaligero and Ponte Pietra. The Scaligero Bridge is straight out of a fairy tale - all orange bricks and little pointed towers, and the perfect place for pictures. It\'s from the 14th century and was rebuilt after the war using its original pieces. The Ponte Pietra is the oldest bridge in Verona, dating back to ancient Rome.</p>'
                ];
                include __DIR__ . '/../../components/text-block-title.php';
                ?>

                <?php
                $gallery = ['src' => '../../assets/images/outdoors/ponte-scaligero/editorial-me.JPG', 'alt' => 'Cool Photo my Mom took of me on the Scaligero Bridge'];
                include __DIR__ . '/../../components/gallery-single.php';
                ?>
            </div>

            <!-- Right Side -->
            <div class="page-split-right">
                <?php
                $textBlock = [
                    'content' => '<p>Ponte Garibaldi has a great city view, Ponte della Vittoria brings a modern vibe. Every bridge is special and free to cross. The best part is that Verona\'s small enough that you can walk along the river and see them all without getting lost. This is my top recommendation: grab a coffee, pick a direction, and just walk.</p>'
                ];
                include __DIR__ . '/../../components/text-block.php';
                ?>

                <?php
                $gallery = [
                    'horizontal' => [
                        ['src' => '../../assets/images/outdoors/framed.jpeg', 'alt' => 'Horizontal 1'],
                        ['src' => '../../assets/images/outdoors/river-night.JPG', 'alt' => 'View on The church of San Giorgio in Braida at Sunset']
                    ],
                    'vertical' => ['src' => '../../assets/images/outdoors/ponte-pietra/view-on-pietra.JPG', 'alt' => 'Walk by the Adige River']
                ];
                include __DIR__ . '/../../components/gallery-2h-v.php';
                ?>

                <?php
                $gallery = ['src' => '../../assets/images/outdoors/ponte-scaligero/landscape.JPG', 'alt' => 'Morning View on the Santuario over the River'];
                include __DIR__ . '/../../components/gallery-single.php';
                ?>
            </div>
        </div>

        <div class="page-split">
            <!-- Left Side -->
            <div id="santuario-walk" class="page-split-left">
                <?php
                $textBlock = [
                    'title' => 'The Walk to the Santuario',
                    'badges' => [
                        ['type' => 'badge', 'text' => 'Climbed'],
                        ['type' => 'badge', 'text' => 'Visited']
                    ],
                    'content' => '<p>The walk up to the Santuario della Madonna di Lourdes is just as special as the site itself. It\'s about an hour from the city center, and one of the most peaceful walks you can take in Verona. The path winds through greenery, quiet streets, and small open fields; the kind of walk where you really feel like you\'re part of the city, not just passing through.</p><p>There\'s not much at the top besides the church — no cafés or shops — just calm, nature, and that incredible view over Verona. Take your time, bring someone you like spending time with, and enjoy the climb.</p>'
                ];
                include __DIR__ . '/../../components/text-block-title.php';
                ?>

                <?php
                $gallery = ['src' => '../../assets/images/religious-heritage/santuario/path-break.JPG', 'alt' => 'Taking a break on the climb to the Santuario'];
                include __DIR__ . '/../../components/gallery-single.php';
                ?>
            </div>

            <!-- Right Side -->
            <div class="page-split-right">
                <?php
                $gallery = [
                    'main' => ['src' => '../../assets/images/religious-heritage/santuario/view-top.jpeg', 'alt' => "View from the Santuario's Courtyard"],
                    'grid' => [
                        ['src' => '../../assets/images/religious-heritage/santuario/path-upper.JPG', 'alt' => "Santuario's Gardens"],
                        ['src' => '../../assets/images/religious-heritage/santuario/view-with-bridge.JPG', 'alt' => 'Zooming in on the Santuario'],
                        ['src' => '../../assets/images/religious-heritage/santuario/path1.JPG', 'alt' => 'Cobblestone path to the Santuario']
                    ]
                ];
                include __DIR__ . '/../../components/gallery-h-3v.php';
                ?>

                <?php
                $textBlock = [
                    'content' => '<p>My mom and I started early in the morning before it got too warm, and it was perfect.</p><p>If you\'re interested in reading more about the Santuario itself, I provided some more information <a href="#" class="list-link">here</a>.</p>'
                ];
                include __DIR__ . '/../../components/text-block.php';
                ?>
            </div>
        </div>
    </main>

    <?php include __DIR__ . '/../../components/footer.php'; ?>

    <script src="../../assets/js/script.js"></script>
</body>

</html>
