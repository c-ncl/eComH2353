<?php $this->view('shared/header',_('Create a new client record')); ?>
<br>

<a href="?lang=fr_CA"><?= _('French') ?></a>
<a href="?lang=en"><?= _('English') ?></a>
<a href="?lang=ar"><?= _('Arabic') ?></a>

<form method="post" action="">
	<div class="inputGroup">
	    <input type="text" required="" autocomplete="off" name="first_name">
	    <label for="name"><?= _('First Name') ?></label>
	</div>

	<div class="inputGroup">
	    <input type="text" required="" autocomplete="off" name="middle_name">
	    <label for="name"><?= _('Middle Name') ?></label>
	</div>

	<div class="inputGroup">
	    <input type="text" required="" autocomplete="off" name="last_name">
	    <label for="name"><?= _('Last Name') ?></label>
	</div>
	<br>
	<input type="submit" name="action" value='<?= _('Create') ?>'>
	
</form>
	<a href="/Client/index"><?= _('Cancel') ?></a>

<?php $this->view('shared/footer'); ?>