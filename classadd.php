<?php
    $dbhost='localhost:3306';
    $dbuser='root';
    $dbpass='';
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass);
   if(! $conn )
    {
        die('连接失败: ' . mysqli_error($conn));
    }
    echo '连接成功';
    mysqli_query($conn,"set names utf8");
    $class_id=$_GET['class_id'];
    $class_name=$_GET['class_name'];
    $tea_id=$_GET['tea_id'];
    $sql="insert into news"."(class_id,class_name,tea_id)"."values"."('$class_id','$class_name','$tea_id')";
         mysqli_select_db($conn,'school');
    $retval=mysqli_query($conn,$sql);
    if(! $retval){
         die('插入数据失败'.mysqli_error($conn));
    }
    header('location:select.php');
    mysqli_free_result($retval);
    mysqli_close($conn);
?>