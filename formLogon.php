<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha loja - logon de usuário</title>


    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
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
				
				<h2>Logon de Usuário</h2>

                <form action="validaUsuario.php" method="post">

                
				
					<div class="form-group">
				
						<label for="email">Email</label>
						<input name="email" type="email" class="form-control" required id="email">
					</div>
				
				<div class="form-group">
				
						<label for="senha">Senha</label>
						<input name="senha" type="password" class="form-control" required id="senha">
				</div>
				
							
				<button type="submit" class="btn btn-lg btn-default">
					
					<span class="glyphicon glyphicon-ok"> Entrar</span>
					
				</button>

                </form>  
				<a href="formUsuario.php">
					<button type="submit" class="btn btn-lg btn-link">
						Ainda não sou cadastrado
					</button>
				</a>			
			</div>
		</div>
	</div>
	
	<?php include 'footer.html' ?>
	
	
</body>
</html>