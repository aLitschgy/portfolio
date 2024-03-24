<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">

    <!-- ======================== UNICONS ======================== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ====================== SWIPER CSS ======================= -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <!-- ========================== CSS ========================== -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- ========================== CARTE ============================ -->
    <link href="assets/css/svgMap.min.css" rel="stylesheet">


    <title>Portfolio Antonin Litschgy</title>
</head>

<body>
    <!-- ======================== HEADER ======================== -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Antonin</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class="uil uil-estate nav__icon"></i> Home
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class="uil uil-user nav__icon"></i> About
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#qualification" class="nav__link">
                            <i class="uil uil-briefcase-alt nav__icon"></i> Qualification
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            <i class="uil uil-file-alt nav__icon"></i> Skills
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#modules" class="nav__link">
                            <i class="uil uil-briefcase-alt nav__icon"></i> Personnal work and projects
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#portfolio" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i> Portfolio
                        </a>
                    </li>
                    <li class="nav__item" style="display: none;">
                        <a href="#international" class="nav__link">
                            <i class="uil uil-message nav__icon"></i> International
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class="uil uil-message nav__icon"></i> Contact me
                        </a>
                    </li>
                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>

            <div class="nav__btns">
                <!-- Theme change button -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>

    <!-- ======================== MAIN ======================== -->
    <main class="main">

        <!-- ========== HOME ========== -->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="https://www.linkedin.com/in/litschgy-an/" target="_blank" class="home__social-icon">
                            <i class="uil uil-linkedin"></i>
                        </a>

                        <a href="https://github.com/aLitschgy" target="_blank" class="home__social-icon">
                            <i class="uil uil-github-alt"></i>
                        </a>
                    </div>
                    <div class="home__img">
                        <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                        130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                        97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                        0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                        165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                        129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                        -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                                <image class="home__blob-img" x='12' y='18' href="assets/img/profil.png" />
                            </g>
                        </svg>
                    </div>

                    <div class="home__data">
                        <h1 class="home__title">Antonin Litschgy</h1>
                        <h3 class="home__subtitle">ENSEEIHT student</h3>
                        <p class="home__description">Welcome to my personal, fully hand-coded website. Here you will find everything you want to know about me.</p>
                        <a href="#contact" class="button button--flex">
                            Contact me<i class="uil uil-message button__icon"></i>
                        </a>
                    </div>
                </div>

                <div class="home__scroll">
                    <a href="#about" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name">Scroll down</span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- ========== ABOUT ========== -->
        <section class="about section" id="about">
            <h2 class="section__title">About Me</h2>
            <span class="section__subtitle">My introduction</span>

            <div class="about__container container grid">
                <img src="assets/img/about.jpg" alt="" class="about__img">
                <div class="about__data">
                    <p class="about__description">Being passionate about computer science and web development, I decided to join an engineering school specializing in computer science after a "prépa". I am also a lifeguard and camp leader to occupy my vacations.</p>

                    <div class="about__info">
                        <div>
                            <span class="about__info-title">20</span>
                            <span class="about__info-name">Years <br> Old</span>
                        </div>

                        <div>
                            <span class="about__info-title">03+</span>
                            <span class="about__info-name">Years <br> Lifeguard</span>
                        </div>

                        <div>
                            <span class="about__info-title">05+</span>
                            <span class="about__info-name">Years <br> Web Development </span>
                        </div>
                    </div>

                    <div class="about__CVs">
                        <div class="about__buttons">
                            <a target="_blank" href="CV-en" class="button button--flex">
                                Download english CV <i class="uil uil-download-alt button__icon"></i>
                            </a>
                        </div>
                        <div class="about__buttons">
                            <a target="_blank" href="CV-fr" class="button button--flex">
                                Download french CV <i class="uil uil-download-alt button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========== QUALIFICATION ========== -->
        <section class="qualification section" id="qualification">
            <h2 class="section__title">Qualification</h2>
            <span class="section__subtitle">My personal journey</span>

            <div class="qualification__container container ">
                <div class="qualification__tabs">
                    <div class="qualification__button button--flex qualification__active" data-target='#education'>
                        <i class="uil uil-graduation-cap qualification__icon"></i>
                        Studies
                    </div>

                    <div class="qualification__button button--flex" data-target="#work">
                        <i class="uil uil-briefcase-alt qualification__icon"></i>
                        Work
                    </div>

                    <div class="qualification__button button--flex" data-target="#international">
                        <i class="uil uil-plane-fly qualification__icon"></i>
                        International
                    </div>
                </div>

                <div class="qualification__sections">
                    <!-- ==================== QUALIFICATION CONTENT 1 ==================== -->
                    <div class="qualification__content qualification__active" data-content id="education">
                        <!-- ==================== QUALIFICATION 1 ==================== -->
                        <div class="qualification__data">
                            <div>
                                <h1 class="qualification__title">Sciences Baccalauréat</h1>
                                <span class="qualification__subtitle">Option engineering</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2016 - 2019
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!-- ==================== QUALIFICATION 2 ==================== -->
                        <div class="qualification__data">

                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>


                            <div>
                                <h1 class="qualification__title">Prépa</h1>
                                <span class="qualification__subtitle">MPSI - PSI</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2019 - 2021
                                </div>
                            </div>
                        </div>

                        <!-- ==================== QUALIFICATION 3 ==================== -->
                        <div class="qualification__data">
                            <div>
                                <h1 class="qualification__title">Computer Engineer</h1>
                                <span class="qualification__subtitle">ENSEEIHT</span>
                                <span class="qualification__subtitle">Speciality: System and network architecture</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2021 - 2024
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <!--<span class="qualification__line"></span>-->
                            </div>
                        </div>

                    </div>

                    <!-- ==================== QUALIFICATION CONTENT 2 ==================== -->

                    <div class="qualification__content" data-content id="work">
                        <!-- ==================== QUALIFICATION 1 ==================== -->
                        <div class="qualification__data">
                            <div>
                                <h1 class="qualification__title">Activity Leader</h1>
                                <span class="qualification__subtitle">Holiday camp - La Chapelle d'Abondance</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    February 2019
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!-- ==================== QUALIFICATION 2 ==================== -->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                            <div>
                                <h1 class="qualification__title">Activity Leader</h1>
                                <span class="qualification__subtitle">Holiday camp - La Turballe</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    August 2018
                                </div>
                            </div>
                        </div>

                        <!-- ==================== QUALIFICATION 3 ==================== -->
                        <div class="qualification__data">
                            <div>
                                <h1 class="qualification__title">Lifeguard</h1>
                                <span class="qualification__subtitle">St-Aygulf</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    July- August 2019
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!-- ==================== QUALIFICATION 4 ==================== -->
                        <div class="qualification__data">

                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>


                            <div>
                                <h1 class="qualification__title">Lifeguard</h1>
                                <span class="qualification__subtitle">SDIS 04</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    August 2021
                                </div>
                            </div>

                        </div>
                        <div class="qualification__data">
                            <div>
                                <h1 class="qualification__title">Lifeguard</h1>
                                <span class="qualification__subtitle">SDIS 04</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    August 2022
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>

                            </div>
                        </div>
                    </div>

                    <!-- ==================== QUALIFICATION CONTENT 3 ==================== -->

                    <div class="qualification__content" data-content id="international">
                        <!-- ==================== QUALIFICATION 1 ==================== -->
                        <div class="qualification__data">
                            <div>
                                <h1 class="qualification__title">Turkey</h1>
                                <span class="qualification__subtitle">Holidays</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2015
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!-- ==================== QUALIFICATION 2 ==================== -->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>

                            </div>
                            <div>
                                <h1 class="qualification__title">Croatia</h1>
                                <span class="qualification__subtitle">Road Trip</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    July 2021
                                </div>
                            </div>

                        </div>
                        <!-- ==================== QUALIFICATION 3 ==================== -->
                        <div class="qualification__data">
                            <div>
                                <h1 class="qualification__title">Equator</h1>
                                <span class="qualification__subtitle">Ecological and scientific mission</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    August 2022
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!-- ==================== QUALIFICATION 4 ==================== -->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>

                            </div>
                            <div>
                                <h1 class="qualification__title">More to come</h1>
                                <span class="qualification__subtitle">...</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    Soon
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- ========== SKILLS ========== -->
        <section class="skills section" id="skills">
            <h2 class="section__title">Skills</h2>
            <span class="section__subtitle">My technical level</span>
            <div class="skills__container container grid">


                <div class="skills__content skills__close">
                    <div class="skills__header">
                        <i class="uil uil-brackets-curly skills__icon"></i>

                        <div>
                            <h1 class="skills__title">Web developpment</h1>
                            <span class="skills__subtitle"> More than 5 years</span>
                        </div>

                        <i class="uil uil-angle-down skills__arrow"></i>
                    </div>

                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">HTML / CSS</h3>
                                <span class="skills__comment"></span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__full"></span>
                            </div>
                        </div>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">JavaScript</h3>
                                <span class="skills__comment"></span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__full"></span>
                            </div>
                        </div>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">PHP</h3>
                                <span class="skills__comment"></span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__full"></span>
                            </div>
                        </div>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">SQL</h3>
                                <span class="skills__comment"></span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__full"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="skills__content skills__close">
                    <div class="skills__header">
                        <i class="uil uil-globe skills__icon"></i>

                        <div>
                            <h1 class="skills__title">Languages</h1>
                            <span class="skills__subtitle">4 languages spoken</span>
                        </div>

                        <i class="uil uil-angle-down skills__arrow"></i>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">French</h3>
                                <span class="skills__comment">Native</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__full"></span>
                            </div>
                        </div>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">English</h3>
                                <span class="skills__comment">B2</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__full"></span>
                            </div>
                        </div>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">German</h3>
                                <span class="skills__comment">A2</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__full"></span>
                            </div>
                        </div>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Spanish</h3>
                                <span class="skills__comment">A2</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__full"></span>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="skills__content skills__close">
                    <div class="skills__header">
                        <i class="uil uil-basketball skills__icon"></i>

                        <div>
                            <h1 class="skills__title">Sports</h1>
                            <span class="skills__subtitle">Since I'm 3</span>
                        </div>

                        <i class="uil uil-angle-down skills__arrow"></i>
                    </div>

                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Basketball</h3>
                                <span class="skills__comment"></span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__full"></span>
                            </div>
                        </div>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Moutain Bike</h3>
                                <span class="skills__comment"></span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__full"></span>
                            </div>
                        </div>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Running</h3>
                                <span class="skills__comment"></span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__full"></span>
                            </div>
                        </div>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Ski</h3>
                                <span class="skills__comment"></span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__full"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="skills__content skills__close">
                    <div class="skills__header">
                        <i class="uil uil-desktop skills__icon"></i>

                        <div>
                            <h1 class="skills__title">Other skills</h1>
                            <span class="skills__subtitle">Acquired at ENSEEIHT</span>
                        </div>

                        <i class="uil uil-angle-down skills__arrow"></i>
                    </div>

                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Java</h3>
                                <span class="skills__comment"></span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__full"></span>
                            </div>
                        </div>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Matlab</h3>
                                <span class="skills__comment"></span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__full"></span>
                            </div>
                        </div>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">ADA</h3>
                                <span class="skills__comment"></span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__full"></span>
                            </div>
                        </div>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">C</h3>
                                <span class="skills__comment"></span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__full"></span>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </section>

        <!-- ========== MODULES ========== -->
        <section class="modules section" id="modules">
            <h2 class="section__title">Personnal work and projects</h2>
            <div class="modules__container container grid">
                <!-- ===== Responsible for clubs ===== -->
                <div class="modules__content">
                    <div>
                        <i class="uil uil-university modules__icon"></i>
                        <h3 class="modules__title">Responsible for clubs <br> AEn7</h3>
                    </div>

                    <span class="button button--flex button--small button--link modules__button">
                        View More
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>
                    <div class="modules__modal">
                        <div class="modules__modal-content">
                            <h4 class="modules__modal-title">My skillMill results</h4>
                            <i class="uil uil-times modules__modal-close"></i>

                            <ul class="modules__modal-modules grid">
                                <li class="modules__modal-module">
                                    <i class="uil uil-check-circle modules__modal-icon"></i>
                                    <img src="assets/img/All_skills.png" alt="Erreur de chargement de l'image" >

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- ===== Treasurer of CAn7 ===== -->
                <div class="modules__content">
                    <div>
                        <i class="uil uil-coins modules__icon"></i>
                        <h3 class="modules__title">Treasurer of <br> CAn7</h3>
                    </div>

                    <span class="button button--flex button--small button--link modules__button">
                        View More
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>
                    <div class="modules__modal">
                        <div class="modules__modal-content">
                            <h4 class="modules__modal-title">My skillMill results</h4>
                            <i class="uil uil-times modules__modal-close"></i>

                            <ul class="modules__modal-modules grid">
                                <li class="modules__modal-module">
                                    <i class="uil uil-check-circle modules__modal-icon"></i>
                                    <img src="assets/img/All_skills.png" alt="Erreur de chargement de l'image" >

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- ===== Protection civile ===== -->
                <div class="modules__content">
                    <div>
                        <i class="uil uil-heart-rate modules__icon"></i>
                        <h3 class="modules__title">Rescuer at <br> Protection Civile</h3>
                    </div>

                    <span class="button button--flex button--small button--link modules__button">
                        View More
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>
                    <div class="modules__modal">
                        <div class="modules__modal-content">
                            <h4 class="modules__modal-title">To be coming...</h4>
                            <i class="uil uil-times modules__modal-close"></i>

                            <ul class="modules__modal-modules grid">
                                <li class="modules__modal-module">
                                    <i class="uil uil-check-circle modules__modal-icon"></i>
                                    <p>...</p>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- ===== Developper RAID INSA INP ===== -->
                <div class="modules__content">
                    <div>
                        <i class="uil uil-brackets-curly modules__icon"></i>
                        <h3 class="modules__title">Developer for <br> RAID INA-INP</h3>
                    </div>

                    <span class="button button--flex button--small button--link modules__button">
                        View More
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>
                    <div class="modules__modal">
                        <div class="modules__modal-content">
                            <h4 class="modules__modal-title">To be coming...</h4>
                            <i class="uil uil-times modules__modal-close"></i>

                            <ul class="modules__modal-modules grid">
                                <li class="modules__modal-module">
                                    <i class="uil uil-check-circle modules__modal-icon"></i>
                                    <p>...</p>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- ===== The climate Fresk ===== -->
                <div class="modules__content">
                    <div>
                        <i class="uil uil-image-check modules__icon"></i>
                        <h3 class="modules__title">The climate <br> Fresk</h3>
                    </div>

                    <span class="button button--flex button--small button--link modules__button">
                        View More
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>
                    <div class="modules__modal">
                        <div class="modules__modal-content">
                            <h4 class="modules__modal-title">The climate Fresk</h4>
                            <i class="uil uil-times modules__modal-close"></i>

                            <ul class="modules__modal-modules grid">
                                <li class="modules__modal-module">
                                    <i class="uil uil-check-circle modules__modal-icon"></i>
                                    <p>In september 2021 I participated in a climate fresk workshop. We were given 42 cards that we had to interconnect them according to their cause and effect links. A facilitator help us to build our fresk.</p>
                                    <img src="assets/img/fresque.jpg" alt="" class="modules__img">
                                    This is a wonderful initiative to make future engineers aware of the climate challenges that await them. I was personally shocked to see that some students had not yet realized the impact on the planet of some of their actions, such as flying, eating meat, consuming out of season products
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ===== L'enfer en est pavé ===== -->
                <div class="modules__content">
                    <div>
                        <i class="uil uil-presentation-minus modules__icon"></i>
                        <h3 class="modules__title">Managing diversity in the workplace</h3>
                    </div>

                    <span class="button button--flex button--small button--link modules__button">
                        View More
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>
                    <div class="modules__modal">
                        <div class="modules__modal-content">
                            <h4 class="modules__modal-title">Managing diversity in the workplace</h4>
                            <i class="uil uil-times modules__modal-close"></i>

                            <ul class="modules__modal-modules grid">
                                <li class="modules__modal-module">
                                    <i class="uil uil-check-circle modules__modal-icon"></i>
                                    <h4>&nbsp;« L'enfer en est pavé... »</h4>
                                    <p>In November 2021 I was invited to watch a short film "l'Enfer est pavé". The screening of the movie was interspersed with debate about diversity. <br> This short film made us think about goal number 5 of sustainable development. <mark>"Achieve gender equality and empower all women and girls"</mark> In "L'Enfer en est pavé," the characters all try to look like a standard in order to win a state-sponsored contest. However, we quickly realize that we do not know what this standard is and that it is problematic to look for it. Rather than trying to make people equal, we try to make them all the same.</p>
                                    <img src="assets/img/L_Enfer_En_Est_Pave.png" alt="" class="modules__img">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ===== Sulitest ===== -->
                <div class="modules__content">
                    <div>
                        <i class="uil uil-club modules__icon"></i>
                        <h3 class="modules__title">Sulitest</h3>
                    </div>

                    <span class="button button--flex button--small button--link modules__button">
                        View More
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>
                    <div class="modules__modal">
                        <div class="modules__modal-content">
                            <h4 class="modules__modal-title">Sulitest</h4>
                            <i class="uil uil-times modules__modal-close"></i>

                            <ul class="modules__modal-modules grid">
                                <li class="modules__modal-module">
                                    <i class="uil uil-check-circle modules__modal-icon"></i>
                                    <h4>&nbsp;Sulitest</h4>
                                    <p>In october 2021, I did the Sulitest. The purpose of the test was to measure and improve our knowledge about sustainability. </p>
                                    <a download="" href="assets/pdf/Sullitest.pdf" class="download__link">
                                        My result<i class="uil uil-download-alt button__icon"></i>
                                    </a>
                                    <p> What stays in my mind after this test is the definition of sustainable development made by the UN in 1987 : <br> <mark> "Development that meets the needs of the present without compromising the ability of future generations to meet their own needs"</mark> <br> as well as the 17 sustainable development goals adopted by the UN in 2015 like gender equality, no poverty, quality education, good health and well-being or climate action. </p>
                                    <img src="assets/img/17goals.png" alt="" class="modules__img">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ===== Language ===== -->
                <div class="modules__content">
                    <div>
                        <i class="uil uil-globe modules__icon"></i>
                        <h3 class="modules__title">Langage</h3>
                    </div>

                    <span class="button button--flex button--small button--link modules__button">
                        View More
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>
                    <div class="modules__modal">
                        <div class="modules__modal-content">
                            <h4 class="modules__modal-title">Langage</h4>
                            <i class="uil uil-times modules__modal-close"></i>

                            <ul class="modules__modal-modules grid">
                                <li class="modules__modal-module">
                                    <i class="uil uil-check-circle modules__modal-icon"></i>
                                    <h4>&nbsp;French</h4>
                                    <p>Native language. <br> I did a French level test "Orthodidacte" and I got a score of 4/4.</p>
                                    <a download="" href="assets/pdf/orthodidacte.pdf" class="download__link">
                                        My result to the test Orthodidacte<i class="uil uil-download-alt button__icon"></i>
                                    </a>
                                </li>

                                <li class="modules__modal-module">
                                    <i class="uil uil-check-circle modules__modal-icon"></i>
                                    <h4>&nbsp;Professional English</h4>
                                    <p><mark>OBJECTIVE: To improve English communication skills for professional purposes by effectively completing the following graded assignments:</mark></p>

                                    <ul>
                                        <li><b>- Organising & Chairing a Meeting:</b> <br>
                                            In small groups we organize a professional meeting every week on a subject that we have previously chosen. This allow us to develop skills for running effective meeting in English and oral presentation skills and to build professional vocabulary.</li>
                                        <li><b>- Minutes of a meeting: </b><br>
                                            Each week, a person is assigned to take notes and take stock of the meeting. We practise for note-taking, professional writing skills and we develop our ability to summarise and write concisely.</li>
                                        <li><b>- Professional Interaction.</b></li>
                                    </ul>
                                </li>

                                <li class="modules__modal-module">
                                    <i class="uil uil-check-circle modules__modal-icon"></i>
                                    <h4>&nbsp;German</h4>
                                    <p>I grew up in Alsace, where German replaces English in primary school. I passed the B1 level certification in 2015 then I continued to practice German until I entered engineering school in 2021</p>
                                </li>

                                <li class="modules__modal-module">
                                    <i class="uil uil-check-circle modules__modal-icon"></i>
                                    <h4>&nbsp;Spanish</h4>
                                    <p>I took advantage of the opportunity to start a new language at ENSEEIHT to learn Spanish.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ===== Creathlon ===== -->
                <div class="modules__content">
                    <div>
                        <i class="uil uil-lightbulb modules__icon"></i>
                        <h3 class="modules__title">Creathlon Day</h3>
                    </div>

                    <span class="button button--flex button--small button--link modules__button">
                        View More
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>
                    <div class="modules__modal">
                        <div class="modules__modal-content">
                            <h4 class="modules__modal-title">Creathlon day</h4>
                            <i class="uil uil-times modules__modal-close"></i>

                            <ul class="modules__modal-modules grid">
                                <li class="modules__modal-module">
                                    <i class="uil uil-check-circle modules__modal-icon"></i>
                                    <h4>&nbsp;Drinking reminder</h4>
                                    <p>During the creathlon day, me and my team had the idea of ​​creating a machine that automatically serves water for people who need it. For example the elderly or sick people. We were supported by professionals who had often created their own business. It was interesting to see the genesis of a project while having the point of view of people who have lived it for real. We didn't win the prize for the best creation but I also enjoyed seeing the ideas that the other groups had and the strengths and weaknesses of each creation. This first day of discovery of entrepreneurship allowed us to open our minds to new possibilities after graduation.</p>
                                    <img src="assets/img/wateromatic.png" alt="" class="modules__img">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!-- ========== PORTFOLIO ========== -->
        <section id="portfolio" class="portfolio section">
            <h2 class="section__title">Portfolio</h2>
            <span class="section__subtitle">Most recent work</span>
            <div class="portfolio__container container swiper">
                <div class="swiper-wrapper">
                    <!-- ========== PORTFOLIO 1 ========== -->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/portfolio1.jpg" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">PPP</h3>
                            <p class="portfolio__description">Click on the button bellow to open my PPP presentation</p>
                            <a target="_blank" href="PPP" class="button button--flex button--small portfolio__button">
                                Download <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>


                    <!-- ========== PORTFOLIO 2 ========== -->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/portfolio1.jpg" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">1st year internship report</h3>
                            <p class="portfolio__description">Click on the buttons bellow to download my 1st year internships reports</p>
                            <a download="" href="assets/pdf/equador-internship.pdf" class="button button--flex button--small portfolio__button">
                                Ecuador <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                            <a download="" href="assets/pdf/sdis.pdf" class="button button--flex button--small portfolio__button">
                                SDIS <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>

                    <!-- ========== PORTFOLIO 2 ========== -->
                    <!-- 
                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/portfolio4.jpg" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Progress report</h3>
                            <p class="portfolio__description">Click on the button bellow to see the report of my civic engagement</p>
                            <a download="" href="assets/pdf/report.pdf" class="button button--flex button--small portfolio__button">
                                Download <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div> -->


                    <!-- ========== PORTFOLIO 2 ========== -->
                    <!-- <div class="portfolio__content-video grid swiper-slide">

                            <div class="portfolio__video">
                                <h3 class="portfolio__title">1 minute Career-Story pitch video</h3>
                                <video controls width="100%">
                                    <source src="assets/videos/movie.mp4" type="video/mp4">
                                    <source src="assets/videos/movie.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                                </video>
                            </div>
                        </div> -->

                    <!-- ========== PORTFOLIO 3 ========== -->
                    <!-- <div class="portfolio__content-video grid swiper-slide">

                            <div class="portfolio__video">
                                <h3 class="portfolio__title">2 minutes circular economy and 1 minute civic engagement</h3>
                                <video controls width="100%">
                                    <source src="assets/videos/movie2.mp4" type="video/mp4">
                                    <source src="assets/videos/movie2.ogg" type="video/ogg">
                                La video sera bientôt disponible
                                </video>
                            </div>
                        </div> -->

                    <!-- ========== PORTFOLIO 4 ========== -->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/portfolio4.jpg" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Civic engagment</h3>
                            <p class="portfolio__description">Click on the button bellow to see my civic engagment projet</p>
                            <a download="" href="assets/pdf/portfolio4.pdf" class="button button--flex button--small portfolio__button">
                                Download <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev">
                    <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                </div>
                <div class="swiper-button-next">
                    <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                </div>


            </div>
        </section>

        <!-- ========== INTERNATIONAL ========== -->
        <section class="international section" id="international">
            <h2 class="section__title">International</h2>
            <span class="section__subtitle">Where I've been</span>
            <div class="international__container container">
                <div id="svgMap"></div>
            </div>
        </section>

        <!-- ========== CONTACT ME ========== -->
        <section class="contact section" id="contact">
            <h2 class="section__title">Contact Me</h2>
            <span class="section__subtitle">Get in touch</span>

            <div class="contact__container container grid">
                <div>
                    <div class="contact__information">
                        <i class="uil uil-phone contact__icon"></i>
                        <div>
                            <h3 class="contact__title">Call me</h3>
                            <span class="contact__subtitle">+33 7 82 69 27 41</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-envelope contact__icon"></i>
                        <div>
                            <h3 class="contact__title">Email</h3>
                            <span class="contact__subtitle">antonin.litschgy@etu.inp-n7.fr</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-map-marker contact__icon"></i>
                        <div>
                            <h3 class="contact__title">Location</h3>
                            <span class="contact__subtitle">Toulouse - France</span>
                        </div>
                    </div>
                </div>

                <form action="scripts/MailSender.php" method="post" class="contact__form grid">
                    <div class="contact__inputs grid">
                        <div class="contact__content">
                            <label for="name" class="contact__label">Name</label>
                            <input type="text" class="contact__input" name="name" required>
                        </div>
                        <div class="contact__content">
                            <label for="mail" class="contact__label">Email</label>
                            <input type="email" class="contact__input" name="mail" required>
                        </div>
                    </div>
                    <div class="contact__content">
                        <label for="title" class="contact__label" id="Form_title">Subject</label>
                        <input type="text" class="contact__input" name="title" required>
                    </div>
                    <div class="contact__content">
                        <label for="message" class="contact__label" id="Form_message">Message</label>
                        <textarea name="message" id="" cols="0" rows="7" class="contact__input" required></textarea>
                    </div>

                    <div>
                        <button class="button button__flex">
                            Send Message
                            <i class="uil uil-message button__icon"></i>
                        </button>
                    </div>

                </form>
            </div>          

            
        </section>
    <?php if (isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    } ?>
    </main>

    <!-- ======================== FOOTER ======================== -->
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Antonin</h1>
                    <span class="footer__subtitle">ENSEEIHT Student</span>
                </div>
                <ul class="footer__links">
                    <li>
                        <a href="#qualification" class="footer__link">Qualification</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer__link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer__link">Contactme</a>
                    </li>
                </ul>
                <div class="footer__socials">
                    <a href="https://www.linkedin.com/in/antonin-l-408684139/" target="_blank" class="footer__social">
                        <i class="uil uil-linkedin"></i>
                    </a>

                    <a href="https://github.com/aLitschgy" target="_blank" class="footer__social">
                        <i class="uil uil-github-alt"></i>
                    </a>
                </div>
            </div>
            <p class="footer__copy">&#169; Antonin Litschgy. All right reserved</p>
            
        </div>
    </footer>

    <!-- ====================== SCROLL TOP ======================= -->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>

    <!-- ======================== SWIPER JS ======================== -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- ======================== MAIN JS ======================== -->
    <script src="assets/js/main.js"></script>

    <!-- ===================== CARTE PAYS VISITES ===================== -->
    <script src="assets/js/svg-pan-zoom.min.js"></script>
    <script src="assets/js/svgMap.min.js"></script>
    <script src="assets/js/map.js"></script>
    

</body>

</html>