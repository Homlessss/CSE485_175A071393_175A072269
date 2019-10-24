<?php
$to = "hanoi.aptech2018@gmail.com";
$subject = "Send Email from Localhost 123";
$txt = "Hello Teacher!";
$headers = "From: hanoi.aptech2018@gmail.com" . "\r\n" .
"CC: dungkt@wru.vn";
if(mail($to,$subject,$txt,$headers))
{
  echo "Thanh cong 1111111";
}else{
  echo "Khong thanh cong";
}
?>
