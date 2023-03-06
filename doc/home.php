<?php
include('server.php');
session_start();
if ($_SESSION['ID_C'] == "")
{
  echo "กรุณาล็อกอิน!";
  exit();
}

if ($_SESSION['status'] != "user")
{
  echo "หน้านี้สำหรับนักศึกษาเท่านั้น!";
  exit();
}

$ID = $_SESSION['ID_C'];

$sql = "SELECT * FROM info WHERE ID_C = '$ID' ";
$result1 = $conn->query($sql);
$show = $result1->fetch_array();
?>
<html><head><title>com edu 61</title></head>
<link rel="stylesheet" href="text.css">
<link rel="stylesheet" href="style.css">

<body>
<br>
<br>
<br>
<h1>
  <p style=" color:#ffb380;">สวัสดี <?php echo $show['N_name'];?> ขอบคุณที่เป็นเพื่อนกัน</p>
  <p style=" color:#ffb380;">ต่อไปอาจจะไม่เจอกันอีกเเล้ว ไม่ได้ทำอะไรหลายๆอย่างด้วยกันไม่ได้หัวเราะ </p>
    <p style=" color:#ffb380">มีความสุขด้วยกันอีกต่างคนต่างแยกกันไปตามฝันของตัวเองถึงจบแล้วแต่มิตรภาพยังอยู่</p>
  <p style=" color:#ffb380">จะจบกันแล้ว มีอะไรอยากบอกรีบๆบอกกันนะ ก่อนที่มันจะสายเกินไป</p>
  <H1 style="color:pink;">Congratulations</H1>
  <h2 style="color:#ff791f;">ยินดีด้วยนะ รักนะจุ๊บๆ</h2>
  
  

</h1>


<br>
<br>
<br>

<audio controls autoplay>
  <source src="music/boypeach.ogg" type="audio/ogg">
  <source src="music/boypeach.mp3" type="audio/mpeg">

</audio>


<br>
<br>
<br>
<video width="340" height="360" controls>
  <source src="vedio/boomcom.mp4" type="video/mp4">
  <source src="vedio/boomcom.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video

<!--Brian Tracy-->
</body>




</html>