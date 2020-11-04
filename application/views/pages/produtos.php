<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Produtos</h1>
		<div class="btn-group mr-2">
			<a href="<?= base_url('') ?>products/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Adicionar Produto</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Preço</th>
					<th>Descrição</th>
					<th>Categoria</th>
					<th>Ativo</th>
					<th>Quantidade</th>
					<th>Opções</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($produtos as $produto) : ?>
					<tr>
						<td><?= $produto['id'] ?></td>
						<td><?= $produto['nome'] ?></td>
						<td><?= $produto['preco'] ?></td>
						<td><?= $produto['descricao'] ?></td>
						<td><?php switch ($produto['categoria']) {
								case 0:
									echo 'Informática';
									break;
								case 1:
									echo 'Games';
									break;
								case 2:
									echo 'Smartphones';
									break;
								case 3:
									echo 'Itens para Escritório';
									break;
							} ?></td>
						<td><?php if ($produto['ativo'] == 1) {
								echo 'Ativo';
							} else {
								echo 'Inativo';
							}  ?></td>
						<td><?= $produto['quantidade'] ?></td>
						<td>
							<a class="btn btn-warning" href="<?= base_url() ?>products/edit/<?= $produto['id'] ?>"><i class="fas fa-pencil-alt"></i></a>
							<a class="btn btn-danger" href="javascript:goDelete(<?= $produto['id'] ?>)"><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</main>

<script>
	function goDelete(id) {
		var myUrl = 'products/delete/' + id
		if (confirm("Deseja excluir este produto?")) {
			window.location.href = myUrl;

		} else {
			alert("Produto não foi excluído");
			return false;
		}
	}
</script>