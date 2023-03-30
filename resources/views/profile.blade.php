<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devin's Profile</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Devin</a>


          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item"><a class="nav-link scrollto active" aria-current="page" href="#profiles">Profile</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link scrollto dropdown-toggle" href="#proficiency" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Proficiencies
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Skills</a></li>
                  <li><a class="dropdown-item" href="#">Tools</a></li>
                  {{-- <li><hr class="dropdown-divider"></li> --}}
                  <li><a class="dropdown-item" href="#">Foreign Language</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link scrollto" href="#org">Organizational Experience</a>
              </li>

              <li class="nav-item">
                <a class="nav-link scrollto" href="#education">Education</a>
              </li>

              <li class="nav-item">
                <a class="nav-link scrollto" href="#projects">Projects</a>
              </li>

              <li class="nav-item">
                <a class="nav-link scrollto" href="#contact">Reach me out</a>
              </li>

            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

    <section class="container" id="profiles">

        <div class="container profile_text">
            <div class="row">
                <h3 class="text-body-secondary">Hello, I'm</h3>
                <h1>Devin</h1>
            </div>
            <p class="">an IT enthusiast who is currently enrolled in one of the most prestigious universities in Indonesia, Bina Nusantara University. Envisioning a modern world with broader needs of information technology, I keep forcing myself to become one of the future contributors</p>
            <a class="btn btn-primary" href="">Reach me out!</a>
        </div>

        <img class="banner_img" src="{{ asset('asset/profilepic-removebg.png') }}" alt="">
    </section>


    <section class="container" id="proficiency">
        <h1 class="center">Proficiency</h1>

        <div class="container skills">
            <div class="skill_box">
                <img src="{{ asset('asset/webdev.png') }}" alt="">
                <h3>Web Development</h3>
                <p>It's the work that happens behind the scenes to make a website look great, work fast and perform well with a seamless user experience</p>
            </div>
            <div class="skill_box">
                <img src="{{ asset('asset/webdev.png') }}" alt="">
                <h3>Machine Learning</h3>
                <p>the use and development of computer systems that are able to learn and adapt, by using algorithms and statistical models to analyze and draw inferences from patterns in data</p>
            </div>
            <div class="skill_box">
                <img src="{{ asset('asset/webdev.png') }}" alt="">
                <h3>Database Management</h3>
                <p>Data management is the practice of collecting, keeping, and using data securely, efficiently, and cost-effectively</p>
            </div>
        </div>

        <div class="container ">
            <div class="container tools_box">
                <img src="{{ asset('asset/html-5.png') }}" alt="" class="tools_logo">
                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar text-bg-warning" style="width: 75%">75%</div>
                </div>
            </div>
        </div>
    </section>

    <section id="education">
        
    </section>

    <section id="org">

    </section>

    <section id="projects">

    </section>



    <section id="contact">



    </section>


</body>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/profile.js"></script>
</html>
