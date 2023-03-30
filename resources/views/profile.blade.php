<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devin's Profile</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet"> --}}
</head>
<body>
    <nav id="navbar-example2" class="navbar sticky-top bg-body-tertiary px-3 mb-3">
        <a class="navbar-brand" href="#">Devin</a>
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link" href="#profiles">Profile</a>
          </li>

          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Proficiency</a>
            <ul class="dropdown-menu" >
              <li><a class="dropdown-item" href="#skills">Skills</a></li>
              <li><a class="dropdown-item" href="#tools">Tools</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#language">Languages</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#More_About_Me">More</a>
          </li>
        </ul>

      </nav>
      <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
        <section class="container-fluid" id="profiles">

            <div class="container profile_text">
                <div class="row">
                    <h3 class="text-body-secondary">Hello, I'm</h3>
                    <h1>Devin</h1>
                </div>
                <p class="">an IT enthusiast who is currently enrolled in one of the most prestigious universities in Indonesia, Bina Nusantara University. Envisioning a modern world with broader needs of information technology, I keep forcing myself to become one of the future contributors</p>
                <a class="btn btn-primary" href="">Reach me out!</a>
            </div>

            <div class="crop">
                <img class="img-fluid" src="{{ asset('asset/profilepic-removebg.png') }}" alt="">
            </div>
        </section>


        <section class="container" id="proficiency">
            <h1 class="center">Proficiency</h1>

            <div class="container skills" id="skills">
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

            <div class="container tools" id="tools">
                <div class="container tools_box">
                    <img src="{{ asset('asset/html-5.png') }}" alt="" class="tools_logo">
                    <div class="content">
                        <div class="text">
                            <p>HTML</p>
                            <p>80%</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 80%"></div>
                        </div>
                    </div>
                </div>

                <div class="container tools_box">
                    <img src="{{ asset('asset/css-3.png') }}" alt="" class="tools_logo">
                    <div class="content">
                        <div class="text">
                            <p>CSS</p>
                            <p>80%</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
                <div class="container tools_box">
                    <img src="{{ asset('asset/js.png') }}" alt="" class="tools_logo">
                    <div class="content">
                        <div class="text">
                            <p>Javascript</p>
                            <p>80%</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
                <div class="container tools_box">
                    <img src="{{ asset('asset/php.png') }}" alt="" class="tools_logo">
                    <div class="content">
                        <div class="text">
                            <p>PHP</p>
                            <p>80%</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
                <div class="container tools_box">
                    <img src="{{ asset('asset/mysql.png') }}" alt="" class="tools_logo">
                    <div class="content">
                        <div class="text">
                            <p>MySQL</p>
                            <p>80%</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
                <div class="container tools_box">
                    <img src="{{ asset('asset/python.png') }}" alt="" class="tools_logo">
                    <div class="content">
                        <div class="text">
                            <p>Python</p>
                            <p>80%</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 80%"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container language" id="language">
                <div class="language_box">
                    <img src="{{ asset('asset/united-kingdom (1).png') }}" alt="">
                    <h4>English</h4>
                    <h5>IELTS: band 7.0</h5>
                </div>

                <div class="line"></div>

                <div class="language_box">
                    <img src="{{ asset('asset/china.png') }}" alt="">
                    <h4>Chinese</h4>
                    <h5>HSK 6: 252分</h5>
                </div>
            </div>
        </section>

        <section id="education">
            <h1 class="center">My Education Background</h1>
            <div class="educations">
                <div class="edu_box">
                    <div class="edu_text">
                        <h3>Shenzhen Yaohua Experimental School</h3>
                        <h5>High School | Sep 2017 – Jul 2020</h5>
                    </div>
                    <div class="edu_crop">
                        <img src="{{ asset('asset/yaohua.jpg') }}" alt="">
                    </div>
                </div>
                
                <div class="edu_box">
                    <div class="edu_crop">
                        <img src="{{ asset('asset/gembalabaik.jpg') }}" alt="">
                    </div>
                    <div class="edu_text">
                        <h3>Gembala Baik School</h3>
                        <h5>Primary & Secondary School | Jul 2014 – Jun 2017</h5>
                    </div>
                </div>
            </div>
        </section>

        <section id="org">

        </section>

        <section id="projects" class="container">
            <h1 class="center">My Projects</h1>
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            <div class="project_box">

            </div>
        </section>



        <section id="More_About_Me" class="container-fluid">
            <div class="container" id="more_dalam">
                <div class="more_box" data-aos="fade-right" data-aos-duration="1000">
                    <h2>More About Me</h2>
                    <div class="line"></div>
                    <div class="social">
                        <div class="social_top">
                            <div class="social_box">
                                <img src="{{ asset('asset/github.png') }}" alt="">
                                <p>Github</p>
                            </div>
                            <div class="social_box">
                                <img src="{{ asset('asset/linkedin.png') }}" alt="">
                                <p>LinkedIn</p>
                            </div>
                            <div class="social_box">
                                <img src="{{ asset('asset/instagram.png') }}" alt="">
                                <p>Instagram</p>
                            </div>
                        </div>

                        <div class="social_bottom">
                            <p>devinwong278@gmail.com</p>
                            <a class="btn btn-secondary" href="">Say hello!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="biru_box"></div>


        </section>
      </div>

    {{-- <nav class="navbar sticky-top navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Devin</a>


          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end">

            <li class="nav-item"><a class="nav-link scrollto active" aria-current="page" href="#profiles">Profile</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link scrollto dropdown-toggle" href="#proficiency" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Proficiencies
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Skills</a></li>
                  <li><a class="dropdown-item" href="#">Tools</a></li>
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

          </div>
        </div>
      </nav> --}}



    <footer>



        <div class="footer_text">
            <div class="footer_box">
                <h3>Contact Me</h3>
                <p>Address</p>
                <p>Phone</p>
                <p>Email</p>
                <p>Instagram</p>
            </div>

            <div class="footer_box">
                <h3>Info</h3>
                <p>Profile</p>
                <p>Proficiencies</p>
                <p>Experience</p>
                <p>Education</p>
                <p>More about me</p>
            </div>
        </div>

        <div class="baseline"></div>

        <div class="footer_down">
            <p>© 2023 Devin | All Rights Reserved</p>
        </div>
    </footer>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/profile.js"></script>
    <script src="node_modules/aos/dist/aos.js"></script>



</body>
<script>
    AOS.init();
</script>
</html>
