<?php
session_start();
session_unset();
session_destroy();
SetCookie('idu',"");
SetCookie('acceso',"");
SetCookie('tipo',"");
$msg="Sesión finalizada";
print "<meta http-equiv='refresh' content='0;
url=index.php?msg=$msg'>";
?>
