<div class="jumbotron animated bounceInLeft">
	<a class="btn btn-dark" href="?pagina=inserir_curso">
		Inserir novo curso
	</a>
	<table class="table-bordered table-striped table-hover" id="cursos">

		<thead>
			<tr class="table-secondary">
				<th>Nome do Curso:</th>
				<th>Carga Horária:</th>
				<th>Editar</th>
				<th>Deletar</th>
			</tr>
		</thead>

		<!-- Varrendo e exibindo resultados -->
		<tbody>
			<?php
				while ($linha = mysqli_fetch_array($consulta_cursos)) {
					echo '<tr><td>'.$linha['nome_curso'].'</td>';
					echo '<td>'.$linha['carga_horaria'].'</td>';
			?>	
				<td><a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>">
					<i class="fas fa-edit"></i>
				</a></td>
				<td><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>">
					<i class="fas fa-trash-alt" id="cursos-delete"></i>
				</a></td></tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>