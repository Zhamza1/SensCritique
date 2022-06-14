<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Critique</title>
        <link rel="stylesheet" href="index.css"> 
        <link rel="stylesheet"  href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <link rel="icon" type="image/png" href="asset/logo.svg" /> 
        <script src="defilement.js" defer></script>

    </head>
    <body>
        
            <?php include_once('header.php') ?> 
        
        <div class="slidershow middle reveal-1">

          <div class="slides">
            <input type="radio" name="r" id="r1" checked>
            <input type="radio" name="r" id="r2">
            <input type="radio" name="r" id="r3">
            <input type="radio" name="r" id="r4">
            <input type="radio" name="r" id="r5">
            <div class="slide s1">
              <img src="asset/movie1.png" alt="film1">
            </div>
            <div class="slide">
              <img src="asset/movie2.png" alt="film2">
            </div>
            <div class="slide">
              <img src="asset/movie3.png" alt="film3">
            </div>
            <div class="slide">
              <img src="asset/movie4.png" alt="film4">
            </div>
          
          </div>

          <div class="navigation">
            <label for="r1" class="bar"></label>
            <label for="r2" class="bar"></label>
            <label for="r3" class="bar"></label>
            <label for="r4" class="bar"></label>
       
           </div>
        </div>
        
            
       <div class="marge">           
            <div class="textthumbnails">
                <h3 class="gauche"> <a href="affiche.php">A l'affiche</a></h3>
                <p class="droit"><a href="affiche.php">Tout voir</a></p>
            </div>
            <div class="thumbnails">
            </div>
        </div>


            <!-- Swiper -->
    <div class="netflix reveal-2">        
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie2.png" alt="image de film" ></a></div>
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie2.png" alt="image de film" ></a></div>
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie3.png" alt="image de film" ></a></div>
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie4.png" alt="image de film" ></a></div>
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie1.png" alt="image de film" ></a></div>
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie2.png" alt="image de film" ></a></div>
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie3.png" alt="image de film" ></a></div>
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie4.png" alt="image de film" ></a></div>
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie1.png" alt="image de film" ></a></div>
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie1.png" alt="image de film" ></a></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div> 
    </div> 
   



    <div class="marge1">           
            <div class="textthumbnails">
                <h3 class="gauche"> <a href="top.php">Top film</a></h3>
                <p class="droit"><a href="top.php">Tout voir</a></p>
            </div>
            <div class="thumbnails">
            </div>
        </div>


            <!-- Swiper -->
    <div class="netflix reveal-2">        
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie2.png" alt="image de film" ></a></div>
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie2.png" alt="image de film" ></a></div>
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie3.png" alt="image de film" ></a></div>
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie4.png" alt="image de film" ></a></div>
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie1.png" alt="image de film" ></a></div>
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie2.png" alt="image de film" ></a></div>
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie3.png" alt="image de film" ></a></div>
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie4.png" alt="image de film" ></a></div>
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie1.png" alt="image de film" ></a></div>
          <div class="swiper-slide"><a href="film.php"><img src="asset/movie1.png" alt="image de film" ></a></div>
        </div>
        <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
       
      </div> 
    </div> 


    <div class="center">
      <h2>Qu'est-ce que c'est ?</h2>
    <p>
      Critique Films vous permet de découvrir les meilleurs films à voir, qu'il s'agisse des films à voir au 
      cinéma en ce moment, des meilleurs films qui passent à la TV, des films cultes ou des grands classiques, 
      en organisant et structurant le bouche à oreilles. Les tops des membres vous permettent par exemple de découvrir 
      les meilleurs films de science-fiction, les meilleurs films d'amour,
      les meilleurs films d'animation, les meilleurs films de guerre et à peu près tous les genres et 
      thématiques que vous pouvez imaginer.</p>
    </div>

      
    <?php include_once("footer.php"); ?>
    
        <!-- Swiper JS -->
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 5,
          spaceBetween: 10,
          slidesPerGroup: 3,
          
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
      </script>   
    </body>
</html>


