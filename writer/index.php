<?php

session_start();

if (!isset($_SESSION['writer_id'])) {
  header('Location: login.php');
}


require_once '../inc/config.php';


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


                        <?php

                        $writer_id = $_SESSION['writer_id'];

                        $statement = $myPDO->query("SELECT * FROM writers WHERE `id` = '$writer_id' ");

                        $user_record = $statement->fetchAll(\PDO::FETCH_ASSOC);

                        $access_level  = $user_record[0]['access_level'];

                        switch ($access_level)
                        {
                            case 0 :
                                echo 'مدیر';
                                break;

                            case 1:
                                echo 'حامال';
                                break;
                            case 2:
                                echo 'فوق حامال';
                                break;
                        	default:
                        }
                        
                        ?>



                        <?php

                        $writer_id = $_SESSION['writer_id'];

                        $statement = $myPDO->query("SELECT `post_title` `post_image` FROM posts WHERE `writer_id` = '$writer_id' ");

                        $post_records = $statement->fetchAll(\PDO::FETCH_ASSOC);
                        
                        ?>

        <?php
        $statement = $myPDO->query("SELECT * FROM writers WHERE `id` = '$writer_id'");

        $user_record = $statement->fetchAll(\PDO::FETCH_ASSOC);  
        

        ?>





      <div class="card-group mb-4">
        <div class="card">
          <div class="card-body">
            <div class="h1 text-muted text-right mb-4">
              <br>
              <i class="icon-people"></i>
            </div>
            <div class="h4 mb-0"><?php $post_query = mysqli_query($connection, "SELECT count(*) FROM posts");
                                  $row_post = mysqli_fetch_array($post_query);
                                  $total_post = array_shift($row_post);
                                  echo $total_post;


                                  ?></div>
            <small class="text-muted text-uppercase font-weight-bold">تعداد تمام پست ها</small>
            <div class="progress progress-xs mt-3 mb-0">
              <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="h1 text-muted text-right mb-4">
              <br>
              <i class="icon-user-follow"></i>
            </div>
            <div class="h4 mb-0">



                <?php

                $writer_id = $_SESSION['writer_id'];

                $statement = $myPDO->query("SELECT Count(*) FROM posts WHERE `writer_id` = '$writer_id' ");

                echo $statement->rowCount();

                ?>



            </div>
            <small class="text-muted text-uppercase font-weight-bold">تعداد پست های شما</small>
            <div class="progress progress-xs mt-3 mb-0">
              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="h1 text-muted text-right mb-4">
              <br>
              <i class="icon-user"></i>
            </div>
            <div class="h4 mb-0">500</div>
            <small class="text-muted text-uppercase font-weight-bold">تعداد نظرات</small>
            <div class="progress progress-xs mt-3 mb-0">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="h1 text-muted text-right mb-4">
              <br>
              <i class="icon-screen-smartphone"></i>
            </div>
            <div class="h4 mb-0"><?php echo $row['job']; ?></div>
            <small class="text-muted text-uppercase font-weight-bold">مقام شما</small>
            <div class="progress progress-xs mt-3 mb-0">
              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="h1 text-muted text-right mb-4">
              <br>
              <i class="icon-speedometer"></i>
            </div>
            <div class="h4 mb-0">5:34:11</div>
            <small class="text-muted text-uppercase font-weight-bold">آخرین ورود به پنل</small>
            <div class="progress progress-xs mt-3 mb-0">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>

      <br>


      <div class="container mt-3">
        <?php
        $id = $PHP_SESSION['id'];
        $query = mysqli_query($connection, "SELECT * FROM `posts` WHERE `writer_name` = '$id'");
        $num = 0;
        while ($row = mysqli_fetch_array($query)) :
          $num++;
        ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <td>
              <?php
              $post = $row['post_title'];
              $post = substr($post, 0, 50);
              echo $post;


              ?>
              ...
            </td>
            <td><img src="<?php echo $row['post_images']; ?>" width="298" height="100" alt=""></td>
            <td><a href="act/delete_post.php?id=<?php echo $row['post_id'];  ?>">حذف</a></td>
            <td><a href="edit_post.php?id=<?php echo $row['post_id'];  ?>">ویرایش</a></td>
            <td><a href="../post-item.php?id=<?php echo $row['post_id']; ?>">نمایش</a></td>
          </li>
        <?php
        endwhile;
        ?>
      </div>


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