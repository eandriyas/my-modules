<div class="list-group">
	<a href="<?php echo site_url('menu/') ?>" class="list-group-item active">
		Menu
	</a>

	<?php foreach ($view_menu as $key):?>
	<a href="<?php echo site_url($key['slug']); ?>" class="list-group-item"><?php echo $key['menu']; ?></a>
<?php endforeach; ?>
</div>