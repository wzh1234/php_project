
<?php

$serverName = "192.168.0.106";//服务器地址

$uid = "sa";//资料库用户名

$pwd = "123456789";//资料库密码
$db_name = "TT";//


$connectionInfo = array("UID"=>$uid,"PWD"=>$pwd,"Database"=>$db_name);

$conn = sqlsrv_connect($serverName,$connectionInfo);

if($conn == true)
{
    echo "connect success!<br />";
}
else
{
    echo "Connect error!<br />";
    die(print_r(sqlsrv_errors(),true));
}




?>