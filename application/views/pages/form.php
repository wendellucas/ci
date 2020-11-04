<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"></h1>
	</div>

	<div class="col-md-12">
		<?php if (isset($produto)) : ?>
			<form action="<?= base_url() ?>products/update/<?= $produto['id'] ?>" method="post">
			<?php else : ?>
				<form action="<?= base_url() ?>products/store" method="post">
				<?php endif; ?>

				<div class="col-md-6">
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do Produto" required value="<?= isset($produto) ? $produto['nome'] : '' ?>">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="preco">Preço</label>
						<input type="number" class="form-control" name="preco" id="name" placeholder="Preço" required value="<?= isset($produto) ? $produto['preco'] : '' ?>">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="descricao">Descrição</label>
						<textarea name="descricao" id="descricao" rows="5" class="form-control" required><?= isset($produto) ? $produto['descricao'] : '' ?></textarea>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="categoria">Categoria</label>
						<select class="form-control" name="categoria" id="categoria">
							<option value="0" <?php if (isset($produto)) {
													if ($produto['categoria'] == 0) {
														echo 'selected';
													}
												} ?>>Informática</option>
							<option value="1" <?php if (isset($produto)) {
													if ($produto['categoria'] == 1) {
														echo 'selected';
													}
												} ?>>Games</option>
							<option value="2" <?php if (isset($produto)) {
													if ($produto['categoria'] == 2) {
														echo 'selected';
													}
												} ?>>Smartphones</option>
							<option value="3" <?php if (isset($produto)) {
													if ($produto['categoria'] == 3) {
														echo 'selected';
													}
												} ?>>Itens para escritório</option>
						</select>
						<!-- <input type="text" class="form-control" name="categoria" id="categoria" placeholder="Categoria" value="<?= isset($produto) ? $produto['categoria'] : '' ?>" required> -->
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="ativo">Ativo</label>
						<select class="form-control" name="ativo" id="ativo">
							<option value="1" <?php if (isset($produto)) {
													if ($produto['ativo'] == 1) {
														echo 'selected';
													}
												} ?>>Ativo</option>
							<option value="0" <?php if (isset($produto)) {
													if ($produto['ativo'] == 0) {
														echo 'selected';
													}
												} ?>>Inativo</option>
						</select>
						<!-- <input type="text" class="form-control" name="ativo" id="ativo" placeholder="0 ou 1" value="<?= isset($produto) ? $produto['ativo'] : '' ?>" required> -->
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="quantidade">Quantidade</label>
						<input type="number" class="form-control" name="quantidade" id="quantidade" placeholder="Quantidade" value="<?= isset($produto) ? $produto['quantidade'] : '' ?>" required>
					</div>
				</div>


				<div class="col-md-6">
					<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i>Salvar</button>
					<a href="<?= base_url() ?>products" class="btn btn-danger btn-xs"><i class="fas fa-times"></i>Cancelar</a>
				</div>
	</div>
	</form>
	</div>

</main>
</div>
</div>