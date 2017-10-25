<?php
//--if03.php
	$name="admin";
if($name=="manager")
{
	echo"ยินดีต้อนรับคูณ <font color='red'>$name</font> คือผู้จัดการ<br>";
echo"<a href='http://www.arnut.com'> ไปเว็บ arnut.com</a>"; 
	
}elseif($name=="admin")
	
{
    echo"ยินดีต้อนรับคุณ <font color='green'>$name</font> คือผู้ดูแลระบบ";
}elseif($name=="webmaster")
{
    echo"ยินดีต้อนรับคุณคือ <font color='gold'>$name</font> ผู้ดูแลเว็บไซต์";
}else
{
	echo"ยินดีต้อนรับคุณคือ <font color='orran'>$name</font>  ผู้ใช้งาน";
}
?>