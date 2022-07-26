<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Database</title>
  

  <!-- Favicons
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    .login-signup{
    float: right;
}

.logout{
    color: black;
}

.logout:hover{
    color: orangered;
}

.phppot-container{
    background-image: url(gold.jpg);
    background-size: cover;
}

.header-social-links {
  padding-left: 20px;
}
.header-social-links a {
  color: rgba(255, 255, 255, 1);
  margin-left: 10px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transition: 0.3s;
}
.header-social-links a i {
  line-height: 0;
}
.header-social-links a:hover {
  color: #FFD23F;
}
@media (max-width: 768px) {
  .header-social-links {
    padding: 0 15px 0 0;
  }
}

.container{
    width: 1000px;
   
    position: relative;
    display: flex;
    justify-content: space-between;
    margin: 15px auto;
}

.container .card{
    position: relative;
    cursor: pointer;
    
}

.container .card .face{
    width: 300px;
    height: 200px;
    transition: 0.5s;
    
}
 
.container .card .face.face1{
    position: relative;
    background: #02182B;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
    transform: translateY(100px);
    
}
.container .card:hover .face.face1{
    background: linear-gradient(-20deg, #8B2635, #2E3532, #23a6d5, #2E3532);;
    transform: translateY(0);
}
.container .card .face.face2{
    position: relative;
    /* background: #fff; */
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    box-sizing: border-box;
    /* box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8); */
    transform: translateY(-100px);
}
.container .card:hover .face.face2{
    transform: translateY(0);
}
 
.container .card .face.face2 .content p{
    margin: 10;
    padding: 10;
}

.container .card .face.face1 .content{
    opacity: 0.2;
    transition: 0.5s;
}
 
.container .card:hover .face.face1 .content{
    opacity: 1;
}
 
.container .card .face.face1 .content img{
    max-width: 100px;
}
 
.container .card .face.face1 .content h3{
    margin: 10px 0 0;
    padding: 0;
    color: gold;
    text-align: center;
    font-size: 1.5em;
}

.container .card .face.face2 .content a{
    margin: 15px 0 0;
    display:  inline-block;
    text-decoration: none;
    font-weight: 900;
    padding: 5px;
    border: 1px solid #333;
    border-radius: 4px;
}

.container .card .face.face2 .content a:hover{
    color: black;
}

.databloc{
  border: 2px solid black;
}

.lab{
    text-transform: uppercase;
}

  </style>
 
</head>

<body>
<div class="phppot-container">
		<div class="page-header">
			<span class="login-signup"><a class="logout" href="logout.php">Logout</a></span>
		</div>
		<div class="page-content">Welcome <strong><?php echo $username;?>,</strong>
    </div>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center header-inner-pages">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="/test/home.php">SCHOOLWORLD</a></h1>
      

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="home.php">Home</a></li>
          <li><a class="nav-link scrollto" href="home.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="home.php#services">Services</a></li>
         
          <li class="nav-link scrollto"><a class="active" href="database.php">Database </a>
          </li>
          <li><a class="nav-link scrollto" href="home.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="home.php">Home</a></li>
          <li>Database</li>
        </ol>
        <!-- <h2>DATABASE</h2> -->

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row">
            <div class="col-md-4  databloc card">
                    <div class=" face face1">
                        <div class="content">
                            <h3 class="lab">UNIVERSITY OF HULL</h3>
                        </div>
                    </div>
                    <div class=" face face2">
                        <div class="content">
                            <ul>
                                <li><strong>Level: </strong>Post Graduate</li>
                                <li><strong>Admission: </strong>September,January</li>
                                <li><strong>Tuition Fees: </strong>£6000-£11000</li>
                                <li><strong>School URL</strong>: <a href="https://www.hull.ac.uk/search/">www.hull.ac.uk</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
            <br>
            <div class="col-md-4  databloc card">
                    <div class="face face1">
                        <div class="content">
                            <h3 class="lab">HU University of Applied Sciences Utrecht</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                        <ul>
                                <li><strong>Level:</strong> Post Graduate</li>
                                <li><strong>Admission: </strong>September, January</li>
                                <li><strong>Tuition Fees: </strong>€8,812 </li>
                                <li><strong>School URL</strong>: <a href="https://www.internationalhu.com/programmes#/typeofprogramme=d73b4f2b-2757-4df4-a447-f3dd140d65d6">www.internationalhu.com</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
            <br>
            <div class="col-md-4 databloc card">
                    <div class="face face1">
                        <div class="content">
                            <h3 class="lab">Free University of Berlin</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                        <ul>
                                <li><strong>Level:</strong> Post Graduate</li>
                                <li><strong>Admission: </strong>September, January</li>
                                <li><strong>Tuition Fees: </strong>€1000 </li>
                                <li><strong>School URL</strong>: <a href="https://www.fu-berlin.de/en/studium/studienangebot/master/index.html">www.foberlin.com</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
            <br>
            <div class="col-md-4 databloc card">
                    <div class="face face1">
                        <div class="content">
                            <h3 class="lab">University of Porto,Portugal</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                        <ul>
                                <li><strong>Level:</strong> Post Graduate</li>
                                <li><strong>Admission: </strong>September</li>
                                <li><strong>Tuition Fees: </strong>€3500-€10000 </li>
                                <li><strong>School URL</strong>: <a href="https://sigarra.up.pt/up/en/web_base.gera_pagina?p_pagina=mestrados">www.universityofPorto.com</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
                    
            <div class="col-md-4 databloc card">
                    <div class="face face1">
                        <div class="content">
                            <h3 class="lab">Fontys University of Applied Sciences, Netherland</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                        <ul>
                                <li><strong>Level:</strong> Post Graduate</li>
                                <li><strong>Admission: </strong>September</li>
                                <li><strong>Tuition Fees: </strong>€10660 </li>
                                <li><strong>School URL</strong>: <a href="https://fontys.edu/Bachelors-Masters.htm">www.fontys.edu</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
            <br>
            <div class="col-md-4 databloc card">
                    <div class="face face1">
                        <div class="content">
                            <h3 class="lab">Novosibirsk State University, Russia</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                        <ul>
                                <li><strong>Level:</strong> Post Graduate</li>
                                <li><strong>Admission: </strong>September, January</li>
                                <li><strong>Tuition Fees: </strong>€5000 </li>
                                <li><strong>School URL</strong>: <a href="https://english.nsu.ru/admission/programs/master-s-degree-programs-english/">english.nsu.ru</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
                    <br>
                    <div class="col-md-4 databloc card">
                    <div class="face face1">
                        <div class="content">
                            <h3 class="lab">Léonard de Vinci University College, Belgium</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                        <ul>
                                <li><strong>Level:</strong> Post Graduate</li>
                                <li><strong>Admission: </strong>September, </li>
                                <li><strong>Tuition Fees: </strong>€2000 </li>
                                <li><strong>School URL</strong>: <a href="https://www.vinci.be/en/studies">www.vinci.be</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-md-4 databloc card">
                    <div class="face face1">
                        <div class="content">
                            <h3 class="lab">Heidelberg University, Germany</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                        <ul>
                                <li><strong>Level:</strong> Post Graduate</li>
                                <li><strong>Admission: </strong>September </li>
                                <li><strong>Tuition Fees: </strong>€1500 </li>
                                <li><strong>School URL</strong>: <a href="https://www.uni-heidelberg.de/en/study">www.uni-heidelberg.de</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
                   <br>
                   <div class="col-md-4 databloc card">
                    <div class="face face1">
                        <div class="content">
                            <h3 class="lab">Univerity of Vienna, Austria</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                        <ul>
                                <li><strong>Level:</strong> Post Graduate</li>
                                <li><strong>Admission: </strong>September </li>
                                <li><strong>Tuition Fees: </strong>€5000 </li>
                                <li><strong>School URL</strong>: <a href="https://studieren.univie.ac.at/en/all-information-for-master-programmes/?key=button">www.univie.ac.at/en/</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>SCHOOLWORLD</h3>
            <p>Education For ALL</p>
          </div>
        </div>


        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>SchoolWorld</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by Bob Acres</a>
      </div>
    </div>
  </footer>

</body>

</html>