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
<HTML>
<HEAD>
<TITLE>Dashboard</TITLE>
<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

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

strong{
    text-transform: uppercase;
}
body {
  font-family: "Open Sans", sans-serif;
  color: #444444;
  background-image: url(design.jpg);
}

.top{
    background-color: #eee;
}


a {
  color: #ff7f5d;
  text-decoration: none;
}

a:hover {
  color: #ffa790;
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Raleway", sans-serif;
}

.HD{
    color: black;
}



/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  background: rgba(21, 5, 23, 0.75);
  transition: all 0.5s;
  z-index: 997;
  position: relative;
  height: 70px;
}

#header:hover{
    background-color: black;
}

@media (max-width: 992px) {
  #header {
    height: 60px;
  }
}
#header.fixed-top, #header.header-inner-pages {
  background: rgba(21, 5, 23, 0.8);
}
#header.fixed-top {
  position: fixed;
}
#header .logo {
  font-size: 30px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 500;
  letter-spacing: 0.5px;
  text-transform: uppercase;
}
#header .logo a {
  color: #fff;
}
#header .logo img {
  max-height: 40px;
}

.scrolled-offset {
  margin-top: 70px;
}
@media (max-width: 991px) {
  .scrolled-offset {
    margin-top: 60px;
  }
}

/*--------------------------------------------------------------
# Header Social Links
--------------------------------------------------------------*/
.header-social-links {
  padding-left: 20px;
  background-color: #111;
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

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}

/* .nav-link{
    color: #69140E;
} */
.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}
.navbar li {
  position: relative;
}
.navbar > ul > li {
  white-space: nowrap;
  padding: 10px 12px;
}
.navbar a, .navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 3px;
  font-size: 15px;
  font-weight: 600;
  white-space: nowrap;
  transition: 0.3s;
  color: white;
  position: relative;
}
.navbar a i, .navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}
.navbar > ul > li > a:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 2px;
  bottom: -7px;
  left: 0;
  /* background-color: #ff7f5d; */
  visibility: hidden;
  width: 0px;
  transition: all 0.3s ease-in-out 0s;
}
.navbar a:hover:before, .navbar li:hover > a:before, .navbar .active:before {
  visibility: visible;
  width: 100%;
}
.navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
  color: #084887;
}
.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 12px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}
.navbar .dropdown ul li {
  min-width: 200px;
}
.navbar .dropdown ul a {
  padding: 10px 20px;
  font-size: 14px;
  text-transform: none;
  font-weight: 500;
  /* color: #69140E; */
}
.navbar .dropdown ul a i {
  font-size: 12px;
}
/* .navbar .dropdown ul a:hover, .navbar .dropdown ul .active:hover, .navbar .dropdown ul li:hover > a {
  color: #69140E;
} */
.navbar .dropdown:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}
.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}
.navbar .dropdown .dropdown:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}
@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }
  .navbar .dropdown .dropdown:hover > ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #fff;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}
.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.9);
  transition: 0.3s;
  z-index: 999;
}
.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}
.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}
.navbar-mobile a, .navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  /* color: #150517; */
}
.navbar-mobile > ul > li {
  padding: 0;
}
.navbar-mobile a:hover:before, .navbar-mobile li:hover > a:before, .navbar-mobile .active:before {
  visibility: hidden;
}
.navbar-mobile a:hover, .navbar-mobile .active, .navbar-mobile li:hover > a {
  color: purple;
}
.navbar-mobile .getstarted, .navbar-mobile .getstarted:focus {
  margin: 15px;
}
.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}
.navbar-mobile .dropdown ul li {
  min-width: 200px;
}
.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}
.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}
.navbar-mobile .dropdown ul a:hover, .navbar-mobile .dropdown ul .active:hover, .navbar-mobile .dropdown ul li:hover > a {
  color: #ff7f5d;
}
.navbar-mobile .dropdown > .dropdown-active {
  display: block;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 88vh;
  background: url("../img/hero-bg.jpg") top center;
  background-size: cover;
  position: relative;
  margin-bottom: -70px;
}
@media (max-width: 992px) {
  #hero {
    margin-bottom: -60px;
  }
}
#hero:before {
  content: "";
  background-image:url(scrabble.jpg);
  background-size: cover;
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}
#hero .hero-container {
  position: absolute;
  bottom: 0;
  top: 0;
  left: 15px;
  right: 15px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
}
#hero h1 {
  margin: 0;
  font-size: 64px;
  font-weight: 700;
  line-height: 56px;
  text-transform: uppercase;
  
}
#hero h2 {
  
  margin: 15px 0 0 0;
  font-size: 24px;
}
#hero .btn-get-started {
  font-family: "Raleway", sans-serif;
  font-weight: 900;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 40px;
  border-radius: 4px;
  transition: 0.5s;
  margin-top: 30px;
  border: 2px solid black;
  text-transform: uppercase;
  color: gold;
}
#hero .btn-get-started:hover {
  background: #ff7f5d;
  border: 2px solid #ff7f5d;
}
@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}
@media (max-width: 768px) {
  #hero h1 {
    font-size: 30px;
    line-height: 36px;
  }
  #hero h2 {
    font-size: 18px;
    line-height: 24px;
  }
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
  overflow: hidden;
}

