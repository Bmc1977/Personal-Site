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
    <title>Braxton Lamey</title>
</head>
<body>
    <!-- Navbar -->
    <style>
        <?php include "index.css" ?>
    </style>

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
                    <h1 class="text-warning">Hi, my name is Braxton!</h1>
                    <p class="lead my-4">
                        I'm a computer science student breaking in the Software Engineering industry!
                    </p>
                    <a href="about.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Learn More About Me!</a>
                </div>
                <img src="img/SuitHeadshot.jpg" alt="" class="image-fluid w-50 d-none d-sm-block">
            </div>
        </div>
    </section>

    <!-- Boxes -->
    <section class="p-5">
        <div class="container">
            <div class="row text-center g-2">
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                                <div class="h1 mb-3">
                                    <i class="bi bi-laptop"></i>
                                </div>
                            <h3 class="card-title mb-3">Relevant Skills</h3>
                            <p class="card-text">
                                Learn about why I would be a valuable
                                asset to your development team.
                            </p>
                            <a class="btn btn-primary" href="skills.php">Learn!</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                                <div class="h1 mb-3">
                                    <i class="bi bi-person-square"></i>
                                </div>
                            <h3 class="card-title mb-3">Projects</h3>
                            <p class="card-text">
                                Take a look at some of my development
                                projects that showcase some of my valuable
                                skills.
                            </p>
                            <a class="btn btn-dark" href="projects.php">Take a look!</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                                <div class="h1 mb-3">
                                    <i class="bi bi-people"></i>
                                </div>
                            <h3 class="card-title mb-3">Documents</h3>
                            <p class="card-text">
                                Read over some of my official documents, such as
                                my resume.
                            </p>
                            <a class="btn btn-primary" href="documents.php">Take me there!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-5 mx-5">
        <div class="container">
            <h1>Contact Me!</h1>
        </div>
        <div class="container">
            <form action="otherIndex.php" method="POST" class="mx-5">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Your Email</label>
                  <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">I'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Your Phone</label>
                    <input type="tel" class="form-control" name="phone">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <input type="text" class="form-control" name="message">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </form>
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