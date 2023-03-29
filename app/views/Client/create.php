<?php $this->view('shared/header',_('Create a new client record')); ?>
<br>
<form method="post" action="">
	<div class="inputGroup">
	    <input type="text" required="" autocomplete="off">
	    <label for="name"><?= _('First Name') ?></label>
	</div>

	<div class="inputGroup">
	    <input type="text" required="" autocomplete="off">
	    <label for="name"><?= _('Middle Name') ?></label>
	</div>

	<div class="inputGroup">
	    <input type="text" required="" autocomplete="off">
	    <label for="name"><?= _('Last Name') ?></label>
	</div>
	<br>
	<input type="submit" name="action" value='<?= _('Create') ?>'>
	<a href="/Client/index"><?= _('Cancel') ?></a>
<!-- 	<label>First name:</label><input type="text" name="first_name"><br>
	<label>Last name:</label><input type="text" name="last_name"><br>
	<label>Middle name:</label><input type="text" name="middle_name"><br>
	<input type="submit" name="action" value='Create'> -->
</form>

<?php $this->view('shared/footer'); ?>