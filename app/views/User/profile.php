<?php $this->view('shared/header','Register your account'); ?>

<h1>User Profile</h1>

<h2>Messages</h2>

<h4>My Messages</h4>

	<table>
		<tr>
			<th>Sender</th>
			<th>Receiver</th>
			<th>Message</th>
			<th>Time</th>
			<th>Action</th>
		</tr>
	</table>
	<?php 
		foreach ($data as $message) {
			echo 
			"<tr>
				<td>$message->sender</td>
				<td>$message->receiver</td>
				<td>$message->message</td>
				<td>$message->timestamp</td>
				<td><a href='/User/messageDelete/$message->message-id'>Delete</a></td>
			</tr><br>";
		}
	?>
	</table>

<h4>Send a message using the following form</h4>
<form action="/User/sendMessage" method="post">
	<label>To: <input type="text" name="receiver"></label><br/>
	<br><label>Message: <br><textarea name="message"></textarea></label><br><br>
	<input type="submit" name="action" value="Send Message">
</form>

<a href='/User/logout'>Logout</a>

<?php $this->view('shared/footer'); ?>