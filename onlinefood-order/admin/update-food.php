<?php include('partials/menu.php'); ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql2 = "SELECT * FROM items WHERE id=$id";
    $res2 = mysqli_query($con, $sql2);

    $row2 = mysqli_fetch_assoc($res2);
    $code = $row2['item_code'];
    $title = $row2['Name'];
    $price = $row2['Price'];
    $current_image = $row2['image_name'];
    $active = $row2['Active'];

} else {
    header('location:' . SITEURL . 'admin/manage-food.php');
}
?>


<div class="main-content">
    <div class="wrapper">
        <h1>Update Food</h1>
        <br><br>

        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">

                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" value="<?php echo $title; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Price: </td>
                    <td>
                        <input type="number" name="price" value="<?php echo $price; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Current Image: </td>
                    <td>
                        <?php
                        if ($current_image == "") {
                            echo "<div class='error'>Image not Available.</div>";
                        } else {
                            ?>
                            <img src="<?php echo SITEURL; ?>./images/<?php echo $current_image; ?>" width="150px">
                            <?php
                        }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>Select New Image: </td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>
                <tr>
                    <td>Active: </td>
                    <td>
                        <input <?php if ($active == "Yes") {
                            echo "checked";
                        } ?> type="radio" name="active" value="Yes">
                        Yes
                        <input <?php if ($active == "No") {
                            echo "checked";
                        } ?> type="radio" name="active" value="No"> No
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">

                        <input type="submit" name="submit" value="Update Food" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

        <?php

        if (isset($_POST['submit'])) {

            $id = $_POST['id'];
            $title = $_POST['title'];
            $price = $_POST['price'];
            $current_image = $_POST['current_image'];
            $active = $_POST['active'];

            if (isset($_FILES['image']['name'])) {
                $image_name = $_FILES['image']['name'];

                if ($image_name != "") {

                    $ext = end(explode('.', $image_name));

                    $image_name = "Food-Name-" . rand(0000, 9999) . '.' . $ext;

                    $src_path = $_FILES['image']['tmp_name'];
                    $dest_path = "../images/food/" . $image_name;

                    $upload = move_uploaded_file($src_path, $dest_path);

                    if ($upload == false) {
                        $_SESSION['upload'] = "<div class='error'>Failed to Upload new Image.</div>";
                        header('location:' . SITEURL . 'admin/manage-food.php');
                        die();
                    }
                    if ($current_image != "") {
                        $remove_path = "../images/" . $current_image;

                        $remove = unlink($remove_path);


                        if ($remove == false) {
                            $_SESSION['remove-failed'] = "<div class='error'>Failed to remove current image!</div>";
                            header('location:' . SITEURL . 'admin/manage-food.php');
                            die();
                        }
                    }
                } else {
                    $image_name = $current_image;
                }
            } else {
                $image_name = $current_image;
            }


            $sql3 = "UPDATE items SET 
                    Name = '$title',
                    Price = $price,
                    image_name = '$image_name',
                    Active = '$active'
                    WHERE id=$id";

            $res3 = mysqli_query($con, $sql3);

            if ($res3 == true) {
                $_SESSION['update'] = "<div class='success'>Food Updated Successfully.</div>";
                header('location:' . SITEURL . 'admin/manage-food.php');
            } else {
                $_SESSION['update'] = "<div class='error'>Failed to Update Food.</div>";
                header('location:' . SITEURL . 'admin/manage-food.php');
            }


        }

        ?>

    </div>
</div>

<?php include('partials/footer.php'); ?>