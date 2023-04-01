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
                <div class="skill_box" data-aos="zoom-in-right" data-aos-duration="1500">
                    <img src="{{ asset('asset/webdev.png') }}" alt="">
                    <h3>Web Development</h3>
                    <p>It's the work that happens behind the scenes to make a website look great, work fast and perform well with a seamless user experience</p>
                </div>
                <div class="skill_box" data-aos="zoom-in-up" data-aos-duration="1500">
                    <img src="{{ asset('asset/machine-learning.png') }}" alt="">
                    <h3>Machine Learning</h3>
                    <p>the use and development of computer systems that are able to learn and adapt, by using algorithms and statistical models to analyze and draw inferences from patterns in data</p>
                </div>
                <div class="skill_box" data-aos="zoom-in-left" data-aos-duration="1500">
                    <img src="{{ asset('asset/database-storage.png') }}" alt="">
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
                            <p>85%</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="0" style="width: 85%"></div>
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
                            <div class="progress-bar" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="0" style="width: 80%"></div>
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
                            <div class="progress-bar" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="0" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
                <div class="container tools_box">
                    <img src="{{ asset('asset/js.png') }}" alt="" class="tools_logo">
                    <div class="content">
                        <div class="text">
                            <p>Javascript</p>
                            <p>75%</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="0" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
                <div class="container tools_box">
                    <img src="{{ asset('asset/php.png') }}" alt="" class="tools_logo">
                    <div class="content">
                        <div class="text">
                            <p>PHP</p>
                            <p>75%</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="0" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
                <div class="container tools_box">
                    <img src="{{ asset('asset/python.png') }}" alt="" class="tools_logo">
                    <div class="content">
                        <div class="text">
                            <p>Python</p>
                            <p>70%</p>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" data-aos="fade-right" data-aos-duration="1000"  data-aos-offset="0" style="width: 70%"></div>
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
                        <h5>Primary & Secondary School | Jul 2008 – Jun 2017</h5>
                    </div>
                </div>
            </div>
        </section>

        <section id="org">

        </section>

        <section id="projects" class="container">
            {{-- <h1 class="center">My Projects</h1> --}}

            <div class="project">
                <h1 class="title">My Projects</h1>

                <!-- Button trigger modal -->
                <button class="project_box" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                    <img src="{{ asset('asset/project_poorbye2-removebg.png') }}" alt="">
                    <h5>Poorbye</h5>
                </button>
                <button class="project_box" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                    <img src="{{ asset('asset/jantung-removebg.png') }}" alt="">
                    <h5>Heart Disease Predictor</h5>
                </button>
                <button class="project_box" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                    <img src="{{ asset('asset/project_heroin2-removebg.png') }}" alt="">
                    <h5>HeroIn</h5>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Poorbye</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{-- carousel start--}}
                            <div class="crop">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                    <div class="carousel-item  active" data-bs-interval="3000">
                                        <img src="{{ asset('asset/project_poorbye1.jpeg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="3000">
                                        <img src="{{ asset('asset/project_poorbye2.jpeg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="3000">
                                        <img src="{{ asset('asset/project_poorbye3.jpeg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            {{-- carousel end --}}

                            <p>Poorbye is a money management web application which created by the team called J4song Dynasty. Our aim was to make any individual achieve financial stability through our prepared courses as well as money management calculator.Our first milestone was when we made it to our conference - <b>KomPoor</b> </p>
                            <p>Check more on <a href="https://poorbye.000webhostapp.com/">Poorbye</a></p>
                        </div>

                    </div>
                    </div>
                </div>

                 <!-- Modal -->
                 <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Heart Disease Predictor</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{-- carousel start--}}
                            <div class="crop">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                    <div class="carousel-item  active" data-bs-interval="3000">
                                        <img src="{{ asset('asset/project_ml1.jpeg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="3000">
                                        <img src="{{ asset('asset/project_ml2.jpeg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="3000">
                                        <img src="{{ asset('asset/project_ml3.jpeg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            {{-- carousel end --}}

                            <p></p>
                        </div>

                    </div>
                    </div>
                </div>

            </div>
            <div class="big">
                <img src="{{ asset('asset/projects_pic.png') }}" alt="">
            </div>
        </section>



        <section id="More_About_Me" class="container-fluid">
            <div class="container" id="more_dalam">
                <div class="more_box" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="700">
                    <h2>More About Me</h2>
                    <div class="line"></div>
                    <div class="social">
                        <div class="social_top">
                            <div class="social_box">
                                <img src="{{ asset("asset/github.png") }}" alt="">
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

            <img src="{{ asset('asset/footer_profilepic.png') }}" alt="">

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
