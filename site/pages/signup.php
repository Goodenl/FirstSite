<?php require_once "../includes/config.php"; include_once "../includes/db.php"; session_start();?>
<?php
	$data = $_POST;
	if (isset($data['do_signup']))
		{
			//errors check
			$errors = array();
			if ( trim($data['login']) == "")
			{
				$errors[] = 'Введите логин!';
			}
			if ( trim($data['email']) == "")
			{
				$errors[] = 'Введите E-mail!';
			}
			if ( ($data['password']) == "")
			{
				$errors[] = 'Введите пароль!';
			}
			if ( ($data['password_2']) != $data['password'])
			{
				$errors[] = 'Повторный пароль неверный!';
			}
			if ( R::count('users', "login = ?", array($data['login'])) > 0 )
			{
				$errors[] =	'Пользователь с таким логином уже есть.';
			}
			if ( R::count('users', "email = ?", array($data['email'])) > 0 )
			{
				$errors[] =	'Пользователь с таким Email уже есть.';
			}
			// registration
			if( empty($errors) )
			{
				$user = R::dispense('users');
				$user->login = $data['login'];
				$user->rating = 0;
				$user->email = $data['email'];
				$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
				R::store($user);
				echo '<div style="color:green;">Вы зарегистрировались, можете вернутся на <a href="/">главную</a></div><hr>';
			}else
			{
				echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
			}
		}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="/public/css/main/signup.css">

	<title>Регистрация</title>
</head>
<body style="background-color: black;">
<div class="sig-form">
<form action ="signup.php" method="POST">
	
	<p>
		<p><strong>Ваш логин</strong>:</p>
		<input type="text" name="login"value="<?php echo @$data['login'];?>">
	</p>
	<p>
		<p><strong>Ваш E-mail</strong>:</p>
		<input type="email" name="email" value="<?php echo @$data['email'];?>">
	</p>
	<p>
		<p><strong>Ваш пароль</strong>:</p>
		<input type="password" name="password" value="<?php echo @$data['password'];?>">
	</p>
	<p>
		<p><strong>Повторите пароль</strong>:</p>
		<input type="password" name="password_2" value="<?php echo @$data['password_2'];?>">
	</p>
	<p>
		<button type="sumbit" name="do_signup">Зарегистрироватся</button>
	</p>

</form>
</div>
</body>
</html>