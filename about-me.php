<?php
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About Me</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <div class="about-me-parallax">
        <h1>About Me</h1>
    </div>
    <?php include'templates/nav.php'?>

    <main>
        <div class="content-top">
            <div class="contentwhite-vertical">
                <p>Hello, my name is Stephen Dumore. I was born in Fullerton, CA; however, I moved to Clovis when I was two years old and have lived here since then. I’m taking Web Application Development at the Center for Advanced Research and Technology (CART). At CART, I’ve learned CSS and HTML which I used to create a website about a recent technology innovation. I’ve also done several other small projects.</p>
            </div>
            <div class="content-black-vertical">
                <p>Some of my hobbies include video games, reading, and linguistics. I built my own gaming pc back in 2016. Also, my love of languages has caused me to study Spanish. And I’ve become fluent enough to communicate with relative ease. I can also read and write Spanish.</p>
                <p>I’ve included samples of my work in the portfolio section of this website, and I’ve also included my linkedin profile among other ways of contacting me. Thank for your time, I hope that you consider me as a potential asset to your organization.</p>
            </div>
        </div>

        <div class="content-bottom">
            <img class="portrait" src="img/portrait.jpg" alt="A professional photo myself">
        </div>
    </main>
    <div class="form-parallax"></div>
    <div class="form-container">
        <form>
            <div class="form-name">
                <input class="name" type="text" id="fname" name="fname" placeholder="Organization...">
                <input class="email" type="text" id="email" name="fname" placeholder="Email...">
            </div>
            <textarea name="msg" id="msg" placeholder="Message..."></textarea>
            <input class="submit" type="Submit" value="Submit">
        </form>
    </div>
    <footer>
        <div class="icons-about-me">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
        </div>
    </footer>
</body>

</html>
