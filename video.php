<?php include "sub-header.php" ?>
<script src="./js/store.js"></script>
<script src="./js/sub-video.js"></script>
<h2 class="sub-title">홍보비디오</h2>
<section class="video-section">
  <div class="video-container">
    <iframe src="https://www.youtube.com/embed/sklF74OW3eI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</section>

<script>
  $('.video-section').append('<ul></ul>')
  videoArr.forEach(function(v){
    $('.video-section ul').append(`
      <li>
        <button value="${v}">
          <img src="https://img.youtube.com/vi/${v}/mqdefault.jpg">
        </button>
      </li>
    `)//append
  })//forEach    


</script>
<?php include "sub-footer.php" ?>