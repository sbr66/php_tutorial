<?php

session_start();
//$userid = $_SESSION['userid']='boram';
unset($_SESSION['userid']);


?>

<p>넘어온 세션 : <?=$userid?> 입니다</p>