<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&family=Young+Serif&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header.php -->
    <?php include("header.php"); ?>
    <!-- Section -->
    <section class="bloc_bd">
        <div class="header_comics">
            <h1>Les sorties comics de la semaine</h1>
            <a href="//">Afficher plus</a>
        </div>
        <div class="mainBloc">
            <div class="bloc">
                <img src="images/batmanJ.jpeg" alt="Batman & Joker">
            </div>
            <div class="bloc">
                <img src="images/dark-knights-of-steel-tome-1.jpg" alt="">
            </div>
            <div class="bloc">
                <img src="images/papergirl.jpeg" alt="Papergirl">
            </div>
            <div class="bloc">
                <img src="images/daredevil.jpg" alt="Daredevil Mark Waid">
            </div>
            <div class="bloc">
                <img src="images/poison-ivy-infinite.jpg" alt="Poison Ivy tome1">
            </div>
            <div class="bloc">
                <img src="images/nice_house.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="bloc_bd">
    <div class="header_comics">
            <h1 id="test">Les sorties mangas de la semaine</h1>
            <a href="//">Afficher plus</a>
        </div>
        <div class="mainBloc">
            <div class="bloc">
                <img src="images/danse_nuit.jpg" alt="Batman & Joker">
            </div>
            <div class="bloc">
                <img src="images/jumbo_max.jpg" alt="">
            </div>
            <div class="bloc">
                <img src="images/vinland.jpg" alt="Papergirl">
            </div>
            <div class="bloc">
                <img src="images/kujo.jpg" alt="Daredevil Mark Waid">
            </div>
            <div class="bloc">
                <img src="images/evol.jpg" alt="Poison Ivy tome1">
            </div>
            <div class="bloc">
                <img src="images/drcl.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="bloc_bd" >
    <div class="header_comics">
            <h1>Les sorties BD Franco/Belge de la semaine</h1>
            <a href="//">Afficher plus</a>
        </div>
        <div class="mainBloc">
            <div class="bloc">
                <img src="images/Rip.jpg" alt="Batman & Joker">
            </div>
            <div class="bloc">
                <img src="images/loish.jpg" alt="">
            </div>
            <div class="bloc">
                <img src="images/bayou.jpg" alt="Papergirl">
            </div>
            <div class="bloc">
                <img src="images/alva.jpg" alt="Daredevil Mark Waid">
            </div>
            <div class="bloc">
                <img src="images/saint_elme.jpg" alt="Poison Ivy tome1">
            </div>
            <div class="bloc">
                <img src="images/brume.jpg" alt="">
            </div>
        </div>
    </section>
    <!-- Footer.php -->
    <?php include("footer.php"); ?>
    <script type="module" src="index.js"></script>
</body>

</html>