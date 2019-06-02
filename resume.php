<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Resume</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <div class="resume-parallax">
        <h1 class="welcome">Resume</h1>
    </div>
    <?php include'templates/nav.php'?>

    <main>
        <div class="ResumeColumns">
            <div class="blackColumn">
                <div class="resumeList-Black">
                    <h2>Education</h2>
                    <ul>
                        <li>Coded websites using HTML and CSS</li>
                        <li>Collaborated extensively with classmates</li>
                        <li>Presented on several topics</li>
                        <li>Collaborated with classmate to create a hypothetical humanitarian invention</li>
                        <li>3.9 GPA</li>
                    </ul>

                    <h2>Computer Software &amp; Programing</h2>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>Javascript</li>
                        <li>Php</li>
                        <li>Basic image editing</li>
                        <li>GitHub</li>
                        <li>Microsoft Office</li>
                    </ul>
                </div>
            </div>
            <div class="whiteColumn">
                <div class="resumeListWhite">
                    <h2>Other Skills</h2>
                    <ul>
                        <li>Speak read and write Spanish</li>
                        <li>Translate Spanish to English and vice versa</li>
                        <li>Basic French</li>
                        <li>Basic Russian</li>
                        <li>Strong collaboration skills</li>
                    </ul>
                    <div class="icons-about-me">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
