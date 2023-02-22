<?php $this->view('shared/header','Edit Your Profile'); ?>

<div class="position-relative">
  	<div class="position-absolute top-0 end-0">
  			<a href='/User/index' class="btn btn-primary" href="#" role="button">Back</a>
  	</div>
</div>
<h1>Edit Profile</h1>
<form action="/Profile/edit" method="post">
	<div class="form-group">
	    <label for="exampleFormControlInput1">First Name:<br><input type="text" name="first_name" value='<?=$data->first_name?>'></label><br>
	    <label for="exampleFormControlInput1">Middle Name:<br><input type="text" name="middle_name" value='<?=$data->middle_name?>'></label><br>
	    <label for="exampleFormControlInput1">Last Name:<br><input type="text" name="last_name" value='<?=$data->last_name?>'></label><br>
	</div><br>
  <input type="submit" name="action" value="Save">
</form>

<?php $this->view('shared/footer'); ?>