<header id="header">
    <div class="header-wrap">
        <div class="logo">
            <a href="index.html"><img class="logo-white" src="img/common/logo.png" alt=""><img class="logo-black"
                    src="img/common/logo-black.png" alt=""></a>
        </div>
        <nav class="nav">
            <ul>
                <li>
                    <a href="sub1_tour.html">풍경</a>
                    <ul class="sub-menu">
                        <li><a href="sub1_view.html">외부</a></li>
                        <li><a href="sub1_tour.html">여행안내</a></li>
                        <li><a href="sub1_map.html">오시는길</a></li>
                    </ul>
                </li>
                <li>
                    <a href="sub2_room1.html">머무르다</a>
                    <ul class="sub-menu">
                        <li><a href="sub2_room1.html">매(<b>梅</b>)</a></li>
                        <li><a href="sub2_room1.html">난(<b>蘭</b>)</a></li>
                        <li><a href="sub2_room1.html">국(<b>菊</b>)</a></li>
                        <li><a href="sub2_room1.html">죽(<b>竹</b>)</a></li>
                    </ul>
                </li>
                <li>
                    <a href="sub3_special.html">마련하다</a>
                    <ul class="sub-menu">
                        <li><a href="sub3_special.html">오션뷰</a></li>
                        <li><a href="sub3_special.html">자쿠지</a></li>
                        <li><a href="sub3_special.html">바베큐</a></li>
                        <li><a href="sub3_special.html">불멍</a></li>
                        <li><a href="sub3_special.html">어메니티</a></li>
                    </ul>
                </li>
                <li>
                    <a href="sub4_reser.html">예약안내</a>
                    <ul class="sub-menu">
                        <li><a href="sub4_reser.html">예약안내</a></li>
                        <li><a href="sub4_reser.html">실시간예약</a></li>
                        <li><a href="sub4_reser.html">공지사항</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="m-menu">
            <div class="menu-box">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="sns-list">
            <div class="icon">
                <a href="#"><img src="img/common/menu-insta.svg" alt=""></a>
            </div>
            <div class="icon">
                <a href="#"><img src="img/common/menu-b.svg" alt=""></a>
            </div>
            <div class="icon">
                <a href="#"><img src="img/common/menu-clock.svg" alt=""></a>
            </div>
        </div>
    </div>
</header>

<div class="m-header">
    <div class="box">
        <nav class="m-nav">
            <ul>
                <li class="m-nav-item">
                    <a href="#">풍경</a>
                    <ul class="m-sub-menu">
                        <li><a href="sub1_view.html">View</a></li>
                        <li><a href="sub1_tour.html">Tour</a></li>
                        <li><a href="sub1_map.html">Location</a></li>

                    </ul>
                </li>
                <li class="m-nav-item">
                    <a href="sub2_room1.html">머무르다</a>
                    <ul class="m-sub-menu">
                        <li><a href="sub2_room1.html">매(<b>梅</b>)</a></li>
                        <li><a href="sub2_room1.html">난(<b>蘭</b>)</a></li>
                        <li><a href="sub2_room1.html">국(<b>菊</b>)</a></li>
                        <li><a href="sub2_room1.html">죽(<b>竹</b>)</a></li>
                    </ul>
                </li>
                <li class="m-nav-item">
                    <a href="sub3_special.html">마련하다</a>
                    <ul class="m-sub-menu">
                        <li><a href="sub3_special.html">오션뷰</a></li>
                        <li><a href="sub3_special.html">자쿠지</a></li>
                        <li><a href="sub3_special.html">바베큐</a></li>
                        <li><a href="sub3_special.html">불멍</a></li>
                        <li><a href="sub3_special.html">어메니티</a></li>
                    </ul>
                </li>
                <li class="m-nav-item">
                    <a href="sub4_reser.html">예약안내</a>
                    <ul class="m-sub-menu">
                        <li><a href="sub4_reser.html">예약안내</a></li>
                        <li><a href="sub4_reser.html">실시간예약</a></li>
                        <li><a href="sub4_reser.html">공지사항</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.m-menu').click(function () {
            $('.m-header').toggleClass('active');
        })
          $('.m-sub-menu').hide();

    // 메뉴 클릭 시 동작
    $('.m-nav-item > a').click(function(e) {
        e.preventDefault(); // 링크 이동 방지

        var $parent = $(this).parent('.m-nav-item');
        var $submenu = $parent.find('.m-sub-menu');

        // 이미 열려있으면 닫기
        if ($parent.hasClass('active')) {
            $parent.removeClass('active');
            $submenu.stop(true, true).slideUp(300);
        } else {
            // 다른 메뉴 닫기
            $('.m-nav-item').removeClass('active');
            $('.m-sub-menu').stop(true, true).slideUp(300);

            // 현재 메뉴 열기
            $parent.addClass('active');
            $submenu.stop(true, true).slideDown(300);
        }
    });
    })

</script>