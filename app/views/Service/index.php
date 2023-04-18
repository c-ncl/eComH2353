<?php $this->view('shared/header', _('List of Service Appointments for the Client')); ?>
<br>

<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
      <a href='/Client/index'><?= _('Back') ?></a><br><br>
    </div>
    <div class="col">
      <a href='/Service/create/<?= $data->client_id ?>'><?= _('Create a new service') ?></a><br><br>
    </div>
  </div>
</div>

<?php $this->view('Client/detailsPartial', $data) ?><br><br>

<table class="table table-hover">
  	<thead>
    	<tr>
      	<th scope="col">Date and Time</th>
      	<th scope="col">Description</th>
      	<th scope="col">Location</th>
      	<th scope="col">Actions</th>
    	</tr>
  	</thead>

  	<tbody>
		<?php 
			$services = $data->getService();
			foreach ($services as $service) { ?>
				<tr><td><?= \app\core\TimeHelper::DTOutput($service->datetime) ?></td>
					<td><?= $service->description ?></td>
					<td><?= $service->name ?></td>
					<td> 
						<a href='/Service/edit/<?=$service->service_id?>'>edit</a>
						 | 
						<a href='/Service/delete/<?=$service->service_id?>'>delete</a>
					</td>
				</tr><br>
			<?php }
		?>
	</tbody>
</table>


<?php $this->view('shared/footer'); ?>