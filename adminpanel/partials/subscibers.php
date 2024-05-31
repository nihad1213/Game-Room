<?php include_once('../../config/connection.php');?>
<?php include_once('../../config/subs.funcs.php');?>
<?php include_once('header.php'); ?>
<?php 
    $object = new showSubs;
    $statement = $object->showSubs();
?>
<main>
    <?php include_once('side-bar.php');?>

    <div class="main-page">
        <div class="main-page-header">
            <h2>Subscibers</h2>
        </div>

        <div class="action">
            <a href="send-message.php">
                <button type="button" class="btn btn-success">Send Messages</button>
            </a>
        </div>

        <div class="board">
            <table>
                <tr>
                    <th>Subsciber ID</th>
                    <th>Subsciber Email</th>
                </tr>
                
                <tr>
                    <?php 
                        if($statement) {
                            while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <td><strong><?php echo $row['subscriberID']; ?></strong></td>
                    <td><?php echo $row['subscriberMail']; ?></td>
                </tr>
                    <?php 
                            }
                        }
                    ?>
            </table>
        </div>
    </div>

</main>
<?php include_once('footer.php');?>