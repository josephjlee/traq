<div class="content">
	<h3><?php echo l('edit_ticket'); ?></h3>
	<form action="<?php echo Request::full_uri(); ?>" method="post">
		<?php show_errors($ticket->errors); ?>
		<div class="tabular box">
			<div class="group">
				<?php echo Form::label(l('description'), 'body'); ?>
				<textarea name="body"><?php echo $ticket->body; ?></textarea>
			</div>
		</div>
		<div class="actions">
			<input type="submit" value="<?php echo l('save'); ?>" />
		</div>
	</form>
</div>