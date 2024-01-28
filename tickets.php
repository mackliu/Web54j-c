<?php
//建立pdo連線參數
$dsn="mysql:host=localhost;charset=utf8;dbname=db50";
//建立pdo 物件變數
$pdo=new PDO($dsn,'root','');
//啟用session
session_start();
//判斷表單是否送出
if(!empty($_POST)){

  //判斷驗證碼是否正確
  if($_POST['verification']==$_SESSION['ans']){

    //建立新增語法並代入表單內容
    $sql="insert into `tickets` (`first_name`,`last_name`,`phone`,`password`) 
          values('{$_POST['first_name']}','{$_POST['last_name']}','{$_POST['phone']}','{$_POST['password']}')";
    //執行寫入資料表動作
    $pdo->exec($sql);
    //建立成功時的提示字串
    $success='tickets order were successed!';
  }else{
    //建立失敗時的錯誤訊息
    $error="sorry ! the verification is wrong ,please refill again";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tickets</title>
  <!--在header區引入bootstrap.css-->  
  <link rel="stylesheet" href="bootstrap.css">
  <style>
    /*設定頁面整體大小為1920x1080*/    
    body{
      width:1920px;
      height:1080px;
    }
    /*設定header、main、footer的高度*/    
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
<!--設定header區的背景顏色為bg-warning、
    排列基礎為d-flex、寬度為w-100、
    橫向物件的間距安排為justify-content-around、
    垂直置中align-items-center-->  
<header class="d-flex w-100 justify-content-around align-items-center bg-warning">
  <!--放置logo的區塊-->
  <div class="w-25">
    <img src="./img/logo01.png" style="width:80px;height: 80px;">
  </div>
  <!--放置選單的區塊-->    
  <div class="w-25 d-flex">
    <a class="w-25 mx-1 btn btn-warning" href="index.html">Home</a>
    <a class="w-25 mx-1 btn btn-warning" href="news.html">News</a>
    <a class="w-25 mx-1 btn btn-warning" href="business.html">Business</a>
    <a class="w-25 mx-1 btn btn-warning" href="tickets.php">Tickets</a>
  </div>
</header>
<!--加入container讓內容放在畫面中間-->
<main class="container">
  <h1 class="text-center">Tickets</h1>
  <!--建立兩個區塊用來顯示訂購成功或失敗時的訊息-->
  <div class="text-center text-danger">
    <?=$error??'';?>
  </div>
  <div class="text-center text-success">
    <?=$success??'';?>
  </div>
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
                //使用session來紀錄亂數產生的驗證碼
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
<!--設定footer區的背景顏色為bg-info、
    排列基礎為d-flex、
    超過寬度時自動換行flex-wrap、
    橫向物件置中justify-content-center、
    垂直置中align-items-center-->
<footer class="d-flex flex-wrap justify-content-center align-items-center">
  <!--社群媒體圖示區-->    
  <div class="w-100 text-center" style="height: 50px;">
    <img src="./img/icon_facebook.png" style="width:35px">
    <img src="./img/icon_instagram.png" style="width:35px">
    <img src="./img/icon_twtter.png" style="width:35px">
    <img src="./img/icon_youtube.png" style="width:35px">
  </div>
  <!--版權資訊區-->    
  <div class="w-100 text-center bg-info" style="height: 100px;line-height:100px">Copyright &copy; 2024 FIBEX All Rights Reserved</div>
</footer>
<!--在body區最後引入jquery.js、bootstrap.js-->
<script src="jquery.js"></script>
<script src="bootstrap.js"></script>
</body>
</html>