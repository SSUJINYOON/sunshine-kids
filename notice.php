<?php include "sub-header.php" ?>
<script src="./js/store.js"></script>
<h2 class="sub-title">공지사항</h2>

<section class="notice-section">
  <form action="" class="serch-form">
    <select>
      <option label="제목"></option>
      <option label="내용"></option>
      <option label="작성자"></option>
    </select>
    <input type="text">
    <button class="btn-style1"><i class="fa-solid fa-magnifying-glass"></i> 검색</button>
  </form>
</section>
<script>
  $('.notice-section').prepend(`
    <table class="board">
      <thead>
        <tr>
          <th scope="col">번호</th>
          <th scope="col">제목</th>
          <th scope="col">작성자</th>
          <th scope="col">작성일자</th>
          <th scope="col">조회수</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  `)//append

  noticeArrCopy = [...noticeArr]
  noticeArrCopy.reverse().forEach(function(v){
    $('.notice-section .board tbody').append(`
      <tr>
        <td>${v.no}</td>
        <td><a href="#">${v.title}</a></td>
        <td>${v.date}</td>
        <td>${v.auth}</td>
        <td>${v.read}</td>
      </tr>
    `)//append
  })//forEach 
</script>


<?php include "sub-footer.php" ?>