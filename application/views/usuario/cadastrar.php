<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="usuario-erros">
				<p><?php echo $erro; ?></p>
				<?php  echo validation_errors(); ?>
			</div>
			<?php echo form_open(base_url('usuario/cadastrar')); ?>
			<p>
				<label for="login">Login</label>
				<input type="text" name="login"/>
			</p>
			<p>
				<label for="senha">Senha</label>
				<input type="text" name="senha"/>
			</p>
			<p>
				<input type="submit" name="cadastrar" value="Cadastrar"/>
			</p>
		</div>
	</div>	
</div>