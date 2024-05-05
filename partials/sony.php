<?php include_once('header.php'); ?>

<main>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div>
                    <img class="console-img" src="../assets/sony/ps1.png" alt="ps1">
                </div>
                
                <div>
                    <a href="#">Playstation 1</a>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div>
                    <img class="console-img" src="../assets/sony/ps2.png" alt="ps2">
                </div>
                
                <div>
                    <a href="#">Playstation 2</a>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div>
                    <img class="console-img" src="../assets/sony/ps3.png" alt="ps3">
                </div>
                
                <div>
                    <a href="#">Playstation 3</a>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div>
                    <img class="console-img" src="../assets/sony/psp.png" alt="psp">
                </div>
                
                <div>
                    <a href="#">PSP</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div>
                    <img class="console-img" src="../assets/sony/psvita.png" alt="psvita">
                </div>
                
                <div>
                    <a href="#">PS Vita</a>
                </div>
            </div>
        </div>
        <!--<div class="swiper-pagination"></div>-->
    </div>

    <div class="cards">

    </div>
</main>

<aside>

</aside>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
</script>
<?php include_once('footer.php'); ?>