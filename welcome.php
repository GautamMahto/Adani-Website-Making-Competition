<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Design</title>
    <link rel="stylesheet" href="main.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- Main Navigation Bar... -->
    <!-- Header -->
    <header class="l-header" id="header">
        <nav class="navbar">
            <div class="nav_menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active-link">Adani Group</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">Adani University</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Education</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact us</a></li>
                    <li class="nav__item"><a href="logout.php" class="nav__link">Logout</a></li>
                    <li class="nav__item"><a href="" class="nav__link">
                            <?php echo "Welcome ". $_SESSION['username']?>
                        </a></li>

                </ul>
            </div>
            <img src="logo.png" alt="" class="nav_img">
        </nav>
    </header>
    <nav class="navbar1">
        <div class="navigation">

            <ul class="navlist">
                <li class="nav_item1"><a href="#">Home</a></li>
                <li class="nav_item1"><a href="#">Student Corner</a></li>
                <li class="nav_item1"><a href="#">Placement</a></li>
                <li class="nav_item1"><a href="#">Media</a></li>
                <li class="nav_item1"><a href="#">Programmes</a></li>
                <li class="nav_item1"><a href="#">Research</a></li>
                <li class="nav_item1"><a href="#">Carrer Development Cell</a></li>
            </ul>
        </div>
    </nav>

    <div class="content">
        <div class="div_content">
            <div class="home_grid1">
                <div class="grid1" id="g1">What's New?<br><b>AIIE to AU</b></div>
                <div class="grid1" id="g2"></div>
                <div class="grid1" id="g3"><b>Welcome to Adani University</b></div>
                <div class="grid1" id="g4"></div>
                <div class="grid1" id="g5">Admissions Open For BTech/Mtech
                </div>
            </div>
        </div>
        <div class="div_content">
            <hr class="line1">
        </div>
        <div class="div_content">
            <div class="home_grid3">
                <div class="grid2" id="big_grid"></div>
                <div class="grid2 colo">360degree Virtual Campus</div>
                <div class="grid2 colo">Admission Inquiry</div>
                <div class="grid2 colo">Carrer</div>
            </div>
        </div>

    </div>

    <!-- Page 2 -->
    <div class="secondpage">
        <div class="admissions">
            <h3 class="rand">Why Adani University ?</h3>
            <p class="spell">Adani University has a vast range of Programmes and Courses in Virtual ans Campus mode both. Recently Adani University has collarabated with Andra University,  IIT-Madras,State University of New York & National Education Foundation, USA. So,Students will get benifited from there also. Also, University provides Virtual Learning Centre are:-
                Job Ready Learning Skills with State University of New York (MOOCs),Virtual Instructor Led Programmes (VILT) ,Knowledge Webinar Series, Blended Learning Programmes (BLP) ,On-Campus Programmes ,Customized Learning Programmes,Long-Duration Programmes.
            </p>
        </div>
        <div class="admissions" id="semicircle">
            <div class="semicircle">
                Admission Open

            </div>
            <div class="squarebox">
                <div class="boxquery">

                    <li class="query">B.Tech</li>
                    <li class="query">M.Tech</li>
                    <li class="query">PGDM</li>
                </div>
            </div>
        </div>
    </div>
    <!-- Page 3 -->
    
    <div class="thirdclass">
        <div class="thirdpagecontent" id="plac">Placement Highlights @Adani University</div>
    </div>
    <div class="placement" >
        <p></p>
    </div>
    <!-- <div class="thirdcontent">
        <div class="boxpage3">Box1</div>
        <div class="boxpage3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nobis quas accusantium sed
            eligendi ullam.</div>
        <div class="boxpage3">box3</div>
        <div class="boxpage3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint voluptatem unde esse
            corporis consectetur fuga?</div>
    </div>
    <div class="thirdcontent1">
        <div class="boxpage" id="boxpage1">40K+<br>Teachers</div>
        <div class="boxpage" id="boxpage2">70K+Student<br>Enrolled</div>
        <div class="boxpage" id="boxpage3">50+Industry<br>Connection</div>
        <div class="boxpage" id="boxpage4">6K+<br>Placements</div>
    </div> -->
    <!-- Page 4 -->
     <div class="thirdclass" id="event">
        <div class="thirdpagecontent">Event and Activities @Adani University</div>
    </div> 
    <!--<div class="thirdcontent">
        <div class="boxpage3">Box1</div>
        <div class="boxpage3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nobis quas accusantium sed eligendi ullam.</div>
        <div class="boxpage3">box3</div>
        <div class="boxpage3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint voluptatem unde esse corporis consectetur fuga?</div>
    </div> -->
    <div class="three">
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/Event7.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">One Week Workshop</h2>
                            <p class="description">One-Week Short Term Training Program(STTP) on Condition Monitoring of
                                Electrical Equipment</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/Event9.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">One Week Workshop</h2>
                            <p class="description">One-Week Faculty Development(FDP) on Disaster Risk Reduction for
                                Sustainable Development</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/Event1.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Expert Talk</h2>
                            <p class="description">All Leadership series | Talk by Dr. Anil K. Khadelwal</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/Event2.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Competition</h2>
                            <p class="description">Mari-Rail Multi Model Competition 2021</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/Event3.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Tree Plantation</h2>
                            <p class="description">Cleanliness Drive and Tree Plantation at AIIE Campus.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/Event9.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Expert Talk</h2>
                            <p class="description">Expert Talk on 'Sustainable Development by way of deeloping a
                                Self-sufficient House' by Mr. D. Suresh</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/Event6.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Expert Talk</h2>
                            <p class="description">Expert Talk on "Role of Infrastructure in Mitigating Risk from
                                Natural Hazards" by Prof. Makarand Hastak</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/Event7.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Virtual Meeting</h2>
                            <p class="description">Virtual Talk on "Planning and Development of Ports and Terminals"</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/Event12.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">ASPIRE 2021</h2>
                            <p class="description">ASPIRE-2019: Annual Sports & Culutral Fest
                            <p>

                                <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/Event11.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Internships</h2>
                            <p class="description">Summer Interships at Adani Vidya Mandir(AVM) 2019</p>

                            <button class="button">View More</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div> -->
        <div class="swiper-pagination"></div>

    </div>
    </div>
    <!-- Footer -->
    <footer class="footer section bd-container">
        <div class="footer__container bd-grid">
            <div class="footer__content">
                <img src="logo.png" alt="" class="footer__title">
                <ul>
                    <li><a href="#" class="footer__link">Shantigram Township</a></li>
                    <li><a href="#" class="footer__link">Nr Vaisnodevi Circle,</a></li>
                    <li><a href="#" class="footer__link">SG Highway</a></li>
                    <li><a href="#" class="footer__link">Ahmedabad 382441</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title mar">Institutes</h3>
                <ul>
                    <li><a href="#" class="footer__link">Faculty of Engineering Science and Technology</a></li>
                    <li><a href="#" class="footer__link">Facultyof Management Science</a></li>

                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title mar">Useful links</h3>
                <ul>
                    <li><a href="#" class="footer__link">Facilites</a></li>
                    <li><a href="#" class="footer__link">Events</a></li>
                    <li><a href="#" class="footer__link">News</a></li>
                    <li><a href="#" class="footer__link">Carrer</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title mar" >About us</h3>
                <ul>
                    <li><a href="#" class="footer__link">Adani Group</a> </li>
                    <li><a href="#" class="footer__link">Adani University</a> </li>
                    <li><a href="#" class="footer__link">Visions and Missions</a></li>
                    <li><a href="#" class="footer__link">Board of Directors</a></li>
                    <li><a href="#" class="footer__link">Offices and Services</a></li>
                </ul>
            </div>
        </div>

        <p class="footer__copy">&#169; 2020 Bedimcode. All right reserved</p>
    </footer>
</body>
<!-- Swiper JS -->
<script src="js/swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script src="js/script.js"></script>

</html>