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

        <center>

        <form class="category" action="categories.php" method="post">
        <input type="text"  name="category" class="form-control" placeholder="دسته">
            
        <br>
        <button class="btn btn-danger" name="submit" type="submit">افزودن</button>

        </form>



                    <?php
                    $total = mysqli_query($connection, "SELECT * FROM categories");
                    $num = 0;
                    while ($row = mysqli_fetch_array($total)) :
                        $num++;
                    ?>

<div class="container mt-3">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <?php echo $row['cat_name']; ?>
           
                <td><a href="act/delete_cat.php?id=<?php echo $row['id']; ?>">حذف</a></td>
           
        </li>
    </div>
                    <?php
                    endwhile;
                    ?>


<?php
if (isset($_POST['submit'])) {
    $cat = $_POST['category'];
    if (empty($cat)) {
        $messageq = 'مقادیر را پر کنید';
    } else {
        $query = mysqli_query($connection, "INSERT INTO categories (cat_name) VALUES ('$cat')");
        if ($query) {
            $message = 'با موفقیت ثبت شد';
        } else {
            $messagese = 'ناموفق';
        }
    }
}

?>

<br>
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