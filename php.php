
<?php
$dbhost = 'localhost:3306';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = '';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('连接错误: ' . mysqli_error($conn));
}
echo '连接成功<br />';
$sql = 'CREATE DATABASE school';
$retval = mysqli_query($conn,$sql );
if(! $retval )
{
    die('创建数据库失败: ' . mysqli_error($conn));
}

    $sql="CREATE TABLE subject(".
         "subject_id INT UNSIGNED NOT NULL AUTO_INCREMENT,".
         "subject_name VARCHAR(80) NOT NULL,".
         "PRIMARY KEY (subject_id)) ENGINE=InnoDb DEFAULT CHARSET=utf8;";
         mysqli_select_db($conn,'school');
    $retval=mysqli_query($conn,$sql);

     $sql2="CREATE TABLE teacher(".
             "tea_id INT UNSIGNED NOT NULL AUTO_INCREMENT,".
             "tea_name VARCHAR(80) NOT NULL,".
             "class_id INT UNSIGNED NOT NULL,".
             "PRIMARY KEY (tea_id)) ENGINE=InnoDb DEFAULT CHARSET=utf8;";
             mysqli_select_db($conn,'school');
        $retval=mysqli_query($conn,$sql2);

     $sql3="CREATE TABLE class(".
                  "class_id INT UNSIGNED NOT NULL AUTO_INCREMENT,".
                  "class_name VARCHAR(80) NOT NULL,".
                  "tea_id INT  NOT NULL,".
                  "PRIMARY KEY (class_id)) ENGINE=InnoDb DEFAULT CHARSET=utf8;";
                  mysqli_select_db($conn,'school');
             $retval=mysqli_query($conn,$sql3);

     $sql4="CREATE TABLE student(".
                       "stu_id INT UNSIGNED NOT NULL,".
                       "stu_name VARCHAR(80) NOT NULL,".
                       "stu_age varchar(80)  NOT NULL,".
                       "stu_sex varchar(80)  NOT NULL,".
                       "stu_class_id INT  NOT NULL,".
                       "PRIMARY KEY (stu_id)) ENGINE=InnoDb DEFAULT CHARSET=utf8;";
                       mysqli_select_db($conn,'school');
                  $retval=mysqli_query($conn,$sql4);
     $sql5="CREATE TABLE score(".
                            "id INT UNSIGNED NOT NULL AUTO_INCREMENT,".
                            "stu_id INT NOT NULL,".
                            "stu_name varchar(20)  NOT NULL,".
                            "class_name varchar(20) NOT NULL,".
                            "class_id INT  NOT NULL,".
                            "score varchar(80)  NOT NULL,".
                            "PRIMARY KEY (id)) ENGINE=InnoDb DEFAULT CHARSET=utf8;";
                            mysqli_select_db($conn,'school');
                       $retval=mysqli_query($conn,$sql5);

    if(! $retval){
         die('创建表失败'.mysqli_error($conn));
    }
    echo "创建表成功";
// mysqli_free_result($retval);
mysqli_close($conn);
?>