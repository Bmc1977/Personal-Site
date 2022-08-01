<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Braxton Lamey">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">
    <link href="index.css" rel="stylesheet" type="text/css">
    <title>Projects</title>
</head>
<body>
    <style>
        <?php include "index.css" ?>
    </style>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 fixed-top">
        <div class="container">
            <a href="index.php" id="homelink">Braxton Lamey</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="skills.php" class="nav-link">My Skills</a>
                    </li>
                    <li class="nav-item">
                        <a href="projects.php" class="nav-link">My Projects</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a href="documents.php" class="nav-link">Documents</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Showcase -->
    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>Interested in some of my <span class="text-warning">projects?</span></h1>
                    <p class="lead my-4">
                        My projects are hosted on my Github, but here you can find a detailed explaination
                        for each!
                    </p>
                    <a href="https://github.com/Bmc1977" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">
                        Go to my Github!
                    </a>
                </div>
                <img src="img/Projects.svg" alt="" class="image-fluid w-50 d-none d-sm-block">
            </div>
        </div>
    </section>

    <section class="bg-primary text-light p-4">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0">Projects</h3>
            </div>
        </div>
    </section>

    <!--Projects-->
    <section id="questions" class="p-5">
        <div class="container">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Python_Login
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  This is an ongoing project where I'm learning to work with GUIs and event-driven systems. I am
                  also learning about how to hash passwords and the best practices regarding security in this
                  area. The project is still in very early development, but I hope to have a very nice product soon!
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  CS50-Search
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  This project was my rendition of the first project in CS50's Web Programming with Python and
                  JavaScript. The goal of this project was to create a model of Google's Search feature including
                  standard search, image search, and advanced search. Part of this project was learning to use 
                  web redirects to create search functionality. This project is also where I learned my Bootstrap
                  5 skills, which is what drives the style behind the very website you're looking at!
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Java Guessing Game
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  This project is just a very simple example of some of my skills as a Java programming. This is
                  just a simple game where the user will try to guess the secret number and after each guess they
                  are told whether they are too high or too low.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                  Ray Tracing in a Weekend
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  This project (incomplete) is just my progess through Peter Shirley's "Ray Tracing in a Weekend."
                  The point of this project is to build a very simple raytracer using C++. While I'm not yet complete
                  with this piece of software, I have still learned so much about the math behind computer graphics,
                  how to implement said computer graphics, and have found a great appreciation for the people behind
                  software such as video games, graphics renderers, and movie renderers.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                  matplotlib
                </button>
              </h2>
              <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  If you have any knowledge of Python and its popular libraries, you're well-aware that I did
                  not write all of this code myself. This is actually an opensource project I have contributed to!
                  Within the project, I added some descriptive documentation (comments) to some of the functions.
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!--Footer-->
    <footer class="p-5 bg-dark text-white text-center position-relative">
      <div class="container">
          <div class="justify-content-center align-items-center">
              <a class="m-2" href="https://www.linkedin.com/in/braxton-lamey-520663181/"><img src="img/linkedin.png" alt=""></a>
          </div>
      </div>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

        
</body>
</html>