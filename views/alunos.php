<div class="jumbotron animated bounceInLeft">
	<a class="btn btn-dark" href="?pagina=inserir_aluno">
		Inserir novo aluno
	</a>
	<table class="table-bordered table-striped table-hover" id="alunos">

		<thead>
			<tr class="table-secondary">
				<th>Nome do Aluno:</th>
				<th>Data de nascimento:</th>
				<th>Editar</th>
				<th>Deletar</th>
			</tr>
		</thead>

		<!-- Varrendo e exibindo resultados -->
		<tbody>
			<?php
				while ($linha = mysqli_fetch_array($consulta_alunos)) {
					echo '<tr><td>'.$linha['nome_aluno'].'</td>';
					echo '<td>'.$linha['data_nascimento'].'</td>';
			?>
				<td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>">
					<i class="fas fa-user-edit"></i>
				</a></td>
				<td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>">
					<i class="fas fa-user-times" id="alunos-delete"></i>
				</a></td></tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>