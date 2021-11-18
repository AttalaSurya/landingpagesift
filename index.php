<?php
    include "sistemOBE.db";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Landing Page Sistem Informasi Fakultas Teknik Universitas Sebelas Maret">
        <meta name="author" content="Attala Surya Prima Amanda">
        <title>Sistem Informasi Fakultas Teknik</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/heading.css">
        <link rel="stylesheet" href="css/body.css">
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/ldsift.css" rel="stylesheet">
        <link href="css/ani.css" rel="stylesheet">
      </head>
        <body id="page-top">
            <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
                <div class="d-flex bd-highlight">
                    <div class="me-auto p-2 bd-highlight"><img src="navbar.png" width="128" height="45"></div>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-5">
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-1 px-2 px-lg-1 rounded js-scroll-trigger" href="#sistemOBE">Sistem OBE</a>
                            </li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-1 px-2 px-lg-1 rounded js-scroll-trigger" href="#sistemPortal">Sistem Portal</a>
                            </li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-1 px-2 px-lg-1 rounded js-scroll-trigger" href="#BEMS">BEMS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
                <header class="masthead bg-primary text-white text-center">
                    <div class="container position-relative">
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <div class="text-center text-light fade-in">
                                    <h1>Sistem Informasi Fakultas Teknik</h1>
                                    <h2>Universitas Sebelas Maret</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            <section class="page-section portfolio" id="sistemOBE">
                <div class="container">
                    <div class="text-center">
                        <h2 class="page-section-heading text-secondary mb-0 d-inline-block">Sistem OBE</h2></div>
                            <div class="container py-5">
                                <div class="text-center">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-4 col-lg-6 mb-4">
                                            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                                            <a href=<?php echo $obesipil ?>><div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                    <div class="portfolio-item-caption-content text-center text-dark">
                                                        <h4>Teknik Sipil</h4>
                                                    </div>
                                                </div></a>
                                            <img class="img-fluid" src="assets/img/sistemOBE/T_Sipil.png" width="200" height="200" alt="Teknik Sipil">
                                        </div>
                                    </div>
                                <div class="col-xl-4 col-lg-6 mb-4">
                                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                                    <a href=<?php echo $obeelektro ?>><div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                    <div class="portfolio-item-caption-content text-center text-dark">
                                                        <h4>Teknik Elektro</h4>
                                                    </div>
                                                </div></a>
                                    <img class="img-fluid" src="assets/img/sistemOBE/T_Elektro.png" width="200" height="200" alt="Teknik Sipil"/>
                                </div>
                                    </div>
                                        <div class="col-xl-4 col-lg-6 mb-4">
                                            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                                            <a href=<?php echo $obemesin ?>><div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                    <div class="portfolio-item-caption-content text-center text-dark">
                                                        <h4>Teknik Mesin</h4>
                                                    </div>
                                                </div></a>
                                            <img class="img-fluid" src="assets/img/sistemOBE/T_Mesin.png" width="200" height="200" alt="Teknik Sipil"/>
                                        </div>
                                    </div>
                                <div class="col-xl-4 col-lg-6 mb-4">
                                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                                    <a href=<?php echo $obekimia ?>><div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                    <div class="portfolio-item-caption-content text-center text-dark">
                                                        <h4>Teknik Kimia</h4>
                                                    </div>
                                                </div></a>
                                    <img class="img-fluid" src="assets/img/sistemOBE/T_Kimia.png" width="200" height="200" alt="Teknik Sipil"/>
                                </div>
                                    </div>
                                        <div class="col-xl-4 col-lg-6 mb-4">
                                            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                                            <a href=<?php echo $obeindustri ?>><div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                    <div class="portfolio-item-caption-content text-center text-dark">
                                                        <h4>Teknik Industri</h4>
                                                    </div>
                                                </div></a>
                                            <img class="img-fluid" src="assets/img/sistemOBE/T_Industri.png" width="200" height="200" alt="Teknik Sipil"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="page-section portfolio" id="sistemPortal">
                        <div class="container">
                            <div class="text-center">
                                <h2 class="page-section-heading text-secondary mb-0 d-inline-block">Sistem Portal</h2>
                                <div class="divider-custom"></div>
                            </div>
                            <div class="container py-5">
                                <div class="text-center">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-4 col-lg-6 mb-4">
                                            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                                            <a href=<?php echo $obesipil ?>><div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                    <div class="portfolio-item-caption-content text-center text-dark">
                                                        <h4>Arsitek</h4>
                                                    </div>
                                                </div></a>
                                            <img class="img-fluid" src="assets/img/sistemPortal/Arsitek.png" width="200" height="200" alt="Teknik Sipil">
                                        </div>
                                    </div>
                                <div class="col-xl-4 col-lg-6 mb-4">
                                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                                    <a href=<?php echo $obeelektro ?>><div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                    <div class="portfolio-item-caption-content text-center text-dark">
                                                        <h4>Teknik Elektro</h4>
                                                    </div>
                                                </div></a>
                                    <img class="img-fluid" src="assets/img/sistemPortal/T_Elektro.png" width="150" height="150" alt="Teknik Sipil"/>
                                </div>
                                    </div>
                                        <div class="col-xl-4 col-lg-6 mb-4">
                                            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                                            <a href=<?php echo $obemesin ?>><div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                    <div class="portfolio-item-caption-content text-center text-dark">
                                                        <h4>Teknik Mesin</h4>
                                                    </div>
                                                </div></a>
                                            <img class="img-fluid" src="assets/img/sistemPortal/T_Mesin.png" width="200" height="200" alt="Teknik Sipil"/>
                                        </div>
                                    </div>
                                        <div class="col-xl-4 col-lg-6 mb-4">
                                            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                                            <a href=<?php echo $obeindustri ?>><div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                    <div class="portfolio-item-caption-content text-center text-dark">
                                                        <h4>PWK</h4>
                                                    </div>
                                                </div></a>
                                            <img class="img-fluid" src="assets/img/sistemPortal/PWK.png" width="200" height="200" alt="Teknik Sipil"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
        <section class="page-section" id="BEMS">
            <div class="container">
                <!-- Contact Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading text-secondary d-inline-block mb-0">BEMS</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom"></div>
                <!-- Contact Section Content-->
                <div class="container py-5">
                    <div class="text-center">
                        <div class="row justify-content-center">
                            <!-- Portfolio Items-->
                            <div class="col-md-6 col-lg-4 mb-5">
                                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white"><h4>Build Energy Management System</h4></div>
                                    </div><img class="img-fluid" src="assets/img/Portfolio/T_Elektro.png" width="200" height="200" alt="Build Energy Management System"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="site-footer bg-dark"  style="min-height:20vh">
            <div class="container">
              <div class="row">
                <div class="col-md-4 mt-4 mb-4">
                  <img src="https://spada.uns.ac.id/pluginfile.php/2/course/section/1/uns.png" style="width: 40%;" alt="">
                  <h3 class="footer-heading text-light">Fakultas Teknik UNS</h3>
                  <p class="text-light">Jl. Ir. Sutami No.36 A Surakarta 57126 <br>
                    Telp (+62)77358350233 <br>
                    Fax (+62)77358350233 <br>
                    Email : ft@ft-uns.com </p>
                </div>
                <div class="col-md-4 mt-4 mb-4">
                  <h3 class="footer-heading text-light">Program Studi</h3>
                  <a href="https://arsitektur.ft.uns.ac.id/" target='_blank'>Arsitektur</a> <br>
                  <a href="https://sipil.ft.uns.ac.id/?lang=id" target='_blank'>Teknik Sipil</a> <br>
                  <a href="https://mesin.ft.uns.ac.id/" target='_blank'>Teknik Mesin</a> <br>
                  <a href="http://industri.ft.uns.ac.id/" target='_blank'>Teknik Industri</a> <br>
                  <a href="https://che.ft.uns.ac.id/" target='_blank'>Teknik Kimia</a> <br>
                  <a href="https://elektro.ft.uns.ac.id/" target='_blank'>Teknik Elektro</a> <br>
                  <a href="https://pwk.ft.uns.ac.id/" target='_blank'>Perencanaan Wilayah dan Kota</a> <br>
                </div>
                  <div class="col-md-4 mt-4 mb-4">
                    <h3 class="footer-heading text-light">Maps</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.120699070088!2d110.85154081477673!3d-7.5618169945466365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16fdf072a90f%3A0xea50b255b0e6ce3e!2sFakultas%20Teknik%20Uns!5e0!3m2!1sen!2sid!4v1619534477026!5m2!1sen!2sid" style="max-width:300; max-height:200" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed"><a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>