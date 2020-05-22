<?php
require_once '../inc/config.php';
?>
<?php
$id = $_GET['id'];
$edit_query = mysqli_query($connection, "SELECT * FROM posts WHERE post_id='$id'");
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


    <?php

    $username = $_SESSION['admin_login'];

    $query = mysqli_query($connection, "SELECT * FROM writer WHERE `username` = '$username' LIMIT 1");

    $row = mysqli_fetch_array($query);

    ?>


<form action="edit_post.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label for="usr"><b>تیتر:</b></label>
      <input name="title" type="text" class="form-control" value="<?php echo $edit_row['post_title'];  ?>" id="usr">
    </div>
    <br>
    <div class="form-group">
      <label for="sel1"><b>موضوعات:</b></label>
      <select name="category" class="form-control" id="sel1">
        <?php
        $total = mysqli_query($connection, "SELECT * FROM categories");
        while ($row = mysqli_fetch_array($total)) :
        ?>
          <option><?php echo $row['cat_name']; ?></option>
        <?php
        endwhile;
        ?>
      </select>
    </div>

    <div class="form-group">
      <label for="usr"><b>عکس:</b></label>
      <input name="image" type="text" class="form-control" id="usr" value="<?php echo $edit_row['post_images']; ?>">
      <br>
      <img src="<?php echo $edit_row['post_images']; ?>" width="200" height="100" alt="" class="edit-post">
    </div>

    <div class="form-group">
      <label for="comment"><b>متن اصلی:</b></label>
      <textarea name="desc" class="form-control" rows="5" id="comment"><?php echo $edit_row['post_desc'];  ?></textarea>
    </div>


    <input class="btn btn-danger" type="submit" name="submit" value="Submit">



    <?php
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $image = $_POST['image'];    
    $category = $_POST['category'];
    $desc = $_POST['desc'];
 {$query = mysqli_query($connection , "UPDATE posts SET post_title='$title' , post_images='$image' , post_category='$category' , post_desc='$desc' WHERE post_id='$id'");
        if($query){
          echo 'good';
        }else{
            echo 'فزوده نشد';
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
    <script src="//localhost:35729/livereload.js"></script>

    </body>

</html>