<?php include "header.php" ?>
<script src="./js/sub.js"></script>
<section class="sub-visual">
  <script src="./js/store.js"></script>
  <script>
    subSliderArr.forEach(function(v,i){
      document.write(`
        <figure class="visual${i+1}"> 
          <img src="./img/sub/${v.path}" alt>
          <figcaption>
            <em>${v.title}</em>
            <p>${v.desc}</p>
          </figcaption>
        </figure>
      `)
    })//forEach
  </script>
  <button class="indicator prev">
    <i class="fa-solid fa-arrow-left"></i>
  </button>
  <button class="indicator next">
    <i class="fa-solid fa-arrow-right"></i>
  </button>
  <div class="controls">
    <button class="btn1 active" value="1"></button>
    <button class="btn2" value="2"></button>
    <button class="btn3" value="3"></button>
    <button class="btn4" value="4"></button>
  </div>
</section><!-- sub-visual -->
<div class="sub-center">
  <aside class="sidebar">
    <nav class="snb">
      <?php include "menu.php" ?>
    </nav>
    <a href="tel:000-000-0000" class="sub_customer">
      <img src="./img/sub/sub_customer.gif" alt="">
    </a>
    <!--sub_customer-->
  </aside>
  <main class="sub-content">
    <ul class="breadcrumb">
      <li><i class="fa-solid fa-house-chimney"></i></li>
      <li class="category-label"></li>
      <li class="menu-label"></li>
    </ul>