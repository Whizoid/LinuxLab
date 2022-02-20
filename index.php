<!DOCTYPE html>
<html lang="en">

<head>
<!-- Primary Meta Tags -->
<title>Cyber Month | Virtual Experience Program By UpgradeMore</title>
<meta name="title" content="Cyber Month | Virtual Experience Program By UpgradeMore">
<meta name="description" content="Take a Cyber Coaster Ride this February full of Sessions, Events, Labs, Mentorship, Networking, Virtual Certification Program & many more. Opportunity to Network and Hangout with other Cyber Freak individuals.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://labs.upgrademore.com/">
<meta property="og:title" content="Cyber Month | Virtual Experience Program By UpgradeMore">
<meta property="og:description" content="Take a Cyber Coaster Ride this February full of Sessions, Events, Labs, Mentorship, Networking, Virtual Certification Program & many more. Opportunity to Network and Hangout with other Cyber Freak individuals.">
<meta property="og:image" content="https://upgrademore.com/images/metathumb.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://labs.upgrademore.com/">
<meta property="twitter:title" content="Cyber Month | Virtual Experience Program By UpgradeMore">
<meta property="twitter:description" content="Take a Cyber Coaster Ride this February full of Sessions, Events, Labs, Mentorship, Networking, Virtual Certification Program & many more. Opportunity to Network and Hangout with other Cyber Freak individuals.">
<meta property="twitter:image" content="https://upgrademore.com/images/metathumb.png">


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <style>
    body {
      font-family: "Open Sans", sans-serif;
      color: #555555;
    }

    a {
      text-decoration: none;
      color: #9936f3;
    }

    a:hover {
      color: #9ed49a;
      text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Montserrat", sans-serif;
    }

    /*--------------------------------------------------------------
    # Back to top button
    --------------------------------------------------------------*/
    .back-to-top {
      position: fixed;
      visibility: hidden;
      opacity: 0;
      right: 15px;
      bottom: 15px;
      z-index: 996;
      background: #9936f3;
      width: 40px;
      height: 40px;
      border-radius: 4px;
      transition: all 0.4s;
    }

    .back-to-top i {
      font-size: 28px;
      color: #fff;
      line-height: 0;
    }

    .back-to-top:hover {
      background: #97d193;
      color: #fff;
    }

    .back-to-top.active {
      visibility: visible;
      opacity: 1;
    }

    /*--------------------------------------------------------------
    # Disable AOS delay on mobile
    --------------------------------------------------------------*/
    @media screen and (max-width: 768px) {
      [data-aos-delay] {
        transition-delay: 0 !important;
      }
    }

    /*--------------------------------------------------------------
    # Header
    --------------------------------------------------------------*/
    #header {
      height: 90px;
      transition: all 0.5s;
      z-index: 997;
      transition: all 0.5s;
      background: #fff;
      box-shadow: 0 4px 10px -3px rgba(191, 191, 191, 0.5);
    }

    #header .logo h1 {
      font-size: 28px;
      margin: 0;
      line-height: 1;
      font-weight: 400;
      letter-spacing: 3px;
      text-transform: uppercase;
    }

    #header .logo h1 a,
    #header .logo h1 a:hover {
      color: #fff;
      text-decoration: none;
    }

    #header .logo img {
      padding: 0;
      margin: 0;
      max-height: 40px;
    }

    @media (max-width: 992px) {
      #header {
        height: 70px;
      }
    }

    .scrolled-offset {
      margin-top: 90px;
    }

    @media (max-width: 992px) {
      .scrolled-offset {
        margin-top: 90px;
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

    .navbar a,
    .navbar a:focus {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 0 10px 30px;
      font-size: 15px;
      color: #151515;
      text-transform: uppercase;
      white-space: nowrap;
      transition: 0.3s;
    }

    .navbar a i,
    .navbar a:focus i {
      font-size: 12px;
      line-height: 0;
      margin-left: 5px;
    }

    .navbar a:hover,
    .navbar .active,
    .navbar .active:focus,
    .navbar li:hover>a {
      color: #9936f3;
    }

    .navbar .dropdown ul {
      display: block;
      position: absolute;
      left: 14px;
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
      font-size: 15px;
      text-transform: none;
      font-weight: 600;
    }

    .navbar .dropdown ul a i {
      font-size: 12px;
    }

    .navbar .dropdown ul a:hover,
    .navbar .dropdown ul .active:hover,
    .navbar .dropdown ul li:hover>a {
      color: #9936f3;
    }

    .navbar .dropdown:hover>ul {
      opacity: 1;
      top: 100%;
      visibility: visible;
    }

    .navbar .dropdown .dropdown ul {
      top: 0;
      left: calc(100% - 30px);
      visibility: hidden;
    }

    .navbar .dropdown .dropdown:hover>ul {
      opacity: 1;
      top: 0;
      left: 100%;
      visibility: visible;
    }

    @media (max-width: 1366px) {
      .navbar .dropdown .dropdown ul {
        left: -90%;
      }

      .navbar .dropdown .dropdown:hover>ul {
        left: -100%;
      }
    }

    /**
    * Mobile Navigation 
    */
    .mobile-nav-toggle {
      color: #151515;
      font-size: 28px;
      cursor: pointer;
      display: none;
      line-height: 0;
      transition: 0.5s;
    }

    .mobile-nav-toggle.bi-x {
      color: #fff;
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

    .navbar-mobile a,
    .navbar-mobile a:focus {
      padding: 10px 20px;
      font-size: 15px;
      color: #151515;
    }

    .navbar-mobile a:hover,
    .navbar-mobile .active,
    .navbar-mobile li:hover>a {
      color: #9936f3;
    }

    .navbar-mobile .getstarted,
    .navbar-mobile .getstarted:focus {
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

    .navbar-mobile .dropdown ul a:hover,
    .navbar-mobile .dropdown ul .active:hover,
    .navbar-mobile .dropdown ul li:hover>a {
      color: #9936f3;
    }

    .navbar-mobile .dropdown>.dropdown-active {
      display: block;
    }

    /*--------------------------------------------------------------
    # Hero Section
    --------------------------------------------------------------*/
    #hero {
      width: 100%;
      height: 100vh;
      background: url("../img/hero-bg.png");
      position: relative;
    }

    #hero .hero-container {
      position: absolute;
      bottom: 0;
      top: 0;
      left: 0;
      right: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
      padding: 0 15px;
    }

    #hero .hero-logo {
      margin-bottom: 30px;
    }

    #hero h1 {
      margin: 0 0 30px 0;
      font-size: 48px;
      font-weight: 500;
      line-height: 60px;
      color: #fff;
    }

    #hero h2 {
      color: #aeaeae;
      margin-bottom: 30px;
      font-size: 14px;
      font-weight: 400;
      text-transform: uppercase;
    }

    #hero .btn-get-started {
      font-family: "Montserrat", sans-serif;
      text-transform: uppercase;
      font-weight: 400;
      font-size: 16px;
      letter-spacing: 1px;
      display: inline-block;
      padding: 14px 30px;
      border-radius: 3px;
      margin: 10px;
      color: #fff;
      background: #9936f3;
    }

    #hero .btn-get-started:hover {
      transition: 0.5s;
      background: #fff;
      color: #9936f3;
    }

    @media (min-width: 1024px) {
      #hero {
        background-attachment: fixed;
      }
    }

    @media (max-width: 768px) {
      #hero h1 {
        font-size: 28px;
        line-height: 36px;
      }

      #hero h2 {
        line-height: 22px;
      }
    }

    /*--------------------------------------------------------------
    # Sections General
    --------------------------------------------------------------*/
    section {
      overflow: hidden;
    }

    .section-bg {
      background-color: whitesmoke;
    }

    .section-title {
      text-align: center;
      padding-bottom: 40px;
    }

    .section-title h2 {
      font-size: 32px;
      font-weight: bold;
      text-transform: uppercase;
      margin-bottom: 15px;
      padding-bottom: 0;
      color: #151515;
    }

    .section-title p {
      margin-bottom: 0;
      color: #aeaeae;
    }

    /*--------------------------------------------------------------
    # About Us
    --------------------------------------------------------------*/
    .about .image {
      padding: 20px;
      box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    }

    .about .content h3 {
      font-weight: 600;
      font-size: 26px;
    }

    .about .content ul {
      list-style: none;
      padding: 0;
    }

    .about .content ul li {
      padding-bottom: 10px;
      display: flex;
      align-items: flex-start;
    }

    .about .content ul i {
      font-size: 24px;
      padding: 2px 6px 0 0;
      color: #9936f3;
    }

    .about .content p:last-child {
      margin-bottom: 0;
    }

    /*--------------------------------------------------------------
    # Services
    --------------------------------------------------------------*/
    .services .icon-box h4 {
      font-size: 20px;
      font-weight: 700;
      margin: 5px 0 10px 60px;
    }

    .services .icon-box i {
      font-size: 48px;
      float: left;
      color: #9936f3;
    }

    .services .icon-box p {
      font-size: 15px;
      color: #959595;
      margin-left: 60px;
    }

    .services .image {
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;
      min-height: 400px;
    }

    /*--------------------------------------------------------------
    # Featured
    --------------------------------------------------------------*/
    .featured {
      padding: 40px 0 0 0;
      background: white;
    }

    .featured .nav-tabs {
      border: 0;
    }

    .featured .nav-link {
      border: 0;
      padding: 20px;
      color: #151515;
      transition: 0.3s;
    }

    .featured .nav-link h4 {
      font-size: 18px;
      font-weight: 600;
      transition: 0.3s;
    }

    .featured .nav-link:hover h4 {
      color: #9936f3;
    }

    .featured .nav-link p {
      font-size: 14px;
      margin-bottom: 0;
    }

    .featured .nav-link.active {
      box-shadow: 0px 0 25px rgba(0, 0, 0, 0.08);
    }

    .featured .nav-link.active h4 {
      color: #9936f3;
    }

    .featured .tab-pane.active {
      -webkit-animation: slide-down 0.5s ease-out;
      animation: slide-down 0.5s ease-out;
    }

    @-webkit-keyframes slide-down {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    @keyframes slide-down {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    /*--------------------------------------------------------------
    # Why Us
    --------------------------------------------------------------*/
    .why-us {
      background: whitesmoke;
      padding: 0;
    }

    .why-us .content {
      padding: 60px 100px 0 100px;
    }

    .why-us .content h3 {
      font-weight: 400;
      font-size: 34px;
    }

    .why-us .content h4 {
      font-size: 20px;
      font-weight: 700;
      margin-top: 5px;
    }

    .why-us .content p {
      font-size: 15px;
      color: #959595;
    }

    .why-us .video-box {
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      min-height: 400px;
      position: relative;
    }

    .why-us .accordion-list {
      padding: 0 100px 60px 100px;
    }

    .why-us .accordion-list ul {
      padding: 0;
      list-style: none;
    }

    .why-us .accordion-list li+li {
      margin-top: 15px;
    }

    .why-us .accordion-list li {
      padding: 20px;
      background: #fff;
      border-radius: 4px;
    }

    .why-us .accordion-list a {
      display: block;
      position: relative;
      font-family: "Poppins", sans-serif;
      font-size: 16px;
      line-height: 24px;
      font-weight: 500;
      padding-right: 30px;
      outline: none;
      cursor: pointer;
    }

    .why-us .accordion-list span {
      color: #9936f3;
      font-weight: 600;
      font-size: 18px;
      padding-right: 10px;
    }

    .why-us .accordion-list i {
      font-size: 24px;
      position: absolute;
      right: 0;
      top: 0;
    }

    .why-us .accordion-list p {
      margin-bottom: 0;
      padding: 10px 0 0 0;
    }

    .why-us .accordion-list .icon-show {
      display: none;
    }

    .why-us .accordion-list a.collapsed {
      color: #343a40;
    }

    .why-us .accordion-list a.collapsed:hover {
      color: #9936f3;
    }

    .why-us .accordion-list a.collapsed .icon-show {
      display: inline-block;
    }

    .why-us .accordion-list a.collapsed .icon-close {
      display: none;
    }

    .why-us .play-btn {
      width: 94px;
      height: 94px;
      background: radial-gradient(#9936f3 50%, rgba(124, 197, 118, 0.4) 52%);
      border-radius: 50%;
      display: block;
      position: absolute;
      left: calc(50% - 47px);
      top: calc(50% - 47px);
      overflow: hidden;
    }

    .why-us .play-btn::after {
      content: "";
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translateX(-40%) translateY(-50%);
      width: 0;
      height: 0;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent;
      border-left: 15px solid #fff;
      z-index: 100;
      transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }

    .why-us .play-btn::before {
      content: "";
      position: absolute;
      width: 120px;
      height: 120px;
      -webkit-animation-delay: 0s;
      animation-delay: 0s;
      -webkit-animation: pulsate-btn 2s;
      animation: pulsate-btn 2s;
      -webkit-animation-direction: forwards;
      animation-direction: forwards;
      -webkit-animation-iteration-count: infinite;
      animation-iteration-count: infinite;
      -webkit-animation-timing-function: steps;
      animation-timing-function: steps;
      opacity: 1;
      border-radius: 50%;
      border: 5px solid rgba(124, 197, 118, 0.7);
      top: -15%;
      left: -15%;
      background: rgba(198, 16, 0, 0);
    }

    .why-us .play-btn:hover::after {
      border-left: 15px solid #9936f3;
      transform: scale(20);
    }

    .why-us .play-btn:hover::before {
      content: "";
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translateX(-40%) translateY(-50%);
      width: 0;
      height: 0;
      border: none;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent;
      border-left: 15px solid #fff;
      z-index: 200;
      -webkit-animation: none;
      animation: none;
      border-radius: 0;
    }

    @media (max-width: 1024px) {

      .why-us .content,
      .why-us .accordion-list {
        padding-left: 0;
        padding-right: 0;
      }
    }

    @media (max-width: 992px) {
      .why-us .content {
        padding-top: 30px;
      }

      .why-us .accordion-list {
        padding-bottom: 30px;
      }
    }

    @-webkit-keyframes pulsate-btn {
      0% {
        transform: scale(0.6, 0.6);
        opacity: 1;
      }

      100% {
        transform: scale(1, 1);
        opacity: 0;
      }
    }

    @keyframes pulsate-btn {
      0% {
        transform: scale(0.6, 0.6);
        opacity: 1;
      }

      100% {
        transform: scale(1, 1);
        opacity: 0;
      }
    }

    /*--------------------------------------------------------------
    # Portfolio
    --------------------------------------------------------------*/
    .portfolio .portfolio-item {
      margin-bottom: 30px;
    }

    .portfolio #portfolio-flters {
      padding: 0;
      margin: 0 auto 25px auto;
      list-style: none;
      text-align: center;
    }

    .portfolio #portfolio-flters li {
      cursor: pointer;
      display: inline-block;
      padding: 10px 18px 12px 18px;
      font-size: 14px;
      font-weight: 400;
      line-height: 1;
      text-transform: uppercase;
      color: #555555;
      transition: all 0.3s ease-in-out;
      margin: 0 4px 10px 4px;
      background: whitesmoke;
      border-radius: 4px;
    }

    .portfolio #portfolio-flters li:hover,
    .portfolio #portfolio-flters li.filter-active {
      background: #9936f3;
      color: #fff;
    }

    .portfolio #portfolio-flters li:last-child {
      margin-right: 0;
    }

    .portfolio .portfolio-wrap {
      transition: 0.3s;
      position: relative;
      overflow: hidden;
      z-index: 1;
      background: rgba(0, 0, 0, 0.6);
    }

    .portfolio .portfolio-wrap::before {
      content: "";
      background: rgba(21, 21, 21, 0.6);
      position: absolute;
      left: 30px;
      right: 30px;
      top: 30px;
      bottom: 30px;
      transition: all ease-in-out 0.3s;
      z-index: 2;
      opacity: 0;
    }

    .portfolio .portfolio-wrap .portfolio-info {
      opacity: 0;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      text-align: center;
      z-index: 3;
      transition: all ease-in-out 0.3s;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .portfolio .portfolio-wrap .portfolio-info::before {
      display: block;
      content: "";
      width: 48px;
      height: 48px;
      position: absolute;
      top: 35px;
      left: 35px;
      border-top: 3px solid #fff;
      border-left: 3px solid #fff;
      transition: all 0.5s ease 0s;
      z-index: 9994;
    }

    .portfolio .portfolio-wrap .portfolio-info::after {
      display: block;
      content: "";
      width: 48px;
      height: 48px;
      position: absolute;
      bottom: 35px;
      right: 35px;
      border-bottom: 3px solid #fff;
      border-right: 3px solid #fff;
      transition: all 0.5s ease 0s;
      z-index: 9994;
    }

    .portfolio .portfolio-wrap .portfolio-info h4 {
      font-size: 20px;
      color: #fff;
      font-weight: 600;
    }

    .portfolio .portfolio-wrap .portfolio-info p {
      color: #ffffff;
      font-size: 14px;
      text-transform: uppercase;
      padding: 0;
      margin: 0;
    }

    .portfolio .portfolio-wrap .portfolio-links {
      text-align: center;
      z-index: 4;
    }

    .portfolio .portfolio-wrap .portfolio-links a {
      color: #fff;
      margin: 0 2px;
      font-size: 28px;
      display: inline-block;
      transition: 0.3s;
    }

    .portfolio .portfolio-wrap .portfolio-links a:hover {
      color: #9936f3;
    }

    .portfolio .portfolio-wrap:hover::before {
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      opacity: 1;
    }

    .portfolio .portfolio-wrap:hover .portfolio-info {
      opacity: 1;
    }

    .portfolio .portfolio-wrap:hover .portfolio-info::before {
      top: 15px;
      left: 15px;
    }

    .portfolio .portfolio-wrap:hover .portfolio-info::after {
      bottom: 15px;
      right: 15px;
    }

    /*--------------------------------------------------------------
    # Portfolio Details
    --------------------------------------------------------------*/
    .portfolio-details {
      padding-top: 40px;
    }

    .portfolio-details .portfolio-details-slider img {
      width: 100%;
    }

    .portfolio-details .portfolio-details-slider .swiper-pagination {
      margin-top: 20px;
      position: relative;
    }

    .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      background-color: #fff;
      opacity: 1;
      border: 1px solid #9936f3;
    }

    .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
      background-color: #9936f3;
    }

    .portfolio-details .portfolio-info {
      padding: 30px;
      box-shadow: 0px 0 30px rgba(21, 21, 21, 0.08);
    }

    .portfolio-details .portfolio-info h3 {
      font-size: 22px;
      font-weight: 700;
      margin-bottom: 20px;
      padding-bottom: 20px;
      border-bottom: 1px solid #eee;
    }

    .portfolio-details .portfolio-info ul {
      list-style: none;
      padding: 0;
      font-size: 15px;
    }

    .portfolio-details .portfolio-info ul li+li {
      margin-top: 10px;
    }

    .portfolio-details .portfolio-description {
      padding-top: 30px;
    }

    .portfolio-details .portfolio-description h2 {
      font-size: 26px;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .portfolio-details .portfolio-description p {
      padding: 0;
    }

    /*--------------------------------------------------------------
    # Testimonials
    --------------------------------------------------------------*/
    .testimonials {
      padding: 60px 0;
      background: url("../img/testimonials-bg.jpg") no-repeat;
      background-position: center center;
      background-size: cover;
      position: relative;
    }

    .testimonials::before {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.1);
    }

    .testimonials .quote-icon {
      text-align: center;
      margin-bottom: 30px;
    }

    .testimonials .quote-icon i {
      color: #9936f3;
      font-size: 24px;
      padding: 18px;
      border-radius: 50px;
      border: 2px solid #9936f3;
    }

    .testimonials .testimonials-carousel,
    .testimonials .testimonials-slider {
      overflow: hidden;
    }

    .testimonials .testimonial-item {
      text-align: center;
      color: #fff;
    }

    .testimonials .testimonial-item p {
      font-style: italic;
      margin: 0 auto 30px auto;
      font-size: 20px;
    }

    .testimonials .testimonial-item .testimonial-img {
      width: 100px;
      border-radius: 50%;
      border: 6px solid rgba(255, 255, 255, 0.15);
      margin: 0 auto;
    }

    .testimonials .testimonial-item h3 {
      font-size: 20px;
      font-weight: bold;
      margin: 10px 0 5px 0;
      color: #fff;
    }

    .testimonials .testimonial-item h4 {
      font-size: 14px;
      color: #ddd;
      margin: 0 0 15px 0;
    }

    .testimonials .swiper-pagination {
      margin-top: 20px;
      position: relative;
    }

    .testimonials .swiper-pagination .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      opacity: 1;
      background-color: rgba(255, 255, 255, 0.4);
    }

    .testimonials .swiper-pagination .swiper-pagination-bullet-active {
      background-color: #9936f3;
    }

    @media (min-width: 992px) {
      .testimonials .testimonial-item p {
        width: 80%;
      }
    }

    /*--------------------------------------------------------------
    # Clients
    --------------------------------------------------------------*/
    .clients {
      background: whitesmoke;
      padding: 15px 0;
      text-align: center;
    }

    .clients img {
      width: 50%;
      filter: grayscale(100);
      transition: all 0.4s ease-in-out;
      display: inline-block;
      padding: 15px 0;
    }

    .clients img:hover {
      filter: none;
      transform: scale(1.2);
    }

    @media (max-width: 768px) {
      .clients img {
        width: 40%;
      }
    }

    @media (max-width: 575px) {
      .clients img {
        width: 50%;
      }
    }

    /*--------------------------------------------------------------
    # Team
    --------------------------------------------------------------*/
    .team {
      background: #fff;
      padding: 60px 0;
    }

    .team .member {
      margin-bottom: 20px;
      overflow: hidden;
    }

    .team .member .member-img {
      position: relative;
      overflow: hidden;
      border-radius: 5px;
    }

    .team .member .social {
      position: absolute;
      left: 0;
      bottom: -40px;
      right: 0;
      height: 40px;
      opacity: 0;
      transition: bottom ease-in-out 0.4s;
      background: rgba(124, 197, 118, 0.8);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .team .member .social a {
      transition: color 0.3s;
      color: rgba(255, 255, 255, 0.7);
      margin: 0 10px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }

    .team .member .social a i {
      line-height: 0;
    }

    .team .member .social a:hover {
      color: #fff;
    }

    .team .member .social i {
      font-size: 18px;
      margin: 0 2px;
    }

    .team .member .member-info h4 {
      font-weight: 700;
      margin: 15px 0 5px 0;
      font-size: 18px;
    }

    .team .member .member-info span {
      display: block;
      font-size: 13px;
      text-transform: uppercase;
      font-weight: 400;
      margin-bottom: 15px;
      color: #9936f3;
    }

    .team .member .member-info p {
      font-style: italic;
      font-size: 14px;
      line-height: 26px;
      color: #888888;
    }

    .team .member:hover .social {
      bottom: 0;
      opacity: 1;
      transition: bottom ease-in-out 0.4s;
    }

    /*--------------------------------------------------------------
    # Pricing
    --------------------------------------------------------------*/
    .pricing .box {
      padding: 20px;
      background: #fff;
      text-align: center;
      border-radius: 8px;
      position: relative;
      overflow: hidden;
      border: 1px solid #fff;
    }

    .pricing .box h3 {
      font-weight: 400;
      padding: 15px;
      margin-top: 15px;
      font-size: 18px;
      font-weight: 600;
      color: #151515;
    }

    .pricing .box h4 {
      font-size: 42px;
      color: #151515;
      font-weight: 700;
      font-family: "Open Sans", sans-serif;
      margin-bottom: 20px;
    }

    .pricing .box h4 sup {
      font-size: 20px;
      top: -15px;
      left: -3px;
    }

    .pricing .box h4 span {
      color: #bababa;
      font-size: 16px;
      font-weight: 300;
    }

    .pricing .box ul {
      padding: 0;
      list-style: none;
      color: #151515;
      text-align: center;
      line-height: 20px;
      font-size: 14px;
    }

    .pricing .box ul li {
      padding-bottom: 16px;
    }

    .pricing .box ul i {
      color: #9936f3;
      font-size: 18px;
      padding-right: 4px;
    }

    .pricing .box ul .na {
      color: #ccc;
      text-decoration: line-through;
    }

    .pricing .box .btn-wrap {
      padding: 15px;
      text-align: center;
    }

    .pricing .box .btn-buy {
      display: inline-block;
      padding: 10px 40px 12px 40px;
      border-radius: 5px;
      border: 2px solid #9936f3;
      color: #9936f3;
      font-size: 14px;
      font-weight: 400;
      font-family: "Montserrat", sans-serif;
      font-weight: 600;
      transition: 0.3s;
    }

    .pricing .box .btn-buy:hover {
      background: #9936f3;
      color: #fff;
    }

    .pricing .recommended {
      border-color: #9936f3;
    }

    .pricing .recommended .btn-buy {
      background: #9936f3;
      color: #fff;
    }

    .pricing .recommended .btn-buy:hover {
      background: #61b959;
      border-color: #61b959;
    }

    .pricing .recommended-badge {
      position: absolute;
      top: 5px;
      left: 50%;
      transform: translateX(-50%);
      z-index: 1;
      font-size: 12px;
      padding: 4px 25px 6px 25px;
      background: #eaf6e9;
      color: #9936f3;
      border-radius: 50px;
      text-transform: uppercase;
      font-weight: 600;
    }

    /*--------------------------------------------------------------
    # Frequently Asked Questions
    --------------------------------------------------------------*/
    .faq .faq-list {
      padding: 0;
      list-style: none;
    }

    .faq .faq-list li {
      border-bottom: 1px solid #eee;
      margin-bottom: 20px;
      padding-bottom: 20px;
    }

    .faq .faq-list a {
      display: block;
      position: relative;
      font-family: #9936f3;
      font-size: 18px;
      line-height: 24px;
      font-weight: 400;
      padding-right: 25px;
      cursor: pointer;
    }

    .faq .faq-list i {
      font-size: 24px;
      position: absolute;
      right: 0;
      top: 0;
    }

    .faq .faq-list p {
      margin-bottom: 0;
      padding: 10px 0 0 0;
    }

    .faq .faq-list .icon-show {
      display: none;
    }

    .faq .faq-list a.collapsed {
      color: #343a40;
    }

    .faq .faq-list a.collapsed:hover {
      color: #9936f3;
    }

    .faq .faq-list a.collapsed .icon-show {
      display: inline-block;
    }

    .faq .faq-list a.collapsed .icon-close {
      display: none;
    }

    /*--------------------------------------------------------------
    # Contact
    --------------------------------------------------------------*/
    .contact .info {
      width: 100%;
      height: 100%;
      background: #fff;
      padding: 20px;
      border-radius: 5px;
    }

    .contact .info i {
      font-size: 20px;
      color: #9936f3;
      float: left;
      width: 44px;
      height: 44px;
      background: #eaf6e9;
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
      color: #151515;
    }

    .contact .info p {
      padding: 0 0 0 60px;
      margin-bottom: 0;
      font-size: 14px;
      color: #484848;
    }

    .contact .info .email,
    .contact .info .phone {
      margin-top: 40px;
    }

    .contact .info .email:hover i,
    .contact .info .address:hover i,
    .contact .info .phone:hover i {
      background: #9936f3;
      color: #fff;
    }

    .contact .php-email-form {
      width: 100%;
      background: #fff;
      padding: 20px;
      border-radius: 5px;
    }

    .contact .php-email-form .form-group {
      padding-bottom: 8px;
    }

    .contact .php-email-form .error-message {
      display: none;
      color: #fff;
      background: #ed3c0d;
      text-align: left;
      padding: 15px;
      font-weight: 600;
    }

    .contact .php-email-form .error-message br+br {
      margin-top: 25px;
    }

    .contact .php-email-form .sent-message {
      display: none;
      color: #fff;
      background: #18d26e;
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

    .contact .php-email-form input,
    .contact .php-email-form textarea {
      border-radius: 0;
      box-shadow: none;
      font-size: 14px;
    }

    .contact .php-email-form input {
      height: 44px;
    }

    .contact .php-email-form textarea {
      padding: 10px 12px;
    }

    .contact .php-email-form button[type=submit] {
      background: #9936f3;
      border: 0;
      padding: 10px 24px;
      color: #fff;
      transition: 0.4s;
      border-radius: 4px;
    }

    .contact .php-email-form button[type=submit]:hover {
      background: #61b959;
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
      padding: 40px 0;
    }

    .breadcrumbs h2 {
      font-size: 26px;
      font-weight: 300;
    }

    .breadcrumbs ol {
      display: flex;
      flex-wrap: wrap;
      list-style: none;
      padding: 0;
      margin: 0;
      font-size: 15px;
    }

    .breadcrumbs ol li+li {
      padding-left: 10px;
    }

    .breadcrumbs ol li+li::before {
      display: inline-block;
      padding-right: 10px;
      color: #2f2f2f;
      content: "/";
    }

    @media (max-width: 768px) {
      .breadcrumbs .d-flex {
        display: block !important;
      }

      .breadcrumbs ol {
        display: block;
      }

      .breadcrumbs ol li {
        display: inline-block;
      }
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
      background: rgba(0, 0, 0, 0.85);
      z-index: 1;
    }

    #footer .footer-top {
      position: relative;
      z-index: 2;
      text-align: center;
      padding: 80px 0;
    }

    #footer .footer-top .footer-logo img {
      height: 80px;
    }

    #footer .footer-top h3 {
      font-size: 36px;
      font-weight: 700;
      color: #fff;
      position: relative;
      font-family: "Poppins", sans-serif;
      padding: 30px 0 0 0;
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
      border-radius: 50px;
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
      background: #9936f3;
      color: #fff;
      transition: 0.3s;
      border-radius: 50px;
      box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    }

    #footer .footer-top .footer-newsletter form input[type=submit]:hover {
      background: #5ab652;
    }

    #footer .footer-top .social-links {
      margin-top: 30px;
    }

    #footer .footer-top .social-links a {
      font-size: 18px;
      display: inline-block;
      background: #9936f3;
      color: #fff;
      line-height: 1;
      padding: 8px 0;
      margin-right: 4px;
      border-radius: 50%;
      text-align: center;
      width: 36px;
      height: 36px;
      transition: 0.3s;
    }

    #footer .footer-top .social-links a:hover {
      background: #5ab652;
      color: #fff;
      text-decoration: none;
    }

    #footer .footer-bottom {
      border-top: 1px solid #222222;
      z-index: 2;
      position: relative;
      padding-top: 40px;
      padding-bottom: 40px;
    }

    #footer .copyright {
      text-align: center;
    }

    #footer .credits {
      text-align: center;
      font-size: 13px;
      padding-top: 5px;
    }
  </style>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-FB9KDHXS7J"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-FB9KDHXS7J');
    </script>

    <style>
        .custom {
            width: 100px !important;
        }
    </style>
