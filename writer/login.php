<?php

require_once '../inc/config.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    $statement = $myPDO->query("SELECT * FROM writers WHERE username = '$username' AND password='$password'");

    $user_record = $statement->fetchAll(\PDO::FETCH_ASSOC);

    if ($statement->rowCount() > 0) {
        session_start();
        $_SESSION['writer_id'] = $user_record[0]['id'];
        header('Location: index.php');
        exit();
    }
    else
        $message = 'نام کاربری و رمز عبور شما صحیح نیست';



 
}

   /*
    $query = mysqli_query($connection , "SELECT * FROM writer WHERE username = '$username' AND password='$password'");
    if(mysqli_num_rows($query)>0 ){
    $_SESSION['admin_login'] = $username;
    header('Location: index.php');
    die();
    }else{  

    $message = 'نام کاربری و رمز عبور شما صحیح نیست';
    }
     */


?>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        body {
            background: #fff;
        }

        .input-field input[type=date]:focus + label,
        .input-field input[type=text]:focus + label,
        .input-field input[type=email]:focus + label,
        .input-field input[type=password]:focus + label {
            color: #e91e63;
        }

        .input-field input[type=date]:focus,
        .input-field input[type=text]:focus,
        .input-field input[type=email]:focus,
        .input-field input[type=password]:focus {
            border-bottom: 2px solid #e91e63;
            box-shadow: none;
        }
    </style>
</head>

<body>
    <div class="section"></div>
    <main>
    <center>
      <img class="responsive-img" style="width: 250px;" src="http://s7.picofile.com/file/8392524742/29032020185109A.png" />
      <div class="section"></div>

      <h5 class="indigo-text">Please, login into your account</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" action="login.php" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='username' id='email' />
                <label for='email'>Enter your username</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
              </div>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='submit' class='col s12 btn btn-large waves-effect indigo'>Login</button>
              </div>
            </center>
            
		      <?php
		      if(isset($message))
		      	print(  "<div class=\"alert alert-danger\"><strong>خطا: </strong>$message</div>");     
              ?>            
            
            
          </form>
        </div>
      </div>
      

      
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>





    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>




