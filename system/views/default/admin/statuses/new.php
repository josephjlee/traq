<div class="content">
	<h3><?php echo l('new_status'); ?></h3>
	<form action="<?php echo Request::full_uri(); ?>" method="post">
		<?php show_errors($status->errors); ?>
		<div class="tabular box">
			<?php View::render('admin/statuses/_form'); ?>
		</div>
		<div class="actions">
			<input type="submit" value="<?php echo l('create'); ?>" />
		</div>
	</form>
</div>