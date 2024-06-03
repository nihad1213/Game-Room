<?php include_once('../config/connection.php');?>
<?php include_once('../config/ps.funcs.php')?>
<?php 
    $object = new showSystems;
    $data = $object->showSystem(); // Fetch data from the method
    
    // Check if the array keys exist before accessing them
    $statement = isset($data["statement"]) ? $data["statement"] : null;
    $pages = isset($data["pages"]) ? $data["pages"] : null;
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
            <div class="card">
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

<div class="pagination-container">
<div class="page-info">
    <?php 
        if (isset($_GET['page-nr'])) {
            $page = $_GET['page-nr'];
        } else {
            $page = 1;
        }
    ?>
    <p>Showing <strong><?php echo $page ?></strong> of <strong><?php echo $pages ?></strong></p>
</div>

<div class="pagination">
    <a style="text-decoration: none; padding-right: 5px; padding-left: 5px;" href="?page-nr=1">First</a>

    <?php 
        if (isset($_GET['page-nr']) && $_GET['page-nr'] > 1) {
    ?>
        <a style="text-decoration: none; padding-right: 5px; padding-left: 5px;" href="?page-nr=<?php echo $_GET['page-nr'] - 1; ?>">Previous</a>
    <?php
        } else {
    ?>
        <a>Previous</a>
    <?php   
        }
    ?>

    <div class="page-numbers">
        <?php 
            for ($count = 1; $count <= $pages; $count++) {
        ?>
                <a style="text-decoration: none; padding-right: 5px; padding-left: 5px;" href="?page-nr=<?php echo $count?>"><?php echo $count; ?></a>
        <?php 
            }
        ?>
    </div>

    <?php 
        if (isset($_GET['page-nr']) && $_GET['page-nr'] >= 1 && $_GET['page-nr'] < $pages) {
    ?>
        <a style="text-decoration: none; padding-right: 5px; padding-left: 5px;" href="?page-nr=<?php echo $_GET['page-nr'] + 1; ?>">Next</a>
    <?php   
        } else {
    ?>
        <a>Next</a>
    <?php   
        }
    ?>

    <a  style="text-decoration: none; padding-right: 5px; padding-left: 5px;" href="?page-nr=<?php echo $pages; ?>">Last</a>
</div>
</div>
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
