$(function () {
  $(document).on("click", ".on_click", function () {
    let idx = $(this).data('idx');
    let val = $(this).parents('tr').find('select').val();

    console.log(idx, val);

    if(val == " "){
      alert("게시판 아이디를 선택해주세요");
    }
    else{
      $.post('/action/menu_chk', {menu_idx: idx, board_idx : val}, function (data) {
        alert("등록이 됐습니다");
      })
    }
  });
});