.section-bg {
  background-color: #fafafa;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}
.section-title h2 {
  font-size: 32px;
  font-weight: bolder;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
  color: white;
}
.section-title h2::after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 3px;
  background: #ff7f5d;
  bottom: 0;
  left: calc(50% - 25px);
}
.section-title p {
  margin-bottom: 0;
  color: white;
  font-size: 20px;
  font-weight: bolder;
}

/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
.about{
    
    border-radius: 2%;
}
.ab2{
    font-size: 20px;
    font-weight: bolder;
    color: white;
}

.about .content h2 {
  font-weight:bolder;
  font-size: 26px;
}
.about .content ul {
  list-style: none;
  padding: 0;
}


.about .content ul li {
  padding-left: 28px;
  position: relative;
  font-weight: bolder;
    color: white;
}
.about .content ul li + li {
  margin-top: 10px;
  font-weight: bolder;
    color: white;
}
.about .content ul i {
  position: absolute;
  left: 0;
  top: 2px;
  font-size: 20px;
  color: #ff7f5d;
  line-height: 1;
  font-weight: bolder;
    
}
.about .content p:last-child {
  margin-bottom: 0;
}
.about .content .btn-learn-more {
  font-family: "Raleway", sans-serif;
  font-weight: 600;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 32px;
  border-radius: 5px;
  transition: 0.3s;
  line-height: 1;
  color: #ff7f5d;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  margin-top: 6px;
  border: 2px solid #ff7f5d;
}
.about .content .btn-learn-more:hover {
  background: #ff7f5d;
  color: #fff;
  text-decoration: none;
}


/*--------------------------------------------------------------
# Our Values
--------------------------------------------------------------*/


