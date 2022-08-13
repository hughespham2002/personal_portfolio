<?php include 'email-form.php' ;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS Files -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skins/color-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- Style Switcher -->
    <link rel="stylesheet" href="css/skins/color-1.css" class="alternate-style" title="color-1" disabled>
    <link rel="stylesheet" href="css/skins/color-2.css" class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" href="css/skins/color-3.css" class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" href="css/skins/color-4.css" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="css/skins/color-5.css" class="alternate-style" title="color-5" disabled>
    <link rel="stylesheet" href="css/style-switcher.css">
</head>
<body>
    <!-- Main container start-->
    <div class="main-container">
        <!-- Aside start-->
        <div class="aside">
            <div class="logo">
                <a href="#"><span>A</span>tlas</a>
            </div>
            <div class="nav-toggler">
                <span></span>
            </div>
            <ul class="nav">
                <li><a href="#home" class="active"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#about"><i class="fa fa-user"></i>About</a></li>
                <li><a href="#portfolio"><i class="fa fa-briefcase"></i>Portfolio</a></li>
                <li><a href="#contact"><i class="fa fa-comments"></i>Contact</a></li>
            </ul>
        </div>
        <!-- Aside end-->
        <!-- Main content start-->
        <div class="main-content">
            <!-- Home section start-->
            <section class="home section" id="home">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <h3 class="hello">Hello, I'm <span class="name">Hughes Pham</span></h3>
                            <h3 class="profession"> and I'm a <span class="typing">Web Developer</span></h3>
                            <p>I'm a web developer that went through coding bootcamps. I can design and create websites and pictures.</p>
                            <a href="#contact" class="btn hire-me"> Hire Me</a>
                        </div>
                        <div class="home-img padd-15">
                            <img src="assets/Me.jpeg" alt="picture of Hughes Pham">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Home section end-->
            <!-- About section start-->
            <section class="about section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>About Me</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="about-content padd-15">
                            <div class="row">
                                <div class="about-text padd-15">
                                    <h3>I'm Hughes Pham and I'm a <span>Web Developer</span></h3>
                                    <p>insert stuff here</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info padd-15">
                                    <div class="row">
                                        <div class="info-item padd-15">
                                            <p>Email : <span>hughespham2002the2nd@gmail.com</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Phone # : <span>1 714-622-9365</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Github : <span><a href="https://github.com/hughespham2002" target="_blank">hughespham2002</a></span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>LinkedIn : <span><a href="https://www.linkedin.com/in/hughes-pham/" target="_blank">Hughes Pham</a></span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Residence : <span>Garden Grove, CA, USA</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Freelance Status : <span>Available</span></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="buttons padd-15">
                                            <a href="#" class="btn"> Download Resume</a>
                                            <a href="#contact" class="btn hire-me"> Hire Me</a>
                                        </div>
                                    </div>
                                </div>                             
                                <div class="education padd-15">
                                    <h3 class="title">Education</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                <!--timeline items start-->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2021 - 2022
                                                    </h3>
                                                    <h4 class="timeline-title">Fullstack Web Development</h4>
                                                    <h5 class="timeline-subtitle">Bloom Institute of Technology</h5>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2018 - 2019
                                                    </h3>
                                                    <h4 class="timeline-title">Graphic Design</h4>
                                                    <h5 class="timeline-subtitle">J. Frank Dobie High School</h5>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="experience padd-15">
                                    <h3 class="title">Experience</h3>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About section end-->
            <!-- Portfolio section start-->
            <section class="portfolio section" id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Portfolio</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="portfolio-heading padd-15">
                            <h2>My Latest Projects :</h2>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Portfolio item start-->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="" alt="">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio item end-->
                    </div>
                </div>
            </section>
            <!-- Portfolio section end-->
            <!-- Contact section start-->
            <section class="contact section" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Contact Me</h2>
                        </div>
                    </div>
                    <h3 class="contact-title">Any questions?</h3>
                    <h4 class="contact-subtitle">Send me a message.</h4>
                    <div class="row">
                        <form action="email-form.php" method="POST" name="EmailForm">
                            <div class="contact-form padd-15">
                                <div class="row">
                                    <div class="form-item col-6 padd-15">
                                        <div class="form-group">
                                            <label for="name">Name:</label>
                                            <input type="text" id="name" name="name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-item col-6 padd-15">
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" id="email" name="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-item col-6 padd-15">
                                        <div class="form-group">
                                            <label for="subject">Subject:</label>
                                            <input type="subject" id="subject" name="subject" class="form-control" required>
                                        </div>
                                    </div>
                                        <div class="form-item col-12 padd-15">
                                            <div class="form-group">
                                                <label for="message">Message:</label>
                                                <textarea id="message" name="message" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="form-item col-12 padd-15">
                                            <button type="submit" class="btn" data-wait="Please wait ...">Send message</button>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="success"> <?php echo success; ?></p>
                                        <p class="failure"><?php echo failure; ?></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- Contact section end-->
        </div>
        <!-- Main content end-->
    </div>
    <!-- Main container end-->
    <!-- Style Switcher start-->
    <div class="style-switcher">
        <div class="style-switcher-toggler s-icon">
            <i class="fa fa-cog"></i>
        </div>
        <div class="day-night s-icon">
            <i class="fa"></i>
        </div>
        <h4>Theme Colors</h4>
        <div class="colors">
            <span class="color-1" onclick="setActiveStyle('color-1')"></span>
            <span class="color-2" onclick="setActiveStyle('color-2')"></span>
            <span class="color-3" onclick="setActiveStyle('color-3')"></span>
            <span class="color-4" onclick="setActiveStyle('color-4')"></span>
            <span class="color-5" onclick="setActiveStyle('color-5')"></span>
        </div>
    </div>
    <!-- Style Switcher end-->
    <!-- JS Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>
    <script src="js/style-switcher.js"></script>
</body>
</html>