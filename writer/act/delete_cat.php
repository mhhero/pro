<?php
require_once '../../inc/config.php';
$id = $_GET['id'];
$query = mysqli_query($connection , "DELETE FROM categories WHERE id='$id'");

if($query){
    $message = 'با موفقیت حذف شد';
    header('Location: ../categories.php');
}else{
    $messages = 'حذف نشد دوباره سعی کنید';
}


?>


<?php
		      if(isset($message))
		      	print(  "<div class=\"alert alert-success\"><strong>خطا: </strong>$message</div>");     
              ?>  
              
              <?php
		      if(isset($messages))
		      	print(  "<div class=\"alert alert-danger\"><strong>خطا: </strong>$messages</div>");     
		      ?> 