.our-values .card {
  border: 0;
  padding: 160px 20px 20px 20px;
  position: relative;
  width: 100%;
  background-image: url("read.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

.our-values .card1 {
  border: 0;
  padding: 160px 20px 20px 20px;
  position: relative;
  width: 100%;
  background-image: url("pink.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

.our-values .card2 {
  border: 0;
  padding: 160px 20px 20px 20px;
  position: relative;
  width: 100%;
  background-image: url("book.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

.our-values .card3 {
  border: 0;
  padding: 160px 20px 20px 20px;
  position: relative;
  width: 100%;
  background-image: url("bic.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
.our-values .card-body {
  z-index: 10;
  background: rgba(255, 255, 255, 0.9);
  padding: 15px 30px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  transition: 0.3s;
  transition: ease-in-out 0.4s;
  border-radius: 5px;
}
.our-values .card-title {
  font-weight: 700;
  text-align: center;
  margin-bottom: 15px;
}
.our-values .card-title a {
  color: #150517;
}
.our-values .card-text {
  color: #5e5e5e;
}
.our-values .read-more a {
  color: #777777;
  text-transform: uppercase;
  font-weight: 600;
  font-size: 12px;
  transition: 0.4s;
}
.hov{
    background-color: transparent;
}

/* .our-values .read-more a:hover {
  text-decoration: underline;
}
.our-values .card:hover  .card-body {
  background: #ff7f5d;
} */
/* .our-values .card:hover .read-more a, .our-values .card:hover .card-title, .our-values .card:hover .card-title a, .our-values  .card:hover .card-text {
  color: #fff;
} */



/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.services .icon-box {
  padding: 30px;
  position: relative;
  overflow: hidden;
  border-radius: 10px;
  background: #fff;
  box-shadow: 0 10px 29px 0 rgba(68, 88, 144, 0.1);
  transition: all 0.3s ease-in-out;
  height: 100%;
}
.services .icon-box:hover {
  transform: translateY(-5px);
}
.services .icon {
  position: absolute;
  left: -20px;
  top: calc(50% - 30px);
}
.services .icon i {
  font-size: 64px;
  line-height: 1;
  transition: 0.5s;
}
.services .title {
  margin-left: 40px;
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

.services .icon-box:hover .title a {
  color: #ff7f5d;
}
.services .description {
  font-size: 14px;
  margin-left: 40px;
  line-height: 24px;
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Cta
--------------------------------------------------------------*/
.cta {
  background: #280a2c;
  background-size: cover;
  padding: 60px 0;
}
.cta h3 {
  color: #fff;
  font-size: 28px;
  font-weight: 700;
}
.cta p {
  color: #fff;
}
.cta .cta-btn {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 35px;
  border-radius: 4px;
  transition: 0.5s;
  margin-top: 10px;
  border: 2px solid #fff;
  color: #fff;
  text-transform: uppercase;
}
.cta .cta-btn:hover {
  background: #DF2935;
  border: 2px solid #DF2935;
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact .info {
  width: 100%;
  color: white;
}
.contact .info i {
  font-size: 20px;
  color: black;
  float: left;
  width: 44px;
  height: 44px;
  background: #fff8f6;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}
.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
  color: black;
}
.contact .info p {
  padding: 0 0 0 60px;
  margin-bottom: 0;
  font-size: 18px;
  color: white;
  font-weight: bold;
}
.contact .info .email, .contact .info .phone {
  margin-top: 40px;
}
.contact .info .email:hover i, .contact .info .address:hover i, .contact .info .phone:hover i {
  background: #ff7f5d;
  color: #fff;
}
.contact .php-email-form {
  width: 100%;
  
}
.contact .php-email-form .form-group {
  padding-bottom: 8px;
}
.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  
  text-align: left;
  padding: 15px;
  font-weight: 600;
}
.contact .php-email-form .error-message br + br {
  margin-top: 25px;
}
.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  
  text-align: center;
  padding: 15px;
  font-weight: 600;
}
.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}
.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}
.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 4px;
  box-shadow: none;
  font-size: 14px;
}
.contact .php-email-form input:focus, .contact .php-email-form textarea:focus {
  border-color: #ff7f5d;
}
.contact .php-email-form input {
  height: 44px;
}
.contact .php-email-form textarea {
  padding: 10px 12px;
}
.contact .php-email-form button[type=submit] {
  background: #7BC950;
  border: 1px solid black;
  padding: 10px 24px;
  color: black;
  transition: 0.4s;
  border-radius: 4px ;
}
.contact .php-email-form button[type=submit]:hover {
  background: transparent;

}
@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 15px 0;
  background: #fafafa;
  min-height: 40px;
}
.breadcrumbs h2 {
  font-size: 28px;
  font-weight: 500;
}
.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0 0 10px 0;
  margin: 0;
  font-size: 14px;
}
.breadcrumbs ol li + li {
  padding-left: 10px;
}
.breadcrumbs ol li + li::before {
  display: inline-block;
  padding-right: 10px;
  color: #3b0e41;
  content: "/";
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  background: url("../img/footer-bg.jpg") center center no-repeat;
  color: #fff;
  font-size: 14px;
  position: relative;
}
#footer::before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: rgba(2, 0, 2, 0.6);
  z-index: 1;
}
#footer .footer-top {
  position: relative;
  z-index: 2;
  text-align: center;
  padding: 80px 0;
}
#footer .footer-top h3 {
  font-size: 36px;
  font-weight: 700;
  color: #fff;
  position: relative;
  font-family: "Poppins", sans-serif;
  padding-bottom: 0;
  margin-bottom: 0;
}
#footer .footer-top p {
  font-size: 15;
  font-style: italic;
  margin: 30px 0 0 0;
  padding: 0;
}
#footer .footer-top .footer-newsletter {
  text-align: center;
  font-size: 15px;
  margin-top: 30px;
}
#footer .footer-top .footer-newsletter form {
  background: #fff;
  padding: 6px 10px;
  position: relative;
  border-radius: 4px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  text-align: left;
}
#footer .footer-top .footer-newsletter form input[type=email] {
  border: 0;
  padding: 4px 8px;
  width: calc(100% - 100px);
}
#footer .footer-top .footer-newsletter form input[type=submit] {
  position: absolute;
  top: 0;
  right: -1px;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px;
  background: #ff7f5d;
  color: #fff;
  transition: 0.3s;
  border-radius: 0 4px 4px 0;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}
#footer .footer-top .footer-newsletter form input[type=submit]:hover {
  background: #ff9377;
}
#footer .footer-top .social-links {
  margin-top: 30px;
}
#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: rgba(255, 255, 255, 0.1);
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 4px;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}
#footer .footer-top .social-links a:hover {
  background: #ff7f5d;
  color: #fff;
  text-decoration: none;
}
#footer .footer-bottom {
  border-top: 1px solid #3b0e41;
  z-index: 2;
  position: relative;
  padding-top: 40px;
  padding-bottom: 40px;
}
#footer .copyright {
  float: left;
}
#footer .credits {
  float: right;
  font-size: 13px;
}
@media (max-width: 768px) {
  #footer .copyright, #footer .credits {
    float: none;
    text-align: center;
  }
  #footer .credits {
    padding-top: 5px;
  }
}

