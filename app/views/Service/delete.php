<?php $this->view('shared/header',_('Create a new service appointment')); ?>
<br>

<h3>Do you want to delete this service?</h3>

<?php 
	$client = $data->getClient();
	$this->view('Client/detailsPartial', $client);
?>
<br>
<?php $this->view('Service/detailsPartial', $data); ?>

<form method="POST" action="">
	<input type="submit" name="action" value="<?= _('Delete') ?>"><br>
</form>
	<a href="/Service/index/<?= $data->client_id ?>"><?= _('Cancel') ?></a>

<?php $this->view('shared/footer'); ?>