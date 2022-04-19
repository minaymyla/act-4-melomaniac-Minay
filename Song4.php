<!DOCTYPE html>
<html>
<body style="background-color:pink;">
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Melomaniac Activity</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top"> Ultimate Guitar </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-light" href="Song1.php">Song 1</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="Song2.php">Song 2</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="Song3.php">Song 3</a></li>
                         <li class="nav-item"><a class="nav-link text-light" href="Song4.php">Song 4</a></li>
                          <li class="nav-item"><a class="nav-link text-light" href="Song5.php">Song 5</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Welcome Hummies!</h1>
                <p class="lead">The best things in this world are indeed great blessings to us and we can really say tha despite of all the bad things that happens around us we still have a Wonderful World. </p>
                
            </div>
        </header>
        <!-- About section-->
        <section id="songs">
            <div class="container px-4 ">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class = "container">
                        <img src="images/image5.jpg" alt="..." width="250" class="rounded mb-2 img-thumbnail">
                        
                        <?php

                        echo "<h2 class='text-primary'>What a Wonderful World</h2>";
                        echo "<p class='lead '>Louis Armstrong</p>";
                
                        

                        echo "<p> Verse 1 </p>";
                        echo "<h5><pre>        C        Em     F         Em</h5>";
                        echo "<p> I see trees of green, red roses too</p>";
                        echo "<h5><pre> Dm         C       E7         Am</h5>";
                        echo "<p> I see them bloom, for me and you</p>";
                        echo "<h5><pre>       Ab            Dm7        G          C     G</h5>"; 
                        echo "<p> And I think to myself, what a wonderful world</p>";             
                        echo "<br/>";

                        echo "<p> [Verse 2]</p>";
                        echo "<h5><pre>     C        Em        F         Em</h5>";
                        echo "<p> I see skies of blue and clouds of white</p>";
                        echo "<h5><pre> Dm                 C        E7           Am</h5>";
                        echo "<p> The bright blessed day, the dark sacred night</p>";
                        echo "<h5><pre>       Ab            Dm7        G          C</>";
                        echo "<p> And I think to myself, what a wonderful world</p>";
                        echo "<br/>";

                        echo "<p>[Bridge]</p>";
                        echo "<h5><pre>     G                         C</h5>";
                        echo "<p> The colours of the rainbow, so pretty in the sky</p>";
                        echo "<h5><pre> G                       C</h5>";                      
                        echo "<p> Are also on the faces of people going by</p>";                      
                        echo "<h5><pre>         Am             Em          Am         Em</h5>";
                        echo "<p> I see friends shaking hands saying how do you do</p>";
                        echo "<h5><pre> F             Em    Dm   C   G</h5>";
                        echo "<p> They’re really saying I love you</p>";
                        echo "<br/>";

                        echo "<p>[Verse 3]</p>";
                        echo "<h5><pre>        C      Em        F           Em</h5>";
                        echo "<p> I hear babies crying, I watch them grow</p>";
                        echo "<h5><pre> Dm              C             E7        Am</h5>";
                        echo "<p> They'll learn much more than I'll ever know</p>";
                        echo "<h5><pre>       Ab              Dm7     G           C    Bb7   A7</h5>";
                        echo "<p> And I think to myself, what a wonderful world</p>";
                        echo "<h5><pre> Fmaj7           Dm7      G          C</h5>";
                        echo "<p> Yes I think to myself, what a wonderful world</p>";
                        echo "<br/>";

                        


                        ?>


                    </div>
                </div>
            </div>
        </section>

        <footer class="py-3 bg-danger">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; 2022. Myla G. Minay</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
