<?php include "sub-header.php" ?>
<h2 class="sub-title">갤러리 (masonry)</h2>
<script src="./js/store.js"></script>
<script src="./js/sub-masonry-gallery.js"></script>
<section class="masonry-gallery-section">
</section>
<script>
  $('.masonry-gallery-section').prepend(`<ul></ul>`)
    galleryArr1.forEach(function(v){
    $('.masonry-gallery-section ul').append(`
      <li>
        <figure>
          <a href="#">
            <div>
              <img src="${v.path2}" alt="">
            </div>
            <figcaption>
              <h3>${v.title}</h3>
              <p>${v.desc}</p>
            </figcaption>
          </a>
        </figure>
      </li>
    `)//append
  })//forEach
</script>
<?php include "sub-footer.php" ?>