<?php
//--login.php
if($username=="admin");{
 echo"ยินดีต้อนรับคุณ".$P_POST['$username'],"คุณคือผู้ดูแลระบบ";
 echo "<br><a href='admin/index.php'>ลิงค์ที่ไปหน้า backend</a>";
 }
 elseif($username=="maetatya");{
   echo"ยินดีต้อนรับคุณ".$_post['$username'],"คุณคือสมาชิกชมรม </a>";
   echo "<br><a href='home/index.php'>ลิงค์ที่ไปหน้าfrontend</a>";
 }
 else{

   echo"ยินดีต้อนรับคุณ".$_post['$username'],"คุณคือผู้ใช้งานทั่วไป </a>";
   echo "<br><a href='../'>ลิงค์ที่ไปหน้า user(myproject)</a>";
   }
?>