<?php $this->view('shared/header','Register your account'); ?>
<div class="position-relative">
  	<div class="position-absolute top-0 end-0">
  			<a href='/User/logout' class="btn btn-primary" href="#" role="button">Logout</a>
  	</div>
</div>

<h1>User Profile</h1>

<div class="position-relative">
  			<a href='/Profile/index' class="btn btn-primary" href="#" role="button">Profile</a>
</div>

<h2>Messages</h2>

<table class="table table-hover">
  	<thead>
    	<tr>
      	<th scope="col">Sender</th>
      	<th scope="col">Receiver</th>
      	<th scope="col">Message</th>
      	<th scope="col">Time</th>
      	<th scope="col">Action</th>
    	</tr>
  	</thead>

  	<tbody>
		<?php 
			foreach ($data as $message) {
				echo 
				"<tr>
		      		<td>$message->sender_name</td>
		      		<td>$message->receiver_name</td>
		      		<td>$message->message</td>
		      		<td>$message->timestamp</td>
		      		<td><a href='/Message/delete/$message->message_id'>Delete</a></td>
		    	</tr><br>";
			}
		?>
	</tbody>
</table>

<h4>Send a message using the following form</h4>

<form action="/Message/send" method="post">
	<div class="form-group">
	    <label for="exampleFormControlInput1">To:</label><br>
	    <input type="text" name="receiver">
	</div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message:</label>
    <textarea class="form-control" name="message" rows="3"></textarea><br>
  </div>
  <input type="submit" name="action" value="Send Message">
</form>


<?php $this->view('shared/footer'); ?>