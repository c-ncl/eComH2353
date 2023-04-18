<?php $this->view('shared/header',_('Create a new service appointment')); ?>
<br>
<h3>Create a new service?</h3>

<form method="post" action="">
	    <label for="name"><?= _('Description') ?></label><br>
	    <textarea name="description" placeholder="Service Description"></textarea><br><br>

	    <label for="name"><?= _('Appointment Date and Time') ?></label><br>
	    <input type="datetime-local" required="" autocomplete="off" name="datetime"><br><br>
	    <label>Select the appointement location:</label><br>
	    <select name="branch_id">
	    	<?php 
	    		foreach ($data['branches'] as $branch) { ?>
	    			<option value="<?=$branch->branch_id?>"><?=$branch->name?></option>
	    		<?php }
	    	?>
	    </select><br>
	<br>
	<input type="submit" name="action" value='<?= _('Create') ?>'>
	
</form>
	<a href="/Service/index/<?= $data['client']->client_id ?>"><?= _('Cancel') ?></a>

<?php $this->view('shared/footer'); ?>