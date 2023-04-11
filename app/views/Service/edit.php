<?php $this->view('shared/header',_('Edit appointment')); ?>
<br>
<a href='/Service/create/<?= $data->client_id ?>'><?= _('Create a new service') ?></a><br><br>

<form method="post" action="">
	<label for="name"><?= _('Description') ?></label><br>
	<textarea name="description" placeholder="Service Description"><?= $data->description ?></textarea><br><br>

	<label for="name"><?= _('Appointment Date and Time') ?></label><br>
	<input type="datetime-local" required="" autocomplete="off" name="datetime" value="<?= \app\core\TimeHelper::DTOutBrowser($data->datetime) ?>"><br>
	<br>
	<input type="submit" name="action" value='<?= _('Edit') ?>'>
	
</form>
	<a href="/Service/index/<?= $data->client_id ?>"><?= _('Cancel') ?></a>

<?php $this->view('shared/footer'); ?>