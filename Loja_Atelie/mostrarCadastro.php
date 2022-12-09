<?php
	$sql = "SELECT * FROM usuarios";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<table class='teble teble-hover table-striped'>";
		while ($row = $res->fetch_object()) {
			print "<tr>";
			print "<td>" .$row->id."<td>";
			print "<td>" .$row->nome."<td>";
			print "<td>" .$row->email."<td>";

			print "<td>
					<button onclick=\"location.href='page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
					button onclick=\"if(confirm('Após a exclusão deste iten, o mesmo não poderá ser recuperado, tem certeza que deseja exlui-lo?')){location.href='page=salvar&acao=exluir&id=".$row->id.}else{false;}\" class='btn btn-danger'>Excluir</button>
					</td>"


			print "</tr>";

		print "</table>";
			
		}
		}else{
			print "<p class='alert alert-danger'>Não foram encontrados resultados para essa perquisa!!</p>"

		};

?>