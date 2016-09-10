<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	 
	 <?php
	    echo"现在时间为：".date("Y-m-d H:i:s");
        //phpinfo();
        $conn = mysql_connect("localhost","root","root");
        if($conn){
        	echo"连接数据库成功";
        }else{
        	echo"连接数据库不成功";
        }
	?>
</body>
</html>