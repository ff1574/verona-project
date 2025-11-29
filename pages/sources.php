<?php $basePath = '..'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Split Layout Example - Nora in Verona</title>
    <link rel="stylesheet" href="../assets/css/styles.css" />
</head>

<body>
    <?php include __DIR__ . '/../components/navbar.php'; ?>
    <main class="container">
        <section class="hero">
            <h1>Sources</h1>
        </section>

        <div class="page-split">
            <!-- Left Side -->
            <div class="page-split-left">
                <!-- Text Block with Title -->
                <div class="component text-block-title">
                    <h2>Information</h2>
                    <p>
                        Each information that was mentioned from some other source was cited at the end of the
                        respective paragraph it was used in. Here is a list of all of them:
                    </p>
                    <p>Sources:</p>
                    <ul>
                        <li><a class="list-link" href="https://www.visitgarda.com/en/garda-unico/?s=578">Lake Garda</a>
                        </li>
                        <li><a class="list-link" href="https://www.padova.com/">Padova</a></li>
                        <li><a class="list-link" href="https://www.gardaland.it/en/">Gardaland</a></li>

                        <li><a class="list-link" href="https://www.funiviedelbaldo.it/en/">Funivia del Baldo</a>
                        </li>
                        <li><a class="list-link" href="https://www.visitmalcesine.com/en/">Visit Malcesine</a>
                        </li>

                        </li>
                        <li><a class="list-link" href="https://tocati.it/en/">Tocati International Festival of Games</a>
                        </li>
                        <li><a class="list-link" href="https://www.arena.it/en/arena-verona-opera-festival/">Summer
                                Opera Festival</a></li>
                        <li><a class="list-link"
                                href="https://www.vinitaly.com/en/events/vinitaly-and-the-city/verona/">Vinitaly</a>
                        </li>
                        <li><a class="list-link" href="https://casa-di-giulietta.it/">Casa di Giulietta</a></li>
                        <li><a class="list-link"
                                href="https://en.wikipedia.org/wiki/San_Giorgio_in_Braida%2C_Verona">San Giorgio in
                                Braida</a></li>
                        <li><a class="list-link"
                                href="https://www.chieseverona.it/en/our-churches/the-cathedral-complex">The Cathedral
                                Complex</a></li>
                        <li><a class="list-link" href="https://www.visitverona.it/en/poi/scaligeri-graves">Scaligeri
                                Tombs</a></li>
                        <li><a class="list-link" href="https://www.italy-museum.com/venice/arena-verona">Arena di
                                Verona</a></li>
                        <li><a class="list-link"
                                href="https://museoarcheologico.comune.verona.it/nqcontent.cfm?a_id=43627&lang=en">Roman
                                Theatre</a></li>
                        <li><a class="list-link"
                                href="https://www.hotelveronesilatorre.it/en/vacations-in-verona/castel-san-pietro/">San
                                Pietro Hill</a></li>
                        <li><a class="list-link"
                                href="https://www.visitmalcesine.com/en/malcesine-monte-baldo-cable-car">Monte Baldo</a>
                        </li>
                        <li><a class="list-link" href="https://www.visitmalcesine.com/en">Malcesine</a></li>

                        <li><a class="list-link"
                                href="https://wanderlog.com/place/details/22806/galleria-darte-moderna-achille-forti">Wanderlog</a>
                        </li>
                        <li><a class="list-link"
                                href="https://artsandculture.google.com/partner/galleria-d-arte-moderna-achille-forti">Google
                                Arts & Culture</a></li>
                        <li><a class="list-link" href="https://gam.comune.verona.it/nqcontent.cfm?a_id=42701">Official
                                Website</a></li>
                        <li><a class="list-link" href="https://palazzomaffeiverona.com/en/visit/">Maffei</a></li>
                        <li><a class="list-link"
                                href="https://museodicastelvecchio.comune.verona.it/nqcontent.cfm?a_id=42545">Museo di
                                Castelvecchio</a></li>
                        <li><a class="list-link" href="https://www.google.com/maps/place/Verona">Map</a></li>
                        <li><a class="list-link" href="https://whc.unesco.org/en/list/797/">History</a></li>
                    </ul>
                </div>
            </div>

            <!-- Right Side -->
            <div class="page-split-right">
                <div class="component text-block-title">
                    <h2>Images</h2>
                    <p>
                        I proudly declare that more than 90% of the images on this entire website are my own. Images
                        that are not are listed here together with the source I took them from:
                    </p>

                    <div class="component gallery gallery-single">
                        <img src="../assets/images/outside-sources/roman-theater-of-amman.jpg" alt="Roman Theatre"
                            class="gallery-image" />
                        <p>Source: <a class="list-link"
                                href="https://en.wikipedia.org/wiki/Roman_Theatre_%28Amman%29#/media/File:Roman_theater_of_Amman_01.jpg">Roman
                                Theatre</a></p>
                    </div>

                    <div class="component gallery gallery-single">
                        <img src="../assets/images/outside-sources/porta-leoni-borsari.jpg"
                            alt="Porta Borsari & Porta Leoni" class="gallery-image" />
                        <p>Source: <a class="list-link"
                                href="https://culturetravel.com/wp-content/uploads/2015/12/Verona_IMG_3407.jpg">Porta
                                Borsari & Porta Leoni</a></p>
                    </div>

                    <div class="component gallery gallery-single">
                        <img src="../assets/images/outside-sources/san-zeno-inside.jpg"
                            alt="Basilica di San Zeno Maggiore" class="gallery-image" />
                        <p>Source: <a class="list-link"
                                href="https://www.chieseverona.it/en/our-churches/the-basilica-of-san-zeno">Basilica di
                                San Zeno Maggiore</a></p>
                    </div>

                    <div class="component gallery gallery-single">
                        <img src="../assets/images/outside-sources/vinitaly-web.png" alt="Vinitaly"
                            class="gallery-image" />
                        <p>Source: <a class="list-link"
                                href="https://www.vinitaly.com/en/events/vinitaly-and-the-city/verona/">Vinitaly</a></p>
                    </div>

                    <div class="component gallery gallery-single">
                        <img src="../assets/images/outside-sources/vinitaly-photo.jpg" alt="Vinitaly Piazza dei Signori"
                            class="gallery-image" />
                        <p>Source: <a class="list-link"
                                href="https://www.vinitaly.com/en/events/vinitaly-and-the-city/verona/event-area/piazza-dei-signori/">Vinitaly
                                Piazza dei Signori</a></p>
                    </div>

                    <div class="component gallery gallery-single">
                        <img src="../assets/images/outside-sources/games.jpg"
                            alt="International festival of Games - street photo" class="gallery-image" />
                        <p>Source: <a class="list-link"
                                href="https://www.fsnews.it/it/eventi/spettacolo/2022/9/5/tocati-2022-verona-cosa-e-programma-festival-giochi-strada.html">International
                                festival of Games - street photo</a></p>
                    </div>

                    <div class="component gallery gallery-single">
                        <img src="../assets/images/outside-sources/tocati-porta-nuova.jpg"
                            alt="International festival of Games - symbol" class="gallery-image" />
                        <p>Source: <a class="list-link"
                                href="https://www.hotelveronesilatorre.it/en/vacations-in-verona/tocati-verona/">International
                                festival of Games - symbol</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="../assets/js/script.js"></script>
</body>

</html>