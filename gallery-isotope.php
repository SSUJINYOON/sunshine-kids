<?php include "sub-header.php" ?>
<h2 class="sub-title">갤러리 (isotope)</h2>
<script src="./js/store.js"></script>
<script src="./js/sub-gallery-isotope.js"></script>
<section class="isotope-gallery-section">
  <div class="btn-grp">
    <button value="*" class="active">all</button>
    <button value=".category1">category1</button>
    <button value=".category2">category2</button>
    <button value=".category3">category3</button>
  </div> 
</section>
<script>
  $('.isotope-gallery-section').append(`<ul></ul>`)
    galleryArr1.forEach(function(v){
    $('.isotope-gallery-section ul').append(`
      <li class="${v.class}"> 
        <a href="#">
          <h3>${v.title}</h3>
          <figure>
            <img src="${v.path}" alt="isotope-gallery-section">
          </figure>
          <p>${v.desc}</p>
        </a>
      </li>
    `)//append
  })//forEach
</script>
<?php include "sub-footer.php" ?>