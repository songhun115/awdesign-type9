<section class="room-preivew">
            <div class="box">
                <div class="title">
                    <h4 data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1000" data-aos-delay="100">머무르다</h4>
                    <p data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1000" data-aos-delay="100">유연만의 감성이 가득 담긴 객실을 확인해보세요.</p>
                </div>

                <div class="slide-box" data-aos="fade" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-delay="200">
                    <div class="main-rooms">
                        <div class="room room1 active">
                            <div class="thumbnail "><a href="sub2_room1.html"><img src="img/room/room-preview2.jpg" alt=""></a> </div>
                            <div class="disc">
                                <div class="text">
                                    <h5><b>梅 </b> 매</h5>
                                    <p>감성적인 인테리어가 돋보이는 <br class="pc-obj">
                                        객실 매梅 입니다. <br>
                                        객실의 우아한 매력에 취해보세요. </p>
                                </div>

                                <div class="detail">
                                    <a href="sub2_room1.html">자세히 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="room room2">
                            <div class="thumbnail "><a href="sub2_room1.html"><img src="img/room/room-preview3.jpg" alt=""></a> </div>
                           <div class="disc">
                                <div class="text">
                                    <h5><b>蘭 </b> 난</h5>
                                    <p>감성적인 인테리어가 돋보이는 <br class="pc-obj">
                                        객실 매梅 입니다. <br>
                                        객실의 우아한 매력에 취해보세요. </p>
                                </div>
                                <div class="detail">
                                    <a href="sub2_room1">자세히 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="room room3">
                            <div class="thumbnail "><a href="sub2_room1.html"><img src="img/room/room-preview4.jpg" alt=""></a> </div>
                            <div class="disc">
                                <div class="text">
                                    <h5><b>菊 </b> 국</h5>
                                    <p>감성적인 인테리어가 돋보이는 <br class="pc-obj">
                                        객실 매梅 입니다. <br>
                                        객실의 우아한 매력에 취해보세요. </p>
                                </div>

                                <div class="detail">
                                    <a href="sub2_room1">자세히 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="room room4">
                            <div class="thumbnail "><a href="sub2_room1.html"><img src="img/room/room-preview1.jpg" alt=""></a> </div>
                           <div class="disc">
                                <div class="text">
                                    <h5><b>竹 </b> 죽</h5>
                                    <p>감성적인 인테리어가 돋보이는 <br class="pc-obj">
                                        객실 매梅 입니다. <br>
                                        객실의 우아한 매력에 취해보세요. </p>
                                </div>

                                <div class="detail">
                                    <a href="sub2_room1">자세히 보기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper rooms-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="thumbnail"><img src="img/room/room-preview1.jpg" alt=""></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail"><img src="img/room/room-preview2.jpg" alt=""></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail"><img src="img/room/room-preview3.jpg" alt=""></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail"><img src="img/room/room-preview4.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <script>
document.addEventListener('DOMContentLoaded', function () {
  const swiper3 = new Swiper('.rooms-slide', {
    slidesPerView: 2.2,
    spaceBetween: 20,
    loop: true,
    observer: true,
    observeParents: true,
    breakpoints: {
      1240: { slidesPerView: 2.2, spaceBetween: 40 },
    },
    // ✅ 자동 슬라이드 추가
    autoplay: {
      delay: 3000,         // 3초마다 슬라이드
      disableOnInteraction: false, // 사용자가 조작해도 계속 자동재생 유지
    },
    speed: 800, // 전환 속도 (부드럽게)
  });

  const thumbs = document.querySelectorAll('.main-rooms .room');

  function syncThumb() {
    const i = swiper3.realIndex; // 0,1,2,3 ...
    thumbs.forEach(el => el.classList.remove('active'));
    if (thumbs[i]) thumbs[i].classList.add('active');
  }

  swiper3.on('init', syncThumb);
  swiper3.on('slideChange', syncThumb);
  syncThumb();

  thumbs.forEach((el, idx) => {
    el.addEventListener('click', () => {
      swiper3.slideToLoop(idx, 600);
    });
  });
});
</script>

                </div>
            </div>
        </section>