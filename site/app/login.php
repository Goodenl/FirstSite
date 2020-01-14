<?php

	$data = $_POST;
	if ( isset($data['do_login']) )
	{
	$errors = array();

		$user = R::findOne('users', 'login = ?', array($data['login'])); // find user
		if ( $user )
		{
			if( password_verify($data['password'], $user->password) )
			{
				//login
				header("Location: /");
				$_SESSION['logged_user'] = $user;
			}else
			{
				$errors[] = 'Пароль не правильно введён';
			}
		}else
		{
			$errors[] = 'Пользователь с таким логином не существует';
		}

		// errors check
		if( ! empty($errors) ) 
		{
			echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
		}else
		{
			exit();
			
		}
	}
?>

<form id = "login-form" action="/" method="POST">
	
	<p>
		<p><strong>Логин</strong>:</p>
		<input type="text" name="login" value="<?php echo @$data['login'];?>">
	</p>
	<p>
		<p><strong>Пароль</strong>:</p>
		<input type="password" name="password" >
	</p>
	<p>
		<button id="btn_log" type="sumbit" name="do_login">Войти</button>
	</p>

</form>