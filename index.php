<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>card</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Poppins:800" rel="stylesheet">

	<link rel="stylesheet" href="css/login.css">
	<script src="js/ajax.js"></script>
</head>
<body>
	<div id="yaz"></div>

	
	<button id="tikla" data-target="modal1" class="btn purple darken-2 text-light modal-trigger">sig in</button>
	<!--<button data-target="modal1" class="btn modal-trigger">Modal</button>-->

	<div id="modal1" class="login-block">

		<div id="loading" class="progress">
			<div class="indeterminate"></div>
		</div>
		<div id="close"><i class="material-icons">close</i></div>
		


		<div class="row loginUsers">
			<h1>Giriş</h1>
			<form class="col s12 form_login">
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="icon_prefix" type="text" data-error="" class="validate">
						<label for="icon_prefix">Kullanıcı Adı</label>

					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">lock
						</i>
						<input id="icon-password" type="password" class="validate">
						<label for="icon-password">Parola</label>
						<a class="helper-text right-align" href=""> Parolanızı mı unuttunuz?</a>
					</div>
					<div class="input-field col s12 loginButtonD">  
						<button class="btn waves-effect waves-light" type="button">Giriş</button>
					</div>

				</div>
			</form>
			<p class="form-brackets"><span>YA DA</span></p>

			<div class="col s12 form_other-login">
				<a class="form_login-google" href=""><i class="fab fa-google"></i></a>
				<a class="form_login-github isDisabled" href="" ><i class="fab fa-github"></i></a>

			</div>

			<p class="form-brackets"><span>kayıt olmadınız mı ? </span></p>
			<div class="col s12 form_other-signin">

				<a class="waves-effect waves-teal btn-flat login_signButton">Kayıt Ol</a>
			</div>


		</div>

		<div class="row signUsers">
			<!--	 <a class="waves-effect waves-teal btn-flat">Giriş Yap</a>  -->
			<h1>Kayıt Ol</h1>
			<form method="post" class="col s12 form_login  kayit" id="kayit">
				<div class="row">
					<div class="input-field inline col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="signUserName" type="text" class="validate" data-error=".errUsername"  name="username" >
						<label for="signUserName">Kullanıcı Adı</label>
						<div class="errUsername"></div>
					</div>
					<div class="input-field col inline s12">
						<i class="material-icons prefix">email</i>
						<input id="siginEposta" type="email" class="validate" data-error=".errEmail" name="email" >
						<label for="siginEposta">E-posta</label>
						<div class="errEmail"></div>
					</div>
					<div class="input-field inline col s12">
						<i class="material-icons prefix">lock
						</i>
						<input id="siginPassword" type="password" class="validate" data-error=".errPassword" name="password" >
						<label for="siginPassword">Parola</label>
						<div class="errPassword"></div>
					</div>
					<div  class="input-field inline col s12">
						<i class="material-icons prefix">lock
						</i>

						<input id="siginPasswordTick" type="password" class="validate" data-error=".errCpassword" name="cpassword" >
						<label for="siginPasswordTick">Parolayı Onayla</label>
						<div class="errCpassword"></div>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">date_range
						</i>
						<input id="siginDate"  type="text" class="datepicker" name="date" >
						<label for="siginDate">Doğum Tarihiniz</label>
					</div>
					<div class="input-field col s12 signButtonD">
						<a class="form_login-google" href=""><i class="fab fa-google"></i></a>
						<button class="btn waves-effect waves-light " type="submit" name="loginButton">Kayıt Ol</button>
						<a class="form_login-github isDisabled" href="" ><i class="fab fa-github"></i></a>

					</div>
</form>

				</div>
			
			<p class="users-loginButton"><span >Giriş Yap</span></p>
			<!--zaten bir hesabınız var mı? -->

		</div>


	</div>







	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script src="js/login.js"></script>


</body>
</html>