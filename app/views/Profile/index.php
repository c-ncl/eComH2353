<?php $this->view('shared/header','Your Profile'); ?>
<h1>Your Profile</h1>
<d1>
	<dt>First Name</dt>
	<dd><?=$data->first_name?></dd>
	<dt>Middle Name</dt>
	<dd><?=$data->middle_name?></dd>
	<dt>Last Name</dt>
	<dd><?=$data->last_name?></dd>
</d1>

<a href='/Profile/edit'>Edit my Profile</a>
<a href='/User/profile'>Back</a>	

<?php $this->view('shared/footer'); ?>