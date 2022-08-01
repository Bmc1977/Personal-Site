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
    <title>Documents</title>
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
                <img src="img/Files.svg" id="files" alt="" class="image-fluid w-50 d-none d-sm-block">
                <div>
                    <h1>Interested in my <span class="text-warning">documents?</span></h1>
                    <p class="lead my-4 pl-5 ml-3">
                        On this page you can currently find my resume, but I hope to add other relevant documents
                        in the future.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white text-dark">
        <div class="container">
            <h1 class="text-primary my-4">Resume</h1>
            <p>If you prefer to download it: click <a href="files/BraxtonLameyResume.pdf">here</a>.</p>
        </div>
        <div class="align-items-center justify-content-between">
            <embed src="files/Brochure.pdf" type="application/pdf" width="80%" height="600px" style="margin: auto;"/>
            
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
