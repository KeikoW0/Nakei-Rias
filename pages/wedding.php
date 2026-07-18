<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../styles/wedding.css">

    <title>Wedding Portfolio</title>
</head>

<body>

    <div class="header">

        <div class="header-top">

            <a href="../index.php#services" class="back-home">&#8592;</a>

            <h1>Wedding Portfolio</h1>

        </div>

    </div>

    <!-- CATEGORY -->

    <div class="category-bar">

        <button class="category active" onclick="showCategory('makeup', this)">Makeup</button>

        <button class="category" onclick="showCategory('busana', this)">Busana dan Aksesoris</button>

        <button class="category" onclick="showCategory('dekorasi', this)">Dekorasi</button>

        <button class="category" onclick="showCategory('pelaminan', this)">Pelaminan</button>

        <button class="category" onclick="showCategory('tenda', this)">Tenda Hajat</button>

    </div>


    <!-- MAKEUP -->

    <section id="makeup" class="portfolio category-content">

        <div class="gallery">

            <img src="../assets/images/wedding/makeup/1.jpg">
            <img src="../assets/images/wedding/makeup/2.jpg">
            <img src="../assets/images/wedding/makeup/3.jpg">
            <img src="../assets/images/wedding/makeup/4.jpg">
            <img src="../assets/images/wedding/makeup/5.jpg">

        </div>

    </section>


    <!-- BUSANA -->

    <section id="busana" class="portfolio category-content" style="display:none;">

        <div class="gallery">

            <img src="../assets/images/wedding/busana/1.jpg">
            <img src="../assets/images/wedding/busana/2.jpg">
            <img src="../assets/images/wedding/busana/3.jpg">

        </div>

    </section>


    <!-- DEKORASI -->

    <section id="dekorasi" class="portfolio category-content" style="display:none;">

        <div class="gallery">

            <img src="../assets/images/wedding/dekorasi/1.jpg">
            <img src="../assets/images/wedding/dekorasi/2.jpg">
            <img src="../assets/images/wedding/dekorasi/3.jpg">

        </div>

    </section>


    <!-- PELAMINAN -->

    <section id="pelaminan" class="portfolio category-content" style="display:none;">

        <div class="gallery">

            <img src="../assets/images/wedding/pelaminan/1.jpg">
            <img src="../assets/images/wedding/pelaminan/2.jpg">
            <img src="../assets/images/wedding/pelaminan/3.jpg">

        </div>

    </section>


    <!-- TENDA -->

    <section id="tenda" class="portfolio category-content" style="display:none;">

        <div class="gallery">

            <img src="../assets/images/wedding/tenda/1.jpg">
            <img src="../assets/images/wedding/tenda/2.jpg">
            <img src="../assets/images/wedding/tenda/3.jpg">

        </div>

    </section>

    <script src="../scripts/wedding.js"></script>

</body>

</html>