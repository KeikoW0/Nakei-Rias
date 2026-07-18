<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../styles/party.css">

    <title>Party Portfolio</title>
</head>

<body>

    <div class="header">

        <div class="header-top">

            <a href="../index.php#services" class="back-home">&#8592;</a>

            <h1>Party Portfolio</h1>

        </div>

    </div>

    <!-- CATEGORY -->

    <div class="category-bar">

        <button class="category active" onclick="showCategory('makeup', this)">Makeup</button>

        <button class="category" onclick="showCategory('busana', this)">Busana dan Aksesoris</button>

    </div>


    <!-- MAKEUP -->

    <section id="makeup" class="portfolio category-content">

        <div class="gallery">

            <img src="../assets/images/party/makeup/1.jpg">
            <img src="../assets/images/party/makeup/2.jpg">
            <img src="../assets/images/party/makeup/3.jpg">
            <img src="../assets/images/party/makeup/4.jpg">
            <img src="../assets/images/party/makeup/5.jpg">

        </div>

    </section>


    <!-- BUSANA -->

    <section id="busana" class="portfolio category-content" style="display:none;">

        <div class="gallery">

            <img src="../assets/images/party/busana/1.jpg">
            <img src="../assets/images/party/busana/2.jpg">
            <img src="../assets/images/party/busana/3.jpg">

        </div>

    </section>

    </section>

    <script src="../scripts/party.js"></script>

</body>

</html>