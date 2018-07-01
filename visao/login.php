<!DOCTYPE html>
<html>
<head>
	<title>Log-in</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets\images\favicon.png" sizes="16x16" type="image/jpeg">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<section id="backgroundLogin" class="container-fluid">
		<div class="row">
			<div id="cardLogin" class="col-12">
				<div class="col-12 title">
					Login
				</div>
				<div id="campos" class="container">
					<form class="container" action="../controle/fazLogin.php" method="post">
						<div class="row">
					  		<div class="form-group col-12">
					    		<label class="topicos" for="Emaillogin">Email:</label>
					    		<input required type="email" class="form-control" id="Emaillogin" name="Emaillogin" placeholder="nome@exemplo.com">
							</div>
							<div class="form-group col-12">
					    		<label class="topicos" for="Senhalogin">Senha:</label>
					    		<input required type="password" class="form-control" id="Senhalogin" name="Senhalogin" placeholder="Insira sua Senha aqui">
							</div>
							<button type="submit" class="btn btn-primary logBotao">Logar</button>
						</div>
					</form>
				</div>
				<div class="bottom-container col-12">
				  <div class="row">
				    <div id="signup" class="col-12">
				      <a href="#" style="color:white" class="btn bottomBtn col-12">Sign up</a>
						</div>
				  </div>
				</div>
			</div>
		</div>
	</section>