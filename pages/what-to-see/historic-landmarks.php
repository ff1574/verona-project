<?php $basePath = '../..'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Historic Sites & Architecture - Nora in Verona</title>
    <link rel="stylesheet" href="../../assets/css/styles.css" />
</head>

<body>
    <?php include __DIR__ . '/../../components/navbar.php'; ?>
    <main class="container">
        <section class="hero">
            <h2>Historic Sites <br>& Architecture </h2>
            <div class="content-right">
                <p>From Roman ruins to Scaligeri palaces, this is Verona's backbone. Walk through it, stare at it, and
                    imagine the stories behind every stone.</p>
                <div class="list-group">
                    <ul class="content-list">
                        <li><a href="#arena" class="list-link">Arena di Verona</a></li>
                        <li><a href="#theatre" class="list-link">Roman Theatre</a></li>
                        <li><a href="#porta" class="list-link">Porta Borsari & Porta Leoni</a></li>
                        <li><a href="#arc" class="list-link">Aarco dei Gavi</a></li>
                        <li><a href="#erbe" class="list-link">Piazza delle Erbe</a></li>
                        <li><a href="#tombs" class="list-link">Scaligeri Tombs</a></li>
                    </ul>
                </div>
        </section>

        <div class="page-single">
            <?php
            $textBlock = [
                'id' => 'arena',
                'title' => 'Arena di Verona',
                'badges' => [['type' => 'badge', 'text' => 'Visited']],
                'content' => '<p>If you\'re visiting Verona, you can\'t miss the Arena; literally, it\'s right in the heart of the city, and it\'s enormous. Built in the 1st century AD, it once hosted gladiator fights, and today it is one of the largest and best-preserved amphitheaters in the world. It can hold up to 18,000 people — though during modern shows, about 15,000 get lucky seats (the rest is taken up by the massive stage setup).</p><p>You can visit the Arena during the day and explore its arches, stands, and tunnels. There isn\'t a ton to "see" inside, it\'s more about the feeling of standing somewhere that\'s been alive for nearly two thousand years. Tickets are available <a href="https://www.italy-museum.com/venice/arena-verona" class="list-link">here</a>.</p><p>But if you\'re around in the summer, trust me: save your visit for the evening show. Arena is also the main venue for the <a href="#" class="list-link">Summer Opera Festival</a>, so if you think it\'s impressive during the day, wait until you see it glowing under the stars.</p>'
            ];
            include __DIR__ . '/../../components/text-block-title.php';
            ?>

            <?php
            $gallery = [
                'main' => ['src' => '../../assets/images/architecture/arena/inside-landscape.JPG', 'alt' => 'Arena panorama'],
                'grid' => [
                    ['src' => '../../assets/images/architecture/arena/inside-me.JPG', 'alt' => 'Me inside the Arena'],
                    ['src' => '../../assets/images/architecture/arena/outside-vertical.JPG', 'alt' => 'Nice View from the Side'],
                    ['src' => '../../assets/images/architecture/arena/outside-with-me.JPG', 'alt' => 'Me outside the Arena']
                ]
            ];
            include __DIR__ . '/../../components/gallery-h-3v.php';
            ?>

            <?php
            $textBlock = [
                'id' => 'theatre',
                'title' => 'Roman Theatre',
                'badges' => [['type' => 'badge-outline', 'text' => 'not Visited']],
                'content' => '<p>I didn\'t get the chance to visit the Roman Theater myself — which I still regret, because everyone who\'s been there says it\'s absolutely worth it. It\'s one of those spots that feels a bit tucked away, right across the river from Verona\'s old town, surrounded by greenery and overlooking the city.</p><p>The theater dates back to the 1st century BC, even older than the Arena, and it\'s beautifully preserved. What makes it special, from what I\'ve heard, is the atmosphere — especially if you go during a concert or a summer show. The setting is open, historical, and somehow quiet despite being right next to the heart of the city. If I ever go back to Verona, this is the first place I\'m heading to. It\'s not as famous as the Arena, but maybe that\'s what makes it even more charming — fewer crowds, same ancient magic.</p><p>🎟️ You can check museum tickets <a href="https://museoarcheologico.comune.verona.it/nqcontent.cfm?a_id=43627&lang=en" class="list-link">here</a>.</p>'
            ];
            include __DIR__ . '/../../components/text-block-title.php';
            ?>

            <?php
            $gallery = ['src' => '../../assets/images/outside-sources/roman-theater-of-amman.jpg', 'alt' => 'The Roman Theatre'];
            include __DIR__ . '/../../components/gallery-single.php';
            ?>

            <?php
            $textBlock = [
                'id' => 'porta',
                'title' => 'Porta Borsari & Porta Leoni',
                'badges' => [['type' => 'badge', 'text' => 'Visited']],
                'content' => '<p>I passed Porta Borsari and Porta Leoni many times without really knowing what they were. Later I found out they\'re remains of the ancient Roman city gates that once marked Verona\'s boundaries. Porta Borsari is well preserved and sits near one of the main streets, while Porta Leoni is more fragmented but still interesting to see.</p><p>They\'re easy to walk by if you\'re exploring the center, and both make quiet stops for photos or a short break. If you enjoy walking, try going a bit outside the city walls — there are some nice <a href="https://museoarcheologico.comune.verona.it/nqcontent.cfm?a_id=43627&lang=en" class="list-link">routes and views</a>..</p>'
            ];
            include __DIR__ . '/../../components/text-block-title.php';
            ?>

            <?php
            $gallery = ['src' => '../../assets/images/outside-sources/porta-leoni-borsari.jpg', 'alt' => 'Porta Leoni & Borsari'];
            include __DIR__ . '/../../components/gallery-single.php';
            ?>

            <?php
            $textBlock = [
                'id' => 'arc',
                'title' => 'Arco dei Gavi',
                'badges' => [['type' => 'badge', 'text' => 'accidentally Visited']],
                'content' => '<p>I actually didn\'t know this was an important landmark until I started reading more about Verona later on. I had passed by it a few times, but never really stopped to think about what it was. The Arco dei Gavi is a Roman triumphal arch that once marked one of the main entrances to the city. It\'s beautifully preserved and stands near Castelvecchio, making it a nice spot for a quick photo. Not exactly a must-see in my opinion, but still worth a short stop if you\'re nearby.</p>'
            ];
            include __DIR__ . '/../../components/text-block-title.php';
            ?>

            <?php
            $gallery = ['src' => '../../assets/images/architecture/arco-de-gavi/arco-de-gavi.JPG', 'alt' => 'Arco de Gavi'];
            include __DIR__ . '/../../components/gallery-single.php';
            ?>

            <?php
            $textBlock = [
                'id' => 'erbe',
                'title' => "Piazza dell'Erbe",
                'badges' => [['type' => 'badge', 'text' => 'Visited']],
                'content' => '<p>I really loved Piazza dell\'Erbe. It\'s right in the heart of Verona, and we were there almost every day since it was so close to our apartment. It\'s a lively little marketplace with tons of street food and snacks, some beautiful sculptures, and a relaxed vibe since only police cars can drive through.<br>From here, you can see Palazzo Maffei, Lamberti Tower on Piazza dei Signori, and the Achille Forti Gallery. Juliet\'s House is super close too. It\'s small but full of life, and honestly, it\'s one of those spots that just makes you love the city.</p>'
            ];
            include __DIR__ . '/../../components/text-block-title.php';
            ?>

            <?php
            $gallery = [
                'main' => ['src' => '../../assets/images/architecture/erbe/landscape.JPG', 'alt' => 'View from the edge of the Piazza'],
                'grid' => [
                    ['src' => '../../assets/images/architecture/erbe/from-above.JPG', 'alt' => 'View from above on a nice day'],
                    ['src' => '../../assets/images/architecture/erbe/fruit-stand.JPG', 'alt' => 'vertical aesthetic'],
                    ['src' => '../../assets/images/architecture/erbe/sculpture.JPG', 'alt' => 'Statue of Madonna']
                ]
            ];
            include __DIR__ . '/../../components/gallery-h-3v.php';
            ?>

            <div class="page-split">
                <!-- Left Side -->
                <div id="tombs" class="page-split-left">
                    <?php
                    $textBlock = [
                        'title' => 'Scaliger Tombs',
                        'badges' => [
                            ['type' => 'badge', 'text' => 'Seen'],
                            ['type' => 'badge-outline', 'text' => 'not Visited']
                        ],
                        'content' => '<p>The Scaliger Tombs are just a short walk from Piazza dell\'Erbe and definitely worth a few minutes. They\'re Gothic, beautiful, and were built for the rich and powerful Della Scala family, who ruled Verona in the 13th–14th centuries. Some are renovated, some aren\'t, but the details are incredible. I was stubborn at first, but my mom dragged me there—and I ended up loving it. It\'s a quick stop, but it gives a real feel of Verona\'s history and style. <a href="https://www.visitverona.it/en/poi/scaligeri-graves" class="list-link">(VisitVerona.it)</a></p>'
                    ];
                    include __DIR__ . '/../../components/text-block-title.php';
                    ?>
                </div>
                <!-- Right Side -->
                <div class="page-split-right">
                    <?php
                    $gallery = ['src' => '../../assets/images/architecture/scaligeri-tombs.JPG', 'alt' => 'Peek at the Tombs'];
                    include __DIR__ . '/../../components/gallery-single.php';
                    ?>
                </div>
            </div>
        </div>
    </main>

    <?php include __DIR__ . '/../../components/footer.php'; ?>

    <script src="../../assets/js/script.js"></script>
</body>

</html>
