<?php $this->view('shared/header', _('List of clients')); ?>
<a href='/Client/create'><?= _('Create a new client') ?></a>

<table class="table table-hover">
  	<thead>
    	<tr>
      	<th scope="col">First Name</th>
      	<th scope="col">Middle Name</th>
      	<th scope="col">Last name</th>
      	<th scope="col">Actions</th>
    	</tr>
  	</thead>

  	<tbody>
		<?php 
			foreach ($data as $client) {
				echo 
				"<tr><td>$client->first_name</td>
					<td>$client->middle_name</td>
					<td>$client->last_name</td>
					<td>
						<a href='/Client/delete/$client->client_id'>delete</a>
						 | 
						<a href='/Client/edit/$client->client_id'>edit</a>
						 | 
						<a href='/Service/index/$client->client_id'>service</a>
					</td>
				</tr><br>";
			}
		?>
	</tbody>
</table>


<?php $this->view('shared/footer'); ?>