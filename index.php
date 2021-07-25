<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="portfolio";

    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die("Sorry we failed to connect".mysqli_connect_error($conn));
    }
    else{
        $sql = "INSERT INTO `contact` (`name`,`email`,`subject`,`message`) VALUES('$name','$email','$subject','$message')";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo " data does not inserted".mysqli_error($conn);
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shikha Dhadwal</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"></link>
</head>
<body>




    <div class="site-main-wrapper">
        <button class="hamberger">
            <img src="./images/hamberger.png" alt="">
        </button>
        <!-- mobile navigation -->
    <div class="mobile-nav">
        <button class="times"><img src="./images/close.png" alt=""></button>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#project">Projects</a></li>
            <li><a href="#certificate">Licenses & certification</a></li>
            <a href="#contact"><button class="btn btn-primary">Contact</button></a>
        </ul>
    </div>

        <!-- header -->
    <header>
        <div id="home" class="container">
            <!-- nav bar -->
        <nav id="main-nav" class="flex items-center justify-between">
            <div class="left flex items-center">
                
                <div>
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#skills">Skills</a>
                    <a href="#project">Projects</a>
                    <a href="#certificate">Licenses & certifications</a>
                </div>
            </div>
            <div class="right">
                <a href="#contact"><button class="btn btn-primary">Contact</button></a>
            </div> 
            
        </nav>

        <!-- home section -->
        <div class="image flex items-center justify-between">
            <div class="left flex1 flex justify-center">
                <img src="./images/profile.jpeg" alt="">
            </div>
            <div class="right flex1">
                <h6>Shikha Dhadwal</h6>
                <h1>I'm a Full Stack <span>Developer</span></h1>
                <div>
                    <a href="./doc/Shikha _Dhadwal.pdf" target="blank"><button  class="btn btn-secondary">Download Resume</button></a>
                </div>
            </div>
        </div>
        </div>
    </header>

<!-- about section -->
    <section id="about" class="about">
        <div class="container flex items-center">
            <div class="flex1">
                <img class="about-me-img" src ="./images/profile.jpeg" alt="">
            </div>
            <div class="flex1">
                <h1>About <span>Me</span></h1>
                <h3>Hello! i'm Shikha Dhadwal.</h3>
                <p>Hi, I am Shikha Dhadwal. I am from Himachal Pradesh. I want to join an organization which helps to increase my technical knowledge and Web Development skills and which also lead to the organizational growth.   
                </p>
                <div class="social">
                    <a href="https://www.linkedin.com/in/shikha-dhadwal-b5a902195/" target="blank"><img src="./images/linkedin.png" alt=""></a>
                    <a href="https://github.com/shikhadhadwal" target="blank"><img src="./images/github.png" alt=""></a>
                    <a href="https://www.hackerrank.com/dhadwalShikha?hr_r=1" target="blank"><img src="./images/hackerrank.png" alt=""></a>
                    
                    
                </div>
            </div>
        </div>
    </section>

    <!-- skills section -->
    <section id="skills" class="skills">
        <h1 class="section-heading-2">My <span>Skills</span></h1>
        <div class="skills-bar">
            <div class="bar">
                <div class="info">
                    <span>HTML</span>
                </div>
                <div class="progress-line html"><span></span></div>
            </div>
            <div class="bar">
                <div class="info">
                    <span>CSS</span>
                </div>
                <div class="progress-line css"><span></span></div>
            </div>
            <div class="bar">
                <div class="info">
                    <span>JAVASCRIPT</span>
                </div>
                <div class="progress-line javascript"><span></span></div>
            </div>
            <div class="bar">
                <div class="info">
                    <span>BOOTSTRAP</span>
                </div>
                <div class="progress-line bootstrap"><span></span></div>
            </div>
            <div class="bar">
                <div class="info">
                    <span>PHP</span>
                </div>
                <div class="progress-line php"><span></span></div>
            </div>
            <div class="bar">
                <div class="info">
                    <span>MySQL</span>
                </div>
                <div class="progress-line mysql"><span></span></div>
            </div>
            <div class="bar">
                <div class="info">
                    <span>Python</span>
                </div>
                <div class="progress-line python"><span></span></div>
            </div>
        </div>      
    </section>


<!-- projects section -->
    <section id="project" class="projects">
        <div class="container">
            <h1 class="section-heading"><span>My</span> Projects</h1>
            <p>Projects made by me!</p>
            <div class="slider">
                <div class="slide">
                    <img src="./images/food.jpg" alt="">
                    <span>Online Food Ordering System</span>
                    <p>The customer can register initially with minimum details
                        and will be allowed to check the menu items before
                        ordering them, adding them to cart and submit the order</p>
                </div>
                <div class="slide">
                    <img src="./images/blood.jpg" alt="">
                    <span>Blood Bank Management System</span>
                    <p>The Blood Bank helps the people who are in need of a blood by giving
                        them overall details regarding the donors with the same blood group
                        and within their city.</p>
                </div>
                <div class="slide">
                    <img src="./images/brain.jpg" alt="">
                    <span>BrainExpertise Forums</span>
                    <p>The purpose of a forum is to engage different groups of the same
                        space together so they discuss some topic or give the opinion about something or provide useful information that can help another person or group and solve their problems or doubts, etc.
                        </p>
                </div>
                <div class="slide">
                    <img src="./images/tictac.png" alt="">
                    <span>Tic Tac Toe</span>
                    <p>A Tic Tac Toe is a game in which two players seek in alternate turns to complete a row, a column, or a diagonal with either three O's or three X's drawn in the spaces of a grid of nine squares; noughts and crosses.</p>
                </div>
            </div>
            <div class="slider-dots"></div>
        </div>
    </section>

<!-- certifications and trainings section -->
<section id="certificate" class="certifications">
    <h1 class="section-heading-2">Licenses & <span>certifications</span></h1>
    <div class="container flex-container items-center small">
        
            <div class="image-details"><img class="image" src="./images/internshala.jpg" alt=""></div>
            <div class="details">
                <h2>Web Develoment</h2>
                <h4>Internshala<br>
                Issued July 2021<br>
                Credential ID F62B1CD4-C17F-36CD-8324-EBFCC4B877F5<br><br></h4>
                <h4><a href="https://trainings.internshala.com/verify_certificate" target="blank">See Credentials</a></h4>
            </div>              
    </div>
    <div><hr></div>
    <div class="container flex-container items-center small">
        
        <div class="image-details"><img class="image" src="./images/guvi.jpg" alt=""></div>
        <div class="details">
            <h2>Build a Face Recognition Application using Python</h2>
            <h4>GUVI Geek Networks, IITM Research Park<br>
            Issued April 2021<br>
            Credential ID 9In614G1TsR6x61y13<br><br></h4>
            <h4><a href="https://www.guvi.in/certificate?id=9In614G1TsR6x61y13" target="blank">See Credentials</a></h4>
        
        </div>              
    </div>
    <div><hr></div>
    <div class="container flex-container items-center small">
        <div class="image-details"><img class="image" src="./images/iit.png" alt=""></div>
        <div class="details">
            <h2>Python 3.4.3</h2>
            <h4>Indian Institute of Technology, Bombay<br>
            Issued October 2019<br>
            Credential ID 2217622DKN<br><br></h4>
            
        </div>              
    </div>
    <div><hr></div>
    <div class="container flex-container items-center small">
        <div class="image-details"><img class="image" src="./images/iit.png" alt=""></div>
        <div class="details">
            <h2>Linux</h2>
            <h4>Indian Institute of Technology, Bombay<br>
            Issued April 2019<br>
            Credential ID 209833339D<br><br></h4>
            
        </div>              
    </div>
</section>

    <!-- contact section -->
    <section id="contact" class="contact">
        <div class="container">
            <h1 class="section-heading">Contact <span>Me</span></h1>
            <div class="card-wrapper">
                <div class="card">
                    <img src="./images/mobile-phone.png" alt="">
                    <h3>Call Me On</h3>
                    <h6>+91 8219887984</h6>
                </div>
                <div class="card">
                    <img src="./images/email.png" alt="">
                    <h3>Email Me At</h3>
                    <h6>shikhadhadwal3@gmail.com</h6>
                </div>
                <div class="card">
                    <img src="./images/map.png" alt="">
                    <h3>Address</h3>
                    <h6>VPO-Jangal,Jaisinghpur,Kangra,Himachal Pradesh, 176082</h6>
                </div>
            </div>
            
            
            <form method="post" action="index.php #contact">
                <div class="input-wrap">
                    <input type="text" name="name"  placeholder="Your Name*" />

                    <input type="email" name="email"  placeholder="Your Email*" />
                </div>
                <div class="input-wrap-2">
                    <input type="text" name="subject"  placeholder="Your Subject.." />
                    

                    <textarea type="text" name="message"  cols="30" rows="10" placeholder="Your Message.."></textarea>
                </div>
                <div class=btn-wrapper>
                    <input class="btn btn-primary" type="submit" name="submit" value="Send Message">
                    <!-- <button class="btn btn-primary">Send Message</button> -->
                </div> 
            </form>

        </div>  
        </div>
    </section>
    
    <!-- footer section -->
    <footer>
        <div>
            &copy Copyright Shikha Dhadwal. All Rights Reserved.
        </div>
    </footer>
    </div>
    
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>