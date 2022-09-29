<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Minha Loja - Logon de usuário</title>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!-- Latest compiled and minified CSS -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="jquery.mask.js"></script>
	
<script>
	
$(document).ready(function(){
    $("#cep").mask("00000-000");
});
	
	
</script>
	
</head>
	
	
	


<body>
	
<?php
	
	include 'conexao.php';	
	include 'nav.php';
	include 'header.html';
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Cadastro de novo Cliente</h2>
				
				<form method="post" action="inserirUsuario.php" name="logon">
				
					<div class="form-group">
				
						<label for="nome">Nome</label>
						<input name="nome" type="text" class="form-control" required id="nome">
					</div>
				
				<div class="form-group">
				
						<label for="sobrenome">Sobrenome</label>
						<input name="sobrenome" type="text" class="form-control" required id="sobrenome">
				</div>
					
					
				<div class="form-group">
				
						<label for="email">E-mail</label>
						<input name="email" type="email" class="form-control" required id="email">
				</div>
					
				
				<div class="form-group">
				
						<label for="senha">Senha</label>
						<input name="senha" type="password" class="form-control" required id="senha">
				</div>
					
				<div class="form-group">
				
						<label for="endereco">Endereço</label>
						<textarea name="endereco" rows="5" class="form-control" required id="endereco"></textarea>
				</div>
					
					
				<div class="form-group">
				
						<label for="cidade">Cidade</label>
						<input name="cidade" type="text" class="form-control" required id="cidade">
				</div>
					
					
				<div class="form-group">
				
						<label for="cep">CEP</label>
						<input name="cep" type="text" class="form-control" required id="cep">
				</div>
				
							
				<button type="submit" class="btn btn-lg btn-default">
					
					<span class="glyphicon glyphicon-pencil"> Cadastrar</span>
					
				</button>
				
				</form>
							
			</div>
		</div>
	</div>
	
	<?php include 'footer.html'; ?>
	
	
	
	
</body>
</html>