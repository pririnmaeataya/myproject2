<?php
//--switch01.php
$username="manager";
switch($username)	
{
case"manager":
     echo"ยินดีต้อนรับคูณ $username คือผู้จัดการ";
	break;

case"admin":
     echo"ยินดีต้อนรับคูณ $username คือผู้ดูแลระบบ";
	break;

case"webmaster":
     echo"ยินดีต้อนรับคูณ $usernameคือผู้ดูแลเว็บไซต์";
break;

default:
  echo"ยินดีต้อนรับคุณคือ  $username ผู้ใช้งาน";
}
?>