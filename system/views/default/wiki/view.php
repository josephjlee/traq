<?php View::render('wiki/_nav'); ?>
<div class="wiki content">
	<div id="head">
		<h2 id="page_title"><?php echo $page->title; ?></h2>
		<ul id="wiki_actions">
		<?php if (current_user()->permission($project->id, 'create_wiki_page')) { ?>
			<li><?php echo HTML::link(l('new_page'), $project->href('wiki/_new'), array('class' => 'button_new')); ?></li>
		<?php } ?>
		<?php if (current_user()->permission($project->id, 'edit_wiki_page')) { ?>
			<li><?php echo HTML::link(l('edit_page'), $page->href('_edit'), array('class' => 'button_edit')); ?></li>
		<?php } ?>
		</ul>
	</div>
	<?php echo format_text($page->body); ?>
</div>