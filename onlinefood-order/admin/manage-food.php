<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Food Items</h1>

        <br /><br />

        <a href="<?php echo SITEURL; ?>admin/add-food.php" class="btn-primary">Add Food</a>

        <br /><br /><br />

        <?php
        if (isset($_SESSION['add'])) {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }

        if (isset($_SESSION['delete'])) {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }

        if (isset($_SESSION['upload'])) {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }

        if (isset($_SESSION['unauthorize'])) {
            echo $_SESSION['unauthorize'];
            unset($_SESSION['unauthorize']);
        }

        if (isset($_SESSION['update'])) {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }

        ?>

        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Title</th>
                <th>Item Code</th>
                <th>Price</th>
                <th>&nbsp; &nbsp;Image</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>

            <?php
            $sql = "SELECT * FROM items";

            $res = mysqli_query($con, $sql);

            $count = mysqli_num_rows($res);

            $sn = 1;

            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $code = $row['item_code'];
                    $title = $row['Name'];
                    $price = $row['Price'];
                    $image_name = $row['image_name'];
                    $active = $row['Active'];
                    ?>

                    <tr>
                        <td>
                            <?php echo $sn++; ?>.
                        </td>
                        <td>
                            <?php echo $title; ?>
                        </td>
                        <td>
                            <?php echo $code; ?>
                        </td>
                        <td>₹
                            <?php echo $price; ?>
                        </td>
                        <td>
                            <?php
                            if ($image_name == "") {
                                echo "<div class='error'>Image not Added.</div>";
                            } else {
                                ?>
                                <img src="<?php echo SITEURL; ?>images/<?php echo $image_name; ?>" width="100px">
                                <?php
                            }
                            ?>
                        </td>

                        <td>
                            <?php echo $active; ?>
                        </td>
                        <td>
                            <a href="<?php echo SITEURL; ?>admin/update-food.php?id=<?php echo $id; ?>"
                                class="btn-secondary">Update Food</a>
                            <a href="<?php echo SITEURL; ?>admin/delete-food.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>"
                                class="btn-danger">Delete Food</a>
                        </td>
                    </tr>

                    <?php
                }
            } else {
                //Food not Added in Database
                echo "<tr> <td colspan='7' class='error'> Food not Added Yet. </td> </tr>";
            }

            ?>


        </table>
    </div>

</div>

<?php include('partials/footer.php'); ?>