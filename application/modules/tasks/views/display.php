
<a href="<?php echo site_url('tasks/create'); ?>" class="btn btn-primary">Add new task</a>
<br><br>


<div class="list-group">

<?php foreach ($results as $key):?>
	
  <a href="#" class="list-group-item"><?php echo $key['priority']; ?>...<?php echo $key['title']; ?>  
  	<a href="<?php echo site_url('tasks/edit/').'/'.$key['id']; ?>" class="btn btn-primary">Edit</a> 
  	<a href="<?php echo site_url('tasks/remove/').'/'.$key['id']; ?>" class="btn btn-danger" onclick="return confirm('are you sure to delete this record??')" >Remove</a> 
  	<?php //echo anchor('tasks/remove/'.$key['id'], 'Delete', array('class'=>'btn btn-danger', 'onclick'=>"return confirmDialog();")); ?>

  </a>
  <?php endforeach; ?>
</div>
<?php //echo $this->pagination->create_links(); ?>
<nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php foreach ($links as $link) {
		echo  $link;
	} ?>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>



