<?php
header("Content-type:text/html; charset=utf8");
include 'connect_sql.php';

$sql=$_GET['SQL'];
//用户ID  密码  分组  启用  用户名称  关联设备 
file_put_contents("./Result1.txt",222);
//$sql = "select ID,用户ID,分组,启用,关联设备 from TT003_设备数据采集管理_用户信息 where 密码='123456' and 用户名称='test2'";
$sql=(iconv('utf-8','GBK',$sql));

//执行sql语句
$stmt = sqlsrv_query($conn, $sql, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET));

//{"ID":1,"NAME":null,"SCORE":33}
if($stmt == false)
{
    echo"Error in executin query.";
    die(print_r(sqlsrv_errors(),true));
}
else
{
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) )
	{
		echo "{";
		foreach ($row as $key => $value)
		{
			echo '"' . (iconv('GBK','utf-8',$key)) . '"' . ":" . '"' . (iconv('GBK','utf-8',$value)). '"'.',';
		}
		echo "}$#";
	}
}
sqlsrv_free_stmt( $stmt);
?>