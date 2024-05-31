<?php include_once('../config/connection.php');?>
<?php 
    $object = new Database;
    $object->connect();
?>
<?php include_once('header.php'); ?>

<main>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div>
                    <a href="sony1.php">
                        <img class="console-img" src="../assets/sony/ps1.png" alt="ps1">
                        <div>
                            <p>Playstation 1 Systems</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div>
                    <a href="#">
                        <img class="console-img" src="../assets/sony/ps1-acces.jpg" alt="ps1">
                        <div>
                            <p>Playstation 1 Accessories</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div>
                    <a href="#">
                        <img class="console-img" src="../assets/items-images/tekken3.jpg" alt="ps1">
                        <div>
                            <p>Playstation 1 Video Games</p>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
        <!--<div class="swiper-pagination"></div>-->
    </div>

</main>

<aside>
    <?php include_once('filter.php'); ?>
    <div class="items col-10">
        <a href="#">
            <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="../assets/items-images/tekken3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Tekken 3</h5>
                    <p class="card-text">12$</p>
                    <button>Order Now</button>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="../assets/items-images/tekken3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Tekken 3</h5>
                    <p class="card-text">12$</p>
                    <button>Order Now</button>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="../assets/items-images/tekken3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Tekken 3</h5>
                    <p class="card-text">12$</p>
                    <button>Order Now</button>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="../assets/items-images/tekken3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Tekken 3</h5>
                    <p class="card-text">12$</p>
                    <button>Order Now</button>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="../assets/items-images/tekken3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Tekken 3</h5>
                    <p class="card-text">12$</p>
                    <button>Order Now</button>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="../assets/items-images/tekken3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Tekken 3</h5>
                    <p class="card-text">12$</p>
                    <button>Order Now</button>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="../assets/items-images/tekken3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Tekken 3</h5>
                    <p class="card-text">12$</p>
                    <button>Order Now</button>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="../assets/items-images/tekken3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Tekken 3</h5>
                    <p class="card-text">12$</p>
                    <button>Order Now</button>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="../assets/items-images/tekken3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Tekken 3</h5>
                    <p class="card-text">12$</p>
                    <button>Order Now</button>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="../assets/items-images/tekken3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Tekken 3</h5>
                    <p class="card-text">12$</p>
                    <button>Order Now</button>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="../assets/items-images/tekken3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Tekken 3</h5>
                    <p class="card-text">12$</p>
                    <button>Order Now</button>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="../assets/items-images/tekken3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Tekken 3</h5>
                    <p class="card-text">12$</p>
                    <button>Order Now</button>
                </div>
            </div>
        </a>
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