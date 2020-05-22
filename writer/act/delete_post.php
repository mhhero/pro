<?php
require_once '../../inc/config.php';
$id = $_GET['id'];
$query = mysqli_query($connection, "DELETE FROM posts WHERE post_id='$id'");

if ($query) {
    $message = 'با موفقیت حذف شد';
    header('Location: ../index.php');
} else {
    header('Location: ../index.php');
    $messages = 'حذف نشد دوباره سعی کنید';
}


?>


<?php
if (isset($message))
    print("<div class=\"alert alert-success\"><strong>خطا: </strong>$message</div>");
?>  
              
              <?php
                if (isset($messages))
                    print("<div class=\"alert alert-danger\"><strong>خطا: </strong>$messages</div>");
                ?> 