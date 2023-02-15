<?php $this->view('shared/header','User log book'); ?>
<form method="post" action="">
	<h3>Write your name to the Logbook</h3>
	<label>Write your name:</label>
	<input type="text" name="name"><br><br>
	<input type="submit" name="action" value='Write my name to the log'>
</form>

<?php $this->view('shared/footer'); ?>