
 <h2>Login</h2>

<?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>' ); ?>


<form action="<?php echo site_url('menu/submit'); ?>" method="post" >
  <div class="form-group">
    <label for="username">Username</label>
    <input autofocus name="username" type="text" class="form-control" id="username" value="<?php echo $this->input->post('username'); ?>" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="description">Password</label>
    <input type="password" name="password" id="password" class="form-control" value="<?php echo $this->input->post('password'); ?>">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php 
	// echo form_open_multipart('tasks/submit', array('method' =>'post'));
	// echo "Title : ";
	// echo form_input('title', $title, 'class="form-control"');
	
	// echo "Priority : ";
	// echo form_input('priority', $priority, 'class="form-control"');
	
	// echo "<br>";

	// echo form_submit('submit', 'Submit');

	// echo form_close();


 ?>