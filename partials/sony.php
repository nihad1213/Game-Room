<?php include_once('header.php'); ?>

<main>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div>
                    <a href="#">
                        <img class="console-img" src="../assets/sony/ps1.png" alt="ps1">
                        <div>
                            <p>Playstation 1</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div>
                    <a href="#">
                        <img class="console-img" src="../assets/sony/ps2.png" alt="ps1">
                        <div>
                            <p>Playstation 2</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div>
                    <a href="#">
                        <img class="console-img" src="../assets/sony/ps3.png" alt="ps1">
                        <div>
                            <p>Playstation 3</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div>
                    <a href="#">
                        <img class="console-img" src="../assets/sony/psp.png" alt="ps1">
                        <div>
                            <p>PSP</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="swiper-slide">
                <div>
                    <a href="#">
                        <img class="console-img" src="../assets/sony/psvita.png" alt="ps1">
                        <div>
                            <p>PS Vita</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--<div class="swiper-pagination"></div>-->
    </div>

    <div class="cards">

    </div>
</main>

<aside>
    <div class="filter">
        
    </div>
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