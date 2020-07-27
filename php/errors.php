<?php  if (count($errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
			<p style="text-align: center; color: red; font-weight: bold; font-size: 1.5rem;"><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
<?php  endif ?>