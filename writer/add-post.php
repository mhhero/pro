<?php
require_once '../inc/config.php';
?>
<?php
if (!isset($_SESSION['admin_login'])) {
    header('Location: login.php');
}
?>

<html lang="IR-fa" dir="rtl">


<?php include 'component/header.php'; ?>


<?php include 'component/sidebar.php'; ?>

<!-- Main content -->
<main class="main">


    <li class="breadcrumb-menu">
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">



        </div>
    </li>
    </ol>

    <div class="container-fluid">

        <!-- start component -->
        <div class="col-md-6">

            <form action="add-post.php" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="usr"><b>تیتر:</b></label>
                    <input name="title" type="text" class="form-control" id="usr">
                </div>
                <br>
                <div class="form-group">
                    <label for="sel1"><b>موضوعات:</b></label>
                    <select name="category" class="form-control" id="sel1">
                        <option><?php
                                $total = mysqli_query($connection, "SELECT * FROM categories");
                                while ($row = mysqli_fetch_array($total)) :
                                ?>
                        <option><?php echo $row['cat_name']; ?></option>
                    <?php
                                endwhile;
                    ?></option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="usr"><b>عکس:</b></label>
                    <input name="images" type="text" class="form-control" id="usr">
                </div>

                <div class="form-group">
                    <label for="comment"><b>متن اصلی:</b></label>
                    <textarea name="desc" class="form-control" rows="5" id="comment"></textarea>
                </div>

                <?php

                $username = $_SESSION['admin_login'];

                $query = mysqli_query($connection, "SELECT * FROM writer WHERE `username` = '$username' LIMIT 1");

                $row = mysqli_fetch_array($query);

                ?>


                <div class="form-group">
                    <input name="writername" type="text" class="form-control" value="<?php echo $row['firstname']; ?><?php echo $row['lastname']; ?>" id="usr" hidden>
                </div>

                <div class="form-group">
                    <input name="avatar" type="text" class="form-control" value="<?php echo $row['avatar']; ?>" id="usr" hidden>
                </div>

                <input class="btn btn-danger" type="submit" name="submit" value="Submit">

        </div>
        </form>


        <?php
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $category = $_POST['category'];
            $images = $_POST['images'];
            $desc = $_POST['desc'];
            $writername = $_POST['writername'];
            $avatar = $_POST['avatar'];
            if (empty($title)) {
                $messageq = 'مقادیر را پر کنید';
            } else {
                $query = mysqli_query($connection, "INSERT INTO posts (post_title, post_images, post_desc, post_category, writer_name, avatar_img) VALUES ('$title' , '$category' , '$images' , '$desc' , '$writername' , '$avatar')");
                if ($query) {
                    $message = 'با موفقیت ثبت شد';
                } else {
                    $messagese = 'ناموفق';
                }
            }
        }

        ?>






        <!-- end component -->

        <footer class="footer">
            <span class="text-left">

                power by m.h hero <i class="icon-fire"></i>
            </span>

        </footer>
        <!-- Bootstrap and necessary plugins -->
        <script src="js/libs/jquery.min.js"></script>
        <script src="js/libs/tether.min.js"></script>
        <script src="js/libs/bootstrap.min.js"></script>
        <script src="js/libs/pace.min.js"></script>

        <!-- Plugins and scripts required by all views -->
        <script src="js/libs/Chart.min.js"></script>

        <!-- CoreUI main scripts -->

        <script src="js/app.js"></script>

        <!-- Plugins and scripts required by this views -->
        <!-- Custom scripts required by this view -->
        <script src="js/views/main.js"></script>

        <!-- Grunt watch plugin -->
        <script src="js/livereload.js"></script>

        </body>


        <?php
		      if(isset($messageq))
		      	print(  "<div class=\"alert alert-danger\">$messageq</div>");     
              ?> 

<?php
		      if(isset($message))
		      	print(  "<div class=\"alert alert-success\">$message</div>");     
              ?> 
              <?php
		      if(isset($messagese))
		      	print(  "<div class=\"alert alert-danger\">$messagese</div>");     
              ?> 


</html>