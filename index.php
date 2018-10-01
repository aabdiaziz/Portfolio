<?php

require 'php/aboutMe.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Abdi's Portfolio</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="images/full-stack.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
</head>
<body>
    <header>
        <navbar>
            <a class="toggle open" href="#nav"><img class="burger" src="images/burger.png" alt=""/></a>
            <ul id="nav">
                <li><a class="toggle close" href="#current">Close</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#About">About Me</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contactInfo">Contact Info</a></li>
            </ul>

            <div class="socials">
                <a class="socialLinks" href="https://www.facebook.com/aabdiaziz16"><img class="imgsocial" src="images/facebook.png" alt=""/></a>
                <a class="socialLinks" href="https://www.linkedin.com/in/abdirahman-abdiaziz-aa9112136/"><img class="imgsocial" src="images/linkedin.png" alt=""/></a>
                <a class="socialLinks" href="https://www.github.com/aabdiaziz"><img class="imgsocial" src="images/github.png" alt=""/></a>
            </div>
        </navbar>



        <div class="landing-page">
            <img class="fullstackimg" src="images/full-stack.png" alt="Logo"/>
            <h1>ABDI ABDIAZIZ</h1>
            <form action="#About">
                <button class="landingbtn">Check Out Portfolio</button>
            </form>
        </div>

    </header>

    <main>

        <div class="aboutContent" id="About">
            <div class="content">
                <h1><?php echo $title; ?></h1>
                <p><?php echo $content; ?></p>
            </div>
        </div>

        <div class="projects" id="projects">
            <p class="titleProjects">Projects</p>
            <div class="cards">
                <div class="card">
                    <a href="mini/pilotshop/pilot-shop.html"><div class="pilotShop"></div></a>
                    Pilot shop
                </div>
                <div class="card">
                    <a href="mini/html+css/helloworld.html"><div class="htmlProject"></div></a>
                    HTML + CSS Project
                </div>
                <div class="card">
                    <div class="creepyPanda">
                    </div>
                    Pilot shop
                </div>
                <div class="card">
                    <div class="creepyPanda">
                    </div>
                    Pilot shop
                </div>
                <div class="card">
                    <div class="creepyPanda">
                    </div>
                    Pilot shop
                </div>
                <div class="card">
                    <div class="creepyPanda">
                    </div>
                    Pilot shop
                </div>
            </div>
        </div>

        <div class="contactMe" id="#contactInfo">
            <div class="content">
                <div class="contactContainer">
                    <p class="titleProjects">Contact me</p>
                    <form action="submit">
                        <input placeholder="Enter Name" type="text"/>
                        <input placeholder="Enter Email Address" class="contact" type="text"/>
                        <input placeholder="What did you want to ask?" class="contact" type="text"/>
                        <input class="contactSub" type="submit"/>
                    </form>
                </div>
            </div>
    </main>

    <footer>
        <div class="footer">
            <h2>&copy;</h2>
            <div class="socials">
                <a class="socialLinks" href="https://www.facebook.com/aabdiaziz16"><img class="imgsocial" src="images/facebook.png" alt=""/></a>
                <a class="socialLinks" href="https://www.linkedin.com/in/abdirahman-abdiaziz-aa9112136/"><img class="imgsocial" src="images/linkedin.png" alt=""/></a>
                <a class="socialLinks" href="https://www.github.com/aabdiaziz"><img class="imgsocial" src="images/github.png" alt=""/></a>
            </div>

        </div>
    </footer>

</body>
</html>