<?php $basePath = '../..'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Religious heritage - Nora in Verona</title>
    <link rel="stylesheet" href="../../assets/css/styles.css" />
</head>

<body>
    <?php include __DIR__ . '/../../components/navbar.php'; ?>
    <main class="container">
        <section class="hero">
            <h2>Religious heritage </h2>
            <div class="content-right">
                <p>Churches, basilicas, and quiet spiritual corners — some big, some small, all beautiful.<br>Even if
                    you're not religious, they're worth seeing for the architecture, art, and the vibes.</p>
                <div class="list-group">
                    <ul class="content-list">
                        <li><a href="#maggiore" class="list-link">Basilica di San Zeno Maggiore</a></li>
                        <li><a href="#complex" class="list-link">The Cathedral Complex</a></li>
                        <li><a href="#anastasia" class="list-link">Basilica di Santa Anastasia</a></li>
                        <li><a href="#santuario" class="list-link">Santuario della Madonna di Lourdes</a></li>
                        <li><a href="#braida" class="list-link">San Giorgio in Braida</a></li>
                    </ul>
                </div>
        </section>

        <div class="page-single">
            <?php
            $textBlock = [
                'id' => 'maggiore',
                'title' => 'Basilica di San Zeno Maggiore',
                'badges' => [['type' => 'badge-outline', 'text' => 'not Visited']],
                'content' => '<p>Basilica di San Zeno Maggiore is one of Verona\'s most beautiful and peaceful spots. It\'s a Romanesque church built between the 10th and 14th centuries, famous for Mantegna\'s altarpiece and its stunning bronze doors and frescoes. Legend says Romeo and Juliet got married here, which just adds to the charm. It\'s a bit outside the center, quieter, and totally worth the visit.</p>'
            ];
            include __DIR__ . '/../../components/text-block-title.php';
            ?>

            <?php
            $gallery = ['src' => '../../assets/images/outside-sources/san-zeno-inside.jpg', 'alt' => 'Interior of the Basilica'];
            include __DIR__ . '/../../components/gallery-single.php';
            ?>

            <?php
            $textBlock = [
                'id' => 'complex',
                'title' => 'The Cathedral Complex',
                'badges' => [['type' => 'badge', 'text' => 'Visited']],
                'content' => '<p>I first noticed The Cathedral Complex when two cool cars parked nearby caught my attention. It is located in a quieter corner of the city, yet close to the river. The centerpiece is the Cathedral of Santa Maria Matricolare, a beautiful Romanesque–Gothic church that hides a stunning interior behind a modest facade. It\'s full of art, frescoes, and chapels — including frescoes by Girolamo dai Libri — and houses Titian\'s Assumption of the Virgin altar.</p><p>But the complex is more than just a single church. It includes: San Giovanni in Fonte – a Romanesque baptistery with a striking octagonal shape. Sant\'Elena – one of Verona\'s oldest churches, with parts dating back to early Christianity. The Canons\' Cloister and Bishop\'s Palace – peaceful spots to explore, reflecting centuries of religious and architectural history. Chapter Library – one of the oldest continuously operating libraries in the world. You need an entry ticket to visit the full complex, and opening hours are limited — so make sure to check <a href="https://www.chieseverona.it/en/our-churches/the-cathedral-complex" class="list-link">the official site</a> before you go.</p>'
            ];
            include __DIR__ . '/../../components/text-block-title.php';
            ?>

            <?php
            $gallery = [
                'main' => ['src' => '../../assets/images/religious-heritage/complex/interior-landscape.JPG', 'alt' => 'Inside the Cathedral'],
                'grid' => [
                    ['src' => '../../assets/images/religious-heritage/complex/cars.jpeg', 'alt' => 'The cars that caught my attention'],
                    ['src' => '../../assets/images/religious-heritage/complex/interior-vertical.JPG', 'alt' => 'Interior with the Organ'],
                    ['src' => '../../assets/images/religious-heritage/complex/interior-ceiling.JPG', 'alt' => 'Interior Ceiling']
                ]
            ];
            include __DIR__ . '/../../components/gallery-h-3v.php';
            ?>
        </div>

        <div class="page-split">
            <!-- Left Side -->
            <div id="anastasia" class="page-split-left">
                <?php
                $textBlock = [
                    'title' => 'Basilica di Santa Anastasia',
                    'badges' => [['type' => 'badge-outline', 'text' => 'not Visited']],
                    'content' => '<p>I didn\'t have time to go inside, but even from the outside, the Basilica di Sant\'Anastasia is stunning — a perfect example of Gothic architecture in Verona. Inside, it\'s known for its tall vaulted ceilings, vibrant frescoes, and the famous Saint George and the Princess fresco by Pisanello. It\'s one of the largest churches in the city and definitely worth a visit if you have time. You can check more about it here.</p>'
                ];
                include __DIR__ . '/../../components/text-block-title.php';
                ?>
            </div>
            <!-- Right Side -->
            <div class="page-split-right">
                <?php
                $gallery = ['src' => '../../assets/images/religious-heritage/basilica-di-santa-anastasia.JPG', 'alt' => 'Basilica di Santa Anastasia'];
                include __DIR__ . '/../../components/gallery-single.php';
                ?>
            </div>
        </div>

        <div class="page-single">
            <?php
            $textBlock = [
                'id' => 'santuario',
                'title' => 'Santuario della Madonna di Lourdes',
                'badges' => [['type' => 'badge', 'text' => 'Visited']],
                'content' => '<div class="content-box"><p>The Santuario della Madonna di Lourdes is a peaceful, modern church sitting high above Verona on Colle San Leonardo. Built over the ruins of an old Austro-Hungarian fortress, it stands out from most other churches in the city — the art inside is newer, colorful, and clearly made by modern artists, which gives the space a calm, fresh feeling. The terrace in front offers one of the best views of Verona, especially on a clear day.</p><p><br> For more about the church itself, visit this handy <a href="https://www.visitverona.it/it/luoghi/santuario-nostra-signora-di-lourdes" class="list-link">guide</a> I liked to use.</p><p><br> The walk up to the Santuario is also beautiful, and it is definitely <a href="#" class="list-link">an activity I would recommend</a>.</p></div>'
            ];
            include __DIR__ . '/../../components/text-block-title.php';
            ?>

            <?php
            $gallery = [
                'images' => [
                    ['src' => '../../assets/images/religious-heritage/santuario/climb-spin.JPG', 'alt' => "Me at the Entrance to the Santuario's Garden"],
                    ['src' => '../../assets/images/religious-heritage/santuario/garden-sculpture.JPG', 'alt' => 'Statue of Madonna in the Courtyard'],
                    ['src' => '../../assets/images/religious-heritage/santuario/jesus.jpeg', 'alt' => 'One of the Paintings inside the Santuario']
                ]
            ];
            include __DIR__ . '/../../components/gallery-3v.php';
            ?>

            <?php
            $textBlock = [
                'id' => 'braida',
                'title' => 'San Giorgio in Braida',
                'badges' => [
                    ['type' => 'badge-outline', 'text' => 'not Visited'],
                    ['type' => 'badge', 'text' => 'seen']
                ],
                'content' => '<p>The church of San Giorgio in Braida was a nice surprise on my self-guided walks. I didn\'t plan to visit, but when I discovered it near the river on the quieter side of town, I loved everything about the area – especially the green promenade and garden in front, where people hang out, have picnics, and enjoy the river view.</p><p>The church itself dates back to the 11th century and was rebuilt in Renaissance style, with the dome designed by Michele Sanmicheli. Inside, the highlight is The Martyrdom of Saint George by Paolo Veronese, but you\'ll also find works by artists like Tintoretto and dai Libri. It\'s not just a place to look inside — it\'s one of the best spots to relax and soak in Verona\'s charm from a different angle. <a href="https://en.wikipedia.org/wiki/San_Giorgio_in_Braida%2C_Verona" class="list-link">Wikipedia</a></p>'
            ];
            include __DIR__ . '/../../components/text-block-title.php';
            ?>

            <?php
            $gallery = ['src' => '../../assets/images/religious-heritage/san-giorgio.JPG', 'alt' => 'San Giorgio in Braida'];
            include __DIR__ . '/../../components/gallery-single.php';
            ?>
        </div>
    </main>

    <?php include __DIR__ . '/../../components/footer.php'; ?>

    <script src="../../assets/js/script.js"></script>
</body>

</html>
