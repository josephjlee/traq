<div class="content">
	<h2 id="page_title"><?php echo l('project_settings'); ?></h2>
</div>
<?php View::render('projectsettings/_nav'); ?>
<div class="content">
	<h3><?php echo l('new_repository'); ?></h3>
	<form action="<?php echo Request::full_uri(); ?>" method="post">
		<?php show_errors($repo->errors); ?>
		<div class="tabular box">
			<?php View::render('projectsettings/repositories/_form'); ?>
		</div>
		<div class="actions">
			<input type="submit" value="<?php echo l('create'); ?>" />
		</div>
	</form>
</div>