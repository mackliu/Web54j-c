<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tickets</title>
  <link rel="stylesheet" href="bootstrap.css">
  <style>
    body{
      width:1920px;
      height:1080px;
    }
    header{
      height:100px;
    }
    main{
      height:830px;
    }
    footer{
      height:150px;
    }
  </style>
</head>
<body>
<header class="d-flex w-100 justify-content-around align-items-center bg-warning">
  <div class="w-25">
    <img src="./img/logo01.png" style="width:80px;height: 80px;">
  </div>
  <div class="w-25 d-flex">
    <a class="w-25 mx-1 btn btn-warning" href="index.html">Home</a>
    <a class="w-25 mx-1 btn btn-warning" href="news.html">News</a>
    <a class="w-25 mx-1 btn btn-warning" href="business.html">Business</a>
    <a class="w-25 mx-1 btn btn-warning" href="tickets.php">Tickets</a>
  </div>
</header>
<main class="container">
  <h1 class="text-center">Tickets</h1>
  <form action="tickets.php" method="post" class="w-50 my-4 mx-auto">
    <table class="w-100">
      <tr class="form-group">
        <td class=" p-3"><label for="first_name">First name</label></td>
        <td class=" p-3"><input class="form-control w-100" type="text" name="first_name" id="first_name"></td>
      </tr>
      <tr class="form-group">
        <td class=" p-3"><label for="last_name">Last name</label></td>
        <td class=" p-3"><input class="form-control w-100" type="text" name="last_name" id="last_name"></td>
      </tr>
      <tr class="form-group">
        <td class=" p-3"><label for="phone">Phone</label></td>
        <td class=" p-3"><input class="form-control w-100" type="text" name="phone" id="phone"></td>
      </tr>
      <tr class="form-group">
        <td class=" p-3"><label for="password">Password</label></td>
        <td class=" p-3"><input class="form-control w-100" type="password" name="password" id="password"></td>
      </tr>
      <tr class="form-group">
        <td class=" p-3"><label for="verification">Verification</label></td>
        <td class=" p-3 d-flex">
          <input class="form-control w-50" type="text" name="verification" id="verification">
          <div class="border rounded text-center w-50 ml-2 bg-info text-white" style="line-height:38px">
            <?php
                session_start();
                $_SESSION['ans']=rand(1000,9999);
                echo $_SESSION['ans'];
              ?>
          </div>
        </td>
      </tr>
    </table>
    <div class="text-center my-4">
      <input class="btn btn-primary" type="submit" value="Submit">
    </div>
  </form>


</main>
<footer class="d-flex flex-wrap justify-content-center align-items-center">
  <div class="w-100 text-center" style="height: 50px;">
    <img src="./img/icon_facebook.png" style="width:35px">
    <img src="./img/icon_instagram.png" style="width:35px">
    <img src="./img/icon_twtter.png" style="width:35px">
    <img src="./img/icon_youtube.png" style="width:35px">
  </div>
  <div class="w-100 text-center bg-info" style="height: 100px;line-height:100px">Copyright &copy; 2024 FIBEX All Rights Reserved</div>
</footer>
<script src="jquery.js"></script>
<script src="bootstrap.js"></script>
</body>
</html>