<script async src='/cdn-cgi/bm/cv/669835187/api.js'></script></head>

<body style="background-color: #0d0d0d;">

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <img src="https://upgrademore.com/_next/static/images/logo-dark-2ff1f730c72954aa4b2e9ce841833720.png" alt="logo"
        style="/*! height: 60px; */max-width: 250px;padding-top: -3px;/*! margin-top: 10px; */margin-bottom: -20px;">
      <a href="index.html" class="hero-logo" data-aos="zoom-in"><img src="assets/img/hero-logo.png" alt=""></a>
      <h1 data-aos="zoom-in"><b>Welcome To Cyber Month<br>Virtual Experience Program!</b></h1>
      <h2 data-aos="fade-up">A month full of sessions, events, labs, mentorship, virtual certification program & many
        more.</h2>
      <a data-aos="fade-up" data-aos-delay="200" href="#online-practice-lab" class="btn-get-started scrollto"
        style="text-decoration: none;"><b>Get Started</b></a>
    </div>
  </section><!-- End Hero -->

  <section id="online-practice-lab">
    <div align="center" style="background-color: #000;">
      <h1 style="font-size: 35px;color: #fff;padding-top: 80px;padding-bottom: 30px;"><b>Online Practice Labs</b></h1>
      <div class="container" style="padding-bottom: 80px;">
        <div class="row">
          <div class="col-sm">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold" style="color: #fff;">Linux Lab</h6>
              </div>
              <div class="card-body" style="background-color: #131417;">
                Linux lab is a part of UpgradeMore cyber security virtual experience program where you can practice your
                linux commands & imporve them. In this lab you will have to solve few questions & according to your
                answers you will be certified. So, what are you waiting for? Start today & upgrade your linux skills.
              </div>
            </div>
            <button type="button" class="btn btn-primary"><a href="question-1.php"
                style="color: #fff; text-decoration: none;font-size: 20px;"><b>Start Now</b></a></button>
          </div>
          <div class="col-sm">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold">VulnApp</h6>
              </div>
              <div class="card-body" style="background-color: #131417;">
                VulnApp is a web application penetration testing environment. The main motive to provide this lab is
                that a student can learn, hack, or test their skills of penetration testing or secure code development.
                This web application or lab help security enthusiasts, developers, and students to discover and prevent
                web vulnerabilities.
              </div>
            </div>
            <button type="button" class="btn btn-primary"><a href=""
                style="color: #fff; text-decoration: none;font-size: 20px;"><b>Coming Soon</b></a></button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; All rights Reserved. Design by DevTeam UpgradeMore.</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<script type="text/javascript">(function(){window['__CF$cv$params']={r:'6daf71c22d406ed1',m:'fjCMpqnIlm9BXDGrHo1VFlDyMLv05n5NlNN8avAMCEQ-1644434315-0-AfwyhcyROzC7vlYzg85DycHXsStab/LHFlIYAl/u1vNcBb7fRgkSBdOOCcra2lu0TZZPhylQfNK0zztIwDFEGRyeym1x0cNs+bxaPoAL1vMR0acXu4FBGmyNwgEZ7UROZohkkJtbe98fKR6uxR3Lnwx1RRiHOeESE9kYHnEGr+C+ApFdV4GPNLEY6khAV4+V3g==',s:[0x9519b5a726,0xdd9e959426],}})();</script></body>

</html>