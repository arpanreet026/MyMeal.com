<?php include('partials/menu.php'); ?>


<div class="main-content">
    <div class="wrapper">
        <h1>Manage Users</h1>

        <br />

        <?php
        if (isset($_SESSION['add'])) {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }

        if (isset($_SESSION['delete'])) {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }

        if (isset($_SESSION['update'])) {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }

        if (isset($_SESSION['user-not-found'])) {
            echo $_SESSION['user-not-found'];
            unset($_SESSION['user-not-found']);
        }

        if (isset($_SESSION['pwd-not-match'])) {
            echo $_SESSION['pwd-not-match'];
            unset($_SESSION['pwd-not-match']);
        }

        if (isset($_SESSION['change-pwd'])) {
            echo $_SESSION['change-pwd'];
            unset($_SESSION['change-pwd']);
        }

        ?>
        <br><br><br>

        <br /><br /><br />

        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Phone</th>
            </tr>


            <?php
            $sql = "SELECT * FROM users";
            $res = mysqli_query($con, $sql);

            if ($res == TRUE) {
                $count = mysqli_num_rows($res);

                $sn = 1;

                if ($count > 0) {
                    while ($rows = mysqli_fetch_assoc($res)) {
                        $id = $rows['id'];
                        $name = $rows['name'];
                        $username = $rows['username'];
                        $phone = $rows['phone'];

                        ?>

                        <tr>
                            <td>
                                <?php echo $sn++; ?>.
                            </td>
                            <td>
                                <?php echo $name; ?>
                            </td>
                            <td>
                                <?php echo $username; ?>
                            </td>
                            <td>
                                <?php echo $phone; ?>
                            </td>
                        </tr>

                        <?php

                    }
                } else {
                    //We Do not Have Data in Database
                }
            }

            ?>

        </table>

    </div>
</div>

<?php include('partials/footer.php'); ?>