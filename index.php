<?php require("functions.php");
    tplHead("Panzer aus der Welt", "index");
    tplHeader("index", "Panzer aus der Welt");
?>

<main>

    <div class="imageSlider">


        <div class="slide">
            <a href="gepard.php"><img src="/images/Gepard.jpg" alt="Gepard">
                <div class="text">
                    <a class="prev" onclick="slide(-1)">❮</a>
                    Gepard
                    <a class="prev" onclick="slide(1)">❯</a>
                </div>
        </div>

        <div class="slide">
            <a href="puma.php"><img src="/images/puma.jpg" alt="Der Puma IFV">
                <div class="text">
                    <a class="prev" onclick="slide(-1)">❮</a>
                    Puma
                    <a class="prev" onclick="slide(1)">❯</a>
                </div>

        </div>

        <div class="slide">
            <a href="m1ax.php"><img src="/images/m1ax.png" alt="Der M1 AbramsX">
                <div class="text">
                    <a class="prev" onclick="slide(-1)">❮</a>
                    M1 AbramsX
                    <a class="prev" onclick="slide(1)">❯</a>
                </div>
        </div>

        <div class="slide">
            <a href="ratte.php"><img src="/images/ratte.jpg" alt="Die Ratte">

                <div class="text">
                    <a class="prev" onclick="slide(-1)">❮</a>
                    Ratte
                    <a class="prev" onclick="slide(1)">❯</a>
                </div>

        </div>

        <div class="controls">


        </div>


        <script src="slideshow.js"></script>

    </div>

</main>

<?php tplFooter(); ?>




