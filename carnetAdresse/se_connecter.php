<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div>
		<form id="login-form" name="login-form" action="login.php" method="post">
			
			<div class="header">
				<h3>Entrer Votre Login</h3>
			</div>
			
			<div class="content">
				<input  id="login_name" name="login" type="text" size="40px;"  placeholder="E-mail" />
				<div class="user-icon"></div>
				<input id="login_pass" name="password" type="password" size="40px;" placeholder="Mot de Passe" />
				<div class="pass-icon" ></div>		
			</div>
			
			<div class="footer">
				<input id="sub" type="submit" name="submit" value="Login" class="button" onclick="window.open.cancel;"/>
				<p id="login_error" style="color: red;">Veuillez remplir les champs</p>
			</div>
		</form>
	</div>
</body>
</html>