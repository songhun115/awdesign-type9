<header id="header">
        <div class="header-wrap">
            <div class="logo">
                <a href="index.html"><img src="img/common/logo.png" alt=""></a>
            </div>
            <nav class="nav">
                <ul>
                    <li>
                        <a href="sub1_tour.html">풍경</a>
                        <ul class="sub-menu">
                            <li><a href="sub1_tour.html">Tour</a></li>
                            <li><a href="sub1_map.html">Location</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="sub2_room1.html">머무르다</a>
                    </li>
                    <li>
                        <a href="sub3_special.html">마련하다</a>
                    </li>
                    <li>
                        <a href="sub4_reser.html">예약안내</a>
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
        </div>
    </header>

    <div class="m-header">
        <div class="box">
            <nav class="m-nav">
                <ul>
                    <li class="">
                        <a href="#">풍경</a>
                        <ul class="sub-menu">
                            <li><a href="sub1_tour.html">Tour</a></li>
                            <li><a href="sub1_map.html">Location</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="sub2_room1.html">머무르다</a>
                    </li>
                    <li>
                        <a href="sub3_special.html">마련하다</a>
                    </li>
                    <li>
                        <a href="sub4_reser.html">예약안내</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <script>
        $(document).ready(function(){
        $('.m-menu').click(function(){
            $('.m-header').toggleClass('active');
        })
        $('.sub-menu').slideUp()
            $('.m-header .m-nav ul li').click(function(){
                $('.sub-menu').slideToggle()
        })
        })
        
    </script>