<?php $this->view('shared/header','Log into your account'); ?>


<h2>Log into your account</h2>

<form method="post" action="">
	<label>Username:</label><input type="text" name="username"><br><br>
	<label>Password:</label><input type="password" name="password"><br><br>
	<input type="submit" name="action" value='Login'><br><br>
	Don't already have an account?<a href="/User/register">Register</a>
</form>

<?php $this->view('shared/footer'); ?>