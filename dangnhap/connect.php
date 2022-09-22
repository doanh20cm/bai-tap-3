<?php
$connect = mysqli_connect('localhost', 'root', '12345', 'data') or die ('Lỗi kết nối'); mysqli_set_charset($connect, "utf8");
mysqli_set_charset($connect, 'utf8');

if($connect === false){ 
die("ERROR: Could not connect. " . mysqli_connect_error()); 
}
else {
echo 'Kết nối DB thành công!';
}
?>