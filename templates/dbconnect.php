<?php
//khởi tạo đối tượng mới
$mysqli = new mysqli("localhost", "root", "", "shop_car");
//thiết lập font chữ tiếng Việt
$mysqli->set_charset("utf8");
//hiển thị thông báo lỗi (nếu có)
if (mysqli_connect_errno()){
	echo "Không thể kết nối với database<br />";
	mysqli_connect_error();
}
?>