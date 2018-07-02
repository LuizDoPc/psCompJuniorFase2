<?php
header('Content-Type: text/html; charset=UTF-8');

function __autoload($class_name){
    require_once '../modelo/'.$class_name.'.php';
}
session_start();
if(!isset($_SESSION['cpf'])){
	unset($_SESSION['cpf']);
	header('Location: index.php');
}

$user = new Participantes($_SESSION['cpf']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Área do Inscrito</title>
	<link rel="icon" href="assets\images\favicon.png" sizes="16x16" type="image/jpeg">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/inscrito.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>

<body>
	<section id="areaInscrito">

		<div id="topTitle">Área do Inscrito</div>
		<div id="usuario">
			<div class="row">
				<p class="col-12 col-sm-9">
					<?php
						echo $user->getNome();
					?>
				</p>
			</div>
		<form class="container-fluid" action="../controle/editaParticipante.php" method="post">
  		<div class="row">
	  		<div class="form-group col-6">
	    		<label class="topicos" for="Email">Email:</label>
	    		<input readonly type="email" class="form-control" id="Email" name="Email" value="<?php echo($user->getEmail()); ?>">
			</div>
			<div class="form-group col-6">
	    		<label class="topicos" for="Nome">Nome:</label>
	    		<input  type="text" class="form-control" id="Nome" name="Nome" value="<?php echo($user->getNome()); ?>">
			</div>
		</div>
		<div class="row">
		    <div class="form-group col">
	    		<label class="topicos" for="CPF">CPF</label>
	    		<input readonly type="text" class="form-control" id="CPF" name="CPF" value="<?php echo($user->getCPF()); ?>">
	  		</div>
	  		<div class="form-group col-sm-3 col-12">
	    		<label class="topicos" for="ufRG">ufRG</label>
	    		<select id="ufRG" name="ufRG" class="form-control">
					<?php
						$e = new Estado();
						$res = $e->findAll();
						foreach($res as $r){
							if($r->idEstado == $user->getUfRG()){
								echo '<option selected value="'.$r->idEstado.'">'.$r->UF.'</option>';
							}else{
								echo '<option value="'.$r->idEstado.'">'.$r->UF.'</option>';
							}
						}
					?>
	    		</select>
	    	</div>
	    	<div class="form-group col-sm-3 col-12">
	    		<label class="topicos" for="RG">RG</label>
	    		<input  type="text" class="form-control" id="RG" name="RG" value="<?php echo($user->getRG()); ?>">
	  		</div>
    	</div>
    	<div class="row">
    		<div class="form-group col-sm-6 col-12">
	    		<label class="topicos" for="Nascimento">Data de Nascimento</label>
	    		<input  type="date" class="form-control" id="Nascimento" name="Nascimento" value="<?php echo($user->getNascimento()); ?>">
	  		</div>

	  		<div class="form-group col">
	    		<label class="topicos" for="telefone">Telefone:</label>
	    		<input  type="text" class="form-control" id="Telefone" name="Telefone" value="<?php echo($user->getTelefone()); ?>">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-12 col-sm-3">
	    		<label class="topicos" for="Logradouro">Logradouro:</label>
	    		<input  type="text" class="form-control" id="Logradouro" name="Logradouro" value="<?php echo($user->getLogradouro()); ?>">
	  		</div>
			<div class="form-group col-12 col-sm-3">
	    		<label class="topicos" for="Numero">Número:</label>
	    		<input  type="text" class="form-control" id="Numero" name="Numero" value="<?php echo($user->getNumero()); ?>">
	  		</div>
	  		<div class="form-group col-12 col-sm-3">
	    		<label class="topicos" for="Complemento">Complemento:</label>
	    		<input  type="text" class="form-control" id="Complemento" name="Complemento" value="<?php echo($user->getComplemento()); ?>">
	  		</div>
	  		<div class="form-group col-12 col-sm-3">
	    		<label class="topicos" for="Bairro">Bairro:</label>
	    		<input  type="text" class="form-control" id="Bairro" name="Bairro" value="<?php echo($user->getComplemento()); ?>">
	  		</div>
		</div>
		<div class="row">
			<div class="form-group col-12 col-sm-6">
	    		<label class="topicos" for="CEP">CEP:</label>
	    		<input  type="text" class="form-control" id="CEP" name="CEP" value="<?php echo($user->getCEP()); ?>">
			</div>		
			<div class="form-group col-12 col-sm-6">
				<label class="topicos" for="ufRG">UF:</label>
	    		<select id="Estado" name="Estado" class="form-control">
					<?php
						$e = new Estado();
						$res = $e->findAll();
						foreach($res as $r){
							if($r->idEstado == $user->getEstadoIdEstado()->getIdEstado()){
								echo '<option selected value="'.$r->idEstado.'">'.$r->UF.'</option>';
							}else{
								echo '<option value="'.$r->idEstado.'">'.$r->UF.'</option>';
							}
						}
					?>
	    		</select>
			</div>

			<div class="form-group col-12 col-sm-6">
				<label class="topicos" for="ufRG">Cidade:</label>
	    		<div id="resposta">
					<select id="Cidade" name="Cidade" class="form-control">
						<?php
							$c = new Cidade();
							$res = $c->findEst($user->getEstadoIdEstado()->getIdEstado());
							foreach($res as $r){
								if($r->idCidade == $user->getCidadeIdCidade()->getIdCidade()){
									echo '<option selected value="'.$r->idCidade.'">'.$r->Nome.'</option>';
								}else{
									echo '<option value="'.$r->idCidade.'">'.$r->Nome.'</option>';
								}
							}
						?>
					</select>
				</div>
			</div>
	  	</div>
		<button type="submit" class="btn btn-primary logBotao">Confirmar Edição de Dados</button>
	</form>
	<?php
		if($user->getInscrito()){
			echo "<div>INSCRIÇÃO CONFIRMADA</div>";
		}else{
			echo '
				<form action="../controle/inscrever.php" method="post">
					<input type="hidden" name="cpf" value="'.$user->getCPF().'">
					<button type="submit" class="btn btn-primary logBotao">Confirmar Inscrição</button>
				</form>';
		}
	?>
	<form action="../controle/deslogar.php">
	<button type="submit" id="sair" class="btn btn-primary logBotao">Sair da Conta</button>
	</form>
	
		
	
</div>
	</section>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$('#Estado').on('change', function(){
			$.post(
				'../controle/retornaCidades.php',
				{uf:$('#Estado').val()},
				function(res){
					$('#resposta').html(res);
				}
			);
		});
	</script>
</body>
</html>