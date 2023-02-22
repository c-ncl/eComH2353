<?php $this->view('shared/header','Create Your Profile'); ?>

<div class="position-relative">
  	<div class="position-absolute top-0 end-0">
  			<a href='/User/profile' class="btn btn-primary" href="#" role="button">Back</a>
  	</div>
</div>
<h1>Create Profile</h1>
<form action="/Profile/create" method="post">
	<div class="form-group">
	    <label for="exampleFormControlInput1">First Name:<br><input type="text" name="first_name"></label><br>
	    <label for="exampleFormControlInput1">Middle Name:<br><input type="text" name="middle_name"></label><br>
	    <label for="exampleFormControlInput1">Last Name:<br><input type="text" name="last_name"></label><br>
	</div><br>
  <input type="submit" name="action" value="Create">
</form>

<?php $this->view('shared/footer'); ?>