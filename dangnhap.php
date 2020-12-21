<?php
session_start();
include("include/connect.php");
if (isset($_POST['login'])) {
	$username = $_POST['user'];
	$password = MD5($_POST['pass']);
	$sql_check = $o->query("select * from nguoidung where username = '$username'");
	$sql_check = $sql_check->fetchAll();
	$dem = count($sql_check);
	if ($dem == 0) {
		$_SESSION['thongbaolo'] = "Tài khoản không thồn tại";
		echo "
							<script language='javascript'>
								alert('Tài khoản không tồn tại');
								window.open('index.php','_self', 1);
							</script>
						";
	} else {
		$sql_check2 = $o->query("select * from nguoidung where username = '$username' and password = '$password'");
		$sql_check2 = $sql_check2->fetchAll();
		$dem2 = count($sql_check2);
		if ($dem2 == 0)
			echo "
							<script language='javascript'>
								alert('Mật khẩu đăng nhập không đúng');
								window.open('index.php','_self', 1);
							</script>
						";
		else {
			$row = $sql_check2[0];

			$_SESSION['username'] = $username;
			$_SESSION['phanquyen'] = $row['phanquyen'];
			$_SESSION['idnd'] = $row['idnd'];

			if ($_SESSION['phanquyen'] == 0) {

				echo "
							<script language='javascript'>
								alert('Đăng nhập thành công');
								window.open('admin/admin.php','_self', 1);
							</script>
						";
			} else {

				echo "
							<script language='javascript'>
								alert('Đăng nhập thành công');
								window.open('index.php','_self', 1);
							</script>
						";
			}
		}
	}
}