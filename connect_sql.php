
<?php
$filename="./log.log";
$serverName = "192.168.0.106";//服务器地址

$uid = "sa";//资料库用户名

$pwd = "123456789";//资料库密码
$db_name = "TT";//


$connectionInfo = array("UID"=>$uid,"PWD"=>$pwd,"Database"=>$db_name);

$conn = sqlsrv_connect($serverName,$connectionInfo);

if($conn == true)
{
    file_put_contents($filename, "connect success!\r\n", FILE_APPEND|LOCK_EX);
}
else
{
    file_put_contents($filename, "Connect error!\r\n", FILE_APPEND|LOCK_EX);
    die(print_r(sqlsrv_errors(),true));
}




?>