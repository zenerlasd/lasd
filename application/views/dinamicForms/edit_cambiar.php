<div class="container">
	
	<div class="page-header">
		<h2><?php if (isset($encabezado)) echo $encabezado; ?></h2>
	</div>

	<?php echo validation_errors(); ?>

	<?php echo form_open('') ?>
		
		<div class="form-group">
			<label for="label" >label: </label>
			<input type="text" id="label" name="label" value="<?php if (isset($campo['label'])) echo $campo['label']; ?>" />

			<label for="type" >Seleccionar tipo de campo: </label>
			<select id="type" name="type">
				<?php include('select/type.php'); ?>
			</select>

			<label for="name" >name: </label>
			<input type="text" id="name" name="name" value="<?php if (isset($campo['name'])) echo $campo['name']; ?>" />

			<label for="class" >class: </label>
			<input type="text" id="class" name="class" value="<?php if (isset($campo['class'])) echo $campo['class']; ?>" />

			<label for="id" >Id: </label>
			<input type="text" id="id" name="id" value="<?php if (isset($campo['id_'])) echo $campo['id_']; ?>" />

			<label for="value" >value: </label>
			<input type="text" id="value" name="value" value="<?php if (isset($campo['value'])) echo $campo['value']; ?>" />
			
			<label for="placeholder" >placeholder: </label>
			<input type="text" id="placeholder" name="placeholder" value="<?php if (isset($campo['placeholder'])) echo $campo['placeholder']; ?>" />
		</div>
		<button class="btn btn-primary" type="submit">
			<i class=" fa fa-ok icon-white"></i>
			<?php if (isset($encabezado)) echo $encabezado; ?>
		</button>
	</form>
	
	<p><a class="btn btn-warning" href="javascript:history.go(-1)">Atrás</a></p>

</div>