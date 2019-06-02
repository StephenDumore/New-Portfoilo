<?php 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About Me</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Aleo|Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <div class="home-parallax">
        <h1>Welcome!</h1>
    </div>
    <?php include'templates/nav.php'?>

    <div class="content-black">
        <div class="homecolumns">

            <div class="column1">
                <img class="columnimg" src="img/homecolumn1.jpg" alt="An an image of the Eifel Tower">
                <div class="columntxt">
                  <p>Hello, Potential Employers. My name is Stephen Dumore, welcome to my personal portfolio website. Here you can find information about myself along with samples of my work and my contact information.</p>
                </div>
            </div>

            <div class="column2">
                <img class="columnimg" src="img/homecolumn2.jpg" alt="An Italian town at sunset">
                <div class="columntxt">
                    <p>One of the projects I’ve completed at CART is CSS Zen Garden. Each student was provided the same HTML file which when loaded displays a basic and plainly laid out website. Our goal was to apply CSS to alter the layout and style of the webpage in order to create a stylized web page with greater visual appeal. Nearly the entirety of the project was completed using CSS the only use of HTML was changing the name of the document and changing the link tag so that it would link to the CSS file. The process taught me a lot about using CSS and the layout of a webpage</p>
                </div>
            </div>

            <div class="column3">
                <img class="columnimg" src="img/homecolumn3.jpg" alt="An areial view of Barcelona, Spain">
                <div class="columntxt">
                    <p>Another Project I completed was a personal website about a recent computer science related innovation. We were allowed to choose any recent computer science related innovation from the internet. We were then tasked with creating a multipage website featuring pictures lists a table, and a navigation bar summarizing the innovation. Primarily, we used html to create the website; however, I also used CSS to create the overhead navigation bar. By creating this website I learned the structure of an HTML document and how to create a table in HTML.  I also learned about the potential autonomous boats have to impact our world. </p>
                </div>
            </div>

        </div>
    </div>

    <div class="contentWhite">
        <div class="homeparagrphscon">
            <div class="p1">
                <p class="homeparagraph1">The main challenge that I encountered during the project was coming up with general style to use for the web page. Initially, I attempted base the website’s ascetic on the original Super Mario Bros. However, this proved to be far too complicated given my level of CSS experience at the time and highly impractical for a web page since it would have relied on scaling images as the background of specific elements which could not be stretched, without looking terrible. Also a web page is vertical and a  stage in Super Mario Bros. is horizontal which led to an awkward design. Eventually, I scraped the idea all together and styled the webpage that is in my current portfolio.</p>
            </div>
            <div class="p2">
                <p class="homeparagraph2">There wasn’t any particular element of the process that stood out as being challenging but the process of creating the website was somewhat challenging in general. I was still familiarizing myself with HTML and didn’t fully understand the structure of it initially. Conducting the research and then applying that knowledge to the written parts of the websites also proved to be challenging due to the obscurity of my topic</p>
            </div>
        </div>
        <div class="icons">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
        </div>
    </div>



</body>

</html>
