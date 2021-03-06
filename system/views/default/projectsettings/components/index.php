<div class="content">
	<h2 id="page_title"><?php echo l('project_settings'); ?></h2>
</div>
<?php View::render('projectsettings/_nav'); ?>
<div class="content">
	<?php echo HTML::link(l('new_component'), "{$project->slug}/settings/components/new", array('class' => 'button_new', 'data-overlay' => true)); ?>
</div>
<div>
	<table class="list">
		<thead>
			<tr>
				<th class="component_name"><?php echo l('name'); ?></th>
				<th class="actions"><?php echo l('actions'); ?></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($components->exec()->fetch_all() as $component) { ?>
			<tr>
				<td><?php echo HTML::link($component->name, "{$project->slug}/settings/components/{$component->id}/edit", array('data-overlay' => true)); ?></td>
				<td>
					<?php echo HTML::link(l('edit'), "{$project->slug}/settings/components/{$component->id}/edit", array('class' => 'button_edit', 'data-overlay' => true)); ?>
					<?php echo HTML::link(l('delete'), "{$project->slug}/settings/components/{$component->id}/delete", array('class' => 'button_delete', 'data-confirm' => l('confirm.delete_x', $component->name))); ?>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>