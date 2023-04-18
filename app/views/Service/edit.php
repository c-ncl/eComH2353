<?php $this->view('shared/header',_('Edit appointment')); ?>
<br>
<a href='/Service/create/<?= $data->client_id ?>'><?= _('Create a new service') ?></a><br><br>

<form method="post" action="">
	<label for="name"><?= _('Description') ?></label><br>
	<textarea name="description" placeholder="Service Description"><?= $data['service']->description ?></textarea><br><br>

	<label for="name"><?= _('Appointment Date and Time') ?></label><br>
	<input type="datetime-local" required="" autocomplete="off" name="datetime" value="<?= \app\core\TimeHelper::DTOutBrowser($data['service']->datetime) ?>"><br>
	<br>
	<select name="branch_id">
	    	<?php 
	    		foreach ($data['branches'] as $branch) { ?>
	    			<option value="<?=$branch->branch_id?>"><?=$branch->name?></option>
	    		<?php }
	    	?>
	</select><br>
	<input type="submit" name="action" value='<?= _('Edit') ?>'>
	
</form>
	<a href="/Service/index/<?= $data['service']->client_id ?>"><?= _('Cancel') ?></a>

<?php $this->view('shared/footer'); ?>