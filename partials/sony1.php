<?php include_once('../config/connection.php');?>
<?php include_once('../config/ps.funcs.php')?>
<?php 
    $object = new showSystems;
    $statement = $object->showSystem();
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

        <?php 
        if ($statement) {
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <a href="#">
            <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="<?php echo "../assets/sony-image/ps1/".$row['systemImageName'] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['systemName']; ?></h5>
                    <h6 class="card-title">Condition: <?php echo $row['systemCondition']; ?></h6>
                    <p class="card-text"><?php echo $row['systemPrice'] . "$";?></p>
                    <button>Order Now</button>
                </div>
            </div>
        </a>
        <?php 
            }
        }
        ?>
        
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