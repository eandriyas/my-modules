
 <h2>Add new Menu</h2>

<?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>' ); ?>


<form action="<?php echo site_url('menu/submit'); ?>" method="post" >
  <div class="form-group">
    <label for="menu">Name Menu</label>
    <input autofocus name="menu" type="text" class="form-control" id="menu" value="<?php echo $this->input->post('menu'); ?>" placeholder="Enter Menu">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" value="<?php echo $this->input->post('description'); ?>" id="description" placeholder="Enter Descri"></textarea>
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