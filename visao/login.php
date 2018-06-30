<!DOCTYPE html>
<html>

<style>

@font-face{
  font-family: "Moon 2.0 Regular";
  src: url(assets\fonts\Moon2.0-Regular.otf);
}

body{
  position: relative; 
  overflow-x: hidden;
  font-family: "Moon 2.0 Regular";
}

div{
  font-family: "Moon 2.0 Regular"; 
}

#backgroundLogin {
	background-color: #2392a5;
	background-position: top;
	background-attachment: fixed;
	background-size: cover;
	width: auto;
	min-height: 100vh;
	overflow-x: hidden;
	padding-bottom: 1em;
	padding-top: -2em;
}
#cardLogin {
	margin-top: 5%;
	margin-bottom: auto;
	min-width: 25%;
	max-width: 45%;
	height: 80%;
	background-color: #F5EFED;
	margin-right: auto;
	margin-left: auto;
	padding-top: 2%;
	padding-left: 0;
	padding-right: 0;
	border-radius: 4px;
}
.title {
	color: #0f0a0a;
	font-size: 3em;
	text-align: center;
}

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 0;
  border: none;
  margin: 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

#campos {
	margin-top: 5% !important;
	margin-bottom: 5%;
	width: auto;
  	line-height: 40px;
  	padding: 0px;
}

input:hover,
.btn:hover {
  opacity: 1;
}

/*
.signup:hover,
.forgot:hover {
	background-color: #ffffff!important;
}*/

/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {/*
  float: left;*/
  width: 100%;
  margin: auto;
  margin-top: 0px !important;
  padding: 0 50px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
	width: 100%;
	align-self: bottom;
  text-align: center;
  background-color: #0f0a0a;
  margin-top: 15%;
  margin-bottom: 0px;
  border-radius: 4px;
}
.logBotao{
	margin-left: 1em;
	margin-right: 1em;
	margin-top: 7%;
}
.logBotao a{
	color: white;
}
.logBotao a:hover{
	color: white;
	text-decoration: none;
}
/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */

@media screen and (max-width: 650px) {
	#cardLogin {
		margin-top: 3.5em;
		max-width: 80% !important;
		margin-right:auto;
		margin-left: auto;
	}
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>

<head>
	<title>Log-in</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets\images\favicon.png" sizes="16x16" type="image/jpeg">
	<link rel="stylesheet" type="text/css" href="login.css">
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