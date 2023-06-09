<?php include "header.php" ?>
<?php include "popup.php" ?>
<script src="./js/store.js"></script>
<script src="./js/home.js"></script>
<section class="home-visual">
  <div class="slider">
    <img class="slider-bg" src="./img/home/slider-bg.jpg" alt="slider-bg">
    <div class="bubble bubble-particle"></div>
    <div class="col_width"></div>
    <!--col_width -->

    <div class="indicator">
      <button></button>
      <button></button>
      <button></button>
      <button></button>
    </div>
    <!--indicator-->

    <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
    <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
  </div><!-- slider -->
</section><!-- visual -->
<script>
  $('.home-visual .col_width').append('<ul class="img_container"></ul>')
  subSliderArr.forEach(function(v, i) {
    $('.home-visual .col_width ul').append(`
      <li>
        <figure class="inner">
          <img src="./img/sub/${v.path}" alt="home-visual">
          <figcaption>
            <em>${v.title}</em>
            <p>${v.desc}</p>
          </figcaption>
        </figure>
      </li>
    `) //append
  }) //forEach
</script>

<main>
  <section class="home-section home-section1">
    <div class="main-title">
      <h2 id="type1"><span>quick menu</span></h2>
      <p>메뉴를 클릭하시면 해당 메뉴로 이동합니다</p>
    </div>
  </section><!-- section1 -->
  <script>
    $('.home-section1').append('<ul></ul>')
    window.quickMenuArr.forEach(function(v) {
      $('.home-section1 ul').append(`
        <li>
          <a href="${v.url}">
            <figure>
              <img src="${v.path}" alt="home-section1">
              <svg viewBox="0 0 300 300">
                <path pathLength="1" d="M224 21.8 76 21.8 2 150 76 278.2 224 278.2 298 150z"/>
              </svg>
            </figure>
            <h3>${v.title}</h3>
            <p>${v.desc}</p>
          </a>
        </li>
      `)
    }) //forEach
  </script>
  <section class="home-section home-section2">
    <div class="inner">
      <div class="main-title">
        <h2><span>c/s center</span></h2>
        <p>고객의 목소리에 귀 기울이는 선샤인이 되겠습니다</p>
      </div><!-- main-title -->
    </div><!-- inner -->
  </section>
  <script>
    $('.home-section2 .inner').append('<ul></ul>')
    window.csArr.forEach(function(v) {
      $('.home-section2 ul').append(`
        <li>
          <a href="${v.url}">
            
            <div class="textbox">
              ${v.icon}
              <h3>${v.title}</h3>
              <p>${v.desc}</p>
            </div>
          </a>
        </li>
      `) //append 
    }) //forEach
  </script>
  <section class="home-section home-section3">
    <div class="main-title">
      <h2><span>latest gallery</span></h2>
      <p>선샤인의 최신 소식을 알려드립니다</p>
    </div>
  </section>
  <script>
    $('.home-section3').append('<ul></ul>')
    galleryArr1.forEach(function(v,i){
      if(i>=6) return false
      $('.home-section3 ul').append(`
        <li>
          <a href="#">
            <div>
              <figure>
                <img src="${v.path}" alt="home-section3">
              </figure>
              <h3>${v.title}</h3>
            </div>
          </a>
        </li>
      `)//append  
    })//forEach
  </script>
</main>
<?php include "footer.php" ?>