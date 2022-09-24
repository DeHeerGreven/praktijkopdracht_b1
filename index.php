<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>


<body>


   <div class="container">

   <?php require_once 'header.php'; ?> 


        <div class="welcome">
            <p class="toptext2">Welkom!</p>
            <p class="main-text2">Welkom bij de opleiding Software developer! Digitaal is jouw lievelingstaal. Na Nederlands schrijf jij het beste C#, PHP, MYSQL en Javascript. Of misschien nu nog niet zo goed, maar na de opleiding Softwaredeveloper wel. Je leert programmeren. Apps bouwen. Websites maken. En software ontwikkelen die speciaal voor de wens van de klant is bedoeld. Je houdt van werken in teams en leert graag meer over ontwikkelprogramma’s.</p>
            <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="img/locatie-curio-terheijdenseweg-350-2.jpg" style="width: 100%">
                
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="img/software_developer.png" style="width: 100%">
                
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="img/thumb_softwaredeveloper.png" style="width: 100%">


                <script>
                    let slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                    showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                    showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                    let i;
                    let slides = document.getElementsByClassName("mySlides");
                    let dots = document.getElementsByClassName("dot");
                    if (n > slides.length) {slideIndex = 1}    
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += " active";
                    }
                </script>
                
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>



        <div class="grid">                
            <div class="large">
                <p class="toptext">Vakken</p>
                <p class="main-text">Je krijgt in het eerste jaar van de opleding te maken met deze 3 vakken:</p>
                <ul>
                    <li>Praktijkwerk</li>
                    <li>Web-development</li>
                    <li>Windows-development</li>                                    
                </ul>
                <h1>Praktijkwerk</h1>
                <p class="main-text">In het eerste jaar krijg je te maken met het vak Praktijkwerk. Hier werk je, individueel of in een groep, aan
                    een grote opdracht van de docent. Dat kan zijn dat je een website moet maken voor een klant of een applicatie. In dit vak is (als je in een team zit)
                    teamverband heel belangrijk. Zo kun je straks als je een baan hebt goed met een team overweg!  
                </p>

                <p class="main-text">Het vak Web-development ga je aan de slag met websites maken. De docent geeft jou de opdracht 
                    om een goede website te maken. Niet alleen het design is belangrijk bij dit vak. Je moet bijv. ook een inlogpagina maken of
                    een pagina maken waarin  je een account kunt aanmaken. Kortom, in dit vak leer je heel wat interresante dingen! 
                </p>

                <p class="main-text">Windows-development richt zich op het maken van apps en software. Hier ga je o.a. kassasystemen maken, entreeberekenaar maken of een kleine quiz.  
                </p>
                
            </div>

            <div class="small">
                <p class="toptext">Rooster</p>
                <p class="main-text">Hieronder zie je het rooster van het eerste schooljaar.</p>
                <img src="img/rooster-voor-pra_b1.png" alt="logo" class="logo">                
            </div>

            <div class="small">
                <p class="toptext">Versnellen</p>
                <p class="main-text">Bij je overgangsadvies wordt ook bekend gemaakt hoeveel jaar je op deze opleiding doet. Normaal
                    is dat 4 jaar. Als je de toets en het blok enorm goed begrepen hebt dan kan je ervoor kiezen om een 3-jarige opleiding te doen. 
                    Je kunt net na het begin van het tweede jaar de  je keuze nog veranderen naar 4 jaar.
                </p>
            </div>

            <div class="large">
            <p class="toptext">Blokken</p>
                <p class="main-text">Deze opleiding is verdeeld onder 8 blokken. Ieder schooljaar heeft twee blokken. Als je een 4-jarige opleiding doet, werk je van Blok A t/m G. Als je een versneller bent (een 3-jarige opleiding ) sla je blok E over. In blok G ga je stage lopen.  
                    Aan het einde van ieder blok is er een eindtoets. Die toets is om te kijken of je de stof van het
                afgelopen blok goed begrijpt. Na de toets krijg je een overgangsadvies. Die wordt niet alleen bepaald door de toets maar ook hoe je je gedraagt, of je je best doet en of je op tijd en aanwezig bent. De adviezen zijn onderverdeelt in drie kleuren:</p>
                <ul>
                    <li><span class="red">Rood</span><p>Als je de stof niet goed hebt begrepen krijg je rood. Je bent ook veel te vaak te laat gekomen en zelden aanwezig. Hierdoor moet je het hele blok opnieuw gaan doen. </p></li>
                    <li><span class="orange">Oranje</span><p>Als je stof nog niet helemaal goed begrijpt of je bent redelijk op tijd of best vaak afwezig krijg je oranje. Je gaat wel over maar wel met bepaalde afspraken. Als je aan die afspraken houdt krijg je groen.</p></li>
                    <li><span class="green">Groen</span><p>Als je stof goed begrijpt krijg je groen. Je bent ook op tijd en vaak aanwezig in de les.</p></li>                                    
                </ul>                  
            </div>

            <div class="large2">
                <p class="toptext3">Smoelenboek</p>
                <?php 

                $docenten = array ('Elton', 'Ine', 'Corne', 'Michel' , 'Joost', 'Tim');
                $random = array_rand($docenten, 4);?>

                <div class="docenten-images">
                        
                        <img src="img/<?php echo $docenten[$random[0]];?>.png">
                        <img src="img/<?php echo $docenten[$random[1]];?>.png">
                        <img src="img/<?php echo $docenten[$random[2]];?>.png">
                        <img src="img/<?php echo $docenten[$random[3]];?>.png">

                    
                </div>
                
                <div class="docenten-text">
                    
                    <p><?php echo $docenten[$random[0]];?></p>
                    <p><?php echo $docenten[$random[1]];?></p>
                    <p><?php echo $docenten[$random[2]];?></p>
                    <p><?php echo $docenten[$random[3]];?></p>

                </div>
            </div>

                
        </div>

   </div>
</body>
</html>