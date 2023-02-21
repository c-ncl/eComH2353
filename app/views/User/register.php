<?php $this->view('shared/header','Register your account'); ?>

<h2>Register your account</h2>
<form method="post" action="">
	<label>Username: </label><input type="text" name="username"><br><br>
	<label>Password: </label><input type="password" name="password"><br><br>
	<input type="submit" name="action" value='Register'><br><br>
	Already have an account?<a href="/User/index">Login</a>
</form>

<?php $this->view('shared/footer'); ?>