<?php include "sub-header.php" ?>
<script src="./js/store.js"></script>
<script src="./js/faq.js"></script>
<h2 class="sub-title">질문답변</h2>
<section class="faq-section">
</section>
<script>
  $('.faq-section').prepend(`<ul></ul>`)
  faqArr.forEach(function(v){
    $('.faq-section ul').append(`
      <li>
        <button class="q">
          <i class="fa-regular fa-circle-question"></i> ${v.q}
        </button>
        <p class="a"><i class="fa-solid fa-square-pen"></i> ${v.a}</p>
      </li>
    `)
  })//forEach
</script>
<?php include "sub-footer.php" ?>