<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php  echo validation_errors(); ?>

			<?php echo form_open(base_url('usuario/verifica')); ?>
			<p>
				<label for="usuario">Login</label>
				<input type="text" name="usuario"/>
			</p>
			<p>
				<label for="senha">Senha</label>
				<input type="text" name="senha"/>
			</p>
			<p>
				<input type="submit" name="enviar" value="Logar"/>
			</p>
		</div>
	</div>	
</div>