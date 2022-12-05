
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nueva Ecija University of Science and Technology</title>

    <link rel="stylesheet" href="style.css">

    <link rel="icon" type="image/x-icon" href="neust.png"/>

    <!-- for time -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
  </head>
  <body>
    
    <nav class="navbar sticky-top main-nav" data-bs-toggle="collapse" data-bs-target="#navlinks">
        <div class="puller">
            <button class="fa-solid fa-bars"></button>
        </div>  
        <div class="container-fluid"> 
            <a class="navbar-brand" href="#">
                <div >
                    <div style="display: inline-block; margin: 0; padding: 0; vertical-align: middle;">
                        <img src="https://neust.edu.ph/wp-content/uploads/2020/06/neust_logo.png" alt="Logo" width="100px" height="100px" class="d-inline-block align-text-top">
                    </div>
                    <div style="font-family: 'Roboto Black', sans-serif; font-weight: bold;display: inline-block; vertical-align: middle; margin: 0; padding: 0;">
                        <div style="border-bottom: 2px solid #f5f5f6; color: white; font-size: 11pt;">Republic of the
                            Philippines</div>
                        <div style=" color: #fea01a; font-size: 16pt;">NUEVA ECIJA UNIVERSITY OF SCIENCE AND TECHNOLOGY
                        </div>
                        <div style=" color: white; font-size: 11pt;">ISO 9001:2015 CERTIFIED</div>
                    </div>
                </div>
            </a>
            <div id="pst-container">
                <div style="color: #fea01a; text-align: end;">Philippine Standard Time:</div>
                <div id="runningTime" style="color: white;"></div>
            </div>
        </div>
        <div class="collapse" id="navlinks">
            <div class="link-content">
                <ul class="nav-links">
                    <li class="item">
                        <a class="nav-link active" href="#">
                            <button class="btn btn-md">Home</button>
                        </a>
                    </li>
                    <li class="item">
                        <div class="dropdown">
                            <button class="btn btn-md dropbtn">About</button>
                            <div class="dropdown-content">
                                <a href="#">Historial Background</a>
                                <a href="#">Mandate and Function</a>
                                <a href="#">Mission and Vision</a>
                                <a href="#">NEUST March</a>
                                <a href="#">NEUST Key Officials</a>
                                <a href="#">Message from the President</a>
                                <a href="#">Feedback and Redress Mechanism</a>
                                <a href="#">NEUST Awards</a>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="dropdown">
                            <button class="btn btn-md dropbtn">Admissions</button>
                            <div class="dropdown-content">
                                <a href="#">Frontline Sevices</a>
                                <a href="#">Enrollment Procedure and Qualifications</a>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="dropdown">
                            <button class="btn btn-md dropbtn">Colleges</button>
                            <div class="dropdown-content">
                                <a href="#">College of Agriculture</a>
                                <a href="#">College of Architecture</a>
                                <a href="#">College of Art and Sciences</a>
                                <a href="#">College of Criminilogy</a>
                                <a href="#">College of Education</a>
                                <a href="#">College of Industrial Technology</a>
                                <a href="#">College of Information and Communication Technology</a>
                                <a href="#">College of Management and Business Technology</a>
                                <a href="#">College of Nursing</a>
                                <a href="#">College of Public Administration and Disaster Management</a>
                                <a href="#">Graduate School</a>
                                <a href="#">Laboratory High School</a>
                                <a href="#">San Isidro Campus</a>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="dropdown">
                            <button class="btn btn-md dropbtn">Programs Offered</button>
                            <div class="dropdown-content">
                                <a href="#">General Tinio Street Campus</a>
                                <a href="#">Sumacab Campus</a>
                                <a href="#">San Isidro Campus</a>
                                <a href="#">Gabaldon Campus</a>
                                <a href="#">Atate Campus</a>
                                <a href="#">Fort Magsaysay Campus</a>
                                <a href="#">Off Campuses</a>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <a class="nav-link"  href="#">
                            <button class="btn btn-md">NEUST Library</button>
                        </a>
                    </li>
                    <li class="item">
                        <div class="dropdown">
                            <button class="btn btn-md dropbtn">RET</button>
                            <div class="dropdown-content">
                                <a href="#">Research</a>
                                <div class="dropend">
                                    <a href="#" class="dropendbtn">Extension</a> 
                                    <div class="dropend-content">
                                        <a href="">Organizational Chart</a>
                                        <a href="">Quality Objectives</a>
                                        <a href="">Quality Policy</a>
                                        <a href="">Staff and Units Head</a>
                                        <a href="">List of Courses</a>
                                        <a href="">List of Trainings 2017</a>
                                        <a href="">Research Gallery</a>
                                    </div>
                                </div>
                                <div class="dropend">
                                    <a href="#" class="dropendbtn">Off Campuses</a>
                                    <div class="dropend-content">
                                        <a href="">About Training Department</a>
                                        <a href="">Organizational Structure</a>
                                        <a href="">Upcoming Activities</a>
                                        <a href="">Massive Open Online Courses</a>
                                        <a href="">Accomplishment Report</a>
                                        <a href="">Photo Gallery</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="dropdown">
                            <button class="btn btn-md dropbtn">Career</button>
                            <div class="dropdown-content">
                                <a href="#">NOTICE OF VACANT POSITION</a>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="dropdown">
                            <button class="btn btn-md dropbtn">Downloads</button>
                            <div class="dropdown-content">
                                <a href="#">Admission Form for Grade 7</a>
                                <a href="#">Microsoft Office  365 and MS Teams Free Subscription </a>
                                <a href="#">Procurement Monitoring Report</a>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="dropdown">
                            <button class="btn btn-md dropbtn">i-NEUST</button>
                            <div class="dropdown-content">
                                <a href="#">NEUST Online Journals</a>
                                <a href="#">NEUST Client Satisfaction Form</a>
                                <a href="#">NEUST Health Survey Online Form</a>
                                <a href="#">Faculty Portal Online Application Form</a>
                                <a href="#">NEUST E-mail Online Application Form</a>
                                <a href="#">Covid-19 Declaration Form</a>
                                <a href="#">NEUST Armis</a>
                                <a href="#">i-Library</a>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="dropdown">
                            <button class="btn btn-md dropbtn">Bidding</button>
                            <div class="dropdown-content">
                                <a href="#">Yr. 2017</a>
                                <a href="#">Yr. 2018</a>
                                <a href="#">Yr. 2019</a>
                                <a href="#">Yr. 2020</a>
                                <a href="#">Yr. 2021</a>
                                <a href="#">Yr. 2022</a>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="dropdown">
                            <button class="btn btn-md dropbtn">FAQs</button>
                            <div class="dropdown-content-faqs">
                                <a href="#">Student Portal FAQs</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <div class="container">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators" style="bottom: -50px;">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="8" aria-label="Slide 9"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="9" aria-label="Slide 10"></button>
                
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="7000">
                    <img src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2022/09/300176073_1423781014812132_6075915651655266224_n.png?w=1280&ssl=1" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="7000">
                    <img src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2022/06/BEST-IN-THE-WORLD.png?w=1280&ssl=1" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="7000">
                    <img src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2022/05/GAWAD-PARANGAL.png?w=1280&ssl=1" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="7000">
                    <img src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2022/04/DISCLAIMER.jpg?w=1280&ssl=1"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="7000">
                    <img src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2022/04/IMPACT-RANKING.jpg?w=1280&ssl=1"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="7000">
                    <img src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2022/04/GTC-2.jpg?w=1280&ssl=1"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="7000">
                    <img src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2022/04/GTC.jpg?w=1280&ssl=1"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="7000">
                    <img src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2022/04/SUMACAB-1.jpg?w=1280&ssl=1"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="7000">
                    <img src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2022/04/SUMACAB-2-1.jpg?w=1280&ssl=1"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="7000">
                    <img src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2022/04/SIC.jpg?w=1280&ssl=1"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="but-tons">
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a href="http://admission.neust.edu.ph" class="btn">
                    <i class="fa-solid fa-arrow-pointer"></i>
                    <label for="">Online Admission</label> 
                </a>
                <a href="http://enroll.neust.edu.ph/" class="btn">
                    <i class="fa-solid fa-laptop-file"></i>
                    <label for="">Online Enrollment</label> 
                </a>
                <a href="http://lms.neust.edu.ph/"class="btn">
                     <i class="fa-solid fa-graduation-cap"></i>
                     <label for="">NEUST LMS</label>
                </a>
               <a href="http://58.69.74.135:1908/sisneust/login"class="btn">
                   <i class="fa-solid fa-users"></i>
                   <label for="">NEUST Portal</label>
               </a>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div class="col">
                    <img src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2022/05/VISION.jpg?w=1197&ssl=1" alt="">
                </div>
                <div class="col">
                    <img src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2022/05/MISSION.jpg?w=1197&ssl=1" alt="">
                </div>
                <div class="col">
                    <img src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2022/05/TAGLINE-CORE.jpg?w=1197&ssl=1" alt="">
                </div>
            </div>
        </div>
        <div class="row-updates">
            <div class="col-categories">
                <aside id="categories-3" class="widget callout secondary widget_categories"><h3 class="widget-title">CATEGORIES</h3>
                    <ul class="cat-list">
                        <li class="cat-item cat-item-5"><a href="https://neust.edu.ph/category/announcements/">Announcements</a></li>
                        <li class="cat-item cat-item-4"><a href="https://neust.edu.ph/category/news/">News</a></li>
                        <li class="cat-item cat-item-6"><a href="https://neust.edu.ph/category/theblaze/">The Blaze: Student Publication</a></li>
                        <li class="cat-item cat-item-1"><a href="https://neust.edu.ph/category/uncategorized/">Uncategorized</a></li>
                        <li class="cat-item cat-item-7"><a href="https://neust.edu.ph/category/webinar/">Webinar</a></li>
                    </ul>
                </aside>
            </div>
            <div class="col-posts">
                <aside id="recent-posts-3" class="widget callout secondary widget_recent_entries">
		            <h3 class="widget-title">RECENT POSTS</h3>
		            <ul class="posts-list">
                        <li>
					        <a href="https://neust.edu.ph/2022/11/29/iso-surveillance-audit-2022/">Day 1: ISO SURVEILLANCE AUDIT 2022: November 23, 2022</a>
						</li>
						<li>
					        <a href="https://neust.edu.ph/2022/11/29/iso-surveillance-audit-2022-2/">Day 2: ISO SURVEILLANCE AUDIT 2022: November 24, 2022</a>
						</li>
						<li>
					        <a href="https://neust.edu.ph/2022/09/22/day-3-connecting-innovations-in-research-and-extensions-of-neust/">DAY 3: CONNECTING INNOVATIONS IN RESEARCH AND EXTENSIONS OF NEUST</a>
						</li>
                        <li>
					        <a href="https://neust.edu.ph/2022/09/25/day-4-moving-to-greater-heights-working-with-passion-and-commitment-towards-success/">DAY 4. Moving to Greater Heights, Working with Passion and Commitment Towards Success</a>
						</li>
						<li>
					        <a href="https://neust.edu.ph/2022/09/25/day-5-keeping-the-glory-of-the-nueva-ecija-university-of-science-and-technology-institutional-accreditation-closing-program/">DAY 5. Keeping the Glory of the Nueva Ecija University of Science and Technology (INSTITUTIONAL ACCREDITATION CLOSING PROGRAM)</a>
						</li>
					</ul>
		        </aside>
            </div>
            
        </div>
        
        <div class="board">
            <div id="panel-bottom" class="anchor" role="complementary">
                <div class="row-board">
                    <center>
                        <aside id="panel-bottom-1" class="large-3 columns" role="complementary">
                            <div id="media_image-10" class="widget widget_media_image">
                                <img width="200" height="300" alt="" style="max-width: 100%; height: auto;" data-srcset="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/suc_president.jpg?w=600&amp;ssl=1 600w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/suc_president.jpg?resize=200%2C300&amp;ssl=1 200w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/suc_president.jpg?resize=500%2C750&amp;ssl=1 500w" data-src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/suc_president.jpg?fit=200%2C300&amp;ssl=1" data-sizes="(max-width: 200px) 100vw, 200px" class="image wp-image-85  attachment-medium size-medium ls-is-cached lazyloaded" src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/suc_president.jpg?fit=200%2C300&amp;ssl=1" sizes="(max-width: 200px) 100vw, 200px" srcset="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/suc_president.jpg?w=600&amp;ssl=1 600w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/suc_president.jpg?resize=200%2C300&amp;ssl=1 200w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/suc_president.jpg?resize=500%2C750&amp;ssl=1 500w">
                                <noscript>
                                    <img width="200" height="300" src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/suc_president.jpg?fit=200%2C300&amp;ssl=1" class="image wp-image-85  attachment-medium size-medium" alt="" style="max-width: 100%; height: auto;" srcset="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/suc_president.jpg?w=600&amp;ssl=1 600w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/suc_president.jpg?resize=200%2C300&amp;ssl=1 200w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/suc_president.jpg?resize=500%2C750&amp;ssl=1 500w" sizes="(max-width: 200px) 100vw, 200px" />
                                </noscript>
                                <h3 class="widget-title">UNIVERSITY PRESIDENT</h3>
                            </div>		
                        </aside>
                    </center>
                    <center>
                        <aside id="panel-bottom-2" class="large-3 columns" role="complementary">
                            <div id="media_image-11" class="widget widget_media_image">
                                <img width="200" height="300" alt="" style="max-width: 100%; height: auto;" data-srcset="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpabf.jpg?w=600&amp;ssl=1 600w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpabf.jpg?resize=200%2C300&amp;ssl=1 200w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpabf.jpg?resize=500%2C750&amp;ssl=1 500w" data-src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpabf.jpg?fit=200%2C300&amp;ssl=1" data-sizes="(max-width: 200px) 100vw, 200px" class="image wp-image-86  attachment-medium size-medium ls-is-cached lazyloaded" src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpabf.jpg?fit=200%2C300&amp;ssl=1" sizes="(max-width: 200px) 100vw, 200px" srcset="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpabf.jpg?w=600&amp;ssl=1 600w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpabf.jpg?resize=200%2C300&amp;ssl=1 200w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpabf.jpg?resize=500%2C750&amp;ssl=1 500w">
                                <noscript>
                                    <img width="200" height="300" src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpabf.jpg?fit=200%2C300&amp;ssl=1" class="image wp-image-86  attachment-medium size-medium" alt="" style="max-width: 100%; height: auto;" srcset="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpabf.jpg?w=600&amp;ssl=1 600w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpabf.jpg?resize=200%2C300&amp;ssl=1 200w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpabf.jpg?resize=500%2C750&amp;ssl=1 500w" sizes="(max-width: 200px) 100vw, 200px" />
                                </noscript>
                                <h3 class="widget-title">VICE PRESDENT FOR ADMINISTRATION BUSINESS AND FINANCE</h3>
                            </div>		
                        </aside>
                    </center>
                    <center>
                        <aside id="panel-bottom-3" class="large-3 columns" role="complementary">
                            <div id="media_image-12" class="widget widget_media_image">
                                <img width="200" height="300" alt="" style="max-width: 100%; height: auto;" data-srcset="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpaa.jpg?w=600&amp;ssl=1 600w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpaa.jpg?resize=200%2C300&amp;ssl=1 200w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpaa.jpg?resize=500%2C750&amp;ssl=1 500w" data-src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpaa.jpg?fit=200%2C300&amp;ssl=1" data-sizes="(max-width: 200px) 100vw, 200px" class="image wp-image-87  attachment-medium size-medium ls-is-cached lazyloaded" src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpaa.jpg?fit=200%2C300&amp;ssl=1" sizes="(max-width: 200px) 100vw, 200px" srcset="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpaa.jpg?w=600&amp;ssl=1 600w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpaa.jpg?resize=200%2C300&amp;ssl=1 200w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpaa.jpg?resize=500%2C750&amp;ssl=1 500w">
                                <noscript>
                                    <img width="200" height="300" src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpaa.jpg?fit=200%2C300&amp;ssl=1" class="image wp-image-87  attachment-medium size-medium" alt="" style="max-width: 100%; height: auto;" srcset="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpaa.jpg?w=600&amp;ssl=1 600w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpaa.jpg?resize=200%2C300&amp;ssl=1 200w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpaa.jpg?resize=500%2C750&amp;ssl=1 500w" sizes="(max-width: 200px) 100vw, 200px" />
                                </noscript>
                                <h3 class="widget-title">VICE PRESIDENT FOR ACADEMIC AFFAIRS</h3>
                            </div>		
                        </aside>
                    </center>
                    <center>
                        <aside id="panel-bottom-4" class="large-3 columns" role="complementary">
                            <div id="media_image-13" class="widget widget_media_image">
                                <img width="200" height="300" alt="" style="max-width: 100%; height: auto;" data-srcset="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpret.jpg?w=600&amp;ssl=1 600w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpret.jpg?resize=200%2C300&amp;ssl=1 200w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpret.jpg?resize=500%2C750&amp;ssl=1 500w" data-src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpret.jpg?fit=200%2C300&amp;ssl=1" data-sizes="(max-width: 200px) 100vw, 200px" class="image wp-image-88  attachment-medium size-medium ls-is-cached lazyloaded" src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpret.jpg?fit=200%2C300&amp;ssl=1" sizes="(max-width: 200px) 100vw, 200px" srcset="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpret.jpg?w=600&amp;ssl=1 600w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpret.jpg?resize=200%2C300&amp;ssl=1 200w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpret.jpg?resize=500%2C750&amp;ssl=1 500w">
                                <noscript>
                                    <img width="200" height="300" src="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpret.jpg?fit=200%2C300&amp;ssl=1" class="image wp-image-88  attachment-medium size-medium" alt="" style="max-width: 100%; height: auto;" srcset="https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpret.jpg?w=600&amp;ssl=1 600w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpret.jpg?resize=200%2C300&amp;ssl=1 200w, https://i0.wp.com/neust.edu.ph/wp-content/uploads/2020/06/vpret.jpg?resize=500%2C750&amp;ssl=1 500w" sizes="(max-width: 200px) 100vw, 200px" />
                                </noscript>
                                <h3 class="widget-title">VICE PRESIDENT FOR RESEARCH, EXTENSION AND TRAINING</h3>
                            </div>		
                        </aside>
                    </center>
                </div>
            </div>
        </div>
        <div class="colleges">
            <div class="line"></div>
            <div class="college-title">NUEVA ECIJA UNIVERSITY OF SCIENCE AND TECHNOLOGY COLLEGES</div>
        </div>
        <div id="main-content" class="row mb">
			<div class="college_logo">
				<div class="col">
					<img data-src="https://neust.edu.ph/wp-content/uploads/college_logos/AGRI.png" class=" lazyloaded" src="https://neust.edu.ph/wp-content/uploads/college_logos/AGRI.png"><noscript><img src="https://neust.edu.ph/wp-content/uploads/college_logos/AGRI.png"/></noscript>
				</div>
				<div class="col">
					<a href="https://architecture.neust.edu.ph/"><img data-src="https://neust.edu.ph//wp-content/uploads/college_logos/ARKI.png" class=" lazyloaded" src="https://neust.edu.ph//wp-content/uploads/college_logos/ARKI.png"><noscript><img src="https://neust.edu.ph//wp-content/uploads/college_logos/ARKI.png"/></noscript></a>
				</div>
				<div class="col">
					<a href="https://cas.neust.edu.ph/"><img data-src="https://neust.edu.ph//wp-content/uploads/college_logos/CAS.png" class=" lazyloaded" src="https://neust.edu.ph//wp-content/uploads/college_logos/CAS.png"><noscript><img src="https://neust.edu.ph//wp-content/uploads/college_logos/CAS.png"/></noscript></a>
				</div>
				<div class="col">
					<a href="https://criminology.neust.edu.ph/"><img data-src="https://neust.edu.ph//wp-content/uploads/college_logos/COC.png" class=" lazyloaded" src="https://neust.edu.ph//wp-content/uploads/college_logos/COC.png"><noscript><img src="https://neust.edu.ph//wp-content/uploads/college_logos/COC.png"/></noscript></a>
				</div>
				<div class="col">
					<img data-src="https://neust.edu.ph//wp-content/uploads/college_logos/COED.png" class=" lazyloaded" src="https://neust.edu.ph//wp-content/uploads/college_logos/COED.png"><noscript><img src="https://neust.edu.ph//wp-content/uploads/college_logos/COED.png"/></noscript>
				</div>
				<div class="col">
					<img data-src="https://neust.edu.ph//wp-content/uploads/college_logos/COENG.png" class=" lazyloaded" src="https://neust.edu.ph//wp-content/uploads/college_logos/COENG.png"><noscript><img src="https://neust.edu.ph//wp-content/uploads/college_logos/COENG.png"/></noscript>
				</div>
				<div class="col">
					<img data-src="https://neust.edu.ph//wp-content/uploads/college_logos/CIT.png" class=" lazyloaded" src="https://neust.edu.ph//wp-content/uploads/college_logos/CIT.png"><noscript><img src="https://neust.edu.ph//wp-content/uploads/college_logos/CIT.png"/></noscript>
				</div>
				<div class="col">
					<a href="https://cict.neust.edu.ph/"><img data-src="https://neust.edu.ph//wp-content/uploads/college_logos/CICT.png" class=" lazyloaded" src="https://neust.edu.ph//wp-content/uploads/college_logos/CICT.png"><noscript><img src="https://neust.edu.ph//wp-content/uploads/college_logos/CICT.png"/></noscript></a>
				</div>
				<div class="col">
					<a href="https://cmbt.neust.edu.ph/"><img data-src="https://neust.edu.ph//wp-content/uploads/college_logos/CMBT.png" class=" lazyloaded" src="https://neust.edu.ph//wp-content/uploads/college_logos/CMBT.png"><noscript><img src="https://neust.edu.ph//wp-content/uploads/college_logos/CMBT.png"/></noscript></a>
				</div>
				<div class="col">
					<a href="https://nursing.neust.edu.ph/"><img data-src="https://neust.edu.ph//wp-content/uploads/college_logos/NURSING.png" class=" lazyloaded" src="https://neust.edu.ph//wp-content/uploads/college_logos/NURSING.png"><noscript><img src="https://neust.edu.ph//wp-content/uploads/college_logos/NURSING.png"/></noscript></a>
				</div>
				<div class="col">
					<a href="https://cpadm.neust.edu.ph/"> <img data-src="https://neust.edu.ph//wp-content/uploads/college_logos/CPADM.png" class=" lazyloaded" src="https://neust.edu.ph//wp-content/uploads/college_logos/CPADM.png"><noscript><img src="https://neust.edu.ph//wp-content/uploads/college_logos/CPADM.png"/></noscript></a>
				</div>
				<div class="col">
					<img data-src="https://neust.edu.ph//wp-content/uploads/college_logos/GS.png" class=" lazyloaded" src="https://neust.edu.ph//wp-content/uploads/college_logos/GS.png"><noscript><img src="https://neust.edu.ph//wp-content/uploads/college_logos/GS.png"/></noscript>
				</div>
				<div class="col">
					<img data-src="https://neust.edu.ph//wp-content/uploads/college_logos/LHS.png" class=" ls-is-cached lazyloaded" src="https://neust.edu.ph//wp-content/uploads/college_logos/LHS.png"><noscript><img src="https://neust.edu.ph//wp-content/uploads/college_logos/LHS.png"/></noscript>
				</div>
			</div>
		</div>
    </div>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark text-white">
        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start contact">
            <!-- Grid row -->
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="text-uppercase fw-bold school-name">
                            <i class="fa-sharp fa-solid fa-building-columns me-3 text-secondary"></i>NUEVA ECIJA UNIVERSITY OF SCIENCE AND TECHNOLOGY
                        </h3>
                    </div>
                    <!-- Grid column -->
                    <div class="col-md-4 con">
                        <!-- Links -->
                        <p><i class="fas fa-home me-3 text-secondary"></i>Gen. Tinio Street., Cabanatuan City, Philippines 3100</p>
                        <p>
                            <i class="fas fa-envelope me-3 text-secondary"></i>neustmain@yahoo.com, neustmain@neust.edu.ph
                        </p>
                        <p><i class="fas fa-phone me-3 text-secondary"></i>Tel no. / Fax No. – (044) 463-0226, (044) 464-3674</p>
                        <p><i class="fas fa-print me-3 text-secondary"></i>Registrar Office – (044) 464-5281</p>
                    </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
            <a class="text-reset fw-bold" href="https://neust.edu.ph">neust.edu.ph</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    
    <div><a href="#" id="back-to-top" style="display: block;"><i class="fa fa-arrow-circle-up fa-2x"></i></a></div>

    <script>
        $(document).ready(function(){
            $(window).scroll(function () {
                    if ($(this).scrollTop() > 50) {
                        $('#back-to-top').fadeIn();
                    } else {
                        $('#back-to-top').fadeOut();
                    }
                });
                // scroll body to 0px on click
                $('#back-to-top').click(function () {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 50);
                    return false;
                });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(runningTime, 1000);
            });
            function runningTime() {
            $.ajax({
                url: 'timeScript.php',
                success: function(data) {
                $('#runningTime').html(data);
                },
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>