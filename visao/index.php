<?php
header('Content-Type: text/html; charset=UTF-8');

function __autoload($class_name){
    require_once '../modelo/'.$class_name.'.php';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Posse Trainees 2018/1</title>
	<link rel="icon" href="assets/images/favicon.png" sizes="16x16" type="image/jpeg">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/ProjCSS.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!--NavBar-->
<div>
	<nav id="navbar" class="navbar navbar-expand-md fixed-top">
		<a class="" href="#home">
			<img src="assets/images/icon.png" class="comp-icon">
		</a>
		<button class="navbar-toggler navbar-toggler-right navbar-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="nav nav-pills navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#sobre">Sobre</a>
				</li>	
				<li class="nav-item">
					<a class="nav-link" href="#palestrantes">Palestrantes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#organizadores">Organizadores</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#localizacao">Localização</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#cadastro">Cadastro</a>
				</li>
			</ul>
			<button type="submit" class="d-lg-none d-md-block btn btn-primary mobileButton"><a href="file:///C:/Users/Edson/Desktop/login.html"><a>Log-in</a></button>
		</div>
		<div class="navLog col-xl-6 col-md-6">
			<form id="loginho" action="../controle/fazLogin.php" method="post">
				<div class="row">
					<div class="navText">Faça seu Log-in</div>
	  				<div class="form-group col">
							<input required type="email" class="form-control logBars" placeholder="Email" id="Emaillogin" name="Emaillogin">
					</div>
					<div class="form-group col">
	    				<input required type="password" class="form-control logBars" placeholder="Senha" id="Senhalogin" name="Senhalogin">
					</div>
					<div>
						<button type="submit" class="btn btn-primary logBars">Tentar Entrar</button>
					</div>
				</div>
			</form>
		</div>
	</nav>

<div data-spy="scroll" data-target="#navbar" data-offset="0"></div>

<!--Home-->
<section id="home">
<div id="demo" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
		<li data-target="#demo" data-slide-to="1"></li>
		<li data-target="#demo" data-slide-to="2"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="assets/images/Imagem1.png" class="imagem-slide" alt="Trainees" width="1100" height="500">
			<div class="carousel-caption1">
				
				<p class="slide-text">Assembéia de Posse Trainees 2018/1</p>
			</div>   
		</div>
		<div class="carousel-item">
			<img src="assets/images/Imagem2.png" class="imagem-slide" alt="JavaScript" width="1100" height="500">
			<div class="carousel-caption1">
				<p class="slide-text">Venha prestigiar de perto</p>
			</div>   
		</div>
		<div class="carousel-item">
			<img src="assets/images/Imagem3.png" class="imagem-slide" alt="DCC" width="1100" height="500">
			<div class="carousel-caption1">
				<p class="slide-text">A efetivação dos Trainees 2018/1!</p>
			</div>   
		</div>
	</div>
	<a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
</div>
</section>

<!--Sobre-->
<section id="sobre">
	<p class="titulo-sobre">Sobre</p>
	<p class="texto-sobre container-fluid">A <a href="http://compjunior.com.br" target="_blank">CompJúnior</a> está encerrando mais uma vez seu Processo Seletivo. Dessa vez, quase 40 trainees passaram por essa seleção e agora é a hora do resultado final! Convidamos a todos para comparecer no Anfiteatro do Departamento de Ciência da Computação (ver <a href="#localizacao">Localização</a> para mais informações) no dia 07/07/2018 (Sábado) para acompanhar de perto os resultados deste processo. Pessoas de grande influência na história da CompJúnior darão palestras para parabenizar e motivar os trainees que agora serão efetivados na empresa.</p>
</section>

<!--Palestrantes-->
<section id="palestrantes" class="container-fluid">
	<p id="titlePalestrantes" class="col-12">
		Palestrantes
	</p>
	<p class="orientacaoPal">
		Clique ou passe o cursor sobre as imagens para mais informações
	</p>
	<div class="row">
		<div id="colPalestrantes" class="col-sm-12 col-md-4 row">
			<div class="col-xl-12 cont">
				<img src="assets/images/palestrantes1.jpg" class="imgPalestrantes" align="center">
				<div class="overlay imgPalestrantes" align="center">
				    <p class="text">Diretor Presidente da CompJúnior</p>
  				</div>
			</div>
			<p class="txtPalestrantes col-12">
				Caio Vinícius
			</p>
		</div>

		<div id="colPalestrantes" class="col-sm-12 col-md-4 row">
			<div class="col-xl-12 cont">
				<img src="assets/images/palestrantes2.jpg" class="imgPalestrantes">
				<div class="overlay imgPalestrantes" align="center">
				    <p class="text">Diretora de Gestão de Pessoas da CompJúnior</p>
  				</div>
			</div>
			<p class="txtPalestrantes col-12">
				Joyce Melo
			</p>
		</div>

		<div id="colPalestrantes" class="col-sm-12 col-md-4 row">
			<div class="col-xl-12 cont">
				<img src="assets/images/palestrantes3.jpg" class="imgPalestrantes">
				<div class="overlay imgPalestrantes" align="center">
				    <p class="text">Membro Efetivo/ Desenvolvedor</p>
  				</div>
			</div>
			<p class="txtPalestrantes col-12">
				Gustavo Reis
			</p>
		</div>

	</div>
</section>

<!--Organizadores-->
<section id="organizadores" class="container-fluid">
  <div id="titleOrganizadores" class="col-12">
    Organizadores
  </div>

<div class="row">

  <div id="colOrganizadores" class="row col-sm-12 col-md-4">
    <div class="col-xl-12">
      <img src="assets/images/organizadores1.jpeg" class="imgOrganizadores">
    </div>
    <div class="txtOrganizadores col-12">
      Alisson Gonçalves
    </div>
    <div class="social">
      <a href="https://www.facebook.com/alisson.rodrigo.549" target="_blank"><img src="assets/images/icon1.svg" class="socialIcon"></a>
      <a href="https://github.com/AlissonRoGon/" target="_blank"><img src="assets/images/icon2.svg" class="socialIcon"></a>
      <a href="https://www.instagram.com/alisson_rogon/" target="_blank"><img src="assets/images/icon3.svg" class="socialIcon"></a>
    </div>
  </div>

  <div id="colOrganizadores" class="row col-sm-12 col-md-4">
      <div class="col-xl-12">
         <img src="assets/images/organizadores5.jpeg" class="imgOrganizadores">
      </div>
      <div class="txtOrganizadores col-12">
        Bruno Abreu
      </div>
      <div class="social">
		<a href="https://www.facebook.com/brunorezabreu" target="_blank"><img src="assets/images/icon1.svg" class="socialIcon"></a>
        <a href="https://github.com/brunorezabreu" target="_blank"><img src="assets/images/icon2.svg" class="socialIcon"></a>
        <a href="https://www.instagram.com/brunorabreu/?hl=pt-br" target="_blank"><img src="assets/images/icon3.svg" class="socialIcon"></a>
    </div>
  </div>

</div>

  <div class="row">
    <div id="colOrganizadores" class="col-sm-12 col-md-4 row">
      <div class="col-xl-12">
        <img src="assets/images/organizadores2.jpeg" class="imgOrganizadores">
      </div>
      <div class="txtOrganizadores col-12">
        João Veronezi
      </div>
      <div class="social">
      	<a href="https://www.facebook.com/profile.php?id=100002731789283&ref=br_rs" target="_blank"><img src="assets/images/icon1.svg" class="socialIcon"></a>
        <a href="https://github.com/joaoveronezi/" target="_blank"><img src="assets/images/icon2.svg" class="socialIcon"></a>
        <a href="https://www.instagram.com/jvveronezi/?hl=pt-br" target="_blank"><img src="assets/images/icon3.svg" class="socialIcon"></a>
      </div>
    </div>

    <div id="colOrganizadores" class="col-sm-12 col-md-4 row">
      <div class="col-xl-12">
        <img src="assets/images/organizadores4.jpeg" class="imgOrganizadores">
      </div>
      <div class="txtOrganizadores col-12">
        Luiz Soares
      </div>
      <div class="social">
        <a href="http://facebook.com/minerador" target="_blank"><img src="assets/images/icon1.svg" class="socialIcon"></a>
        <a href="https://github.com/LuizDoPc" target="_blank"><img src="assets/images/icon2.svg" class="socialIcon"></a>
        <a href="http://instagram.com/luizdopc" target="_blank"><img src="assets/images/icon3.svg" class="socialIcon"></a>
      </div>
    </div>

    <div id="colOrganizadores" class="col-sm-12 col-md-4 row">
      <div class="col-xl-12">
        <img src="assets/images/organizadores3.jpeg" class="imgOrganizadores">
      </div>
      <div class="txtOrganizadores col-12">
        Marcos José	
      </div>
      <div class="social">
        <a href="https://www.facebook.com/profile.php?id=100003215395786&ref=br_rs" target="_blank"><img src="assets/images/icon1.svg" class="socialIcon"></a>
        <a href="https://github.com/dodoreptil" target="_blank"><img src="assets/images/icon2.svg" class="socialIcon"></a>
        <a href="https://www.instagram.com/dodoreptil/?hl=pt-br" target="_blank"><img src="assets/images/icon3.svg" class="socialIcon"></a>
      </div>
    </div>

  </div>
</section>

<!--Localização-->
<section id="localizacao" class="container-fluid">
	<div id="titleLocalizacao" class="col-12">Localização</div>
		<div class="txtLocalizacao col-xl-12">
			Essas são as coordenadas para chegar ao <a href="http://www.dcc.ufla.br/" target="_blank">Departamento de Ciência da Computação</a>:
			<div id="myMap" class="col-xl-8 col-sm-"8></div>
			Avenida Central, UFLA - Centro, Lavras - MG, 37200-000
		</div>
</section>

<!--Log-in/Sign-in-->
<section id="cadastro">
	<p class="titleCadastro">Cadastre-se!</p>
	<form class="container-fluid" id="cadastrinho">
		<div class="form-group">
    		<label class="topicos" for="Nome">Nome:</label>
    		<input required type="text" class="form-control dados" id="Nome" placeholder="Maria da Silva">
  		</div>

  		<div class="row">
	  		<div class="form-group col">
	    		<label class="topicos" for="Email">Email:</label>
	    		<input required type="email" class="form-control" id="Email" placeholder="nome@exemplo.com">
			</div>
			<div class="form-group col">
	    		<label class="topicos">Senha:</label>
	    		<input required type="password" class="form-control" placeholder="Insira sua Senha aqui" id="Senha">
			</div>
		</div>

		<div class="row">
			<div class="form-group col">
	    		<label class="topicos" for="Sexo">Sexo</label>
	    		<select required id="Sexo" class="form-control">
	    			<option value="" selected>---</option>
	    			<option>Feminino</option>
	    			<option>Masculino</option>
	    			<option>Outro</option>
	    		</select>
	    	</div>
		    <div class="form-group col">
	    		<label class="topicos" for="CPF">CPF</label>
	    		<input required type="text" class="form-control" id="CPF" placeholder="123.456.789-12">
	  		</div>
    	</div>

    	<div class="row">
    		<div class="form-group col-sm-6 col-12">
	    		<label class="topicos" for="Nascimento">Data de Nascimento</label>
	    		<input required type="date" class="form-control" id="Nascimento" placeholder="dd/mm/aaaa">
	  		</div>
    		<div class="form-group col-sm-3 col-12">
	    		<label class="topicos" for="ufRG">ufRG</label>
	    		<select required id="ufRG" class="form-control">
						<?php
							$e = new Estado();
							$res = $e->findAll();
							foreach($res as $r){
								echo '<option value="'.$r->idEstado.'">'.$r->UF.'</option>';
							}
						?>
	    		</select>
	    	</div>
	  		<div class="form-group col-sm-3 col-12">
	    		<label class="topicos" for="RG">RG</label>
	    		<input required type="text" class="form-control" id="RG" placeholder="12.345.678">
	  		</div>
    	</div>

    	<div class="row">
	  		<div class="form-group col">
	    		<label class="topicos" for="telefone">Telefone:</label>
	    		<input required type="text" class="form-control" id="Telefone" placeholder="(DDD) (9) 1234-5678">
			</div>
			<div class="form-group col">
	    		<label class="topicos" for="CEP">CEP:</label>
	    		<input required type="text" class="form-control" id="CEP" placeholder="12.345-678">
			</div>
		</div>
		<div class="row">
			<div class="col-6 col-sm-12 form-group">
				<label class="topicos" for="Estado">Estado:</label>
				<select required id="Estado" class="form-control">
						<?php
							$e = new Estado();
							$res = $e->findAll();
							foreach($res as $r){
								echo '<option value="'.$r->idEstado.'">'.$r->UF.'</option>';
							}
						?>
	    		</select>
			</div>
			<div class="form-group col-6 col-sm-12">
	    		<label class="topicos" for="Cidade">Cidade:</label>
				<div id="resposta">
					<select required name="Cidade" id="Cidade" class="form-control">
						<?php
							$c = new Cidade();
							$res = $c->findEst(26);
							foreach($res as $r){
								echo '<option value="'.$r->idCidade.'">'.$r->Nome.'</option>';
							}
						?>
					</select>
				</div>
			</div>
			<div class="form-group col-12 col-sm-6">
	    		<label class="topicos" for="Logradouro">Endereço:</label>
	    		<input required type="text" class="form-control" id="Logradouro" placeholder="Rua dos Alfineiros">
	  		</div>
	  		<div class="form-group col-12 col-sm-6">
	    		<label class="topicos" for="Numero">Número:</label>
	    		<input required type="text" class="form-control" id="Numero" placeholder="4">
	  		</div>
	  		<div class="form-group col-12 col-sm-6">
	    		<label class="topicos" for="Complemento">Complemento:</label>
	    		<input type="text" class="form-control" id="Complemento" placeholder="Apto. 201">
	  		</div>
	  		<div class="form-group col-12 col-sm-6">
	    		<label class="topicos" for="Bairro">Bairro:</label>
	    		<input required type="text" class="form-control" id="Bairro" placeholder="Centro">
	  		</div>
  		</div>
  			<button type="submit" class="btn btn-primary logBotao">Cadastrar</button>
	</form>
</section>

<!--RODAPÉ-->
<section id="rodape">
	<div align="center" class="pat">Patrocinadores</div>
	<div class="row">
		<img src="assets/images/patrocinador1.png" class="logoPatrocinador">
		<img src="assets/images/patrocinador2.png" class="logoPatrocinador">
		<img src="assets/images/patrocinador3.png" class="logoPatrocinador">
	</div>
</section>

</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<script src="assets/js/funcoes.js"></script>
	<script type="text/javascript" src="assets/js/ProjetoJS.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFGgg96Aqzg5EzE4Du-PqDAwJ5vASzQvg&callback=myMap"></script>

	<script>
		$(document).ready(function(){
			$('#Estado').on('change', function(){
			$.post(
				'../controle/retornaCidades.php',
				{uf:$('#Estado').val()},
				function(res){
					$('#resposta').html(res);
				}
			);
			});
			
			$('#cadastrinho').on('submit', function(e){
				e.preventDefault();
				cadastraParticipante();
			});
		});
	</script>
</body>
</html>
