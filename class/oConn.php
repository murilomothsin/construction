<?php
$hostname_sai_principal = "localhost";
$database_sai_principal = "sysup_newsletter";
$username_sai_principal = "root";
$password_sai_principal = "123";

$sai_principal = mysql_connect($hostname_sai_principal, $username_sai_principal, $password_sai_principal) or trigger_error(scopi_mysql_error(),E_USER_ERROR);

mysql_select_db($database_sai_principal);


?>