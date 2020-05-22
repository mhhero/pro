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

    <?php

    $username = $_SESSION['admin_login'];

    $query = mysqli_query($connection, "SELECT * FROM writer WHERE `username` = '$username' LIMIT 1");

    $row = mysqli_fetch_array($query);

    ?>


    <div class="container">
      <h2>اطلاعات کاربری</h2>
      <br> <br>

      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th>نام کاربری</th>
            <th>آواتار</th>
            <th>نام</th>
            <th>نام خانوادگی</th>
            <th>ایمیل</th>
            <th>مقام</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $row['username']; ?></td>
            <td><img src="<?php echo $row['avatar']; ?>" alt="Girl in a jacket" width="60" height="40"></td>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['job']; ?></td>
          </tr>
        </tbody>
      </table>
    </div>

    <center>
    <a href="edit-profile.php"><button type="button" class="btn btn-success">ویرایش</button></a>

    </center>
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