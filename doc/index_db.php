<?php
	session_start();
    include('server.php'); 



    $Username=$_POST['Username'];
	$Password=$_POST['Password'];
	


	$sql = "SELECT * FROM info WHERE Username = '$Username' and Password = '$Password'";
	$result = $conn->query($sql);
	$select = $result->fetch_array();
	
	if(!$select)
	{
			echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง!";
			header('refresh:1; url=login.php');
        exit(0);
	}
	else
	{
			$_SESSION["ID_C"] = $select["ID_C"];
			$_SESSION["status"] = $select["status"];

			session_write_close();
			
			if($select["Status"] == "user")
			{
				header("location:home.php");
			}
			else
			{
				header("location:home.php");
			}
	}

   
