@extends('layouts.main')

@section('title', 'My Profile')

@section('content')
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
    <section class="container-fluid" id="profiles">

        <div class="container profile_text">
            <div class="row">
                <h3 class="text-body-secondary">Hello, I'm</h3>
                <h1>Devin</h1>
            </div>
            <p class="">an IT enthusiast who is currently enrolled in one of the most prestigious universities in Indonesia, <b>Bina Nusantara University</b>.</p>
            <a class="btn btn-primary" href="#More_About_Me">Reach me out!</a>
        </div>

        <div class="crop">
            <img class="img-fluid" src="{{ asset('asset/profilepic-removebg.png') }}" alt="">
        </div>
    </section>


    <section class="container" id="proficiency" data-aos="fade-up" data-aos-duration="2000">
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
                <div class="edu_text" id="yaohua" data-aos="fade-left" data-aos-duration="2000">
                    <div class="edu_textisi">
                        <h3>Shenzhen Yaohua Experimental School</h3>
                        <h5>High School | Sep 2017 – Jul 2020</h5>
                    </div>
                </div>
                <div class="gap"></div>
                <div class="edu_crop" id="gembalabaik_pic" data-aos="fade-left" data-aos-duration="2000">
                    <img src="{{ asset('asset/gembalabaik.jpg') }}" alt="">
                </div>
            </div>

            <div class="line_box">
                <div class="line" data-aos="fade-down">
                    <div class="circle" data-aos="flip-right" data-aos-duration="1500">
                        <img src="{{ asset('asset/yaohua_logo.jpg') }}" alt="">
                    </div>
                    <div class="gap"></div>
                    <div class="circle" data-aos="flip-right" data-aos-duration="1500">
                        <img src="{{ asset('asset/gembalabaik_logo.jpg') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="edu_box">

                <div class="edu_crop" id="yaohua_pic" data-aos="fade-right" data-aos-duration="2000">
                    <img src="{{ asset('asset/yaohua.jpg') }}" alt="">
                </div>
                <div class="gap"></div>
                <div class="edu_text" id="gembalabaik" data-aos="fade-right" data-aos-duration="2000">
                    <div class="edu_textisi">
                        <h3>Gembala Baik School</h3>
                        <h5>Primary & Secondary School | Jul 2008 – Jun 2017</h5>
                    </div>
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
            <button data-aos="fade-left" data-aos-duration="2000" class="project_box" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                <img src="{{ asset('asset/project_poorbye2-removebg.png') }}" alt="">
                <h5>Poorbye</h5>
            </button>
            <button data-aos="fade-left" data-aos-duration="2000" class="project_box" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                <img src="{{ asset('asset/jantung-removebg.png') }}" alt="">
                <h5>Heart Disease Predictor</h5>
            </button>
            <button data-aos="fade-left" data-aos-duration="2000" class="project_box" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                <img src="{{ asset('asset/project_heroin2-removebg.png') }}" alt="">
                <h5>HeroIn</h5>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="{{ asset('asset/project_poorbye2-removebg.png') }}" alt="">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Poorbye</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- carousel start--}}
                        <div class="crop">
                            <div id="carouselExampleAutoplaying1" class="carousel slide" data-bs-ride="carousel">
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
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="{{ asset('asset/project_pic_crop.jpeg') }}" class="d-block w-100" alt="...">
                                </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying1" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying1" data-bs-slide="next">
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
                        <img src="{{ asset('asset/jantung-removebg.png') }}" alt="">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Heart Disease Predictor</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- carousel start--}}
                        <div class="crop">
                            <div id="carouselExampleAutoplaying2" class="carousel slide" data-bs-ride="carousel">
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
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        {{-- carousel end --}}

                        <p>HeartHeart disease is a major public health concern affecting millions of people worldwide. It refers to a range of conditions that affect the heart, including coronary artery disease, heart failure, arrhythmias, and valve disorders.
                            The goal of heart disease prediction is to enable early intervention and targeted prevention strategies, such as lifestyle modifications, medication, and surgery, to reduce the risk of heart disease and its associated complications.
                        </p>
                    </div>

                </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="{{ asset('asset/project_heroin2-removebg.png') }}" alt="">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">HeroIn</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- carousel start--}}
                        <div class="crop">
                            <div id="carouselExampleAutoplaying3" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                                <div class="carousel-inner">
                                <div class="carousel-item  active" data-bs-interval="3000">
                                    <img src="{{ asset('asset/project_heroin1.png') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="{{ asset('asset/project_heroin2.png') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="{{ asset('asset/project_heroin3.jpeg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="{{ asset('asset/project_heroin4.jpeg') }}" class="d-block w-100" alt="...">
                                </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying3" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying3" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        {{-- carousel end --}}

                        <p>Memorizing the face of Heroes could be a challenging task to do, especially for nowadays generation, who tend to forget the contribution of Heroes who died for this country. Therefore, HeroIn was created in order to solve this issue, by helping people to easily recognize Heroes, who deserve to be known.</p>
                    </div>

                </div>
                </div>
            </div>

        </div>
        <div class="big" data-aos="zoom-in" data-aos-duration="2000">
            <img src="{{ asset('asset/projects_pic.png') }}" alt="">
        </div>
    </section>



    <section id="More_About_Me" class="container-fluid">
        <div class="container" id="more_dalam">
            <div class="more_box" data-aos="fade-right" data-aos-duration="2000">
                <h2>More About Me</h2>
                <div class="line"></div>
                <div class="social">
                    <div class="social_top">
                        <a href="https://github.com/devinwong278/ " target="_blank" class="social_box">
                            <img src="{{ asset("asset/github.png") }}" alt="">
                            <p>Github</p>
                        </a>
                        <a href="https://www.linkedin.com/in/devin-wong-1602991a1/" target="_blank" class="social_box">
                            <img src="{{ asset('asset/linkedin.png') }}" alt="">
                            <p>LinkedIn</p>
                        </a>
                        <a href="https://www.instagram.com/devinwong27/" class="social_box" target="_blank">
                            <img src="{{ asset('asset/instagram.png') }}" alt="">
                            <p>Instagram</p>
                        </a>
                    </div>

                    <div class="social_bottom">
                        <p>devinwong278@gmail.com</p>
                        <a class="btn btn-secondary" href="mailto: devinwong278@gmail.com">Say hello!</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="biru_box"></div>


    </section>
  </div>

@endsection
