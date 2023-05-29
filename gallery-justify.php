<?php include "sub-header.php" ?>
<h2 class="sub-title">갤러리 (justify)</h2>
<script src="./js/store.js"></script>
<script src="./js/sub-gallery-justify.js"></script>
<section class="jsutify-gallery-section">
</section>
<script>
  $('.jsutify-gallery-section').prepend(`<div class="jsutify-gallery"></div>`)
    galleryArr1.forEach(function(v){
    $('.jsutify-gallery-section .jsutify-gallery').append(`
      <a href="#">
        <img src="${v.path2}" alt="">
        <div>${v.title}</div>
      </a>
    `)//append
  })//forEach
</script>

<?php include "sub-footer.php" ?>