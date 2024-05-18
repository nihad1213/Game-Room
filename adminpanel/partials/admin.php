<?php include_once('header.php');?>
<main>
    <?php include_once('side-bar.php');?>

    <div class="main-page">
        <div class="main-page-header">
            <h2>Admin</h2>
        </div>

        <div class="action">
            <a href="add-admin.php">
                <button type="button" class="btn btn-success">Add Admin</button>
            </a>
        </div>

        <div class="board">
            <table>
                <tr>
                    <th>Admin ID</th>
                    <th>Admin Username</th>
                    <th>Admin Email</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td><strong>1</strong></td>
                    <td>Nihad</td>
                    <td>nihad.nemetli@gmail.com</td>
                    <td>
                        <a href="#">
                            <button type="button" class="btn btn-danger">Delete Admin</button> 
                        </a>
                    </td>
                    
                    <td>
                        <a href="#">
                            <button type="button" class="btn btn-warning">Edit Admin</button>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    
</main>
<?php include_once('footer.php');?>