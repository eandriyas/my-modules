
 <h2>Edit Menu</h2>

<?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>' ); ?>


<form action="<?php echo site_url('menu/update'); ?>" method="post" >
  <div class="form-group">
    <label for="menu">Name Menu</label>
    <input name="menu" type="text" class="form-control" id="menu" value="<?php echo $menu; ?>" >
  </div>
  <div class="form-group">
    <label for="slug">SLug</label>
    <input autofocus name="slug" type="text" class="form-control" id="slug" value="<?php echo $slug; ?>" >
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" id="description" placeholder="Enter Descri"><?php echo $description; ?></textarea>
  </div>
  <input type="hidden" name="id" value="<?php echo $id; ?>">
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