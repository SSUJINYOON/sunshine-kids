<?php include "sub-header.php" ?>
<script src="./js/store.js"></script>
<script src="./js/sub-gallery-viewbox.js"></script>
<h2 class="sub-title">갤러리(viewbox)</h2>
<section class="viewbox-gallery-section">
</section>
<script>
  $('.viewbox-gallery-section').prepend(`<ul></ul>`)
  galleryArr1.forEach(function(v){
    $('.viewbox-gallery-section ul').append(`
      <li>
        <figure>
          <a href="${v.path}">
            <img src="${v.path}" alt="">
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