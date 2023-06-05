<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/animation.css">
  <link rel="stylesheet" href="./css/viewbox.css">
  <link rel="stylesheet" href="./css/justifiedGallery.min.css">
  <link rel="stylesheet" href="./css/isotope.css">
  <link rel="stylesheet" href="./css/bubble-particle.css">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/sub-layout.css">
  <link rel="stylesheet" href="./css/sub-greet.css">
  <link rel="stylesheet" href="./css/sub-biz-intro.css">
  <link rel="stylesheet" href="./css/sub-contact.css">
  <link rel="stylesheet" href="./css/faq.css">
  <link rel="stylesheet" href="./css/sub-gallery-viewbox.css">
  <link rel="stylesheet" href="./css/sub-gallery-masonry.css">
  <link rel="stylesheet" href="./css/sub-gallery-isotope.css">
  <link rel="stylesheet" href="./css/sub-gallery-justify.css">
  <link rel="stylesheet" href="./css/sub-location.css">
  <link rel="stylesheet" href="./css/sub-video.css">
  <link rel="stylesheet" href="./css/home-visual.css">
  <link rel="stylesheet" href="./css/home.css">
  <link rel="stylesheet" href="./css/preloader.css">
  <link rel="stylesheet" href="./css/popup.css">
  <script src="https://kit.fontawesome.com/7d1f9ca95d.js" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="./js/type_effect.js"></script>
  <script src="./js/tweenmax.js"></script>
  <script src="./js/morphsvg.js"></script>
  <script src="./js/jquery.viewbox.min.js"></script>
  <script src="./js/masonry-docs.min.js"></script>
  <script src="./js/jquery.justifiedGallery.min.js"></script>
  <script src="./js/jquery.isotope.js"></script>
  <script src="./js/responsive_carousel_horz.js"></script>
  <script src="./js/bubble.js"></script>
  <script src="./js/common.js"></script>
  <title>탬플릿사이트제작</title>
</head>
<body>
  <?php include "preloader.php"?>
  <script src="./js/header.js"></script>
  <header>
    <nav class="member">
      <ul>
        <li><a href="./index.php">처음으로</a></li>
        <li><a href="#">로그인</a></li>
        <li><a href="#">회원가입</a></li>
      </ul>
    </nav>
    <div class="inner">
      <h1>
        <a href="./index.php">
          <img src="./img/icon_logo/logo.gif" alt="icon_logo">
        </a>
        <span class="hidden">사이트로고</span>
      </h1>
      <button class="mbtn">
        <i class="fa-solid fa-bars-staggered open"></i>
        <i class="fa-solid fa-xmark close"></i>
      </button>
    </div><!-- inner -->
    <nav class="gnb gnb-lg"> 
      <!-- <?php include "img/svg/deco-horz.php" ?> -->
      <?php include "menu.php"?>
    </nav>
    <nav class="gnb gnb-sm"> 
      <div class="inner">
        <!-- <?php include "img/svg/svg-deco.php" ?> -->
        <?php include "menu.php" ?>
      </div>
    </nav>
  </header>
  <button class="top-btn">
    <i class="fa-solid fa-arrow-turn-up"></i>
  </button>