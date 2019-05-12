<?php if(isset($_GET['erro']))	{ ?>

	<div class="alert alert-danger animated shake" role="alert">
		Usuário e/ou senha inválido.
	</div>

<?php } ?>

<div class="wrap animated rubberBand">
	<div class="sticker"></div>
	<div class="msg">Bem-vindo</div>
</div>

<div>
	<form class="animated bounceInDown" method="post" action="login.php">

		<label class="badge badge-secondary">Usuário:</label>
		<input class="form-control" type="text" name="usuario" placeholder="Nome do usuário" required>
		
		<br>

		<label class="badge badge-secondary">Senha:</label>
		<input class="form-control" type="password" name="senha" placeholder="Digite sua senha" required>

		<br>

		<input class="btn btn-dark" type="submit" value="Entrar">
	</form>
</div>