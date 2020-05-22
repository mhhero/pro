<?php
require_once '../inc/config.php';
?>
<?php
$username = $_SESSION['admin_login'];
$edit_query = mysqli_query($connection, "SELECT * FROM writer WHERE `username` = '$username' LIMIT 1");
$edit_row = mysqli_fetch_array($edit_query);
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
        <form action="edit-profile.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-75">
            <span class="btn btn-primary" class="edit-post">نام کاربری</span>
                <input class="form-control form-control-lg" type="text" name="username" placeholder="نام کاربری" value="<?php echo $edit_row['username'];  ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-75">
            <span class="btn btn-primary" class="edit-post">رمزعبور</span>
                <input class="form-control form-control-lg" type="text" name="password" placeholder="رمزعبور" value="<?php echo $edit_row['password'];  ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-75">
            <span class="btn btn-primary" class="edit-post">نام</span>
                <input class="form-control form-control-lg" type="text" name="firstname" placeholder="نام" value="<?php echo $edit_row['firstname'];  ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-75">
            <span class="btn btn-primary" class="edit-post">نام خاوندگی</span>
                <input class="form-control form-control-lg" type="text" name="lastname" placeholder="نام خاوندگی" value="<?php echo $edit_row['lastname'];  ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-75">
            <span class="btn btn-primary" class="edit-post">آدرس آواتار</span>
                <input class="form-control form-control-lg" type="text" name="avatar" placeholder="آدرس آواتار" value="<?php echo $edit_row['avatar'];  ?>">
            </div>
        </div>
<br>
        <div class="row">
                        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                    </div>

        <?php
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $avatar = $_POST['avatar'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            {
                $query = mysqli_query($connection, "UPDATE writer SET  password='$password' , username='$username' , avatar='$avatar' , firstname='$firstname' , lastname='$lastname' WHERE `username` = '$username' LIMIT 1");
                if ($query) {
                    $message = 'افزوده شد';
                    } else {
                        $messages = 'مشکل در برقراری با پایگاه داده';
                    }
            }
        }

        ?>

<br>

<?php
		      if(isset($messages))
		      	print(  "<div class=\"alert alert-danger\"><strong>خطا: </strong>$message</div>");     
              ?> 
              
              <?php
		      if(isset($message))
		      	print(  "<div class=\"alert alert-success\"><strong></strong>$message</div>");     
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
        <script src="//localhost:35729/livereload.js"></script>

        </body>

</html>