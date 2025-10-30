$(document).ready(function(){
  function headerHoverHandler() {
    if ($(window).width() >= 1240) {
      $('#header').on('mouseenter', function(){
        $(this).addClass('active');
      }).on('mouseleave', function(){
        $(this).removeClass('active');
      });
    } else {
      // 1240px 미만에서는 이벤트 제거
      $('#header').off('mouseenter mouseleave');
      $('#header').removeClass('active'); // 혹시 남아있는 클래스 제거
    }
  }

  // 초기 실행
  headerHoverHandler();

  // 창 크기 바뀔 때 즉시 반영
  $(window).on('resize', function(){
    headerHoverHandler();
  });
});