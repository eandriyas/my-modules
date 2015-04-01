
<a href="<?php echo site_url('menu/create'); ?>" class="btn btn-primary">Add new Menu</a>
<br><br>


<table class="table table-bordered">
      <thead>
        <tr>
          <th>No.</th>
          <th>Menu</th>
          <th>Description</th>
          <th>Actions</th>
  
        </tr>
      </thead>
      <tbody>
      <?php $i = 1; foreach ($list_menu as $key):?>
        <tr>
          <th scope="row"><?php echo $i; ?></th>
          <td><?php echo $key['menu']; ?></td>
          <td><?php echo $key['description']; ?></td>
          <td><!-- Single button -->
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                Action <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo site_url('menu/edit'.'/'.$key['id']); ?>">Edit</a></li>
                <li><a href="<?php echo site_url('menu/remove'.'/'.$key['id']); ?>" onclick="return confirm('are you sure to delete this menu?')">Delete</a></li>
              </ul>
            </div>
          </td>
          
        </tr>
      <?php $i++; endforeach; ?>
        
      </tbody>
    </table>

