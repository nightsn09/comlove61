<?php
    session_start();
    include('server.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>

    <link rel="stylesheet" href="Styles.css">
<body>
    
    <div class="header">
        <h2>เข้าสู่ระบบ</h2>
    </div>
 
    <form action="index_db.php" method="post">

   <div class="image">
  <center>  <img src="img/com.png" alt="Avatar" class="avatar"> </center>
  </div>    

        
        <div class="input-group">
            <label for="user">ใส่รหัสนักศึกษา</label>
            <input type="text" name="Username">
        </div>
        <div class="input-group">
            <label for="password">ใส่เหมือนข้างบนอะ</label>
            <input type="password" name="Password" >
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class="btn">Login</button>
        </div>





    </form>

</body>
</html>