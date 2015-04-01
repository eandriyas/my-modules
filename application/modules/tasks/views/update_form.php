<h2>Add new tasks</h2>

<?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>' ); ?>


<form action="<?php echo site_url('tasks/update'); ?>" method="post" >
<input type="hidden" value="<?php echo $id; ?>" name="id">
  <div class="form-group">
    <label for="title">Title</label>
    <input name="title" type="text" class="form-control" id="Title" value="<?php echo $title; ?>" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="priority">Priority</label>
    <input name="priority" type="number" min="0" class="form-control" value="<?php echo $priority; ?>" id="priority" placeholder="Enter Priority">
  </div>
  
  <button type="submit" class="btn btn-default">Update</button>
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