<?php include 'phpmailer/sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ECOURSES - Online Courses HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/apple-touch-icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>




    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="row align-items-center py-4 px-xl-5">
                <div class="col-lg-3">
                    <a href="" class="logoheader">
                        <img src="img/image.png" width="150px"  >
                    </a>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Our Office</h6>
                        <small>1606 Bir Rami Sud 2eme etage, Kenitra, Morocco</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Email Us</h6>
                        <small>math.pc.bac@gmail.com</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-phone text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Call Us</h6>
                        <small>+212 682-121821</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
              
            <div class="col-lg-3 d-none d-lg-block">
                 <!--
                <a class="d-flex align-items-center justify-content-between bg-secondary w-100 text-decoration-none" data-toggle="collapse" href="#navbar-vertical" style="height: 67px; padding: 0 30px;">
                    <h5 class="text-primary m-0"><i class="fa fa-book-open mr-2"></i>Languages</h5>
                    <i class="fa fa-angle-down text-primary"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 9;">
                    <div class="navbar-nav w-100">
                        <a href="" class="nav-item nav-link"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Flag_of_Morocco_%28blue_green%29.svg/640px-Flag_of_Morocco_%28blue_green%29.svg.png" alt="France" height="13px" width="20px" >&nbsp; Arabe </a> 
                        <a href="" class="nav-item nav-link"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Berber_flag.svg/1200px-Berber_flag.svg.png" alt="France" height="13px" width="20px">&nbsp; Amazigh</a>
                        <a href="" class="nav-item nav-link"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/640px-Flag_of_the_United_Kingdom_%281-2%29.svg.png" alt="France" height="13px" width="20px">&nbsp; English</a>
                        <a href="" class="nav-item nav-link"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/30px-Flag_of_France.svg.png" alt="France" height="13px" width="20px">&nbsp; Francais</a>
                        <a href="" class="nav-item nav-link"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Bandera_de_Espa%C3%B1a.svg/640px-Bandera_de_Espa%C3%B1a.svg.png" alt="France" height="13px" width="20px">&nbsp; Spanish</a>
                        <a href="" class="nav-item nav-link"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/1280px-Flag_of_Germany.svg.png" alt="France" height="13px" width="20px">&nbsp; Germany</a>
                       
                    </div>
                </nav>
                   -->
                   
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><span class="text-primary">E</span>COURSES</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="index.html" class="nav-item nav-link ">Home</a>
                            
                            <a href="course.html" class="nav-item nav-link">Offers</a>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Languages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="course.html" class="dropdown-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Flag_of_Morocco_%28blue_green%29.svg/640px-Flag_of_Morocco_%28blue_green%29.svg.png" alt="France" height="13px" width="20px" >&nbsp; Arabe </a> 
                                    <a href="course.html" class="dropdown-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Berber_flag.svg/1200px-Berber_flag.svg.png" alt="France" height="13px" width="20px">&nbsp; Amazigh</a>
                                    <a href="course.html" class="dropdown-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/640px-Flag_of_the_United_Kingdom_%281-2%29.svg.png" alt="France" height="13px" width="20px">&nbsp; English</a>
                                    <a href="course.html" class="dropdown-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/30px-Flag_of_France.svg.png" alt="France" height="13px" width="20px">&nbsp; Francais</a>
                                    <a href="course.html" class="dropdown-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Bandera_de_Espa%C3%B1a.svg/640px-Bandera_de_Espa%C3%B1a.svg.png" alt="France" height="13px" width="20px">&nbsp; Spanish</a>
                                    <a href="course.html" class="dropdown-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/1280px-Flag_of_Germany.svg.png" alt="France" height="13px" width="20px">&nbsp; Germany</a>
                                   
                                </div>
                            </div>
                            <a href="course.html" class="nav-item nav-link">Kitchen</a>

                          
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Remedial teaching</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="course.html" class="dropdown-item"><img src="https://cdn-icons-png.flaticon.com/128/503/503559.png" width="20px" alt=""> &nbsp;First primary school</a>
                                    <a href="course.html" class="dropdown-item"> <img src="https://cdn-icons-png.flaticon.com/128/503/503559.png" width="20px" alt=""> &nbsp;Second primary school</a>
                                    <a href="course.html" class="dropdown-item"> <img src="https://cdn-icons-png.flaticon.com/128/503/503559.png" width="20px" alt=""> &nbsp;third primary school</a>
                                    <a href="course.html" class="dropdown-item"><img src="https://cdn-icons-png.flaticon.com/128/503/503559.png" width="20px" alt=""> &nbsp;fourth primary school</a>
                                    <a href="course.html" class="dropdown-item"> <img src="https://cdn-icons-png.flaticon.com/128/503/503559.png" width="20px" alt=""> &nbsp;Fifth primary school</a>
                                    <a href="course.html" class="dropdown-item"> <img src="https://cdn-icons-png.flaticon.com/128/503/503559.png" width="20px" alt=""> &nbsp;sixth grade</a>
                                    <a href="course.html" class="dropdown-item"> <img src="https://cdn-icons-png.flaticon.com/128/503/503559.png" width="20px" alt=""> &nbsp;First preparatory school</a>
                                    <a href="course.html" class="dropdown-item"> <img src="https://cdn-icons-png.flaticon.com/128/503/503559.png" width="20px" alt=""> &nbsp;Second preparatory school</a>
                                    <a href="course.html" class="dropdown-item"> <img src="https://cdn-icons-png.flaticon.com/128/503/503559.png" width="20px" alt=""> &nbsp;Third preparatory school</a>
                                    <a href="course.html" class="dropdown-item"> <img src="https://cdn-icons-png.flaticon.com/128/503/503559.png" width="20px" alt=""> &nbsp;First secondary</a>
                                    <a href="course.html" class="dropdown-item"> <img src="https://cdn-icons-png.flaticon.com/128/503/503559.png" width="20px" alt=""> &nbsp;First baccalaureate</a>
                                    <a href="course.html" class="dropdown-item"> <img src="https://cdn-icons-png.flaticon.com/128/503/503559.png" width="20px" alt=""> &nbsp;Second baccalaureate</a>
                                </div>
                            </div>
                       
                        <a href="course.html" class="nav-item nav-link">Competitions</a>   
                 
                            <a href="contact.php" class="nav-item nav-link active">Contact</a>
                        </div>
                        <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="">Join Now</a>
                        
                    </div>
                    <div class="nav-item dropdown navbar-nav">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Langue</a>
                        <div class="dropdown-menu rounded-0 m-0 ">
                            <a href="" class="dropdown-item" ><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Flag_of_Morocco_%28blue_green%29.svg/640px-Flag_of_Morocco_%28blue_green%29.svg.png" alt="France" height="13px" width="20px" >&nbsp; Arabe </a> 
                          <a  href="" class="dropdown-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/640px-Flag_of_the_United_Kingdom_%281-2%29.svg.png" alt="France" height="13px" width="20px">&nbsp; English</a>
                            <a href="" class="dropdown-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/30px-Flag_of_France.svg.png" alt="France" height="13px" width="20px">&nbsp; Francais</a>
                        </div>
                    </div>
                  
                </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Contact</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Contact</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h1 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Contact Us</h1>
                
            </div>
            <div>
              
                    
            
                 <!--alert messages start-->
                 <?php echo $alert; ?>
    <!--alert messages end-->

            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form action="" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email"  name="email"  class="form-control" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control"  name="message"  id="message" rows="5" placeholder="Your Message" required></textarea>
                </div>
                <input type="submit" name="submit" class="btn btn-primary btn-block border-0 py-3" value="Send">
            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--contact section end-->

     <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>1606 Bir Rami Sud 2eme etage, Kenitra, Morocco</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+212 682-121821</p>
                        <p><i class="fa fa-envelope mr-2"></i>math.pc.bac@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-square mr-2" href="https://api.whatsapp.com/send/?phone=%2B212611047500&text&type=phone_number&app_absent=0"><i class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="https://www.facebook.com/9ismi.ma"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="https://www.youtube.com/@9ismi"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-square" href="https://www.instagram.com/9ismi.ma/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Our Courses</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Web Design</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Apps Design</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Marketing</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Research</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>SEO</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 mb-5">
                <div class="col-lg-12">
                    <img src="img/channels4_banner.jpg" class="img-fluid" alt="Responsive image">
                </div>
                <p></p>
                <div class="download android">
                    <i class="fab fa-android icon"></i>
                    <a id="astore" target="_blank"  ><span class="p1">Download from</span></a>
                    <span class="p2">Google Play</span>
                  </div>
              
                  <div class="download apple">
                    <i class="fab fa-apple icon"></i>
                   
                    <a id="astore" target="_blank"  ><span class="p1">Download from</span></a>
                    <span  class="p2">App Store</span>
                  </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">9ismi.ma</a>. All Rights Reserved. Designed by <a href="https://websolvus.com/">WebSolvus</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>