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
    <title>About Me</title>
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
                <img src="img/PersonalInfo.svg " alt="" class="image-fluid mx-5 w-50 d-none d-sm-block">
                <div>
                    <h1 class="mx-1">Here's what I do when I'm not programming or tinkering in my homelab!</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div>
                <h1 class="text-primary">Running</h1>
            </div>
            <div class="py-3">
                <p class="p-3">
                    I have been running competatively since 2015 when I first joined cross country. Since then I have been
                    a part of a state champion track team, ran many all-state track and cross country performances, qualified
                    for a national level meet set my high-school's cross country 5K school record, and have even qualified for 
                    nationals at the collegiate level.
                </p>
                <p class="p-3">
                    This is even just a very brief overview of my accomplishments as a runner. Check out the following list
                    of my running PRs:
                </p>
                <ul class="py-1 px-3">
                    <ul>
                        <li>
                            Track:
                            <ul>
                                <li>400m: 54.95 seconds</li>
                                <li>800m: 1:58 (split) 2:02 (open)</li>
                                <li>1600m 4:23 1 mile conversion: 4:24</li>
                                <li>3200m 9:26 2 mile conversion: 9:29</li>
                            </ul>
                        </li>
                        <li>
                            Cross Country
                            <ul>
                                <li>5K: 15:42 (Fastest in Ithaca High School History)</li>
                                <li>8K: 26:02 (Collegiate)</li>
                            </ul>
                        </li>
                        <li>
                            Road:
                            <ul>
                                <li>5K: 15:24</li>
                                <li>10K: 32:50</li>
                            </ul>
                        </li>
                    </ul>
                </ul>
                <p class="p-3">
                    As you can see, I've devoted a lot of my time and effort into my running career. I believe this shows
                    that it's very easy for me to be able to put my mind towards something. While I no longer run for a
                    team, I still recreationally. I actually plan on running a marathon at the end of May 2022!
                </p>
            </div>
            <div>
                <h1 class="text-primary">Other Activities</h1>
            </div>
            <div class="py-3">
                <p class="p-3">
                    Besides running, I enjoy a host of other activities such as hanging out with friends, reading, playing
                    video games with said friends, and watching YouTube videos.
                </p>
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
</body>
</html>