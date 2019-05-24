<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Preview</title>
</head>
<body>
    <div class="list-parallax">
        <h1>Portfolio Overview</h1>
    </div>
    <div class="list-white">
        <div class="list-columns">
            <div class="pc1">
                <h2>Title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium excepturi recusandae harum dolor. Veniam rem minus, hic obcaecati possimus animi, similique dolore officia numquam aspernatur, a ipsum, libero cum.</p>
            </div>
            <div class="space"></div>
            <div class="lc2">
                <h2>Title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deserunt itaque reiciendis iste quaerat. Et blanditiis tempore ea minima, labore quidem inventore, unde quis ipsa fugiat rerum, porro nobis in.</p>
            </div>
        </div>
    </div>

    <div class="list-black">
        <div class="slideshow">
            <div class="slide">
                <img class="columnimg" src="img/slideshow1.jpg" alt="A Brazilian city illuminated by multicolored lights at evening">
            </div>
            <div class="slide ">
                <img class="columnimg" src="img/slideshow2.jpg" alt="London Bridge with Big Ben in the background">
            </div>
            <div class="slide">
                <img class="columnimg" src="img/slideshow3.jpg" alt="Munich, Germany from a distance">
            </div>


            <div class="slide-nav">
                <a class="back" onclick="forward(-1)"><i class="fas fa-angle-left"></i></a>
                <div class="dotsdiv">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
                <a class="next" onclick="forward(1)"><i class="fas fa-angle-right"></i></a>
            </div>



        </div>
        <div class="icons">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
        </div>
    </div>

    <script>
        var slideIndex = 1;
        displaySlide(slideIndex);

        function forward(n) {
            displaySlide(slideIndex += n);
        }

        function currentSlide(n) {
            displaySlide(slideIndex = n);
        }

        function displaySlide(n) {
            var i;
            var slide = document.getElementsByClassName("slide");
            var dots = document.getElmentsByClassName("dot");
            if (n > slide.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slide.length
            }
            for (i = 0; i < slide.length; i++) {
                slide[i].style.display = "none";
            }
              for (i=0; i < dots.length; i++) {
                dots[i].className.replace("current-dot", "")
            }
            slide[slideIndex - 1].style.display = "block";
              dots[slideIndex - 1].className += "current-dot";
        }
    </script>

</body>
</html>