figure.test {	
	display: inline-block;
	position: relative;
	overflow: hidden;	
	text-align: center;		
	cursor: pointer;
	width:44%;
}
figure.test img {
	width: 100%;
	height: 100%;
}
figure.test figcaption {
	position: absolute;
	top: 50%;
	left: 22.5%;
	right: 22.5%;	
	width: 200px;
	opacity: 0;
	z-index: 1;
	transition: all 0.8s ease-out;
	transition-delay: 0.2s;
}
figure.test:after {
	display: inline-block;
	position: absolute;
	content: "";
	top: 7%;
	left: 10%;
	right: 10%;
	bottom: 7%;
	background: white;
	opacity: 0;
	transition: all 0.8s ease-out;
}
figure.test:hover:after {
	opacity: 0.9;
}
figure.test:hover figcaption {
	transform: translateY(-50%);
	opacity: 1;
}

</style>


</HEAD>
<BODY>
	<div class="phppot-container">
        <div class="top">
		    <div class="page-header">
			<span class="login-signup"><a class="logout" href="logout.php">Logout</a></span>
		    </div>
		    <div class="page-content">Welcome <strong><?php echo $username;?>,</strong>
            </div>
        </div>
<section id="hero">
    <div class="hero-container">
      <!-- <h1 class="HD">Welcome to SCHOOL WORLD</h1>
      <h2 class="HD2">We make your japa and study abroad dreams come through...</h2> -->
      <!-- <a href="database.php" class="btn-get-started scrollto">Get Started</a>
    </div> -->
  </section>End Hero

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
         
          <li class="nav-link dropdown"><a href="database.php"><span>Database</span> <i class="bi bi-chevron-down"></i></a>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <div class="header-social-links social-links d-flex align-items-center">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>ABOUT US</h2>
        </div>

        <div class="row content">
          <div class="tax col-lg-6">
            <p class="ab2">
              We are an educational agency with reliable people working to bring confirmed information and help in applications to your desired schools and courses.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Database of affordables univsersities in the WORLD</li>
              <li><i class="ri-check-double-line"></i> Search based on countries</li>
              <li><i class="ri-check-double-line"></i> All information required in one place</li>
            </ul>
          </div>
          <div class="tax col-lg-6 pt-4 pt-lg-0">
            <p class="ab2">
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <strong><a href="#" class="btn-learn-more">Learn More</a></strong>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

 

    <!-- ======= Our Values Section ======= -->
    <section id="our-values" class="our-values">
      <div class="container">
      <div class="section-title">
          <h2>OUR VALUES</h2>
        </div>

        <div class="row">
            <figure class=" test col-md-6 d-flex align-items-stretch">
                <div class="card" >
                    <figcaption>
                        <h5 class="card-title"><a href="">Our Mission</a></h5>
                            <p class="card-text">Bring quality education to everyone.</p>
                                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                    </figcaption>
                </div>
            </figure>

            <figure class="test col-md-6 d-flex     align-items-stretch mt-4 mt-md-0">
                <div class="card1 " >
                    <figcaption>
                        <h5 class="card-title"><a href="">Our Promise</a></h5>
                        <p class="card-text">To stand by you through the entire process</p>
                        <div class="read-more"><a href="#"> Read More</a></div>
                    </figcaption>
                </div>
            </figure>
            <figure class="test col-md-6 d-flex align-items-stretch mt-4">
                <div class="card2" >
                    <figcaption>
                        <h5 class="card-title"><a href="">Our Vision</a></h5>
                        <p class="card-text">Make education available as long as you meet the institutions requirements</p>
                        <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                    </figcaption>
                </div>
            </figure>
            <figure class="test col-md-6 d-flex align-items-stretch mt-4">
                <div class="card3 " >
                    <figcaption>
                        <h5 class="card-title"><a href="">Our Care</a></h5>
                        <p class="card-text">Also offer Assistance even after relocation</p>
                        <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                    </figcaption>
                </div>
            </figure>
        </div>

      </div>
    </section>


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Your Future is One Click Away</h3>
          <a class="cta-btn" href="#contact">Contact Us</a>
        </div>

      </div>
    </section>
    <!-- End Cta Section -->
    
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>SERVICES</h2>
          <p class="ab2">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">ADMISSION</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">VISA ASSISTANCE</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">ACCOMODATION</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          

          
          </div>
        </div>

      </div>
    </section>
    <!-- End Services Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="join row mt-5">

          <div class=" join col-lg-4">
            <div class="info">
              <div class="address">
                <h4>Location:</h4>
                <p>Rumuodumaya Port Harcourt, Rivers State, Nigeria</p>
              </div>

              <div class="email">
                <h4>Email:</h4>
                <p>mail@schoolworld.com</p>
              </div>

              <div class="phone">
                <h4>Call:</h4>
                <p>+2348000000000</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="<?php echo "form submitted"?>" method="post" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>SchoolWorld.com</h3>
            
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

  

  
</BODY>
</HTML>
